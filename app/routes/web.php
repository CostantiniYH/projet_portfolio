<?php
use App\Core\Route;

Route::get('/', 'IndexController@index');
Route::get('/presentation', 'IndexController@index');
Route::get('/realisations', 'IndexController@realisation');
Route::get('/activites', 'IndexController@IndexActivite');
Route::get('/activite_1', 'IndexController@activite1');
Route::get('/activite_2', 'IndexController@activite2');
Route::get('/activite_3', 'IndexController@activite3');
Route::get('/activite_4', 'IndexController@activite4');

Route::get('/projets', 'IndexController@indexProjet');
Route::get('/projet_1', 'IndexController@projet1');
Route::get('/projet_2', 'IndexController@projet2');
Route::get('/cybersecurite', 'IndexController@cybersecurite');
Route::get('/veille-technologique', 'IndexController@veille');
Route::get('/contact', 'IndexController@contact');
Route::get('/cours', "IndexController@cours");