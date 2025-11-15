<?php
namespace App\Controllers;

class ContactController {
    public function index() {
        $titre = "Contact";
        ob_start();
        require_once __DIR__ . '/../Views/contact.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }
}