<?php
namespace App\Models;

class Etat_nation {
    public $nom;
    public $population;
    public $superficie;

    public function __construct($nom, $population, $superficie) {
        $this->nom = $nom;
        $this->population = $population;
        $this->superficie = $superficie;

    }


    function set_nom($nom) {
        $this->nom = $nom;
    }
    function set_population($population) {
        $this->population = $population;
    }
    function set_superficie($superficie) {
        $this->superficie = $superficie;
    }
    function get_nom() {
        return $this->nom;
    }
    function get_population() {
        return $this->population;
    }
    function get_superficie() {
        return $this->superficie;
    }
}