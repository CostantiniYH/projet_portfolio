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
    
   

    public function profil()
    {
        $id = $_GET['id'];

    }

    public function dashboard() 
    {
        $id = $_GET('id');

    }


}

