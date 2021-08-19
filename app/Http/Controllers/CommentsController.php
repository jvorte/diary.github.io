<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; 
use App\Models\Comment; 
use Auth;

class CommentsController extends Controller
{
    public function new_comment(Post $post , Request $request)
    {

        if ($request->method()=='POST'){
            $comment = new Comment();          
            $comment->comment = $request->get('body');//περνουμε την τιμη που δινει ο χρηστης το input δηλ.
            $comment->user_name = Auth::user()->name; //καταχωρει το id στην βαση για να το χρεισ/με
            $comment->post_id = $post->id;

            if ($comment -> save()) { //σωνει  την τιμη που εδωσε ο χρηστης το input δηλ.
            echo "comment ok";
            return redirect()->route("post",$post);  // redirect
            };
    
            };
        return view('newcomment',['post' => $post] );
    }
}
