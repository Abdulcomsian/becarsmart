@extends('layouts.dashboard.master',['title' => 'Edit Questionaire'])
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
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">User Management</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-200 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-dark">Home</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
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
                <!--begin::Card body-->
                <div class="card-body pt-5">
                    <div class="section-2 pt-5 pb-5">
                        <h2>Questionaire</h2>
                    </div>
                    <form class="pt-5" method="post" action="{{url('update-questionaire')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$questionaire_heading->id}}" />
                        
                        <div class="form-group row pb-5">
                            <label for="sec_heading" class="col-sm-2 col-form-label">Section Heading</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="sec_heading" placeholder="Enter Section Heading" required value="{{$questionaire_heading->sec_heading ?? ''}}">
                            </div>
                        </div>
                        <div class="form-group row pb-5">
                            <label for="sec_subHeading" class="col-sm-2 col-form-label">Section Sub Heading</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="sec_subHeading" placeholder="Enter Section Sub Heading" value="{{$questionaire_heading->sec_subHeading ?? ''}}">
                            </div>
                        </div>
                        <br>
                        <div class=" row pt-5 pb-5">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-success btn-md">Update</button>
                            </div>
                        </div>
                    </form>
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