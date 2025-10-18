<?php
namespace App\Models;

class Portfolio {
    private $db;

    public function __construct($dbConnection) {
        $this->db = $dbConnection;
    }

    public function getAllPortfolios() {
        $stmt = $this->db->query("SHOW TABLES");
        return $stmt->fetchAll();
    }
}