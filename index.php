<?php
require 'functions.php';

class Person{
    public $name;
    public $age;

    function breath(){
        echo "breath";
    }
}

$person = new Person();

$person -> name = "John Doe";
$person -> age = 25;

dumdAndDie($person);