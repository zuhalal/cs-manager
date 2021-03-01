<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', 'AuthController@index')->name('login');