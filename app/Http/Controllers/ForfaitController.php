<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Forfait;
use App\Models\Inscription;
use Illuminate\Http\Request;

class ForfaitController extends Controller
{
    //
    public function index()
    {
        $forfaits = Forfait::all();
        return view('forfaits', compact('forfaits'));
    }
    public function inscriptionForm($id)
    {
        $forfait = Forfait::find($id);
        $id = Auth::user()->id;
        

        return view('inscription_form', compact('forfait','id'));
    }

    
}
