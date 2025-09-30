<?php
namespace App\Controllers;
use App\Classes\Fruit;
class HomeController {
    public function index() {
               $apple = new Fruit();
        $apple->set_name('Pomme');
        $apple->set_form('Ronde');
        $apple->set_color('Verte');
        
        $titre = "Accueil";
        ob_start();
        require_once __DIR__ . '/../Views/accueil.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';

    }

    public function presentation() {
        $titre = "Présentation";
        ob_start();
        require_once __DIR__ . '/../Views/presentation.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }
}