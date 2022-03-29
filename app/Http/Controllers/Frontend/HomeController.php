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
use App\Models\SellCarLeadImages;
use App\Models\HowItWorkHeader;
use App\Notifications\SellCarNotification;
use App\Notifications\BuyCarNotification;
use App\Notifications\TradersNotification;
use App\Utils\HelperFunctions;
use Notification;
use Illuminate\Support\Facades\Redirect;
use App\Models\QuestionaireHeading;
use App\Models\MotoreTraders;



class HomeController extends Controller
{
    public function index()
    {
        $herosection = HeroSection::first();
        $howitworks  = HowItWorkSection::get();
        $howitworksheader = HowItWorkHeader::first();
        $whysellcar  = WhySellCar::first();
        $blogs       = Blogs::limit(3)->get();
        $blogheader  = BlogHeader::first();
        $testominals = Testominal::get();
        $questionair = QuestionnaireModel::orderBy('id', 'desc')->take(4)->get();
        $questionair_heading = QuestionaireHeading::first();
        return view('frontend/sellcar/index', compact('howitworksheader', 'blogheader', 'herosection', 'howitworks', 'whysellcar', 'blogs', 'testominals', 'questionair','questionair_heading'));
    }

    //insert buy car lead
    public function buy_car_lead(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],

        ]);
        $model = new BuyCarLead();
        $model->name = $request->name;
        $model->email = $request->email;
        $model->lead_source = $request->lead_source;
        $model->phone_no = $request->phone;
        $model->questions = $request->question;
        $model->answers = $request->answer;
        if ($model->save()) {
            Notification::route('mail', 'basitawan.abdul@gmail.com')->notify(new BuyCarNotification($request->all()));
            Notification::route('mail', $request->email)->notify(new BuyCarNotification($request->all()));
            //toastSuccess('Thank you for your information. We will be in touch soon.');
            return redirect()->route('thankyou.buy.car');
            //return Redirect::back()->with('thankyou', 'thankyou');
        }
    }

    //
    public function sell_car_lead(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'fullname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'digits_between:10,11'],
            'mot_due' => ['required'],

        ]);
        try {
            $inputs = $request->except('_token', 'images');
            // dd($inputs);
            if ($sellcar = SellCarLead::create($inputs)) {
                if ($request->file('images')) {
                    $filePath = HelperFunctions::sellCarFilePath();
                    $files = $request->file('images');
                    foreach ($files  as $key => $file) {
                        $imagename = HelperFunctions::saveFile(null, $file, $filePath);
                        $model = new SellCarLeadImages();
                        $model->image_name = $imagename;
                        $model->sell_car_lead_id = $sellcar->id;
                        $model->save();
                    }
                }
                //send email to admin and user
                Notification::route('mail', 'basitawan.abdul@gmail.com')->notify(new SellCarNotification($inputs));
                Notification::route('mail', $request->email)->notify(new SellCarNotification($inputs));
                //toastSuccess('Lead Created Successfully!');
                return redirect()->route('thankyou.sell.car');
                // return Redirect::back();
            }
        } catch (\Exception $exception) {
            toastError('Something went wrong, try again!');
            return Redirect::back();
        }
    }

    public function find_vehicle(Request $request)
    {
        $reg_number = (string)$request->reg_number;
        try {
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.vehiclesmart.com/rest/vehicleData?reg=" . $reg_number . "&appid=becarsmart-t78MD2cMAx9&isRefreshing=false&dvsaFallbackMode=false",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_POSTFIELDS => "",
                CURLOPT_HTTPHEADER => array(
                    "cache-control: no-cache",
                    "content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW",
                    "postman-token: 04f26ca8-7d9b-715e-44fd-96f2e4f3a82c"
                ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            if ($err) {
                echo $err;
                exit;
                toastError("Something Went Wrong " . $err);
                return Redirect::back();
            } else {
                $response = json_decode($response);
                if ($response->Success) {
                    $year       = $response->VehicleDetails->Year;
                    $color      = $response->VehicleDetails->Colour;
                    $model      = $response->VehicleDetails->Model;
                    $make      = $response->VehicleDetails->Make;
                    $regno      = $response->VehicleDetails->Registration;
                    $fueltype   = $response->VehicleDetails->Fuel;
                    $capacity   = $response->VehicleDetails->CylinderCapacity;
                    $euroStatus = $response->VehicleDetails->EuroStatus ?? '';
                    return view('frontend/sellcar/home', compact('euroStatus', 'regno', 'color', 'model','make', 'fueltype', 'capacity'));
                } else {
                    return view('frontend/sellcar/manuallcar', compact('reg_number'));
                }
            }
        } catch (\Exception $exception) {
            toastError("Something Went Wrong " . $exception->getMessage());
            return Redirect::back();
        }

        // old work for becarsmart api =======================================================================
        // $curl = curl_init();

        // curl_setopt_array($curl, array(
        //     CURLOPT_URL => "https://driver-vehicle-licensing.api.gov.uk/vehicle-enquiry/v1/vehicles",
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => "",
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 0,
        //     CURLOPT_FOLLOWLOCATION => true,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => "POST",
        //     CURLOPT_POSTFIELDS => "{\n\t\"registrationNumber\": \"$reg_number\"\n}",
        //     CURLOPT_HTTPHEADER => array(
        //         "x-api-key: 2vbQSp98Zh6TEObOPpjoa5Rro7wgr6sDaKfXc2Qp",
        //         "Content-Type: application/json"
        //     ),
        // ));

        // $response = curl_exec($curl); 
        //curl_close($curl);
        //$data = json_decode($response);

        // $title = 'something went wrong';
        // if (isset($data->errors[0]->status)) {
        //     if ($data->errors[0]->status == 404) {
        //         return view('frontend/sellcar/manuallcar');
        //     }
        //     $title = $data->errors[0]->title;
        // } else {
        //     $color = $data->colour;
        //     $model = $data->make;
        //     $fueltype = $data->fuelType;
        //     $capacity = $data->engineCapacity;
        //     $regno = $data->registrationNumber;
        //     $euroStatus = $data->euroStatus;
        // }
        // return view('frontend/sellcar/home', compact('euroStatus', 'regno', 'color', 'model', 'fueltype', 'capacity'));

        //end of old work===========================================================================================
    }
    
    public function motor_trader_lead(Request $request){
        // dd($request->all());

        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'company_name' => ['required', 'string', 'max:255'],
            'contact_number' => ['required', 'string', 'max:15'],
            'email' => ['required', 'string', 'email', 'max:255'],

        ]);
        $model = new MotoreTraders();
        $model->first_name = $request->first_name;
        $model->last_name = $request->last_name;
        $model->company_name = $request->company_name;
        $model->contact_number = $request->contact_number;
        $model->email = $request->email;
        if ($model->save()) {
            // Notification::route('mail', 'basitawan.abdul@gmail.com')->notify(new BuyCarNotification($request->all()));
            Notification::route('mail', $request->email)->notify(new TradersNotification($request->all()));
            // toastSuccess('Thank you for your information. We will be in touch soon.');
            return view('frontend.sellcar.thankyou_page4');
        }
    }
}
