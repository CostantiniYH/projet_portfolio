<?php
namespace App\Controllers;

class HomeController {
    public function index() {
        $projets = [
            ["title" => "Portfolio", "desc" => "Site perso en php"],
            ["title" => "blog", "desc" => "Mini blog avec MySql"]
        ];

        require_once __DIR__ . '/../Views/accueil.php';
    }
}