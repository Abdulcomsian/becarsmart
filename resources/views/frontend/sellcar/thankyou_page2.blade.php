    
@extends('frontend.layouts.master')
    @section('title')
        BeCarSmart | Thank You Page 2
    @endsection
@section('content')

    <!-- <section id="faq-section">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-content text-center mt-5 mb-5">
                    <h2>FAQ</h2>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Generel Information -->

    <section id="generel-information">
        <div class="container">
            <div class="row generel-information-content">
                <div class="col-md-8 offset-md-2 ">
                    <div class="heading pt-5 text-center">
                        <h1 id="thankHeader" class="pb-2">Thank You for completing our vehicle valuation form.</h1>
                        
                        <p class="thankyour-text pb-2">You are now one step closer to selling your vehicle.</p>
                        
                        <p class="thankyour-text pb-2">What happens next? One of our agents will be in contact. They will confirm all the vehicle details are accurate and give you a guaranteed price.</p>
                        
                        <p class="thankyour-text pb-2">Once you are happy with the offer and wish to accept it we can move forward and arrange a suitable collection date.</p>
                        
                        <p class="thankyour-text pb-2">The payment will be made on collection. It will be an instant bank transfer payment.</p>
                    </div>
                </div>
            </div>
            </div><br><br>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="row" style="align-items: baseline;">
                        <div class="col-md-3">
                            <div class="single-slider ">
                                <div class="slider-text text-center">
                                    <h2><span>FREE<br>COLLECTION!</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="single-slider ">
                                <div class="slider-img ">
                                    <img src="{{asset ('assets/img/cars/tesla-roadster.png')}}" width="80%"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="single-slider ">
                                <div class="slider-text text-center">
                                    <h2><span>INSTANT <br>PAYMENT!</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="single-slider ">
                                <div class="slider-img ">
                                    <img src="{{asset ('assets/img/cars/dollor-logo.png')}}" width="80%"/>
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