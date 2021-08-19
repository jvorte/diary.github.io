@extends('layouts.app')
@section('content')
<div class="container">


          <div class="post">   
          <p>Date:{{$post->created_at}} from:  {{ $post->user_name }}</p> 
          <img src="/storage/post_photos/{{ $post->image}}" style="width: 100px"> 
          <a href="{{ route('post', $post)}}"><h1>{{ $post->title }}</h1></a>
          <p class="card-text">Story: {{$post->body}}</p>      
          </div>
          <div class="comments">
            <h2>Comments</h2>
           @foreach ($post->comment as $comment)
           <p>replay from: {{$comment -> user_name }}</p>
           <p> {{$comment -> comment }}</p>
           

           @endforeach
          </div>   


            
            @if(Auth::check() && Auth::user()->name==$post->user_name)
            <a href="{{ route('edit', $post)}}"><button class="btn btn-primary">Edit post</button></a>
            <a href="{{ route('delete', $post)}}"><button class="btn btn-danger">Delete post</button></a>

             @else
             <a href="{{ route('newcomment', $post)}}"><button class="btn btn-danger">Replay</button></a>
            @endif
       
              
         
              
     
            
           

    
</div>

@endsection
