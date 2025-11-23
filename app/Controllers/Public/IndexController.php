<?php
namespace App\Controllers\Public;
use App\Models\Entites\Etudiant;
use App\Models\Entites\Fruit;

class IndexController {
    private $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    
    public function index() {
        $titre = "Présentation";
        ob_start();
        require_once __DIR__ . '/../../Views/public/presentation.php';
        $content = ob_get_clean();
        require __DIR__ . '/../../Views/partials/layout.php';
    }

    public function activite() {
        // Code pour afficher la liste des activités
        $activites = "";

        $titre = "Activités";
        ob_start();
        require_once __DIR__ . '/../../Views/public/activites.php';
        $content = ob_get_clean();
        require __DIR__ . '/../../Views/partials/layout.php';
    }

     public function projet() {
        $titre = "Projets";
        ob_start();
        require_once __DIR__ . '/../../Views/public/projets.php';
        $content = ob_get_clean();
        require __DIR__ . '/../../Views/partials/layout.php';
    }

     public function realisation() {
        // Code pour afficher la liste des réalisations
        $titre = "Réalisations Professionnelles";
        ob_start();
        require_once __DIR__ . '/../../Views/public/realisations.php';
        $content = ob_get_clean();
        require __DIR__ . '/../../Views/partials/layout.php';
    }

    public function cybersecurite() {
        // Code pour afficher la liste des veilles
        $titre = "Cybersécurité";
        ob_start();
        require_once __DIR__ . '/../../Views/public/cybersecurite.php';
        $content = ob_get_clean();
        require __DIR__ . '/../../Views/partials/layout.php';
    }

    public function veille() {
        // Code pour afficher la liste des veilles
        $titre = "Veille technologique";
        ob_start();
        require_once __DIR__ . '/../../Views/public/veille.php';
        $content = ob_get_clean();
        require __DIR__ . '/../../Views/partials/layout.php';
    }

    public function contact() {
        $titre = "Contact";
        ob_start();
        require_once __DIR__ . '/../../Views/public/contact.php';
        $content = ob_get_clean();
        require __DIR__ . '/../../Views/partials/layout.php';
    }

     public function annexe() {
        $apple = new Fruit('Pomme', 'verte', 'ronde', 'uploads/pomme.jpg',
         'https://www.lesfruitsetlegumesfrais.com/fruits-legumes/fruits-a-pepins/pomme', 1000);
        
        $banane = new Fruit('Banane', 'jaune', 'allongée', 'uploads/banane.jpg', 
        'https://labanane.info', 0);

        $orange = new Fruit('Orange', 'orange', 'ronde', 'uploads/orange.jpg',
         'https://www.lesfruitsetlegumesfrais.com/fruits-legumes/agrume/orange', 500);

        $fruits = [$apple, $banane, $orange];

        $titre = "Annexes";
        ob_start();
        require_once __DIR__ . '/../../Views/public/annexe.php';
        $content = ob_get_clean();
        require __DIR__ . '/../../Views/partials/layout.php';
    }
}