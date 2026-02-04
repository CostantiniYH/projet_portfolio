<?php


require dirname(__DIR__) . '/app/routes/web.php';
require dirname(__DIR__) . '/app/routes/auth.php';
require dirname(__DIR__) . '/app/routes/users.php';


use App\Config\Database;

$pdo = Database::connect();

$router = new App\Core\Router($pdo);
$router->run();

?>
