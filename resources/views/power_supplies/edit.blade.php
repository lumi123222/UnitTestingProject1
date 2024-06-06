@extends('power_supplies.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Edit POWER SUPPLY</div>
    <div class="card-body">
        <a href="{{ route('index.power_supply') }}" class="btn btn-success btn-sm" title="Add New POWER SUPPLY">
            Return to POWER SUPPLIE's
        </a>
        <a href="{{ route('admin.home') }}" class="btn btn-success btn-sm" title="Turn Back to Main" >
            Return to Main
        </a>
        <br />


    <form action="{{ route('power_supply.update', $power_supplies->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PUT")
        <input type="hidden" name="id" id="id" value="{{$power_supplies->id}}" id="id" />
        <label>Brand</label><br />
        <input type="text" name="brand" id="brand" value="{{$power_supplies->brand}}" class="form-control"><br />
        <label>Name</label><br />
        <input type="text" name="name" id="name" value="{{$power_supplies->name}}" class="form-control"><br />
        <label>Wattage</label><br/>
        <input type="text" name="wattage" id="wattage" value="{{$power_supplies->wattage}}" class="form-control"><br />
        <label>Efficiency Rating</label>
        <input type="text" name="efficiency_rating" id="efficiency_rating" value="{{$power_supplies->efficiency_rating}}" class="form-control"><br />
        <label>Fan size</label>
        <input type="text" name="fan_size" id="fan_size" value="{{$power_supplies->fan_size}}" class="form-control"><br />
        <label>Price</label>
        <input type="text" name="price" id="price" value="{{$power_supplies->price}}" class="form-control"><br />

        <input type="submit" value="Update" class="btn btn-success"> <br />
    </form>
</div>
</div>

@stop
