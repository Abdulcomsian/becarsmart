@extends('layouts.dashboard.master',['title' => 'Contact Us Page'])
@section('styles')
@include('layouts.sweetalert.sweetalert_css')
<style>
    hr {
        color: black !important;
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
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Contact Us Page</h1>
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
                    <li class="breadcrumb-item text-muted">Contact Us Page</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">Contact Us</li>
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
                    </div>
                    <!--begin::Card toolbar-->
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <div class="section-2 pt-5 pb-5">
                        <h2>Contact Us </h2>
                    </div>
                    <form class="pt-5" method="post" action="{{route('dashboard.contact.store')}}">
                        @csrf
                        @if($contactdata)
                        <input type="hidden" name="type" value="edit" />
                        <input type="hidden" name="id" value="{{$contactdata->id ?? ''}}" />
                        @else
                        <input type="hidden" name="type" value="add" />
                        @endif
                        <div id="aboutsection">
                            <div class="row">
                                <div class="form-group col-md-6 pb-5">
                                    <label for="text" class="col-sm-4 col-form-label">Contact Us Heading:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="heading" id="row-1" value="{{ $contactdata->heading ?? '' }}" required>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 pb-5">
                                    <label for="text" class="col-sm-4 col-form-label">Address:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="address" id="row-1" value="{{ $contactdata->address ?? '' }}" required>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 pb-5">
                                    <label for="text" class="col-sm-4 col-form-label">Contact Phone no:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="phone" id="row-1" value="{{ $contactdata->phone ?? '' }}" required>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 pb-5">
                                    <label for="text" class="col-sm-4 col-form-label">Contact Email:</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" name="email" id="row-1" value="{{ $contactdata->email ?? '' }}" required>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 pb-5">
                                    <label for="text" class="col-sm-4 col-form-label">Youtube link</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="youtube_link" value="{{ $contactdata->youtube_link ?? '' }}" id="row-1">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 pb-5">
                                    <label for="text" class="col-sm-4 col-form-label">Instagram Link</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="instagram_link" value="{{ $contactdata->instagram_link ?? '' }}" id="row-1">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 pb-5">
                                    <label for="text" class="col-sm-4 col-form-label">Facebook Link</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="facebook_link" value="{{ $contactdata->facebook_link ?? '' }}" id="row-1">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 pb-5">
                                    <label for="text" class="col-sm-4 col-form-label">Twitter Link</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="twitter_link" value="{{ $contactdata->twitter_link ?? '' }}" id="row-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class=" row pb-5">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-success btn-md" id="row-3" style="float-right">Submit</button>
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