<?php
use App\Config\Database;

// Expiration de la session après 15 minutes
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > 900)) {
    session_unset();
    session_destroy();
    header("Location " .BASE_URL. "login?timeout=1");
    exit;
}

$_SESSION['last_activity'] = time();


// Chargement des routes
require dirname(__DIR__) . '/app/routes/web.php';
require dirname(__DIR__) . '/app/routes/auth.php';
require dirname(__DIR__) . '/app/routes/users.php';


// Connexion BDD
$pdo = Database::connect();

$router = new App\Core\Router($pdo);
$router->run();

?>
