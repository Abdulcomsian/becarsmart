
    @extends('frontend.layouts.master')
        @section('title')
            BeCarSmart | SellCar
        @endsection
    @section('content')

             <!-- Hero Section -->
    <section class="SellCar-section text-center">
        <div class="container">
            <div class="row ">
                <div class="col-lg-5 col-md-12">
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
                                            <div class="card-title">
                                                <h2 class="p-3 pb-0">Enter Details</h2>
                                                <p class="p-3 pt-0">Enter your details to get an instant valuation.</p>
                                            </div>
                                            <div class="home-card-body card-body">
                                                <div id="step-1" style="display:block;">
                                                    <form>
                                                        <div class="row mb-4">
                                                            <div class="col-md-12 ">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label for="fname" class="form-label" style="font-size:13px; font-weight:600">Service History</label>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="inputGroup">
                                                                            <input id="service-history-full" name="service-history" class="check-am" type="radio" value="1">
                                                                            <label for="service-history-full">Full</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="inputGroup">
                                                                            <input id="service-history-some" name="service-history" class="check-am" type="radio" value="1">
                                                                            <label for="service-history-some">Some</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="inputGroup">
                                                                            <input id="service-history-none" name="service-history" class="check-am" type="radio" value="1">
                                                                            <label for="service-history-none">None</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="inputGroup">
                                                                            <input id="service-history-some" name="service-history" class="check-am" type="radio" value="2 or more" />
                                                                            <label for="sets-or-more">First not due</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            <div class="col-md-12 ">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label for="fname" class="form-label" style="font-size:13px; font-weight:600">How many sets of keys do you have for this vehicle ?</label>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="inputGroup">
                                                                            <input id="sets-or-1" name="sets-of-vehicle" class="check-am" type="radio" value="1">
                                                                            <label for="sets-or-1">1</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="inputGroup">
                                                                            <input id="sets-or-more" name="sets-of-vehicle" class="check-am" type="radio" value="2 or more" />
                                                                            <label for="sets-or-more">2 or more</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            <div class="col-md-12 ">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label for="fname" class="form-label" style="font-size:13px; font-weight:600"> Is the vehicle a non-runner?</label>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="inputGroup">
                                                                            <input id="non-runner-yes" name="non-runner" class="check-am" type="radio" value="1">
                                                                            <label for="non-runner-yes">Yes</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="inputGroup">
                                                                            <input id="non-runner-no" name="non-runner" class="check-am" type="radio" value="2 or more" />
                                                                            <label for="non-runner-no">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            <div class="col-md-12 ">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label for="number" class="form-label" style="font-size:13px; font-weight:600">How many months until the vehicle is due its MOT?</label>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-4">
                                                                    <div class="col-md-12">
                                                                        <div class="input-Group">
                                                                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="6+ months">
                                                                        </div>
                                                                    </div>
                                                                </div>    
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            <div class="col-md-12 ">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label for="number" class="form-label" style="font-size:13px; font-weight:600">Has your Vehicle ever been subject to an insurance write off or been accident damaged?</label>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-4">
                                                                    <div class="col-md-12">
                                                                        <div class="input-Group">
                                                                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Never Written off">
                                                                        </div>
                                                                    </div>
                                                                </div>    
                                                            </div>
                                                        </div>
                                                        

                                    

                                                        <div class="row mb-4 mt-5">
                                                            <div class="col-md-12 ">
                                                                <div class="d-gridd">
                                                                    <button type="button" id="first-page" class="btn text-light main-bg">Next page</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>



                                                    <form>
                                                        <div class="row mb-4">
                                                            <div class="col-md-12">
                                                                <div class="input-Group">
                                                                    <input type="fullname" class="form-control" id="6+months" placeholder="Full name">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            <div class="col-md-12">
                                                                <div class="input-Group">
                                                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-4">
                                                            <div class="col-md-12">
                                                                <div class="input-Group">
                                                                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Phone number">
                                                                </div>
                                                            </div>
                                                        </div>            
                                                                                                
                                                        <div class="row mb-5">
                                                            <div class="col-md-12">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" chceked>
                                                                    <label class="form-check-label" for="checked">
                                                                    I have read the Privacy Policy and accept the Terms.
                                                                </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    
                                                        <div class="d-grid">
                                                        <button type="submit" class="btn text-light main-bg">Evaluate My Car</button>
                                                        </div>
                                                    </form>
                                                
                                                    <form>
                                                        <div class="row mb-4">
                                                            <div class="col-md-12">
                                                                <label for="fname" class="form-label" style="font-size:13px; font-weight:600">How many sets of keys do you have for this vehicle ?</label>
                                                            </div>
                                                            <div class="col-md-5 ">
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

                                                        <div class="row mb-4">
                                                            <div class="col-md-12">
                                                            <label for="fname" class="form-label" style="font-size:13px; font-weight:600">Is the vehicle a non-runner?</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="inputGroup">
                                                                    <input id="radio2" name="no" class="check-yes" type="radio" value="Yes">
                                                                    <label for="radio2">Yes</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="inputGroup">
                                                                    <input id="radio8" name="no" class="check-no" type="radio" value="No" />
                                                                    <label for="radio8">No</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-4">
                                                            <div class="col-md-12">
                                                            <label for="fname" class="form-label" style="font-size:13px; font-weight:600">How many months untill the vehicle is due its MOT ?</label>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="input-Group">
                                                                    <input type="number" class="form-control" id="6+months" placeholder="6+ Months">

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-4">
                                                            <div class="col-md-12">
                                                            <label for="fname" class="form-label" style="font-size:13px; font-weight:600">How your vehicle ever been subject to an insurance write off or been accident demaged?</label>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="input-Group">
                                                                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Never Written off">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-4">
                                                            <div class="col-md-12">
                                                            <label for="fname" class="form-label" style="font-size:13px; font-weight:600">Has your vehicle over been user for private hire?</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="inputGroup">
                                                                    <input id="radio3" name="private-hire" class="check-yes" type="radio" value="Yes">
                                                                    <label for="radio3">Yes</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="inputGroup">
                                                                    <input id="radio9" name="private-hire" class="check-no" type="radio" value="No" />
                                                                    <label for="radio9">No</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="row mb-4">
                                                            <div class="col-md-12">
                                                            <label for="fname" class="form-label" style="font-size:13px; font-weight:600">Has your vehicle over been used for driving tuition? </label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="inputGroup">
                                                                    <input id="radio4" name="tuition" class="check-yes" type="radio" value="Yes">
                                                                    <label for="radio4">Yes</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="inputGroup">
                                                                    <input id="radio10" name="tuition" class="check-no" type="radio" value="No" />
                                                                    <label for="radio10">No</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-4">
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

                                                        <div class="row mb-4">
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

                                                    
                                                        <div class="d-grid">
                                                        <button type="submit" class="btn text-light main-bg">Evaluate My Car</button>
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
                <div class="col-lg-7 col-md-12">
                    <div class="sellcar-blurb " >
                        <img src="{{asset ('assets/img/right-col.png')}}" alt="">
                    </div>
                </div>
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

    @endsection