<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    protected $table = 'inscriptions';
    protected $primaryKey = 'NumInsc';
    public $timestamps = true;

    protected $fillable = [
        'DateInsc',
        'TypeFor',
        'NumFor',
        'IdCl',
    ];

    // Define the relationships with other models here
    public function forfait()
    {
        return $this->belongsTo(Forfait::class, 'NumFor', 'NumFor');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'IdCl', 'id');
    }
}
