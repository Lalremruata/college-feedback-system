<?php

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/admin-login', function () {
    return view('admin.login');
})->name('admin-login');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');
