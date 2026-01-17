<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Rutas web del proyecto Colonia Limpia
|--------------------------------------------------------------------------
| Aquí se definen las vistas principales del proyecto
|
*/

// INICIO / PRESENTACIÓN DEL PROYECTO
Route::get('/', function () {
    return view('welcome');
})->name('inicio');

// FASE 3 - ORGANIZACIÓN (PLAN DE ACCIÓN)
Route::get('/fase3', function () {
    return view('fase3');
})->name('fase3');

// FASE 4 - DIRECCIÓN (DIVISIÓN DEL TRABAJO)
Route::get('/fase4', function () {
    return view('fase4');
})->name('fase4');

// FASE 5 - CONTROL (DIAGRAMA DE GANTT)
Route::get('/fase5', function () {
    return view('fase5');
})->name('fase5');
