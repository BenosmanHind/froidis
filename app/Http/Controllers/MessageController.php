<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Messagefile;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(){
        return view('professional.contact-froidis');
    }
    public function store(Request $request){
        $message = new Message();
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->save();
        if($request->file){
            foreach($request->file('file') as $file){
                $destination = 'public/messages/files';
                $path = $file->store($destination);
                $storageName = basename($path);
                $message_file = new Messagefile();
                $message_file->file = $storageName;
                $message->files()->save($message_file);
            }
        }

    }
}
