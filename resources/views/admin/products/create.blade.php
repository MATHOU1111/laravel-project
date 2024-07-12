<!-- resources/views/admin/products/create.blade.php -->

@extends('layouts.app')

@section('title', 'Create New Product')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Create New Product</h1>
                    
                    <form action="{{ route('admin.products.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" id="description" name="description"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="price">Price:</label>
                            <input type="number" class="form-control" id="price" name="price" step="0.01" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="image_url">Image URL:</label>
                            <input type="url" class="form-control" id="image_url" name="image_url">
                        </div>
                        
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="featured" name="featured">
                            <label class="form-check-label" for="featured">Featured</label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary mt-3">Create Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection