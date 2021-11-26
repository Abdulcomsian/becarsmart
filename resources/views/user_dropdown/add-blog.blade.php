@extends('layouts.dashboard.master',['title' => 'Add Blog'])
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
                <div data-kt-place="true" data-kt-place-mode="prepend"
                     data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                     class="page-title d-flex align-items-center me-3 flex-wrap mb-5 mb-lg-0 lh-1">
                    <!--begin::Title-->
                    <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">User Management</h1>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-200 border-start mx-4"></span>
                    <!--end::Separator-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <!--begin::Item-->
                        <!-- <li class="breadcrumb-item text-muted">
                            <a href="" class="text-muted text-hover-primary">Home</a>
                        </li> -->
                        <!--end::Item-->
                        <!--begin::Item-->
                        <!-- <li class="breadcrumb-item">
                            <span class="bullet bg-gray-200 w-5px h-2px"></span>
                        </li> -->
                        <!--end::Item-->
                        <!--begin::Item-->
                        <!-- <li class="breadcrumb-item text-muted">Sell Car Leads</li> -->
                        <!--end::Item-->
                        <!--begin::Item-->
                        <!-- <li class="breadcrumb-item">
                            <span class="bullet bg-gray-200 w-5px h-2px"></span>
                        </li> -->
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-dark">Home</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
{{--                <div class="d-flex align-items-center py-1">--}}
{{--                    <!--begin::Wrapper-->--}}
{{--                    <div class="me-4">--}}
{{--                        <!--begin::Menu-->--}}
{{--                        <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder"--}}
{{--                           data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"--}}
{{--                           data-kt-menu-flip="top-end">--}}
{{--                            <!--begin::Svg Icon | path: icons/duotone/Text/Filter.svg-->--}}
{{--                            <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">--}}
{{--											<svg xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"--}}
{{--                                                 viewBox="0 0 24 24" version="1.1">--}}
{{--												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--													<rect x="0" y="0" width="24" height="24"/>--}}
{{--													<path--}}
{{--                                                        d="M5,4 L19,4 C19.2761424,4 19.5,4.22385763 19.5,4.5 C19.5,4.60818511 19.4649111,4.71345191 19.4,4.8 L14,12 L14,20.190983 C14,20.4671254 13.7761424,20.690983 13.5,20.690983 C13.4223775,20.690983 13.3458209,20.6729105 13.2763932,20.6381966 L10,19 L10,12 L4.6,4.8 C4.43431458,4.5790861 4.4790861,4.26568542 4.7,4.1 C4.78654809,4.03508894 4.89181489,4 5,4 Z"--}}
{{--                                                        fill="#000000"/>--}}
{{--												</g>--}}
{{--											</svg>--}}
{{--										</span>--}}
{{--                            <!--end::Svg Icon-->Filter</a>--}}
{{--                        <!--begin::Menu 1-->--}}
{{--                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true">--}}
{{--                            <!--begin::Header-->--}}
{{--                            <div class="px-7 py-5">--}}
{{--                                <div class="fs-5 text-dark fw-bolder">Filter Options</div>--}}
{{--                            </div>--}}
{{--                            <!--end::Header-->--}}
{{--                            <!--begin::Menu separator-->--}}
{{--                            <div class="separator border-gray-200"></div>--}}
{{--                            <!--end::Menu separator-->--}}
{{--                            <!--begin::Form-->--}}
{{--                            <div class="px-7 py-5">--}}
{{--                                <!--begin::Input group-->--}}
{{--                                <div class="mb-10">--}}
{{--                                    <!--begin::Label-->--}}
{{--                                    <label class="form-label fw-bold">Status:</label>--}}
{{--                                    <!--end::Label-->--}}
{{--                                    <!--begin::Input-->--}}
{{--                                    <div>--}}
{{--                                        <select class="form-select form-select-solid" data-kt-select2="true"--}}
{{--                                                data-placeholder="Select option" data-allow-clear="true">--}}
{{--                                            <option></option>--}}
{{--                                            <option value="1">Approved</option>--}}
{{--                                            <option value="2">Pending</option>--}}
{{--                                            <option value="2">In Process</option>--}}
{{--                                            <option value="2">Rejected</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Input-->--}}
{{--                                </div>--}}
{{--                                <!--end::Input group-->--}}
{{--                                <!--begin::Input group-->--}}
{{--                                <div class="mb-10">--}}
{{--                                    <!--begin::Label-->--}}
{{--                                    <label class="form-label fw-bold">Member Type:</label>--}}
{{--                                    <!--end::Label-->--}}
{{--                                    <!--begin::Options-->--}}
{{--                                    <div class="d-flex">--}}
{{--                                        <!--begin::Options-->--}}
{{--                                        <label--}}
{{--                                            class="form-check form-check-sm form-check-custom form-check-solid me-5">--}}
{{--                                            <input class="form-check-input" type="checkbox" value="1"/>--}}
{{--                                            <span class="form-check-label">Author</span>--}}
{{--                                        </label>--}}
{{--                                        <!--end::Options-->--}}
{{--                                        <!--begin::Options-->--}}
{{--                                        <label--}}
{{--                                            class="form-check form-check-sm form-check-custom form-check-solid">--}}
{{--                                            <input class="form-check-input" type="checkbox" value="2"--}}
{{--                                                   checked="checked"/>--}}
{{--                                            <span class="form-check-label">Customer</span>--}}
{{--                                        </label>--}}
{{--                                        <!--end::Options-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::Options-->--}}
{{--                                </div>--}}
{{--                                <!--end::Input group-->--}}
{{--                                <!--begin::Input group-->--}}
{{--                                <div class="mb-10">--}}
{{--                                    <!--begin::Label-->--}}
{{--                                    <label class="form-label fw-bold">Notifications:</label>--}}
{{--                                    <!--end::Label-->--}}
{{--                                    <!--begin::Switch-->--}}
{{--                                    <div--}}
{{--                                        class="form-check form-switch form-switch-sm form-check-custom form-check-solid">--}}
{{--                                        <input class="form-check-input" type="checkbox" value=""--}}
{{--                                               name="notifications" checked="checked"/>--}}
{{--                                        <label class="form-check-label">Enabled</label>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Switch-->--}}
{{--                                </div>--}}
{{--                                <!--end::Input group-->--}}
{{--                                <!--begin::Actions-->--}}
{{--                                <div class="d-flex justify-content-end">--}}
{{--                                    <button type="reset"--}}
{{--                                            class="btn btn-sm btn-white btn-active-light-primary me-2"--}}
{{--                                            data-kt-menu-dismiss="true">Reset--}}
{{--                                    </button>--}}
{{--                                    <button type="submit" class="btn btn-sm btn-primary"--}}
{{--                                            data-kt-menu-dismiss="true">Apply--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                                <!--end::Actions-->--}}
{{--                            </div>--}}
{{--                            <!--end::Form-->--}}
{{--                        </div>--}}
{{--                        <!--end::Menu 1-->--}}
{{--                        <!--end::Menu-->--}}
{{--                    </div>--}}
{{--                    <!--end::Wrapper-->--}}
{{--                    <!--begin::Button-->--}}
{{--                    <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal"--}}
{{--                       data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Create</a>--}}
{{--                    <!--end::Button-->--}}
{{--                </div>--}}
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
                            <h2>Blog</h2>
                        </div>
                        <form class="pt-5">
                            
                            <div class="form-group row pb-5">
                                <label for="file" class="col-sm-2 col-form-label">Features Images</label>
                                <div class="col-sm-10">
                                <input type="file" class="form-control" id="row-3" placeholder="Row 3">
                                </div>
                            </div>
                            <div class="form-group row pb-5">
                                <label for="text" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="row-5" placeholder="Enter Your Title">
                                </div>
                            </div>
                            <div class="form-group row pb-5">
                                <label for="text" class="col-sm-2 col-form-label">Exceed</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="row-6" placeholder="Enter Your Exceed">
                                </div>
                            </div>
                            
                            <br>

                           
                            <div class=" row pb-5">   
                                <div class="col-sm-12">                         
                                    <a type="submit" class="btn btn-success btn-md" id="row-3"  href="#">Submit</a>
                                </div>
                            </div>
                            <br>

                            <div class="form-group row pb-5">
                                <label for="text" class="col-sm-2 col-form-label">Blog Text Area</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="min-height: calc(7.5em + 2.5rem + 2px);"></textarea>
                                </div>
                            </div>

                            <div class=" row pt-5 pb-5">   
                                <div class="col-sm-12">                         
                                    <a type="submit" class="btn btn-success btn-md" id="row-3"  href="#" >Submit</a>
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
