@extends('layouts.app')

@section('title', $product->name)

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ $product->image }}" class="img-fluid" alt="{{ $product->name }}">
        </div>
        <div class="col-md-6">
            <h1>{{ $product->name }}</h1>
            <p>{{ $product->description }}</p>
            <h2>{{ $product->price }} €</h2>
            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="quantity">Quantité</label>
                    <input type="number" name="quantity" id="quantity" class="form-control" value="1" min="1" max="{{ $product->quantity }}">
                </div>
                <button type="submit" class="btn btn-primary">Ajouter au panier</button>
            </form>
        </div>
    </div>
</div>
@endsection
