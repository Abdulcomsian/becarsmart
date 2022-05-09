<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SellCarLead;
use Illuminate\Support\Facades\Redirect;
class SellCarController extends Controller
{
    public function index()
    {
        $sellcarleads = SellCarLead::orderBy('created_at', 'DESC')->get();
        
        return view('Car.sell-car', compact('sellcarleads'));
    }
    public function sell_car_lead_details($id)
    {
        $lead = SellCarLead::with('sellcarimages')->find($id);
        return view('Car.leads-details', compact('lead'));
    }
    public function destroy(Request $request)
    {
        SellCarLead::find($request->id)->delete();
        toastSuccess('Lead Deleted Successfully');
        return Redirect::back();
    }

    //delte multiple lead
    public function deleteAll(Request $request)
    {
        try {
            $ids = $request->ids;
            SellCarLead::whereIn('id',explode(',',$ids))->delete(); 
            toastSuccess("Leads Deleted Successfully!");
            return response()->json(['success'=>"Products Deleted successfully."]);
        } catch (\Exception $exception) {
            toastError('Something went wrong,try again');
            return Redirect::back();
        }
    }
}
