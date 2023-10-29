<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $categories = Category::orderby('created_at', 'desc')->get();
        $countcategory = Category::count();
       return view('admin.categories',compact('categories','countcategory'));
    }
    public function store(Request $request){

        $request->validate([
         'designation' => ['required', 'string', 'max:255'],
         ]);
         $category = new Category();
         $category->designation = $request->designation;
         $category->description = $request->description;
         $category->save();
         $categories = Category::orderby('created_at', 'desc')->get();
         $countcategory = Category::count();

         return view('admin.categories',compact('categories','countcategory'));
    }



    public function edit($id){
        $category = Category::find($id);
        $categories = Category::orderby('created_at', 'desc')->get();
        $countcategory = Category::count();
        return view("admin.edit-category",compact('category','categories','countcategory'));
    }

    public function update(Request $request, $id){
        $category = Category::find($id);
        $category->designation = $request->designation;
        $category->description = $request->description;
        $category->save();
        return redirect('admin/categories');
    }

    public function destroy($id){
        $category = Category::find($id);
        $category->delete();
        return redirect('/admin/categories');
    }
}
