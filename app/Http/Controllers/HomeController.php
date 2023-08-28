<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactModel;

class HomeController extends Controller
{
    public function Home()
    {
        return view('Home');
    }

    public function About()
    {
        return view('About');
    } public function Contact()
    {
        return view('Contact');
    }



    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|max:4',
            'message' => 'required',
            'phone' => 'required|max:12',
        ]);

        $contact = new ContactModel();

        $contact->Name = $request->input('name');
        $contact->Email = $request->input('email');
        $contact->Password = $request->input('password');
        $contact->Comment = $request->input('message');
        $contact->Phone_Number = $request->input('phone');
          
        $contact->save();
        return redirect()->back()->with('msg','Your Data Submit');
      
    }
}
