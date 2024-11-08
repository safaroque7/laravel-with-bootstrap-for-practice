<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HostingProvder;

class HostingProvderController extends Controller
{
    // index
    public function index(){
        $hostingProvderCollection = HostingProvder::all();
        return view('layouts.hosting-provider.index', [
            'hostingProvderCollection' => $hostingProvderCollection,
        ]);
    }

    // store

    public function store(Request $request){

        $request->validate([
            'name' => 'required|unique:hosting_provders',
        ]);
        
        $arrayHostingProvider = new HostingProvder;
        $arrayHostingProvider->name = $request->name;
        $arrayHostingProvider->save();

        return redirect()->back()->with("success", "The hosting provider's name has been recorded successfully");
    }

    // show
    public function show(){
        $hostingProvderCollection = HostingProvder::all();

        return view('layouts.hosting-provider.index', [
            'hostingProvderCollection' => $hostingProvderCollection,
        ]);
    }

    //edit
    public function edit($id){
        $editableHostingProvidersName = HostingProvder::findOrFail($id);
        $hostingProvderCollection = HostingProvder::all();
        
        return view('layouts.hosting-provider.edit', [
            'editableHostingProvidersName' => $editableHostingProvidersName,
            'hostingProvderCollection' => $hostingProvderCollection,
        ]);
    }

    //update
    public function update($id, Request $request){
        $request->validate([
            'name' => 'required',
        ]);
        
        $updateHostingProvidersName = HostingProvder::findOrFail($id);
        $updateHostingProvidersName->name = $request->name;
        $updateHostingProvidersName->save();

        return redirect()->back()->with("success", "The hosting provider's name has been updated successfully");
    }

    //delete
    public function delete($id){
        $deletedHostingProviderName = HostingProvder::findOrFail($id);
        $deletedHostingProviderName->delete();

        return redirect()->back()->with("success", "The hosting provider's name has been deleted successfully");
    }
}