<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Modele;
use App\Models\User;
use App\Models\Voitures;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CommandeController extends Controller
{
    public function store(Request $request){
        $input= $request->all();
        if(Auth::user()){
            $commandes= Commande::create([
                'user_id'=>Auth::user()->id,
                'voitures_id'=>intval($input['idVoiture']),
            ]);
            return view('admin.payement');
        }
        else{
            $users= User::create([
                'name'=>$input['nom'],
                'email'=>$input['email'],
                'password'=>Hash::make(123456789),
                'statut'=> 3,
            ]);

            $newcommandes= Commande::create([
                'user_id'=>$users->id,
                'voitures_id'=>intval($input['idVoiture']),
            ]);
            return view('admin.payement');
        }


    }

    public function create(){

        $commandes= Commande::get();
        $voitures= Voitures::with('models')->get();
        $users= User::get();
        $models= Modele::get();
        //dump($marques);
        return View('admin.commandeEnCours', compact('commandes', 'voitures', 'users', 'models'));
    }

   public function setStatut($id){
       $commandes= Commande::find($id);
       $commandes->statut= 1;
       $commandes->user_id= $commandes->user_id;
       $commandes->voitures_id= $commandes->voitures_id;
       $commandes->save();
       return redirect()->back();
   }

   public function update(Request $request, $id){
    $commandes= Commande::find($id);
    $commandes->user_id= $request->user_id;
    $commandes->voitures_id= $request->voitures_id;
    $commandes->statut= $commandes->statut;
    $commandes->save();
    return redirect()->back()->with('success','Modification effectuer avec succes');
    }


    public function destroy($id)
    {
        Commande::find($id)->delete();

        return redirect()->back()->with('success', 'Supprimer');
    }

    public function payement(){
        return view('admin.payement');
    }

}
