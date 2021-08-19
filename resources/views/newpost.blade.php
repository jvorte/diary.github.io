@extends('layouts.app')
@section('content')
<div class="container">

<form action="" method="POST" enctype="multipart/form-data">
@csrf
 <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Title</label>
  <input type="text" class="form-control"  placeholder="" name="title">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label"> Your Text</label>
  <textarea class="form-control" rows="6" name="body"></textarea>
</div>
<input type="file" name="photo" >
<button class="btn btn-primary">Send</button>

</form>

</div>


@endsection