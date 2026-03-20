<?php
use App\Core\Route;

Route::get('/', 'IndexController@index');
Route::get('/presentation', 'IndexController@index');

Route::get('/realisations', 'IndexController@realisations');
Route::get('/activites', 'IndexController@IndexActivite');
Route::get('/activites-ecole', 'IndexController@activiteEcole');
Route::get('/activites-entreprise', 'IndexController@activiteEntreprise');

Route::get('/E5', 'IndexController@E5');
Route::get('/E6', 'IndexController@E6');
Route::get('/cybersecurite', 'IndexController@cybersecurite');
Route::get('/veille-technologique', 'IndexController@veille');
Route::get('/contact', 'IndexController@contact');
Route::get('/a-propos', "IndexController@apropos");