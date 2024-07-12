@extends('layouts.app')

@section('title', 'Order Details')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Détails de la commande</h1>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-3">ID:</div>
                        <div class="col-md-9">{{ $order->id }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">Nom:</div>
                        <div class="col-md-9">{{ $order->name }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">Email:</div>
                        <div class="col-md-9">{{ $order->email }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">Adresse:</div>
                        <div class="col-md-9">{{ $order->address }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">Ville:</div>
                        <div class="col-md-9">{{ $order->city }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">Code postal:</div>
                        <div class="col-md-9">{{ $order->postal_code }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">Pays:</div>
                        <div class="col-md-9">{{ $order->country }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">Méthode de paiement:</div>
                        <div class="col-md-9">{{ $order->payment_method }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">Statut:</div>
                        <div class="col-md-9">{{ $order->status }}</div>
                    </div>

                    {{-- Section pour afficher les détails des produits de la commande --}}
                    @php
                        $products = is_array($order->products) ? $order->products : json_decode($order->products, true);
                    @endphp
                    @if (!empty($products))
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <h2>Détails des produits commandés</h2>
                                @foreach ($products as $productId => $productDetails)
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img src="{{ $productDetails['image'] }}" alt="{{ $productDetails['name'] }}" class="img-fluid">
                                                </div>
                                                <div class="col-md-8">
                                                    <h5 class="card-title">{{ $productDetails['name'] }}</h5>
                                                    <p class="card-text">Prix: {{ $productDetails['price'] }} €</p>
                                                    <p class="card-text">Quantité: {{ $productDetails['quantity'] }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @else
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <h2>Aucun détail de produit trouvé pour cette commande</h2>
                            </div>
                        </div>
                    @endif

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
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette commande ?')">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
