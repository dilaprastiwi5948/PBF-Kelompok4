@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
            
<header>
  
    <!-- Jumbotron -->
    <div class="mb-3 text-center bg-secondary">
        <a class="navbar-brand text-white" href="{{ url('/') }}">
            <h1>{{ config('app.name', 'Laravel') }}</h1>
        </a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="btn btn-dark text-white" aria-current="page" href="{{url('admin')}}" role="button"><h2>Halaman Admin</h2></a>
            </li>
            <li class="nav-item">
                <a class="btn btn-dark text-white" href="{{url('user')}}" role="button"><h2>Halaman User</h2></a>
            </li>
        </ul>
    </div>
    <!-- Jumbotron -->
  </header>
</div>
@endsection
