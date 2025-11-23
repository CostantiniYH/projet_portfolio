<?php
namespace App\Models\Entites;
class Fruit {
    public $name;
    public $color;
    public $forme;
    public $image;
    public $link;
    public $quantite;

    public function __construct($name, $color, $forme, $image = null, $link = null, $quantite = 1) {
        $this->name = $name;
        $this->color = $color;
        $this->forme = $forme;
        $this->image = $image;
        $this->link = $link;
        $this->quantite = $quantite;
    }

    function set_name($name) {
        $this->name = $name;
    }
    function set_forme($forme) {
        $this->forme = $forme;
    }
    function set_color($color) {
        $this->color = $color;
    }
    function set_image($image) {
        $this->image = $image;
    }
    function set_link($link) {
        $this->link = $link;
    }
    function set_quantite($quantite) {
        $this->quantite = $quantite;
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
    function get_image() {
        return $this->image;
    }
    function get_link() {
        return $this->link;
    }
    function get_quantite() {
        return $this->quantite;
    }
}