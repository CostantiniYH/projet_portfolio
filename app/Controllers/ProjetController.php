<?php
namespace App\Controllers;

class ProjetController {
    
    public function index() {
        $titre = "Projets";
        ob_start();
        require_once __DIR__ . '/../Views/projets.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }
}