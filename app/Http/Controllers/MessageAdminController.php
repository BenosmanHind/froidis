<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageAdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $messages = Message::orderBy('created_at','desc')->where('recipient_id',Auth::user()->id)->get();
        return view('admin.inbox',compact('messages'));
    }
    public function readMessage($id){
        $message = Message::find($id);
        return view('admin.message-read',compact('message'));
    }
    public function store(Request $request){
        $message = new Message();
        $message->sender_id = Auth::user()->id;
        $message->recipient_id = $request->recipient;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->save();
        return redirect('/admin/messages-sent');
    }
    public function sentMessage(){
        $messages = Message::where('sender_id',Auth::user()->id)->get();
        return view('admin.messages-sent',compact('messages'));
    }
}
