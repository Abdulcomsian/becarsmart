    
@extends('frontend.layouts.master')
    @section('title')
        BeCarSmart | Thank You Page 1
    @endsection
@section('content')

  
    <section id="generel-information">
        <div class="container">
            <div class="row generel-information-content">
                <div class="col-md-8 offset-md-2 ">
                    <div class="heading pt-5 text-center">
                        <h1 id="thankHeader" class="pb-2">Thank You for completing our vehicle sourcing form.</h1>
                        
                        <p class="thankyour-text pb-2">You are now one step closer to finding your next vehicle.</p>
                        
                        <p class="thankyour-text pb-2">What happens next? One of our agents will be in contact. They will confirm some further details and start searching for your next car.</p>
                        
                        <p class="thankyour-text pb-2">Once you are happy with a vehicle we have sourced you. You can make us aware that you wish to proceed and we can get the process of obtaining the vehicle started. </p>
                        
                        <p class="thankyour-text pb-2">To start the purchasing process we will charge a 10% deposit which will be refundable if the vehicle is not as described.</p>
                        
                        <p class="thankyour-text pb-4"> When you arrive to collect your new vehicle the rest of the payment is to be made via Bank Transfer or Cash (Max limit £10,000 cash payments).</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="row">
                        <div class="col">
                            <div class="single-slider ">
                                <div class="slider-img ">
                                    <img src="{{asset ('assets/img/cars/range-rover.png')}}" width="80%"/>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-slider ">
                                <div class="slider-img ">
                                    <img src="{{asset ('assets/img/cars/porsche.png')}}" width="80%"/>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-slider ">
                                <div class="slider-img ">
                                    <img src="{{asset ('assets/img/cars/mercedes-benz.png')}}" width="80%"/>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-slider ">
                                <div class="slider-img ">
                                    <img src="{{asset ('assets/img/cars/mini-cooper.png')}}" width="80%"/>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-slider ">
                                <div class="slider-img ">
                                    <img src="{{asset ('assets/img/cars/bmw-car.png')}}" width="80%"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <!-- Suppport Section -->
    <section class="want_to_sell p-3 text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center d-flex alignCenter">
                    <p>Want to Sell Your Car?</p>
                </div>
                <div class="col-md-8 float-center">
                    <div class="row">
                        <div class="col-lg-12 ">
                            <form action="{{route('find.vehicle')}}" method="post" class=" formSell d-flex">
                            @csrf
                                <input type="text" name="reg_number" class="form-control" placeholder="AA19AAA" style="padding: 15px;font-size: 22px;font-weight: 600;text-transform: uppercase;">
                                <input type="submit" class="btn btn-danger w-100" value="Value" style="max-width: 35% !important; margin: 0px 0px 0px 20px;background: #2c3b53; ">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection