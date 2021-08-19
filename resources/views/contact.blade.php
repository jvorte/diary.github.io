@extends('layouts.app')
@section('content')
  <!-- section -->
    <div id="contact" class="section layout_padding">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-md-6 padding_left_0">
                    <div class="full">
                        <img class="float-left" src="images/fruit_img.png" alt="#" />
                    </div>
                </div>

               <div class="col-md-6">
                <div class="heading">
                        <h2>Tell <strong class="theme_blue">Us</strong></h2>
                    </div>
                    <div class="full margin_top_20">
                      <form action="" method="POST">
                     @csrf
                        <div class="row">
                            <div class="col-sm-12">
                               <input class="form-control" placeholder="Your Name" type="text" required="" name="name">
                            </div>
                            <div class="col-sm-12">
                               <input class="form-control" placeholder="Email" type="Email" required="" name="email">
                            </div>
                            <div class="col-sm-12">
                                <input class="form-control" placeholder="Phone" type="text" required=""name="phone">
                            </div>
                            <div class="col-sm-12">
                                 <input class="form-control" placeholder="message" type="text" required="" name="body">
                            </div>
                        </div>
                        <button class="btn btn-Primary">Send</button>
                    </form>
                    </div>   
                    
                </div>
                
            </div>
        </div>
    </div>
    <!-- end section -->
@endsection