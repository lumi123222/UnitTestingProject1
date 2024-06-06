@extends('storages.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Edit STORAGE</div>
    <div class="card-body">
        <a href="{{ route('index.storage') }}" class="btn btn-success btn-sm" title="Add New STORAGE">
            Return to STORAGE's
        </a>
        <a href="{{ route('admin.home') }}" class="btn btn-success btn-sm" title="Turn Back to Main" >
            Return to Main
        </a>
        <br />


    <form action="{{ route('storage.update', $storages->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PUT")
        <input type="hidden" name="id" id="id" value="{{$storages->id}}" id="id" />
        <label>Brand</label><br />
        <input type="text" name="brand" id="brand" value="{{$storages->brand}}" class="form-control"><br />
        <label>Name</label><br />
        <input type="text" name="name" id="name" value="{{$storages->name}}" class="form-control"><br />
        <label>Type</label>
        <input type="text" name="type" id="type" value="{{$storages->type}}" class="form-control"><br />
        <label>Capacity</label><br/>
        <input type="text" name="capacity" id="capacity" value="{{$storages->capacity}}" class="form-control"><br />
        <label>Interface</label>
        <input type="text" name="interface" id="interface" value="{{$storages->interface}}" class="form-control"><br />
        <label>Form Factor</label>
        <input type="text" name="form_factor" id="form_factor" value="{{$storages->form_factor}}" class="form-control"><br />
        <label>Read Speed</label>
        <input type="text" name="read_speed" id="read_speed" value="{{$storages->read_speed}}" class="form-control"><br />
        <label>Write Speed</label>
        <input type="text" name="write_speed" id="write_speed" value="{{$storages->write_speed}}" class="form-control"><br />
        <label>Price</label>
        <input type="text" name="price" id="price" value="{{$storages->price}}" class="form-control"><br />

        <input type="submit" value="Update" class="btn btn-success"> <br />
    </form>
</div>
</div>

@stop
