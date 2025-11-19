<?php
declare (strict_types=1);

use App\Core\Route;

Route::get('/', 'Public/IndexController@index');
Route::get('/presentation', 'Public/IndexController@index');
Route::get('/realisations', 'Public/IndexController@realisation');
Route::get('/activites', 'Public/IndexController@activite');
Route::get('/projets', 'Public/IndexController@projet');
Route::get('/cybersecurite', 'Public/IndexController@cybersecurite');
Route::get('/veille-technologique', 'Public/IndexController@veille');
Route::get('/annexes', 'Public/IndexController@annexe');
Route::get('/contact', 'Public/IndexController@contact');
Route::get('/ajout-ressource', 'Admin/RessourceController@index');

/*
    
    case '/ajout-ressource':
        $controller = new App\Controllers\Admin\RessourceController();
        $controller->index();
        break;
            
        default:
    header("HTTP/1.0 404 Not Found");
    echo "404 - Page non trouvée";
    break;
}*/
