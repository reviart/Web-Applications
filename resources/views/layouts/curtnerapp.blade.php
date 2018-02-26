<!DOCTYPE html>
<html>
<head>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('sign_materials/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('sign_materials/style.css') }}">
    <link rel="shortcut icon" type="image/png" href="http://roomyz.com/wp-content/uploads/2016/01/cropped-favicon-1-300x300.png"/>
    <title>Curtner login</title>
</head>

<body background="{{ asset('sign_materials/banner2.jpg') }}">
      <header>
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a style="font-size: 20px;" class="navbar-brand" href="#">Culinar</a>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </nav>
      </header>

        @yield('content')

      <footer>
        <div class="container">
          <hr>
          <p style="color:white;"><small><a href="http://facebook.com/askorama">Like </a> On facebook</small></p>
          <p style="color:white;"><small><a href="http://twitter.com/wiredwiki">Ask whatever </a> On Twitter</small></p>
          <p style="color:white;"><small><a href="http://youtube.com/wiredwiki">Subscribe </a> On Youtube</small></p>
        </div> <!-- end container -->
      </footer>

</body>
</html>
