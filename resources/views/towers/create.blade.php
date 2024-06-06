@extends('towers.layout')
@section('content')

    <div class="card" style="margin: 20px;">
        <div class="card-header">Add New CASE</div>

        <div class="card-body">
            <a href="{{ route('index.tower') }}" class="btn btn-success btn-sm" title="Add New CASE">
                Return to CASE's
            </a>
            <a href="{{ route('admin.home') }}" class="btn btn-success btn-sm" title="Turn Back to Main" >
                Return to Main
            </a>
            <br />
            <form action="{{ route('store.tower') }}" method="post">
                
                {!! csrf_field() !!}
                <label>Brand</label><br/>
                <input type="text" name="brand" id="brand" class="form-control"><br/>
                <label>Name</label><br/>
                <input type="text" name="name" id="name" class="form-control"><br/>
                <label>Type</label><br/>
                <input type="text" name="type" id="type" class="form-control"><br/>
                <label>Color</label>
                <input type="text" name="color" id="color" class="form-control"><br/>
                <label>Material</label>
                <input type="text" name="material" id="material" class="form-control"><br/>
                <label>Dimensions</label>
                <input type="text" name="dimensions" id="dimensions" class="form-control"><br/>
                <label>Price</label>
                <input type="text" name="price" id="price" class="form-control"><br/>

                <input type="submit" value="Save" class="btn btn-success"><br/>
            </form>

        </div>

    </div>

@stop
