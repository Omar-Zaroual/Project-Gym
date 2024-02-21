<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forfait extends Model
{
    protected $table = 'forfaits';

    protected $primaryKey = 'NumFor';

    protected $fillable = [
        'TypeFor',
        'Prix',
        
    ];
}
