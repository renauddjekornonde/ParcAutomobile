<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommandeController extends Controller
{
    public function store(Request $request){
        $input= $request->all();
        if(Auth::user()){
            $commandes= Commande::create([
                'user_id'=>Auth::user()->id,
                'voitures_id'=>$input['idVoiture'],
            ]);
        }
        else{
            $users= User::create([
                'name'=>$input['nom'],
                'email'=>$input['email'],
                'password'=>$input['password'],
                'statut'=> 3,
            ]);

            $newcommandes= Commande::create([
                'user_id'=>$users->id,
                'voitures_id'=>$input['idVoiture'],
            ]);
        }
    }

}
