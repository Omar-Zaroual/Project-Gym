<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use Illuminate\Http\Request;

class SubmitForfaitController extends Controller
{
    //
    public function submitInscription(Request $request)
    {
        
        $validatedDatainsc = $request->validate([
            'DateInsc' => 'required',
            'TypeFor' => 'required',
            'NumFor' => 'required',
            'IdCl' => 'required',
        ]);
        
        
        
        $inscription = new Inscription($validatedDatainsc);
        $inscription->save();

        
        return redirect()->route('forfaits')
        ->with('message', 'Enregistrement validé, nous nous mettrons en contact bientôt.');
    }
}
