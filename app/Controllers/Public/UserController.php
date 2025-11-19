<?php
namespace App\Controllers\Public;
use App\Models\Classes\User;

class UserController {
    
    public function index() {
        $titre = "Users";
        ob_start();
        require_once __DIR__ . '/../../Views/public/users.php';
        $content = ob_get_clean();
        require __DIR__ . '/../../Views/partials/layout.php';
    }
}

