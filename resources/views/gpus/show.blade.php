@extends('gpus.layout')
@section('content')

<div class="card" style="margin: 20px;">
<div class="card-header">GPU Page</div>
<div class="card-body">
    <div class="card-body">
        <h5 class="card-title">Name : {{ $gpus->brand}}</h5>
        <h5 class="card-title">Name : {{ $gpus->name}}</h5>
        <h5 class="card-title">Core Clock : {{ $gpus->core_clock}}</h5>
        <h5 class="card-title">Boost Clock : {{ $gpus->boost_clock}}</h5>
        <h5 class="card-title">Memory : {{ $gpus->memory}}</h5>
        <h5 class="card-title">Memory Type : {{ $gpus->memory_type}}</h5>
        <h5 class="card-title">Memory Clock : {{ $gpus->memory_clock}}</h5>
        <h5 class="card-title">Interface : {{ $gpus->interface}}</h5>
        <h5 class="card-title">TDP : {{$gpus->tdp}}</h5>
        <h5 class="card-title">Price : {{ $gpus->price}}</h5>
    </div>
    <hr />
</div>
</div>
