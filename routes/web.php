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

//Home
Route::get('/home', 'HomeController@index')->name('home');

//Threads
Route::get('/threads', 'ThreadController@index');
Route::get('/threads/create', 'ThreadController@create');
Route::get('/threads/{channel}', 'ThreadController@index');
Route::get('/threads/{channel}/{thread}', 'ThreadController@show');
Route::post('/threads', 'ThreadController@store');

//Replies
Route::post('/threads/{channel}/{thread}/replies', 'ReplyController@store');

//Favorites
Route::post('/replies/{reply}/favorites', 'FavoriteController@store');

//Profiles
Route::get('/profiles/{user}', 'ProfileController@show');
