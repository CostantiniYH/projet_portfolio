<?php
namespace App\Controllers;
use App\Models\Entites\RSS;


class IndexController 
{
    private $pdo;
    private $veilleNews;
    private $cyberNews;
    private $cyberNews2;

    
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
        $this->veilleNews = new RSS();
        $this->cyberNews = new RSS();
        $this->cyberNews2 = new RSS();

    }
    
    public function index() {
        $titre = "Présentation";
        $css = "presentation";
        ob_start();
        require dirname(__DIR__) . '/Views/public/presentation.php';
        $content = ob_get_clean();
        require dirname(__DIR__) . '/Views/partials/layout.php';
    }

    public function activites() {
        // Code pour afficher l'index des activités
        $css = "activite";

        $titre = "Activités";
        ob_start();
        require dirname(__DIR__) . '/Views/activites/index.a.php';
        $content = ob_get_clean();
        require dirname(__DIR__) . '/Views/partials/layout.php';
    }

    public function E5() {
        $titre = "Projets E5";
        $css = "projet";
        ob_start();
        require __DIR__ . '/../Views/activites/E5.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }

    public function E6() {
        $titre = "Projets E6";
        $css = "projet";
        ob_start();
        require __DIR__ . '/../Views/projets/E6.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }

    // Projet 1 : client léger - Site e-commerce {crud + authentification + affichage dynamique}
    public function projet1() {
        $titre = "Projet ecom";
        $css = "projet";
        ob_start();
        require dirname(__DIR__) . '/Views/projets/projet_1.php';
        $content = ob_get_clean();
        require dirname(__DIR__) . '/Views/partials/layout.php';
    }

    // Projet 2 : client lourd - Application bibliothèque Java {}
     public function projet2() {
        $titre = "Projet bibliothèque";
        $css = "projet";
        ob_start();
        require dirname(__DIR__) . '/Views/projets/projet_2.php';
        $content = ob_get_clean();
        require dirname(__DIR__) . '/Views/partials/layout.php';
    }

     public function realisations() {
        $titre = "Réalisations Professionnelles";
        ob_start();
        require dirname(__DIR__) . '/Views/public/realisations.php';
        $content = ob_get_clean();
        require dirname(__DIR__) . '/Views/partials/layout.php';
    }

    public function cybersecurite() {
        $feed1 = $this->cyberNews->getListNewsCyber();
        $feed2 = $this->cyberNews2->getListNewsCyber2();    
        $titre = "Cybersécurité";
        $css = "cyber";
        ob_start();
        require dirname(__DIR__) . '/Views/public/cybersecurite.php';
        $content = ob_get_clean();
        require dirname(__DIR__) . '/Views/partials/layout.php';
    }

    public function veille() {
        $feed = $this->veilleNews->getListNewsVeille();
        $titre = "Veille technologique";
        $css = "veille.css";
        ob_start();
        require dirname(__DIR__) . '/Views/public/veille.php';
        $content = ob_get_clean();
        require dirname(__DIR__) . '/Views/partials/layout.php';
    }

    public function contact() {
        $titre = "Contact";
        ob_start();
        require dirname(__DIR__) . '/Views/public/contact.php';
        $content = ob_get_clean();
        require dirname(__DIR__) . '/Views/partials/layout.php';
    }

    public function apropos() {
        $titre = "A propos";
        ob_start();
        require dirname(__DIR__) . '/Views/public/apropos.php';
        $content = ob_get_clean();
        require dirname(__DIR__) . '/Views/partials/layout.php';
    }
}



    // public function activiteEcole() {
    //     // Code pour afficher la liste des activités
    //     $activites = "";
    //     $css = "activite";
        
    //     $titre = "Activités";
    //     ob_start();
    //     require __DIR__ . '/../Views/activites/activite_ecole.php';
    //     $content = ob_get_clean();
    //     require __DIR__ . '/../Views/partials/layout.php';
    // }

    // public function activiteEntreprise() {
    //     // Code pour afficher la liste des activités
    //     $activites = "";
    //     $css = "activite";
        
    //     $titre = "Activités";
    //     ob_start();
    //     require __DIR__ . '/../Views/activites/activite_entreprise.php';
    //     $content = ob_get_clean();
    //     require __DIR__ . '/../Views/partials/layout.php';
    // }
     