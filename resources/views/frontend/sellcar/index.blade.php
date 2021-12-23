@extends('frontend.layouts.master')
@section('title')
BeCarSmart | index
@endsection
@section('css')
<style>
    #progressbar #account:before {
        font-family: FontAwesome;
        content: "step";
    }
</style>
@endsection
@section('content')
<!-- Hero Section -->
<section id="Sell-Your-Car" class="hero-section text-center">
    <div class="container">
        <div class="row pb-5">
            <div class="col-md-8 offset-md-2">
                <div class="blurb">
                    <h1>{{$herosection->header}}</h1>
                    <h3><span>No.1</span> {{$herosection->sub_header}}</h3>
                    <p>{{$herosection->text}}</p>
                </div>

                <!-- Form -->
                <div class="search-form">
                    <form action="{{route('find.vehicle')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12 pb-3">
                                <div class="input-perent d-flex" style="position: relative;">
                                    <img src="{{asset ('assets/img/vrm-euro1.png')}}" alt="" style="position: absolute;left:0;height: 70px;width: 30px;">
                                    <input id="reg_number" type="text" name="reg_number" class="form-control" placeholder="AA19AAA" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <button type="submit" class="btn btn-danger w-100">Value My Car</button>
                                <!-- <a href="{{url ('/home')}}" class="btn btn-danger w-100">Value My Car</a> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col pt-5 car">
                <img src="{{asset ('assets/img/car.png')}}" alt="car" class="float-start">
                <div class="moving-left-tyr circle1">
                    <img src="{{asset ('assets/img/tyr.png')}}" alt="" class="img-fluid">
                </div>
                <div class="moving-right-tyr circle2">
                    <img src="{{asset ('assets/img/tyr.png')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Suppport Section -->
<section class="support_section p-3 pb-1 text-center text-white">
    <div class="container">
        <div class="row">
            <div class="col">
                <p>For Support mail us at: Info@websitename.com</p>
            </div>
        </div>
    </div>
</section>
<!-- How it Works -->
<section id="How-it-Works" class="how_it_Works text-center">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="title">
                    <h2>{{$howitworks[0]->header}}</h2>
                    <p>{{$howitworks[0]->sub_header}}</p>
                </div>
            </div>
        </div>

        <div class="row steps pt-5">
            @foreach($howitworks as $work)
            <div class="col-md-4 col-12  align-items-center ">
                <div class="blurb">
                    <img alt="{{$work->file}}" src="{{asset('images/home'.'/'.$work->file)}}" class="float-center pb-3" width="18%" height="auto">
                    <h2>{{$work->title}}</h2>
                    <p>{{$work->title}} </p>
                </div>
            </div>
            @endforeach
            <!-- <div class="col-md-4 col-12">
                    <div class="blurb">
                        <img src=" {{asset ('assets/img/book.png')}}" alt="Value my Car" class="float-center pb-3">
                        <h2>Book Appointment</h2>
                        <p>Book an appointment for <br> a free car inspection <br> near you.</p>
                    </div>
                </div> -->

        </div>
    </div>
</section>
<!-- Buy a Car Section -->
<section id="Buy-a-Car" class="buy_a_car">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="row form_overlap_row pt-5">
                <div class="col-12 text-center">
                    <div class="title">
                        <h2>Looking for a new car?</h2>
                        <p>Please fill out the form so we can help you source your new car.</p>
                    </div>
                </div>
                <div class="col-12 p-0">
                    <form id="msform" method="post" action="{{url('buy-car-leads-save')}}">
                        @csrf
                        <!-- progressbar -->
                        <ul id="progressbar">
                            @foreach($questionair as $key=> $q)
                            @php
                            $class="";
                            if($key==0)
                            {
                            $class="active";
                            }
                            @endphp
                            <li class="{{$class}}" id="account"><strong>{{$key+1}}</strong></li>
                            @endforeach
                            <!-- <li id="personal"><strong></strong></li>
                                <li id="payment"><strong></strong></li>
                                <li id="confirm"><strong></strong></li> -->
                        </ul>
                        @php
                        $i=0;
                        @endphp
                        @if(session()->get('thankyou')=='thankyou')
                        <fieldset>
                            <div class="form-card">
                                <h2 class="fs-title text-center">Success !</h2> <br><br>
                                <div class="row justify-content-center">
                                    <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"></div>
                                </div> <br><br>
                                <div class="row justify-content-center">
                                    <div class="col-7 text-center">
                                        <h5>You Have Successfully Signed Up</h5>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        @else
                        @foreach($questionair as $x=> $question)
                        @php
                        $i++
                        @endphp
                        <fieldset>
                            <div class="form-card">
                                <h2 class="fs-title">{{$question->question}}</h2>
                                <input type="hidden" name="question[]" value="{{$question->question}}" />
                                <input type="text" name="answer[]" id="answer{{$i}}" placeholder="{{$question->placeholder}}" @if(count($questionair)==$i){{'required'}}@endif>
                            </div>
                            @if(count($questionair)!=$i)
                            <input type="button" name="next" id="{{$i}}" class="next action-button" value="Next">
                            @else
                            <div class="form-card">
                                <input type="text" name="name" placeholder="Enter name" required>
                            </div>
                            <div class="form-card">
                                <input type="text" name="phone" placeholder="Enter Phone no"  minlength="10" maxlength="11" required>
                            </div>
                            <div class="form-card">
                                <input type="email" name="email" placeholder="Enter Email" required>
                            </div>
                            <input type="submit" class="action-button" value="Confirm">
                            @endif
                        </fieldset>
                        @endforeach
                        @endif

                        <!-- <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Hey, What is your good name</h2>
                                    <input type="text" name="text" placeholder="Enter Your Name">
                                </div>
                             
                                <input type="button" name="next" class="next action-button" value="Next">
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Hey, What is your good name</h2>
                                    <input type="text" name="text" placeholder="Enter Your Name">
                                </div>
                               
                                <input type="button" name="make_payment" class="next action-button" value="Confirm">
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Success !</h2> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"></div>
                                    </div> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5>You Have Successfully Signed Up</h5>
                                        </div>
                                    </div>
                                </div>
                            </fieldset> -->

                    </form>
                </div>
            </div>

        </div>
    </div>


    <!-- Steps -->
    <div class="container text-center pt-5">
        <div class="row steps pt-5">
            <div class="col-md-4 col-12">
                <div class="blurb">
                    <img src="{{asset ('assets/img/choose_car.png')}}" alt="Value my Car" class="float-center pb-3">
                    <h2>Choose a Car</h2>
                    <p>Fill the form above to<br> select desired car or<br> visit.</p>
                </div>
            </div>

            <div class="col-md-4 col-12">
                <div class="blurb">
                    <img src="{{asset ('assets/img/make_deal.png')}}" alt="Value my Car" class="float-center pb-3">
                    <h2>Make a deal</h2>
                    <p>Check the car and<br> confirm deal.</p>
                </div>
            </div>

            <div class="col-md-4 col-12">
                <div class="blurb">
                    <img src="{{asset ('assets/img/get_car.png')}}" alt="Value my Car" class="float-center pb-3">
                    <h2>Get The Car</h2>
                    <p>Pay The Cash and<br> get your car</p>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- Why-sell-your-car -->
<section class="Why-sell-your-car">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <div class="clock-img pt-5">
                    <img src="@if(isset($whysellcar->file)){{asset('images/home/'.'/'.$whysellcar->file ?? '')}}@endif" alt="">
                </div>
                <div class="clock-content text-center">
                    <h2>{{ $whysellcar->title}}</h2>
                    <!-- <hr> --> <br><br>
                    <p>{{$whysellcar->message}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section -->
<section class="blog_section">
    <div class="container">
        <div class="row text-center pb-5">
            <div class="col">
                <div class="title">
                    <h2>{{$blogheader->header}}</h2>
                    <p>{{$blogheader->sub_header}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                @php $i=0;@endphp
                @foreach($blogs as $blog)
                @php
                if($i>1){break;}else{$i++;}
                @endphp
                <div class="card blog_card mb-3">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <a href="{{url('/blog',$blog->permalink)}}">
                                <img src="{{asset('images/blogs/'.'/'.$blog->feature_img)}}" class="img-fluid rounded-start" alt="featured Image">
                            </a>
                        </div>
                        <div class="col-md-7 p-0">
                            <div class="card-body">
                                <div class="cardHeader">
                                    <div class="date-card">
                                        <div class="day">{{$blog->created_at->format('d')}}</div>
                                        <div>
                                            <div class="month">{{$blog->created_at->format('M')}}</div>
                                        </div>
                                    </div>
                                    <h5 class="card-title aliqn-bottom">{{$blog->title ?? ''}}</h5>
                                </div>
                                <p class="card-text">{{$blog->exceed ?? ''}}</p>

                                <p class="card-text">
                                    <a href="{{url('/blog',$blog->permalink)}}" class="mt-auto btn">Read More</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- blog post -->
                <!-- <div class="card blog_card nomargin">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <a href="/blog/blog">
                                    <img src="{{asset ('assets/img/featured3.png')}}" class="img-fluid rounded-start" alt="featured Image">
                                </a>
                            </div>
                            <div class="col-md-7 p-0">
                                <div class="card-body">
                                    <div class="cardHeader">
                                        <div class="date-card">
                                            <div class="day">26</div>
                                            <div>
                                                <div class="month">Feb</div>
                                            </div>
                                        </div>
                                        <h5 class="card-title aliqn-bottom">Lorem Ipsum</h5>
                                    </div>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>

                                    <p class="card-text">
                                        <a href="/blog/blog" class="mt-auto btn">Read More</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div> -->
            </div>
            @php $i=0;@endphp
            @foreach($blogs as $blog)
            @if($i==2)
            <div class="col-md-4">
                <div class="card blog_card mb-3 height100 nomargin">
                    <div class="row g-0 height100">
                        <div class="col-md-12">
                            <a href="{{url('/blog',$blog->permalink)}}">
                                <img src="{{asset('images/blogs/'.'/'.$blog->feature_img)}}" class="img-fluid rounded-start" alt="featured Image">
                            </a>
                        </div>
                        <div class="col-md-12 p-0">
                            <div class="card-body height100">
                                <div class="cardHeader">
                                    <div class="date-card">
                                        <div class="day">{{$blog->created_at->format('d')}}</div>
                                        <div>
                                            <div class="month">{{$blog->created_at->format('M')}}</div>
                                        </div>
                                    </div>
                                    <h5 class="card-title aliqn-bottom">{{$blog->title ?? ''}}</h5>
                                </div>
                                <p class="card-text">{{$blog->exceed ?? ''}}</p>

                                <p class="card-text">
                                    <a href="{{url('/blog',$blog->permalink)}}" class="mt-auto btn">Read More</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @php $i++;@endphp
            @endforeach
        </div>
    </div>
</section>
<!-- Testimonial Section -->
<section class="testimonial text-center p-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

                    <div class="carousel-inner">
                        @foreach($testominals as $x => $testominal)
                        @php
                        if($x==0)
                        {
                        $class="active";
                        }
                        else{
                        $class="";
                        }
                        @endphp
                        <div class="carousel-item {{ $class}}">
                            <img style="max-width:20%" src="{{asset ('images/testominal/'.'/'.$testominal->image)}}" class="thumbnail circled" alt="...">
                            <div class="user_name">
                                <h3>{{$testominal->title ?? ''}}</h3>
                            </div>
                            <div class="rating">
                                @php
                                for($i=0;$i<$testominal->review;$i++){
                                    @endphp
                                    <span class="fa fa-star checked"></span>
                                    @php }
                                    $remain=5-$testominal->review;
                                    for($i=0;$i<$remain;$i++){ @endphp <span class="fa fa-star"></span>
                                        @php } @endphp
                            </div>
                            <div class="para">
                                <p>
                                    {{$testominal->paragraph ?? ''}}
                                </p>
                            </div>

                        </div>
                        @endforeach
                        <!-- <div class="carousel-item">
                                <img src="{{asset ('assets/img/testimonial1.png')}}" class="thumbnail circled" alt="...">
                                <div class="user_name">
                                    <h3 class="mt-2">John Doe</h3>
                                </div>
                                <div class="rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="para">
                                    <p>
                                        Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.
                                    </p>
                                </div>

                            </div>

                            <div class="carousel-item">
                                <img src="{{asset ('assets/img/testimonial1.png')}}" class="thumbnail circled" alt="...">
                                <div class="user_name">
                                    <h3>John Doe</h3>
                                </div>
                                <div class="rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="para">
                                    <p>
                                        Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.
                                    </p>
                                </div>

                            </div>

                            <div class="carousel-item">
                                <img src="{{asset ('assets/img/testimonial1.png')}}" class="thumbnail circled" alt="...">
                                <div class="user_name">
                                    <h3>John Doe</h3>
                                </div>
                                <div class="rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="para">
                                    <p>
                                        Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.
                                    </p>
                                </div>

                            </div> -->

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