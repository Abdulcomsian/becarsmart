@extends('layouts.dashboard.master',['title' => 'Home'])
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
                <div class="card-body pt-5">
                    <div class="section-2 pt-5 pb-5">
                        <h2> hero Section </h2>
                    </div>
                    <form class="pt-5" method="post" action="{{url('/hero-section')}}">
                        @csrf
                        @if(isset($herosection))
                        <input type="hidden" name="form_type" value="Edit" />
                        <input type="hidden" name="id" value="{{$herosection->id}}" />
                        @else
                        <input type="hidden" name="form_type" value="Add" />
                        @endif
                        <div class="form-group row pb-5">
                            <label for="text" class="col-sm-2 col-form-label">Header</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="header" id="row-1" value="{{$herosection->header ?? ''}}" placeholder="Enter your header" required>
                            </div>
                        </div>
                        <div class="form-group row pb-5">
                            <label for="text" class="col-sm-2 col-form-label">Sub Header</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="sub_header" id="row-3" value="{{$herosection->sub_header ?? ''}}" placeholder="Enter your Sub header" required>
                            </div>
                        </div>
                        <div class="form-group row pb-5">
                            <label for="text" class="col-sm-2 col-form-label">Paragraph</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="text" id="row-3" value="{{$herosection->text ?? ''}}" placeholder="Enter Your Paragraph" required>
                            </div>
                        </div>

                        <div class=" row pb-5">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-success btn-md" id="row-3" style="float-right">Submit</button>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <!-- how it works section  -->
                    <div class="section-2 pt-5 pb-5">
                        <h2>How it Works Section</h2>
                    </div>
                    <form class="pt-5" method="post" action="{{url('/how-it-work')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row pb-5">
                            <label for="text" class="col-sm-2 col-form-label">Header</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="header" placeholder="Enter Your Header" required>
                            </div>
                        </div>
                        <div class="form-group row pb-5">
                            <label for="text" class="col-sm-2 col-form-label">Sub Header</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="sub_header" placeholder="Enter Your Sub Header" required>
                            </div>
                        </div>
                        <div id="howitwokrs">
                            <div class="row">
                                <div class="form-group row pb-5">
                                    <label for="text" class="col-sm-2 col-form-label">Upload File</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="file[]" required>
                                    </div>
                                </div>
                                <div class="form-group row pb-5">
                                    <label for="text" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="title[]" placeholder="Enter Your Title" required>
                                    </div>
                                </div>
                                <div class="form-group row pb-5">
                                    <label for="text" class="col-sm-2 col-form-label">Exceed</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="exceed[]" placeholder="Enter Your Exceed" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row pb-5">
                            <div class="col-sm-12">
                                <button type="button" class="btn btn-success btn-md addhowitwork" style="margin-left:5px"><span class="fa fa-plus"></span>Add More</button>
                                <button type="submit" class="btn btn-success btn-md">Submit</button>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>S-no</th>
                                        <th>Title</th>
                                        <th>Exceed</th>
                                        <th>Image</th>
                                        <th>Created at</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($howitworks)>0)
                                    @foreach($howitworks as $work)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$work->title}}</td>
                                        <td>{{$work->exceed}}</td>
                                        <td><img class="img img-circle" src="{{asset('images/home/'.'/'.$work->file)}}" width="100px" height="70px" /></td>
                                        <td>{{$work->created_at}}</td>
                                        <td>
                                            <i class="fa fa-trash confirm cursor-pointer" id="{{$work->id}}"></i>
                                            <form method="post" id="form_{{$work->id}}" action="{{url('how-it-work-delete')}}">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$work->id}}" />
                                                <input type="hidden" name="image" value="{{$work->file ?? ''}}" />
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="5" style="text-align: center;">
                                            <h3>No Record Found</h3>
                                        </td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <hr>
                    <!-- sell car section -->
                    <div class="section-2 pt-5 pb-5">
                        <h2>Why sell your car with Section</h2>
                    </div>
                    <form class="pt-5 pb-5" method="post" action="{{url('/why-sell-car')}}" enctype="multipart/form-data">
                        @csrf
                        @if($whycarsell)
                        <input type="hidden" name="form_type" value="Edit" />
                        <input type="hidden" name="id" value="{{$whycarsell->id}}" />
                        @else
                        <input type="hidden" name="form_type" value="Add" />
                        @endif
                        <div class="form-group row pb-5">

                            @if(isset($whycarsell) && $whycarsell->file !='')
                            <div class="col-sm-2">
                            </div>
                            <div class="col-sm-10">
                                <img class="img img-thumbnail mb-10" width="200px" height="200px" src="@if(isset($whycarsell)){{asset('images/home/'.'/'. $whycarsell->file ?? '')}}@endif" />
                            </div>
                            @endif
                            <label for="text" class="col-sm-2 col-form-label">Upload Image</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="file" @if(isset($whycarsell) && $whycarsell->id !=''){{''}}@else{{'required'}} @endif>
                            </div>

                        </div>
                        <div class="form-group row pb-5">
                            <label for="text" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="title" value="{{ $whycarsell->title ?? ''}}" placeholder="Enter Your Title" required>
                            </div>
                        </div>
                        <div class="form-group row pb-5">
                            <label for="text" class="col-sm-2 col-form-label">Paragraph</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="message" value="{{ $whycarsell->message ?? ''}}" placeholder="Enter Your Paragraph" required>
                            </div>
                        </div>
                        <br>
                        <div class=" row pb-5">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-success btn-md">Submit</button>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <div class="section-2 pt-5 pb-5">
                        <h2>Blog Section</h2>
                    </div>
                    <form class="pt-5" method="post" action="{{url('/blog-heading')}}">
                        @csrf
                        @if(isset($blogheading))
                        <input type="hidden" name="form_type" value="Edit" />
                        <input type="hidden" name="id" value="{{$blogheading->id}}" />
                        @else
                        <input type="hidden" name="form_type" value="Add" />
                        @endif
                        <div class="form-group row pb-5">
                            <label for="text" class="col-sm-2 col-form-label">Header</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="header" id="blog-header" placeholder="header" value="{{ $blogheading->header ?? ''}}" required>
                            </div>
                        </div>
                        <div class="form-group row pb-5">
                            <label for="text" class="col-sm-2 col-form-label">Sub Header</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="sub_header" id="blog-sub-header" placeholder="sub header" value="{{ $blogheading->sub_header ?? ''}}" required>
                            </div>
                        </div>

                        <div class=" row pb-5">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-success btn-md">Submit</button>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <div class="section-2 pt-5 pb-5">
                        <h2>Testominal Section</h2>
                    </div>
                    <form class="pt-5" method="post" action="{{url('/testominal')}}" enctype="multipart/form-data">
                        @csrf
                        <div id="testominal">
                            <div class="row">
                                <div class="form-group row pb-5">
                                    <label for="file" class="col-sm-2 col-form-label">Upload image</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="file[]" required>
                                    </div>
                                </div>
                                <div class="form-group row pb-5">
                                    <label for="text" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="title[]" placeholder="Enter Your Title">
                                    </div>
                                </div>
                                <div class="form-group row pb-5">
                                    <label for="text" class="col-sm-2 col-form-label">Review</label>
                                    <div class="col-sm-10">
                                        <input type="number" min="1" max="5" class="form-control" name="review[]" placeholder="Review">
                                    </div>
                                </div>
                                <div class="form-group row pb-5">
                                    <label for="text" class="col-sm-2 col-form-label">Paragraph</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="paragraph[]" placeholder="Enter Your Paragraph">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class=" row pb-5">
                            <div class="col-sm-12">
                                <button type="button" class="btn btn-success btn-md addtestominal"><span class="fa fa-plus"></span> Add More</button>
                                <button type="submit" class="btn btn-success btn-md">Submit</button>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>S-no</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Review</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($testominals)>0)
                                    @foreach($testominals as $test)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td><img src="{{asset('images/testominal/'.'/'.$test->image)}}" width="100px" height="100px" /></td>
                                        <td>{{$test->title}}</td>
                                        <td>{{$test->paragraph}}</td>
                                        <td>{{$test->review}}</td>
                                        <td><i class="fa fa-trash confirm cursor-pointer" id="{{$test->id}}"></i></td>
                                        <form method="post" id="form_{{$test->id}}" action="{{url('testominal-delete')}}">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$test->id}}" />
                                            <input type="hidden" name="image" value="{{$test->image ?? ''}}" />
                                        </form>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="5" style="text-align: center;">
                                            <h3>No Testominals Found!</h3>
                                        </td>
                                    </tr>
                                    @endif
                                </tbody>

                            </table>
                        </div>
                    </div>
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
    //add how it work button
    $(".addhowitwork").on('click', function() {
        $("#howitwokrs").append(`<div class="row">
                                <div class="form-group row pb-5">
                                    <label for="text" class="col-sm-2 col-form-label">Upload File</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="file[]">
                                    </div>
                                </div>
                                <div class="form-group row pb-5">
                                    <label for="text" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="title[]" placeholder="Enter Your Title">
                                    </div>
                                </div>
                                <div class="form-group row pb-5">
                                    <label for="text" class="col-sm-2 col-form-label">Exceed</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="exceed[]" placeholder="Enter Your Exceed">
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <div class="col-sm-2">
                                    <button type="button" class="btn btn-danger removehowwork"><span class="fa fa-minus"></span></button>
                                    </div>
                                 </div>
                            </div>`);
    })
    $(document).on('click', ".removehowwork", function() {
        $(this).parent().parent().parent().remove();
    })

    //add more button for testominal
    $(".addtestominal").on('click', function() {
        $("#testominal").append(`<div class="row">
                                <div class="form-group row pb-5">
                                    <label for="file" class="col-sm-2 col-form-label">Upload image</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="file[]">
                                    </div>
                                </div>
                                <div class="form-group row pb-5">
                                    <label for="text" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="title[]" placeholder="Enter Your Title">
                                    </div>
                                </div>
                                <div class="form-group row pb-5">
                                    <label for="text" class="col-sm-2 col-form-label">Review</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="review[]" placeholder="Review">
                                    </div>
                                </div>
                                <div class="form-group row pb-5">
                                    <label for="text" class="col-sm-2 col-form-label">Paragraph</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="paragraph[]" placeholder="Enter Your Paragraph">
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <div class="col-sm-2">
                                    <button type="button" class="btn btn-danger removetestominal"><span class="fa fa-minus"></span></button>
                                    </div>
                                 </div>
                            </div>`);
    })
    $(document).on('click', ".removetestominal", function() {
        $(this).parent().parent().parent().remove();
    })
</script>
@endsection