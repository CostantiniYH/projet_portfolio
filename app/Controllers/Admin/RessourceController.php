<?php
namespace App\Controllers\Admin;
use App\Models\Classes\Ressource;

class RessourceController {
    
    public function index() {
        $mode = 'create';
        $titre = "Ressources Admin";
        ob_start();
        require_once __DIR__ . '/../../Views/admin/form.php';
        $content = ob_get_clean();
        require __DIR__ . '/../../Views/partials/layout.php';
    }
    

}
