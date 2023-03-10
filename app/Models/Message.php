<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = [
        'contenu',
        'user_id',
        'nom',
        'prenom',
        'email',
        'created_at',
        'updated_at'
    ];
    public function messageUsers(){
        return $this->hasMany(User::class);
    }
}
