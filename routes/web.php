<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('tablero.es.tablero');
})->name('tablero');


Route::namespace('Tablero')->group(function ()
{    
    Route::any('buscar-empleados', 'EmpleadoController@buscarEmpleados')->name('buscar.empleados');
    Route::resource('usuarios', 'UsuarioController');
    Route::resource('empleados', 'EmpleadoController');
});


require __DIR__.'/auth.php';
