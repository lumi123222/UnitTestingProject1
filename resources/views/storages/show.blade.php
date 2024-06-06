@extends('storages.layout')
@section('content')

<div class="card" style="margin: 20px;">
<div class="card-header">STORAGE Page</div>
<div class="card-body">
    <div class="card-body">
        <h5 class="card-title">Brand : {{ $storages->brand}}</h5>
        <h5 class="card-title">Name : {{ $storages->name}}</h5>
        <h5 class="card-title">Type : {{ $storages->type}}</h5>
        <h5 class="card-title">Capacity : {{ $storages->capacity}}</h5>
        <h5 class="card-title">Interface : {{ $storages->interface}}</h5>
        <h5 class="card-title">Form Factor : {{ $storages->form_factor}}</h5>
        <h5 class="card-title">Read Speed : {{ $storages->read_speed}}</h5>
        <h5 class="card-title">Write Speed : {{ $storages->write_speed}}</h5>
        <h5 class="card-title">Price : {{ $storages->price}}</h5>
    </div>
    <hr />
</div>
</div>
