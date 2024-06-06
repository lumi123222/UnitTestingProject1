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
                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif
                        <h3>Welcome to the User Dashboard</h3>
                        {{ __('You are now logged in and are able to build your own PC!') }}
                    </div>
                    <div style="text-align: center">
                        <p><a class="btn btn-secondary" style="text-align: center" href="{{ url('/pc_part/create') }}" role="button">Build a PC</a>          <a class="btn btn-secondary" style="text-align: center" href="{{ url('/pc_part') }}" role="button">Cart List</a></p>

                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">

                <img src="{{ asset('img/image3.jpg') }}" alt="Image 2" style="width: 100%;">
            </div>
        </div>
    </div>
@endsection
