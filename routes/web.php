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

Route::get('foo', function () {
    return view('hello world');
});

Route::resource('photos', 'PhotoController')->only([
'index', 'show'
]);
Route::resource('photos', 'PhotoController')->except([
'create', 'store', 'update', 'destroy'
]);
Route::resource('Admin/Users', 'Admin/UsersController');