<?php

namespace App\Http\Controllers;

use App\Models\Professionaldevi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfessionalDevisController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(){
        return view('professional.demande-devis');
    }
/*
    public function store(Request $request){
        $devis = new Professionaldevi();
        $devis->user_id = Auth::user()->id;
        $devis->object = $request->object;
        $devis->message = $request->message;
        $devis->save();
        return view('')
    }
*/
}
