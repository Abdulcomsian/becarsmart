
@extends('frontend.layouts.master')
    @section('title')
        BeCarSmart | How It Work
    @endsection
@section('content')

    <section id="terms-section">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-content text-center mt-5 mb-5">
                    <h2>How it works</h2>
                </div>
            </div>
        </div>
    </section>
   

    <section id="how-it-work-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="row pt-5" style="align-items:center">
                        <div class="col-md-6">
                            <div class="blurbdiv">
                                <h2>Value your Car</h2>
                                <p>Get a free no obligation valuation above.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blurb-img">
                                <img src="{{asset ('../assets/img/svgexport-7.svg')}}" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row pt-5" style="align-items:center">
                        <div class="col-md-6">
                            <div class="blurb-img">
                                <img src="{{asset ('../assets/img/svgexport-8.svg')}}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blurbdiv">
                                <h2>Book Appointment</h2>
                                <p>Book an appointment for a free car inspection near you.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-5 pb-5" style="align-items:center">
                        <div class="col-md-6">
                            <div class="blurbdiv">
                                <h2>Sell your Car</h2>
                                <p>Complete the sale and get paid if you are happy with the offer.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blurb-img">
                                <img src="{{asset ('../assets/img/svgexport-9.svg')}}" class="img-fluid" alt="">
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