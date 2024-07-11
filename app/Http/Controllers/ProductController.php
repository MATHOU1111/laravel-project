<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    // Afficher tous les produits par catégorie
    public function index()
    {
        $categories = Category::with('products')->get();
        return view('products.index', compact('categories'));
    }

    // Afficher les détails d'un produit spécifique
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }
}
