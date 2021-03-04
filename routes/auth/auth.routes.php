<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', 'AuthController@index')->name('login');
Route::prefix('auth')->group(function () {
    Route::post('login', 'AuthController@login')->name('auth.login');
    Route::post('logout', 'AuthController@logout')->middleware('auth')->name('auth.logout');
});