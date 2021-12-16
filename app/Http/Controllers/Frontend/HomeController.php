<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home\HeroSection;
use App\Models\Home\HowItWorkSection;
use App\Models\Home\WhySellCar;
use App\Models\Home\Blogs;
use App\Models\Home\BlogHeader;
use App\Models\Home\Testominal;
use App\Models\Home\QuestionnaireModel;
use App\Models\SellCarLead;
use App\Models\BuyCarLead;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index()
    {
        $herosection = HeroSection::first();
        $howitworks  = HowItWorkSection::get();
        $whysellcar  = WhySellCar::first();
        $blogs       = Blogs::limit(3)->get();
        $blogheader  = BlogHeader::first();
        $testominals = Testominal::get();
        $questionair = QuestionnaireModel::get();
        return view('frontend/sellcar/index', compact('blogheader', 'herosection', 'howitworks', 'whysellcar', 'blogs', 'testominals', 'questionair'));
    }

    //insert buy car lead
    public function buy_car_lead(Request $request)
    {
        $model = new BuyCarLead();
        $model->name = $request->name;
        $model->email = $request->email;
        $model->phone_no = $request->phone;
        $model->questions = $request->question;
        $model->answers = $request->answer;
        if ($model->save()) {
            return Redirect::back();
        }
    }

    //
    public function sell_car_lead(Request $request)
    {
        $request->validate([
            'fullname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required'],
            'mot_due' => ['required'],
            'comments' => ['required'],

        ]);
        try {
            $inputs = $request->except('_token');
            if (SellCarLead::create($inputs)) {
                toastSuccess('Lead Created Successfully!');
                return Redirect::back();
            }
        } catch (\Exception $exception) {
            toastError('Something went wrong, try again!');
            return Redirect::back();
        }
    }

    public function find_vehicle(Request $request)
    {
        try {
            $reg_number = (string)$request->reg_number;
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://driver-vehicle-licensing.api.gov.uk/vehicle-enquiry/v1/vehicles",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => "{\n\t\"registrationNumber\": \"$reg_number\"\n}",
                CURLOPT_HTTPHEADER => array(
                    "x-api-key: 2vbQSp98Zh6TEObOPpjoa5Rro7wgr6sDaKfXc2Qp",
                    "Content-Type: application/json"
                ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);
            $data = json_decode($response);
            $title = 'something went wrong';
            if (isset($data->errors[0]->status)) {
                $title = $data->errors[0]->title;
            }
            $color = $data->colour;
            $model = $data->make;
            $fueltype = $data->fuelType;
            $capacity = $data->engineCapacity;
            return view('frontend/sellcar/home', compact('color', 'model', 'fueltype', 'capacity'));
        } catch (\Exception $exception) {
            toastError($title);
            return Redirect::back();
        }
    }
}
