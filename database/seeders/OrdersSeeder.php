<?php

namespace Database\Seeders; // Assurez-vous d'utiliser le bon namespace

use Illuminate\Database\Seeder;
use App\Models\Order;

class OrdersSeeder extends Seeder
{
    public function run()
    {
        // Exemple de création de commandes
        Order::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'address' => '123 Rue Principale',
            'city' => 'Paris',
            'postal_code' => '75001',
            'country' => 'France',
            'payment_method' => 'Carte de crédit',
            'total_amount' => 150.00,
            'status' => 'En attente de livraison',
            'products' => '{
                            "3": {
                                "name": "recusandae",
                                "image": "https://via.placeholder.com/400x300.png/0066ff?text=technics+qui",
                                "price": "731.99",
                                "quantity": 1
                                }
                            }'
            ]);

        Order::create([
            'name' => 'Jane Smith',
            'email' => 'jane.smith@example.com',
            'address' => '456 Avenue Elm',
            'city' => 'Los Angeles',
            'postal_code' => '90001',
            'country' => 'USA',
            'payment_method' => 'PayPal',
            'total_amount' => 200.00,
            'status' => 'En attente de livraison',
            'products' => '{
                            "3": {
                                "name": "recusandae",
                                "image": "https://via.placeholder.com/400x300.png/0066ff?text=technics+qui",
                                "price": "731.99",
                                "quantity": 1
                                }
                            }'
            ]);

        // Ajoutez d'autres commandes si nécessaire
    }
}
