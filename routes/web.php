<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\medicamentoController;
use App\Http\Controllers\UserController;//php artisan make:controller UserController
use App\Http\Controllers\LoginController;//php artisan make:controller LoginController

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
    return view('principal');
})->middleware('auth')->name('/');

Route::get('/login', function () {
    return view('principal');
})->name('login')->middleware('guest');

Route::get('/producto', function () {
    return view('producto');
})->middleware('auth')->name('producto');


Route::get('/register', function () {
    return view('register');
})->name('register');


Route::get('/categoria', [CategoriaController::class,'index']);
Route::get('/categoria/crear', [CategoriaController::class,'create']);
Route::post('/categoria/guardar', [CategoriaController::class,'store']);
Route::get('/categoria/editar/{id}', [CategoriaController::class,'edit']);
Route::put('/categoria/actualizar/{id}', [CategoriaController::class,'update']);
Route::delete('/categoria/eliminar/{categoria}', [CategoriaController::class,'destroy']);


Route::get('/producto', [ProductoController::class,'index']);
Route::get('/producto/crear', [ProductoController::class,'create']);
Route::post('/producto/guardar', [ProductoController::class,'store']);
Route::get('/producto/editar/{id}', [ProductoController::class,'edit']);
Route::put('/producto/actualizar/{id}', [ProductoController::class,'update']);
Route::delete('/producto/eliminar/{producto}', [ProductoController::class,'destroy']);


Route::get('/cliente', [ClienteController::class,'index']);
Route::get('/cliente/crear', [ClienteController::class,'create']);
Route::post('/cliente/guardar', [ClienteController::class,'store']);
Route::get('/cliente/editar/{id}', [ClienteController::class,'edit']);
Route::put('/cliente/actualizar/{id}', [ClienteController::class,'update']);
Route::delete('/cliente/eliminar/{cliente}', [ClienteController::class,'destroy']);

Route::get('/medicamento', [medicamentoController::class,'index']);
Route::get('/medicamento/crear', [medicamentoController::class,'create']);
Route::post('/medicamento/guardar', [medicamentoController::class,'store']);
Route::get('/medicamento/editar/{id}', [medicamentoController::class,'edit']);
Route::put('/medicamento/actualizar/{id}', [medicamentoController::class,'update']);
Route::delete('/medicamento/eliminar/{medicamento}', [medicamentoController::class,'destroy']);

//Route::post('/register', [UserController::class, 'create']);
Route::post('/login', [LoginController::class, 'login']);
Route::put('/login', [LoginController::class, 'logout']);


// Route::get('/categoria', function () {
//     return view('categorias.index');
// });