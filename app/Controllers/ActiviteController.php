<?php 
namespace App\Controllers;

class ActiviteController {
    
    public function index() {
        // Code pour afficher la liste des activités
        $titre = "Activités";
        ob_start();
        require_once __DIR__ . '/../Views/activites.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }

}