@extends('layouts.app')

@section('content')
    <div class="container  ">
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
                    <h3>Welcome to the Admin Dashboard</h3>
                    {{ __('You are now logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class=" container d-flex align-items-center justify-content-center" style="width: 500px; height: 400px">
    <div style="width: 400px; height: 100px" >
        <div>
            <p>These are our current products, by clicking on the manage button we can see the product lists, edit them, add new products and delete them</p>
        </div>

    <table class="table">
        <tbody>
            <tr>
                <th scope="col">CPU</th>
                <th><a class="btn btn-primary" href="{{ route('index.cpu') }}" role="button">Manage CPU</a></th>
            </tr>


            <tr>
                <th scope="col">GPU</th>
                <th><a class="btn btn-primary" href="{{ route('index.gpu') }}" role="button">Manage GPU</a></th>
            </tr>
            <tr>
                <th scope="col">Memory</th>
                <th><a class="btn btn-primary" href="{{ route('index.ram') }}" role="button">Manage Memory</a></th>
            </tr>
            <tr>
                <th scope="col">CPU Cooler</th>
                <th><a class="btn btn-primary" href="{{ route('index.cpu_cooler') }}" role="button">Manage CPU Cooler</a></th>
            </tr>
            <tr>
                <th scope="col">Storage</th>
                <th><a class="btn btn-primary" href="{{ route('index.storage') }}" role="button">Manage Storage</a></th>
            </tr>
            <tr>
                <th scope="col">Power Supplie</th>
                <th><a class="btn btn-primary" href="{{ route('index.power_supply') }}" role="button">Manage Power Supplie</a></th>
            </tr>
            <tr>
                <th scope="col">Motherboard</th>
                <th><a class="btn btn-primary" href="{{ route('index.motherboard') }}" role="button">Manage Motherboard</a></th>
            </tr>
            <tr>
                <th scope="col">Tower</th>
                <th><a class="btn btn-primary" href="{{ route('index.tower') }}" role="button">Manage Tower</a></th>
            </tr>
        </tbody>
      </table>
        <div>
            <p><a class="btn btn-secondary" href="{{ route('admin.view') }}" role="button">The list of created computers</a></p>
        </div>
        <br />
        <br />
        <br />
    </div>
    </div>

@endsection
