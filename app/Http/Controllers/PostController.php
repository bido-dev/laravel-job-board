<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    function index(){
        // fetch all posts from the database
        // using Eloquent ORM
        // and store them in the $data variable
        $data = Post::all();

        // pass data to the view
        return view('post.index', ['posts' => $data, "pageTitle" => "Blog"]);
    }

    function show($id){
        // fetch a single post by its ID
        $post = Post::find($id);

        return view('post.show', ['post'=> $post, "pageTitle" => "Blog Post"]);
    }
    function create(){
       $post = Post::create([
        "title" => "My first post",
        "body" => "This is the body of my 2nd post",
        "author" => "Omar", // 🧨 This field is crucial!
        "published" => true
        ]);

        return redirect('/blog');
    }

    function delete(){
        Post::destroy(1);
        return redirect('/blog');
    }
    
}
