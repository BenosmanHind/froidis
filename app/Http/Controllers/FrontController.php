<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function detailActualite($slug){
        $actualite = Actualite::where('slug',$slug)->first();
        $actualites = Actualite::where('slug','!=',$slug)->get();
        return view('actualite',compact('actualite','actualites'));
    }
    public function actualites(){
        $actualites = Actualite::orderByDesc('date')->get();
        return view('actualites',compact('actualites'));
    }
}
