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
        require_once __DIR__ . '/../Views/public/presentation.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }

    public function indexActivite() {
        // Code pour afficher la liste des activités
        $css = "activite";

        $titre = "Activités";
        ob_start();
        require_once __DIR__ . '/../Views/missions/index.m.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }

    public function activiteEcole() {
        // Code pour afficher la liste des activités
        $activites = "";
        $css = "activite";
        
        $titre = "Activités";
        ob_start();
        require_once __DIR__ . '/../Views/missions/activite_ecole.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }

    public function activiteEntreprise() {
        // Code pour afficher la liste des activités
        $activites = "";
        $css = "activite";
        
        $titre = "Activités";
        ob_start();
        require_once __DIR__ . '/../Views/missions/activite_entreprise.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }
    
    public function activite1() {
        // Code pour afficher la liste des activités
        $activites = "";
        $css = "activite";
        
        $titre = "Activités";
        ob_start();
        require_once __DIR__ . '/../Views/missions/activite_1.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }
        
    public function activite2() {
        // Code pour afficher la liste des activités
        $activites = "";
        $css = "activite";

        $titre = "Activités";
        ob_start();
        require_once __DIR__ . '/../Views/missions/activite_2.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }

    public function activite3() {
        // Code pour afficher la liste des activités
        $activites = "";
        $titre = "Activités";
        ob_start();
        require_once __DIR__ . '/../Views/missions/activite_3.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }

    public function activite4() {
        // Code pour afficher la liste des activités
        $activites = "";
        $css = "activite";

        $titre = "Activités";
        ob_start();
        require_once __DIR__ . '/../Views/missions/activite_4.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }



    public function indexProjet() {
        $titre = "Projets";
        $css = "projet";
        ob_start();
        require_once __DIR__ . '/../Views/projets/index.p.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }

    public function projet1() {
        $titre = "Projet ecom";
        $css = "projet";
        ob_start();
        require_once __DIR__ . '/../Views/projets/projet_1.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }

     public function projet2() {
        $titre = "Projet GDM";
        $css = "projet";
        ob_start();
        require_once __DIR__ . '/../Views/projets/projet_2.php';
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
        $css = "cyber";
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