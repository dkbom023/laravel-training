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

Route::get('demoone', 'DemoController@index');

Route::resource('photos', 'PhotoController')->only([
'index', 'show'
]);
Route::resource('photos', 'PhotoController')->except([
'create', 'store', 'update', 'destroy'
]);
Route::resource('admin/users', 'Admin\UsersController');
Route::get('login', 'LoginController@index')->name('login');
Route::get('logout', 'LoginController@logout');
Route::post('login', 'LoginController@authenticate');


Route::resource('admin/user', 'Admin\UsersController');
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('user', 'Admin\UsersController');
});

Route::get('/testlinenoti', 'DemoController@testlinenoti');
Route::get('/testexcel', 'DemoController@testexcel');

//testexcel