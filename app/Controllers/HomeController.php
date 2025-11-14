<?php
namespace App\Controllers;

use App\Models\Etudiant;
use App\Models\Etat_nation;

class HomeController {

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
        require_once __DIR__ . '/../Views/presentation.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }
}