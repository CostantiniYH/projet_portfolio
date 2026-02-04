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

        $_SESSION = [
            'user' => $result['user'],
            'user_id' => $result['id'],
            'nom' => $result['nom'],
            'prenom' => $result['id'],
            'email' => $result['email'],
            'date_naissance' => $result['date_naissance'],
            'filiere' => $result['filiere'],
            'niveau' => $result['niveau'],
            'etablissement' => $result['etablissement'],
            'image' => $result['image'],
            'created_at' => $result['id'],
            'role' => $result['role']
        ];

        $_SESSION['flash']['success'] = "Connexion réussi !";
        header("Location: " . BASE_URL);
        exit;
    }

    public function logout() {
        $_SESSION = [];

        if (isset($_COOKIE[session_name()])) {
            setcookie(
                session_name(),
                '',
                time() - 3600,
                BASE_URL
            );
        }

        session_destroy();

        header("Location: " . BASE_URL . "login");
        exit;
    }
}