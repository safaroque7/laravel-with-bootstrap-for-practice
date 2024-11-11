<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller

{
    public function index(){
        return view('layouts.post.index');
    }

    // store
    public function store(Request $request){

        $request->validate(
            [
                'title' => 'required',
                'image' => 'mimes:jpg,jpeg,png|max:500',
            ]
        );

        $imageName = null;
        if(isset($request-> image)){
            $imageName = time(). '.' . $request-> image->extension();
            $request-> image->move(public_path('images'), $imageName);
        }

        $arrayPost = new Post;

        $arrayPost->title = $request->title;
        $arrayPost->description = $request-> description;
        $arrayPost->image = $imageName;
        $arrayPost->save();

        return redirect()->back()->with('success', 'The post has been posted successfully');
    }

    //show all posts
    public function showAllPost(){
        $allPostCollection = Post::all()->reverse();
        return view('layouts.post.all-posts', [
            'allPostCollection' => $allPostCollection,
        ]);
    }

    //showSinglePost
    public function singlePost($id){
        // $allPostExceptCurrentPost = Post::all()->skip(1)->reverse()->take(5);
        
        $allPostExceptCurrentPost = Post::where('id', '!=', $id)->latest()->get();
        $singlePost = Post::findOrFail($id);
        return view('layouts.post.single-post', [
            'singlePost' => $singlePost,
            'allPostExceptCurrentPost' => $allPostExceptCurrentPost,
        ]);
    }

    //edit
    public function edit($id){
        $editSinglePost = Post::findOrFail($id);
        return view('layouts.post.edit', [
            'editSinglePost' => $editSinglePost,
        ]);
    }

    //update
    public function update(Request $request, $id){

        $request->validate(
            [
                'title' => 'required',
                'image' => 'mimes:jpg,jpeg,png|max:500',
            ]
        );

        $updatePost = Post::findOrFail($id);

        $imageName = null;
        if(isset($request->image)){
            $imageName = time(). '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }else{
            $imageName = $updatePost->image;
        }

        $updatePost->title = $request->title;
        $updatePost->description = $request-> description;
        $updatePost->image = $imageName;
        $updatePost->save();

        return redirect()->back()->with('success', 'The post has been updated successfully');
    }

    //delete
    public function delete($id){
        $deletePost = Post::findOrFail($id);
        $deletePost->delete();

        return redirect()->back()->with('success', 'The post has been deleted successfully');
    }
}