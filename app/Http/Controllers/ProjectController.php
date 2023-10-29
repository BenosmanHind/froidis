<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class ProjectController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(){
        return view('admin.add-project');
    }
    public function index(){
        $projects = Project::orderBy('created_at','desc')->get();
        return view('admin.projects',compact('projects'));
    }
    public function store(Request $request){
        $project = new Project();
        $project->title = $request->title;
        $project->flag = $request->flag;
        $project->slug = str::slug($request->title);
        $project->short_description = $request->short_description;
        $project->description = $request->description;
        $hasFile = $request->hasFile('image');
        if($hasFile){
                $destination = 'public/images/projects';
                $path = $request->file('image')->store($destination);
                $storageName = basename($path);
                $project->image = $storageName;
            }
        $project->save();
        return redirect('admin/projects');
    }
}
