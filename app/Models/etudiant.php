<?php
namespace App\Models;

class Etudiant {
    private $prenom;
    private $filiere;
    private $niveau;
    private $id;
    private $nom;
    private $email;
    private $date_born;
    private $etablissement;
    private $image;

    public function __construct($prenom, $filiere, $niveau, $id = null, $nom = null, $email = null, $date_born =
     null, $etablissement = null, $image = null) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->date_born = $date_born;
        $this->filiere = $filiere;
        $this->niveau = $niveau;
        $this->etablissement = $etablissement;
        $this->image = $image;
    }
    public function get_id() {
        return $this->id;
    }
    public function get_nom() {
        return $this->nom;
    }
    public function get_prenom() {
        return $this->prenom;
    }
    public function get_email() {
        return $this->email;
    }
    public function get_date_born() {
        return $this->date_born;
    }
    public function get_filiere() {
        return $this->filiere;
    }
    public function get_niveau() {
        return $this->niveau;
    }
    public function get_etablissement() {
        return $this->etablissement;
    }
    public function get_image() {
        return $this->image;
    }
    public function set_nom($nom) {
        $this->nom = $nom;
    }
    public function set_prenom($prenom) {
        $this->prenom = $prenom;
    }
    public function set_email($email) {
        $this->email = $email;
    }
    public function set_date_born($date_born) {
        $this->date_born = $date_born;
    }
    public function set_filiere($filiere) {
        $this->filiere = $filiere;
    }
    public function set_niveau($niveau) {
        $this->niveau = $niveau;
    }
    public function set_etablissement($etablissement) {
        $this->etablissement = $etablissement;
    }
    public function set_image($image) {
        $this->image = $image;
    }

    public function afficherInfo() {
        return "Étudiant: " . $this->prenom . " " . $this->nom . ", Email: " . $this->email . ", Date de naissance : " . $this->date_born . ", Filière: " . $this->filiere . ", Niveau: " . $this->niveau;
    }
}