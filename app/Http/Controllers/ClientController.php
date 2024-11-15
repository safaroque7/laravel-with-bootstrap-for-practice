<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\DomainProvider;
use App\Models\HostingProvder;

class ClientController extends Controller
{
    public function index(){
        $allServices = Service::all();
        return view('layouts.client.index', [
            'allServicesCollection'=>$allServices,
        ]);
        
    }

    //for storing
    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'phone' => 'required|unique:clients|max:18|min:11',
            'email' => 'required|unique:clients',
            // 'client_photo' => 'mimes:jpg,jpeg,png|max:500|min:50',
        ]);

        $imageName = null;
        if(isset($request->client_photo)){
            $imageName = time(). '.' . $request->client_photo->extension();
            $request->client_photo->move(public_path('images'), $imageName);
        }

        $arrayClient = new Client;

        $arrayClient->name = $request->name;
        $arrayClient->phone = $request->phone;
        $arrayClient->email = $request->email;
        $arrayClient->gender = $request->gender;
        $arrayClient->address = $request->address;
        $arrayClient->facebook_review = $request->facebook_review;
        $arrayClient->google_review = $request->google_review;
        $arrayClient->page_number = $request->page_number;
        $arrayClient->client_photo = $imageName;
        $arrayClient->status = $request->status;
        $arrayClient->facebook_profile = $request->facebook_profile;
        $arrayClient->date_of_birth = $request->date_of_birth;
        $arrayClient->save();

        $arrayClient->services()->sync($request->services);

        return redirect()->back()->with("success", "Your client's information has been recorded successfully.");
    }



    //for showing
    public function show(){
        $clientCollection = Client::all();

        return view('layouts.client.all-clients', [
            'clientCollection' => $clientCollection
        ]);
    }

    //for editing
    public function edit($id){
        $editableClientInfo = Client::findOrFail($id);
        $allServicesCollection = Service::all();
        return view('layouts.client.edit-client', [
            'editableClientInfo' => $editableClientInfo,
            'allServicesCollection' => $allServicesCollection
        ]);
    }

    // for updating
    public function update(Request $request, $id) {

        $request->validate([
            'name' => 'required',
            'phone' => 'required|max:18|min:11',
            'email' => 'required',
        ]);


        $updateClient = Client::findOrFail($id);

        $imageName = null;
        if(isset($request->client_photo)){
            $imageName = time(). '.' . $request->client_photo->extension();
            $request->client_photo->move(public_path('images'), $imageName);
        } else {
            $imageName =  $updateClient->client_photo;
        }


        $updateClient->name = $request->name;
        $updateClient->phone = $request->phone;
        $updateClient->email = $request->email;
        $updateClient->gender = $request->gender;
        $updateClient->address = $request->address;
        $updateClient->facebook_review = $request->facebook_review;
        $updateClient->google_review = $request->google_review;
        $updateClient->page_number = $request->page_number;
        $updateClient->client_photo = $imageName;
        $updateClient->status = $request->status;
        $updateClient->facebook_profile = $request->facebook_profile;
        $updateClient->date_of_birth = $request->date_of_birth;
        $updateClient->save();

        return redirect()->back()->with("success", "Your client's information has been updated successfully.");

    }


    //for deleting
    public function delete($id){

        $deleteClient = Client::findOrFail($id);
        $deleteClient->delete();

        return redirect()->back()->with("success", "Your client's information has been deleted successfully.");
    }

    //for showing single client information
    public function showSingleClientInfo($id){
        $allHostingProvider = HostingProvder::all();
        $allService = Service::all();
        $domainProviderCollection = DomainProvider::all();

        $singleClientInfo = Client::findOrFail($id);

        $previouseClientInfo = Client::where('id', '<', $singleClientInfo->id)->max('id');
        $nextClientInfo = Client::where('id', '>', $singleClientInfo->id)->min('id');

        if(!$previouseClientInfo){
            $previouseClientInfo = $nextClientInfo;
        }
        
        if(!$nextClientInfo){
            $nextClientInfo = $previouseClientInfo;
        }

        return view('layouts.client.single-client-info', [
            'singleClientInfo' => $singleClientInfo,
            'previouseClientInfo' => $previouseClientInfo,
            'nextClientInfo' => $nextClientInfo,
            'allService' => $allService,
            'domainProviderCollection' => $domainProviderCollection,
            'allHostingProvider' => $allHostingProvider,
        ]);
    }

    //for collecting facebook review left emails
    public function email(){

        $activeClientsEmailAddresess = Client::where('status', 1)->get('email');
        $inActiveClientsEmailAddresess = Client::where('status', 0)->get('email');
        $facebookReviewLeftCollection = Client::where('facebook_review', 0)->get('email');


        // $domainProvidersCollection = DomainProvider::all();
        // $hostingProvderCollection = HostingProvder::all();

        // $totalFacebookReviewLeft = Client::where('facebook_review', 0)->count();
        // $facebookReviewLeftEmailsCollection = Client::where('facebook_review', 0)->get('email');
        // $totalFacebookReviewed = Client::where('facebook_review', 1)->count();
        // $totalGoogleReviewLeft = Client::where('google_review', 0)->count();
        // $totalGoogleReviewed = Client::where('google_review', 1)->count();

        return view ('layouts.email.email', [
            'activeClientsEmailAddresess' => $activeClientsEmailAddresess,
            'inActiveClientsEmailAddresess' => $inActiveClientsEmailAddresess,
            'facebookReviewLeftCollection' => $facebookReviewLeftCollection,
         ]);
    }
}
