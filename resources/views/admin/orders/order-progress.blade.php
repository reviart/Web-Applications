@extends('layouts.admin-app')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">All users order - on progress</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    @forelse($orders as $key)
      @if($key->status_pemesanan == 'PROGRESS')
        <div class="panel-group">
          <div class="panel panel-success">
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
      @endif
    @empty
      No data.
    @endforelse

    <a href="{{ Route('user.showCreateOrder') }}" class="btn btn-primary">Tambah order</a>
</div>
@endsection
