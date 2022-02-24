@extends('layouts.dashboard.master',['title' => 'Dashboard'])
@section('styles')
<style>
    .card.welcome-card {
        margin-bottom: 20px;
        border: 0;
        border-radius: 0px;
    }

    .card .icon2 {
        background: #ff8761;
    }

    .card .icon1,
    .card .icon2 {
        padding: 20px 10px;
    }

    .valtop {
        padding: 20px 10px;
    }

    .valtop .heading {
        font-size: 18px;
        font-weight: 800;
        color: #ff8761;
        text-transform: uppercase;
    }

    .valtop .cont-val {
        font-size: 30px;
        font-weight: 800;
        color: #2f3b4c;
        line-height: 1;
    }

    .card .icon1 img,
    .card .icon2 img {
        width: 50px;
        padding-top: 2px;
    }
</style>
@endsection
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <h1 class="p-5">Dashboard</h1>
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                    </div>
                    <!--begin::Card toolbar-->
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <div class="row">
                        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-1 offset-md-1">
                            <div class="main-content-container container-fluid px-4">
                                <!-- Page Header -->
                                <div class="page-header row py-4 justify-content-center">
                                    <!--Displaying the Total Registered Clinics as well as Total Revenue Generated-->
                                    <div class="col-md-6">
                                        <div class="card welcome-card">
                                            <div class="s">
                                                <div class="d-flex align-content-center align-middle bd-highlight">
                                                    <div class="icon2 text-center"><img src="{{asset ('images/deadline.png')}}"></div>
                                                    <div class="flex-grow-1 valtop">
                                                        <a href="">
                                                            <div class="heading2">Total Sell Car Leads</div>
                                                        </a>
                                                        <div class="cont-val">{{$totalsellcarleads}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card welcome-card">
                                            <div class="s">
                                                <div class="d-flex align-content-center align-middle bd-highlight">
                                                    <div class="icon2 text-center"><img src="{{asset ('images/deadline.png')}}"></div>
                                                    <div class="flex-grow-1 valtop">
                                                        <a href="">
                                                            <div class="heading2">Total Buy Car Leads</div>
                                                        </a>
                                                        <div class="cont-val">{{$buycarlead}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card welcome-card">
                                            <div class="s">
                                                <div class="d-flex align-content-center align-middle bd-highlight">
                                                    <div class="icon2 text-center"><img src="{{asset ('images/deadline.png')}}"></div>
                                                    <div class="flex-grow-1 valtop">
                                                        <a href="">
                                                            <div class="heading2">Total Motor Trader</div>
                                                        </a>
                                                        <div class="cont-val"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card welcome-card">
                                            <div class="s">
                                                <div class="d-flex align-content-center align-middle bd-highlight">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>
                                <!--End here-->

                            </div>

                    </div>

                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
@endsection