@extends('rams.layout')
@section('content')

<div class="card" style="margin: 20px;">
<div class="card-header">RAM Page</div>
<div class="card-body">
    <div class="card-body">

        <h5 class="card-title">Brand : {{ $rams->brand}}</h5>
        <h5 class="card-title">Name : {{ $rams->name}}</h5>
        <h5 class="card-title">Type : {{ $rams->type}}</h5>
        <h5 class="card-title">Capacity : {{ $rams->capacity}}</h5>
        <h5 class="card-title">Speed : {{ $rams->speed}}</h5>
        <h5 class="card-title">Modules : {{ $rams->modules}}</h5>
        <h5 class="card-title">Price : {{ $rams->price}}</h5>
    </div>
    <hr />
</div>
</div>
