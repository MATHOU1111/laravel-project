@extends('layouts.app')

@section('title', 'Manage Orders')

@section('content')
<div class="container">
    <h1>Commandes</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom du client</th>
                <th>Prix</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->total_amount }} €</td>
                    <td>{{ $order->status }}</td>
                    <td>
                        <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-info btn-sm">Voir</a>
                        @if ($order->status !== 'Livré')
                        <form action="{{ route('admin.orders.updateStatus', $order->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-success">Changer le statut</button>
                            </form>
                        @else
                            
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
