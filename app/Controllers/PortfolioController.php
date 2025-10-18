<?php
namespace App\Controllers;

use App\Config\Database;

use App\Models\Portfolio;

class PortfolioController {
    private $portfolioModel;
    
    public function __construct() {
        $db = Database::connect();
        $this->portfolioModel = new Portfolio($db);
    }
    
    public function index() {
        $portfolios = $this->portfolioModel->getAllPortfolios();
        $titre = "Portfolio";
        ob_start();
        require_once __DIR__ . '/../Views/portfolio.php';
        $db = Database::connect();
        if ($db) {
            echo "Connexion réussie à la base de données.";
        } else {
            echo "Échec de la connexion à la base de données.";
        }
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }
}