<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voitures;
use App\Http\Requests\VoitureStore;
use App\Models\Photo;

class VoitureController extends Controller
{
    public function index(){
        $voitures= Voitures::all();
        $secondVoiture= Voitures::all();
        $pictures= Photo::all();
        $countes= 0;
        foreach($voitures as $voiture){
            foreach($secondVoiture as $voiture2){
                if($voiture->model == $voiture2->model){
                    $countes= $countes + 1;
            }
            }
        }
        return View('admin.index', compact('voitures','pictures', 'countes'));
    }
    public function create(){
        $voitures= Voitures::all();
        $pictures= Photo::all();
        return View('admin.createVoiture', compact('voitures','pictures'));
    }

    public function store(Request $request){
        $input = $request->all();
        $voiture= Voitures::create([
            'model'=>$input['model'],
            'marque'=>$input['marque'],
            'statut'=>0,
        ]);

        $data= $request->all();
        // dd($data);
        for($i=0; $i< sizeof($data['image']); ++$i){

            $photos= new Photo();
            $id= $voiture->id;
            $files= $request->hasFile(['image']);

            if($files){
                 $newFile= $request->file(['image']);

                 $file_path= $newFile[$i]->store('public/images/');

                    // $extension = $newFile[$i]->getClientOriginalExtension();

                    // $filename= time().'.'.$extension;

                    // $newFile[$i]->move('imageVoiture/', $filename);

                   $photos->description= $file_path;


            }
             $photos->id_voiture= $id;
             $photos->save();

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
        $voitures->model= $voitures->model;
        $voitures->marque= $voitures->marque;
        $voitures->statut= 1;
        $voitures->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        Voitures::find($id)->delete();

        return redirect()->back()->with('success', 'Supprimer');
    }

    public function counteCar($marque){
        $voitures= Voitures::all();
        $counte= 0;
        foreach($voitures->marque as $voiture){
            if($voiture!= $marque){
                $counte= $counte+ 1;
            }
        }
    }
}
