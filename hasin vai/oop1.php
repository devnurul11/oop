<?php

class Human{
    public $name;
    function  sayHi(){
        echo "Salam";
    }
}

class Cat{
    function sayHi(){
        echo "Maue";
    }
}

class Dog{
    function sayHi(){
        echo"vaoue";
    }
}


$h1 = new Human();
$h1->name ="Rubel";
$c1 = new Cat();
$d1 = new Dog();

$h1->sayHi();
echo "\n"; // Output a new line
$c1->sayHi();


