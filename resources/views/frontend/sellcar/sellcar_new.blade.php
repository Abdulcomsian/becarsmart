
    @extends('frontend.layouts.master')
        @section('title')
            BeCarSmart | Sellcar New
        @endsection
    @section('content')

    <!-- Hero Section -->
    <section class="SellCar-section text-center">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12 col-md-12">
                    <div class="sellcar-blurb-content py-5">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 style="float: left;" class="heading-h1">ZS33 FS</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h3 style="text-align: left;">“Hyundai I30 Active Blue Drive CRDI”</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12" style="justify-content: left;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="sellcar-ul-li  pt-1 pb-2">
                                            <ul class="d-flex">
                                                <li><b>model: </b>&nbsp 2013</li>&nbsp &nbsp
                                                <li><b>Color: </b>&nbsp white</li>&nbsp &nbsp
                                                <li><b>Engine: </b>&nbsp Diesel</li>&nbsp &nbsp
                                                <li><b>Mileage: </b>&nbsp 83,000km</li>
                                            </ul>
                                            
                                        </div>
                                    </div>
                                </div>  
                                <div class="row d-flex align-items-left">
                                    <div class="col-lg-10 col-md-12 col-sm-12 " style="width: 100%;">
                                        <div class="card shadow card-shadow ">
                                            <!-- <div class="card-title">
                                                <h2 class="p-3 pb-0">Enter Details</h2>
                                                <p class="p-3 pt-0">Enter your details to get an instant valuation.</p>
                                            </div> -->
                                            <div class="home-card-body card-body" >
                                                <div id="step-1" style="display:block;">
                                                    <form>
                                                        <div class="row mb-4">
                                                            <div class="col-md-4 ">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label for="fname" class="form-label" style="font-size:13px; font-weight:600">How many sets of keys do you have for this vehicle ?</label>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="inputGroup">
                                                                            <input id="radio1" name="sets" class="check-am" type="radio" value="1">
                                                                            <label for="radio1">1</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                        <div class="inputGroup">
                                                                            <input id="radio7" name="sets" class="check-am" type="radio" value="2 or more" />
                                                                            <label for="radio7">2 or more</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4 ">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label for="fname" class="form-label" style="font-size:13px; font-weight:600">Is the vehicle a non-runner?</label>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="inputGroup">
                                                                            <input id="radio2" name="no" class="check-yes" type="radio" value="Yes">
                                                                            <label for="radio2">Yes</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                        <div class="inputGroup">
                                                                            <input id="radio8" name="no" class="check-no" type="radio" value="No" />
                                                                            <label for="radio8">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4 ">
                                                                <div class="row">
                                                                    <div class="col-md-12 " style="padding-bottom: 2%;">
                                                                        <label for="fname" class="form-label" style="font-size:13px; font-weight:600">How many months untill the vehicle is due its MOT ?</label>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="input-Group">
                                                                            <div class="input-Group">
                                                                                <input type="number" class="form-control" id="6+months" placeholder="6+ Months" style="padding: 7px; border-radius: 0; border: 1px solid grey;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-4">
                                                            <div class="col-md-4 ">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label for="fname" class="form-label" style="font-size:13px; font-weight:600">How your vehicle ever been subject to an insurance write off or been accident demaged?</label>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="input-Group">
                                                                            <!-- <div class="input-Group"> -->
                                                                                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Never Written off" style="padding: 7px; border-radius: 0; border: 1px solid grey;">
                                                                            <!-- </div> -->
                                                                        </div>
                                                                    </div>
                                                                
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4 ">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label for="fname" class="form-label" style="font-size:13px; font-weight:600">Has your vehicle over been user for private hire?</label>
                                                                    </div>
                                                                    <div class="col-md-5"style="padding-top: 2%;">
                                                                        <div class="inputGroup">
                                                                            <input id="radio3" name="private-hire" class="check-yes" type="radio" value="Yes">
                                                                            <label for="radio3">Yes</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-7" style="padding-top: 2%;">
                                                                        <div class="inputGroup">
                                                                            <input id="radio9" name="private-hire" class="check-no" type="radio" value="No" />
                                                                            <label for="radio9">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4 ">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label for="fname" class="form-label" style="font-size:13px; font-weight:600">Has your vehicle over been used for driving tuition? </label>
                                                                    </div>
                                                                    <div class="col-md-5" style="padding-top: 2%;">
                                                                        <div class="inputGroup">
                                                                            <input id="radio4" name="tuition" class="check-yes" type="radio" value="Yes">
                                                                            <label for="radio4">Yes</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-7" style="padding-top: 2%;">
                                                                        <div class="inputGroup">
                                                                            <input id="radio10" name="tuition" class="check-no" type="radio" value="No" />
                                                                            <label for="radio10">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-4">
                                                            <div class="col-md-4 ">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label for="fname" class="form-label" style="font-size:13px; font-weight:600">Has your vehicle ever been used as a police/emergency vehicle?</label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="inputGroup">
                                                                            <input id="radio5" name="emergency" class="check-yes" type="radio" value="Yes">
                                                                            <label for="radio5">Yes</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="inputGroup">
                                                                            <input id="radio11" name="emergency" class="check-no" type="radio" value="No" />
                                                                            <label for="radio11">No</label>
                                                                        </div>
                                                                    </div>
                                                                
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-4 ">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label for="fname" class="form-label" style="font-size:13px; font-weight:600">has your vehicle been modified with motability ramps, a winch or now has missing seats?</label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="inputGroup">
                                                                            <input id="radio6" name="seats" class="check-yes" type="radio" value="Yes">
                                                                            <label for="radio6">Yes</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="inputGroup">
                                                                            <input id="radio12" name="seats" class="check-no" type="radio" value="No" />
                                                                            <label for="radio12">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- <div class="col-md-4 ">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label for="fname" class="form-label" style="font-size:13px; font-weight:600 ;padding-top: 10%;"></label>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="d-grid">
                                                                            <button type="submit" class="btn text-light main-bg" style="padding: 7px; border-radius:0px; ">Evaluate My Car</button>
                                                                        </div> 
                                                                    </div>
                                                                </div>
                                                            </div> -->

                                                        </div>

                                                        <div class="row mb-4 mt-5">
                                                            <div class="col-md-12 ">
                                                                <div class="d-gridd">
                                                                    <button type="button" id="first-page" class="btn text-light main-bg">Next page</button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- <div class="row mb-4">
                                                            <div class="col-md-12 ">
                                                                <div class="row">
                                                                    <div class="col-md-12" >
                                                                        <div class="bttn">
                                                                            <button id="first-page" type="button" class="btn btn-success btn-md" style="float-right">Next Page</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> -->

                                                    </form>
                                                </div>

                                                <div id="step-2" style="display:none;">
                                                    <form method="post">

                                                        <div class="row mb-4">
                                                            <div class="col-md-8 ">
                                                                <div class="row">
                                                                    <div class="col-md-12" style="padding-bottom: 2%;">
                                                                        <label for="fname" class="form-label" style="font-size:13px; font-weight:600">Service History</label>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="inputGroup">
                                                                            <input id="full" name="service-history" class="check-am" type="radio" value="1">
                                                                            <label for="full">Full</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="inputGroup">
                                                                            <input id="some" name="service-history" class="check-am" type="radio" value="2 or more" />
                                                                            <label for="some">Some</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="inputGroup">
                                                                            <input id="none" name="service-history" class="check-am" type="radio" value="1">
                                                                            <label for="none">None</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="inputGroup">
                                                                            <input id="first" name="service-history" class="check-am" type="radio" value="2 or more" />
                                                                            <label for="first">First not due</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                             <div class="col-md-4 ">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label for="fname" class="form-label" style="font-size:13px; font-weight:600">Do you intend to sell your vehicle with a personalised registration</label>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="inputGroup">
                                                                            <input id="intend" name="personalised-registration" class="check-yes" type="radio" value="Yes">
                                                                            <label for="intend">Yes</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                        <div class="inputGroup">
                                                                            <input id="intend1" name="personalised-registration" class="check-no" type="radio" value="No" />
                                                                            <label for="intend1">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-4">
                                                            <div class="col-md-8 ">
                                                                <div class="row">
                                                                    <div class="col-md-12" style="padding-bottom: 0;">
                                                                        <label for="fname" class="form-label" style="font-size:13px; font-weight:600">Is your Car an Import?</label>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="inputGroup">
                                                                            <input id="No" name="Import" class="check-am" type="radio" value="1">
                                                                            <label for="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="inputGroup">
                                                                            <input id="European" name="Import" class="check-am" type="radio" value="2 or more" />
                                                                            <label for="European">European/parallel</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="inputGroup">
                                                                            <input id="Japanese" name="Import" class="check-am" type="radio" value="1">
                                                                            <label for="Japanese">Grey (e.g. Japanese)</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4 ">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label for="fname" class="form-label" style="font-size:13px; font-weight:600">How many sets of keys do you have for this vehicle?</label>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="inputGroup">
                                                                            <input id="1more" name="this-vehicle" class="check-yes" type="radio" value="Yes">
                                                                            <label for="1more">1</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                        <div class="inputGroup">
                                                                            <input id="2more" name="this-vehicle" class="check-no" type="radio" value="No" />
                                                                            <label for="2more">2 or more</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-4">
                                                            <div class="col-md-4 ">
                                                                <div class="row">
                                                                    <div class="col-md-12 " style="padding-bottom: 6%;">
                                                                        <label for="fname" class="form-label" style="font-size:13px; font-weight:600">How many months untill the vehicle is due its MOT ?</label>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="input-Group">
                                                                            <div class="input-Group">
                                                                                <input type="number" class="form-control" id="6+months" placeholder="6+ Months" style="padding: 7px; border-radius: 0; border: 1px solid grey;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 ">
                                                                <div class="row">
                                                                    <div class="col-md-12 " style="padding-bottom: 2%;">
                                                                        <label for="fname" class="form-label" style="font-size:13px; font-weight:600">how your vehicle over been subject to an insurance write off or been accident damaged?</label>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="input-Group">
                                                                            <div class="input-Group">
                                                                                <input type="number" class="form-control" id="Written" placeholder="Never Written off" style="padding: 7px; border-radius: 0; border: 1px solid grey;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 ">
                                                                <div class="row">
                                                                    <div class="col-md-12 "style="padding-bottom: 3.5%;" > 
                                                                        <label for="fname" class="form-label" style="font-size:13px; font-weight:600">How your vehicle ever been used for private hire?</label>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="inputGroup">
                                                                            <input id="yes" name="private-hire" class="-yes" type="radio" value="Yes">
                                                                            <label for="yes">Yes</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                        <div class="inputGroup">
                                                                            <input id="no" name="private-hire" class="-no" type="radio" value="No" />
                                                                            <label for="no">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-4">
                                                            <div class="col-md-6 ">
                                                                <div class="row">
                                                                    <div class="col-md-12 "style="" > 
                                                                        <label for="fname" class="form-label" style="font-size:13px; font-weight:600">Has your vehicle ever been used for driving tuition?</label>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="inputGroup">
                                                                            <input id="driving " name="intend" class="-yes" type="radio" value="Yes">
                                                                            <label for="driving ">Yes</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                        <div class="inputGroup">
                                                                            <input id="tuition" name="intend" class="-no" type="radio" value="No" />
                                                                            <label for="tuition">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 ">
                                                                <div class="row">
                                                                    <div class="col-md-12 "style="" > 
                                                                        <label for="fname" class="form-label" style="font-size:13px; font-weight:600">Has your vehicle ever been used as a police/emergency vehicle?</label>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="inputGroup">
                                                                            <input id="driving" name="police" class="-yes" type="radio" value="Yes">
                                                                            <label for="driving">Yes</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                        <div class="inputGroup">
                                                                            <input id="police" name="police" class="-no" type="radio" value="No" />
                                                                            <label for="police">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-4 mt-5">
                                                            <div class="col-md-12 ">
                                                                <div class="d-gridd">
                                                                    <button type="button" id="second-page" class="btn text-light main-bg">Next page</button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- <div class="row mb-4">
                                                            <div class="col-md-12 ">
                                                                <div class="row">
                                                                    <div class="col-md-12" >
                                                                        <div class="bttn">
                                                                            <button id="second-page" type="button" class="btn btn-success btn-md" style="float-right">Next Page</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                    </form>
                                                </div>

                                                <div id="step-3"style="display:none;">

                                                    <div class="step-3-content pb-5">
                                                        <!-- <div class="row">
                                                            <div class="col-md-8 offset-2">
                                                                <h2>Update assumptions & add damage</h2>
                                                                <p>How you can let us know about any vehicle damage and <br> update your assumptions</p>
                                                                <div class="multi-btn">
                                                                    <button class="btn btn-lg btn-primary" style="padding: 20px 40px; border-radius: 3px;">Assumptions</button>
                                                                    <button class="btn btn-lg btn-light" style="padding: 20px 40px; border-radius: 3px;">Vehicle Damage</button>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                    </div>

                                                    <form>
                                                        <div class="row mb-4">
                                                            <div class="col-md-2 ">
                                                                <div class="row">
                                                                    <div class="col-md-12 " style="padding-bottom: 5%;">
                                                                        <label for="fname" class="form-label" style="font-size:13px; font-weight:600">Mileage</label>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="input-Group">
                                                                            <div class="input-Group">
                                                                                <input type="number" class="form-control" id="6+months" value="82000" style="padding: 6px; border-radius: 0; border: 1px solid grey;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                
                                                                </div>
                                                            </div>
                                                            <div class="col-md-10 ">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label for="fname" class="form-label" style="font-size:13px; font-weight:600">Previous Onwers</label>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="inputGroup">
                                                                            <input id="aradio" name="previous-onwers" class="check-am" type="radio" value="2 or more" />
                                                                            <label for="aradio">0</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="inputGroup">
                                                                            <input id="bradio" name="previous-onwers" class="check-am" type="radio" value="1">
                                                                            <label for="bradio">1</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="inputGroup">
                                                                            <input id="cradio" name="previous-onwers" class="check-am" type="radio" value="2 or more" />
                                                                            <label for="cradio">2</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="inputGroup">
                                                                            <input id="dradio" name="previous-onwers" class="check-am" type="radio" value="1">
                                                                            <label for="dradio">3</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="inputGroup">
                                                                            <input id="fradio" name="previous-onwers" class="check-am" type="radio" value="2 or more" />
                                                                            <label for="fradio">4</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="inputGroup">
                                                                            <input id="gradio" name="previous-onwers" class="check-am" type="radio" value="2 or more" />
                                                                            <label for="gradio">5+</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-4">

                                                             <div class="col-md-2" style="padding-top:2.4%;">
                                                                <div class="inputGroup">
                                                                    <input id="radio" name="previous-onwers" class="check-am" type="radio" value="1">
                                                                    <label for="radio">?</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-10 ">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label for="fname" class="form-label" style="font-size:13px; font-weight:600">Search History</label>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="inputGroup">
                                                                            <input id="hradio" name="search-history" class="check-am" type="radio" value="2 or more" />
                                                                            <label for="hradio">Full</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="inputGroup">
                                                                            <input id="iradio" name="search-history" class="check-am" type="radio" value="1">
                                                                            <label for="iradio">Some</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="inputGroup">
                                                                            <input id="jradio" name="search-history" class="check-am" type="radio" value="2 or more" />
                                                                            <label for="jradio">None</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="inputGroup">
                                                                            <input id="kradio" name="search-history" class="check-am" type="radio" value="1">
                                                                            <label for="kradio">First not due</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-4">
                                                            <div class="col-md-5 ">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label for="fname" class="form-label" style="font-size:13px; font-weight:600">Do you intent to sell your vehicle with a peronalised registration?</label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="inputGroup">
                                                                            <input id="xradio" name="Sell" class="check-am" type="radio" value="2 or more" />
                                                                            <label for="xradio">Yes</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="inputGroup">
                                                                            <input id="yradio" name="Sell" class="check-am" type="radio" value="1">
                                                                            <label for="yradio">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-7 ">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label for="fname" class="form-label" style="font-size:13px; font-weight:600">In your car an import?</label>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="inputGroup">
                                                                            <input id="pradio"name="import-car" class="check-am" type="radio"  />
                                                                            <label for="pradio">No</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="inputGroup">
                                                                            <input id="yaradio" name="import-car" class="check-am" type="radio">
                                                                            <label for="yaradio">European/parallel</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="inputGroup">
                                                                            <input id="yzradio" name="import-car" class="check-am" type="radio" >
                                                                            <label for="yzradio">Grey (e.g  Japanese)</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-4">
                                                            <div class="col-md-4 ">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label for="fname" class="form-label" style="font-size:13px; font-weight:600">How many sets of keys do you have for this vehicle?</label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="inputGroup">
                                                                            <input id="mmradio"name="non-keys" class="check-am" type="radio"  />
                                                                            <label for="mmradio">1</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="inputGroup">
                                                                            <input id="yyradio" name="non-keys" class="check-am" type="radio">
                                                                            <label for="yyradio">2 or more</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4 ">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label for="fname" class="form-label" style="font-size:13px; font-weight:600">Is the vehicle a non-runner?</label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="inputGroup">
                                                                            <input id="pmradio"name="non-runner" class="check-am" type="radio"  />
                                                                            <label for="pmradio">Yes</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="inputGroup">
                                                                            <input id="yraradio" name="non-runner" class="check-am" type="radio">
                                                                            <label for="yraradio">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4 ">
                                                                <div class="row">
                                                                    <div class="col-md-12 " style="padding-bottom: 2%;">
                                                                        <label for="fname" class="form-label" style="font-size:13px; font-weight:600">How many months untill the vehicle is due its MOT?</label>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="input-Group">
                                                                            <div class="input-Group">
                                                                                <input type="number" class="form-control" id="6+months" placeholder="6+ Months" style="padding: 7px; border-radius: 0; border: 1px solid grey;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                
                                                                </div>
                                                            </div>
                                                            
                                                        </div>

                                                        <div class="row mb-4 mt-5">
                                                            <div class="col-md-12 ">
                                                                <div class="d-gridd">
                                                                    <button type="button" id="third-page" class="btn text-light main-bg">Next page</button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- <div class="row mb-4">
                                                            <div class="col-md-12 ">
                                                                <div class="row">
                                                                    <div class="col-md-12" >
                                                                        <div class="bttn">
                                                                            <button id="third-page" type="button" class="btn btn-success btn-md" style="float-right">Next Page</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> -->

                                                    </form>
                                                </div>

                                                <div id="step-4" style="display:none;">
                                                    <form>
                                                        <div class="row mb-4" style="align-items: center;">
                                                            <div class="col-md-6 ">
                                                                <div class="step-4-para">
                                                                    <p>Photos (each side of the vehicle and any damage)</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6  ">
                                                                <div class="select-file-btn">
                                                                    <button class="btn btn-primary btn-md text-light main-bg" value="button">
                                                                        <input type="file" value="Select files">
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4" style="align-items: center;">
                                                            <div class="col-md-4 ">
                                                                <div class="step-4-para">
                                                                    <p> Any other faults? (please list below)</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="inputGroup">
                                                                    <input id="No-other" name="any-other" class="check-yes" type="radio" value="Yes">
                                                                    <label for="No-other">NO </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="inputGroup">
                                                                    <input id="yes-other" name="any-other" class="check-yes" type="radio" value="Yes">
                                                                    <label for="yes-other">YES</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-4" style="align-items: center;">
                                                            <div class="col-md-6 ">
                                                                <div class="step-6-para">
                                                                    <p>Additional Notes (anything else ?)</p>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="input-Group">
                                                                    <div class="input-Group">
                                                                        <input type="number" class="form-control" id="6+months" placeholder="6+ Months" style="padding: 7px; border-radius: 0; border: 1px solid grey;">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="row mb-4 mt-5">
                                                            <div class="col-md-12 ">
                                                                <div class="d-gridd">
                                                                    <button type="button" id="fourth-page" class="btn text-light main-bg">Next page</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                                <div id="step-5" style="display:none;">
                                                    <form>
                                                        <div class="row mb-4" style="align-items: center;">
                                                            <div class="col-md-3 ">
                                                                <div class="step-4-para">
                                                                    <p>Condition</p>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="inputGroup">
                                                                    <input id="No-faults" name="FAULTS" class="check-yes" type="radio" value="Yes">
                                                                    <label for="No-faults">NO FAULTS</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="inputGroup">
                                                                    <input id="faults-runs" name="FAULTS" class="check-yes" type="radio" value="Yes">
                                                                    <label for="faults-runs">FAULTS BUT RUNS</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="inputGroup">
                                                                    <input id="does-run" name="FAULTS" class="check-yes" type="radio" value="Yes">
                                                                    <label for="does-run">DOESN'T RUN</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-4" style="align-items: center;">
                                                            <div class="col-md-3 ">
                                                                <div class="step-4-para">
                                                                    <p>Has the Vehicle ever been an insurance write off?</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="inputGroup">
                                                                    <input id="No-CATDC" name="insurance" class="check-yes" type="radio" value="Yes">
                                                                    <label for="No-CATDC">NO</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="inputGroup">
                                                                    <input id="faults-D" name="insurance" class="check-yes" type="radio" value="Yes">
                                                                    <label for="faults-D">CAT D</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="inputGroup">
                                                                    <input id="does-CAT" name="insurance" class="check-yes" type="radio" value="Yes">
                                                                    <label for="does-CAT">CAT C</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-4" style="align-items: center;">
                                                            <div class="col-md-4 ">
                                                                <div class="step-4-para">
                                                                    <p>Has the vehicle ever been an insurance write off?</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="inputGroup">
                                                                    <input id="No-no" name="vehicle-ever" class="check-yes" type="radio" value="Yes">
                                                                    <label for="No-no">NO </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="inputGroup">
                                                                    <input id="yes-run" name="vehicle-ever" class="check-yes" type="radio" value="Yes">
                                                                    <label for="yes-run">YES</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-4"  style="align-items: center;">
                                                            <div class="col-md-4 ">
                                                                <div class="step-4-para">
                                                                    <p>Any warning lights or messages on the dash?</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="inputGroup">
                                                                    <input id="No-messages" name="warning-lights" class="check-yes" type="radio" value="Yes">
                                                                    <label for="No-messages">NO </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="inputGroup">
                                                                    <input id="yes-lights" name="warning-lights" class="check-yes" type="radio" value="Yes">
                                                                    <label for="yes-lights">YES</label>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>

                                                        <div class="row mb-4"  style="align-items: center;">
                                                            <div class="col-md-6 ">
                                                                <div class="step-4-para">
                                                                    <p>Photos (each side of the vehicle and any damage)</p>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6 ">
                                                                <div class="select-file-btn">
                                                                    <button class="btn btn-primary btn-md text-light main-bg" value="button">
                                                                        <input type="file" value="Select files">
                                                                    </button>    
                                                                </div>
                                                            </div>
                                                        </div> 

                                                        <div class="row mb-4 mt-5">
                                                            <div class="col-md-12 ">
                                                                <div class="d-gridd">
                                                                    <button id="fifth-page" type="button" class="btn text-light main-bg">Next Page</button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        

                                                        <!-- <div class="row mb-4">
                                                            <div class="col-md-12 ">
                                                                <div class="row">
                                                                    <div class="col-md-12" >
                                                                        <div class="bttn">
                                                                            <button id="fifth-page" type="button" class="btn btn-success btn-md" style="float-right">Next Page</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> -->

                                                    </form>
                                                </div>

                                                <div id="step-6" style="display:none;">
                                                    <form>
                                                        <div class="row" style="align-items: center;">
                                                            <div class="col-md-3 ">
                                                                <div class="step-4-para">
                                                                    <p>Engine Condition:</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="inputGroup">
                                                                    <input id="engine-No-faults" name="Engine-condition" class="check-yes" type="radio" value="Yes">
                                                                    <label for="engine-No-faults">NO FAULTS</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="inputGroup">
                                                                    <input id="engine-faults-runs" name="Engine-condition" class="check-yes" type="radio" value="Yes">
                                                                    <label for="engine-faults-runs">FAULTS BUT RUNS</label>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-3">
                                                                <div class="inputGroup">
                                                                    <input id="engine-does-run" name="Engine-condition" class="check-yes" type="radio" value="Yes">
                                                                    <label for="engine-does-run">DOESN'T RUN</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row" style="align-items: center;">
                                                            <div class="col-md-4 ">
                                                                <div class="step-4-para">
                                                                    <p>State of Engine:</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 ">
                                                                <div class="inputGroup">
                                                                    <input id="No-DISMANTLED-CATDC" name="DISMANTLED" class="check-yes" type="radio" value="Yes">
                                                                    <label for="No-DISMANTLED-CATDC">NOT-DISMANTLED</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="inputGroup">
                                                                    <input id="DISMANTLED-faults-D" name="DISMANTLED" class="check-yes" type="radio" value="Yes">
                                                                    <label for="DISMANTLED-faults-D">DISMANTLED</label>
                                                                </div>
                                                            </div>      
                                                        </div>

                                                        <div class="row " style="align-items: center;">
                                                            <div class="col-md-3 ">
                                                                <div class="step-4-para">
                                                                    <p>Gearbox Condition</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="inputGroup">
                                                                    <input id="gearbox-No-faults" name="gearbox-Condition" class="check-yes" type="radio" value="Yes">
                                                                    <label for="gearbox-No-faults">NO FAULTS</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="inputGroup">
                                                                    <input id="gearbox-faults-runs" name="gearbox-Condition" class="check-yes" type="radio" value="Yes">
                                                                    <label for="gearbox-faults-runs">FAULTS BUT RUNS</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="inputGroup">
                                                                    <input id="gearbox-does-run" name="gearbox-Condition" class="check-yes" type="radio" value="Yes">
                                                                    <label for="gearbox-does-run">DOESN'T RUN</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row"  style="align-items: center;">
                                                            <div class="col-md-3">
                                                                <div class="step-4-para">
                                                                    <p>Has the vehicle ever been an insurance write off?</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="inputGroup">
                                                                    <input id="write-gearbox-No" name="write-Condition" class="check-yes" type="radio" value="Yes">
                                                                    <label for="write-gearbox-No">NO</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="inputGroup">
                                                                    <input id="write-faults-runs" name="write-Condition" class="check-yes" type="radio" value="Yes">
                                                                    <label for="write-faults-runs"> CAT D</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="inputGroup">
                                                                    <input id="write-gearbox-run" name="write-Condition" class="check-yes" type="radio" value="Yes">
                                                                    <label for="write-gearbox-run">CAT C</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row"  style="align-items: center;">
                                                            <div class="col-md-3 ">
                                                                <div class="step-4-para">
                                                                    <p>Any warning lights or message on the dash?</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="inputGroup">
                                                                    <input id="message-No-faults" name="message-dash" class="check-yes" type="radio" value="Yes">
                                                                    <label for="message-No-faults">NO FAULTS</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="inputGroup">
                                                                    <input id="message-faults-runs" name="message-dash" class="check-yes" type="radio" value="Yes">
                                                                    <label for="message-faults-runs">FAULTS BUT RUNS</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="inputGroup">
                                                                    <input id="message-does-run" name="message-dash" class="check-yes" type="radio" value="Yes">
                                                                    <label for="message-does-run">DOESN'T RUN</label>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>

                                                        <div class="row mb-4 mt-5">
                                                            <div class="col-md-12 ">
                                                                <div class="d-gridd">
                                                                    <a href="#myModal" type="submit" id="last-page" class=" trigger-btn btn text-light main-bg" data-toggle="modal">Submit</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
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
                    <div class="sellcar-blurb " >
                        <img src="{{asset ('assets/img/right-col.png')}}" alt="">
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <!-- How it Works -->
    <section class="how_it_Works text-center">
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
                    <div class="blurb-icons">
                        <img src="{{asset ('assets/img/valuate -your-car.png')}}" alt="Value my Car" class="float-center pb-3">
                        <h2>Sell Your Car</h2>
                        <p class="get-a-free">Get a free no obligation <br> valuation above.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 pt-5">
                    <div class="blurb-icons">
                        <img src="{{asset ('assets/img/book-appointment.png')}}" alt="Value my Car" class="float-center pb-3">
                        <h2>Book Appointment</h2>
                        <p>Book an appointment for <br>a free car inspection <br> near you.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 pt-5">
                    <div class="blurb-icons">
                        <img src="{{asset ('assets/img/sell-your-car.png')}}" alt="Value my Car" class="float-center pb-3">
                        <h2>Sell your Car</h2>
                        <p>Complete the sale and <br> get paid if you are happy with <br> the offer.</p>
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
                       <div class="col-lg-12">
                           <form action="" class="d-flex formSell">
                            <input type="text" name="reg_number" class="form-control" placeholder="Enter Registration Number"  style="padding: 15px;">
                            <input type="submit" class="btn btn-danger w-100" value="Enter" style="padding: 15px; max-width: 67%;">
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
        <script>
        $( document ).ready(function() {
             $("#first-page").on('click', function() {
                $("#step-1").hide();
                $("#step-2").show();
                $("#step-3").hide();
                $("#step-4").hide();
                $("#step-5").hide();
                $("#step-6").hide();
            });

            $("#second-page").on('click', function() {
                $("#step-1").hide();
                $("#step-2").hide();
                $("#step-3").show();
                $("#step-4").hide();
                $("#step-5").hide();
                $("#step-6").hide();
            });

            $("#third-page").on('click', function() {
                $("#step-1").hide();
                $("#step-2").hide();
                $("#step-3").hide();
                $("#step-4").show();
                $("#step-5").hide();
                $("#step-6").hide();
            });

            $("#fourth-page").on('click', function() {
                $("#step-1").hide();
                $("#step-2").hide();
                $("#step-3").hide();
                $("#step-4").hide();
                $("#step-5").show();
                $("#step-6").hide();
            });

            $("#fifth-page").on('click', function() {
                $("#step-1").hide();
                $("#step-2").hide();
                $("#step-3").hide();
                $("#step-4").hide();
                $("#step-5").hide();
                $("#step-6").show();
            });

            $("#last-page").on('click', function() {
                $("#step-1").hide();
                $("#step-2").hide();
                $("#step-3").hide();
                $("#step-4").hide();
                $("#step-5").hide();
                $("#step-6").hide();
                $('#myModal').modal('show'); 
            });
            
            $("#redirect").on('click', function(){
                location.reload();
            })
            
            
        });
        </script>
    @endsection