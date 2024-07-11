@extends('layouts.app')

@section('title', 'Produits')

@section('content')
<div class="container">
    <h1>Nos Produits</h1>
    @foreach($categories as $category)
        <h2>{{ $category->name }}</h2>
        <div class="row">
            @foreach($category->products as $product)
                <div class="col-md-4">
                    <a href="{{ route('products.show', $product->id) }}" class="text-decoration-none text-dark">
                        <div class="card mb-4">
                            <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                                <p class="card-text">{{ $product->price }} €</p>
                                <!-- Formulaire pour ajouter au panier -->
                                <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Ajouter au panier</button>
                                </form>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    @endforeach
</div>
@endsection