<?php
use App\Core\Route;

Route::get('/', 'Public/IndexController@index');
Route::get('/presentation', 'Public/IndexController@index');
Route::get('/realisations', 'Public/IndexController@realisation');
Route::get('/activites', 'Public/IndexController@activite');
Route::get('/projets', 'Public/IndexController@projet');
Route::get('/cybersecurite', 'Public/IndexController@cybersecurite');
Route::get('/veille-technologique', 'Public/IndexController@veille');
Route::get('/contact', 'Public/IndexController@contact');