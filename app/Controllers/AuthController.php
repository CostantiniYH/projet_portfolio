<?php
namespace App\Controllers;
use App\Models\Requetes\UserModel;
use App\Models\Validations\UserValidator;
use App\Models\Services\UserService;
use App\Models\Services\LoginService;


class AuthController 
{    
    private $serviceRegister;
    private $serviceLogin;

    public function __construct($pdo) {
        $model = new UserModel($pdo);
        $validator = new UserValidator();
        $this->serviceRegister = new UserService($model, $validator);
        $this->serviceLogin = new LoginService($model, $validator);

    }

    public function formRegister() {        
        $titre = "Inscription";
        ob_start();
        require_once __DIR__ . '/../Views/auth/register.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }
    
    public function register() {
        
        $data = $_POST;
       
        $errors = $this->serviceRegister->registerUser($data);

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

     public function formLogin() {
        $titre = "Connexion";
        ob_start();
        require_once __DIR__ . '/../Views/auth/login.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/partials/layout.php';
    }

    public function login()
    {
        $result = $this->serviceLogin->loginUser($_POST);

        if (!empty($result['errors'])) {
            $_SESSION['flash']['error'] = $result['errors'];
            header("Location: /login");
            exit;
        }

        $_SESSION['user'] = $result['user'];

        $_SESSION['flash']['success'] = "Connexion réussi !";
        header("Location: /");
        exit;
    }
}