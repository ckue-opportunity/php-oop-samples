<?php

class Fruit {
    protected string $name;
    public string $color;

    // constructor
    function __construct(string $name = '', string $color = '') {
        $this->name = $name;
        $this->color = $color;
    }

    // getter and setter methods for $name
    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }
}

?>