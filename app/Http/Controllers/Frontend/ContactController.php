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
        Mail::send(array(), array(), function ($message) use ($input) {
            $message->to('areebhassan.ah@gmail.com')
                ->subject('contact us mail')
                ->from('info@becarsmart.co.uk')
                ->setBody($input['message'], 'text/html');
        });
        Notification::route('mail', $request->email)->notify(new ContactUsNotification($request->all()));
        // toastSuccess('Your query send to admin successfully');
        return back();
    }
}
