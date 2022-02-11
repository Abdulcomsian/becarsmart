<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SellCarLead;
use Illuminate\Support\Facades\Redirect;

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

    public function template2()
    {
        $users = SellCarLead::get();
        // $contactdata = ContactUs::first();
        return view('dashboard/email/template2', compact('users'));
    }

    public function email_template2(Request $request)
    {
        $request->validate([
            'registration_number' => ['required'],
            'model_number' => ['required'],
            'amount' => ['required'],
            'email_subject' => ['required'],
            'email' => ['required'],

        ]);
        try {
            
            $email_template2 = $request->all();
            $sender_email = SellCarLead::find($request->email);
            $sender_email = $sender_email->email;
            \Mail::to($sender_email)->send(new \App\Mail\NewMail($email_template2));
            
            toastSuccess("Email Successfully Sent");
            return Redirect::back();
              
        } catch (\Exception $exception) {
            dd($exception->getMessage());
            toastError('Something went wrong, try again!' . $exception->getMessage());
            return Redirect::back();
        }
    }  
    
    public function template3()
    {
        $users = SellCarLead::get();
        // $contactdata = ContactUs::first();
        return view('dashboard/email/template3', compact('users'));
    }
    public function email_template3(Request $request)
    {
        $request->validate([
            'registration_number' => ['required'],
            'model_number' => ['required'],
            'amount' => ['required'],
            'email_subject' => ['required'],
            'email' => ['required'],

        ]);
        try {
            
            $email_template3 = $request->all();
            $sender_email = SellCarLead::find($request->email);
            $sender_email = $sender_email->email;
            \Mail::to($sender_email)->send(new \App\Mail\EmailTemplate3($email_template3));
            
            toastSuccess("Email Successfully Sent");
            return Redirect::back();
              
        } catch (\Exception $exception) {
            dd($exception->getMessage());
            toastError('Something went wrong, try again!' . $exception->getMessage());
            return Redirect::back();
        }
    }
    public function template6()
    {
        $users = SellCarLead::get();
        // $contactdata = ContactUs::first();
        return view('dashboard/email/template6', compact('users'));
    }

    public function email_template6(Request $request)
    {
        $request->validate([
            'description' => ['required'],
            'amount' => ['required'],
            'model_number' => ['required'],
            'image' => ['required'],
            'email_subject' => ['required'],
            'email' => ['required'],

        ]);
        try {
            if ($request->hasFile('image')) {
                $file = $request->file('image'); 
                $filename     = date('mdYHis') .str_random(5).'.'.$file->extension();
                $request->image->move(base_path('public/images/email_template6'), $filename);
                $request->merge(array('image' => $filename));;
            } 
            $email_template6 = $request->all();
               
            $sender_email = SellCarLead::find($request->email);
            $sender_email = $sender_email->email;
            \Mail::to($sender_email)->send(new \App\Mail\EmailTemplate6($email_template6));
            
            toastSuccess("Email Successfully Sent");
            return Redirect::back();
              
        } catch (\Exception $exception) {
            dd($exception->getMessage());
            toastError('Something went wrong, try again!' . $exception->getMessage());
            return Redirect::back();
        }
    }

    
    
}
