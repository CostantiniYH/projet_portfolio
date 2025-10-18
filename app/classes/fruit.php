<?php
namespace App\Classes;
class Fruit {
    public $name;
    public $color;
    public $forme;

    function set_name($name) {
        $this->name = $name;
    }
    function set_forme($forme) {
        $this->forme = $forme;
    }
    function set_color($color) {
        $this->color = $color;
    }
    function get_name() {
        return $this->name;
    }
    function get_forme() {
        return $this->forme;
    }
    function get_color() {
        return $this->color;
    }
}