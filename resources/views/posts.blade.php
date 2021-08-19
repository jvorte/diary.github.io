@extends('layouts.app')

@section('content') 

 
   <div class="section layout_padding">
   
    <div class="container">
        <div class="full main_heading_1">
            <h2>Your Day</h2>

                                       
    <form class="2" id="search" action="{{route('search')}}" method="GΕΤ">
    <input class="" type="search" placeholder="Search" aria-label="Search" name="q">
    <button class="btn btn-outline-success" type="submit">Search</button>
    </form>   
     <a href="{{'newpost'}}" class="btn btn-primary">New Post</a>
    </div>  

    
 
  @foreach ($posts as $post)

      <div id="post">
      <p>Date:{{$post->created_at}} from:  {{ $post->user_name }}</p>  
      <a href="{{ route('post', $post)}}"><h1>{{ $post->title }}</h1></a>

      @if ($post->image)
      <img src="/storage/post_photos/{{ $post->image}}" style="width: 100px">  
      @else
      <img src="images/apple.png" style="width: 100px">      
      @endif
         <p class="card-text">Story: {{$post->body}}</p>  <hr> 
      </div>
     
  @endforeach


        </div>
    </div>

@endsection
