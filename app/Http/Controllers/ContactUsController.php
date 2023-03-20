<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


use App\Mail\ContactUsEmail;
use App\Jobs\SendEmail;


class ContactUsController extends Controller
{

    public function contactUsForm()
    {
        return view("contact-us.form");

    }



    public function contactUsSave(Request $request)
    {
        $request->validate([
            "title"      =>"required",
            "email"    =>"required",
            "message"  =>"required",
        ]);



        $contactUs = new ContactUs;

        $contactUs->title = $request->input("title");
        $contactUs->email = $request->input("email");
        $contactUs->message = $request->input("message");


        $contactUs->save();
        // 
        $details =[
            'title'=>'Thanks for your suport ',
            'body'=>'this Is body ',

        ];

        SendEmail::dispatch($details);
        
        // Mail::to('bluenile5050@gmail.com')->send(new ContactUsEmail($details) );
        return redirect()->back()->with('sccess','Thanks you');



    }
}