<?php
namespace App\Controllers;
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
    
   

    public function index()
    {
        $id = $_GET['id'];

    }

    public function show($id) 
    {
        $id = $_GET('id');
    }

    public function create() {

    }

    public function store() {
        
    }

    public function edit($id) 
    {
        $id = $_GET('id');
    }

    public function update($id) 
    {
        $id = $_GET('id');
    }

    public function delete($id) 
    {
        $id = $_GET('id');
    }


}

