<?php
declare (strict_types=1);

switch ($uri) {
    case '/':
        $controller = new App\Controllers\HomeController();
        $controller->index();
        break;
    
    case '/contact':
        $controller = new App\Controllers\ContactController();
        $controller->index();
        break;

    case '/projets':
        $controller = new App\Controllers\ProjetController();
        $controller->index();
        echo "Liste des projets";
        break;

    default:
        header("HTTP/1.0 404 Not Found");
        echo "404 - Page non trouvée";
        break;
}
