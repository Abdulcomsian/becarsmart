@extends('frontend.layouts.master')
@section('title')
BeCarSmart | How It Work
@endsection
@section('css')
<style>
    #how-it-work-content .how-works {

    }
    #how-it-work-content .how-works span{
        color:#e73e2c;
        font-size: 20px;
        font-weight: 600;
    }
    #how-it-work-content .how-works .vehicle-sourcing{
        line-height: 20px;
    }
    #how-it-work-content .how-works .sale-complete-get-paid{
        line-height: 22px;
    }
    #how-it-work-content .how-works .sourcing-consultation {
        line-height: 20px;
    }
    #how-it-work-content .how-works .getting-your-car {
        line-height: 22px;
    }
    #how-it-work-content .how-works .how-works-header{
        color:#2c3b53;
        font-size: 18px;
        font-weight: 600;
    }
</style>
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


<section id="how-it-work-content" class="pb-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="row pt-5" style="align-items:center">
                    <div class="col-md-12">
                        <div class="how-works">
                            <h3><span>Selling Your Car:</span></h3>
                            <div class="row">
                                <div class="col-lg-9">
                                    <h4 class="how-works-header">Enter Your Reg</h4><br>
                                    <p>Enter your reg and follow the steps, answer the questions to the best of your knowledge about the vehicle.</p>
                                </div>
                                <div class="col-lg-3">
                                    <img style="width: 200px;" src="{{asset ('assets/img/MicrosoftTeams-image.png')}}" class="img-fluid">
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-lg-9">
                                    <h4 class="how-works-header">Get Your Valuation!</h4><br>
                                    <p>We will get in-touch via email or phone call as soon as we have completed analysing the information we have about your vehicle.  If we can't reach your contact number, we will email you a quote.</p>
                                    <p>Quotes are valid for a limited period of time. Prices are determined from the latest market data.</p>
                                </div>
                                <div class="col-lg-3">
                                    <img style="width: 200px;" src="{{asset ('assets/img/MicrosoftTeams-image (2).png')}}" class="img-fluid">
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-lg-9">
                                    <h4 class="how-works-header">Accept Your Quote and Arrange for Collection or Book an Appointment!</h4><br>
                                    <p>Once you're happy with the price for your vehicle you can contact us either by calling us or emailing us. You can click on 'accept this quote’ from the quote email we send you. This will notify us to contact you.</p>
                                    <p>When we contact you, we can do one of two things:</p>
                                    <ol>
                                        <li>Take the correct details and arrange for a time and a date for the vehicle to be collected.</li>
                                        <li>Arrange an appointment for you to bring us the vehicle.</li>
                                    </ol>
                                </div>
                                <div class="col-lg-3">
                                    <img style="width: 200px;" src="{{asset ('assets/img/DEAL.png')}}" class="img-fluid">
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-lg-9">
                                    <h4 class="how-works-header">Sale Complete - Get Paid!</h4><br>
                                    <p>On the day of the collection or on your appointment day, before the vehicle is sold-: The DVLA paperwork side will be taken care of and you will be paid.</p>
                                    <p>So, yes, it is an instant payment method, which will be made into your bank account.</p>
                                    <div class="sale-complete-get-paid">
                                        <p>-No transaction or admin fees.</p>
                                        <p>-No waiting around for the payment after the car has been taken.</p>
                                        <p>-No fees for an instant payment.</p>
                                        <p>-No collection fees in most UK locations.</p>
                                        <p>-No HAGGLING - As long as your description is accurate and honest.</p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <img style="width: 200px;" src="{{asset ('assets/img/MicrosoftTeams-image (4).png')}}" class="img-fluid">
                                </div>
                            </div>
                            
                            <br><br>
                            <h3><span>Vehicle Sourcing:</span></h3><br>
                            <div class="row">
                                <div class="col-lg-9">
                                    <h4 class="how-works-header">Choose a Car</h4><br>
                                    <div class="vehicle-sourcing">
                                        <p>The first step is to fill in some details on our vehicle sourcing form.</p>
                                        <p>Once you have answered the questions it will give us an idea of what you're looking for.</p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <img style="width: 200px;" src="{{asset ('assets/img/MicrosoftTeams-image (5).png')}}" class="img-fluid">
                                </div>
                            </div>

                            
                            
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-lg-9">
                                    <h4 class="how-works-header">Sourcing Consultation</h4>
                                    <br>
                                    <div class="sourcing-consultation">
                                        <p>This step is the most important stage of the process.</p>
                                        <p>One of our vehicle sourcing specialists will get in touch and discuss some further details.</p>
                                        <p>This is to make sure everything is well instructed so we can find you the right car.</p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <img style="width: 200px;" src="{{asset ('assets/img/MicrosoftTeams-image (1).png')}}" class="img-fluid">
                                </div>
                            </div>
                            
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-lg-9">
                                    <h4 class="how-works-header">Making a Deal & Getting Your Car!</h4>
                                    <br>
                                    <div class="getting-your-car">
                                        <p>This is the easiest step, once you are happy with a vehicle that our sourcing specialist has found for you. All we have to do is go over the T&C's and get that signed.</p>
                                        <p>We only take a 10% deposit to start the purchase process. This will be a fully refundable deposit if the vehicle is not as described.</p>
                                        <p>We can then arrange for you to either collect the vehicle or we can offer a delivery facility for you.  The remaining payment will need to be made on the day of the handover.</p>
                                        <p>A different process will be followed for financing and leasing car sourcing options.</p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <img style="width: 200px;" src="{{asset ('assets/img/MicrosoftTeams-image (3).png')}}" class="img-fluid">
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
