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
        $css = "presentation.css";
        ob_start();
        require_once __DIR__ . '/../Views/public/presentation.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }

    public function activite() {
        // Code pour afficher la liste des activités
        $activites = "";

        $titre = "Activités";
        ob_start();
        require_once __DIR__ . '/../Views/public/activites.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }

     public function projet() {
        $titre = "Projet GdC";
        $css = "projet.css";
        ob_start();
        require_once __DIR__ . '/../Views/public/projet_1.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }

     public function realisation() {
        $titre = "Réalisations Professionnelles";
        ob_start();
        require_once __DIR__ . '/../Views/public/realisations.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }

    public function cybersecurite() {
        $feed1 = $this->cyberNews->getListNewsCyber();
        $feed2 = $this->cyberNews2->getListNewsCyber2();    
        $titre = "Cybersécurité";
        ob_start();
        require_once __DIR__ . '/../Views/public/cybersecurite.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }

    public function veille() {
        $feed = $this->veilleNews->getListNewsVeille();
        $titre = "Veille technologique";
        $css = "veille.css";
        ob_start();
        require_once __DIR__ . '/../Views/public/veille.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }

    public function contact() {
        $titre = "Contact";
        ob_start();
        require_once __DIR__ . '/../Views/public/contact.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }
}