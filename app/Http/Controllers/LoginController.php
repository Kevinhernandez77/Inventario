<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LoginController
{
    // Método para renderizar el formulario de login
    public function index()
    {
        return view("login");
    }

    // Método para verificar las credenciales del usuario
    public function login(Request $request)
    {
        // Obtener los datos del formulario
        $usuario = $request->input('email');
        $password = $request->input('password');

        // Definir credenciales correctas (sin base de datos, solo por ejemplo)
        $usuarioCorrecto = 'admin';
        $passwordCorrecta = '12345';

        // Validar las credenciales
        if ($usuario === $usuarioCorrecto && $password === $passwordCorrecta) {
            // Credenciales correctas, redirigir a la vista 'home'
            return redirect()->route('home');
        } else {
            // Credenciales incorrectas, volver a la página de login con un error
            return back()->withErrors(['error' => 'Usuario o contraseña incorrectos']);
        }
    }
}
