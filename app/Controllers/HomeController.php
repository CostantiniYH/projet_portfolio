<?php
namespace App\Controllers;
use App\Classes\Fruit;
class HomeController {
    public function index() {
        $projets = [
            ["title" => "Portfolio", "desc" => "Site perso en php"],
            ["title" => "blog", "desc" => "Mini blog avec MySql"]
        ];
        $apple = new Fruit();
        $apple->set_name('Pomme');
        $apple->set_form('Ronde');
        $apple->set_color('Verte');
        
        $titre = "Accueil";
        ob_start();
        require_once __DIR__ . '/../Views/accueil.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/layout.php';

    }
}