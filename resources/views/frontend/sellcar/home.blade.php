    
    @extends('frontend.layouts.master')
        @section('title')
            BeCarSmart | Home
        @endsection
    @section('content')

    <!-- Hero Section -->
    <section id="Sell-Your-Car" class="hero-section text-center">
        <div class="container">
            <div class="row pb-5">
                <div class="col-md-8 offset-md-2">
                    <div class="home-blurb">
                        <h1 class="heading-h1">ZS33 FS</h1>
                        <h3>Hyundai I30 Active Blue Drive CRDI</h3>
                        <!-- <p>Hyundai I30 Active Blue Drive CRDI</p> -->
                        
                    </div>
                    <div class="home-ul-li pt-3 pb-5">
                        <ul class="d-flex">
                            <li><b>model:</b></li>
                            <li> <span> 2021</span></li>
                        </ul>
                        <ul class="d-flex">
                            <li><b>Color:</b></li>
                            <li> <span> White</span></li>
                        </ul>
                        <ul class="d-flex">
                            <li><b>Engine:</b></li>
                            <li> <span> Diesel</span></li>
                        </ul>
                    </div>

                    <!-- Form -->
                    <div class="home-search-form">
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <a  href="/sellcar" class="btn continue btn-danger">Continue</a>
                                <a  href="/sellcar" class="btn chevron-left btn-danger"><span><i class="fa fa-chevron-right"></i></span></a>
                            </div>
                        </div>
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
                        <h2>How it Works?</h2>
                    <p>3 Easy Steps</p>
                    </div>
                </div>
            </div>

            <div class="row steps pt-5">
                <div class="col-md-4 col-12">
                    <div class="blurb">
                        <img src="{{asset ('assets/img/value.png')}}" alt="Value my Car" class="float-center pb-3">
                        <h2>Value your Car</h2>
                        <p>Get a free no obligation <br> valuation above.</p>
                    </div>
                </div>

                <div class="col-md-4 col-12">
                    <div class="blurb">
                        <img src=" {{asset ('assets/img/book.png')}}" alt="Value my Car" class="float-center pb-3">
                        <h2>Book Appointment</h2>
                        <p>Book an appointment for <br> a free car inspection <br> near you.</p>
                    </div>
                </div>

                <div class="col-md-4 col-12">
                    <div class="blurb">
                        <img src="{{asset ('assets/img/sell.png')}}" alt="Value my Car" class="float-center pb-3">
                        <h2>Sell your Car</h2>
                        <p>Complete the sale and <br> get paid if you are happy with <br> the offer.</p>
                    </div>
                </div>
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
                            <h2>Want to Buy A Car?</h2>
                            <p>Fill out the form and let us find a best car you want.</p>
                        </div>
                    </div>
                    <div class="col-12 p-0">
                        <form id="msform">
                            <!-- progressbar -->
                                <ul id="progressbar">
                                <li class="active" id="account"><strong></strong></li>
                                <li id="personal"><strong></strong></li>
                                <li id="payment"><strong></strong></li>
                                <li id="confirm"><strong></strong></li>
                            </ul> 
                            <fieldset>
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
                                <!-- <input type="button" name="previous" class="previous action-button-previous" value="Previous"> -->
                                <input type="button" name="next" class="next action-button" value="Next">
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Hey, What is your good name</h2>
                                        <input type="text" name="text" placeholder="Enter Your Name">
                                </div>
                                <!-- <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> -->
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
                            </fieldset>
                        </form>
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
                        <h2>Tips & Guide</h2>
                        <p>We are worried for you, follow the tips & guides to avoid the bad situations</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="card blog_card mb-3">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <a href="/blog/blog">
                                    <img src="{{asset ('assets/img/featured.png')}}" class="img-fluid rounded-start" alt="featured Image">
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
                    </div>

                    <!-- blog post -->
                    <div class="card blog_card nomargin">
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
                    </div>
                </div>

                

                <div class="col-md-4">
                    <div class="card blog_card mb-3 height100 nomargin">
                        <div class="row g-0 height100">
                            <div class="col-md-12">
                                <a href="/blog/blog">
                                    <img src="{{asset ('assets/img/featured2.png')}}" class="img-fluid rounded-start" alt="featured Image">
                                </a>
                            </div>
                            <div class="col-md-12 p-0">
                                <div class="card-body height100">
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
                    </div>
                </div>
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
                        <div class="carousel-item active">
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

                        <div class="carousel-item ">
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