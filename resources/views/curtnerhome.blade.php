@extends('layouts.curtnerapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Curtner Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome {{Auth::guard('curtner')->user()->name}}!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
