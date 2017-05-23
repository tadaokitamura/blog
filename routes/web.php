<?php

route::get('/', 'PostsController@index');
Route::resource('/posts', 'PostsController');
