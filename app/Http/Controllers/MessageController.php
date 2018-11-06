<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    //
    public function submit(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required'
        ]);

        // create new Message
        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->subject = $request->input('subject');
        $message->message = $request->input('message');

        $message->save();

        return redirect('/');
    }

}
