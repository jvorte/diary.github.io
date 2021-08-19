<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Auth;

class PostsController extends Controller
{

    public function index()
    {
        return view('home');
    }


    public function about()
    {
        return view('about');
    }


    public function news()
    {
        return view('news');
    }
// ===========================================POSTS====================================================

    public function posts()
    {
        $posts = Post::all();  //μας φερνει ολα τα posts απο την βαση
  
        return view('posts', ['posts' => $posts]);
    }

   
    public function post(Post $post){
        return view('post', ['post' => $post]);
    }


    public function newpost(Request $form){
        if ($form->method()=='POST'){
        $post = new Post();
        $post->title = $form->get('title'); //περνουμε την τιμη που δινει ο χρηστης το input δηλ.
        $post->body = $form->get('body');//περνουμε την τιμη που δινει ο χρηστης το input δηλ.
        $post->user_name = Auth::user()->name; //καταχωρει το id στην βαση για να το χρεισ/με       
        if ($form->hasFile('photo')) {
        $filename =time().$form->file('photo')->getClientOriginalName();
        $path =  $form->file('photo')->storeAs('public/post_photos',$filename);
        $post->image = $filename;
        }
        if ($post -> save()) { //σωνει  την τιμη που εδωσε ο χρηστης το input δηλ.
            
            return redirect('/posts');  // redirect
            };

        };
        return view('newpost');
    }
// =========================================================================================================

  

    public function edit(Post $post, Request $request){
        // if (\Auth::user()->id != $post->user->id) return redirect('posts');
        if ($request->method() == 'POST') {
            $post->title = $request->get('title');
            $post->body = $request->get('body');
            if ($post->save()){
                echo "Η ανάρτηση καταχωρήθηκε επιτυχώς.";
                return redirect('posts');
            };

        };
        return view('edit', ['post' => $post]);
    }
    
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('posts');
    }


    public function search(Request $request)
    {
    
    $q =$request->get('q', 'no result');
    if (!$request->filled('q')) $q='no result';
    else {
   
       $posts = Post::where('title','like','%'.$q.'%')->orWhere('body','like','%'.$q.'%')->get(); 
    }
    
    return view('posts', ['posts' => $posts]);
    
    }

}
