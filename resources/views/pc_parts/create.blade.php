@extends('pc_parts.layout')
@section('content')

    <div class="card" style="margin: 20px;">
        <div class="card-header">Build a PC</div>

        <div class="card-body">

            <form method="POST" action="{{ url('pc_part') }}">
                {!! csrf_field() !!}
                <div>
                    <label for="cpus_id">CPU:</label>
                    <select name="cpus_id" id="cpus_id">
                        <option value="">Select a CPU</option>
                        @foreach ($cpus as $cpu)
                            <option value="{{ $cpu->id }}">{{ $cpu->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="gpus_id">GPU:</label>
                    <select name="gpus_id" id="gpus_id">
                        <option value="">Select a GPU</option>
                        @foreach ($gpus as $gpu)
                            <option value="{{ $gpu->id }}">{{ $gpu->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="rams_id">RAM:</label>
                    <select name="rams_id" id="rams_id">
                        <option value="">Select a RAM</option>
                        @foreach ($rams as $ram)
                            <option value="{{ $ram->id }}">{{ $ram->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="power_supplies_id">PSU:</label>
                    <select name="power_supplies_id" id="power_supplies_id">
                        <option value="">Select a PSU</option>
                        @foreach ($power_supplies as $pdu)
                            <option value="{{ $pdu->id }}">{{ $pdu->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="cpu_coolers_id">CPU COOLER:</label>
                    <select name="cpu_coolers_id" id="cpu_coolers_id">
                        <option value="">Select a CPU COOLER</option>
                        @foreach ($cpu_coolers as $cpu)
                            <option value="{{ $cpu->id }}">{{ $cpu->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="towers_id">TOWER:</label>
                    <select name="towers_id" id="towers_id">
                        <option value="">Select a TOWER</option>
                        @foreach ($towers as $tower)
                            <option value="{{ $tower->id }}">{{ $tower->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="storages_id">STORAGE:</label>
                    <select name="storages_id" id="storages_id">
                        <option value="">Select a STORAGE</option>
                        @foreach ($storages as $storage)
                            <option value="{{ $storage->id }}">{{ $storage->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="motherboards_id">MOTHERBOARD:</label>
                    <select name="motherboards_id" id="motherboards_id">
                        <option value="">Select a MOTHERBOARD</option>
                        @foreach ($motherboards as $motherboard)
                            <option value="{{ $motherboard->id }}">{{ $motherboard->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Repeat the above select fields for each component -->
                <a href="{{ url('/home') }}" class="btn btn-success btn-sm" title="Add New PC">
                    Buy Now
                </a>
                <button type="submit" value="Save">Add to Cart</button>

                <a href="{{ url('/home') }}" class="btn btn-success btn-sm" title="Add New PC">
                    Go back
                </a>
            </form>
        </div>
    </div>
@stop
