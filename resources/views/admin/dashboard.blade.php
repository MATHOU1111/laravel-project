<!-- resources/views/admin/dashboard.blade.php -->

@extends('layouts.app')  {{-- Assure-toi d'avoir un layout de base qui inclut Bootstrap --}}

@section('title', 'Admin Dashboard')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Administration</h1>
                    <hr>
                    <div class="d-grid gap-4">
                        <a href="{{ route('admin.products.index') }}" class="btn btn-primary">Produits</a>
                        <a href="{{ route('admin.orders.index') }}" class="btn btn-primary">Commandes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
