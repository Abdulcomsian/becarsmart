    
    <!-- Footer Section -->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footerBox text-center">
                        <!-- <p class="footer-text">Terms<span>.&nbsp</span>Privacy<span>.&nbsp</span>Cookies</p> -->
                        <a href="{{ url('/term') }}">Terms</a>
                        <span>. &nbsp</span>
                        <a href="{{ url('/privacy_policy') }}">Privacy</a>
                        <span>.&nbsp</span>
                        <a href="{{ url('/cookies') }}">Cookies</a>
                         <span>.&nbsp</span>
                        <a href="https://becarsmart.co.uk/blog">Blog</a>
                        
                    </div>
                    <div class="footer-para">
                        <p class="footer-text">Follow us on:</p>
                    </div>
                    <div class="footer-para text-center d-flex socialIcon" style="justify-content: center;">
                        <p><a href="{{ $contactdata->youtube_link ?? '#'}}" target="_blank"><img src="{{asset ('assets/img/tiktok.png')}}" alt="" style="width:20px;"></a></p>
                        <p><a href="{{ $contactdata->twitter_link ?? '#'}}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></p>
                        <p><a href="{{ $contactdata->instagram_link ?? '#'}}" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></p>
                        <p><a href="{{ $contactdata->facebook_link ?? '#'}}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></p>
                    </div>
                </div>
                <hr align="center">

                    <p class="footer-last">Copyright © 2021 Website. All Rights Reserved.</p>
            </div>
        </div>
    </section>
