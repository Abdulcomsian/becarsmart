<?php

namespace App\Http\Controllers\SellCar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Carcontroller extends Controller
{

    public function sellcar()
    {
          return view('Car.sell-car');
    }

    public function buycar()
    {
          return view('Car.buy-car');
    }
    public function cms()
    {
          return view('Car.cms');
    }
    public function leads_details()
    {
          return view('Car.leads-details');
    }

    public function evaluate_car(){
          return view(Car.evaluate-car);
    }

    public function user_dropdown(){
          return view('user_dropdown/home');
    }
    public function questionnaire(){
      return view('user_dropdown/questionnaire');
      }
}
