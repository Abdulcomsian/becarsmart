<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\BuyCarLead;

class BuyCarLeadController extends Controller
{
    public function index()
    {
        try {
            $buycarleads = BuyCarLead::get();
            return view('Car.buy-car', compact('buycarleads'));
        } catch (\Exception $exception) {
            toastError('Something went wrong,try again');
            return Redirect::back();
        }
    }
    //delte lead
    public function buy_car_delete(Request $request)
    {
        try {
            $res = BuyCarLead::find($request->id)->delete();
            if ($res) {
                toastSuccess("Lead Deleted Successfully!");
                return Redirect::back();
            }
        } catch (\Exception $exception) {
            toastError('Something went wrong,try again');
            return Redirect::back();
        }
    }
    //evaluate car
    public function evaluate_car($id)
    {
        try {
            $lead_detail = BuyCarLead::find($id);
            return view('Car.evaluate-car', compact('lead_detail'));
        } catch (\Exception $exception) {
            toastError('Something went wrong,try again');
            return Redirect::back();
        }
    }
}
