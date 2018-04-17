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

Route::get('/dashboard', 'adminController@dashboard');
Route::get('/dashboard/add-department', 'adminController@addDepartment');
Route::get('/dashboard/add-student', 'adminController@addStudent');
Route::get('/dashboard/add-faculty', 'adminController@addFaculty');
Route::get('/dashboard/add-course', 'adminController@addcourse');
Route::get('/dashboard/add-admin', 'adminController@addAdmin');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
