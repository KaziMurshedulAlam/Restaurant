<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function add_category(){
        return view('backend.category.category');
    }

    public function save_category(Request $request){

         $this->validate($request,[
            'category_name' => 'required|max:255'
        ]);


        $categories = new Category();
        $categories->category_name = $request->category_name;
        $categories->description = $request->description;
        $categories->status = $request->status;
        $categories->save();
        return redirect('/manage/category')->with('message', 'Category Save Successfully');
    }

    public function manage_category(){
       $show_category = Category::all();
       return view('backend.category.manage-category', compact('show_category'));
    }
}
