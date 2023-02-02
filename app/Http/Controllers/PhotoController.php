<?php

namespace App\Http\Controllers;

use App\Models\Marque;
use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Voitures;


class PhotoController extends Controller
{
    public function index(){
        $car= Voitures::with('voiturePhoto')->get();
        $marques= Marque::all();
        $images= Photo::all();
        return view('home.home', compact('car', 'marques','images'));
    }
}
