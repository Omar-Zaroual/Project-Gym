<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    //
    public function index()
    {
        $produits = Produit::paginate(6);
        return view('produits', compact('produits'));
    }
}
