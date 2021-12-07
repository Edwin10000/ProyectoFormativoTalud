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
    return view('auth.login');
});

Auth::routes();

use App\Http\Controllers\ProveedoreController;
Route::resource('proveedores',App\Http\Controllers\ProveedoreController::class)->middleware('auth');
Route::POST('/proveedore/delete/{id}',[ProveedoreController::class, 'destroy'])->middleware('proveedore.index');
Route::GET('/proveedore/form/{id?}', [ProveedoreController::class, 'form'])->name('proveedore.form');

use App\Http\Controllers\marcaController;
Route::resource('marca',marcaController::class);

use App\Http\Controllers\MaterialeController;
Route::resource('materiales',MaterialeController::class);

Route::resource('entmateriales',App\Http\Controllers\EntMaterialeController::class)->middleware('auth');
use App\Http\Controllers\UsuarioController;
Route::resource('usuarios',App\Http\Controllers\UsuarioController::class)->middleware('auth');

Route::get('/usuario/formblade/{id?}', [UsuarioController::class, 'form'])->name('usuario.formblade');

Route::resource('obras',App\Http\Controllers\ObraController::class)->middleware('auth');

Route::resource('clientes',App\Http\Controllers\ClienteController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
