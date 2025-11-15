<?php 
namespace App\Controllers;

class VeilleController {
    
    public function index() {
        // Code pour afficher la liste des veilles
        $titre = "Veille technologique";
        ob_start();
        require_once __DIR__ . '/../Views/veille.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }

}