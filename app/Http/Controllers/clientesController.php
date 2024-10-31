<?php

namespace App\Http\Controllers;
use App\Models\clientes;
use Illuminate\Http\Request;

class clientesController{
    public function index(){
        return view('nuevo_cliente');
    }

    public function mostrar(){
        $clientes = clientes::all();
        return view('mostrar_cliente', ['clientes' => $clientes], compact('clientes'));

    }
    public function destroy($id){
        $clientes = clientes::findOrFail($id);
      
        if ($clientes) {
            $clientes->delete();
            return redirect()->route('cliente.mostrar')->with('success', 'Cliente eliminado con éxito.');
        } else {
            return redirect()->route('cliente.mostrar')->with('error', 'No se pudo encontrar cliente.');
        }
    }

    public function store(Request $request){
        $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|numeric',
            'email' => 'required|email|max:255',
        ]);

         // Crear un nuevo cliente
         Clientes::create([
            'nombre' => $request->nombre,
            'direccion' => $request->direccion,
            'telefono' => $request->telefono,
            'email' => $request->email,
        ]);
        // Redirigir a la vista de listado con mensaje de confirmación
    return redirect()->route('cliente.mostrar')->with('success', 'Categoría creada con éxito.');


    }


    
    

    


}