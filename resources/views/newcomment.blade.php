@extends('layouts.app')
@section('content')
<div class="container">

<form action="" method="POST">
@csrf
<div class="mb-3">
     <h2>Replay from: {{$post->user_name}}</h2>
  <label for="exampleFormControlTextarea1" class="form-label"> Your Text</label>
  <textarea class="form-control" rows="6" name="body"></textarea>
</div>
<button class="btn btn-primary">Send</button>

</form>

</div>


@endsection