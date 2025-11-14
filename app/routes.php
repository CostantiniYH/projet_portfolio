<?php
declare (strict_types=1);

switch ($uri) {
    case '/':
        $controller = new App\Controllers\HomeController();
        $controller->index();
        break;
    
    case '/presentation':
        $controller = new App\Controllers\HomeController();
        $controller->index();
        break;
        
    case '/portfolio':
        $controller = new App\Controllers\PortfolioController();
        $controller->index();
        break;
    
    case '/realisations':
        $controller = new App\Controllers\RealisationController();
        $controller->index();
        break;
    
    case '/activites':
        $controller = new App\Controllers\ActiviteController();
        $controller->index();
        break;
    
    case '/projets':
        $controller = new App\Controllers\ProjetController();
        $controller->index();
    break;

    case '/cybersecurite':
        $controller = new App\Controllers\ProjetController();
        $controller->index();
        break;

    case '/veille-technologique':
        $controller = new App\Controllers\ProjetController();
        $controller->index();
        break;
        
    case '/expertises':
        $controller = new App\Controllers\ProjetController();
        $controller->expertises();
        break;
            
    case '/annexes':
        $controller = new App\Controllers\AnnexeController();
        $controller->index();
        break;
        


    case '/politique':
        $controller = new App\Controllers\HomeController();
        //$controller->politique();
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
