<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\Post;

class TagController extends Controller
{
    function index(){
        // fetch all posts from the database
        // using Eloquent ORM
        // and store them in the $data variable
        $data = Tag::all();

        // pass data to the view
        return view('tag.index', ['tags' => $data, "pageTitle" => "Blog"]);
    }

    /*function show($id){
        // fetch a single post by its ID
        $post = Post::find($id);

        return view('post.show', ['post'=> $post, "pageTitle" => "Blog Post"]);
    }*/
    function create(){
       $tag = Tag::create([
        "title" => "My 2nd tag",
        "published" => true
        ]);

        return redirect('/tags');
    }

    function testManyToMany(){
        $post2 = Post::find(2);
        $post3 = Post::find(3);

        $post2->tags()->attach([1,2]);
        $post3->tags()->attach([1]);

        return response()->json([
            'message' => 'Tags attached successfully',
            'post2_tags' => $post2->tags,
            'post3_tags' => $post3->tags
        ]);
    }

    /*function delete(){
        Post::destroy(1);
        return redirect('/blog');
    }
    */
}
