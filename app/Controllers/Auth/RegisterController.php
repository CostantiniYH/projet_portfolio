<?php
namespace App\Controllers\Auth;

class RegisterController {
    
    public function formulaireInscription() {
        $titre = "Inscription";
        ob_start();
        require_once __DIR__ . '/../../Views/auth/register.php';
        $content = ob_get_clean();
        require __DIR__ . '/../../Views/partials/layout.php';
    }

}