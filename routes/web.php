<?php

use App\Http\Controllers\DeportesController;
use App\Http\Controllers\PaginasController;
use App\Http\Controllers\EjemploController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Ejemplo3Controller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [PaginasController::class, 'inicio']);
// Route::get('/inicio', [PaginasController::class, 'inicio']);
Route::redirect('/inicio', '/');

Route::get('/serveis-web', [PaginasController::class, 'serveisweb']);
Route::get('/formation-business-help', [PaginasController::class, 'fbh']);
Route::get('/contacto', [PaginasController::class, 'contacto']);
Route::get('/deportes', [DeportesController::class, 'index']);


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/inicio', [EjemploController::class, 'inicio']);

// Route::get('/user/{id}', [UserController::class, 'show']);

// Route::get('/index', [Ejemplo3Controller::class, 'index']);
// Route::get('/create/{id}', [Ejemplo3Controller::class, 'create']);
// Route::get('/contacto', function () {
//     return "Estas en el formulario de contacto";
// });

// Route::get('/post/{id}/{nombre}', function ($id, $nombre) {
//     return "Este es el post con la id: " . $id . " y el nombre del autor es " . $nombre;
// })->where('nombre','[a-zA-Z]+');