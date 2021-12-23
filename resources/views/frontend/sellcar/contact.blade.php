    
@extends('frontend.layouts.master')
    @section('title')
        BeCarSmart | Contact
    @endsection
@section('content')

    <section id="banner-section">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-content text-center mt-5 mb-5">
                    <h2>Contact Us</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- feel free to contact us for more detail section -->
    <section class="contact-section">
        <div class="container">
            <div class="row  pb-5 ">
                <div class="col-md-10 offset-md-1 " style="box-shadow: 2px 10px 28px rgba(75, 0, 129, 0.12)">
                    <div class="contact-title text-center pt-5 pb-5">
                        <h2>Feel free to contact us <br>
                            for more details</h2>
                    </div>
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                           <div class="form-title">
                                <h1>Leave us a message</h1>
                           </div>
                           <div class="form">
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group mt-5">
                                        <input type="email" class="form-control" placeholder="Email Address">
                                    </div>
                                    <div class="form-group mt-5">
                                        <textarea class="form-control" rows="5" placeholder="Your Message"></textarea>
                                      </div>
                                    <button type="button" class="btn btn-primary btn-md btn-block  mt-5 mb-5">Block level button</button>
                                    
                                    <!-- <button type="submit" class="btn btn-primary mt-4 mb-5">Send</button> -->
                                </form>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="contact-details">
                               <ul class="address">
                                   <li><img src="{{asset ('assets/img/location.png')}}" alt="" ></li>
                                   <li><p>Address Here</p></li>
                               </ul>
                               <ul class="address">
                                    <li><img src="{{asset ('assets/img/calling.png')}}" alt=""></li>
                                    <li><p>123456789</p></li>
                                </ul>
                                <ul class="address">
                                    <li><img src="{{asset ('assets/img/mail.png')}}" alt=""></li>
                                    <li><p>info@example.com</p></li>
                                </ul>
                            </div>
                            <div class="social-media">
                                <ul class="address">
                                    <li><img src="{{asset ('assets/img/youtube.png')}}" alt=""></li>
                                    <li><img src="{{asset ('assets/img/instagram.png')}}" alt=""></li>
                                    <li><img src="{{asset ('/assets/img/facebook.png')}}" alt=""></li>
                                    <li><img src="{{asset ('/assets/img/twitter.png')}}" alt=""></li>
                                </ul>
                                
                             </div>
                             <div class="map-img address">
                                <img src="{{asset ('assets/img/map.png')}}" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
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
                            <form action="" class=" formSell d-flex">
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