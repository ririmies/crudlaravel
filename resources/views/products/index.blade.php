@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Adauga un produs nou</h2>
            </div>
            <div class="pull-right" style="margin-top: 10px">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered" style="margin-top: 10px">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th>Photo</th>
            <th width="280px">Price</th>
            <th width="380px">Action</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td><img src="{{ $product->photo }}" width="200" height="100"></td>
                <td>{{ $product->price }}$</td>
                <td>
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                        <a class="btn btn-info" style="margin-bottom: 5px" href="{{ route('products.show',$product->id) }}">Show</a>

                        <a class="btn btn-primary" style="margin-bottom: 5px; margin-right: 5px" href="{{ route('products.edit',$product->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger" style="margin-bottom: 5px">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $products->links() !!}
    <div class="row" style="margin-bottom: 15px">
        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
            <a href="{{ url('/') }}" class="btn btn-primary btn block" style="padding-top: 10px">Inapoi la catalog</a>
        </div>
    </div>
@endsection
