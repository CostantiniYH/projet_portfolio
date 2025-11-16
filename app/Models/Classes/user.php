<?php
namespace App\Models\Classes;

class User {
    public $username;
    public $email;
    public $password;

    function set_username($username) {
        $this->username = $username;
    }
    function set_email($email) {
        $this->email = $email;
    }
    function set_password($password) {
        $this->password = $password;
    }
    function get_username() {
        return $this->username;
    }
    function get_email() {
        return $this->email;
    }
    function get_password() {
        return $this->password;
    }
}