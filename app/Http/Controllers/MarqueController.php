<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marque;
use App\Models\Voitures;

class MarqueController extends Controller
{
    

     public function create(){

         $marques= Marque::get();
         //dump($marques);
         return View('admin.createMarque', compact('marques'));
     }

    public function setStatut($id){
        $marques= Marque::find($id);
        $marques->nom_marque= $marques->nom_marque;
        $marques->statut= 1;
        $marques->save();
        return redirect()->back();
    }

    public function store(Request $request){
        $input = $request->all();

        //creation d'une marque puis recuperation de son identifiant
        $marque= Marque::create([
            'nom_marque'=>$input['marque'],
        ]);

        return redirect()->back()->with('success', 'Marque enregistrer avec succes');
    }
    public function show($id)
    {
        $marque= Marque::findOrFail($id);

         return view('admin.show', compact('marque'));
    }

    public function editer($id)
    {
        $marque= Marque::findOrFail($id);

         return view('admin.editerMarque');
    }

    public function update(Request $request, $id){
        $marque= Marque::find($id);
        $marque->nom_marque= $request->marque;
        $marque->statut= $marque->statut;
        $marque->save();
        return redirect()->back()->with('success','Modification effectuer avec succes');
    }


    public function destroy($id)
    {
        Marque::find($id)->delete();

        return redirect()->back()->with('success', 'Supprimer');
    }

}
