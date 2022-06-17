@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                @if (Auth::user()->role == "Admin")
                <div class="card-body">
                    <a class="btn btn-primary mb-2" href="{{ route('index-user') }}">User Management</a>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                @else
                <div class="card-body">
                    <h4>Hello {{ Auth::user()->name }}</h4>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
