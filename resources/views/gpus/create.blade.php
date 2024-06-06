@extends('gpus.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Add New GPU</div>

    <div class="card-body">
        <a href="{{ route('index.gpu') }}" class="btn btn-success btn-sm" title="Add New GPU">
            Return to GPU's
        </a>
        <a href="{{ route('admin.home') }}" class="btn btn-success btn-sm" title="Turn Back to Main" >
            Return to Main
        </a>
        <form action="{{ route('store.gpu') }}" method="post">
            {!! csrf_field() !!}
            <label>Brand</label><br />
            <input type="text" name="brand" id="brand" class="form-control"><br />
            <label>Name</label><br />
            <input type="text" name="name" id="name" class="form-control"><br />
            <label>Core Clock</label><br/>
            <input type="text" name="core_clock" id="core_clock" class="form-control"><br />
            <label>Boost Clock</label>
            <input type="text" name="boost_clock" id="boost_clock" class="form-control"><br />
            <label>Memory</label>
            <input type="text" name="memory" id="memory" class="form-control"><br />
            <label>Memory Type</label>
            <input type="text" name="memory_type" id="memory_type" class="form-control"><br />
            <label>Memory Clock</label>
            <input type="text" name="memory_clock" id="memory_clock" class="form-control"><br />
            <label>Interface</label>
            <input type="text" name="interface" id="interface" class="form-control"><br />
            <label>TDP</label>
            <input type="text" name="tdp" id="tdp" class="form-control"><br />
            <label>Price</label>
            <input type="text" name="price" id="price" class="form-control"><br />

            <input type="submit" value="Save" class="btn btn-success"><br />
        </form>

    </div>

</div>

@stop
