<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    // Afficher tous les produits (Admin)
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    // Afficher le formulaire de création d'un produit (Admin)
    public function create()
    {
        // Logic for showing create form
        return view('admin.products.create');
    }

    // Enregistrer un nouveau produit (Admin)
    public function store(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            // Ajoute d'autres règles de validation selon tes besoins
        ]);

        // Création d'un nouveau produit
        Product::create($request->all());

        // Redirection avec un message de succès
        return redirect()->route('admin.products.index')
                         ->with('success', 'Product created successfully.');
    }

    // Afficher les détails d'un produit spécifique (Admin)
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.show', compact('product'));
    }

    // Afficher le formulaire d'édition d'un produit (Admin)
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

    // Mettre à jour les informations d'un produit (Admin)
    public function update(Request $request, $id)
    {
        // Validation des données du formulaire
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            // Ajoute d'autres règles de validation selon tes besoins
        ]);

        // Recherche du produit à mettre à jour
        $product = Product::findOrFail($id);
        
        // Mise à jour des informations du produit
        $product->update($request->all());

        // Redirection avec un message de succès
        return redirect()->route('admin.products.index')
                         ->with('success', 'Product updated successfully.');
    }

    // Supprimer un produit (Admin)
    public function destroy($id)
    {
        // Recherche du produit à supprimer
        $product = Product::findOrFail($id);

        // Suppression du produit
        $product->delete();

        // Redirection avec un message de succès
        return redirect()->route('admin.products.index')
                         ->with('success', 'Product deleted successfully.');
    }
}
