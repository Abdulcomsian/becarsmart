@extends('layouts.dashboard.master',['title' => 'leads details'])
@section('styles')
@include('layouts.sweetalert.sweetalert_css')

<style>
    .view-btn {
        float: right;
    }
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
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
                                <td class="">{{$lead->fullname ?? ''}}</td>
                                <td class="">{{$lead->email ?? ''}}</td>
                                <td class="">{{$lead->phone ?? ''}}</td>
                                <td class="">{{$lead->model_no}}</td>
                                <td class="">{{$lead->color ?? ''}}</td>
                                <td class="">{{$lead->engine ?? ''}}</td>
                            </tr>
                        </tbody>
                        <!--end::Table body-->
                    </table><br><br>
                    <!--end::Table-->

                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <th class="min-w-125px">Registration Number</th>
                                <th class="min-w-125px">Make</th>
                                <th class="min-w-125px">Euro Status</th>
                                <th class="min-w-125px">Engine Capacity</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::2 Table body-->
                        <tbody class="text-gray-600 fw-bold">
                            <tr>
                                <td class="">{{$lead->registration ?? ''}}</td>
                                <td class="">{{$lead->make ?? ''}}</td>
                                <td class="">{{$lead->euroStatus ?? ''}}</td>
                                <td class="">{{$lead->CylinderCapacity ?? ''}}</td>
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
                                        <div class="step-1-main">
                                            <div class="mt-5 mb-5">
                                                <h2>Lead Details</h2>
                                            </div>
                                            <table id="example" class="table table-striped" style="width:100%">
                                                <tbody>
                                                    <tr>
                                                        <td><b>What is the mileage?</b></td>
                                                        <td>{{$lead->mileage}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>How many sets of keys do you have for this vehicle?</b></td>
                                                        <td>@if($lead->set_of_keys==1){{'1'}}@else{{'2 or more'}}@endif</td>
                                                    </tr> 
                                                    <tr>
                                                        <td><b>Service History</b></td>
                                                        <td>{{$lead->service_history}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Transmission</b></td>
                                                        <td>{{$lead->transmission}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Any outstanding finance?</b></td>
                                                        <td>{{$lead->finance}}</td>
                                                    </tr>
                                                    <!-- <tr>
                                                        <td><b>Is the vehicle a non-runner?</b></td>
                                                        <td>@if($lead->non_runner==1){{'Yes'}}@else{{'No'}}@endif</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>How many sets of keys do you have for this vehicle?</b></td>
                                                        <td>@if($lead->set_of_keys==1){{'1'}}@else{{'2 or more'}}@endif</td>
                                                    </tr> -->
                                                    <tr>
                                                        <td><b>How many months untill the vehicle is due its MOT?</b></td>
                                                        <td>{{$lead->mot_due ?? ''}}</td>
                                                    </tr>
                                                    <!-- <tr>
                                                        <td><b>Any mechanical faults with the car?</b></td>
                                                        <td>{{$lead->comments ?? ''}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Gearbox Condition</b></td>
                                                        <td>{{$lead->gearbox_condition ?? ''}}</td>
                                                    </tr> -->
                                                    <tr>
                                                        <td><b>Any mechanical faults with the car?</b></td>
                                                        <td>@if($lead->gearbox_condition==1){{'Yes'}}@else{{'No'}}@endif</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Mechanical fault comments</b></td>
                                                        <td>{{$lead->gearbox_comments ?? ''}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Any Warning lights or messages on the dash?</b></td>
                                                        <td>@if($lead->warning_light==1){{'Yes'}}@else{{'No'}}@endif</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b> Warning lights Comments</b></td>
                                                        <td>{{$lead->warning_comments ?? ''}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>How would you describe the bodywork of this vehicle?</b></td>
                                                        <td>@if($lead->vehicle_bodywork==1){{'Good'}}@elseif($lead->vehicle_bodywork==2){{'Average'}}@elseif($lead->vehicle_bodywork==3){{'Poor'}}@elseif($lead->vehicle_bodywork==4){{'Very bad'}}@else{{'Excellent'}}@endif</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b> What is the condition of this vehicle? Please select one:</b></td>
                                                        <td>@if($lead->vehicle_condtion==1){{'Good'}}@elseif($lead->vehicle_condtion==2){{'Average'}}@elseif($lead->vehicle_condtion==3){{'Poor'}}@elseif($lead->vehicle_condtion==4){{'Very bad'}}@else{{'Excellent'}}@endif</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b> Feel free to give us more information on this vehicle. The more we know about your vehicle means the more accurate we will be with the valuation:</b></td>
                                                        <td>{{$lead->more_info ?? ''}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>How would you describe the interior of this vehicle?</b></td>
                                                        <td>@if($lead->vehicle_interior==1){{'Good'}}@elseif($lead->vehicle_interior==2){{'Average'}}@elseif($lead->vehicle_interior==3){{'Poor'}}@elseif($lead->vehicle_interior==4){{'Very bad'}}@else{{'Excellent'}}@endif</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>What is condition of the alloys?</b></td>
                                                        <td>@if($lead->alloys_condtion==1){{'Good'}}@elseif($lead->alloys_condtion==2){{'Average'}}@elseif($lead->alloys_condtion==3){{'Poor'}}@elseif($lead->alloys_condtion==4){{'Very bad'}}@else{{'Excellent'}}@endif</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>When are you planning to sell your car:</b></td>
                                                        <td>@if($lead->vehicle_sell_planning==1){{'Within a week'}}@elseif($lead->vehicle_sell_planning==2){{'within a month'}}@elseif($lead->vehicle_sell_planning==3){{'Not sure'}}@else{{'As soon as I can'}}@endif</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <br><br>
                                        <div class="step-1-main">
                                            <div class="mt-5 mb-5">
                                                <h2>Lead Images</h2>
                                            </div>
                                            <table id="example" class="table table-striped" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>S-no</th>
                                                        <th>Image</th>
                                                        <th>Created Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($lead->sellcarimages as $img)
                                                    <tr>
                                                        <td><b>{{$loop->index+1}}</b></td>
                                                        <td>
                                                         <div>
                                                            <img class="modal-target" alt="Img 1" src="{{asset($img->image_name)}}" />
                                                         </div>
                                                            </td>
                                                        <td>{{$img->created_at}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <!-- The Modal -->

                                        </div>
    
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
<!-- The Modal -->
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
@endsection
@section('scripts')
@include('layouts.sweetalert.sweetalert_js')
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
@endsection