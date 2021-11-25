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
                <div data-kt-place="true" data-kt-place-mode="prepend"
                     data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                     class="page-title d-flex align-items-center me-3 flex-wrap mb-5 mb-lg-0 lh-1">
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
                                <th class="min-w-125px">Registration</th>
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
                                    <td class="">Hilel Durham</td>
                                    <td class="">Hilel Durham@gmail.com</td>
                                    <td class="">+99423990234</td>
                                    <td class="">559832</td>
                                    <td class="">2013</td>
                                    <td class="">White</td>
                                    <td class="">Diesel</td>
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
                                            <h2>1. When’s the best time to buy?</h2>
                                            <p>If you’re looking for a bargain head into the dealer ready to rock and roll at the end of the month, or if possible right near the end of the financial year. You might find the salespeople a bit more open to lower prices if the car you’re thinking about buying tips them over the edge to get a very nice bonus.</p><br>
                                            <h2>2. Should I go with finance or use my savings?</h2>
                                            <p>There are pros and cons that can be attributed to both financing as well as using a big chunk of savings to pay for your new car. At the end of the day, the decision should be carefully considered depending on your individual circumstances.</p><br>
                                            <h2>3. If I want to finance, is dealer financing the way to go?</h2>
                                            <p>We think you should compare your options.</p><br>
                                            <p>Ok, let’s elaborate on that a little bit. When you have financing numbers mixing with buying price it can get really confusing (to the benefit of the dealer, if you know what we mean). Add in a trade-in and it gets even worse. Plus, they only have a couple of lender options they can offer you.</p><br>
                                            <p>If you’re considering financing, chat with the awesome folks at Stratton Finance - with a gargantuan network of lenders at their disposal, they’ll hook you up with a great  finance deal that works perfectly for you.</p><br>
                                            <h2>4. How do I know if I’m getting a good price?</h2>
                                            <p>It all comes down to the amount of research you put into the car you want to buy. Go into a negotiation with zero research and you’ll have your pants pulled down over the price - without even knowing that’s what’s happening.</p><br>
                                            <p>Jump on  the endless number of car websites and trusty ol’ Google and take in as much information as you possibly can before taking one step in a dealership.</p><br>
                                            <p>Or better yet, use carconnect! We’ll make sure you get the absolute best new car deal every time.</p>
                                            <h2>5. Is an extended warranty worth it?</h2>
                                            <p>When you buy new, you’ll likely be automatically getting a manufacturer’s warranty covering a certain amount of years and/or kilometres - the specifics are dependent on the brand you choose. Nowadays, they’re quite reasonable pretty much across the board.</p><br>
                                            <p>But if you want full peace of mind, an extended warranty might be the way to go. We all know Murphy and his laws, and by them you can bet something will go wrong the day after the manufacturer’s warranty expires.</p><br>
                                            <h2>6. Should I trade in my old car or sell it privately?</h2><br>
                                            <p>This question has a very straightforward answer; if you want to get the most amount for your old car, compare your options. If you don’t want to deal with writing and posting ads, having your time wasted by tyre-kickers, and get it all done and dusted in the shortest time possible, trade it in.</p><br>
                                            <h2>7. Who is the best car insurance provider?</h2><br>
                                            <p>Ask two different people this question and you’ll get vastly different responses.</p><br>
                                            <p>We recommend getting quotes from a few of the major players like Budget Direct, Bingle, AAMI, you and the like. But remember, just because it’s the lowest quote it doesn’t mean it’s the best. Read through the inclusions and exclusions and other T’s and C’s to understand what you’re paying for and choose accordingly. The team at Stratton Finance can also help you look at your insurance options.</p><br>
                                            <h2>8. What are the benefits of buying new instead of used?</h2><br>
                                            <p>As previously mentioned, buying new means you’ll get a manufacturer’s warranty. Also, many brands are offering free servicing for the first X years. And because it’s new, there won’t be any wear-and-tear repairing that needs to be done (if there is, warranty should cover it anyway though). You’re also getting the very latest features available.</p><br>
                                            <h2>9. How do I know what type of car to buy?</h2><br>
                                            <p>You need to write a list of what the car needs to have (e.g. towing capacity, number of seats, diesel engine, ute tray, etc.) and a few things you’d like it to have but aren’t 100% dealbreakers if it doesn’t.</p><br>
                                            <p>Then it’s just a matter of using any one of the many car research websites (like us!) to search using the need-to-have parameters and seeing what pops up that’s in your price range.</p><br>
                                            <h2>10. Is it possible to buy a new car without having to deal with a car dealership?</h2><br>
                                            <p>Whether you’ve bought a car through a dealership or not in the past, you’re sure to be well aware of how stressful and anxiety-ridden the whole thing is either due to first-hand experience or stories from others. Skip the BS and use the first-class car buying services we offer at carconnect instead.</p>
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
