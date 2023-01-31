<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modele extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_model',
        'couleur',
        'created_at',
        'updated_at'
    ];
    public function modelVoiture(){
        return $this->belongsTo(Voitures::class);
    }
}
