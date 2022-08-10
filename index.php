<?php

// abustruct class 

// pc   build method 

abstract class Template{
    //crud

    abstract public function create();
    abstract public function update();
    abstract public function show();
    abstract public function delete();
}

class Templates extends Template{
    //crud  
    public function create(){
        return "this is create method";
    }
    public function update(){
        return'this is update method';
    }
    public function show(){
        return'this is show method';      
    }
    public function delete(){
        return'this is delete method';
    }
}

$objects = new Templates();
echo $objects->create();