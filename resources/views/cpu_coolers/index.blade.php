@extends('cpu_coolers.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin: 20px">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>CPU COOLER</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('create.cpu_cooler') }}" class="btn btn-success btn-sm" title="Add New CPU COOLER">
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
                                        <th>Noise Level</th>
                                        <th>Fan Size</th>
                                        <th>Height</th>
                                        <th>Price</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cpu_coolers as $item)
                                        <tr>
                                            <td>{{ $loop->iteration}}</td>
                                            <td>{{ $item->brand}}</td>
                                            <td>{{ $item->name}}</td>
                                            <td>{{ $item->type}}</td>
                                            <td>{{ $item->noise_level}}</td>
                                            <td>{{ $item->fan_size}}</td>
                                            <td>{{ $item->height}}</td>
                                            <td>{{ $item->price}}</td>

                                            <td>
                                                <a href="{{ route('show.cpu_cooler.details', $item->id) }}" title="View CPU COOLER"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View</button></a>
                                                <a href="{{ route('edit.cpu_cooler', ['id' => $item->id]) }}" title="Edit CPU COOLER"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>
                                                <form method="post" action="{{ route('delete.cpu_cooler', ['id' => $item->id]) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                   <button type="submit" class="btn btn-danger btn-sm" title="Delete CPU COOLER" onclick="return confirm('Confirm delete?')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Delete</button>
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
