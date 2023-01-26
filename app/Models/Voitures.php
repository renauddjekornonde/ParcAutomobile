<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voitures extends Model
{
    use HasFactory;
    protected $fillable = [
    'marque',
    'model',
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
}
