<?php
namespace App\Controllers;

class PublicController {

    public function index() {
        $posts = [
            ['title'=> 'Some titties 1', 'body' => 'Some boy 1'],
            ['title'=> 'Some titties 2', 'body' => 'Some boy 2'],
            ['title'=> 'Some titties 3', 'body' => 'Some boy 3'],
            ['title'=> 'Some titties 4', 'body' => 'Some boy 4'],
        ];
        include 'views/index.php';
    }

    public function us(){
        $posts = [
            ['title'=> 'Some our titties 1', 'body' => 'Some boy 1'],
            ['title'=> 'Some our titties 2', 'body' => 'Some boy 2'],
            ['title'=> 'Some our titties 3', 'body' => 'Some boy 3'],
            ['title'=> 'Some our titties 4', 'body' => 'Some boy 4'],
        ];
        include 'views/us.php';
    }

    public function tech() {
        $posts = [
            ['title'=> 'Some their titties 1', 'body' => 'Some boy 1'],
            ['title'=> 'Some their titties 2', 'body' => 'Some boy 2'],
            ['title'=> 'Some their titties 3', 'body' => 'Some boy 3'],
            ['title'=> 'Some their titties 4', 'body' => 'Some boy 4'],
        ];
        include 'views/tech.php';
    }
}

//klasside puhul suured tähed