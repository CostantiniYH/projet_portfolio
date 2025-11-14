<?php
namespace App\Models;

class Justice {
    public $tribunal_administratif;
    public $tribunal_criminel;
    public $tribunal_civil;
    public $tribunal_commercial;
    public $cour_constitutionnelle;
    public $cour_dappel;
    public $cour_de_cassation;

    function set_tribunal_administratif($tribunal_administratif) {
        $this->tribunal_administratif = $tribunal_administratif;
    }
    function set_tribunal_criminel($tribunal_criminel) {
        $this->tribunal_criminel = $tribunal_criminel;
    }
    function set_tribunal_civil($tribunal_civil) {
        $this->tribunal_civil = $tribunal_civil;
    }
    function set_tribunal_commercial($tribunal_commercial) {
        $this->tribunal_commercial = $tribunal_commercial;
    }
    function set_cour_constitutionnelle($cour_constitutionnelle) {
        $this->cour_constitutionnelle = $cour_constitutionnelle;
    }
    function set_cour_dappel($cour_dappel) {
        $this->cour_dappel = $cour_dappel;
    }
    function set_cour_de_cassation($cour_de_cassation) {
        $this->cour_de_cassation = $cour_de_cassation;
    }
    function get_tribunal_administratif() {
        return $this->tribunal_administratif;
    }
    function get_tribunal_criminel() {
        return $this->tribunal_criminel;
    }
    function get_tribunal_civil() {
        return $this->tribunal_civil;
    }
    function get_tribunal_commercial() {
        return $this->tribunal_commercial;
    }
    function get_cour_constitutionnelle() {
        return $this->cour_constitutionnelle;
    }
    function get_cour_dappel() {
        return $this->cour_dappel;
    }
    function get_cour_de_cassation() {
        return $this->cour_de_cassation;
    }
    
}