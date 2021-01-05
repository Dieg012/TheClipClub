<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{

    public function store(Request $request){
        $user = Auth::user();

        Chat::create([
            'message' => $request['message']
        ]);

        $messages = $this->getMessages($user);
        $this->chatEventToListener($messages, $user);
    }

    public function chatEventToListener($message, $user){
        broadcast(new MessageSentEvent($message, $user))->toOthers();

        return [
            'message' => $message,
            'user' => $user
        ];
    }

    public function getMessages($user){
        return $user->chats();
    }
}
