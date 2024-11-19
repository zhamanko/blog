<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/log-in', function () {
    return view('login');
});

Route::get('/sign-in', function () {
    return view('register');
});

Route::get('/all-avtors', function () {
    return view('all-avtors');
});

Route::get('/post-info', function () {
    return view('post-info');
});
