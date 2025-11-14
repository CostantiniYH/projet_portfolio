<?php
namespace App\Controllers;

use App\Models\Fruit;
use App\Models\Etat_nation;

class AnnexeController {

    public function index() {
        $apple = new Fruit('Pomme', 'verte', 'ronde', 'uploads/pomme.jpg',
         'https://www.lesfruitsetlegumesfrais.com/fruits-legumes/fruits-a-pepins/pomme', 1000);
        
        $banane = new Fruit('Banane', 'jaune', 'allongée', 'uploads/banane.jpg', 
        'https://labanane.info', 0);

        $orange = new Fruit('Orange', 'orange', 'ronde', 'uploads/orange.jpg',
         'https://www.lesfruitsetlegumesfrais.com/fruits-legumes/agrume/orange', 500);

        $fruits = [$apple, $banane, $orange];

        $titre = "Annexes";
        ob_start();
        require_once __DIR__ . '/../Views/annexe.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }
}