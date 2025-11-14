<?php
namespace App\Controllers;

use App\Config\Database;

use App\Models\Portfolio;

class PortfolioController {
    private $portfolioModel;
    
    public function __construct() {
        $db = Database::connect();
    }
    
    public function index() {
        //$portfolios = $this->portfolioModel->getAllPortfolios();
        
        $titre = "Portfolio";

        ob_start();
        
        $db = Database::connect();
        
        require_once __DIR__ . '/../Views/portfolio.php';
        
        $content = ob_get_clean();
        
        require __DIR__ . '/../Views/partials/layout.php';
    }
}