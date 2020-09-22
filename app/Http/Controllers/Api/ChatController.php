<?php

namespace App\Http\Controllers\Api;

use App\Chat;
use App\Http\Controllers\Controller;
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
