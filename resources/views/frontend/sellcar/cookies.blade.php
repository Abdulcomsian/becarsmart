    
@extends('frontend.layouts.master')
    @section('title')
        BeCarSmart | Cookies
    @endsection
@section('content')
    <section id="terms-section ">
    <div class="row">
        <div class="col-md-12">
            <div class="contact-content text-center mt-5 mb-5">
                <h2 id="sub-terms-header">Cookie Policy</h2>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-1">
                <div id="content-div" class="p-3">
                    <h4 id="sub-terms-header">What is a cookie?</h4>
                    <p>
                        A cookie is a small file that a website stores on your computers hard drive so it can
                        identify you when you return to the website. As well as allowing the website you’re
                        visiting to be working more efficiently. It will also provide information to the website
                        you are visiting.
                    </p>
                    <br><br>
                    <h4 id="sub-terms-header">How we use cookies?</h4>
                    <p>
                        We use cookies to individualise you from other users of our site. This then assists us
                        to deliver a good experience when you use our website, plus allows us to improve
                        our website. When you are browsing our site, you are agreeing to our use of cookies.
                    </p>
                    <br><br>
                    <h4 id="sub-terms-header">What cookies we use?</h4>
                    <br>      
                    <h4 id="sub-terms-header">Strictly necessary cookies</h4>
                    <p>The cookies that are necessary for the operation of our website. They include, for example, the cookies that maintains order and continuity, if a connection issue arises.</p>
                    <br>
                    <h4 id="sub-terms-header">Analytical/performance cookies</h4>
                    <p>This allows us to acknowledge and count the number of visitors and to see how
                        visitors move around our website when they are using it. This helps us to improve
                        our website, for example, by ensuring that users are finding what they are looking for
                        easily.
                    </p>
                    <br>
                    <h4 id="sub-terms-header">Functionality cookies</h4>
                    <p>These are used to recognise you when you return to our site. This allows us to
                        personalise our content for you, greet you by name and remember your preferences.
                    </p>
                    <br>
                    <h4 id="sub-terms-header">Third party and Targeting cookies</h4>
                    <p style="font-weight: 400;color: #747474; line-height: 30px;">We collect this information in a way which doesn't identify anyone personally. To get the most out 
                        of our site, you will need to enable cookies on your browser.
                    </p>
                    <p style="font-weight: 400;color: #747474; line-height: 30px;">We may use cookies stored on your computer after visiting our site to deliver personalised
                        adverts while you browse the internet.
                    </p>
                    <br>
                    <p>Please note that third parties which includes, for example, advertising networks and
                        providers of external services like web traffic analysis services, may also use 
                    </p>
                    <p>cookies, and this we have no control over. These cookies are likely to be either
                        analytical/performance cookies or targeting cookies
                    </p>
                    <br><br>
                    <p style="font-weight: 400;color: red; line-height: 30px; text-align: start;">PLEASE USE COLOURS AND FONTS FOR THE WEBSITE CURRENT STYLING SCHEME! </p>
                </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <br><br>
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