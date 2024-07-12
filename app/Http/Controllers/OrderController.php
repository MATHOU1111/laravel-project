<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function showCheckoutForm()
    {
        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'Votre panier est vide.');
        }

        return view('checkout.form', compact('cart'));
    }

    public function processCheckout(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'postal_code' => 'required|string|max:10',
            'country' => 'required|string|max:255',
            'payment_method' => 'required|string'
        ]);

        // Récupérer le panier depuis la session
        $cart = session()->get('cart', []);

        // Calcul du total du panier
        $total = array_reduce($cart, function ($carry, $item) {
            return $carry + ($item['price'] * $item['quantity']);
        }, 0);

        // Création de la commande
        $order = new Order();
        $order->name = $request->input('name');
        $order->email = $request->input('email');
        $order->address = $request->input('address');
        $order->city = $request->input('city');
        $order->postal_code = $request->input('postal_code');
        $order->country = $request->input('country');
        $order->payment_method = $request->input('payment_method');
        $order->products = json_encode($cart); // Convertir le panier en JSON pour l'enregistrement
        $order->total_amount = $total;
        $order->status = 'pending';
        $order->save();

        // Vider le panier après la commande
        session()->forget('cart');

        return redirect()->route('products.index')->with('success', 'Votre commande a été passée avec succès.');
    }
}