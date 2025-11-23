<?php
namespace App\Controllers\User;
use App\Models\Requetes\UserModel;
use App\Models\Services\UserService;
use App\Models\Validations\UserValidator;

class UserController 
{
    private $service;

    public function __construct($pdo) {
        $model = new UserModel($pdo);
        $validator = new UserValidator();
        $this->service = new UserService($model, $validator);
    }
    
    public function liste() 
    {
        $users = $this->service->getAllUsers();

        $titre = "Liste users";

        ob_start();
        require_once __DIR__ . '/../../Views/admin/users.php';
        $content = ob_get_clean();
        require __DIR__ . '/../../Views/partials/layout.php';
    }
}

