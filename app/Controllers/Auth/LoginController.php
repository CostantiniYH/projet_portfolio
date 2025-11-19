<?php
namespace App\Controllers\Auth;


class LoginController {
    
    public function formulaireConnexion() {
        $titre = "Connexion";
        ob_start();
        require_once __DIR__ . '/../../Views/auth/login.php';
        $content = ob_get_clean();
        require __DIR__ . '/../../Views/partials/layout.php';
    }

}