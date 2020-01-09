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

// Route Index
Route::get('/', function () {
    return view('index');
});

// Route Auth
Auth::routes(['verify' => true]);

Route::get('/profile', 'Users\UserController@index')->name('profile')->middleware('verified');
// Route::get('/send', 'Auth\MailController@send'); - второй способ при регистрации отправка на email

// Route User

Route::get('/profile/{id}/edit', 'Users\UserController@edit');
Route::put('/profile/{id}/update', 'Users\UserController@update');

// Route list

Route::get('/list', 'Users\ListController@index')->name('list');
Route::get('/profile/{id}/show', 'Users\ListController@show');
