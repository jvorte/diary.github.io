@extends('layouts.app')

@section('content')
<div class="container">


            <form action="" method="POST">
            @csrf
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" class="form-control"  placeholder="your day "name="title" value="{{$post->title}}">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label"> Your Text</label>
            <textarea class="form-control" rows="6" name="body" >{{$post->body}}"</textarea>
            </div>
            <button class="btn btn-primary">Send</button>
            </form>
</div>
@endsection