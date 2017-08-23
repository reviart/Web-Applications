@extends('layouts.admin-app')

@section('content')
<style media="screen">
  input[type=text] {
      width: 130px;
      box-sizing: border-box;
      border: 2px solid #ccc;
      border-radius: 4px;
      font-size: 14px;
      background-color: white;
      background-image: url('https://cdn1.iconfinder.com/data/icons/hawcons/32/698627-icon-111-search-512.png');
      background-position: 10px 10px;
      background-repeat: no-repeat;
      padding: 12px 20px 12px 40px;
      -webkit-transition: width 0.4s ease-in-out;
      transition: width 0.4s ease-in-out;
  }

  input[type=text]:focus {
      width: 80%;
  }
</style>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Culinar</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-6 col-md-6">
          <form class="" action="index.html" method="post">
            <input type="text" name="search" placeholder="Search..">

          </form>
        </div>
        <div class="col-lg-3 col-md-6">
          <button type="submit" name="button" class="btn btn-primary">Search</button>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#" class="btn btn-primary">Cart</a>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">

    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->
@endsection
