<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    protected $request;

    function __construct(Request $request){
        $this->request= $request;
    }

    public function existEmail(){
        $email= $this->request->input('email');

        $user = User::where('email', $email)
                    ->first();

        $response="";

        ($user) ? $response ="exist" : $response="not_exist";

        return response()->json([
            'response' =>$response
        ]);
    }

    //verifier si l'utilisateur à deja activer son compte ou pas avant d'etre authentifier
    public function userChecker(){
        //$activation_token= Auth::user()->activation_token;
        $is_verified= Auth::user()->statut;

        if($is_verified ==1){

            //Auth::logout();

            return redirect()->route('indexAdmin');
        }
        else{

            return redirect()->route('home');
            Auth::logout();
        }
    }


    public function logout(){
    Auth::logout();
    return redirect()->route('home');
    }



}
