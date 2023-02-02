<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'created_at',
        'updated_at',
        'voitures_id'
    ];
    public function photoVoiture(){
        return $this->belongsTo(Voitures::class);
    }
}
