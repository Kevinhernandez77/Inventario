<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tareasController
{
    public function index()
    {
        return view('tareas.index'); // Asegúrate de que esta vista existe
    }
}
