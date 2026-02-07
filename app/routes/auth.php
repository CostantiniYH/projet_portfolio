<?php
use App\Core\Route;
use App\Middlewares\AuthMiddleware;
use App\Middlewares\GuestMiddleware;


Route::middleware(['guest'])->get('/register', 'AuthController@formRegister');
Route::post('/register', 'AuthController@register');

Route::get('/login', 'AuthController@formLogin');
Route::post('/login', 'AuthController@login');

Route::middleware(['auth'])->get("/logout", "AuthController@logout");