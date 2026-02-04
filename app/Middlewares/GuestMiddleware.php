<?php
namespace App\Middleware;

class GuestMiddleware {
    
    public function handle() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        // Si déjà connecté, rediriger
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            header("Location: " . BASE_URL . "dashboard");
            exit;
        }
    }
}