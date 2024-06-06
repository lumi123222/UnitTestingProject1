@extends('pc_parts.layout')
@section('content')

<div class="container">
    <div class="row" style="margin: 20px">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Build a PC</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/pc_part/create') }}" class="btn btn-success btn-sm" title="Add New PC">
                        Build a PC
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>CPU</th>
                                    <th>GPU</th>
                                    <th>RAM</th>
                                    <th>POWER SUPPLY</th>
                                    <th>CPU COOLER</th>
                                    <th>TOWER</th>
                                    <th>STORAGE</th>
                                    <th>MOTHERBOARD</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pc_parts as $item)
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>{{ $item->cpus->name}}</td>
                                        <td>{{ $item->gpus->name}}</td>
                                        <td>{{ $item->rams->name}}</td>
                                        <td>{{ $item->power_supplies->name}}</td>
                                        <td>{{ $item->cpu_coolers->name}}</td>
                                        <td>{{ $item->towers->name}}</td>
                                        <td>{{ $item->storages->name}}</td>
                                        <td>{{ $item->motherboards->name}}</td>

                                        <td>
                                            <a href="{{ url('/pc_part/' . $item->id) }}" title="View PC PARTS"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View</button></a>
                                            <a href="{{ url('/pc_part/' . $item->id . '/edit')}}" title="Edit PC PARTS"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>
                                            <form method="post" action="{{ url('/pc_part' . '/' . $item->id )}}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                               <button type="submit" class="btn btn-danger btn-sm" title="Delete PC PARTS" onclick="return confirm('Confirm delete?')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Delete</button>
                                            </form>

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection
