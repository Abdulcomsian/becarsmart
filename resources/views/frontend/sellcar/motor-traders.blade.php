@extends('frontend.layouts.master')
    @section('title')
    BeCarSmart | Motor Traders
    @endsection
    @section('content')

    <section id="faq-section">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="contact-content text-center mt-5 mb-5">
                            <h2>Motor Traders</h2>
                            <p>BeCarSmart are here to help motor traders get hold of stock directly from
                            <br> private individuals and companies who are looking to sell their cars.
                            <br>Sign up with us and we will be in touch.</p>
                            <br>
                            <p>Fill in the form below and sign up for free.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 offset-md-4">
                            <div id="motor_traders" class="pb-5">
                                <form>
                                    <div class="mb-3">
                                        <label for="first_name" class="form-label">First name:</label>
                                        <input type="text" class="form-control motor_name" id="first_name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="last_name" class="form-label">Last name:</label>
                                        <input type="text" class="form-control motor_name" id="last_name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="company_name" class="form-label">Company name:</label>
                                        <input type="text" class="form-control motor_name" id="company_name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="contact_number" class="form-label">Contact number:</label>
                                        <input type="number" class="form-control motor_name" id="contact_number">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email:</label>
                                        <input type="email" class="form-control motor_name" id="email">
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">I have read the Privacy Policy and Accept the Terms & Conditions.</label>
                                    </div>
                                    <div class="motor_button">
                                        <a href="#">
                                            <input type="submit" class="btn btn-md " value="SIGN UP" >
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="row" style="align-items: center; ">
                                <div class="col">
                                    <div class="single-slider text-center">
                                        <div class="slider-img ">
                                            <img src="{{asset ('assets/img/cars/vippng.com-car-plan-view-png-724708.png')}}" width="100%"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col p-0 m-0">
                                    <div class="single-slider text-center">
                                        <div class="slider-img " style=" transform: rotate(-50deg);">
                                            <img src="{{asset ('assets/img/magnifying-glass.png')}}" width="50%"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="single-slider text-center">
                                        <div class="slider-img ">
                                            <img src="{{asset ('assets/img/cars/bmw-car.png')}}" width="100%"/>
                                        </div>
                                    </div>
                                </div>
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