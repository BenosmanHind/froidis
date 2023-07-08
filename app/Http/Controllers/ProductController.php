<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Document;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    //
    public function create(){
        $categories = Category::orderBy('created_at','desc')->get();
        return view('admin.add-product',compact('categories'));
    }
    public function store(Request $request){
        $product = new Product();
        $product->category_id = $request->category;
        $product->designation = $request->designation;
        $product->seconde_designation = $request->seconde_designation;
        $product->marque = $request->marque;
        $product->price = $request->price;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->save();

        $hasFile = $request->hasFile('photoPrincipale');
        $hasFileTwo = $request->hasFile('photos');
        if($hasFile){
                $destination = 'public/images/products';
                $path = $request->file('photoPrincipale')->store($destination);
                $storageName = basename($path);
                $image = new Image();
                $image->lien = $storageName;
                $image->type = 1;
                $product->images()->save($image);
            }
        // secondary images
        if($hasFileTwo){
            foreach($request->file('photos') as $file){
                $destination = 'public/images/products';
                $path = $file->store($destination);
                $storageName = basename($path);
                $image = new Image();
                $image->lien = $storageName;
                $image->type = 2;
                $product->images()->save($image);
            }
        }
        $documents = $request->documents;

        for($i=0 ; $i<count($request->documents) ; $i++){
            $document = new Document();
            $file = $request->file('documents.' . $i);
            $filename = $file->getClientOriginalName();
            $document->document = $filename;
            Storage::disk('public')->putFileAs('', $file, $filename);
            $document->product_id = $product->id;
            $document->save();
        }
    }
}
