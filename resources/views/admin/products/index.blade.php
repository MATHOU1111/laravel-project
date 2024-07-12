@extends('layouts.app')

@section('title', 'Manage Products')

@section('content')
<div class="container">
    <a href="{{ route('admin.products.create') }}" class="btn btn-success mb-4">Ajouter un nouveau produit</a>

    @foreach($categories as $category)
        <h2 class="my-4">{{ $category->name }}</h2>
        <div class="row">
            @foreach($category->products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="{{ route('admin.products.show', $product->id) }}" class="text-decoration-none text-dark">
                            <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ \Illuminate\Support\Str::limit($product->description, 100) }}</p>
                                <p class="card-text">{{ $product->price }} €</p>
                            </div>
                        </a>
                        <div class="card-footer bg-white">
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-primary btn-sm">Modifier</a>
                                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
</div>
@endsection
