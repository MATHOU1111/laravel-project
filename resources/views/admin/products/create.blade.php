@extends('layouts.app')

@section('title', 'Create New Product')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h2 class="card-title mb-0">Créer un nouveau produit</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="name">Nom du produit</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" rows="5" required></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="price">Prix (€)</label>
                            <input type="number" name="price" id="price" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="stock">Stock</label>
                            <input type="number" name="stock" id="stock" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="category_id">Categorie</label>
                            <select name="category_id" id="category_id" class="form-control" required>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- <div class="form-group mb-3">
                            <label for="image">Product Image</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div> --}}

                        <button type="submit" class="btn btn-primary">Créer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
