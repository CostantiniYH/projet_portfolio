<?php
namespace App\Controllers;

class ContactController {
    public function index() {
        $projets = [
            ["title" => "Portfolio", "desc" => "Site perso en php"],
            ["title" => "blog", "desc" => "Mini blog avec MySql"]
        ];

        $titre = "Contact";
        ob_start();
        require_once __DIR__ . '/../Views/contact.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }
}