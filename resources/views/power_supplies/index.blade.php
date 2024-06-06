@extends('power_supplies.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin: 20px">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>POWER SUPPLY</h2>
                    </div>
                    <div class="card-body">
                        
                        <a href="{{ route('create.power_supply') }}" class="btn btn-success btn-sm" title="Add New POWER SUPPLY">
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
                                        <th>Wattage</th>
                                        <th>Efficiency Rating</th>
                                        <th>Modularity</th>
                                        <th>Fan size</th>
                                        <th>Price</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($power_supplies as $item)
                                        <tr>
                                            <td>{{ $loop->iteration}}</td>
                                            <td>{{ $item->brand}}</td>
                                            <td>{{ $item->name}}</td>
                                            <td>{{ $item->wattage}}</td>
                                            <td>{{ $item->efficiency_rating}}</td>
                                            <td>{{ $item->modularity}}</td>
                                            <td>{{ $item->fan_size}}</td>
                                            <td>{{ $item->price}}</td>

                                            <td>
                                                <a href="{{ route('show.power_supply.details', $item->id) }}" title="View POWER SUPPLY"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View</button></a>
                                                <a href="{{ route('edit.power_supply', ['id' => $item->id]) }}" title="Edit POWER SUPPLY"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>
                                                <form method="post" action="{{ route('delete.power_supply', ['id' => $item->id]) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                   <button type="submit" class="btn btn-danger btn-sm" title="Delete POWER SUPPLY" onclick="return confirm('Confirm delete?')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Delete</button>
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
