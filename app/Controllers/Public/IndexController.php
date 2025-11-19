<?php
namespace App\Controllers\Public;
use App\Models\Classes\Etudiant;
use App\Models\Classes\Fruit;

class IndexController {
    
    public function index() {
        $yhc = new Etudiant('Yaacov', 'Informatique', 'BTS SIO 2ème année', '',
         'Costantini', '', '20/02/2000', 'Ozar Formation', 'uploads/users/yaacov.jpg');
        
        $ilanK = new Etudiant('Ilan', 'Commerce internationnal', 'BTS NDRC 2ème année', '',
         'Krief', '', '15/05/2005', 'Ozar Formation', 'uploads/domes.jpg');
        
        $samuel = new Etudiant('Samuel', 'Informatique', 'BTS SIO 1ère année', '',
         'Dupont', '', '10/10/2003', 'Ozar Formation', 'uploads/pomme.jpg');
        
        $stephane = new Etudiant('Stéphane', 'Réseau et télécoms', 'BTS SIO 2ème année', '',
         'Martin', '', '05/03/1999', 'Ozar Formation', 'uploads/banane.jpg');

        $etudiants = [$yhc, $ilanK, $samuel, $stephane];

        $titre = "Présentation";
        ob_start();
        require_once __DIR__ . '/../../Views/public/presentation.php';
        $content = ob_get_clean();
        require __DIR__ . '/../../Views/partials/layout.php';
    }

    public function activite() {
        // Code pour afficher la liste des activités
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