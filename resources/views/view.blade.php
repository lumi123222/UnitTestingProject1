@extends('layouts.app')

@section('content')


<div class=" container d-flex align-items-center justify-content-center" style="width: 500px; height: 400px">
    <div style="width: 400px; height: 100px" >   

    <table class="table">
        
        <thead>
            <tr>
                <th>PC Part ID</th>
                <th>CPU</th>
                <th>GPU</th>
                <th>RAM</th>
                <th>Power Supply</th>
                <th>CPU Cooler</th>
                <th>Tower</th>
                <th>Storage</th>
                <th>Motherboard</th>
                <th>Builder</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pc_parts as $pc_part)
            <tr>
                <td>{{ $pc_part->id }}</td>
                <td>{{ $pc_part->cpus->name }}</td>
                <td>{{ $pc_part->gpus->name }}</td>
                <td>{{ $pc_part->rams->name }}</td>
                <td>{{ $pc_part->power_supplies->name }}</td>
                <td>{{ $pc_part->cpu_coolers->name }}</td>
                <td>{{ $pc_part->towers->name }}</td>
                <td>{{ $pc_part->storages->name }}</td>
                <td>{{ $pc_part->motherboards->name }}</td>
                <td>{{ $pc_part->user->name }}</td>
            </tr>
            @endforeach
        </tbody>

    </table>
    
    
    </div>   
</div> 



@endsection
