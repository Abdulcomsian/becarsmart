    
@extends('frontend.layouts.master')
    @section('title')
        BeCarSmart | Thank You Motor Trader
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

    <section class="pt-5" id="header" style="width: 100%; max-width:50%;  margin:0 auto;">
        <!-- <div class="header-content" style="text-align: left;">
            <img src="{{asset ('assets/img/FFF_BeCar_LO.svg')}}" width="45%" />
        </div> -->
        <br>
        <h3 style="text-align:center;color: rgb(44 59 83);font-size: 36px;line-height: 40px;text-transform: uppercase;font-weight: 600;margin-bottom: -16px;">CONGRATULATIONS! <br> YOU'RE NOW SIGNED UP.</h3>

        <div class="multipale-img" style="text-align: center; width:100%; max-width:70%; margin:0 auto;">
            <div style="width:100%">
                <img src="{{asset ('assets/img/Untitled design-4.png')}}" style="width:50%;" />
            </div>
        </div>
        <br><br>
        <!-- <h3 style="text-align:left;color: rgb(44 59 83);font-size: 31px;line-height: 38px;text-transform: Capitalize;font-weight: 500;margin-bottom: 10px;">What happens next?</h4>
        <p style="font-size:23px;text-align:left;text-transform: capitalize;color: #2b3a53;font-weight:400;">This email will have a document attached, which you will need to fill in so we have a better understanding of what type of vehicles you are looking to stock. 
        <br><br> Once we know what you are looking for, we will contact you either by phone or email.</p>
        <br><br><br> --><br><br>

        <!-- <div style="padding: 5px 20px; background: #e74f42;">
                <p style="font-size:25px;text-align:center;text-transform: uppercase;color:#fff;font-weight:700;letter-spacing: 1px;margin-bottom: -14px;">Refer a trader to us and get £100! </p>
                <p style="font-size: 18px;text-align: center;text-transform: capitalize;color:#fff;font-weight:400;">(They must meet the requirements to sign up with us and purchase at least one vehicle).</p>                
            </div>  -->

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