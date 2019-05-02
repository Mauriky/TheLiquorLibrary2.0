@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
           
        </div>
    </div>
</div>
@endsection
<style>
    body{
        background-image: url(https://stmed.net/sites/default/files/liquor-wallpapers-28266-1113087.jpg);
                background-size: 100% 100%;
    }
</style>