<?php
use App\Core\Route;

Route::get('/register', 'AuthController@formRegister');
Route::post('/register', 'AuthController@register');

Route::get('/login', 'AuthController@formLogin');
Route::post('/login', 'AuthController@login');


