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
                <div data-kt-place="true" data-kt-place-mode="prepend"
                     data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                     class="page-title d-flex align-items-center me-3 flex-wrap mb-5 mb-lg-0 lh-1">
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
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                            <div class="step-1-main">
                                <div class="mt-5 mb-5">
                                    <h2>Step 1</h2>
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
                                            <td>How many sets of keys do you have for this vehicle ?</td>
                                            <td> 2 or more</td>
                                        </tr>
                                        <tr>
                                            <td>Is the vehicle a non-runner?</td>
                                            <td>Yes</td>
                                        </tr>
                                        <tr>
                                            <td>How many months untill the vehicle is due its MOT ?</td>
                                            <td>6+ months</td>
                                        </tr>
                                        <tr>
                                            <td>How your vehicle ever been subject to an insurance write off or been accident demaged?</td>
                                            <td>Never Written off</td>
                                        </tr>
                                        <tr>
                                            <td>Has your vehicle over been user for private hire?</td>
                                            <td>Yes</td>
                                        </tr>
                                        <tr>
                                            <td>Has your vehicle over been used for driving tuition?</td>
                                            <td>No</td>
                                        </tr>
                                        <tr>
                                            <td>Has your vehicle ever been used as a police/emergency vehicle?</td>
                                            <td>No</td>
                                        </tr>
                                        <tr>
                                            <td>has your vehicle been modified with motability ramps, a winch or now has missing seats?</td>
                                            <td>Yes</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            
                            <br><br>

                            <div class="step-2-main">
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
                            </div>

                            <br><br>

                            <div class="step-4-main">
                                <div class="mt-5 mb-5">
                                    <h2>Step 4</h2>
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
                                            <td>Photos (each side of the vehicle and any damage)</td>
                                            <td><i class="fa fa-file" aria-hidden="true"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Any other faults? (please list below)</td>
                                            <td>Yes</td>
                                        </tr>
                                        <tr>
                                            <td>Additional Notes (anything else ?)</td>
                                            <td>6+ Months</td>
                                        </tr>

                                    </tbody>
                                    
                                </table>
                            </div>

                            <br><br>

                            <div class="step-5-main">
                                <div class="mt-5 mb-5">
                                    <h2>Step 5</h2>
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
                                            <td>Condition</td>
                                            <td>FAULTS BUT RUNS</td>
                                        </tr>
                                        <tr>
                                            <td>Has the Vehicle ever been an insurance write off?</td>
                                            <td>CAT C</td>
                                        </tr>
                                        <tr>
                                            <td>Has the vehicle ever been an insurance write off?</td>
                                            <td>Yes</td>
                                        </tr>
                                        <tr>
                                            <td>Any warning lights or messages on the dash?</td>
                                            <td>No</td>
                                        </tr>
                                        <tr>
                                            <td>Photos (each side of the vehicle and any damage)</td>
                                            <td><i class="fa fa-file" aria-hidden="true"></i></td>
                                        </tr>

                                    </tbody>
                                    
                                </table>
                            </div>

                            <br><br>

                            <div class="step-6-main">
                                <div class="mt-5 mb-5">
                                    <h2>Step 6</h2>
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
                                            <td>Engine Condition:</td>
                                            <td>DOESN'T RUN</td>
                                        </tr>
                                        <tr>
                                            <td>State of Engine:</td>
                                            <td>NOT-DISMANTLED</td>
                                        </tr>
                                        <tr>
                                            <td>Gearbox Condition</td>
                                            <td>No Faults</td>
                                        </tr>
                                        <tr>
                                            <td>Has the vehicle ever been an insurance write off?</td>
                                            <td>CAT D</td>
                                        </tr>
                                        <tr>
                                            <td>Any warning lights or message on the dash?</td>
                                            <td>Faults but Runs</td>
                                        </tr>

                                    </tbody>
                                    
                                </table>
                            </div>


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
