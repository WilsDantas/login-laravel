<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/auth/register', 'Api\Auth\AuthController@register');
Route::post('/auth/token', 'Api\Auth\AuthController@auth');

