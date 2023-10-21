<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageAdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $messages = Message::orderBy('created_at','desc')->get();
        return view('admin.inbox',compact('messages'));
    }
    public function readMessage($id){
        $message = Message::find($id);
        return view('admin.message-read',compact('message'));
    }
}
