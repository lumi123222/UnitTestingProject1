@extends('gpus.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin: 20px">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>GPU</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('create.gpu') }}" class="btn btn-success btn-sm" title="Add New GPU">
                            Add New
                        </a>
                        <a href="{{ route('admin.home') }}" class="btn btn-success btn-sm" title="Turn Back to Main" >
                            Return to Main
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Brand</th>
                                        <th>Name</th>
                                        <th>Core Clock</th>
                                        <th>Boost Clock</th>
                                        <th>Memory</th>
                                        <th>Memory Type</th>
                                        <th>Memory Clock</th>
                                        <th>Interface</th>
                                        <th>TDP</th>
                                        <th>Price</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($gpus as $item)
                                        <tr>
                                            <td>{{ $loop->iteration}}</td>
                                            <td>{{ $item->brand}}</td>
                                            <td>{{ $item->name}}</td>
                                            <td>{{ $item->core_clock}}</td>
                                            <td>{{ $item->boost_clock}}</td>
                                            <td>{{ $item->memory}}</td>
                                            <td>{{ $item->memory_type}}</td>
                                            <td>{{ $item->memory_clock}}</td>
                                            <td>{{ $item->interface}}</td>
                                            <td>{{$item->tdp}}</td>
                                            <td>{{ $item->price}}</td>

                                            <td>
                                                <a href="{{ route('show.gpu.details', $item->id) }}" title="View GPU"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View</button></a>
                                                <a href="{{ route('edit.gpu', ['id' => $item->id]) }}" title="Edit GPU"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>
                                                <form method="post" action="{{ route('delete.gpu', ['id' => $item->id]) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                   <button type="submit" class="btn btn-danger btn-sm" title="Delete GPU" onclick="return confirm('Confirm delete?')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Delete</button>
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
