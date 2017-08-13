@extends('layouts.user-app')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{ Auth::user()->name }}'s Order</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    @if (session('alert'))
        <div class="alert alert-success">
            <b>{{ session('alert') }}</b>
        </div>
    @endif

    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#success">Success</a></li>
      <li><a data-toggle="tab" href="#progress">On progress</a></li>
      <li><a data-toggle="tab" href="#failed">Failed</a></li>
      <li><a href="{{ route('user.showCreateOrder') }}" class="btn btn-default">Tambah order</a></li>
    </ul>

      @forelse($orders as $key)
        @if($key->user_id == Auth::id())
          @if($key->status_pemesanan == 'SUCCESS')
          <div class="tab-content">
            <div id="progress" class="tab-pane fade">
            </div>
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
            <div id="failed" class="tab-pane fade">
            </div>
          </div>
          @elseif($key->status_pemesanan == 'PROGRESS')
          <div class="tab-content">
            <div id="success" class="tab-pane fade">
            </div>
            <div id="progress" class="tab-pane fade in active">
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
            </div>
            <div id="failed" class="tab-pane fade">
            </div>
          </div>
          @elseif($key->status_pemesanan == 'FAILED')
          <div class="tab-content">
            <div id="success" class="tab-pane fade">
              KOSONG
            </div>
            <div id="progress" class="tab-pane fade">
              KOSONG
            </div>
            <div id="failed" class="tab-pane fade in active">
              <div class="panel-group">
                <div class="panel panel-danger">
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
          </div>
          @else
          <div class="tab-content">
            <div id="success" class="tab-pane fade in active">
              KOSONG
            </div>
            <div id="progress" class="tab-pane fade">
              KOSONG
            </div>
            <div id="failed" class="tab-pane fade">
              KOSONG
            </div>
          </div>
          @endif
        @endif
        @empty
          No data.
        @endforelse
</div>
@endsection
