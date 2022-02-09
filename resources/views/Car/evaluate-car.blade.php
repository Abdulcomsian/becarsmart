@extends('layouts.dashboard.master',['title' => 'Evaluate Car'])
@section('styles')
@include('layouts.sweetalert.sweetalert_css')
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
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Car List</h1>
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
                    <li class="breadcrumb-item text-muted">Buy Car Leads</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">Car List</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <!--end::Actions-->
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
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotone/General/Search.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                        <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                    </g>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search user" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card toolbar-->
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    @foreach($lead_detail->questions as $key => $lead)

                    <div class="step-1-main">
                        <div class="mt-5 mb-5">
                            <h2>Step {{$loop->index+1}}</h2>
                        </div>
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th><b>Question</b></th>
                                    <th><b>User Response</b></th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$lead}}</td>
                                    <td> {{$lead_detail->answers[$key]}}</td>
                                </tr>
                                <!-- <tr>
                                    <td>Is the vehicle a non-runner?</td>
                                    <td>Yes</td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                    <br><br>
                    
                    @endforeach
                    <div class="card">
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                                <!--begin::Table head-->
                                <thead>
                                    <!--begin::Table row-->
                                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                        <th class="min-w-125px">Name</th>
                                        <th class="min-w-125px">Email</th>
                                        <th class="min-w-125px">Phone number</th>
                                        <th class="min-w-125px">Lead Source</th>
                                    </tr>
                                    <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="text-gray-600 fw-bold">
                                    <tr>
                                        <td class="">{{$lead_detail->name ?? ''}}</td>
                                        <td class="">{{$lead_detail->email ?? ''}}</td>
                                        <td class="">{{$lead_detail->phone_no ?? ''}}</td>
                                        <td class="">{{$lead_detail->lead_source ?? ''}}</td>
                                    </tr>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                    </div>

                    <!-- <div class="step-2-main">
                        <div class="mt-5 mb-5">
                            <h2>Step 2</h2>
                        </div>
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th><b>Question</b></th>
                                    <th><b>User Response</b></th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Service History</td>
                                    <td>first not due</td>
                                </tr>
                                <tr>
                                    <td>Do you intend to sell your vehicle with a personalised registration</td>
                                    <td>Yes</td>
                                </tr>
                                <tr>
                                    <td>Is your Car an Import?</td>
                                    <td>Grey (e.g. Japanese)</td>
                                </tr>
                                <tr>
                                    <td>How many sets of keys do you have for this vehicle?</td>
                                    <td>2 or more</td>
                                </tr>
                                <tr>
                                    <td>How many months untill the vehicle is due its MOT?</td>
                                    <td>6+ Months</td>
                                </tr>
                                <tr>
                                    <td>how your vehicle over been subject to an insurance write off or been accident damaged?</td>
                                    <td>Never Written off</td>
                                </tr>
                                <tr>
                                    <td>How your vehicle ever been used for private hire?</td>
                                    <td>No</td>
                                </tr>
                                <tr>
                                    <td>Has your vehicle ever been used for driving tuition?</td>
                                    <td>Yes</td>
                                </tr>
                                <tr>
                                    <td>Has your vehicle ever been used as a police/emergency vehicle?</td>
                                    <td>No</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                    <br><br>

                    <div class="step-3-main">
                        <div class="mt-5 mb-5">
                            <h2>Step 3</h2>
                        </div>
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th><b>Question</b></th>
                                    <th><b>User Response</b></th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Mileage</td>
                                    <td>82000</td>
                                </tr>
                                <tr>
                                    <td>Previous Onwers</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Search History</td>
                                    <td>Full</td>
                                </tr>
                                <tr>
                                    <td>Do you intent to sell your vehicle with a peronalised registration?</td>
                                    <td>No</td>
                                </tr>
                                <tr>
                                    <td>In your car an import?</td>
                                    <td>European/parallel</td>
                                </tr>
                                <tr>
                                    <td>How many sets of keys do you have for this vehicle?</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Is the vehicle a non-runner?</td>
                                    <td>Yes</td>
                                </tr>
                                <tr>
                                    <td>How many months untill the vehicle is due its MOT?</td>
                                    <td>6+ Months</td>
                                </tr>


                            </tbody>

                        </table>
                    </div> -->

                    <!--end::Table-->
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