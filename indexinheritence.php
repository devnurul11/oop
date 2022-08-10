<?php
class ParantClass{
    public $accet;
    public $color;
    public $height;

    function __construct($accet, $color, $height) {
        $this->accet    = $accet;
        $this->color    = $color;
        $this->height   = $height;
        
    }
    function parentInfo(){
        return $this->accet. "-" .$this->color. '-' .$this->height;
    }
}

class childInfo extends ParantClass{
    public $sponse  = "mimi";
    function childinfo(){
    return $this->parentInfo().'and wife'.$this->sponse;
   }
}


// $childobject = new childInfo('land', 'fair', 6.4);
//     echo $childobject->childinfo();

$childobject = new childInfo('land', 'fair', 7.4);
    echo $childobject->childinfo();
    echo $childobject->parentInfo();