<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Fakultas', function () {
    return view('Fakultas.list-fakultas');
});

Route::get('/Fakultass', function () {
    return view('Fakultas.edit-fakultas');
});

Route::get('/Fakultas-detail', function () {
    return view('Fakultas.detail-fakultas');
});
