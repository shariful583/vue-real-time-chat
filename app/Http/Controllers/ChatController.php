<?php

namespace App\Http\Controllers;

use App\User;
use App\Events\ChatEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function chat(){
        return view('chat');
    }

//    public function send(request $request){
  //      $user = User::find(Auth::id());
    //    event(new ChatEvent($request->msg,$user));
    //}


    public function send(){
        $msg = 'Hello';
        $user = User::find(Auth::id());
        event(new ChatEvent($msg,$user));
    }
}
