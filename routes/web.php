<?php

use Illuminate\Support\Facades\Route;

Route::get('/news/view/{id}', [
    'middleware' => [],
    'uses' => 'App\Http\Controllers\NewsController@view'
]);

Route::get('/news/all', [
    'middleware' => [],
    'uses' => 'App\Http\Controllers\NewsController@all'
]);
