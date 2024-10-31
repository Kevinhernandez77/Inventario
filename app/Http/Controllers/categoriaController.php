<?php

namespace App\Http\Controllers;
use App\Models\categoria;
use Illuminate\Http\Request;

class categoriaController{

    public function index(){
        return view('nueva_categ');
    }

    public function mostrar(){
        $categorias = categoria::all();
        return view('mostrar_categ', ['categorias' => $categorias], compact('categorias'));
        

    }
    public function destroy($categoria_id){
        $categorias = categoria::findOrFail($categoria_id);
        if ($categorias) {
            $categorias->delete();
            return redirect()->route('categoria.mostrar')->with('success', 'Categoría eliminada con éxito.');
        } else {
            return redirect()->route('categoria.mostrar')->with('error', 'No se pudo encontrar la categoría.');
        }
    }
    public function create(Request $request){
        return view('nueva_categ');

    }
    public function store(Request $request) {
        // Validar los datos del formulario
    $request->validate([
        'nombre' => 'required|string|max:255',
        'descripcion' => 'nullable|string',
    ]);

    // Crear una nueva categoría
    Categoria::create([
        'nombre' => $request->input('nombre'),
        'descripcion' => $request->input('descripcion'),
    ]);

    // Redirigir a la vista de listado con mensaje de confirmación
    return redirect()->route('categoria.mostrar')->with('success', 'Categoría creada con éxito.');
    }

}