@extends('layouts.dashboard.master',['title' => 'Send Email'])
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
                        <h2>Send Email</h2>
                    </div>
                    <form class="pt-5" method="post" action="{{url('update-blog')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row pb-5">
                            <label for="file" class="col-sm-2 col-form-label">Top Logo</label>
                            <div class="col-sm-10">
                                <input type="file" name="file" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row pb-5">
                            <label for="text" class="col-sm-2 col-form-label">Subject Heading</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="title" placeholder="Enter Subject Heading" required value="">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row pb-5">
                            <label for="text" class="col-sm-2 col-form-label">Subject Description</label>
                            <div class="col-sm-10">
                                <textarea class="summernote form-control" name="message" id="exampleFormControlTextarea1" rows="3" style="min-height: calc(7.5em + 2.5rem + 2px);" required></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group row pb-5">
                            <label for="text" class="col-sm-2 col-form-label">Regarding Message</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="exceed" placeholder="Enter Regards" value="">
                            </div>
                        </div>
                        
                        <div class="form-group row pb-5">
                            <label for="text" class="col-sm-2 col-form-label">Facebook URL</label>
                            <div class="col-sm-10">
                                <input type="url" class="form-control" name="exceed" placeholder="Enter Facebook URL" value="">
                            </div>
                        </div>
                        <div class="form-group row pb-5">
                            <label for="text" class="col-sm-2 col-form-label">Twitter URL</label>
                            <div class="col-sm-10">
                                <input type="url" class="form-control" name="exceed" placeholder="Enter Twitter URL" value="">
                            </div>
                        </div>
                        <div class="form-group row pb-5">
                            <label for="text" class="col-sm-2 col-form-label">Instagram URL</label>
                            <div class="col-sm-10">
                                <input type="url" class="form-control" name="exceed" placeholder="Enter Instagram URL" value="">
                            </div>
                        </div>

                        <div class=" row pt-5 pb-5">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-success btn-md">Send Email</button>
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