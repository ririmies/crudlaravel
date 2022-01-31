@extends('layoutcos')
@section('title', 'Products')
<div class="row">
    <div class="logout_btn" style="margin-left: 30px">
        <a href="{{ url('/logout') }}" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-log-out"></span> Log out</a>
    </div>
</div>
@section('content')
    <div class="container products">
        <div class="row">
            @foreach($products as $product)
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="{{ $product->photo }}" width="500" height="300">
                        <div class="caption">
                            <h4>{{ $product->name }}</h4>
                            <p>{{ \Illuminate\Support\Str::limit(strtolower($product->description), 50)}}</p>
                            <p><strong>Price: </strong> {{ $product->price}}$</p>
                            <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Pune in cos</a> </p>
                            <p class="btn-holder"><a href="{{ url('products/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Detalii</a> </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div><!-- End row -->
    </div>
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
            <a href="{{ url('products') }}" class="btn btn-primary btn block" style="padding-top: 10px">Adauga un produs nou</a>
        </div>
    </div>
@endsection
