  <!-- navbar -->
  <div class="container-fluid navBar">
        <nav class="navbar navbar-expand-lg navbar-light  ">
           <a class="navbar-brand"href="{{ url('/index') }}"><img src="{{asset ('assets/img/sellcar-logo.png')}}"></a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbarToggler10"
              aria-controls="myNavbarToggler10" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="myNavbarToggler10">
              <ul class="navbar-nav mx-auto menuList">
                 <li class="nav-item">
                    <a class="nav-link" href="#Sell-Your-Car">Sell Your Car</a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" href="{{ url('/how_it_works') }}">How It Works</a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#Buy-a-Car">Source A Car</a>
                 </li>
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        More
                     </a>
                     <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
                        <!-- <li><a class="dropdown-item" href="#">Action</a></li> -->

                        <li class="nav-item">
                           <a class="dropdown-item" href="{{url ('/about')}}">About Us</a>
                        </li>
                        <li class="nav-item">
                           <a class="dropdown-item" href="#">For Motor Traders</a>
                        </li>
                        <li class="nav-item">
                           <a class="dropdown-item" href="{{ url('/faq') }}">FAQ</a>
                        </li>
                        <li class="nav-item">
                           <a class="dropdown-item" href="{{ url('/contact')}}">Contact Us</a>
                        </li>
                        <li class="nav-item">
                           <a class="dropdown-item" href="{{url('/blogs')}}">Blog</a>
                        </li>
                        <li class="nav-item">
                           <a class="dropdown-item" href="{{url('/reviews')}}">Reviews</a>
                        </li>
                     </ul>
                  </li>
                 
              </ul>
              <!-- <ul class="navbar-nav sm-icons mr-0">
                 <li class=""><a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                 <li>|</li>
                 <li class=""><a class="nav-link" href="login.html"><i class="fa fa-user" aria-hidden="true"></i></a></li>
              </ul> -->
           </div>
        </nav>
     </div>