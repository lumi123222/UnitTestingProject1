@extends('cpu_coolers.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Edit CPU COOLER</div>
    <div class="card-body">
        <a href="{{ route('index.cpu_cooler') }}" class="btn btn-success btn-sm" title="Add New CPU COOLER">
            Return to CPU COOLER's
        </a>
        <a href="{{ route('admin.home') }}" class="btn btn-success btn-sm" title="Turn Back to Main" >
            Return to Main
        </a>
        <br/>

    <form action="{{ route('cpu_cooler.update', $cpu_coolers->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PUT")
        <input type="hidden" name="id" id="id" value="{{$cpu_coolers->id}}" id="id" />
        <label>Brand</label><br />
        <input type="text" name="brand" id="brand" value="{{$cpu_coolers->brand}}" class="form-control"><br />
        <label>Name</label><br />
        <input type="text" name="name" id="name" value="{{$cpu_coolers->name}}" class="form-control"><br />
        <label>Type</label><br/>
        <input type="text" name="type" id="type" value="{{$cpu_coolers->type}}" class="form-control"><br />
        <label>Noise Level</label>
        <input type="text" name="noise_level" id="noise_level" value="{{$cpu_coolers->noise_level}}" class="form-control"><br />
        <label>Fan Size</label>
        <input type="text" name="fan_size" id="fan_size" value="{{$cpu_coolers->fan_size}}" class="form-control"><br />
        <label>Height</label>
        <input type="text" name="height" id="height" value="{{$cpu_coolers->height}}" class="form-control"><br />
        <label>Price</label>
        <input type="text" name="price" id="price" value="{{$cpu_coolers->price}}" class="form-control"><br />

        <input type="submit" value="Update" class="btn btn-success"> <br />
    </form>
</div>
</div>

@stop
