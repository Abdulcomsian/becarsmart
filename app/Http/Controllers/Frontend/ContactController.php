<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;
use Mail;
use Notification;
use App\Notifications\ContactUsNotification;

class ContactController extends Controller
{
    public function index()
    {
        $contactdata = ContactUs::first();
        return view('frontend/sellcar/contact', compact('contactdata'));
    }

    public function store(Request $request)
    {
        $input = $request->except('_token');
        $details = [
        'name' => $request->name,
        'email' => $request->email,
        'message' => $request->message
        ];
        

        Mail::to('rajaatif927@gmail.com')->send(new \App\Mail\ContactUsMail($details));
        
        Notification::route('mail', $request->email)->notify(new ContactUsNotification($request->all()));
        // toastSuccess('Your query send to admin successfully');
        return back();
    }
}
