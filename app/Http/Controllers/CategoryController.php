<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $allCategoryCollection = Category::all();
        return view('layouts.category.add-new-category', [
            'allCategoryCollection' => $allCategoryCollection,
        ]);
    }

    //store
    public function store(Request $request){

        $request->validate([
            'name' => 'required|unique:categories',
        ]);

        $arrayCategory = new Category;

        $arrayCategory->name = $request->name;
        $arrayCategory->description = $request->description;
        $arrayCategory->save();

        return redirect()->back()->with("success", "The category's name has been added successfully.");
    }


    //show
    public function show(){
        $allCategoryCollection = Category::all();
        return view('layouts.category.add-new-category',[
            'allCategoryCollection' => $allCategoryCollection
        ]);
    }
}
