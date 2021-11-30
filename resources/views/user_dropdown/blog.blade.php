@extends('layouts.dashboard.master',['title' => 'Blog'])
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
                <div class="card-body pt-5 ">

                    <div class="add-new-btn" style="float:right" style="padding-bottom:10%">
                        <a class="btn btn-danger" href="/add-blog"> Add new </a>
                    </div>

                    <div class="blog-table">
                        <table class="table table-striped ">
                            <thead>
                                <tr>
                                    <th scope="col"><b>Id</b></th>
                                    <th scope="col"><b>Image</b></th>
                                    <th scope="col"><b>Title</b></th>
                                    <th scope="col"><b>Exceed</b></th>
                                    <th scope="col"><b>Action</b></th>

                                </tr>
                            </thead>
                            <tbody>
                                @if($blogs)
                                @foreach($blogs as $blog)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>
                                        @if(isset($blog->feature_img))
                                        <img src="{{asset('images/blogs/'.'/'.$blog->feature_img ?? '')}}" width="150px" height="150px" class="img img-circle img-responsive" />
                                        @else
                                        <i class="fa fa-camera-retro fa-2x"></i>
                                        @endif
                                    </td>
                                    <td>{{$blog->title}}</td>
                                    <td>{{$blog->exceed}}</td>
                                    <td>
                                        <a href="{{url('blog-edit',$blog->id)}}"><button class="btn btn-primary">edit</button></a>
                                        <button class="btn btn-danger confirm" id="{{$blog->id}}">delete</button>
                                        <form method="post" id="form_{{$blog->id}}" action="{{url('blog-delete')}}">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$blog->id}}" />
                                            <input type="hidden" name="image" value="{{$blog->feature_img ?? ''}}" />
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td>No Record Found!</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
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
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
@endsection