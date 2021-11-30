<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home\HeroSection;
use App\Models\Home\HowItWorkSection;
use App\Models\Home\WhySellCar;

class HomeController extends Controller
{
    public function index()
    {
        $herosection = HeroSection::first();
        $howitworks  = HowItWorkSection::get();
        $whysellcar  = WhySellCar::first();
        return view('frontend/sellcar/index', compact('herosection', 'howitworks', 'whysellcar'));
    }
}
