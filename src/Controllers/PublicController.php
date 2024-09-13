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

    public function form() {
        // dump($_GET, $_POST); //query

        // if(isset($_GET['flname'])){
        //     $flname = $_GET['flname'];
        // } else {
        //     $flname = null;
        // }

        // $flname = isset($_GET['flname']) ? $_GET['flname'] : null;

        $flname = $_GET['flname'] ?? null; 
        // ?? on lühike väga spetsiifiline if lause
        include 'views/form.php';
    }

    public function answer(){
        echo $_POST['flname'];
    }
}

//klasside puhul suured tähed, fail sama nimega kui klass