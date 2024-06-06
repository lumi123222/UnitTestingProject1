@extends('towers.layout')
@section('content')

    <div class="card" style="margin: 20px;">
        <div class="card-header">CASE Page</div>
        <div class="card-body">
            <div class="card-body">
              
                <h5 class="card-title">Brand : {{ $towers->brand}}</h5>
                <h5 class="card-title">Name : {{ $towers->name}}</h5>
                <h5 class="card-title">Type : {{ $towers->type}}</h5>
                <h5 class="card-title">Color : {{ $towers->color}}</h5>
                <h5 class="card-title">Material : {{ $towers->material}}</h5>
                <h5 class="card-title">Dimensions : {{ $towers->dimensions}}</h5>
                <h5 class="card-title">Price : {{ $towers->price}}</h5>
            </div>
            <hr/>
        </div>
    </div>
