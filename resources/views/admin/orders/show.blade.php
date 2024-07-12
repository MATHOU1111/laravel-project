<!-- resources/views/admin/orders/show.blade.php -->

@extends('layouts.app')

@section('title', 'Order Details')

@section('content')
<div class="container">
    <h1>Order Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Order ID: {{ $order->id }}</h5>
            <p class="card-text">Customer Name: {{ $order->customer_name }}</p>
            <p class="card-text">Total Amount: {{ $order->total_amount }} €</p>
            <p class="card-text">Status: {{ $order->status }}</p>
            <!-- Autres détails de la commande à ajouter ici -->
        </div>
    </div>
</div>
@endsection
