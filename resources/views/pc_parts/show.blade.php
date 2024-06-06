@extends('pc_parts.layout')
@section('content')

<div class="card" style="margin: 20px;">
<div class="card-header">Details</div>
<div class="card-body">
    <div class="card-body">

        <p class="card-title">CPU : {{ $pc_part->cpus->name}}  <a href="{{ route('show.cpu.details', $pc_part->cpus->id) }}"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Specifications</button></a> </p>
        <p class="card-text">GPU : {{ $pc_part->gpus->name}} <a href="{{ route('show.gpu.details', $pc_part->gpus->id) }}"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Specifications</button></a></p>
        <p class="card-text">RAM : {{ $pc_part->rams->threads}} <a href="{{ route('show.ram.details', $pc_part->rams->id) }}"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Specifications</button></a></p>
        <p class="card-text">POWER SUPPLY : {{ $pc_part->power_supplies->name}} <a href="{{ route('show.power_supply.details', $pc_part->power_supplies->id) }}"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Specifications</button></a></p>
        <p class="card-text">CPU COOLER : {{ $pc_part->cpu_coolers->name}} <a href="{{ route('show.cpu_cooler.details', $pc_part->cpu_coolers->id) }}"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Specifications</button></a></p>
        <p class="card-text">CASE : {{ $pc_part->towers->name}} <a href="{{ route('show.tower.details', $pc_part->towers->id) }}"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Specifications</button></a></p>
        <p class="card-text">STORAGE : {{ $pc_part->storages->name}} <a href="{{ route('show.storage.details', $pc_part->storages->id) }}"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Specifications</button></a></p>
        <p class="card-text">MOTHERBOARD : {{ $pc_part->motherboards->name}} <a href="{{ route('show.motherboard.details', $pc_part->motherboards->id) }}"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Specifications</button></a></p>



    </div>
    <hr />
</div>
</div>
