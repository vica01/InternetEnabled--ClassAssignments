@extends('main')

@section('title', '| Homepage')



@section('active')
        <li class="active"><a href="/home">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="/about">About-Us</a></li>
        <li><a href="/contact">Contact</a></li>
@endsection

  @section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron">
        <h1>Welcome to {{ $info['tlog'] }}</h1>
        <p class="lead">Thank you so much for visiting. </br> Please read my Popular post</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
      </div>
    </div>
  </div><!--End of Row -->

  <div class="row">
    <div class="col-md-8"> <!-- Begining of main post -->
      <div class="post">
        <h3>Post Title</h3>
        <p>Emmanuel's Post ...</p>
        <a href="#" class="btn btn-primary">Read More</a>
      </div>

      <hr>

      <div class="post">
        <h3>Post Title</h3>
        <p>Emmanuel's Post ...</p>
        <a href="#" class="btn btn-primary">Read More</a>
      </div>

        <hr>

      <div class="post">
        <h3>Post Title</h3>
        <p>Emmanuel's Post ...</p>
        <a href="#" class="btn btn-primary">Read More</a>
      </div>

      <hr>

      <div class="post">
        <h3>Post Title</h3>
        <p>Emmanuel's Post ...</p>
        <a href="#" class="btn btn-primary">Read More</a>
      </div>

      <hr>
    </div><!--End of Main Post-->

    <div class="col-md-3 col-md-offset-1"><!--Begining of sideBar -->
      <h3>SideBar</h3>
    </div>

  </div>
@endsection
