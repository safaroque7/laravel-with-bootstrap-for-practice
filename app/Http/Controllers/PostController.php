<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('post.index');
    }

    // store
    public function store(Request $request){

        $request->validate(
            [
                'title' => 'required'
            ]
        );

        $arrayPost = new Post();

        $arrayPost->title = $request->title;
        $arrayPost->description = $request-> description;
        $arrayPost->image = $request-> image;
        $arrayPost->save();

        return redirect()->back()->with('success', 'The post has been posted successfully');

    }
    
}
