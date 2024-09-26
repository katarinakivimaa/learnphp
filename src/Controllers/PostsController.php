<?php

namespace App\Controllers;


use App\Models\Post;


class PostsController
{
    public function index(){
        $posts = Post::all();
        // include 'views/posts/index.php';
        view('posts/index', compact('posts'));
    }

    public function create(){
        view('posts/create');
    }

    public function store(){
    
        $post = new Post();
        $post->title = $_POST['title'];
        $post->body = $_POST['body'];
        $post->save();
        // header('Location: /admin/posts');
        redirect('/admin/posts');
    }

    public function edit(){
        $post = Post::find($_GET['id']);
        view('posts/edit', compact('post'));
    }

    public function update(){
        // dd($_POST);
        $post = Post::find($_GET['id']);
        $post->title = $_POST['title'];
        $post->body = $_POST['body'];
        $post->save();
        redirect('/admin/posts');
    }

    public function destroy(){
        $post = Post::find($_GET['id']);
        if($post){
            $post->delete();
        }
        redirect('/admin/posts');
        // header('Location: /admin/posts');
    }

    public function show(){ //SINCE WHEN DO WE HAVE HOMEWORK
        redirect('/admin/posts');
    }
  


}

