<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmailTemplateController extends Controller
{
    public function index()
    {
        // $contactdata = ContactUs::first();
        return view('dashboard.emial-template.index');
    }  

    public function email_edit()
    {
        // $contactdata = ContactUs::first();
        return view('dashboard.emial-template.email-edit');
    }
}
