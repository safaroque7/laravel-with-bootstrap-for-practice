<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientBaseSerivce;

class ClientBaseSerivceController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'domain_name',
            'service_names',
            'domain_provider',
            'hosting_provider',
            'hosting_size',
            'registration_date',
        ]);
        
        $arrayClientBaseSerivce = new ClientBaseSerivce;
        $arrayClientBaseSerivce->domain_name = $request->domain_name;
        $arrayClientBaseSerivce->service_names = $request->service_names;
        $arrayClientBaseSerivce->domain_provider = $request->domain_provider;
        $arrayClientBaseSerivce->hosting_provider = $request->hosting_provider;
        $arrayClientBaseSerivce->hosting_size = $request->hosting_size;
        $arrayClientBaseSerivce->registration_date = $request->registration_date;

        $arrayClientBaseSerivce->save();

        return redirect()->back()->with('success', 'The information has been recorded successfully');

    }
}
