<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Messagefile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MessageController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $messages = Message::where('sender_id',Auth::user()->id)->orderBy('created_at','desc')->get();
        return view('professional.messages-sent',compact('messages'));
    }
    public function create(){
        return view('professional.contact-froidis');
    }
    public function store(Request $request){
        $message = new Message();
        $message->sender_id = Auth::user()->id;
        $message->recipient_id = 3;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->save();
        $hasFile = $request->hasFile('files');
        if($hasFile){
            foreach($request->file('files') as $file){
                $destination = 'public/messages/files';
                $storageName = md5(uniqid() . time()) . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs($destination, $storageName);
                $message_file = new Messagefile();
                $message_file->file = $storageName;
                $message->files()->save($message_file);
            }
        }
     return redirect('/professional/contact-froidis');
    }
    public function readMessage($id){
        $message = Message::find($id);
        return view('professional.message-read',compact('message'));
    }
    public function inbox(){
    $messages = Message::where('recipient_id',Auth::user()->id)->get();
    return view('professional.inbox',compact('messages'));
    }

    public function readMessageInbox($id){
        app()->setLocale('fr');
        $message = Message::find($id);
        return view('professional.message-read-inbox',compact('message'));
    }


}
