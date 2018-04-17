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

Route::get('/dashboard/add-department', function () {
    return view('admin.add-department');
});
Route::get('/dashboard/add-faculty', function () {
    return view('admin.add-faculty');
});
Route::get('/dashboard/add-student', function () {
    return view('admin.add-student');
});
Route::get('/dashboard/add-course', function () {
    return view('admin.add-course');
});
Route::get('/dashboard/add-admin', function () {
    return view('admin.add-admin');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
