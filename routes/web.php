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
//Home login
Route::view("/","home_ingreso")->name("home_ingreso");
//RT Usuarios
Route::view("/rdi_registro","rdi_registro")->name("rdi_registro");
//RT Admin