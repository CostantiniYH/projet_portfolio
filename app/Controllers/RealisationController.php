<?php 
namespace App\Controllers;

class RealisationController {
    
    public function index() {
        // Code pour afficher la liste des réalisations
        $titre = "Réalisations Professionnelles";
        ob_start();
        require_once __DIR__ . '/../Views/realisations.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }

}