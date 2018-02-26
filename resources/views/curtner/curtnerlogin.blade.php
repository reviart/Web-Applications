@extends('layouts.curtnerapp')

@section('content')
  <br><br>
  <div class="container">
    <div class="row">

      <div class="col-sm-6">
        <h1 style="font-size: 60px; color:white;" class="display-heading-1">How people build software</h1>
        <p style="font-size: 30px; color:white;" class="display-intro">Millions of developers use GitHub to build personal projects, support their businesses, and work together on open source technologies.</p>
      </div>

      <div class="col-sm-6">
        <br><br><br>

        @if (session('success'))
            <div class="alert alert-success">
              <center>
                {{ session('success') }}
              </center>
            </div>
        @elseif (session('warning'))
            <div class="alert alert-warning">
              <center>
                {{ session('warning') }}
              </center>
            </div>
        @else
        @endif

        <form method="POST" action="{{ route('curtner.login.submit') }}">
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
            {{--<a class="btn btn-link" href="{{ route('password.request') }}">
              Forgot Your Password?
            </a>--}}
          </div>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary">Login</button>
          <a href="{{ route('curtner.register') }}" class="btn btn-primary">Register curtner</a>
        </div>

        </form>
      </div>

    </div>
  </div>
@endsection
