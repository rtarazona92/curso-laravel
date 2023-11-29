<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'landing.index')->name('index');
Route::view('/about', 'landing.about')->name('about');


/*
Route::get('mi/ruta', ControladorDeRuta);
Route::post('mi/ruta', ControladorDeRuta);
Route::put('mi/ruta', ControladorDeRuta);
Route::delete('mi/ruta', ControladorDeRuta);
Route::patch('mi/ruta', ControladorDeRuta);
*/