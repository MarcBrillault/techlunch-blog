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

Route::get('/', 'HomeController@index')
    ->name('home');

Route::get('post/{id}', 'PostController@index')
    ->where('id', '[0-9]+')
    ->name('post');

Route::prefix('images')->group(function () {
    Route::get('posts/home/{id}.jpg', 'ImageController@postHome')
        ->where('id', '[0-9]+')
        ->name('imagePostHome');

    Route::get('posts/{id}.jpg', 'ImageController@post')
        ->where('id', '[0-9]+')
        ->name('imagePost');
});