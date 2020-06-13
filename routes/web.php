<?php

use Illuminate\Support\Facades\Route;

Route::get('/customer/news/{id}', [
    'middleware' => [],
    'uses' => 'App\Http\Controllers\NewsController@view'
]);
