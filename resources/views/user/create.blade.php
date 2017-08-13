@extends('layouts.user-app')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{ Auth::user()->name }}'s Make an Order</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row">
      <form class="form-horizontal" role="form" method="POST" action="{{ route('user.submitOrder') }}">
          {{ csrf_field() }}

          <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
          <input type="hidden" name="status_pemesanan" value="PROGRESS">

          <div class="form-group{{ $errors->has('nama_penerima') ? ' has-error' : '' }}">
              <label for="nama_penerima" class="col-md-4 control-label">Nama penerima</label>

              <div class="col-md-6">
                  <input id="nama_penerima" type="text" class="form-control" name="nama_penerima" value="{{ old('nama_penerima') }}" required autofocus>

                  @if ($errors->has('nama_penerima'))
                      <span class="help-block">
                          <strong>{{ $errors->first('nama_penerima') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group{{ $errors->has('contact_penerima') ? ' has-error' : '' }}">
              <label for="contact_penerima" class="col-md-4 control-label">Contact penerima</label>

              <div class="col-md-6">
                  <input id="contact_penerima" type="text" class="form-control" name="contact_penerima" value="{{ old('contact_penerima') }}" required>

                  @if ($errors->has('contact_penerima'))
                      <span class="help-block">
                          <strong>{{ $errors->first('contact_penerima') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group{{ $errors->has('alamat_tujuan') ? ' has-error' : '' }}">
              <label for="alamat_tujuan" class="col-md-4 control-label">Alamat tujuan</label>

              <div class="col-md-6">
                  <input id="alamat_tujuan" type="text" class="form-control" name="alamat_tujuan" value="{{ old('alamat_tujuan') }}" required>

                  @if ($errors->has('alamat_tujuan'))
                      <span class="help-block">
                          <strong>{{ $errors->first('alamat_tujuan') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group{{ $errors->has('pesanan') ? ' has-error' : '' }}">
              <label for="pesanan" class="col-md-4 control-label">Pesanan</label>
              <div class="col-md-6">
                  <textarea name="pesanan" rows="8" cols="80" class="form-control"></textarea>
                  @if ($errors->has('pesanan'))
                      <span class="help-block">
                          <strong>{{ $errors->first('pesanan') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="btn btn-primary">
                      Order!
                  </button>
              </div>
          </div>
      </form>
    </div>
</div>
@endsection
