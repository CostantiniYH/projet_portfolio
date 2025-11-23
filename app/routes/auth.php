<?php
namespace App\Routes;
use App\Core\Route;

Route::get('/register', 'Auth/RegisterController@formRegister');
Route::post('/register', 'Auth/RegisterController@register');

Route::get('/login', 'Auth/LoginController@formLogin');
Route::post('/login', 'Auth/LoginController@login');


