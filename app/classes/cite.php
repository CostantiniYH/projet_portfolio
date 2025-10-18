<?php
namespace App\Classes;

class Cite {
    public $nom;
    public $population;
    public $superficie;
    public $maire;
    public $gouvernement;
    public $police;
    public $pib;
    public $dette;
    public $monnaie;
    public $langue;

    private Justice $justice;

    function __construct($justice) {
        $this->justice = new Justice();
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
    function set_maire($maire) {
        $this->maire = $maire;
    }
    function set_gouvernement($gouvernement) {
        $this->gouvernement = $gouvernement;
    }
    function set_police($police) {
        $this->police = $police;
    }
    function set_pib($pib) {
        $this->pib = $pib;
    }
    function set_dette($dette) {
        $this->dette = $dette;
    }
    function set_monnaie($monnaie) {
        $this->monnaie = $monnaie;
    }
    function set_langue($langue) {
        $this->langue = $langue;
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
    function get_maire() {
        return $this->maire;
    }
    function get_gouvernement() {
        return $this->gouvernement;
    }
    function get_police() {
        return $this->police;
    }
    function get_pib() {
        return $this->pib;
    }
    function get_dette() {
        return $this->dette;
    }
    function get_monnaie() {
        return $this->monnaie;
    }
    function get_langue() {
        return $this->langue;
    }

}