<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'id_voiture',
        'created_at',
        'updated_at'
    ];
    public function voiture(){
        return $this->beLongsTo(Voiture::class);
    }
}
