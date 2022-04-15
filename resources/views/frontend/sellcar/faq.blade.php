    @extends('frontend.layouts.master')
    @section('title')
    BeCarSmart | FAQ
    @endsection
    @section('content')

    <section id="faq-section">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-content text-center mt-5 mb-5">
                    <h2>FAQs</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Generel Information -->
    <section id="generel-information">
        <div class="container">
            <div class="row generel-information-content">
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <div class="heading pt-5 ">
                        <h1>Generel Information</h1>
                    </div>
                    @foreach($faqdata as $data)
                    <div class="accordion">
                        <div class="accordion" id="accordionExample{{$data->id}}">

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading{{$data->id}}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{$data->id}}" aria-expanded="true" aria-controls="collapseOne">
                                        {{$data->question}}
                                    </button>
                                </h2>
                                <div id="collapseOne{{$data->id}}" class="accordion-collapse collapse" aria-labelledby="heading{{$data->id}}" data-bs-parent="#accordionExample{{$data->id}}">
                                    <div class="accordion-body">
                                        {{$data->answer}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- <div class="col-lg-6 col-md-12 col-sm-12 pb-4">
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
                </div> -->
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