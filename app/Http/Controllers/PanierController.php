<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Commande;
use Illuminate\Http\Request;
use App\Models\HistoriqueCmd;

class PanierController extends Controller
{
    //
    public function index()
    {
        $commandes = Commande::all();
        $totalQuantity = Commande::sum('QtePrix');
        $produits = [];

        foreach ($commandes as $commande) {
            $produits[$commande->IdCom] = Produit::where('IdPr', $commande->IdPr)->get();
        }

        
        return view('panier', compact('commandes','produits','totalQuantity'));
        
    }
    public function deleteAllRecords(Request $request)
    {
        $commande=Commande::all();
        foreach ($commande as $c) { 
            $h=new HistoriqueCmd();
            $h->DateCom=$c->DateCom;
            $h->IdPr=$c->IdPr;
            $h->IdCl=$c->IdCl;
            $h->QtePrix=$c->QtePrix;
            $h->QteCommander=$c->QteCommander;
            $h->save();
        }
        Commande::truncate(); 
        return redirect()->route('produits')
        ->with('msg', 'merci, vous contacterez pour livrer sa commande.');
    }
    
}
