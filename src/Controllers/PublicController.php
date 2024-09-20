<?php

namespace App\Controllers;

use App\DB;
use App\Models\Post;
use App\Models\User;

class PublicController
{

    public function index()
    {
        
        $posts = Post::all();

        
        include 'views/index.php';
    }

    public function us()
    {
        $posts = Post::all();
        include 'views/us.php';
    }

    public function tech()
    {
        $posts = Post::all();
        include 'views/tech.php';
    }

    public function form()
    {
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

    public function answer()
    {
        echo $_POST['flname'];
    }
}

//klasside puhul suured tähed, fail sama nimega kui klass