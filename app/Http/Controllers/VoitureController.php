<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voitures;
use App\Models\Modele;
use App\Models\Marque;
use App\Http\Requests\VoitureStore;
use App\Models\Photo;
use Illuminate\Database\Eloquent\Model;

class VoitureController extends Controller
{
    public function index(){
       // $voitures= Voitures::with('voiturePhoto')->get();
       $voitures= Voitures::all();
       $cars= Voitures::with('voiturePhotos')->get();
       $models= Voitures::with('models')->get();
       $marques= Marque::get();

        return View('admin.index', compact('voitures', 'cars', 'models', 'marques'));
    }
    public function create(){
        $voitures= Voitures::all();
        $cars= Voitures::with('voiturePhotos')->get();
        $models= Voitures::with('models')->get();
        $marques= Voitures::with('voitureMarque')->get();
        //dump($marques);
        return View('admin.createVoiture', compact('voitures', 'cars', 'models', 'marques'));
    }

    public function store(Request $request){
        $input = $request->all();

        //creation d'une marque puis recuperation de son identifiant
        $marque= Marque::create([
            'nom_marque'=>$input['marque'],
        ]);
        $idMarque= $marque->id;

        //creation d'une voiture avec tous identifiants recuperer notamment idmarque idmodel et idphoto
        $voiture= Voitures::create([
            'marque_id'=>$idMarque,
            'statut'=>0,
            ]);
            $idVoiture=$voiture->id;

        //creation d'un model puis recuperation de son identifiant
        $model= Modele::create([
            'nom_model'=>$input['model'],
            'couleur'=>$input['couleur'],
            'voitures_id'=>$idVoiture,
        ]);



        $data= $request->all();
        // dd($data);
        for($i=0; $i< sizeof($data['image']); ++$i){

            $photos= new Photo();
            $files= $request->hasFile(['image']);

            if($files){
                 $newFile= $request->file(['image']);

                 $file_path= $newFile[$i]->store('public/images/');

                   $photos->description= $file_path;
                   $photos->voitures_id= $idVoiture;
                //recuperation de la description d'une photo puis creation d'une photo
                   $photos->save();

            }


        }

        return redirect()->back()->with('success','Voiture enregistrer avec succes');

    }

    public function show($id)
    {
        $voitures= Voitures::findOrFail($id);

         return view('admin.show', compact('voitures'));
    }

    public function editer($id)
    {
        $voitures= Voitures::findOrFail($id);

         return view('admin.editerVoiture');
    }

    public function update(Request $request, $id){
        $voitures= Voitures::find($id);
        $voitures->model= $request->model;
        $voitures->marque= $request->marque;
        $voitures->statut= $voitures->statut;
        $voitures->save();
        return redirect()->back()->with('success','Modification effectuer avec succes');
    }

    public function setStatut($id){
        $voitures= Voitures::find($id);
        $voitures->marque_id= $voitures->marque_id;
        $voitures->statut= 1;
        $voitures->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        Voitures::find($id)->delete();

        return redirect()->back()->with('success', 'Supprimer');
    }


}
