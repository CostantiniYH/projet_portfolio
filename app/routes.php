<?php
declare (strict_types=1);

switch ($uri) {
    case '/':
        $controller = new App\Controllers\HomeController();
        $controller->index();
        break;
    
    case '/presentation':
        $controller = new App\Controllers\HomeController();
        $controller->presentation();
        break;
    
    case '/expertises':
        $controller = new App\Controllers\ProjetController();
        $controller->expertises();
        break;
        
        
    case '/projets':
        $controller = new App\Controllers\ProjetController();
        $controller->projets();
        break;

    case '/portfolio':
        $controller = new App\Controllers\PortfolioController();
        $controller->index();
        break;

    case '/politique':
        $controller = new App\Controllers\HomeController();
        $controller->politique();
        break;
    
    case '/contact':
        $controller = new App\Controllers\ContactController();
        $controller->index();
        break;
            
        default:
    header("HTTP/1.0 404 Not Found");
    echo "404 - Page non trouvée";
    break;
}
