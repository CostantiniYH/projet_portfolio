<?php
use App\Core\Route;


Route::middleware(['auth'])->get("/user/index", "UserController@index");
Route::get("/user/profile/{id}", "UserController@show");
Route::get("/user/", "UserController@create");
Route::get("/user/", "UserController@store");
Route::get("/user/", "UserController@edit");