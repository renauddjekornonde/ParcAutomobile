<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voitures extends Model
{
    use HasFactory;
    protected $fillable = [
    'marque_id',
    'statut',
    'created_at',
    'updated_at'
];
public function photo(){
    return $this->hasMany(Photo::class);
}
public function admin(){
    return $this->beLongsTo(Admin::class);
}
public function commande(){
    return $this->beLongsTo(Commande::class);
}
public function voitureMarque(){
    return $this->belongsTo(Marque::class, 'marque_id');
}

public function models(){
    return $this->hasMany(Modele::class);
}

public function voiturePhotos(){
    return $this->hasMany(Photo::class);
}
}
