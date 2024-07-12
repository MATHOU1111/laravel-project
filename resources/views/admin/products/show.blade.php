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
            <p>Quantité disponible: {{ $product->quantity }}</p>
            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-primary">Modifier</a>
                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
