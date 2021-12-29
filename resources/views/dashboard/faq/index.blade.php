@extends('layouts.dashboard.master',['title' => 'About Page'])
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
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">About Page</h1>
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
                    <li class="breadcrumb-item text-muted">About Page</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">About</li>
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
                        <h2>About Us </h2>
                    </div>
                    <form class="pt-5" method="post" action="{{route('dashboard.faq.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div id="aboutsection">
                            <div class="row">
                                <div class="form-group row pb-5">
                                    <label for="text" class="col-sm-2 col-form-label">Question</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="question[]" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row pb-5">
                                    <label for="text" class="col-sm-2 col-form-label">Answer</label>
                                    <div class="col-sm-10">
                                        <textarea name="answer[]" class="form-control" rows="4" cols="40" required></textarea>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class=" row pb-5">
                            <div class="col-sm-12">
                                <button type="button" class="btn btn-success btn-md addabout" style="margin-left:5px"><span class="fa fa-plus"></span>Add More</button>
                                <button type="submit" class="btn btn-success btn-md" id="row-3" style="float-right">Submit</button>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>S-No</th>
                                <th>Question</th>
                                <th>Answer</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($faqdata as $data)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$data->question}}</td>
                                <td>{{$data->answer}}</td>
                                <td>
                                    <button id="{{$data->id}}" class="btn btn-danger confirm"><span class="fa fa-trash"></span></button>
                                    <form method="post" id="form_{{$data->id}}" action="{{url('faq-delete')}}">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$data->id}}" />

                                    </form>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
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
<script>
    $(".addabout").on('click', function() {
        $("#aboutsection").append(`<div class="row"><div class="form-group row pb-5">
                               <label for="text" class="col-sm-2 col-form-label">Question</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="question[]" class="form-control">
                                    </div>
                            </div>

                            <div class="form-group row pb-5">
                               <label for="text" class="col-sm-2 col-form-label">Answer</label>
                                    <div class="col-sm-10">
                                        <textarea name="answer[]" class="form-control" rows="4" cols="40" required></textarea>

                                    </div>
                            </div>
                             <div class="form-group row">
                                    <div class="col-sm-2">
                                    <button type="button" class="btn btn-danger removeabout"><span class="fa fa-minus"></span></button>
                                    </div>
                                 </div></div><br>`);
    })
</script>

<script>
    $(document).on("click", ".removeabout", function() {
        $(this).parent().parent().parent().remove();
    })
</script>
@endsection