<?php


Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts', 'PostsController@index')->name('home');
Route::resource('/posts', 'PostsController');
Route::post('/posts/search', 'PostsController@search')->name('posts.search');

Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/', 'HomeController@index')->name('home');
