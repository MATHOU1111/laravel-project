<!-- resources/views/admin/orders/index.blade.php -->

@extends('layouts.app')

@section('title', 'Manage Orders')

@section('content')
<div class="container">
    <h1>Manage Orders</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Customer Name</th>
                <th>Total Amount</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->customer_name }}</td>
                    <td>{{ $order->total_amount }} €</td>
                    <td>{{ $order->status }}</td>
                    <td>
                        <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-info btn-sm">View</a>
                        {{-- <form action="{{ route('admin.orders.update', $order->id) }}" method="POST" style="display: inline-block;"> --}}
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-success btn-sm">Mark as Processed</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
