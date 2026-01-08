<?php
namespace App\Controllers;
use App\Models\Entites\Veille;

class IndexController 
{
    private $pdo;
    private $veilleModel;
    
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
        $this->veilleModel = new Veille();
    }
    
    public function index() {
        $titre = "Présentation";
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
        ob_start();
        require_once __DIR__ . '/../Views/public/projet_1.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }

     public function realisation() {
        // Code pour afficher la liste des réalisations
        $titre = "Réalisations Professionnelles";
        ob_start();
        require_once __DIR__ . '/../Views/public/realisations.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }

    public function cybersecurite() {
        // Code pour afficher la liste des veilles
        $titre = "Cybersécurité";
        ob_start();
        require_once __DIR__ . '/../Views/public/cybersecurite.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }

    public function veille() {
        // Code pour afficher la liste des veilles
        $feed = $this->veilleModel->getListNews();
        $titre = "Veille technologique";
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