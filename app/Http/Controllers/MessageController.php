<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function store(Request $request){
        $input = $request->all();
        Message::create(
            [
                'contenu'=>$input['message'],
                'nom'=>$input['nom'],
                'prenom'=>$input['prenom'],
                'email'=>$input['email']
            ]
            );
            return redirect()->back();
    }
    public function afficheMessage(){
        $messages = Message::all();
        return view('admin.message', compact('messages'));
    }
    public function getMessageById($id){
          $messageById = Message::findOrFail($id);
          return view('admin.message', compact('messageById'));
    }
}
