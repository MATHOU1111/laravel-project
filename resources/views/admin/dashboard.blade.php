<!-- resources/views/admin/dashboard.blade.php -->

@extends('layouts.app')  {{-- Assure-toi d'avoir un layout de base qui inclut Bootstrap --}}

@section('title', 'Admin Dashboard')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Admin Dashboard</h1>
                    <p class="card-text">Welcome to the admin dashboard.</p>
                    <hr>
                    <div class="d-grid gap-2">
                        <a href="{{ route('admin.products.index') }}" class="btn btn-primary">Manage Products</a>
                        <a href="{{ route('admin.orders.index') }}" class="btn btn-primary">Manage Orders</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
