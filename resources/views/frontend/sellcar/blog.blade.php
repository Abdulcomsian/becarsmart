    
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
                     <h3>Lorem ipsum</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                     <p>The toppings you may chose for that TV dinner pizza slice when you forgot to shop for foods, the paint you may slap on your face to impress the new boss is your business. But what about your daily bread? Design comps, layouts, wireframes—will your clients accept that you go about things the facile way? Authorities in our business will tell in no uncertain terms that Lorem Ipsum is that huge, huge no no to forswear forever. Not so fast, I'd say, there are some redeeming factors in favor of greeking text, as its use is merely the symptom of a worse problem to take into consideration.</p>
                     <figure class="figure-img">
                        <img class="img-responsive" src="{{asset('assets/img/featured2.png')}}" width="100%" alt="">
                        <figcaption>So Lorem Ipsum is bad (not necessarily)</figcaption>
                     </figure>
                     
                     <p>If that's what you think how bout the other way around? How can you evaluate content without design? No typography, no colors, no layout, no styles, all those things that convey the important signals that go beyond the mere textual, hierarchies of information, weight, emphasis, oblique stresses, priorities, all those subtle cues that also have visual and emotional appeal to the reader. Rigid proponents of content strategy may shun the use of dummy copy but then designers might want to ask them to provide style sheets with the copy decks they supply that are in tune with the design direction they require.</p>
                     <h3>Summing up, if the copy is diverting attention from the design it’s because it’s not up to task.</h3>
                     <p>Typographers of yore didn't come up with the concept of dummy copy because people thought that content is inconsequential window dressing, only there to be used by designers who can’t be bothered to read. Lorem Ipsum is needed because words matter, a lot. Just fill up a page with draft copy about the client’s business and they will actually read it and comment on it. They will be drawn to it, fiercely. Do it the wrong way and draft copy can derail your design review.</p>
                  </div>
                  
               </div>

               <div class="section-row">
                  <div class="post-author">
                     <div class="media">
                        <div class="media-left">
                           <img class="media-object" src="{{asset ('assets/img/testimonial1.png')}}" alt="">
                        </div>
                        <div class="media-body">
                           <div class="media-heading">
                              <h3>John Doe</h3>
                           </div>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                           <ul class="author-social">
                              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            
            <div class="col-md-4">
            
               <div class="aside-widget">
                  <div class="section-title">
                     <h2>Featured Posts</h2>
                  </div>
                  <div class="post post-thumb">
                     <a class="post-img" href="#"><img src="{{asset ('assets/img/featured.png')}}" alt=""></a>
                     <div class="post-body">
                        <div class="post-meta">
                           <a class="post-category cat-3" href="index.html">Lorem ipsum</a>
                           <span class="post-date">Febuary 26, 2018</span>
                        </div>
                        <h3 class="post-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                     </div>
                  </div>
                  <div class="post post-thumb">
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
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

    @endsection