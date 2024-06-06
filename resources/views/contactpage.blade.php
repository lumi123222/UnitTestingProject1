@extends('layouts.app')
@section('content')
    @php
        $price = rand(500, 2000);
    @endphp
    <div class="card" style="margin: 20px;">
        <div class="card-header">Checkout</div>

        <div class="card-body">
            <a href="/pc_part" class="btn btn-success btn-sm" title="Turn Back to Main">
            Go Back</a>
            <br/>
                <label>First Name</label><br/>
                <input type="text" name="firstname" id="brand" class="form-control"><br/>
                <label>Last Name</label><br/>
                <input type="text" name="lastname" id="name" class="form-control"><br/>
                <label>Phone</label><br/>
                <input type="text" name="phone" id="cores" class="form-control"><br/>
                <label>Address</label>
                <input type="text" name="address" id="socket" class="form-control"><br/>
                <label>ZIP</label>
                <input type="text" name="phone" id="cores" class="form-control"><br/>

                <tbody>
                    <tr>
                        <td>{{ $pc_part->cpus->name}}</td>
                        <td>{{ $pc_part->gpus->name}}</td>
                        <td>{{ $pc_part->rams->name}}</td>
                        <td>{{ $pc_part->power_supplies->name}}</td>
                        <td>{{ $pc_part->cpu_coolers->name}}</td>
                        <td>{{ $pc_part->towers->name}}</td>
                        <td>{{ $pc_part->storages->name}}</td>
                        <td>{{ $pc_part->motherboards->name}}</td>
                        <td>${{ $price }}</td>

                    </tr>

                </tbody>

            <a href="{{ url('/buy',$pc_part->id) }}" class="btn btn-success btn-sm" title="Turn Back to Main">Purchase</a>


        </div>

    </div>
@endsection
