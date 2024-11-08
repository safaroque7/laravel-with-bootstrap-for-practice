<?php

namespace App\Http\Controllers;

use App\Models\DomainProvider;
use Illuminate\Http\Request;

class DomainProviderController extends Controller
{
    public function index(){
        $domainProviderCollection = DomainProvider::all();
        return view('layouts.domain-provider.index', [
            'domainProviderCollection' => $domainProviderCollection
        ]);
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|unique:domain_providers', 
        ]);

        $arrayDomainProvider = new DomainProvider;
        $arrayDomainProvider->name = $request->name;
        $arrayDomainProvider->save();

        return redirect()->back()->with("success", "Your domain provider's name has been recorded successfully.");
    }

    // show
    public function show(){
        $domainProviderCollection = DomainProvider::all();
        return view('layouts.domain-provider.index', [
            'domainProviderCollection' => $domainProviderCollection
        ]);
    }


    //edit
    public function edit($id){
        $domainProviderCollection = DomainProvider::all();
        $editableDomainProviderName = DomainProvider::findOrFail($id);

        return view('layouts.domain-provider.edit', [
            'editableDomainProviderName' => $editableDomainProviderName,
            'domainProviderCollection' => $domainProviderCollection,
        ]);
    }

    //update
    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required', 
        ]);

        $updateDomainProvider = DomainProvider::findOrFail($id);
        $updateDomainProvider->name = $request->name;
        $updateDomainProvider->save();

        return redirect()->back()->with("success", "Your domain provider's name has been updated successfully.");
    }
}