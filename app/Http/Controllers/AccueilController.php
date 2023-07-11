<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function categoryProducts($slug){
        $category = Category::where('slug',$slug)->first();
        $products = Product::where('category_id',$category->id)->get();
        $count_product = count($products);
        return view('category-products',compact('products','count_product'));

    }
}
