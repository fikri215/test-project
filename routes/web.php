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
});

Auth::routes();


Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/user', 'UserController@index')->name('index-user');
    Route::get('/user/add', 'UserController@create')->name('create-user');
    Route::post('/user', 'UserController@store')->name('store-user');
    Route::get('/user/{id}/edit', 'UserController@edit')->name('edit-user');
    Route::put('users/{id}', 'UserController@update')->name('update-user');
    Route::delete('users/{id}', 'UserController@destroy')->name('delete-user');

});
