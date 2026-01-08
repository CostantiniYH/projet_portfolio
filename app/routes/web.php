<?php
use App\Core\Route;

Route::get('/', 'IndexController@index');
Route::get('/presentation', 'IndexController@index');
Route::get('/realisations', 'IndexController@realisation');
Route::get('/activites', 'IndexController@activite');
Route::get('/projet_1', 'IndexController@projet');
Route::get('/projet_2', 'IndexController@projet');
Route::get('/cybersecurite', 'IndexController@cybersecurite');
Route::get('/veille-technologique', 'IndexController@veille');
Route::get('/contact', 'IndexController@contact');