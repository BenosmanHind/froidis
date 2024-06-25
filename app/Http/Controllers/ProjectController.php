<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use TheHocineSaad\LaravelAlgereography\Models\Wilaya;

class ProjectController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(){
        $wilayas = Wilaya::all();
        return view('admin.add-project',compact('wilayas'));
    }
    public function index(){
        $projects = Project::orderBy('created_at','desc')->get();
        return view('admin.projects',compact('projects'));
    }
    public function store(Request $request){
        $project = new Project();
        $project->title = $request->title;
        $project->wilaya = $request->wilaya;
        $project->flag = $request->flag;
        $project->slug = str::slug($request->title);
        $project->short_description = $request->short_description;
        $project->description = $request->description;
        $project->save();
        $hasFile = $request->hasFile('photos');
        if($hasFile){
          foreach($request->file('photos') as $file){
            $destination = 'public/images/projects';
            $path = $file->store($destination);
            $storageName = basename($path);
            $image = new Image();
            $image->link = $storageName;
            $image->type = 2;
            $project->images()->save($image);
            }
        }

        return redirect('admin/projects');
    }

    public function destroy($id) {
        // Récupérer le projet
        $project = Project::find($id);

        if ($project) {
            // Récupérer les images associées au projet
            $images = $project->images;

            // Supprimer les images du stockage et de la base de données
            foreach ($images as $image) {
                // Supprimer l'image du stockage
                if (Storage::exists($image->path)) {
                    Storage::delete($image->path);
                }
                // Supprimer l'enregistrement de l'image de la base de données
                $image->delete();
            }

            // Supprimer le projet de la base de données
            $project->delete();
        }

        return redirect()->back();
    }
}
