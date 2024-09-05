<?php

class Box {
    public $height;
    public $width;
    public $length;

    public function volume(){
        return $this->height * $this->width * $this->length;
    }
}

class MetalBox extends Box {
    public $weightPerUnit = 10;
    public function weight(){
        return $this->volume() * $this->weightPerUnit;
    }
}

$num1 = 1;
$num2 = $num1;
$num2 = 2;
var_dump($num1, $num2);

$metal1 = new MetalBox();
$metal1->height = 1;
// $metal1->width = 2;
// $metal1->length = 3;
// $metal2 = $metal1;
$metal2 = clone $metal1;
$metal2->height = 2;
var_dump($metal1->height, $metal2->height);
// var_dump($metal1, $metal2);

// var_dump($metal);
// var_dump($metal->volume());
// var_dump($metal->weight());

// $box1 = new Box();
// $box1->height = 1;
// $box1->width = 2;
// $box1->length = 3;

// var_dump($box1);

// $box2 = new Box();
// $box2->height = 4;
// $box2->width = 5;
// $box2->length = 6;

// var_dump($box1->volume());
// var_dump($box2->volume());





?>