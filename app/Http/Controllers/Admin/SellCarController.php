<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SellCarLead;

class SellCarController extends Controller
{
    public function index()
    {
        $sellcarleads = SellCarLead::get();
        return view('Car.sell-car', compact('sellcarleads'));
    }
    public function sell_car_lead_details($id)
    {
        $lead = SellCarLead::with('sellcarimages')->find($id);
        return view('Car.leads-details', compact('lead'));
    }
}
