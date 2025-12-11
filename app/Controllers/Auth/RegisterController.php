<?php
namespace App\Controllers\Auth;
use App\Models\Requetes\UserModel;
use App\Models\Services\UserService;
use App\Models\Validations\UserValidator;

class RegisterController 
{    
    private $service;

    public function __construct($pdo) {
        $model = new UserModel($pdo);
        $validator = new UserValidator();
        $this->service = new UserService($model, $validator);
    }

    public function formRegister() {        
        $titre = "Inscription";
        ob_start();
        require_once __DIR__ . '/../../Views/auth/register.php';
        $content = ob_get_clean();
        require __DIR__ . '/../../Views/partials/layout.php';
    }
    
    public function register() {
        
        $data = $_POST;
       
        $errors = $this->service->registerUser($data);

        if (!empty($errors)) {
            $_SESSION['flash']['error'] = implode('<br>', $errors);
            header("Location: /register");
            exit;
        }

        $_SESSION['flash']['success'] = "Inscription réussi !";
        if (!headers_sent()) {
            header("Location: /login");
            exit;
        } else {
            echo '<script>window.location="/login";</script>';
            exit;
        }
    }
}