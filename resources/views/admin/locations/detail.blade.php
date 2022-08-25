@extends('layouts.panels')
@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-2 col-md-3 col-lg-2 px-0">
   @include('elements.admin-sidebar')
</div>
<div class="col-10 col-md-9 col-lg-10 px-4">
@include('elements.panel-header')
   <div class="row">
      <div class="col-12 mb-30">
         <a href="/locations/all-packages" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back </a>
      </div>
         @if (\Session::has('message'))
               <div class="alert {{\Session::get('class')}}">
                     <ul> <li>{!! \Session::get('message') !!}</li></ul>
               </div>
         @endif
      <div class="col-12 mb-30">
         <div class="row">
            <div class="col-lg-8 col-xl-9 mb-3 mb-lg-0">
               <ul class="nav  theme-tabs">
                  <li class="nav-item">
                     <a class="nav-link active" id="information-tab" data-bs-toggle="tab" data-bs-target="#information" href="#">Information</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link " id="celebrants-tab" data-bs-toggle="tab" data-bs-target="#celebrants" href="#"  >List of marriage celebrants <span>({{count($celebrants_locations)}})</span></a>
                  </li>
               </ul>
            </div>
            <div class="col-lg-4 col-xl-3 editinformation d-block">
               <a href="{{route('locations.edit',$data['id'])}}" class="theme-btn primary-btn d-flex justify-content-center ">
               <img class="me-2" src="/images/icons/edit.svg" alt="shopping-icon">
               Edit information
               </a>
            </div>
            <div class="col-lg-4 col-xl-3 addmarriage d-none">
               <a  data-bs-toggle="offcanvas" data-bs-target="#offcanvaslocationcelebrants" aria-controls="offcanvaslocationcelebrants" class="theme-btn primary-btn d-flex justify-content-center ">
               <img class="me-2" src="/images/icons/add.svg" alt="shopping-icon">
               Add marriage celebrants
               </a>
            </div>
         </div>
      </div>
      <div class="col-12">
         <div class="tab-content" id="tabContent">
            <div class="tab-pane fade show active" id="information" role="tabpanel" aria-labelledby="information-tab">
               @include('elements.admin.location.location_information')
            </div>
            <!--  -->
            <div class="tab-pane fade" id="celebrants" role="tabpanel" aria-labelledby="celebrants-tab">
            @include('elements.admin.location.location_celebrants')
            </div>
            <div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('elements.admin.location.js')
@include('elements.admin.location.addmarriage-celebrant')
@endsection