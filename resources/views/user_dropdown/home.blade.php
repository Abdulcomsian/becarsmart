@extends('layouts.dashboard.master',['title' => 'Home'])
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
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <!--begin::Svg Icon | path: icons/duotone/General/Search.svg-->
                                <span class="svg-icon svg-icon-1 position-absolute ms-6">
													<svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"/>
															<path
                                                                d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                                fill="#000000" fill-rule="nonzero" opacity="0.3"/>
															<path
                                                                d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                                fill="#000000" fill-rule="nonzero"/>
														</g>
													</svg>
												</span>
                                <!--end::Svg Icon-->
                                <input type="text" data-kt-user-table-filter="search"
                                       class="form-control form-control-solid w-250px ps-14"
                                       placeholder="Search user"/>
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--begin::Card toolbar-->
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-5">
                        <div class="section-2 pt-5 pb-5">
                            <h2>Section 1</h2>
                        </div>
                        <form class="pt-5">
                            <div class="form-group row pb-5">
                                <label for="text" class="col-sm-2 col-form-label">Row 1</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="row-1" placeholder="Row 1">
                                </div>
                            </div>
                            <div class="form-group row pb-5">
                                <label for="text" class="col-sm-2 col-form-label">Row 2</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="row-3" placeholder="Row 2">
                                </div>
                            </div>
                            <div class="form-group row pb-5">
                                <label for="text" class="col-sm-2 col-form-label">Row 3</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="row-3" placeholder="Row 3">
                                </div>
                            </div>
                           
                            <div class=" row pb-5">   
                                <div class="col-sm-12">                         
                                    <a type="submit" class="btn btn-success btn-md" id="row-3" style="float-right" href="#">Submit</a>
                                </div>
                            </div>
                        </form>
                        <div class="section-2 pt-5 pb-5">
                            <h2>Section 2</h2>
                        </div>
                      
                        <form class="pt-5">
                        <!-- <h4 class="mb-5">step 1</h4> -->
                            <div class="form-group row pb-5">
                                <label for="text" class="col-sm-2 col-form-label">Row 1</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="row-1" placeholder="Row 1">
                                </div>
                            </div>
                            <div class="form-group row pb-5">
                                <label for="text" class="col-sm-2 col-form-label">Row 2</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="row-3" placeholder="Row 2">
                                </div>
                            </div>
                            <div class="form-group row pb-5">
                                <label for="text" class="col-sm-2 col-form-label">Column 1 Row 3</label>
                                <div class="col-sm-10">
                                <input type="file" class="form-control" id="row-3" placeholder="Row 3">
                                </div>
                            </div>
                            <div class="form-group row pb-5">
                                <label for="text" class="col-sm-2 col-form-label">Column 1 Row 4</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="row-3" placeholder="Row 4">
                                </div>
                            </div>
                            <div class="form-group row pb-5">
                                <label for="text" class="col-sm-2 col-form-label">Column 1 Row 5</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="row-3" placeholder="Row 5">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row pb-5">
                                <label for="text" class="col-sm-2 col-form-label">Column 2 Row 6</label>
                                <div class="col-sm-10">
                                <input type="file" class="form-control" id="row-3" placeholder="Row 6">
                                </div>
                            </div>
                            <div class="form-group row pb-5">
                                <label for="text" class="col-sm-2 col-form-label">Column 2 Row 7</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="row-3" placeholder="Row 7">
                                </div>
                            </div>
                            <div class="form-group row pb-5">
                                <label for="text" class="col-sm-2 col-form-label">Column 2 Row 8</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="row-3" placeholder="Row 8">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row pb-5">
                                <label for="text" class="col-sm-2 col-form-label">Column 3 Row 9</label>
                                <div class="col-sm-10">
                                <input type="file" class="form-control" id="row-3" placeholder="Row 9">
                                </div>
                            </div>
                            <div class="form-group row pb-5">
                                <label for="text" class="col-sm-2 col-form-label">Column 3 Row 10</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="row-3" placeholder="Row 10">
                                </div>
                            </div>
                            <div class="form-group row pb-5">
                                <label for="text" class="col-sm-2 col-form-label">Column 3 Row 11</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="row-3" placeholder="Row 11">
                                </div>
                            </div>

                            
                            <div class=" row pb-5">   
                                <div class="col-sm-12">                         
                                    <a type="submit" class="btn btn-success btn-md" id="row-3"  href="#">Submit</a>
                                </div>
                            </div>
                        </form>

                            <div class=" row pb-5">   
                                <div class="col-sm-12">                         
                                    <a type="submit" class="btn btn-danger  form-control " id="new" href="/questionnaire">View</a>
                                </div>
                            </div>
                        
                            <form class="pt-5 pb-5">
                            <!-- <h4 class="mb-5">step 1</h4> -->
                                
                                <div class="form-group row pb-5">
                                    <label for="text" class="col-sm-2 col-form-label">Column 4 Row 12</label>
                                    <div class="col-sm-10">
                                    <input type="file" class="form-control" id="row-3" placeholder="Row 12">
                                    </div>
                                </div>
                                <div class="form-group row pb-5">
                                    <label for="text" class="col-sm-2 col-form-label">Column 4 Row 13</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="row-3" placeholder="Row 13">
                                    </div>
                                </div>
                                <div class="form-group row pb-5">
                                    <label for="text" class="col-sm-2 col-form-label">Column 4 Row 14</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="row-3" placeholder="Row 14">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row pb-5">
                                    <label for="text" class="col-sm-2 col-form-label">Column 4 Row 15</label>
                                    <div class="col-sm-10">
                                    <input type="file" class="form-control" id="row-3" placeholder="Row 15">
                                    </div>
                                </div>
                                <div class="form-group row pb-5">
                                    <label for="text" class="col-sm-2 col-form-label">Column 4 Row 16</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="row-3" placeholder="Row 16">
                                    </div>
                                </div>
                                <div class="form-group row pb-5">
                                    <label for="text" class="col-sm-2 col-form-label">Column 4 Row 17</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="row-3" placeholder="Row 17">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row pb-5">
                                    <label for="text" class="col-sm-2 col-form-label">Column 4 Row 18</label>
                                    <div class="col-sm-10">
                                    <input type="file" class="form-control" id="row-3" placeholder="Row 18">
                                    </div>
                                </div>
                                <div class="form-group row pb-5">
                                    <label for="text" class="col-sm-2 col-form-label">Column 4 Row 19</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="row-3" placeholder="Row 19">
                                    </div>
                                </div>
                                <div class="form-group row pb-5">
                                    <label for="text" class="col-sm-2 col-form-label">Column 4 Row 20</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="row-3" placeholder="Row 20">
                                    </div>
                                </div>

                                
                                <div class=" row pb-5">   
                                    <div class="col-sm-12">                         
                                        <a type="submit" class="btn btn-success btn-md" id="row-3"  href="#">Submit</a>
                                    </div>
                                </div>
                            </form>

                            <div class="section-2 pt-5 pb-5">
                            <h2>Section 4</h2>
                        </div>
                      
                        <form class="pt-5">
                        <!-- <h4 class="mb-5">step 1</h4> -->
                            <div class="form-group row pb-5">
                                <label for="text" class="col-sm-2 col-form-label">Column 1 Row 1</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="row-1" placeholder="Row 1">
                                </div>
                            </div>
                            <div class="form-group row pb-5">
                                <label for="text" class="col-sm-2 col-form-label">Column 1 Row 2</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="row-2" placeholder="Row 2">
                                </div>
                            </div>
                            <div class="form-group row pb-5">
                                <label for="file" class="col-sm-2 col-form-label">Column 1 Row 3</label>
                                <div class="col-sm-10">
                                <input type="file" class="form-control" id="row-3" placeholder="Row 3">
                                </div>
                            </div>
                            <div class="form-group row pb-5">
                                <label for="text" class="col-sm-2 col-form-label">Column 1 Row 4</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="row-4" placeholder="Row 4">
                                </div>
                            </div>
                            <div class="form-group row pb-5">
                                <label for="text" class="col-sm-2 col-form-label">Column 1 Row 5</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="row-5" placeholder="Row 5">
                                </div>
                            </div>
                            <div class="form-group row pb-5">
                                <label for="text" class="col-sm-2 col-form-label">Column 1 Row 6</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="row-6" placeholder="Row 6">
                                </div>
                            </div><br>
                            <div class="form-group row pb-5">
                                <label for="file" class="col-sm-2 col-form-label">Column 2 Row 9</label>
                                <div class="col-sm-10">
                                <input type="file" class="form-control" id="row-9" placeholder="Row 9">
                                </div>
                            </div>
                            <div class="form-group row pb-5">
                                <label for="text" class="col-sm-2 col-form-label">Column 2 Row 10</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="row-10" placeholder="Row 10">
                                </div>
                            </div>
                            <div class="form-group row pb-5">
                                <label for="text" class="col-sm-2 col-form-label">Column 2 Row 11</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="row-11" placeholder="Row 11">
                                </div>
                            </div>
                            <div class="form-group row pb-5">
                                <label for="text" class="col-sm-2 col-form-label">Column 2 Row 12</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="row-12" placeholder="Row 12">
                                </div>
                            </div><br>
                            <div class="form-group row pb-5">
                                <label for="file" class="col-sm-2 col-form-label">Column 3 Row 13</label>
                                <div class="col-sm-10">
                                <input type="file" class="form-control" id="row-13" placeholder="Row 13">
                                </div>
                            </div>
                            <div class="form-group row pb-5">
                                <label for="text" class="col-sm-2 col-form-label">Column 3 Row 14</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="row-14" placeholder="Row 14">
                                </div>
                            </div>
                            <div class="form-group row pb-5">
                                <label for="text" class="col-sm-2 col-form-label">Column 3 Row 15</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="row-15" placeholder="Row 15">
                                </div>
                            </div>
                            <div class="form-group row pb-5">
                                <label for="text" class="col-sm-2 col-form-label">Column 3 Row 16</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="row-16" placeholder="Row 16">
                                </div>
                            </div>

                            
                            <div class=" row pb-5">   
                                <div class="col-sm-12">                         
                                    <a type="submit" class="btn btn-success btn-md" id="row-3"  href="#">Submit</a>
                                </div>
                            </div>
                        </form>

                        <div class="section-2 pt-5 pb-5">
                            <h2>Section 5</h2>
                        </div>
                        <form class="pt-5">
                            <div class="form-group row pb-5">
                                <label for="file" class="col-sm-2 col-form-label">Row 1</label>
                                <div class="col-sm-10">
                                <input type="file" class="form-control" id="row-1" placeholder="Row 1">
                                </div>
                            </div>
                            <div class="form-group row pb-5">
                                <label for="text" class="col-sm-2 col-form-label">Row 2</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="row-3" placeholder="Row 2">
                                </div>
                            </div>
                            <div class="form-group row pb-5">
                                <label for="text" class="col-sm-2 col-form-label">Row 3</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="row-3" placeholder="Row 3">
                                </div>
                            </div>
                           
                            <div class="form-group row pb-5">
                                <label for="text" class="col-sm-2 col-form-label">Row 4</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="row-4" placeholder="Row 4">
                                </div>
                            </div>
                            <div class=" row pb-5">   
                                <div class="col-sm-12">                         
                                    <a type="submit" class="btn btn-success btn-md" id="row-3" style="float-right" href="#">Submit</a>
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
