<?php
namespace App\Controllers;

class ProjetController {
    public function index() {
        $projets = [
            ["title" => "Portfolio", "desc" => "Site perso en php"],
            ["title" => "blog", "desc" => "Mini blog avec MySql"]
        ];
        $titre = "Projets";
        ob_start();
        require_once __DIR__ . '/../Views/projets.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }

    public function expertises() {
        $expertises = [
            ["title" => "Développement Web", "desc" => "Création de sites web modernes et responsives."],
            ["title" => "SEO", "desc" => "Optimisation pour les moteurs de recherche."],
            ["title" => "Design UX/UI", "desc" => "Conception d'interfaces utilisateur intuitives."]
        ];

        $titre = "Expertises";
        ob_start();
        require_once __DIR__ . '/../Views/expertises.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }
}