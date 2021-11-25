<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeCarSmartContoller extends Controller
{
    //
    public function sellcar_index()
    {
        return view('frontend/sellcar/index');
    }
    public function sellcar_home()
    {
        return view('frontend/sellcar/home');
    }
    public function sellcar_blog()
    {
        return view('frontend/sellcar/blog');
    }
    public function sellcar_contact()
    {
        return view('frontend/sellcar/contact');
    }
    public function sellcar_cookies()
    {
        return view('frontend/sellcar/cookies');
    }
    public function sellcar_faq()
    {
        return view('frontend/sellcar/faq');
    }
    public function privacy_policy()
    {
        return view('frontend/sellcar/privacy_policy');
    }
    public function sellcar()
    {
        return view('frontend/sellcar/sellcar');
    }
    public function sellcar_new()
    {
        return view('frontend/sellcar/sellcar_new');
    }
    public function term()
    {
        return view('frontend/sellcar/term');
    }
    public function sellcar_login()
    {
        return view('frontend/sellcar/login');
    }
}
