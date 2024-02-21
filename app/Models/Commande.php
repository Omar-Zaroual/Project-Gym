<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $primaryKey = 'IdCom';

    protected $fillable = [
        'DateCom',
        'IdPr',
        'IdCl',
        'QtePrix',
        'QteCommander',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'IdCl');
    }

    public function produit()
    {
        return $this->belongsTo(Produit::class, 'IdPr');
    }
}
