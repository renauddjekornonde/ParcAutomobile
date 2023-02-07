<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function create(){

        $users= User::get();
        //dump($marques);
        return View('admin.createUser', compact('users'));
    }
    public function store(Request $request){
        $input = $request->all();
        $users= new User();
            $users->name=$input['nom'];
            $users->email=$input['email'];
            $users->password= Hash::make($input['password']);

            if($input['statut']== "Admin"){
                $users->statut=1;
            }
            elseif ($input['statut']=="Simple User") {
                $users->statut=0;
            }
            elseif($input['statut']=="Client"){
                $users->statut=3;
            }
            else{
                $users->statut=0;
            }
        $users->save();
        return redirect()->back();
    }

    public function setStatut($id){
        $users= User::find($id);
        $users->name= $users->name;
        $users->email= $users->email;
        $users->password= $users->password;
        $users->statut= 1;
        $users->save();
        return redirect()->back();
    }

    public function show($id)
    {
        $users= User::findOrFail($id);

         return view('admin.show', compact('users'));
    }

    public function editer($id)
    {
        $users= User::findOrFail($id);

         return view('admin.editerAdmin');
    }

    public function update(Request $request, $id){
        $users= User::find($id);
        $users->name= $request['nom'];
        $users->statut= $users->statut;
        $users->email= $request['email'];
        $users->password= Hash::make($request['password']);
        $users->save();
        return redirect()->back()->with('success','Modification effectuer avec succes');
    }


    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect()->back()->with('success', 'Supprimer');
    }
}
