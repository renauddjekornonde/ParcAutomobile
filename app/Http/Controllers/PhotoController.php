<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Photo;

class PhotoController extends Controller
{
    public function index(){
        $images= Photo :: all();
        return view('home.home', compact('images'));
    }
}
