<?php

use Illuminate\Support\Facades\Route;

Route::prefix('auth')->namespace('Auth')->group(function () {
    Route::post('register', 'RegisterController@register');

    Route::post('login', 'LoginController@login');
});
