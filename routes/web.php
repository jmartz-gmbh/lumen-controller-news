<?php

use Illuminate\Support\Facades\Route;

Route::get('/news/id/{id}', [
    'middleware' => [],
    'uses' => 'App\Http\Controllers\NewsController@id'
]);

Route::get('/news/key/{key}', [
    'middleware' => [],
    'uses' => 'App\Http\Controllers\NewsController@key'
]);

Route::get('/news/latest', [
    'middleware' => [],
    'uses' => 'App\Http\Controllers\NewsController@latest'
]);
