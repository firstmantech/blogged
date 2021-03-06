<?php

use Illuminate\Support\Facades\Route;

// Blogged Articles...
Route::get('/articles', 'ArticleController@index');
Route::post('/articles', 'ArticleController@store');
Route::get('/articles/{article}', 'ArticleController@show');
Route::put('/articles/{article}', 'ArticleController@update');
Route::delete('/articles/{article}', 'ArticleController@destroy');

// Blogged Categories...
Route::get('/categories', 'CategoryController@index');
Route::post('/categories', 'CategoryController@store');
Route::put('/categories/{category}', 'CategoryController@update');
Route::delete('/categories/{category}', 'CategoryController@destroy');

// Blog Images Uploads..
Route::post('/images', 'ImageController@store');
Route::delete('/images', 'ImageController@destroy');