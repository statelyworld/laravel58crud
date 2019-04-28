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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('books', 'BookController');
Route::resource('products','ProductController');
Route::resource('contacts', 'ContactController');
Route::resource('crud','CrudsImgController');
Route::resource('/', 'WelcomeController');

Route::get('/post/{post}', function () {
  echo route('post.show', ['post' => 1]);
})->name('post.show');

Route::get('admin','AdminController@index');