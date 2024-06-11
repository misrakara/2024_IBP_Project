<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('website');
});

Route::get('/tarifler', function () {
    return view('tarifler');
});

Route::get('/hakkimizda', function () {
    return view('hakkimizda');
});

Route::get('/kullaniciasci', function () {
    return view('kullaniciasci');
});
