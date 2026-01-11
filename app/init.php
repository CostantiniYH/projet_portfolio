<?php

spl_autoload_register(function ($class) {
    $prefix = 'App\\';
    $base_dir = __DIR__ . '/';
    $len = strlen($prefix);
    
    if (strncmp($prefix, $class, $len) !== 0) {
        return ;
    }
    
    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
    
    if (file_exists($file)) {
        require $file;
    }
});


require dirname(__DIR__) . '/app/routes/web.php';
require dirname(__DIR__) . '/app/routes/auth.php';
require dirname(__DIR__) . '/app/routes/users.php';


use App\Config\Database;

$pdo = Database::connect();

$router = new App\Core\Router($pdo);
$router->run();

?>
