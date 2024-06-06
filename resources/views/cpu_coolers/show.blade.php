@extends('cpu_coolers.layout')
@section('content')

<div class="card" style="margin: 20px;">
<div class="card-header">CPU COOLER Page</div>
<div class="card-body">
    <div class="card-body">
        <h5 class="card-title">Brand : {{ $cpu_coolers->brand}}</h5>
        <h5 class="card-title">Name : {{ $cpu_coolers->name}}</h5>
        <h5 class="card-title">Type : {{ $cpu_coolers->type}}</h5>
        <h5 class="card-title">Noise Level : {{ $cpu_coolers->noise_level}}</h5>
        <h5 class="card-title">Fan Size : {{ $cpu_coolers->fan_size}}</h5>
        <h5 class="card-title">Height : {{ $cpu_coolers->height}}</h5>
        <h5 class="card-title">Price : {{ $cpu_coolers->price}}</h5>
    </div>
    <hr />
</div>
</div>
