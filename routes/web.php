<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', function () {
    return view('index');
});

Route::get('index/navbar', function () {
    return view('navbar');
});

Route::get('index/footer', function () {
    return view('footer');
});

Route::get('index/login', function () {
    return view('login');
});

Route::get('index/register', function () {
    return view('register');
});