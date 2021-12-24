    
@extends('frontend.layouts.master')
    @section('title')
        BeCarSmart | FAQ
    @endsection
@section('content')

    <section id="faq-section">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-content text-center mt-5 mb-5">
                    <h2>FAQ</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Generel Information -->
    <section id="generel-information">
        <div class="container">
            <div class="row generel-information-content">
                <div class="col-lg-6 col-md-12 col-sm-12 ">
                    <div class="heading pt-5 ">
                        <h1>Generel Information</h1>
                    </div>
                    <div class="accordion">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare etiam pulvinar porttitor mauris, tellus platea lectus etiam a. Pellentesque varius nunc arcu elit, ac. Placerat parturient dapibus nunc sit netus nibh egestas.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare etiam pulvinar porttitor mauris, tellus platea lectus etiam a. Pellentesque varius nunc arcu elit, ac. Placerat parturient dapibus nunc sit netus nibh egestas.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </button>
                              </h2>
                              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare etiam pulvinar porttitor mauris, tellus platea lectus etiam a. Pellentesque varius nunc arcu elit, ac. Placerat parturient dapibus nunc sit netus nibh egestas.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare etiam pulvinar porttitor mauris, tellus platea lectus etiam a. Pellentesque varius nunc arcu elit, ac. Placerat parturient dapibus nunc sit netus nibh egestas.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare etiam pulvinar porttitor mauris, tellus platea lectus etiam a. Pellentesque varius nunc arcu elit, ac. Placerat parturient dapibus nunc sit netus nibh egestas.
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 pb-4">
                    <div class="generel-information-content">
                        <div class="form-body">
                            <div class="row">
                                <div class="form-holder">
                                    <div class="form-content">
                                        <div class="form-items">
                                            <h3>Ask a Question</h3>
                                            <form class="requires-validation" novalidate>
                    
                                                <div class="col-md-12 pb-3">
                                                   <input class="form-control" type="text" name="name" placeholder="Your Name *" required>
                                                </div>
                    
                                                <div class="col-md-12 pb-5">
                                                    <input class="form-control" type="text" name="subject" placeholder="Subject *" required>
                                                    
                                                </div>
                                                <div class="col-md-12 ">
                                                    <textarea class="form-control" rows="5" placeholder="Your Message"></textarea>
                                                    
                                                </div>
                                                <div class="form-group">
                                                  </div>
                                                <div class="form-button mt-3 mb-5">
                                                    <button id="submit" type="submit" class="btn send-mail">Send Mail</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
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