<?php
use App\Core\Route;

Route::get('/users', 'Admin/AdminController@liste');

Route::get('/form-home', 'Admin/AdminController@formHome');
Route::get('/form-competences', 'Admin/AdminController@formCompetences');
Route::get('/ajout-ressource', 'Admin/AdminController@addFile');
