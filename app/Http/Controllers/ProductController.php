<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function create(){
        $categories = Category::orderBy('created_at','desc')->get();
        return view('admin.add-product',compact('categories'));
    }
}
