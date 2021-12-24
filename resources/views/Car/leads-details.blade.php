@extends('layouts.dashboard.master',['title' => 'leads details'])
@section('styles')
@include('layouts.sweetalert.sweetalert_css')
<style>
    .view-btn {
        float: right;
    }
</style>
@endsection
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center me-3 flex-wrap mb-5 mb-lg-0 lh-1">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Leads List</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-200 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Leads Details</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">leads List</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <th class="min-w-125px">Full Name</th>
                                <th class="min-w-125px">Email</th>
                                <th class="min-w-125px">Phone number</th>
                                <th class="min-w-125px">Model</th>
                                <th class="min-w-125px">Color</th>
                                <th class="min-w-125px">Engine</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="text-gray-600 fw-bold">
                            <tr>
                                <td class="">{{$lead->fullname ?? ''}}</td>
                                <td class="">{{$lead->email ?? ''}}</td>
                                <td class="">{{$lead->phone ?? ''}}</td>
                                <td class="">{{$lead->model_no}}</td>
                                <td class="">{{$lead->color ?? ''}}</td>
                                <td class="">{{$lead->engine ?? ''}}</td>
                            </tr>
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
                <!--begin::Card body-->
                <div class="card-body pt-5">
                    <!-- Generel Information -->
                    <section id="how-to-find" class="terms-condition">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="content-div" style="padding:0px 0px">
                                        <div class="step-1-main">
                                            <div class="mt-5 mb-5">
                                                <h2>Lead Details</h2>
                                            </div>
                                            <table id="example" class="table table-striped" style="width:100%">
                                                <tbody>
                                                    <tr>
                                                        <td><b>Service History</b></td>
                                                        <td>{{$lead->service_history}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Is the vehicle a non-runner?</b></td>
                                                        <td>@if($lead->non_runner==1){{'Yes'}}@else{{'No'}}@endif</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>How many sets of keys do you have for this vehicle?</b></td>
                                                        <td>@if($lead->set_of_keys==1){{'1'}}@else{{'2 or more'}}@endif</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>How many months untill the vehicle is due its MOT?</b></td>
                                                        <td>{{$lead->mot_due ?? ''}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b> Has this vehicle been subject to an insurance write off or been in an accident?</b></td>
                                                        <td>@if($lead->accident_damaged==1){{'Yes'}}@else{{'No'}}@endif</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Comment</b></td>
                                                        <td>{{$lead->comments ?? ''}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Gearbox Condition</b></td>
                                                        <td>{{$lead->gearbox_condition ?? ''}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Any Warning lights or messages on the dash?</b></td>
                                                        <td>@if($lead->warning_light==1){{'Yes'}}@else{{'No'}}@endif</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b> Warning lights Comments</b></td>
                                                        <td>{{$lead->warning_comments ?? ''}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b> Any Scratches, marks or dents on the body?</b></td>
                                                        <td>@if($lead->scratches==1){{'Yes'}}@else{{'No'}}@endif</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Scratches Comment</b></td>
                                                        <td>{{$lead->scratches_comments ?? ''}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b> What is the condition of this vehicle? Please select one:</b></td>
                                                        <td>{{$lead->vehicle_condtion ?? ''}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b> Feel free to give us more information on this vehicle. The more we know about your vehicle means the more accurate we will be with the valuation:</b></td>
                                                        <td>{{$lead->more_info ?? ''}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <br><br>
                                        <div class="step-1-main">
                                            <div class="mt-5 mb-5">
                                                <h2>Lead Images</h2>
                                            </div>
                                            <table id="example" class="table table-striped" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>S-no</th>
                                                        <th>Image</th>
                                                        <th>Created Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($lead->sellcarimages as $img)
                                                    <tr>
                                                        <td><b>{{$loop->index+1}}</b></td>
                                                        <td><img src="{{asset($img->image_name)}}" width="100px" height="100px" class="img img-circle" /></td>
                                                        <td>{{$img->created_at}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
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
@section('scripts')
@include('layouts.sweetalert.sweetalert_js')
@endsection