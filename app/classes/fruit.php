<?php
namespace App\Classes;
class Fruit {
    public $name;
    public $color;
    public $form;

    function set_name($name) {
        $this->name = $name;
    }
    function set_form($form) {
        $this->form = $form;
    }
    function set_color($color) {
        $this->color = $color;
    }
    function get_name() {
        return $this->name;
    }
    function get_form() {
        return $this->form;
    }
    function get_color() {
        return $this->color;
    }
}