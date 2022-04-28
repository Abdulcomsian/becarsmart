    
@extends('frontend.layouts.master')
    @section('title')
        BeCarSmart | Thank You Page 1
    @endsection
@section('content')

  
<section id="generel-information">
        <div class="container">
            <div class="row generel-information-content">
                <div class="col-md-10 offset-md-1 ">
                    <div class="heading pt-5 text-center">
                        <h3 id="thankHeader" class="pb-2">Thank You for <br> completing our vehicle <br> SOURCING FORM.</h3>
                        <br>
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <div class="row" style="align-items: baseline;">
                                
                                    <div class="col-md-4">
                                        <div class="single-slider p-3">
                                            <div class="slider-img text-center">
                                                <img src="{{asset ('assets/img/MicrosoftTeams-image (5).png')}}" width="200px"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="single-slider p-3">
                                            <div class="slider-img text-center">
                                                <img src="{{asset ('assets/img/MicrosoftTeams-image (1).png')}}" width="200px"/>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <div class="single-slider p-3">
                                            <div class="slider-img text-center">
                                                <img src="{{asset ('assets/img/MicrosoftTeams-image (3).png')}}" width="200px"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br><br>
                        <p class="thankyour-text pb-2">You are now one step closer to selling your vehicle. What happens next? One of our agents will be in contact. They will confirm all the vehicle details are accurate and give you a guaranteed price. Once you are happy with the offer and wish to accept it we can move forward and arrange a suitable collection date. The payment will be made on collection. It will be an instant bank transfer payment.</p>
                        <br><br>


                    </div>
                </div>
            </div>
        </div>
        <div class="footer-container" style="background:#2c3b53;padding: 11px 25%;">
            <p style="font-size:25px; text-align:center;text-transform: uppercase; color:#fff; font-weight:600;">Why Choose Us?</p>
            
                <div class="choose-us" style="padding-left:20px;">
                    <p style="text-align: center; text-transform: uppercase; color:#fff; font-weight:600; font-size:25px;">1. Free collection</p>
                    <p style="ttext-align: center; ext-transform: uppercase; color:#fff; font-weight:600; font-size:25px;">2. Honest - Haggle Free Service</p>
                    <p style="text-align: center; text-transform: uppercase; color:#fff; font-weight:600; font-size:25px;">3. instant payment</p>
                </div>
        </div>
    </section>
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