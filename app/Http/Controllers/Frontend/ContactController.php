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
        

        $data [] = '';
        Mail::send ( 'email', $data, function ($message) use ($input) {
        
        $message->from ( $input['email'], 'Contact Us' );
        
        $message->to ('info@becarsmart.co.uk')->subject ( 'Just Laravel demo email using SendGrid' );
    } );
        toastSuccess('Your query send to admin successfully');
        return back();
    }
}
