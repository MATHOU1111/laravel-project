<!-- resources/views/admin/products/index.blade.php -->
@extends('layouts.app')

@section('title', 'Manage Products')

@section('content')
<div class="container">
    <h1>Manage Products</h1>

    <a href="{{ route('admin.products.create') }}" class="btn btn-primary mb-3">Create New Product</a>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($product->description, 100) }}</td>
                    <td>{{ $product->price }} €</td>
                    <td>
                        {{-- <a href="{{ route('admin.products.show', $product->id) }}" class="btn btn-info btn-sm">View</a> --}}
                        {{-- <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-primary btn-sm">Edit</a> --}}
                        {{-- <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display: inline-block;"> --}}
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

