<?php
namespace App\Controllers;

use App\Classes\Fruit;
use App\Classes\Etat_nation;

class HomeController {

    public function index() {
        $apple = new Fruit();
        $apple->set_name('Pomme');
        $apple->set_forme('Ronde');
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

    public function politique() {
        $titre = "Politique";
        $cite = new Etat_nation("France", 67000000, 643801);
        ob_start();
        require_once __DIR__ . '/../Views/politique.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }
}