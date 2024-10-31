<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\categoriaController;
use App\Http\Controllers\clientesController;
use App\Http\Controllers\productoController;
use App\Http\Controllers\tareasController; 


use App\Http\Controllers\AuthController;

Route::get('/tareas', function () {
    return view('tareas');
})->name('tareas');

// Ruta para el formulario de login renderizar el formulario de login
Route::get('/', [LoginController::class, 'index'])->name('login');
//Ruta para verificar las credenciales del usuario
Route::post('/login', [LoginController::class, 'login'])->name('verificar-usuario');
// Ruta para la vista home después de un login exitoso
Route::get('/home', function () {
    return view('home');
})->name('home');
// proveedores
Route::get('/nuevo_proveed', [proveedoresController::class, 'index'])->name('proveedores.nuevo');
Route::get('/mostrar_proved', [proveedoresController::class, 'mostrar'])->name('proveedores.mostrar');
Route::delete('/mostrar_proved/{id}', [ProveedoresController::class,'destroy'])->name('proveedores.destroy');
Route::post('/nuevo_proveed', [proveedoresController::class, 'store'])->name('proveedores.store');

// categorias
Route::get('/nueva_categ', [categoriaController::class, 'index'])->name('categoria.nuevo');
Route::get('/mostrar_categ', [categoriaController::class, 'mostrar'])->name('categoria.mostrar');
Route::delete('/mostrar_categ/{categoria_id}', [categoriaController::class, 'destroy'])->name('categoria.destroy');
Route::post('/nueva_categ', [categoriaController::class, 'store'])->name('categoria.store');


//clientes
Route::get('/nuevo_cliente', [clientesController::class, 'index'])->name('cliente.nuevo');
Route::get('/mostrar_cliente', [clientesController::class, 'mostrar'])->name('cliente.mostrar');
Route::delete('/mostrar_cliente/{id}', [clientesController::class, 'destroy'])->name('cliente.destroy');
Route::post('/nuevo_cliente', [clientesController::class, 'store'])->name('cliente.store');


//productos
Route::get('/nuevo_prodt', [productoController::class, 'index'])->name('producto.nuevo');
Route::get('/mostrar_prodt', [productoController::class, 'mostrar'])->name('producto.mostrar');
Route::delete('/mostrar_prodt/{producto_id}', [productoController::class, 'destroy'])->name('producto.destroy');





