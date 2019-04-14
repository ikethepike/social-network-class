<?php

Route::resource('authors', 'AuthorController');

Route::resource('posts', 'PostController');

Route::put('posts/upvote', 'PostController@upvote');
