<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hardevine\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    //
    public function store(Request $request)
{
    $date = now();
    $id = Auth::user()->id;
    $totale = $request->Prix * $request->input('QteCommander');
    $P = Commande::where('IdPr', $request->produit)->get();

    if ($P->count() == 0) {
        $panier = new Commande();
        $panier->DateCom = $date;
        $panier->IdPr = $request->produit;
        $panier->IdCl = $id;
        $panier->QtePrix = $totale;
        $panier->QteCommander = $request->input('QteCommander');
        $panier->save();
    } else {
        foreach ($P as $p) {
            $p->QteCommander += $request->input('QteCommander');
            $p->QtePrix += $totale;
            $p->save();
        }
    }
    return redirect()->route('produits')
    ->with('message', 'Produits bien ajoutés!');
}
}