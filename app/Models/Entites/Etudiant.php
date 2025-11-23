<?php
namespace App\Models\Entites;
use App\Models\Entites\UserEntite;
class Etudiant extends UserEntite {
    private $prenom;
    private $filiere;
    private $niveau;
    private $date_born;
    private $etablissement;
    private $image;

    public function __construct($prenom, $filiere, $niveau, $date_born = null, $etablissement = null,
     $image = null) {
        $this->prenom = $prenom;
        $this->date_born = $date_born;
        $this->filiere = $filiere;
        $this->niveau = $niveau;
        $this->etablissement = $etablissement;
        $this->image = $image;
    }

    public function get_prenom() { return $this->prenom; }
    public function get_date_born() { return $this->date_born; }
    public function get_filiere() { return $this->filiere; }
    public function get_niveau() { return $this->niveau;}
    public function get_etablissement() { return $this->etablissement; }
    public function get_image() { return $this->image; }

    public function set_prenom($prenom) {
        $this->prenom = $prenom;
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
}