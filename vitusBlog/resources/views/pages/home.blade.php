<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>VitusBlog</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">vitusBlog</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/home">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="/about">About-Us</a></li>
        <li><a href="/contact">Contact</a></li>


      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <button class="btn btn-info navbar-btn dropdown-toggle" id="dropdownMenu1" type="button" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> My Account <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- nav bar ends here -->

<div class="container">
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

</div><!--End of Column -->




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>