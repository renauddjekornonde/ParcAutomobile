<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'password',
        'voiture_id',
        'created_at',
        'updated_at'
    ];
    public function voitureAdmin(){
        return $this->hasMany(Voitures::class);
    }
}
