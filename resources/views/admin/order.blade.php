@extends('layouts.admin-app')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">ALL USERS Order</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    @forelse($orders as $key)
      <div id="success" class="tab-pane fade in active">
        <div class="panel-group">
          <div class="panel panel-primary">
            <div class="panel-heading">Panel Heading</div>
            <div class="panel-body">
              <p>NAMA PENERIMA  :  {{$key->nama_penerima}}</p>
              <p>CONTACT PENERIMA  :  {{$key->contact_penerima}}</p>
              <p>ALAMAT TUJUAN  : {{$key->alamat_tujuan}}</p>
              <p>PESANAN  :  {{$key->pesanan}}</p>
              <p>TANGGAL  :  {{$key->created_at}}</p>
            </div>
            <div class="panel-footer">
              <form action="/orders/{{$key->id}}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="btn btn-danger" type="submit" name="button">Delete</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      @empty
        No data.
      @endforelse

</div>
@endsection
