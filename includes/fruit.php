<?php

// PHASE 1: declare class ---------------------------------

class Fruit {
    protected string $name;
    public string $color;

    // constructor: both arguments are defined as optional
    function __construct(string $name = '', string $color = '') {
        $this->name = $name;
        $this->color = $color;
    }

    // setter function for $name
    function set_name($n) {
        $this->name = $n;
    }

    // getter function for $name
    function get_name() {
        return $this->name;
    }
}

?>