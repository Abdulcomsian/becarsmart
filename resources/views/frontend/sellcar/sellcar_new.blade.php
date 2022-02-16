@extends('frontend.layouts.master')
@section('title')
BeCarSmart | Sellcar New
@endsection
@section('css')
@endsection
@section('content')

<!-- Hero Section -->
<section class="SellCar-section text-center">
    <div class="container">
        <div class="row d-flex pt-5">
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-12">
                        <h1 style="float: left;" class="heading-h1">
                            {{$_GET['regno'] ?? 'ZS33 FS'}}
                        </h1>
                    </div>
                </div>
                <h3 style="text-align: left;">
                    {{$_GET['euroStatus'] ?? 'Hyundai I30 Active Blue Drive CRDI'}}
                </h3>

                <div class="row">
                    <div class="col-md-12">
                        <div class="sellcar-ul-li  pt-1 pb-2">
                            <ul class="d-flex">
                                <li><b>model: </b>&nbsp {{$_GET['model_no'] ?? ''}}</li>&nbsp &nbsp
                                <li><b>Color: </b>&nbsp {{$_GET['color'] ?? ''}}</li>&nbsp &nbsp
                                <li><b>Engine: </b>&nbsp {{$_GET['engine'] ?? ''}}</li>&nbsp &nbsp
                                <li><b>Mileage: </b>&nbsp {{$_GET['enginecapacity'] ?? ''}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 ">
                <div class="row">
                    <div class="col-md-12">
                        <div class="how_it_works_header pt-3">
                            <h2>How it Works?</h2>
                            <p>4 Easy Steps</p>
                        </div>
                    </div>
                </div>
            </div>
            <form id="sellcarform" method="post" action="{{url('sellcar_new')}}" enctype="multipart/form-data">
                @csrf
                <div id="step_1" style="display:block;">
                    <div class="row d-flex" ;>
                        <div class="col-lg-5 col-md-12">
                            <div class="sellcar-blurb-content py-5">
                                <!-- Form start -->

                                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                <!-- api field -->
                                <input type="hidden" name="model_no" value="{{$_GET['model_no'] ?? ''}}">
                                <input type="hidden" name="color" value="{{$_GET['color'] ?? ''}}">
                                <input type="hidden" name="engine" value="{{$_GET['engine'] ?? ''}}">

                                <div class="row">
                                    <div class="col-md-12" style="justify-content: left;">

                                        <div class="row d-flex align-items-left">
                                            <div class="col-lg-10 col-md-12 col-sm-12 " style="width: 100%;">
                                                <div class="card shadow card-shadow ">
                                                    <div class="card-title">
                                                        <h2 class="p-3 pb-0">Enter Details</h2>
                                                        <p class="p-3 pt-0"> Enter your details to get a valuation.</p>
                                                    </div>
                                                    <div class="home-card-body card-body">

                                                        <div class="row mb-4">
                                                            <div class="col-md-12">
                                                                <div class="input-Group">
                                                                    <input type="text" value="{{old('fullname')}}"
                                                                        name="fullname" class="form-control"
                                                                        id="fullname" placeholder="Full name" require>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            <div class="col-md-12">
                                                                <div class="input-Group">
                                                                    <input type="email" value="{{old('email')}}"
                                                                        name="email" class="form-control" id="email"
                                                                        placeholder="Email" require>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-4">
                                                            <div class="col-md-12">
                                                                <div class="input-Group">
                                                                    <input type="number" value="{{old('phone')}}"
                                                                        name="phone" class="form-control" minlength="10"
                                                                        maxlength="11" id="phone"
                                                                        placeholder="Phone number" require>
                                                                </div>
                                                                <span class="text-danger phoneerror"></span>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-4">
                                                            <div class="col-md-12">
                                                                <div class="input-Group">
                                                                    <input type="text" value="{{old('postal')}}"
                                                                        name="postal" class="form-control" minlength="5"
                                                                        maxlength="7" id="postal"
                                                                        placeholder="Postal Code" require>
                                                                </div>
                                                                <span class="text-danger postalerror"></span>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-5">
                                                            <div class="col-md-12">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDisabled">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDisabled">
                                                                        I have read the Privacy Policy and accept the
                                                                        Terms.
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="" style="float:right" ;>
                                                            <button type="button" id="first-button"
                                                                class="btn text-light main-bg" disabled>Next</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-7 col-md-12">
                            <div class="sellcar-blurb " style="padding: 0% 0% 0% 20%">
                                <img src="{{asset ('assets/img/right-col.png')}}" alt="">
                            </div>
                        </div> -->
                        <div class="col-lg-7 col-md-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="title">
                                    <img style="width: 200px;" src="{{asset ('assets/img/MicrosoftTeams-image.png')}}" class="img-fluid">
                                    <p style="color: #2c3b53;font-weight:bold;font-size: 20px !important;">Enter Your Reg</p>
                                    <p>Enter your Reg and follow the steps, answer the questions to the best of your knowledge.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="title">
                                    <img style="width: 200px;" src="{{asset ('assets/img/MicrosoftTeams-image (2).png')}}" class="img-fluid">
                                    <p style="color: #2c3b53;font-weight:bold;font-size: 20px !important;">Get Your Valuation! </p>
                                    <p>We will get in-touch via email or phone call.</p>
                                </div>
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="title">
                                        <img style="width: 200px;" src="{{asset ('assets/img/DEAL.png')}}" class="img-fluid">
                                        <p style="color: #2c3b53;font-weight:bold;font-size: 20px !important;">  Accept Your Quote and Arrange for Completion!</p>
                                        <p>Once you're happy with the price for your vehicle you can get in-touch with us and arrange a date to complete the deal.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="title">
                                        <img style="width: 200px;" src="{{asset ('assets/img/MicrosoftTeams-image (4).png')}}" class="img-fluid">
                                        <p style="color: #2c3b53;font-weight:bold;font-size: 20px !important;"> Sale Complete - Get Paid</p>
                                        <p>The best part - GETTING PAID! Before your vehicle is out of your site!</p>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row pt-5">
                                <div class="col-md-12 ">
                                    <div class="sell-blurb-icons">
                                        <img src="{{asset ('assets/img/valuate -your-car.png')}}" alt="Value my Car" class="float-center pb-3">
                                        <div class="sell-blurb-text">
                                            <h2>Sell Your Car</h2>
                                            <p class="get-a-free">Get a free no obligation valuation above.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-2">
                                <div class="col-md-12 ">
                                    <div class="sell-blurb-icons">
                                        <img src="{{asset ('assets/img/book-appointment.png')}}" alt="Value my Car" class="float-center pb-3">
                                        <div class="sell-blurb-text">
                                            <h2>Book Appointment</h2>
                                            <p class="get-a-free">Book an appointment for a free car inspection near you.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-2">
                                <div class="col-md-12 ">
                                    <div class="sell-blurb-icons">
                                        <img src="{{asset ('assets/img/sell-your-car.png')}}" alt="Value my Car" class="float-center pb-3">
                                        <div class="sell-blurb-text">
                                            <h2>Sell your Car</h2>
                                            <p class="get-a-free">Complete the sale and get paid if you are happy with the offer.</p>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="row" id="step_2" style="display:none;">
                    <div class="col-lg-12 col-md-12">
                        <div class="sellcar-blurb-content py-5">
                            <div class="row">
                                <div class="col-md-12" style="justify-content: left;">
                                    <div class="row d-flex align-items-left">
                                        <div class="col-lg-10 col-md-12 col-sm-12 " style="width: 100%;">
                                            <div class="card shadow card-shadow ">
                                                <div class="home-card-body card-body">
                                                    <div class="row ">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-12 " style="padding-bottom: 10px;">
                                                                    <label for="mileage" class="form-label"
                                                                        style="font-size:13px; font-weight:600">What is
                                                                        the mileage?</label>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="input-Group">
                                                                        <div class="input-Group">
                                                                            <input type="number" class="form-control"
                                                                                name="mileage" id="mileage"
                                                                                placeholder="Miles"
                                                                                style="padding: 7px; border-radius: 0; border: 1px solid grey;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <span class="text-danger" id="mileageerr"></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 ">
                                                            <div class="row">
                                                                <div class="col-md-12 " style="">
                                                                    <label for="fname" class="form-label"
                                                                        style="font-size:13px; font-weight:600">How many
                                                                        sets of keys do you have for this
                                                                        vehicle?</label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="inputGroup">
                                                                        <input id="driving " name="set_of_keys"
                                                                            class="-yes" type="radio" value="1"
                                                                            {{ old('set_of_keys') == '1' ? 'checked' : '' }}>
                                                                        <label for="driving ">1</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="inputGroup">
                                                                        <input id="tuition" name="set_of_keys"
                                                                            class="-no" type="radio" value="2"
                                                                            {{ old('set_of_keys') == '2' ? 'checked' : '' }} />
                                                                        <label for="tuition">2 or more</label>
                                                                    </div>
                                                                </div>
                                                                <span class="text-danger set_of_keys"></span>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="col-md-6 ">
                                                            <div class="row">
                                                                <div class="col-md-12 " style="">
                                                                    <label for="fname" class="form-label"
                                                                        style="font-size:13px; font-weight:600">Is the
                                                                        vehicle a non-runner?</label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="inputGroup">
                                                                        <input id="driving" name="non_runner"
                                                                            class="-yes" type="radio" value="1"
                                                                            {{ old('non_runner') == '1' ? 'checked' : '' }}>
                                                                        <label for="driving">Yes</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="inputGroup">
                                                                        <input id="police" name="non_runner" class="-no"
                                                                            type="radio" value="0"
                                                                            {{ old('non_runner') == '0' ? 'checked' : '' }} />
                                                                        <label for="police">No</label>
                                                                    </div>
                                                                </div>
                                                                <span class="text-danger non_runner"></span>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-md-12 ">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label for="fname" class="form-label"
                                                                        style="font-size:13px; font-weight:600">Service
                                                                        History</label>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="inputGroup">
                                                                        <input id="full" name="service_history"
                                                                            class="check-am" type="radio" value="full"
                                                                            {{ old('service_history') == 'full' ? 'checked' : '' }}>
                                                                        <label for="full">Full</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="inputGroup">
                                                                        <input id="some" name="service_history"
                                                                            class="check-am" type="radio" value="some"
                                                                            {{ old('service_history') == 'some' ? 'checked' : '' }} />
                                                                        <label for="some">Some</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="inputGroup">
                                                                        <input id="None" name="service_history"
                                                                            class="check-am" type="radio" value="none"
                                                                            {{ old('service_history') == 'none' ? 'checked' : '' }}>
                                                                        <label for="None">None</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="inputGroup">
                                                                        <input id="first" name="service_history"
                                                                            class="check-am" type="radio"
                                                                            value="first not due"
                                                                            {{ old('service_history') == 'first not due' ? 'checked' : '' }} />
                                                                        <label for="first">First not due</label>
                                                                    </div>
                                                                </div>
                                                                <span class="text-danger service_history"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-md-6 ">
                                                            <div class="row">
                                                                <div class="col-md-12 " style="">
                                                                    <label for="fname" class="form-label"
                                                                        style="font-size:13px; font-weight:600">Any
                                                                        outstanding finance?</label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="inputGroup">
                                                                        <input id="finance-yes" name="finance"
                                                                            class="-yes" type="radio" value="1"
                                                                            {{ old('finance') == '1' ? 'checked' : '' }}>
                                                                        <label for="finance-yes">Yes</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="inputGroup">
                                                                        <input id="finance-no" name="finance"
                                                                            class="-no" type="radio" value="0"
                                                                            {{ old('finance') == '0' ? 'checked' : '' }} />
                                                                        <label for="finance-no">No</label>
                                                                    </div>
                                                                </div>
                                                                <span class="text-danger finance"></span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-12 ">
                                                                    <label for="fname" class="form-label"
                                                                        style="font-size:13px; font-weight:600">How many
                                                                        months untill the vehicle is due its
                                                                        MOT?</label>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="inputGroup">
                                                                        <select class="form-select"
                                                                            aria-label="Default select example"
                                                                            name="mot_due">
                                                                            <option value="0">0</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6" selected>6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                            <option value="11">11</option>
                                                                            <option value="12">12</option>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row ">

                                                        <!-- <div class="col-md-6 ">
                                                            <div class="row">
                                                                <div class="col-md-12 " style="">
                                                                    <label for="fname" class="form-label"
                                                                        style="font-size:13px; font-weight:600">Has this
                                                                        vehicle been subject to an insurance write off
                                                                        or been in an accident?</label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="inputGroup">
                                                                        <input id="accident-damaged-yes"
                                                                            name="accident_damaged" class="-yes"
                                                                            type="radio" value="1">
                                                                        <label for="accident-damaged-yes">Yes</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="inputGroup">
                                                                        <input id="accident-damaged-no"
                                                                            name="accident_damaged" class="-no"
                                                                            type="radio" value="0" />
                                                                        <label for="accident-damaged-no">No</label>
                                                                    </div>
                                                                </div>
                                                                <span class="text-danger accident_damaged"></span>
                                                                <div id="home_textarea" class="col-md-12 d-none">
                                                                    <textarea id="textarea" name="comments" type="text"
                                                                        placeholder="Enter your comment"
                                                                        style="width: 100%;height: 100px; padding-left:7px 17px">{{old('comments')}}</textarea>
                                                                </div>
                                                                <span class="text-danger home_textarea"></span>
                                                            </div>
                                                        </div> -->
                                                        <!-- <div class="col-md-6 ">
                                                            <div class="row">
                                                                <div class="col-md-12 " style="">
                                                                    <label for="fname" class="form-label"
                                                                        style="font-size:13px; font-weight:600">Any
                                                                        outstanding finance?</label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="inputGroup">
                                                                        <input id="finance-yes" name="finance"
                                                                            class="-yes" type="radio" value="1"
                                                                            {{ old('finance') == '1' ? 'checked' : '' }}>
                                                                        <label for="finance-yes">Yes</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="inputGroup">
                                                                        <input id="finance-no" name="finance"
                                                                            class="-no" type="radio" value="0"
                                                                            {{ old('finance') == '0' ? 'checked' : '' }} />
                                                                        <label for="finance-no">No</label>
                                                                    </div>
                                                                </div>
                                                                <span class="text-danger finance"></span>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                    <div class="d-gri pt-5" style="float:right">
                                                    <button type="button" id="previous_button_1"
                                                            class="btn text-light main-bg">Previous</button>
                                                        <button type="button" id="second-button"
                                                            class="btn text-light main-bg">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="step_3" style="display:none;">
                    <div class="col-lg-12 col-md-12">
                        <div class="sellcar-blurb-content py-5">
                            <div class="row">
                                <div class="col-md-12" style="justify-content: left;">
                                    <div class="row d-flex align-items-left">
                                        <div class="col-lg-10 col-md-12 col-sm-12 " style="width: 100%;">
                                            <div class="card shadow card-shadow ">
                                                <div class="home-card-body card-body">
                                                    <div class="step-3-contentt pb-5">
                                                        <div class="row">
                                                            <div class="col-md-12 ">
                                                                <h2>Almost There!</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label for="fname" class="form-label"
                                                                        style="font-size:13px; font-weight:600">Any
                                                                        mechanical faults with the car?</label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="inputGroup">
                                                                        <input id="hradio" name="gearbox_condition"
                                                                            class="check-am" type="radio" value="1"
                                                                            {{ old('gearbox_condition') == 'no faults' ? 'checked' : '' }} />
                                                                        <label for="hradio">YES</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="inputGroup">
                                                                        <input id="iradio" name="gearbox_condition"
                                                                            class="check-am" type="radio" value="0"
                                                                            {{ old('gearbox_condition') == 'faults but run' ? 'checked' : '' }}>
                                                                        <label for="iradio">NO</label>
                                                                    </div>
                                                                </div>
                                                                <span class="text-danger  gearbox_condition"></span>
                                                                <!-- <div class="col-md-4">
                                                                    <div class="inputGroup">
                                                                        <input id="jradio" name="gearbox_condition" class="check-am" type="radio" value="does not" {{ old('gearbox_condition') == 'does not' ? 'checked' : '' }} />
                                                                        <label for="jradio">DOESN'T RUN </label>
                                                                    </div>
                                                                </div> -->
                                                                <div id="mechanicalTextArea" class="col-md-12 d-none">
                                                                    <textarea id="textarea" name="gearbox_comments"
                                                                        type="text" placeholder="Enter your comment"
                                                                        style="width: 100%;height: 100px; padding-left:7px 17px"></textarea>
                                                                </div>
                                                                <span class="text-danger  gearbox_comments"></span>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label for="fname" class="form-label"
                                                                        style="font-size:13px; font-weight:600">Any
                                                                        Warning lights or messages on the dash?</label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="inputGroup">
                                                                        <input id="xradio" name="warning_light"
                                                                            class="check-am" type="radio" value="1"
                                                                            {{ old('warning_light') == '1' ? 'checked' : '' }} />
                                                                        <label for="xradio">YES</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="inputGroup">
                                                                        <input id="yradio" name="warning_light"
                                                                            class="check-am" type="radio" value="0"
                                                                            {{ old('warning_light') == '0' ? 'checked' : '' }}>
                                                                        <label for="yradio">No</label>
                                                                    </div>
                                                                </div>
                                                                <span class="text-danger warning_light"></span>
                                                                <div id="warning_textarea" class="col-md-12 d-none">
                                                                    <textarea id="textarea" name="warning_comments"
                                                                        type="text" placeholder="Enter your comment"
                                                                        style="width: 100%;height: 100px; padding-left:7px 17px">{{old('comments')}}</textarea>
                                                                </div>
                                                                <span class="text-danger warning_comments"></span>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label for="fname" class="form-label"
                                                                        style="font-size:13px; font-weight:600">How
                                                                        would you describe the bodywork of this
                                                                        vehicle?</label>
                                                                </div>
                                                                <!-- <div class="col-md-6">
                                                                    <div class="inputGroup">
                                                                        <input id="scratchesradio1" name="scratches" class="check-am" type="radio" value="1" {{ old('warning_light') == '1' ? 'checked' : '' }} />
                                                                        <label for="scratchesradio1">YES</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="inputGroup">
                                                                        <input id="scratchesradio2" name="scratches" class="check-am" type="radio" value="0" {{ old('warning_light') == '0' ? 'checked' : '' }}>
                                                                        <label for="scratchesradio2">No</label>
                                                                    </div>
                                                                </div> -->
                                                                <div class="col-md-12">
                                                                    <div class="inputGroup">
                                                                        <select class="form-select"
                                                                            aria-label="Default select example"
                                                                            name="vehicle_bodywork">
                                                                            <option selected>Excellent</option>
                                                                            <option value="1">Good</option>
                                                                            <option value="2">Average</option>
                                                                            <option value="3">Poor</option>
                                                                            <option value="4">Very bad</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <span class="text-danger vehicle_bodywork"></span>

                                                                <!-- <div id="scratches_textarea" class="col-md-12 d-none">
                                                                    <textarea id="textarea" name="scratches_comments"
                                                                        type="text" placeholder="Enter your comment"
                                                                        style="width: 100%;height: 100px; padding-left:7px 17px"
                                                                        requried>{{old('comments')}}</textarea>
                                                                </div>
                                                                <span class="text-danger scratches_textarea"></span> -->
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label for="fname" class="form-label"
                                                                        style="font-size:13px; font-weight:600">What is
                                                                        the condition of this vehicle? Please select
                                                                        one:</label>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="inputGroup">
                                                                        <select class="form-select"
                                                                            aria-label="Default select example"
                                                                            name="vehicle_condtion">
                                                                            <option selected>Excellent</option>
                                                                            <option value="1">Good</option>
                                                                            <option value="2">Average</option>
                                                                            <option value="3">Poor</option>
                                                                            <option value="4">Very bad</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <span class="text-danger vehicle_condtion"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-12 pb-3">
                                                                    <label for="fname" class="form-label"
                                                                        style="font-size:13px; font-weight:600">Please feel free to upload images of your vehicle.  <span
                                                                            style="font-size: 14px; font-weight: 500"> (Take clear pictures of any damage e.g dents, scratches, and poor previous repairs).</span></label>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="uploadDiv" style="padding-left: 10px;">
                                                                        <div class="input-images" ></div>
                                                                    </div>
                                                                    <!-- <div class="input-Group">
                                                                        <div class="input-Group">
                                                                            <input type="file" class="form-control" id="Written" style="padding: 7px; border-radius: 0; border: 1px solid grey;" name="file[]" multiple>
                                                                        </div>
                                                                    </div> -->
                                                                </div>
                                                            </div>
                                                            <!-- <div class="row">
                                                                <div class="col-md-12">
                                                                    <label for="fname" class="form-label" style="font-size:13px; font-weight:600"><img src="https://www.freepnglogos.com/uploads/whatsapp-png-14.png" width="25%" alt=""></label>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="input-Group">
                                                                        <div class="col-md-12">
                                                                            <label for="fname" class="form-label" style="font-size:13px; font-weight:600">You can also send us photos with your rag number via whatsapp to 01234567899.</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                          
                                                            

                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label for="fname" class="form-label pb-3"
                                                                        style="font-size:13px; font-weight:600">Feel
                                                                        free to list the features/extras of this vehicle
                                                                        <span
                                                                            style="font-size: 14px; font-weight: 500">(Leather
                                                                            seats, Electric seats, Panoramic roof, Nav,
                                                                            Head-up display, etc)</span> .</label>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div id="accurate_textarea" class="col-md-12 ">
                                                                        <textarea id="comments" name="more_info"
                                                                            type="text" placeholder="Enter your comment"
                                                                            style="width: 100%;height: 100px; padding-left:7px 17px">{{old('comments')}}</textarea>
                                                                    </div>
                                                                    <!-- <span class="text-danger comments"></span> -->
                                                                </div>
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                        <div class="row">
                                                                <div class="col-md-12">
                                                                    <label for="fname" class="form-label"
                                                                        style="font-size:13px; font-weight:600">How
                                                                        would you describe the interior of this
                                                                        vehicle?</label>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="inputGroup">
                                                                        <select class="form-select"
                                                                            aria-label="Default select example"
                                                                            name="vehicle_interior">
                                                                            <option selected>Excellent</option>
                                                                            <option value="1">Good</option>
                                                                            <option value="2">Average</option>
                                                                            <option value="3">Poor</option>
                                                                            <option value="4">Very bad</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <span class="text-danger vehicle_interior"></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="row">
                                                            <div class="col-md-12">
                                                                <label for="fname" class="form-label"
                                                                    style="font-size:13px; font-weight:600">What is
                                                                    condition of the alloys?</label>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="inputGroup">
                                                                    <select class="form-select"
                                                                        aria-label="Default select example"
                                                                        name="alloys_condtion">
                                                                        <option selected>Excellent</option>
                                                                        <option value="1">Good</option>
                                                                        <option value="2">Average</option>
                                                                        <option value="3">Poor</option>
                                                                        <option value="4">Very bad</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <span class="text-danger alloys_condtion"></span>
                                                            </div>
                                                        </divcl>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-md-6">
                                                            
                                                            <!-- <div class="row">
                                                                <div class="col-md-12">
                                                                    <label for="fname" class="form-label" style="font-size:13px; font-weight:600"><img src="https://www.freepnglogos.com/uploads/whatsapp-png-14.png" width="25%" alt=""></label>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="input-Group">
                                                                        <div class="col-md-12">
                                                                            <label for="fname" class="form-label" style="font-size:13px; font-weight:600">You can also send us photos with your rag number via whatsapp to 01234567899.</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                           
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label for="fname" class="form-label"
                                                                        style="font-size:13px; font-weight:600">When are you planning to sell your car:</label>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="inputGroup">
                                                                        <select class="form-select"
                                                                            aria-label="Default select example"
                                                                            name="vehicle_sell_planning">
                                                                            <option selected>As soon as I can</option>
                                                                            <option value="1">Within a week</option>
                                                                            <option value="2">Within a month</option>
                                                                            <option value="3">Not sure</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <span class="text-danger vehicle_sell_planning"></span>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-6">
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-md-6">
                    <div class="row">
                                                                <!-- <div class="col-md-12">
                                                                    <label for="fname" class="form-label" style="font-size:13px; font-weight:600"><img src="{{asset('assets/img/email.png')}}" style="width: 50px;" alt=""></label>
                                                                </div> -->
                                                                <!-- <div class="col-md-12">
                                                                    <div class="input-Group">
                                                                        <div class="col-md-12">
                                                                            <label for="fname" class="form-label" style="font-size:13px; font-weight:600">You can also send us photos with your rag number via whatsapp to 01234567899.</label>
                                                                        </div>
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-gridd mt-4">
                                                    <button type="button" id="previous_button_2"
                                                            class="btn text-light main-bg">Previous</button>
                                                        <button type="button" id="third-page"
                                                            class="btn text-light main-bg">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- How it Works -->
<!-- <section class="how_it_Works text-center">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="title">
                    <h2>How it Works?</h2>
                    <p>3 Easy Steps</p>
                </div>
            </div>
        </div>

        <div class="row steps">
            <div class="col-md-4 col-sm-12 pt-5">
                <div class="blurb-icons " style="padding-bottom:13.10%">
                    <img src="{{asset ('assets/img/valuate -your-car.png')}}" alt="Value my Car" class="float-center pb-3">
                    <h2>Sell Your Car</h2>
                    <p class="get-a-free">Get a free no obligation <br> valuation above.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 pt-5">
                <div class="blurb-icons">
                    <img src="{{asset ('assets/img/book-appointment.png')}}" alt="Value my Car" class="float-center pb-3">
                    <h2>Book Appointment</h2>
                    <p class="get-a-free">Book an appointment for <br>a free car inspection <br> near you.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 pt-5">
                <div class="blurb-icons">
                    <img src="{{asset ('assets/img/sell-your-car.png')}}" alt="Value my Car" class="float-center pb-3">
                    <h2>Sell your Car</h2>
                    <p class="get-a-free">Complete the sale and <br> get paid if you are happy with <br> the offer.</p>
                </div>
            </div>
        </div>
    </div>
</section> -->
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
                            <input type="text" name="reg_number" class="form-control" placeholder="AA19AAA"
                                style="padding: 5px;font-size: 45px;font-weight: 600;text-transform: uppercase;text-align: center;">
                            <input type="submit" class="btn btn-danger w-100" value="Value"
                                style="max-width: 35% !important; margin: 0px 0px 0px 20px;background: #2c3b53; ">
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<!-- Modal HTML -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header">
                <div class="icon-box">
                    <!-- <i class="material-icons">&#xE876;</i> -->
                    <i class="fa fa-check" aria-hidden="true"></i>

                </div>
                <h4 class="modal-title w-100">Awesome!</h4>
            </div>
            <div class="modal-body">
                <p class="text-center">Your booking has been confirmed. Check your email for detials.</p>
            </div>
            <div class="modal-footer">
                <button id="redirect" class="btn btn-success btn-block" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
<script type="text/javascript" src="{{asset('js/image-uploader.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $('input[type=radio][name=accident_damaged]').change(function () {
            if (this.value == 1) {
                $("#home_textarea").removeClass('d-none');
            } else {
                $("#home_textarea").addClass('d-none');
            }
        });
        $('input[type=radio][name=gearbox_condition]').change(function () {
            if (this.value == 1) {
                $("#mechanicalTextArea").removeClass('d-none');
            } else {
                $("#mechanicalTextArea").addClass('d-none');
            }
        });


        $('input[type=radio][name=warning_light]').change(function () {
            if (this.value == 1) {
                $("#warning_textarea").removeClass('d-none');
            } else {
                $("#warning_textarea").addClass('d-none');
            }

        });

        $('input[type=radio][name=scratches]').change(function () {
            if (this.value == 1) {
                $("#scratches_textarea").removeClass('d-none');
            } else {
                $("#scratches_textarea").addClass('d-none');
            }

        });

    });


    $('input[type=radio][name=warning_light]').change(function () {
        if (this.value == 1) {
            $("#warning_textarea").removeClass('d-none');
        } else {
            $("#warning_textarea").addClass('d-none');
        }

    });

    $('input[type=radio][name=accurate]').change(function () {
        if (this.value == 1) {
            $("#accurate_textarea").removeClass('d-none');
        } else {
            $("#accurate_textarea").addClass('d-none');
        }

    });

</script>

<script>
    $("#flexCheckDisabled").change(function () {
        if (this.checked) {
            $("#first-button").removeAttr('disabled');
        } else {
            $("#first-button").attr('disabled', 'disabled');
        }
    })
    $(document).ready(function () {
        $("#first-button").on('click', function () {
            var fullname = $("#fullname").val();
            var email = $("#email").val();
            var phone = $("#phone").val();
            var postal = $("#postal").val();
            $("#fullname").css("border", "none");
            $("#email").css("border", "none");
            $("#phone").css("border", "none");
            $("#postal").css("border", "none");
            $(".phoneerror").html("");
            $(".postalerror").html("");
            if (fullname == "") {
                $("#fullname").css("border", "1px solid red");
                return false;
            }
            if (email == "") {
                $("#email").css("border", "1px solid red");
                return false;
            }
            if (phone == "") {
                $("#phone").css("border", "1px solid red");
                return false;
            }
            if (phone.length < 10 || phone.length > 11) {
                $(".phoneerror").html("Phone number must be 10 digits or 11 digits");
                return false;
            }
            if (postal.length < 5 || postal.length > 7) {
                $(".postalerror").html("Phone number must be 5 digits or 7 digits");
                return false;
            }

            $(".how_it_works_header").hide();
            $("#step_1").hide();
            $("#step_2").show();
            $("#step_3").hide();
        });
        
        $("#previous_button_1").on('click', function () {
            $(".how_it_works_header").hide();
            $("#step_1").show();
            $("#step_2").hide();
            $("#step_3").hide();
        });

        $("#previous_button_2").on('click', function () {
            $(".how_it_works_header").hide();
            $("#step_1").hide();
            $("#step_2").show();
            $("#step_3").hide();
        });

        $("#second-button").on('click', function () {
            //step2 form validations
            $(".service_history").html("");
            // $(".non_runner").html("");
            // $(".accident_damaged").html("");
            $(".set_of_keys").html("");
            $(".finance").html("");
            $(".home_textarea").html("");
            $("#mileageerr").html("");

            if ($("#mileage").val() == "") {
                $("#mileageerr").html("Please Enter Mileage");
            }
            if ($('input[name="finance"]:checked').length == 0) {
                $(".finance").html("Please Select Outstanding finance");
                return false;
            }
            if ($('input[name="service_history"]:checked').length == 0) {
                $(".service_history").html("Please Select Service History");
                return false;
            }
            // if ($('input[name="non_runner"]:checked').length == 0) {
            //     $(".non_runner").html("Please Select non runner ");
            //     return false;
            // }
            if ($('input[name="set_of_keys"]:checked').length == 0) {
                $(".set_of_keys").html("Please Select  set of keys");
                return false;
            }
            
            // if ($('input[name="accident_damaged"]:checked').length == 0) {
            //     $(".accident_damaged").html("Please Select  Accident Damaged");
            //     return false;
            // }

            // if ($('input[name="accident_damaged"]:checked').val() == "1" && $("#textarea").val() ==
            //     "") {
            //     $(".home_textarea").html("Please Enter Comment");
            //     return false;
            // }
            

            $(".how_it_works_header").hide();
            $("#step_1").hide();
            $("#step_2").hide();
            $("#step_3").show();

        });

        $("#third-page").on('click', function () {
            //3rd page validations
            $(".gearbox_condition").html("");
            $(".gearbox_comments").html("");
            $(".warning_light").html("");
            $(".warning_comments").html("");
            $(".vehicle_bodywork").html("");
            $(".vehicle_condtion").html("");
            $(".vehicle_interior").html("");
            $(".alloys_condtion").html("");
            $(".vehicle_sell_planning").html("");
            // $("span.text-danger.scratches").html("");
            // $(".scratches_textarea").html("");
            // $(".comments").html("");
            if ($('input[name="gearbox_condition"]:checked').length == 0) {
                $(".gearbox_condition").html("Please Select Conditon");
                return false;
            }
            if ($('input[name="gearbox_condition"]:checked').val() == "1" && $(
                    'textarea[name="gearbox_comments"]').val() == "") {
                $(".textarea").html("Enter Comment");
                return false;
            }
            if ($('input[name="warning_light"]:checked').length == 0) {
                $(".warning_light").html("Please Select Warning Light");
                return false;
            }
            if ($('input[name="warning_light"]:checked').val() == "1" && $(
                    'textarea[name="warning_comments"]').val() == "") {
                $(".textarea").html("Enter Comment");
                return false;
            }

            // if ($('input[name="vehicle_bodywork"]:checked', true)) {
            //     $(".vehicle_bodywork").html("Please Select Vehicle Bodywork");
            //     return false;
            // }

            // if ($('input[name="vehicle_condtion"]:checked').length == 0) {
            //     $(".vehicle_condtion").html("Please Select Vehicle Condtion");
            //     return false;
            // }

            // if ($('input[name="vehicle_interior"]:checked').length == 0) {
            //     $(".vehicle_interior").html("Please Select Vehicle Interior");
            //     return false;
            // }

            // if ($('input[name="alloys_condtion"]:checked').length == 0) {
            //     $(".alloys_condtion").html("Please Select Alloys Condtion");
            //     return false;
            // }

            // if ($('input[name="vehicle_sell_planning"]:checked').length == 0) {
            //     $(".vehicle_sell_planning").html("Please Select Vehicle Sell Planning");
            //     return false;
            // }

            // if ($('input[name="finance"]:checked').length == 0) {
            //     $(".finance").html("Please Select Outstanding finance");
            //     return false;
            // }

            // if ($('input[name="scratches"]:checked').length == 0) {
            //     $("span.text-danger.scratches").html("Please Select One Radio Button");
            //     return false;
            // }
            // if ($('input[name="scratches"]:checked').val() == "1" && $(
            //         'textarea[name="scratches_comments"]').val() == "") {
            //     $(".scratches_textarea").html("Please Enter Comment");
            //     return false;
            // }
            // if ($('textarea[name="more_info"]').val() == "") {
            //     $(".comments").html("Please Enter Comment");
            //     return false;
            // }


            $("#sellcarform").submit();

        });

    });

</script>
@endsection
