<?php

// app/Http/Controllers/AdminOrderController.php

namespace App\Http\Controllers\admin; // Assure-toi que le namespace correspond au chemin du fichier

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class AdminOrderController extends Controller

{
    // Afficher toutes les commandes
    public function index()
    {
        $orders = Order::all();
        return view('admin.orders.index', compact('orders'));
    }

    // Afficher les détails d'une commande spécifique
    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('admin.orders.show', compact('order'));
    }

    // Mettre à jour le statut d'une commande
    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        
        // Mettre à jour le statut de la commande
        $order->update([
            'status' => 'processed' // Par exemple, tu peux ajuster selon tes besoins
        ]);

        return redirect()->route('admin.orders.index')->with('success', 'Order status updated successfully.');
    }
}
