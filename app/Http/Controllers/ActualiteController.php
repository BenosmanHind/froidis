<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class ActualiteController extends Controller
{
    //
    public function create(){
        return view('admin.add-actualite');
    }

    public function store(Request $request){
        $actualite = new Actualite();
        $actualite->title = $request->title;
        $actualite->description = $request->description;
        $actualite->date = $request->date;
        $actualite->slug = str::slug($request->title);
        $actualite->link = $request->link;
        $actualite->save();
        $hasFile = $request->hasFile('photo');
        $hasFileTwo = $request->hasFile('photos');

        if($hasFile){
                $destination = 'public/images/actualites';
                $path = $request->file('photo')->store($destination);
                $storageName = basename($path);
                $image = new Image();
                $image->link = $storageName;
                $image->type = 1;
                $actualite->images()->save($image);
            }
        // secondary images
        if($hasFileTwo){
            foreach($request->file('photos') as $file){
                $destination = 'public/images/actualites';
                $path = $file->store($destination);
                $storageName = basename($path);
                $image = new Image();
                $image->link = $storageName;
                $image->type = 2;
                $actualite->images()->save($image);
            }
        }
     return redirect()->back();
    }

}
