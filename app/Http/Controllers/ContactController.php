<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('pages.contact');
    }


    public function store(Request $request)
    {
        // dd($request->input('email'));
        $request->validate([
            "email" => "email|required",
        ]);

        $email = $request->input('email');
        $fullName = $request->input('name');
        $message = $request->input('message');


        // dd($email, $fullName, $message);
        env('MAIL_FROM_ADDRESS', 'test.gmail.com');
        Mail::to("narkuwarow@gmail.com")->send(new ContactMail($fullName, $message, $email));

        session()->flash('status', 'Your email was sent successfully.');
        return back();
    }
}
