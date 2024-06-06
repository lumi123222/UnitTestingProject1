@extends('cpus.layout')
@section('content')

<div class="card" style="margin: 20px;">
<div class="card-header">Details</div>
<div class="card-body">
    <div class="card-body">
        <h5 class="card-title">Brand : {{ $cpus->brand}}</h5>
        <p class="card-text">Name : {{ $cpus->name}}</p>
        <p class="card-text">Socket : {{ $cpus->socket}}</p>
        <p class="card-text">Cores : {{ $cpus->cores}}</p>
        <p class="card-text">Threads : {{ $cpus->threads}}</p>
        <p class="card-text">Base Clock : {{ $cpus->base_clock}}</p>
        <p class="card-text">Turbo : {{ $cpus->turbo}}</p>
        <p class="card-text">RAM Type : {{ $cpus->ram_type}}</p>
        <p class="card-text">RAM Speed : {{ $cpus->ram_speed}}</p>
        <p class="card-text">TDP : {{ $cpus->tdp}}</p>
        <p class="card-text">Price : {{ $cpus->price}}</p>
    </div>
    <hr />
</div>
</div>
