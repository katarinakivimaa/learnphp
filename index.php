<?php

class Box {
    public static $count = 0;
    public $id;
    public function __construct(){
        $this->id=self::$count++;
    }
    public static function setCount(){
        var_dump(self::$count);
        // var_dump($this->id);
    }
    public static function name(){
        var_dump(static::class);
    }
}


class Metalbox extends Box {

}

MetalBox::name();
// Box::setCount();
// var_dump(Box::class);
// Box::$count = 1;
// Box::$count = 2;
// var_dump(Box::$count, Box::$count);
// var_dump(new Box());
// var_dump(new Box());
// var_dump(new Box());
// var_dump(new Box());


