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
        $css = "auth";
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
            header("Location: " . BASE_URL . "register");
            exit;
        }

        $_SESSION['flash']['success'] = "Inscription réussi !";
        if (!headers_sent()) {
            header("Location: " . BASE_URL . "login");
            exit;
        } else {
            echo '<script>window.location="' . BASE_URL . 'login";</script>';
            exit;
        }
    }

     public function formLogin() {
        $titre = "Connexion";
        $css = "auth";

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
            header("Location: " . BASE_URL . "login");
            exit;
        }

        // Regénérer l'id par sécurité
        session_regenerate_id(true);

        $_SESSION['user'] = [
            'user_id'           => $result['user']['id'],
            'nom'               => $result['user']['nom'],
            'prenom'            => $result['user']['prenom'],
            'email'             => $result['user']['email'],
            'date_naissance'    => $result['user']['date_naissance'],
            'filiere'           => $result['user']['filiere'],
            'niveau'            => $result['user']['niveau'],
            'etablissement'     => $result['user']['etablissement'],
            'image'             => $result['user']['image'],
            'created_at'        => $result['user']['created_at'],
            'role'              => $result['user']['role']
        ];
        $_SESSION['logged_in'] = true;

        $_SESSION['flash']['success'] = "Connexion réussi !";
        header("Location: " . BASE_URL);
        exit;
    }

    public function logout() {
        $_SESSION = [];
        session_unset();
        session_destroy();

        session_start();

        $_SESSION['flash']['success'] = "Déconnexion réussi !";
        header("Location: " . BASE_URL . "login");
        exit;
    }
}