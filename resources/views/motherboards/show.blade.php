@extends('motherboards.layout')
@section('content')

<div class="card" style="margin: 20px;">
<div class="card-header">MOTHERBOARD Page</div>
<div class="card-body">
    <div class="card-body">
        <h5 class="card-title">Brand : {{ $motherboards->brand}}</h5>
        <h5 class="card-title">Name : {{ $motherboards->name}}</h5>
        <h5 class="card-title">Chipset : {{ $motherboards->chipset}}</h5>
        <h5 class="card-title">Socket : {{ $motherboards->socket}}</h5>
        <h5 class="card-title">Form Factor : {{ $motherboards->form_factor}}</h5>
        <h5 class="card-title">Memory Slots : {{ $motherboards->memory_slots}}</h5>
        <h5 class="card-title">Memory Type : {{ $motherboards->memory_type}}</h5>
        <h5 class="card-title">Max Memory : {{ $motherboards->max_memory}}</h5>
        <h5 class="card-title">Pcie Slots : {{ $motherboards->pcie_slots}}</h5>
        <h5 class="card-title">m2 slots : {{ $motherboards->m2_slots}}</h5>
        <h5 class="card-title">Price : {{ $motherboards->price}}</h5>
    </div>
    <hr />
</div>
</div>
