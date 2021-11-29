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
                    <a class="nav-link" href="#How-it-Works">How It Works</a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#Buy-a-Car">Buy A Car</a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" href="{{ url('/faq') }}">FAQ</a>
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