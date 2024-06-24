<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use App\Models\Project;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function detailActualite($slug){
        $actualite = Actualite::where('slug',$slug)->first();
        $actualites = Actualite::where('slug','!=',$slug)->orderByDesc('created_at')->get();
        return view('actualite',compact('actualite','actualites'));
    }
    public function actualites(){
        $actualites = Actualite::orderByDesc('date')->get();
        return view('actualites',compact('actualites'));
    }

    public function detailProject($slug){
        $project = Project::where('slug',$slug)->first();
        $projects = Project::where('slug','!=',$slug)->orderByDesc('created_at')->get();
        return view('project-detail',compact('project','projects'));
    }
    public function projects(){
        $projects = Project::orderByDesc('created_at')->get();
        return view('projects',compact('projects'));
    }
}
