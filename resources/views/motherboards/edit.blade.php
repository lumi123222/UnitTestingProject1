@extends('motherboards.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Edit MOTHERBOARD</div>
    <div class="card-body">

        <a href="{{ route('index.motherboard') }}" class="btn btn-success btn-sm" title="Add New MOTHERBOARD">
            Return to MOTHERBOARD's
        </a>
        <a href="{{ route('admin.home') }}" class="btn btn-success btn-sm" title="Turn Back to Main" >
            Return to Main
        </a>


    <form action="{{ route('motherboard.update', $motherboards->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PUT")
        <input type="hidden" name="id" id="id" value="{{$motherboards->id}}" id="id" />
        <label>Brand</label><br />
        <input type="text" name="brand" id="brand" value="{{$motherboards->brand}}" class="form-control"><br />
        <label>Name</label><br />
        <input type="text" name="name" id="name" value="{{$motherboards->name}}" class="form-control"><br />
        <label>Chipset</label><br/>
        <input type="text" name="chipset" id="chipset" value="{{$motherboards->chipset}}" class="form-control"><br />
        <label>Socket</label><br/>
        <input type="text" name="socket" id="socket" value="{{$motherboards->socket}}" class="form-control"><br />
        <label>Form Factor</label><br/>
        <input type="text" name="form_factor" id="form_factor" value="{{$motherboards->form_factor}}" class="form-control"><br />
        <label>Memory Slots</label><br/>
        <input type="text" name="memory_slots" id="memory_slots" value="{{$motherboards->memory_slots}}" class="form-control"><br />
        <label>Memory Type</label><br/>
        <input type="text" name="memory_type" id="memory_type" value="{{$motherboards->memory_type}}" class="form-control"><br />
        <label>Max Memory</label><br/>
        <input type="text" name="max_memory" id="max_memory" value="{{$motherboards->max_memory}}" class="form-control"><br />
        <label>Pcie Slots</label><br/>
        <input type="text" name="pcie_slots" id="pcie_slots" value="{{$motherboards->pcie_slots}}" class="form-control"><br />
        <label>m2 slots</label><br/>
        <input type="text" name="m2_slots" id="m2_slots" value="{{$motherboards->m2_slots}}" class="form-control"><br />

        <label>Price</label>
        <input type="text" name="price" id="price" value="{{$motherboards->price}}" class="form-control"><br />

        <input type="submit" value="Update" class="btn btn-success"> <br />
    </form>
</div>
</div>

@stop
