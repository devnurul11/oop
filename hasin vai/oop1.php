<?php

class Human{
    public $name;
    function  sayHi(){
        echo "Salam\n";
    }

    function sayName(){
        echo"My Name is { $this->$name }";
    }
}

class Cat{
    function sayHi(){
        echo "Maue\n";
    }
}

class Dog{
    function sayHi(){
        echo"vaoue\n";
    }
}


$h1 = new Human();
$h1->name ="Kuddus";
$h1->sayName();
$c1 = new Cat();
$d1 = new Dog();

$h1->sayHi();
$c1->sayHi();
$d1->sayHi();
echo $h1->name;


