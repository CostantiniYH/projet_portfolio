<?php
namespace App\Controllers;

class ProjetController {
    public function index() {
        $projets = [
            ["title" => "Portfolio", "desc" => "Site perso en php"],
            ["title" => "blog", "desc" => "Mini blog avec MySql"]
        ];
    }
}