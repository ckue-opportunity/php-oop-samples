<?php
class Mammal {
    protected string $name;
    protected string $color;
    protected string $age;

    // constructor: $n define und $c optional
    function __construct(string $n = '', string $c = '', int $a = 0)
    {
        $this->name = $n;
        $this->color = $c;
        $this->age = $a;
    }

    function getName(){
        return $this->name;
    }

    function getColor(){
        return $this->color;
    }

    function getAge(){
        return $this->age;
    }

    function eat() {
        return "schmatz schmatz";
    }

    function sleep() {
        return "schnarch schnarch";
    }

    function greet() {
        return "Hello World!";
    }
}

class Dog extends Mammal {
    function greet() {
        return "Woof Woof";
    }
}

class Cat extends Mammal {
    function eat() {
        return "Mapf Mapf";
    }

    function greet() {
        return "Miau Miau";
    }
}

class Whale extends Mammal {
    function eat() {
        return "schrumpf blubb";
    }

    function sleep() {
        return "... (silence)";
    }

    function greet() {
        return "Piiipp";
    }
}