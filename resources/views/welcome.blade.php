@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">               
            @if ($products->count() == 0)
                <div class="mt-5" style="font-size: 20px;">Not found</div>
            @endif
            @foreach ($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card position-relative">
                        <img class='img-fluid' alt='article image' src="{{asset('storage/products/product.png')}}">
                        <div class="card-body">
                            <div style="font-size: 20px;">{{ $product->name }}</div>
                            <p class="mt-2">Price: {{ $product->price }}$</p>
                        </div>
                        <a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-felx justify-content-center">

            {{ $products->links() }}

        </div>
    </div>
@endsection