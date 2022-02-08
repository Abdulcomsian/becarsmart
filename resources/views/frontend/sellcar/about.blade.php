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
                @php $i=1;@endphp
                @foreach($aboutdata as $data)
                @if($i%2==1)
                <div class="row pt-5" style="align-items:center">
                    <div class="col-md-6 pb-3">
                        <div class="blurb-img">
                            <img src="{{asset($data->image ?? '')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 pb-3">
                        <div class="blurbdiv">
                            <p class="about-text">{{$data->image_text ?? ''}}</p>
                        </div>
                    </div>
                </div>
                @else
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
                </div>
                @endif
                @php $i++;@endphp
                @endforeach
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