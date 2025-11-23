<?php
namespace App\Models\Entites;

// (1) La classe UserEntite() crée l'objet user, c'est une simple représentation de l'utilisateur, et gère
// uniquement les getters et les setters, pas de règles métier, ni de validations.

class UserEntite {
    private $id;
    Private $name;
    Private $email;
    Private $role;
    Private $password;

 
    public function set_id($id) {
        $this->id = $id;
    }
    public function set_name($name) {
        $this->name = $name;
    }
    public function set_email($email) {
        $this->email = $email;
    }
    public function set_role($role) {
        $this->role = $role;
    }
    public function set_password($password) {
        $this->password = $password;
    }


    public function get_id() { return $this->id; }
    public function get_name() { return $this->name; }
    public function get_email() { return $this->email; }
    public function get_role() { return $this->role; }
    public function get_password() { return $this->password; }
}