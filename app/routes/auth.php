<?php
use App\Core\Route;
use App\Middlewares\AuthMiddleware;


Route::get('/register', 'AuthController@formRegister', ['GuestMiddleware']);
Route::post('/register', 'AuthController@register');

Route::get('/login', 'AuthController@formLogin');
Route::post('/login', 'AuthController@login');

Route::get("/logout", "AuthController@logout", ["AuthMiddleware"]);


