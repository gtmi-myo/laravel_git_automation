<?php

use Illuminate\Support\Facades\Route;

Route::get('/something', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return Admin::get(1);
});
