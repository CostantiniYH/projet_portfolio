<?php
declare (strict_types=1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Test temporaire
echo "DEBUT INDEX<br>";
var_dump(__DIR__);
echo "<br>";

if (file_exists(__DIR__ . '/../app/Views/navbar.php')) {
    echo "Le fichier navbar existe !<br>";
    require __DIR__ . '/../app/Views/partials/navbar.php';
} else {
    echo "Le fichier navbar N'EXISTE PAS !<br>";
    echo "Chemin cherché : " . __DIR__ . '/../app/Views/navbar.php<br>';
}

// Ton code normal ensuite...
session_start();
require dirname(__DIR__) . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

require dirname(__DIR__) . '/app/init.php';

?>