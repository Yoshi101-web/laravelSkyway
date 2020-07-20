<?php

namespace App\Http\Controllers;

use App\Chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function store(Request $request, Chat $chat) 
    {
        $chat->content = $request->content;
        // $chat->user_id = Auth::user()->id;
        $chat->user_id = 1;
        $chat->save();

        return $request->all();
    }
}
