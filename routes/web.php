<?php

use Illuminate\Support\Facades\Route;

Route::get('/news/view/{id}', [
    'middleware' => [],
    'uses' => 'App\Http\Controllers\NewsController@id'
]);

Route::get('/news/{key}', [
    'middleware' => [],
    'uses' => 'App\Http\Controllers\NewsController@key'
]);

Route::get('/news/all', [
    'middleware' => [],
    'uses' => 'App\Http\Controllers\NewsController@all'
]);
