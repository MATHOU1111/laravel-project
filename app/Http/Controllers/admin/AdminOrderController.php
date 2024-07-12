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
    public function updateStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        
        // Valider et mettre à jour le statut de la commande
        $request->validate([
            'status' => ['required', Rule::in(['En cours de préparation', 'Validé', 'En transit', 'Livré'])]
        ]);
    
        $order->update([
            'status' => $request->input('status')
        ]);
    
        return redirect()->route('admin.orders.show', $order)->with('success', 'Order status updated successfully.');
    }

    // Supprimer une commande
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('admin.orders.index')->with('success', 'Order deleted successfully.');
    }
}