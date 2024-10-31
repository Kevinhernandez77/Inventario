<?php

namespace App\Http\Controllers;
use App\Models\producto;
use Illuminate\Http\Request;

class productoController{
    public function index()
    {
        
        return view('nuevo_prodt');
    }
    public function mostrar()
    {
        $productos = Producto::with(['categoria', 'proveedor'])->get();
        return view('mostrar_prodt', compact('productos'));
    }

    public function destroy($producto_id){
        $producto=producto::findOrFail($producto_id);
        $producto->delete();
        return redirect()->route('mostrar_prodt.mostrar')->with('success', 'Producto eliminado correctamente');
    }

}
