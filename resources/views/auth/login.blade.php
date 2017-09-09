<!DOCTYPE html>
<html>
<head>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('sign_materials/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('sign_materials/style.css') }}">
    <link rel="shortcut icon" type="image/png" href="http://roomyz.com/wp-content/uploads/2016/01/cropped-favicon-1-300x300.png"/>
    <title>User login</title>
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
                <a style="font-size: 20px;" class="navbar-brand" href="/">Culinar</a>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </nav>
      </header>

        <br><br>
        <div class="container">
          <div class="row">

            <div class="col-sm-6">
              <h1 style="font-size: 60px; color:white;" class="display-heading-1">How people build software</h1>
              <p style="font-size: 30px; color:white;" class="display-intro">Millions of developers use GitHub to build personal projects, support their businesses, and work together on open source technologies.</p>
            </div>

            <div class="col-sm-6">
              <br><br><br>
              <form method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                <input style="height: 40px;" type="email" class="form-control" placeholder="E-mail address" name="email" value="{{ old('email') }}" required autofocus>
                <!-- <span style="font-size: 20px;" class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                <input style="height: 40px;" type="password" class="form-control" placeholder="Password" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>

              <div class="form-group">
                <div class="checkbox">
                  <label>
                    <input style="color:white;" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                  </label>
                  <a class="btn btn-link" href="{{ route('password.request') }}">
                    Forgot Your Password?
                  </a>
                </div>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
              </div>

              </form>
            </div>

          </div>
        </div>

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
