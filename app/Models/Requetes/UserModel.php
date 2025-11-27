<?php
namespace App\Models\Requetes;
use PDO;

// (3) Cette classe UserModel() gère l'accès à la BDD

class UserModel extends Model 
{
    protected $table = 't_users';

    public function __construct($pdo)
    {
        return parent::__construct($pdo);
    }

    public function findByEmail($email) 
    {
        $stmt = $this->query("SELECT * FROM $this->table WHERE email = ?", [$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function insert($user) {
        $sql = "INSERT INTO $this->table (nom, email, password, role) VALUE (?, ?, ?, ?)";
        $this->query($sql, [
            $user->get_name(),
            $user->get_email(),
            $user->get_password(),
            $user->get_role(),
        ]);
    }

    public function findAll()
    {
        $stmt = $this->query("SELECT * FROM t_users ORDER BY id DESC");
        return $stmt->fetchAll();
    }

}