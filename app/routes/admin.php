<?php
use App\Core\Route;

Route::get('/users', 'Admin/AdminController@liste');

Route::get('/ajout-ressource', 'Admin/AdminController@addFile');
