<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    return view('top');
});

Route::get('/chat', function () {
    return view('chat.index');
});