<?php
namespace App\Core;
use App\Middlewares\AuthMiddleware;

class Router
{
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;

    }
    public function run()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];

        foreach (Route::getRoutes() as $route) {
            if ($route['method'] === $method && $route['path'] === $uri) {
                foreach ($route['middleware'] as $middlewareName) {
                    $middlewareClass = 'App\\Middlewares\\' . ucfirst($middlewareName) . "Middleware";
                    if (!class_exists($middlewareClass)) {
                        die("Erreur : Le middleware $middlewareClass n'existe pas.");
                    }
                    $middleware = new $middlewareClass();
                    $middleware->handle();
                }

                $this->callHandler($route['handler']);
                return;
            }
        }
        http_response_code(404);
        echo "404 - Page non trouvé";
    }

    private function callHandler($handler)
    {
        if (is_string($handler) && str_contains($handler, '@')) {
            list($controllerPath, $method) = explode('@', $handler);
            $controllerClass = 'App\\Controllers\\' . str_replace('/', '\\', $controllerPath);
            $controllerObj = new $controllerClass($this->pdo);
            $controllerObj->$method();
        }

        if (is_callable($handler)) {
            $handler();
        }
    }
}