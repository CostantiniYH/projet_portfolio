<?php 
namespace App\Controllers;

class CyberController {
    
    public function index() {
        // Code pour afficher la liste des veilles
        $titre = "Cybersécurité";
        ob_start();
        require_once __DIR__ . '/../Views/cybersecurite.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }

}