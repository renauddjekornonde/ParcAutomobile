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
        'prix',
        'voitures_id',
        'created_at',
        'updated_at'
    ];

    public function modelVoiture(){
        return $this->belongsTo(Voitures::class);
    }

    public function modelPhoto(){
        return $this->hasMany(Photo::class);
    }
}
