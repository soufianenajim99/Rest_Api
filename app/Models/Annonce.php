<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'description',
        'localisation',
        'date',
        'comps',
    ];

    public function organisateur(){
        return $this->belongsTo(Organisateur::class);
    }
}