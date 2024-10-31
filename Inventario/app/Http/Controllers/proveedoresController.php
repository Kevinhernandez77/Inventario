<?php

namespace App\Http\Controllers;
use App\Models\proveedores;
use Illuminate\Http\Request;

class proveedoresController 
{
    public function index()
    {
        
        return view('nuevo_proveed');
    }
    public function mostrar()
    {
        $proveedores = proveedores::all();
        return view('mostrar_proved', ['proveedores' => $proveedores]);
    }
    public function destroy($id){
        $proveedor=proveedores::findOrFail($id);
        if ($proveedor) {
            // Eliminar el registro
            $proveedor->delete();
            // Redirigir a la vista de listado de proveedores con un mensaje de éxito
            return redirect()->route('proveedores.mostrar')->with('success', 'Proveedor eliminado con éxito.');
        } else {
            // Redirigir con un mensaje de error si no se encuentra el registro
            return redirect()->route('proveedores.mostrar')->with('error', 'No se pudo encontrar el proveedor.');
        }
    }

    public function store(Request $request)
    {
        // Validación de los datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:15', // Ajusta el tamaño según tu requerimiento
            'email' => 'required|email|max:255',
        ]);

        // Crear un nuevo proveedor
        $proveedor = new Proveedores();
        $proveedor->nombre = $request->nombre;
        $proveedor->direccion = $request->direccion;
        $proveedor->telefono = $request->telefono;
        $proveedor->email = $request->email;

        // Guardar el proveedor en la base de datos
        $proveedor->save();

        // Redirigir a donde sea necesario, con un mensaje de éxito
        return redirect()->route('proveedores.mostrar')->with('success', 'Proveedor creado con éxito.');
    }
    

    
}
