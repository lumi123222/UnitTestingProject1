@extends('layouts.app')
@section('content')
    @php
        $price = rand(500, 2000);
    @endphp
    <div class="card" style="margin: 20px;">
        <div class="card-header">Checkout</div>

        <div class="card-body">
            <a href="/home" class="btn btn-success btn-sm" title="Turn Back to Main">
                Go Back</a>
            <br/>
            PRODUCT BOUGHT SUCCESSFULLY!


        </div>

    </div>
@endsection
