<?php
namespace App\Config;

if (!defined('BASE_URL')) {
    // Détecter le protocole via le header X-Forwarded-Proto (envoyé par le proxy)
    $protocol = (!empty($_SERVER['HTTP_X_FORWARDED_PROTO'])) 
        ? $_SERVER['HTTP_X_FORWARDED_PROTO'] 
        : ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http");

    $host = $_SERVER['HTTP_HOST'];

    // Détecter le préfixe via X-Forwarded-Prefix (envoyé par le proxy)
    $prefix = (!empty($_SERVER['HTTP_X_FORWARDED_PREFIX'])) 
        ? rtrim($_SERVER['HTTP_X_FORWARDED_PREFIX'], '/') 
        : '';
    
    if ($host === 'localhost' || $host === '127.0.0.1') {
        define('BASE_URL', $protocol . '://' . $host . '/projet_portfolio/public/');
    } else {
        define('BASE_URL', $protocol . '://' . $host . $prefix . '/');
    }
}
use PDO;
use PDOException;

class Database {
    public static function connect() {
        $host = $_ENV['DB_HOST'];
        $db   = $_ENV['DB_NAME'];
        $user = $_ENV['DB_USER'];
        $pass = $_ENV['DB_PASS'];
        $dsn = "pgsql:host=$host;dbname=$db"; // Avec PostgreSql le dsn ne prend pas charset en paramètres
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        try {
            $pdo = new PDO($dsn, $user, $pass, $options);
            return $pdo;
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }
    }
}