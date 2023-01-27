<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voitures;
use App\Http\Requests\VoitureStore;

class VoitureController extends Controller
{
    public function create(){
        return View('admin.createVoiture');
    }
    public function store(VoitureStore $request){
        $input = $request->validated();
        Voitures::create([
            'model'=>$input['model'],
            'marque'=>$input['marque'],
        ]);
        return redirect()->back()->with('success','voiture enregistre');

    }

}
