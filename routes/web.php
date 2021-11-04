<?php

use App\Http\Controllers\Admin\CategoriaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rutas de los formularios--------------------------------------------------------------
Route::get('/usuario', [App\Http\Controllers\ControllerFormularios::class, 'index' ])->name('formularios.usuario');
//------------------------------------------------------------------------------------------

//Rutas categorias ---------------------------------------------------------------------------
Route::resource('categorias', CategoriaController::class);
//------------------------------------------------------------------------------------------

//Rutas vista de usuarios----------------------------------------------------------------------
Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios.indexU');
Route::get('/usuarios/create', [UsuariosController::class, 'create'])->name('usuarios.createU');
Route::post('/usuarios/store', [UsuariosController::class, 'store'])->name('usuarios.storeU');
Route::get('/usuarios/edit/{id}', [UsuariosController::class, 'edit'])->name('usuarios.editU');
Route::put('/usuarios/update/{id}', [UsuariosController::class, 'update'])->name('usuarios.updateU');
//Route::delete('/usuarios/delete/{id}', [UsuariosController::class, 'delete'])->name('usuarios.deleteU');
//------------------------------------------------------------------------------------------




