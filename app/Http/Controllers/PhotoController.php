<?php

namespace App\Http\Controllers;

use App\Models\Marque;
use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Voitures;


class PhotoController extends Controller
{
    public function index(){
        $photos= Photo::with('photoModel')->get();
        $marques= Marque::all();
        $images= Photo::all();
        return view('home.home', compact('marques','images', 'photos'));
    }

      public function show($id)
    {
        $photos= Photo::findOrFail($id)->first();
        $photosEtModel= Photo::where('id',$id)->with('photoModel')->get();
        $photosModels= Photo::with('photoModel')->get();
        $photoEtVoiture= Photo::where('id',$id)->with('photoVoiture')->get();
        $marques= Marque::all();
        $allPhoto= Photo::all();
        //dd($photosEtModel);;
        return view('home.detailVoiture', compact('id','photosModels','photos', 'photosEtModel','photoEtVoiture', 'marques', 'allPhoto'));
    }
}
