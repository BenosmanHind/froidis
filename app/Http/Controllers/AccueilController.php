<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AccueilController extends Controller
{
    public function categoryProducts($slug){
        $category = Category::where('slug',$slug)->first();
        $products = Product::where('category_id',$category->id)->get();
        $count_product = count($products);
        return view('category-products',compact('products','count_product'));

    }
    public function detailProduct($slug){
        $product = Product::where('slug',$slug)->first();
        return view('detail-product',compact('product'));
    }

    public function telechargerPDF($document)
    {
        $cheminFichier = public_path('storage/'.$document);
        $nomFichier = $document;

        return response()->download($cheminFichier, $nomFichier);
    }
}
