@extends('storages.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin: 20px">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>STORAGE</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('create.storage') }}" class="btn btn-success btn-sm" title="Add New STORAGE">
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
                                        <th>Type</th>
                                        <th>Capacity</th>
                                        <th>Interface</th>
                                        <th>Form Factor</th>
                                        <th>Read Speed</th>
                                        <th>Write Speed</th>
                                        <th>Price</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($storages as $item)
                                        <tr>
                                            <td>{{ $loop->iteration}}</td>
                                            <td>{{ $item->brand}}</td>
                                            <td>{{ $item->name}}</td>
                                            <td>{{ $item->type}}</td>
                                            <td>{{ $item->capacity}}</td>
                                            <td>{{ $item->interface}}</td>
                                            <td>{{ $item->form_factor}}</td>
                                            <td>{{ $item->read_speed}}</td>
                                            <td>{{ $item->write_speed}}</td>
                                            <td>{{ $item->price}}</td>

                                            <td>
                                                <a href="{{ route('show.storage.details', $item->id) }}" title="View STORAGE"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View</button></a>
                                                <a href="{{ route('edit.storage', ['id' => $item->id]) }}"title="Edit STORAGE"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>
                                                <form method="post" action="{{ route('delete.storage', ['id' => $item->id]) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                   <button type="submit" class="btn btn-danger btn-sm" title="Delete STORAGE" onclick="return confirm('Confirm delete?')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Delete</button>
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
