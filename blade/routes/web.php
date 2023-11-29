<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('index');
Route::view('/about', 'about')->name('about');
Route::view('/carreras', 'carreras')->name('carreras');
Route::view('/admision', 'admision')->name('admision');
Route::view('/egresados', 'egresados')->name('egresados');
Route::view('/docs_gestion', 'docs-gestion')->name('documentos-de-gestion');
