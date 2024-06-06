@extends('cpus.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Add New CPU</div>

    <div class="card-body">
        <a href="{{ route('index.cpu') }}" class="btn btn-success btn-sm" title="Add New CPU">
            Return to CPU's
        </a>
        <a href="{{ route('admin.home') }}" class="btn btn-success btn-sm" title="Turn Back to Main" >
            Return to Main
        </a>
        <br/>
        <form action="{{ route('store.cpu') }}" method="post">
            {!! csrf_field() !!}
            <label>Brand</label><br />
            <input type="text" name="brand" id="brand" class="form-control"><br />
            <label>Name</label><br />
            <input type="text" name="name" id="name" class="form-control"><br />
            <label>Socket</label>
            <input type="text" name="socket" id="socket" class="form-control"><br />
            <label>Cores</label><br/>
            <input type="text" name="cores" id="cores" class="form-control"><br />
            <label>Threads</label>
            <input type="text" name="threads" id="threads" class="form-control"><br />
            <label>Base Clock</label>
            <input type="text" name="base_clock" id="base_clock" class="form-control"><br />
            <label>Turbo</label>
            <input type="text" name="turbo" id="turbo" class="form-control"><br />
            <label>RAM Type</label>
            <input type="text" name="ram_type" id="ram_type" class="form-control"><br />
            <label>RAM Speed</label>
            <input type="text" name="ram_speed" id="ram_speed" class="form-control"><br />
            <label>TDP</label>
            <input type="text" name="tdp" id="tdp" class="form-control"><br />
            <label>Price</label>
            <input type="text" name="price" id="price" class="form-control"><br />

            <input type="submit" value="Save" class="btn btn-success"><br />
        </form>

    </div>

</div>

@stop
