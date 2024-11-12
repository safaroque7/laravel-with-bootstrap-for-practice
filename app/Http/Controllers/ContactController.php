<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\ContactMessageMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request){
            // return $request->all();

            $request->validate([
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'comment' => 'nullable',
                'read_by' => 'nullable',
            ]);

            $arrayContact = new Contact;
            $arrayContact->name = $request->name;
            $arrayContact->phone = $request->phone;
            $arrayContact->email = $request->email;
            $arrayContact->comment = $request->comment;
            $arrayContact->save();

            // Mail::to('faroque.computer@gmail.com')->send(new ContactMessageMail($validateData));

            return redirect()->back()->with('success', 'Your message has been sent successfully, Thank you');
    }
}
