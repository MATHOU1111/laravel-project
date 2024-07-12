@extends('layouts.app')

@section('title', 'Order Details')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Order Details</h1>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-3">Order ID:</div>
                        <div class="col-md-9">{{ $order->id }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">Customer Name:</div>
                        <div class="col-md-9">{{ $order->name }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">Customer Email:</div>
                        <div class="col-md-9">{{ $order->email }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">Address:</div>
                        <div class="col-md-9">{{ $order->address }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">City:</div>
                        <div class="col-md-9">{{ $order->city }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">Postal Code:</div>
                        <div class="col-md-9">{{ $order->postal_code }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">Country:</div>
                        <div class="col-md-9">{{ $order->country }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">Payment Method:</div>
                        <div class="col-md-9">{{ $order->payment_method }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">Status:</div>
                        <div class="col-md-9">{{ $order->status }}</div>
                    </div>
                    @if ($order->status !== 'Livré')
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <form action="{{ route('admin.orders.updateStatus', $order->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-success">Changer le statut</button>
                                </form>
                            </div>
                        </div>
                    @endif
                    <div class="row mb-3">
                        <div class="col-md-6 text-end">
                            <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this order?')">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
