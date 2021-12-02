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

class HomeController extends Controller
{
    public function index()
    {
        $herosection = HeroSection::first();
        $howitworks  = HowItWorkSection::get();
        $whysellcar  = WhySellCar::first();
        $blogs       = Blogs::limit(3)->get();
        $blogheader  = BlogHeader::first();
        $testominals  = Testominal::get();
        return view('frontend/sellcar/index', compact('blogheader', 'herosection', 'howitworks', 'whysellcar', 'blogs', 'testominals'));
    }
}
