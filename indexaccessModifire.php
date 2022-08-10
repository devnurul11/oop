<?php

//access modifiers(public, private,protected)
//all access modifiers are allowed to won class
// public protected are allowed to thire child class or dirve class nut private are not allowed dirve class

class Fruits{
    protected $name   = 'apple';
    public $price = 150;

    function fruitsifo(){
        return $this->name;
    }
}

$objects    = new Fruits();
echo $objects->fruitsifo();