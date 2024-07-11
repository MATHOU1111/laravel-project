<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category; // Assure-toi que le namespace est correct selon où tes modèles sont définis
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
}