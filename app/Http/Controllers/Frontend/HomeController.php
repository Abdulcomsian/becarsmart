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
}
