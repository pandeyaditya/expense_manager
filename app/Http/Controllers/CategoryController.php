<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function add(Request $request){
        $category = new Category();

        $request->validate([
            'category_name' => 'required',
        ]);

        $category->category_name = $request->category_name;
        
        $category->save();

        return redirect('/addcategory')->with('success','Added category successfully');
    }

    public function allcategories(){
        $categories = Category::all();
        return view('allcategories')->with('categories',$categories);
    }
}
