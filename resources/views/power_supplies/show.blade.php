@extends('power_supplies.layout')
@section('content')

<div class="card" style="margin: 20px;">
<div class="card-header">POWER SUPPLY Page</div>
<div class="card-body">
    <div class="card-body">
        <h5 class="card-title">Brand : {{ $power_supplies->brand}}</h5>
        <h5 class="card-title">Name : {{ $power_supplies->name}}</h5>
        <h5 class="card-title">Wattage : {{ $power_supplies->wattage}}</h5>
        <h5 class="card-title">Efficiency Rating : {{ $power_supplies->efficiency_rating}}</h5>
        <h5 class="card-title">Modularity : {{ $power_supplies->modularity}}</h5>
        <h5 class="card-title">Fan size : {{ $power_supplies->fan_size}}</h5>
        <h5 class="card-title">Price : {{ $power_supplies->price}}</h5>
    </div>
    <hr />
</div>
</div>
