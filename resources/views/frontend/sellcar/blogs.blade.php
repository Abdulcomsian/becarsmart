
@extends('frontend.layouts.master')
    @section('title')
        BeCarSmart | Blogs
    @endsection
@section('content')

    <section id="terms-section" >
        <div class="row">
            <div class="col-md-12">
                <div class="contact-content text-center mt-5 mb-5">
                    <h2>Blogs</h2>
                </div>
            </div>
        </div>
    </section>
   
    <!-- Blog Section -->
    <section class="blog_section">
        <div class="container">
            <!-- <div class="row text-center pb-5">
                <div class="col">
                    <div class="title">
                        <h2>How to Sign Up to BeCarSmart.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div> -->
            @if(is_null($blog))
            @foreach($blog as $bl )
            <div class="row">
                <div class="col-md-12">
                    <div class="card blog_card mb-3">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <a  href="{{url('/blog',$bl->permalink)}}" >
                                    <img src="{{asset('images/blogs/'.'/'.$bl->feature_img)}}" class="img-fluid rounded-start" alt="featured Image">
                                </a>
                            </div>
                            <div class="col-md-7 p-0">
                                <div class="card-body">
                                    <div class="cardHeader">
                                        <div class="date-card">
                                            <div class="day">{{$bl->created_at->format('d')}}</div>
                                            <div>
                                                <div class="month">{{$bl->created_at->format('M')}}</div>
                                            </div>
                                        </div>
                                        <h5 class="card-title aliqn-bottom">{{$bl->title ?? ''}}</h5>
                                    </div>
                                    <p class="card-text">{{$bl->exceed ?? ''}}</p>

                                    <p class="card-text">
                                        <a href="{{url('/blog',$bl->permalink)}}" class="mt-auto btn">Read More</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div><br><br>
            @endforeach
            @else
            <p style="text-align:center;"><strong>No Blog Found</strong></p>
            @endif
            <div class="col-md-6 d-flex" style="margin-bottom:10px">
                {{$blog->links("pagination::bootstrap-4")}}
            </div>



            <!-- <div class="row">
                <div class="col-md-12">
                    <div class="card blog_card mb-3">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <a href="#">
                                    <img src="http://127.0.0.1:8000/images/blogs//featuredImage.png" class="img-fluid rounded-start" alt="featured Image">
                                </a>
                            </div>
                            <div class="col-md-7 p-0">
                                <div class="card-body">
                                    <div class="cardHeader">
                                        <div class="date-card">
                                            <div class="day">23</div>
                                            <div>
                                                <div class="month">Dec</div>
                                            </div>
                                        </div>
                                        <h5 class="card-title aliqn-bottom">How to use BeCarSmart.</h5>
                                    </div>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                    <p class="card-text">
                                        <a href="#" class="mt-auto btn">Read More</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div><br><br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card blog_card mb-3">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <a href="#">
                                    <img src="http://127.0.0.1:8000/images/blogs//featuredImage.png" class="img-fluid rounded-start" alt="featured Image">
                                </a>
                            </div>
                            <div class="col-md-7 p-0">
                                <div class="card-body">
                                    <div class="cardHeader">
                                        <div class="date-card">
                                            <div class="day">23</div>
                                            <div>
                                                <div class="month">Dec</div>
                                            </div>
                                        </div>
                                        <h5 class="card-title aliqn-bottom">How to sell on BeCarSmart.</h5>
                                    </div>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                    <p class="card-text">
                                        <a href="#" class="mt-auto btn">Read More</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div><br><br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card blog_card mb-3">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <a href="#">
                                    <img src="http://127.0.0.1:8000/images/blogs//featuredImage.png" class="img-fluid rounded-start" alt="featured Image">
                                </a>
                            </div>
                            <div class="col-md-7 p-0">
                                <div class="card-body">
                                    <div class="cardHeader">
                                        <div class="date-card">
                                            <div class="day">23</div>
                                            <div>
                                                <div class="month">Dec</div>
                                            </div>
                                        </div>
                                        <h5 class="card-title aliqn-bottom">How to Sign Up to BeCarSmart.</h5>
                                    </div>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                    <p class="card-text">
                                        <a href="#" class="mt-auto btn">Read More</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div><br><br> -->

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