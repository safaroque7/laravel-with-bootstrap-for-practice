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

    //edit
    public function edit($id){
        $editedCategory = Category::findOrFail($id);
        $allCategoryCollection = Category::all();
        return view('layouts.category.edit-category',[
            'editedCategory'=>$editedCategory,
            'allCategoryCollection'=>$allCategoryCollection
        ]);
    }

    //update
    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
        ]);

        $updatedCategoryName = Category::findOrFail($id);

        $updatedCategoryName->name = $request->name;
        $updatedCategoryName->description = $request->description;
        $updatedCategoryName->save();

        return redirect()->back()->with("success", "The category's name has been updated successfully.");
    }

    //delete
    public function delete($id){
        $deletedItem = Category::findOrFail($id);
        $deletedItem->delete(); 
        
        return redirect()->route('category')->with('success', 'This category item has been deleted successfully.');
    }
}
