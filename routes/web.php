<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotasController;


Route::get('/', function () {
    return view('welcome');
});

/* Route::get('/notas', function () {
    return view('notas');
});

Route::get('/matricula', function () {
    return view('matricula');
});


Route::get('/editar', function () {
    return view('editarnotas');
}); */

Route::get('/mostrar', [NotasController::class, 'index']);
Route::get('/crear', [NotasController::class, 'crear']);
Route::get('/editar', [NotasController::class, 'editar']);
Route::get('/eliminar', [NotasController::class, 'eliminar']);
