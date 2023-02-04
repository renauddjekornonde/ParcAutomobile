<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = [
        'voitures_id',
        'user_id',
        'created_at',
        'updated_at'
    ];
    public function commandeVoiture(){
        return $this->hasMany(Voitures::class);
    }
    public function users(){
        return $this->belongsTo(User::class);
    }
}
