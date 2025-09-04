<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;


class CommentController extends Controller
{
    function index(){
        // fetch all comments from the database
        // using Eloquent ORM
        // and store them in the $data variable
        $data = Comment::all();

        // pass data to the view
        return view('comment.index', ['comments' => $data, "pageTitle" => "Blog"]);
    }

   /* function show($id){
        $comment = Comment::find($id);

        return view('comment.show', ['comment'=> $comment, "pageTitle" => "Blog comment"]);
    }*/
    function create(){
       $comment = Comment::create([
        "author" => "Lulu", // 🧨 This field is crucial!
        'content' => "This is a comment on the post",
        'post_id' => 1, // Assuming the post with ID 1 exists
        "published" => true
]);

        return redirect('/comments');
    }
}
