@extends('rams.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Edit RAM</div>
    <div class="card-body">
        <a href="{{ route('index.ram') }}" class="btn btn-success btn-sm" title="Add New RAM">
            Return to RAM's
        </a>
        <a href="{{ route('admin.home') }}" class="btn btn-success btn-sm" title="Turn Back to Main" >
            Return to Main
        </a>
        <br />


    <form action="{{ route('ram.update', $rams->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PUT")
        <input type="hidden" name="id" id="id" value="{{$rams->id}}" id="id" />
        <label>Brand</label><br />
        <input type="text" name="brand" id="brand" value="{{$rams->brand}}" class="form-control"><br />
        <label>Name</label><br />
        <input type="text" name="name" id="name" value="{{$rams->name}}" class="form-control"><br />
        <label>Type</label>
        <input type="text" name="type" id="type" value="{{$rams->type}}" class="form-control"><br />
        <label>Capacity</label><br/>
        <input type="text" name="capacity" id="capacity" value="{{$rams->capacity}}" class="form-control"><br />
        <label>Speed</label>
        <input type="text" name="speed" id="speed" value="{{$rams->speed}}" class="form-control"><br />
        <label>Modules</label>
        <input type="text" name="modules" id="modules" value="{{$rams->modules}}" class="form-control"><br />
        <label>Price</label>
        <input type="text" name="price" id="price" value="{{$rams->price}}" class="form-control"><br />

        <input type="submit" value="Update" class="btn btn-success"> <br />
    </form>
</div>
</div>

@stop
