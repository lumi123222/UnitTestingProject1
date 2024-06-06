@extends('cpus.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin: 20px">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>CPU</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('create.cpu') }}" class="btn btn-success btn-sm" title="Add New CPU">
                            Add New
                        </a>
                        <a href="{{ route('admin.home') }}" class="btn btn-success btn-sm" title="Turn Back to Main" >
                            Return to Main
                        </a>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Brand</th>
                                        <th>Name</th>
                                        <th>Socket</th>
                                        <th>Cores</th>
                                        <th>Threads</th>
                                        <th>Base Clock</th>
                                        <th>Turbo</th>
                                        <th>RAM Type</th>
                                        <th>RAM Speed</th>
                                        <th>TDP</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cpus as $item)
                                        <tr>
                                            <td>{{ $loop->iteration}}</td>
                                            <td>{{ $item->brand}}</td>
                                            <td>{{ $item->name}}</td>
                                            <td>{{ $item->socket}}</td>
                                            <td>{{ $item->cores}}</td>
                                            <td>{{ $item->threads}}</td>
                                            <td>{{ $item->base_clock}}</td>
                                            <td>{{ $item->turbo}}</td>
                                            <td>{{ $item->ram_type}}</td>
                                            <td>{{ $item->ram_speed}}</td>
                                            <td>{{ $item->tdp}}</td>
                                            <td>{{ $item->price}}</td>
                                            <td>
                                                <a href="{{ route('show.cpu.details', $item->id) }}"title="View CPU"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Details</button></a>
                                                <a href="{{ route('edit.cpu', ['id' => $item->id]) }}" title="Edit CPU"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>
                                                <form method="post" action="{{ route('delete.cpu', ['id' => $item->id]) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                   <button type="submit" class="btn btn-danger btn-sm" title="Delete CPU" onclick="return confirm('Confirm delete?')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Delete</button>
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
