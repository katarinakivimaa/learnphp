<?php

class Box {
    // public function __construct($name){
    //     echo 'Box was created and its name was ' . $name;
    // }    
    // these are called Magic Methods, they override things and do weird stuff
    public function __construct(){
        echo "Box was created.\n";
    }    

   public function __call($name, $args){
        var_dump($name, $args);
    } 

    public function __get($name){
        return 'cool value';
    } 

    public function __set($name, $value){
        var_dump($name, $value);
    } 

    public function __destruct(){
        echo "Box was destroyed!\n";
    }

    public function __toString(...$args){
        // return 'cool box';
        var_dump($args);
    }
}
// array_push 
// function hello(){
//     $box=new Box();
// }
// $box = new Box('Katarina');
$box = new Box();
$box->name='Katarina';
$box->something(1,2,'asghdyud');
$box->else(1,2,'asghdyud', true);
var_dump($box);
// var_dump($box->cats);
var_dump($box->alahsdha);
echo $box;
$box(1,'asd','afdsdf');
// $box = 1;
// hello();
// echo "final echo\n";