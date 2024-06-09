@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row">
            @foreach($productos as $product)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text"><strong>Precio:</strong> ${{ number_format($product->price, 2) }}</p>
                            <a href="{{ route('comprar', ['id' => $product->id]) }}" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
