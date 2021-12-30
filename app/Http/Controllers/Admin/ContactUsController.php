<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    public function index()
    {
        $contactdata = ContactUs::first();
        return view('dashboard.contact-us.index', compact('contactdata'));
    }

    public function store(Request $request)
    {
        try {
            $input = $request->except('_token', 'type', 'id');
            if ($request->type == "add") {
                ContactUs::create($input);
            } else {
                ContactUs::find($request->id)->update($input);
            }
            toastSuccess('Record Inserted Successfully!');
            return back();
        } catch (\Exception $exception) {
            toastError('Something went wrong,try again');
            return back();
        }
    }
}
