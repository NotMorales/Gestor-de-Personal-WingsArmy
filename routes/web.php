<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('mesero', 'meseroController');

Route::resource('mesa', 'mesaController');
