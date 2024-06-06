@extends('cpu_coolers.layout')
@section('content')

<div class="card" style="margin: 20px;">
    
    

    <div class="card-body">
        <div class="card-header">Add New CPU COOLER</div>
        <a href="{{ route('index.cpu_cooler') }}" class="btn btn-success btn-sm" title="Add New CPU COOLER">
            Return to CPU COOLER's
        </a>
        <a href="{{ route('admin.home') }}" class="btn btn-success btn-sm" title="Turn Back to Main" >
            Return to Main
        </a>

        <br/>

        <form action="{{ route('store.cpu_cooler') }}" method="post">
            {!! csrf_field() !!}
            <label>Brand</label><br />
            <input type="text" name="brand" id="brand" class="form-control"><br />
            <label>Name</label><br />
            <input type="text" name="name" id="name" class="form-control"><br />
            <label>Type</label><br/>
            <input type="text" name="type" id="type" class="form-control"><br />
            <label>Noise Level</label>
            <input type="text" name="noise_level" id="noise_level" class="form-control"><br />
            <label>Fan Size</label>
            <input type="text" name="fan_size" id="fan_size" class="form-control"><br />
            <label>Dimensions</label>
            <input type="text" name="dimensions" id="dimensions" class="form-control"><br />
            <label>Price</label>
            <input type="text" name="price" id="price" class="form-control"><br />

            <input type="submit" value="Save" class="btn btn-success"><br />
        </form>

    </div>

</div>

@stop
