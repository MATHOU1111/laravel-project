<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // Afficher tous les produits (Admin)
    public function index()
    {
        $categories = Category::with('products')->get();
        return view('admin.products.index', compact('categories'));
    }

    // Afficher le formulaire de création d'un produit (Admin)
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    // Enregistrer un nouveau produit (Admin)
    public function store(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|max:2048',
        ]);

        // Création d'un nouveau produit
        $product = new Product($request->only(['name', 'description', 'price', 'stock', 'category_id']));
        if ($request->hasFile('image')) {
            $product->image = $request->file('image')->store('images');
        }else {
            $product->image = 'https://via.placeholder.com/400x300.png/005500?text=image';
        }
        $product->save();

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
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    // Mettre à jour les informations d'un produit (Admin)
    public function update(Request $request, $id)
    {
        // Validation des données du formulaire
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|max:2048',
        ]);

        // Recherche du produit à mettre à jour
        $product = Product::findOrFail($id);
        
        // Mise à jour des informations du produit
        $product->update($request->only(['name', 'description', 'price', 'stock', 'category_id']));

        // Mise à jour de l'image si une nouvelle image est uploadée
        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image si elle existe
            if ($product->image) {
                Storage::delete($product->image);
            }
            $product->image = $request->file('image')->store('images');
        }

        // Enregistrer les modifications du produit
        $product->save();

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
