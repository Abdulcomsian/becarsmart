@extends('frontend.layouts.master')
   @section('title')
      BeCarSmart | Blog
   @endsection
@section('content')
    <section id="terms-section">
       <div class="row">
          <div class="col-md-12">
             <div class="contact-content text-center mt-5 mb-5">
                <h2>Blog</h2>
             </div>
          </div>
       </div>
    </section>
    <!-- Generel Information -->
    <div class="section">
       <div class="container">
          <div class="row">
             <div class="col-md-8">
                <div class="section-row sticky-container">
                   <div class="main-post">
                      <h3>{{$blog->title ?? ''}}</h3>
                      <p>{{$blog->exceed ?? ''}}</p>
                      <figure class="figure-img">
                         <img class="img-responsive" src="{{asset('images/blogs/'.'/'.$blog->feature_img)}}" alt="" style="height: 500px; object-fit: cover; width: 100%;">
                      </figure>

                      <p>{!!$blog->message ?? ''!!}</p>
                   </div>
                </div>
                <!-- <div class="section-row">
                   <div class="post-author">
                      <div class="media">
                         <div class="media-left">
                            <img class="media-object" src="@if(isset($blog->user->image) && $blog->user->image!=''){{''}}@else{{asset('assets/img/testimonial1.png')}}@endif" alt="">
                         </div>
                         <div class="media-body">
                            <div class="media-heading">
                               <h3>{{$blog->user->name ?? ''}}</h3>
                            </div>
                            <ul class="author-social">
                               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                               <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                               <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                         </div>
                      </div>
                   </div>
                </div> -->
             </div>
             <div class="col-md-4">
                <div class="aside-widget">
                   <div class="section-title">
                      <h2>Featured Posts</h2>
                   </div>
                   @foreach($featureblogs as $blog)
                   <div class="post post-thumb">
                      <a class="post-img" href="{{url('/blog',$blog->permalink)}}">
                        <img src="{{asset ('images/blogs/'.'/'.$blog->feature_img)}}" class="img-fluid rounded-start" alt="" >
                     </a>
                      <div class="post-body">
                         <div class="post-meta">
                            <a class="post-category cat-3" href="{{url('/blog',$blog->permalink)}}">{{$blog->title ?? ''}}</a>
                            <span class="post-date">{{$blog->created_at->format('M d,y')}}</span>
                         </div>
                         <h3 class="post-title"><a href="{{url('/blog',$blog->permalink)}}">{{$blog->exceed ?? ''}}</a></h3>
                      </div>
                   </div>
                   @endforeach
                   <!-- <div class="post post-thumb">
                      <a class="post-img" href="#"><img src="{{asset ('assets/img/featured2.png')}}" alt=""></a>
                      <div class="post-body">
                         <div class="post-meta">
                            <a class="post-category cat-3" href="index.html">Lorem ipsum</a>
                            <span class="post-date">March 26, 2020</span>
                         </div>
                         <h3 class="post-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                      </div>
                   </div>
                   <div class="post post-thumb">
                      <a class="post-img" href="#"><img src="{{asset ('assets/img/featured3.png')}}" alt=""></a>
                      <div class="post-body">
                         <div class="post-meta">
                            <a class="post-category cat-3" href="index.html">Lorem ipsum</a>
                            <span class="post-date">September 26, 2020</span>
                         </div>
                         <h3 class="post-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                      </div>
                   </div> -->
                </div>
             </div>
          </div>
       </div>
    </div>
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