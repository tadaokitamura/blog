<?php

Route::resource('/posts', 'PostsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
