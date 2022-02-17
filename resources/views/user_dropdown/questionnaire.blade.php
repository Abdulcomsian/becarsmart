@extends('layouts.dashboard.master',['title' => 'Questionnaire'])
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
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="dashboard/home" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Questionnaire</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">Questionnaire</li>
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
                </div>
                <!--end::Card header-->
                <!--begin::Card body questionnaire-heading-->
                <div class="card-body pt-5 questionnaire">

                    <form class="pt-5" method="post" action="{{url('/insert-headings')}}">

                        @csrf

                        <!-- Section Heading -->
                        <div class="form-group row pb-5">
                            <label for="text" class="col-sm-2 col-form-label">Section Heading</label>
                            <div class="col-sm-10">
                                <input type="text" name="sec_heading" class="form-control" id="row-1" placeholder="e.g Questioniare section">
                            </div>
                        </div>

                        <div class="form-group row pb-5">
                            <label for="text" class="col-sm-2 col-form-label">Section Sub Heading</label>
                            <div class="col-sm-10">
                                <input type="text" name="sec_subHeading" class="form-control" id="row-1" placeholder="e.g fill the questions below">
                            </div>
                        </div>

                        <div class="row pb-5">
                            <div class="col-sm-12">
                                @if($questionaire_heading->isNotEmpty())
                                    <button type="submit" class="btn btn-success btn-md m-3" id="row-3" disabled style="float:right" href="#">Submit</button>
                                @else
                                    <button type="submit" class="btn btn-success btn-md m-3" id="row-3" style="float:right" href="#">Submit</button>
                                @endif
                            </div>
                        </div>

                    </form>

                    </div>
                    <!--end::Card body-->

                    <!-- show section-->
                    <div class="card mt-5">
                    <div class="card-header pt-5">
                        <h2>Section Heading and Sub Heading</h2>
                    </div>

                    <div class="card-body">

                        <table class="table table-hovered">
                            <thead>
                                <tr>
                                    <th>Section Heading</th>
                                    <th>Section Sub Heading</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($questionaire_heading as $all)
                                <tr>
                                    <td>{{$all->sec_heading}}</td>
                                    <td>{{$all->sec_subHeading}}</td>
                                    <td>
                                        <a href="{{url('questionaire-edit',$all->id)}}"><i class="fa fa-edit cursor-pointer" id="{{$all->id}}"></i></a>
                                        <i class="fa fa-trash confirm cursor-pointer" id="{{$all->id}}"></i>
                                        <form method="post" id="form_{{$all->id}}" action="{{url('delete-headings')}}">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$all->id}}" />
                                        </form>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
                <!--begin::Card body questionnaire-question-->

                <!--begin::Card body questionnaire-question-->
                <div class="card-body pt-5 questionnaire">

                    <form class="pt-5" method="post" action="{{url('/insert-questions')}}">

                        @csrf
                        <div id="input_row">
                            <div class="section-2 pt-5 pb-5">
                                <div class="row">
                                    <div class="col" id="step_number">
                                        <h2>Step</h2>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group row pb-5">
                                <label for="text" class="col-sm-2 col-form-label">Question</label>
                                <div class="col-sm-10">
                                    <input type="text" name="question[]" class="form-control" id="row-1" placeholder="Enter your Question">
                                </div>
                            </div>
                            <div class="form-group row pb-5">
                                <label for="text" class="col-sm-2 col-form-label">Placeholder</label>
                                <div class="col-sm-10">
                                    <input type="text" name="placeholder[]" class="form-control" id="row-3" placeholder="Enter placeholder text">
                                </div>
                            </div>

                            <div class="form-group row pb-5 d-none">
                                <label for="text" class="col-sm-2 col-form-label">Enter Question Order</label>
                                <div class="col-sm-10">
                                    <input type="hidden" name="step[]" class="form-control" id="row-3" placeholder="e.g 1,2">
                                </div>
                            </div>

                        </div>

                        <div class="row pb-5">
                            <div class="col-sm-12">

                                <button type="button" class="btn btn-success btn-md m-3" id="add_row" style="float:right" href="#"> <i class="fa fa-plus"></i> Add Step</button>
                                <button type="submit" class="btn btn-success btn-md m-3" id="row-3" style="float:right" href="#">Submit</button>
                            </div>
                        </div>

                    </form>

                </div>
                <!--end::Card body-->
                <!--end::Card-->
                <div class="card mt-5">
                    <div class="card-header pt-5">
                        <h2>All Questions</h2>
                    </div>

                    <div class="card-body">

                        <table class="table table-hovered">
                            <thead>
                                <tr>
                                    <th>Question</th>
                                    <th>Placeholder</th>
                                    <th>Step</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $key => $_data)
                                <tr>
                                    <td>{{$_data->question}}</td>
                                    <td>{{$_data->placeholder}}</td>
                                    <td>{{$key+1}}</td>

                                    <td>
                                        <i class="fa fa-trash confirm cursor-pointer" id="{{$_data->id}}"></i>
                                        <form method="post" id="form_{{$_data->id}}" action="{{url('delete-questionnaire')}}">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$_data->id}}" />
                                        </form>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
@endsection
@section('scripts')
@include('layouts.sweetalert.sweetalert_js');


<script>
    var counter = 1;
    $(document).ready(function() {



        //when the Add Field button is clicked
        $("#add_row").click(function() {
            counter++;

            $("#input_row").append(`<div id="step_` + counter + `"><div class="section-2 pt-5 pb-5">
                    <div class="row">
                    <div class="col" id="step_number` + counter + `">
                    <h2>Step</h2>
                    </div>
                    <div class="col">
                    <button style="float:right" type="button" onclick="deleteRecord(` + counter + `)" id="delete_` + counter + `" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                    </div>
                </div>
                        </div>

                        <div class="form-group row pb-5">
                                <label for="text" class="col-sm-2 col-form-label">Question</label>
                                <div class="col-sm-10">
                                <input type="text" name="question[]" class="form-control" id="row-1" placeholder="Enter your Question">
                                </div>
                            </div>
                            <div class="form-group row pb-5">
                                <label for="text" class="col-sm-2 col-form-label">Placeholder</label>
                                <div class="col-sm-10">
                                <input type="text" name="placeholder[]" class="form-control" id="row-3" placeholder="Enter placeholder text">
                                </div>
                            </div>

                            <div class="form-group row pb-5 d-none">
                                <label for="text" class="col-sm-2 col-form-label">Enter Question Order</label>
                                <div class="col-sm-10">
                                <input type="hidden" name="step[]" class="form-control" id="row-3" placeholder="e.g 1,2">
                                
                                </div>
                            </div></div>`);
        });

    });

    function deleteRecord(counter) {
        $("#step_" + counter).remove();
    }
</script>
@endsection