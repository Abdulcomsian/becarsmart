@extends('frontend.layouts.master')
@section('title')
BeCarSmart | About Us
@endsection
@section('content')

<section id="terms-section">
    <div class="row">
        <div class="col-md-12">
            <div class="contact-content text-center mt-5 mb-5">
                <h2>About us</h2>
            </div>
        </div>
    </div>
</section>


<section id="how-it-work-content mb-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <!-- @php $i=1;@endphp -->
                
                <!-- @foreach($aboutdata as $data)
                <p class="about-text">{{$data->image_text ?? ''}}</p>
                @endforeach -->

                <!-- @if($i%2==1) -->
                <div class="row pt-0" style="align-items:center">
                    <!-- <div class="col-md-6 pb-3">
                        <div class="blurb-img">
                            <img src="{{asset($data->image ?? '')}}" class="img-fluid" alt="">
                        </div>
                    </div> -->
                    <div class="col-md-12 pb-3 Justify-content">
                        <div class="blurbdiv">
                            <p class="about-top-text">We are BeCarSmart and we are here to provide an honest and easy way to sell your vehicle. We also offer a vehicle sourcing service, which means finding your next car can be very simple and headache free. </p>
                            <br><br>
                            <p class="about-text">“We make it easy.” </p>
                            <p>Our tag-line and the shortest possible description of our mission to be the best vehicle purchasing service. We have seen the problems of the industry and we are here to be the difference you want to experience.</p>
                            <br>
                            <p class="about-text">We make it easy for you to trust. </p>
                            <p>At BeCarSmart, we place trust and honesty at the centre of everything we do. As long as your description of the vehicle is accurate, there will be zero haggling. We will provide you with an honest quote for your vehicle based on the information you have given us, which will be reviewed by one of our vehicle valuation specialists. Our specialists both in our ‘purchasing service’ and our ‘sourcing service’ have years of experience.</p>
                            <br>
                            <p>We have no secrets, we're transparent about what we do. The vehicles we buy will be sold into the motor trade. </p>
                            <br>
                            <p class="about-text">We make it easy for you to sell your Premium and Prestige cars. </p>
                            <p>Whether it be your BMW, Mercedes, Audi, Bentley, Porsche, or any other prestige motor you have we are here to offer you an easier experience selling your car. We mainly buy premium and prestige vehicles that are no older than 7 years with no faults or write-offs.</p>
                            <br><br><br>
                            <p class="about-text">We make it easy for you to know more about your vehicle. </p>
                            <p>BeCarSmart is built with a strong passion for vehicles, importance in honesty, and over 10 years of working with leading brands in the industry. Aside from providing you with the honest prices, we are here to be your helpful guide in gaining an accurate knowledge of cars for when you are looking to find your next car. </p>
                            <br>
                            <p>At BeCarSmart, purchasing your vehicle is not a transaction but an even-handed collaboration between you and our team of professionals. That is the same in sourcing a vehicle. We take pride in helping our clients and seeing them happy!</p>
                            <br><br>
                            <p class="about-text">We make it easy. All of it.</p>
                            <p>From the initial filling out of the form, to the collection of the vehicle, and up to the payment, all stages of the entire process are built around the idea of trust and convenience.</p>
                            <p class="mb-1">-	Fast and convenient online form.</p>
                            <p class="mb-1">-	Instant payment upon collection of the vehicle.</p>
                            <p class="mb-1">-	Zero admin fees.</p>
                            <p class="mb-1">-	No hidden charges.</p>
                            <p class="mb-1">-	Free and hassle-free collection of the vehicle.</p>
                            <br>
                            <p>We value your time and priorities, so we have systematically streamlined the entire process to be as productive and hassle-free as possible.</p>
                            
                            <p>BeCarSmart is here to become what the market needs. A fair and honest vehicle purchasing service provider who values the customers. Fill out the form and discover the appreciable difference when you place your vehicle in the hands of people who value you.</p>
                        </div>
                    </div>
                </div>
                
                <!-- @else
                <div class="row pt-5" style="align-items:center">
                    <div class="col-md-6 pb-3">
                        <div class="blurbdiv">
                            <p class="about-text">{{$data->image_text ?? ''}}</p>
                        </div>
                    </div>
                    <div class="col-md-6 pb-3">
                        <div class="blurb-img">
                            <img src="{{asset($data->image ?? '')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div> -->
                <!-- @endif -->
                <!-- @php $i++;@endphp -->
               
                <!-- <div class="row pt-5" style="align-items:center">
                    <div class="col-md-6 pb-3">
                        <div class="blurbdiv">
                            <p class="about-text">With our network of more than 4,000 professional car dealers directly bidding on vehicles, we enable customers to sell their car for up to £1,000 more in as little as 24 hours - while supporting our car dealer partners to acquire the best used car stock, 100% online. <br><br>This is the way to sell your car. This is the BeCarSmart.</p>
                        </div>
                    </div>
                    <div class="col-md-6 pb-3">
                        <div class="blurb-img">
                            <img src="{{asset ('assets/img/pexels-erik-mclean-5864152.jpg')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="row pt-5" style="align-items:center">
                    <div class="col-md-6 pb-3">
                        <div class="blurb-img">
                            <img src="{{asset ('assets/img/pexels-pavel-danilyuk-7404308.jpg')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 pb-3">
                        <div class="blurbdiv">
                            <p class="about-text">In our first 4 years we’ve helped over 2.5 million customers value and sell their car, and have grown at over 300% year on year. And the journey’s only just begun.</p>
                        </div>
                    </div>
                </div> -->

            </div>
        </div>
    </div>
</section>


<!-- Suppport Section -->
<section class="want_to_sell p-3 mt-5 text-white">
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
    </div>
</section>

@endsection