<?php

namespace App\Controllers;

use App\DB;
use App\Models\Post;
use App\Models\User;

class PublicController
{

    public function index()
    {
        // session_start();
        // $_SESSION['userId']=2; //sessionit ei saa kasutaja muuta, temp kaustas sessioniid on näha serveri poolel
        // dump($_SESSION);

        // setcookie('mycookie','crunchy', time() + 30 * 24 * 60 * 60 ); //30 päeva sekundites
        // dd($_COOKIE); // cookie väärtust saab kasutaja muuta

        $posts = Post::all();
        view('index', compact('posts'));

        // view('index', ['posts=>$post']);
        // include __DIR__ . '/../../views/index.php';
    }

    public function us()
    {
        $posts = Post::all();
        dd($posts);
        view('us', compact('posts'));
        // include 'views/us.php';
    }

    public function tech()
    {
        $posts = Post::all();
        view('tech', compact('posts'));
        // include 'views/tech.php';
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
        view('form', compact('flname'));
        // include 'views/form.php';
    }

    public function answer()
    {
        echo $_POST['flname'];
    }
}

//klasside puhul suured tähed, fail sama nimega kui klass