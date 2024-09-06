<?php

class Box {
    public $height; //absoluutselt kõik. alusta rangeimast reeglit ja siis liigu leebema poole vajadusel
    protected $width; //klass ise ja lapsklassid saavad muuta
    private $length; //ainult sama klass kus defineeriti

    public function volume(){
        return $this->height * $this->width * $this->length;
    }
    public function getLength(){
        return $this->length;
    }
    public function setLength(){
        if(is_numeric($length) && $length > 0) {
            $this->length = $length;
        } else {
            $this->length = 0;
        }
    }
}

class MetalBox extends Box {
    public $weightPerUnit = 10;
    public function weight(){
        return $this->volume() * $this->weightPerUnit;
    }
    public function testProtected(){
        var_dump($this->length);
    }
}

$box = new MetalBox();
// $box = new Box();
$box->setLength(121);
$box->testProtected(141);
// $box->height=10;
// $box->width=10;
// $box->length=10;
var_dump($box);

?>