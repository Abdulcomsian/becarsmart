<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;
use Mail;

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
            $message->to('admin@example.com')
                ->subject('contact us mail')
                ->from($input['email'])
                ->setBody($input['message'], 'text/html');
        });
        toastSuccess('Your query send to admin successfully');
        return back();
    }
}
