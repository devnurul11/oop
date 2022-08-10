<?php



interface StructureClass{
    // crud 
    function create();
    function update();
    function show();
    function delete();
}

class stacture implements StructureClass{
    public function update(){
        return "mama";
    }
    public function show(){

    }
    public function delete(){ }

    public function create (){}
}
$ob = new stacture();
echo $ob->update();