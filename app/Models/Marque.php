<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_marque',
        'created_at',
        'updated_at'
    ];
    public function marqueVoiture(){
        return $this->hasMany(Voitures::class);
    }
}
