<?php

Route::resource('/posts', 'PostsController');
Route::get('/', 'PostsController@index')->name('home');
Route::post('/posts/search', 'PostsController@search')->name('posts.search');
