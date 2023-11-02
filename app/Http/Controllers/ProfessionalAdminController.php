<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfessionalAdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
      $users = User::where('type','professional')->get();
      return view('admin.professionals',compact('users'));
    }

    public function showModal($id){
        $user = User::find($id);
        return view('admin.modal-update-status',compact('user'));
    }

    public function updateStatus(Request $request ,$id){
        $user = User::find($id);
        $user->status = $request->status;
        $user->save();
        return $user;
    }
    public function detailPro($id){
        $user = User::find($id);
        return view('admin.detail-professional',compact('user'));
    }
}
