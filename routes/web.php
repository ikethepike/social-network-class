<?php

// Resource Routes for author
// -- Return a listing of all authors
Route::get('authors', 'AuthorController@index');

// -- Return a specific author
Route::get('authors/{id}', 'AuthorController@show');

// -- Create a new author
Route::post('authors', 'AuthorController@store');

// -- Update an existing author
Route::put('authors/{id}', 'AuthorController@update');

// -- Delete an author
Route::delete('authors/{id}', 'AuthorController@delete');

// Resource Routes for author
// -- Return a listing of all posts
Route::get('posts', 'PostController@index');

// -- Return a specific post
Route::get('posts/{id}', 'PostController@show');

// -- Create a new post
Route::post('posts', 'PostController@store');

// -- Update an existing post
Route::put('posts/{id}', 'PostController@update');

// -- Delete an post
Route::delete('posts/{id}', 'PostController@delete');

// -- Upvote a post
Route::put('posts/upvote/{id}', 'PostController@upvote');

// Ball Game Leaderboard Routes

// -- Create a new Game 
Route::post('game', 'GameController@store');

// -- Return top 10 games
Route::get('games', 'GameController@index');

