@extends('storages.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Add New STORAGE</div>

    <div class="card-body">
        <a href="{{ route('index.storage') }}" class="btn btn-success btn-sm" title="Add New STORAGE">
            Return to STORAGE's
        </a>
        <a href="{{ route('admin.home') }}" class="btn btn-success btn-sm" title="Turn Back to Main" >
            Return to Main
        </a>
        <br />
        <form action="{{ route('store.storage') }}" method="post">
            {!! csrf_field() !!}
            <label>Brand</label><br />
            <input type="text" name="brand" id="brand" class="form-control"><br />
            <label>Name</label><br />
            <input type="text" name="name" id="name" class="form-control"><br />
            <label>Type</label>
            <input type="text" name="type" id="type" class="form-control"><br />
            <label>Capacity</label><br/>
            <input type="text" name="capacity" id="capacity" class="form-control"><br />
            <label>Interface</label>
            <input type="text" name="interface" id="interface" class="form-control"><br />
            <label>Form Factor</label>
            <input type="text" name="form_factor" id="form_factor" class="form-control"><br />
            <label>Read Speed</label>
            <input type="text" name="read_speed" id="read_speed" class="form-control"><br />
            <label>Write Speed</label>
            <input type="text" name="write_speed" id="write_speed" class="form-control"><br />
            <label>Price</label>
            <input type="text" name="price" id="price" class="form-control"><br />

            <input type="submit" value="Save" class="btn btn-success"><br />
        </form>

    </div>

</div>

@stop
