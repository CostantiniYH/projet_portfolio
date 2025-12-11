<?php
namespace App\Controllers\Auth;
use App\Models\Requetes\UserModel;
use App\Models\Services\LoginService;
use App\Models\Validations\UserValidator;


class LoginController 
{
    private $service;
    public function __construct($pdo)
    {
        $model = new UserModel($pdo);
        $validator = new UserValidator();
        $this->service = new LoginService($model, $validator);
    }
    
    public function formLogin() {
        $titre = "Connexion";
        ob_start();
        require_once __DIR__ . '/../../Views/auth/login.php';
        $content = ob_get_clean();
        require __DIR__ . '/../../Views/partials/layout.php';
    }

    public function login()
    {
        $result = $this->service->loginUser($_POST);

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