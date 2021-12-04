
    @extends('frontend.layouts.master')
        @section('title')
            BeCarSmart | Sellcar New
        @endsection
    @section('content')

    <!-- Hero Section -->
    <section class="SellCar-section text-center" >
        <div class="container">
            <div id="step_1" style="display:block;">
                <div class="row d-flex";>
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
                                                        <div class="" style="float:right";>
                                                            <button type="button" id="first-button" class="btn text-light main-bg">Next</button>
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
                        <div class="sellcar-blurb " style="padding: 22% 5% 0% 17%;">
                            <img src="{{asset ('assets/img/right-col.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="step_2" style="display:none;" >
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
                                        
                                            <div class="home-card-body card-body">
                                                <form method="post">

                                                    <div class="row mb-4">
                                                        <div class="col-md-12 ">
                                                            <div class="row">
                                                                <div class="col-md-12" style="">
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
                                                    </div>

                                                    <div class="row mb-4">
                                                        
                                                        <div class="col-md-6 ">
                                                            <div class="row">
                                                                <div class="col-md-12 "style="" > 
                                                                    <label for="fname" class="form-label" style="font-size:13px; font-weight:600">Is the vehicle a non-runner?</label>
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
                                                        <div class="col-md-6 ">
                                                            <div class="row">
                                                                <div class="col-md-12 "style="" > 
                                                                    <label for="fname" class="form-label" style="font-size:13px; font-weight:600">How many sets of keys do you have for this vehicle?</label>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <div class="inputGroup">
                                                                        <input id="driving " name="intend" class="-yes" type="radio" value="Yes">
                                                                        <label for="driving ">1</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-7">
                                                                    <div class="inputGroup">
                                                                        <input id="tuition" name="intend" class="-no" type="radio" value="No" />
                                                                        <label for="tuition">2 or more</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row ">
                                                        <div class="col-md-6">
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
                                                        <div class="col-md-6 ">
                                                            <div class="row">
                                                                <div class="col-md-12 " style="padding-bottom: 2%;">
                                                                    <label for="fname" class="form-label" style="font-size:13px; font-weight:600">how your vehicle over been subject to an insurance write off or been accident damaged?</label>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="input-Group">
                                                                        <div class="input-Group">
                                                                            <!-- <input type="number" class="form-control" id="Written" placeholder="Never Written off" style="padding: 7px; border-radius: 0; border: 1px solid grey;"> -->
                                                                            <textarea id="textarea" type="text" placeholder="Enter your comment" style="display:block; width: 100%;height: 100px; padding-left:7px 17px"></textarea>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                    

                                                    <div class="d-gri pt-5" style="float:right">
                                                        <button type="button" id="second-button" class="btn text-light main-bg">Next</button>
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
            <div class="row" id="step_3" style="display:none;" >
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
                                            <div class="home-card-body card-body">
                                                <form>
                                                    <div class="step-3-contentt pb-5">
                                                        <div class="row">
                                                            <div class="col-md-12 ">
                                                                <h2>Almost There!</h2>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <div class="col-md-7 ">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label for="fname" class="form-label" style="font-size:13px; font-weight:600">Gearbox Condition</label>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="inputGroup">
                                                                        <input id="hradio" name="search-history" class="check-am" type="radio" value="2 or more" />
                                                                        <label for="hradio">NO FAULTS</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="inputGroup">
                                                                        <input id="iradio" name="search-history" class="check-am" type="radio" value="1">
                                                                        <label for="iradio">FAULTS BUT RUN</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="inputGroup">
                                                                        <input id="jradio" name="search-history" class="check-am" type="radio" value="2 or more" />
                                                                        <label for="jradio">DOESN'T RUNS</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label for="fname" class="form-label" style="font-size:13px; font-weight:600">Any Warning light lights or messages on the dash?</label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="inputGroup">
                                                                        <input id="xradio" name="Sell" class="check-am" type="radio" value="yes" />
                                                                        <label for="xradio">Yes</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="inputGroup">
                                                                        <input id="yradio" name="Sell" class="check-am" type="radio" value="no">
                                                                        <label for="yradio">No</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label for="fname" class="form-label" style="font-size:13px; font-weight:600">Any Scratches, marks or dents on the body?</label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="inputGroup">
                                                                        <input id="scratchesradio1" name="Scratches" class="check-am" type="radio" value="yes" />
                                                                        <label for="scratchesradio1">Yes</label>
                                                                    </div>
                                                                </div>
                                                                        
                                                                
                                                                <div class="col-md-6">
                                                                    <div class="inputGroup">
                                                                        <input id="scratchesradio2" name="Scratches" class="check-am" type="radio" value="no">
                                                                        <label for="scratchesradio2">No</label>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="mt-1">
                                                                            <textarea id="textarea" type="text" placeholder="Enter your comment" style="display:none; width: 48.2%;height: 70px;padding-left:7px 17px"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-gridd">
                                                        <button type="button" id="third-page" class="btn text-light main-bg">Submit</button>
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

           $("#scratchesradio1").change(function(){
            if ($(this).is(':checked')){
                $("#textarea").show();
            } else {
                $("#textarea").hide();
            }
           });

           $("#scratchesradio2").change(function(){
            $("#textarea").hide();
            // if ($(this).is(':checked')){
            //     $("#textarea").hide();
            // } else {
            //     $("#textarea").hide();
            // }
           });
            
        
           
        $( document ).ready(function() {
            $("#first-button").on('click', function() {
                $("#step_1").hide();
                $("#step_2").show();
                $("#step_3").hide();
            });

            $("#second-button").on('click', function() {
                $("#step_1").hide();
                $("#step_2").hide();
                $("#step_3").show();

            });

            $("#third-page").on('click', function() {
                $("#step_1").show();
                $("#step_2").hide();
                $("#step_3").hide();

            });

        //    $("#third-button").on('click', function(){
        //         location.reload();
        //     })
            
        });
        </script>
    @endsection