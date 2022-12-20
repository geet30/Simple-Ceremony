@extends('layouts.panels')


@section('content')
<div class="container-fluid">
<div class="row">
   <div class="col-2 col-md-3 col-lg-2 px-0">
      @include('elements.celebrant.celebrant-sidebar')
   </div>
   <div class="col-10 col-md-9 col-lg-10 px-md-4">
      @include('elements.common.panel-header')
      @if (\Session::has('message'))
            <div class="alert {{\Session::get('class')}}">
                  <ul class="mb-0"> <li>{!! \Session::get('message') !!}</li></ul>
            </div>
         @endif
      <div class="row pt-31 mb-4">
         <div class="col-md-8 col-xl-9 d-flex align-self-center">
            <div class="align-self-center col-md-4 col-lg-3 col-xl-3 col-xxl-2 d-grid mt-3 me-2 mt-md-0 position-relative">
               <div class="dropdown filter-date-calendar-dropdown">
                  <a role="button" class="theme-btn primary-btn-border d-inline-flex align-items-center text-nowrap" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"><img src="/images/icons/green-calendar.svg" class="me-3" alt="calendar"> Filter by date</a>
                  <div class="dropdown-menu p-4 filter_date_div">
                     <div class="filter-date-calendar">
                        <div class="row">
                         
                        </div>
                        <div class="calendar-wrapper" id="calendar-wrapper"></div>
                        <input type="hidden" name="booking_date" class="booking_date">
                        <a onclick="SearchMultipleFilter('search-marriage-by-date')" class="theme-btn primary-btn d-inline-block mt-3">Filter</a>
                     </div>
                  </div>
                </div>
            </div>
            <div class="form-group has-search w-100 ms-4 position-relative">
                <input type="text" class="form-control" placeholder="Search couple name">
               <span class="fa fa-search form-control-feedback"></span>
            </div>
         </div>
         <div class="align-self-center col-md-4 col-xl-3 d-grid mt-3 mt-md-0">
            <a class="theme-btn primary-btn d-flex justify-content-center" data-bs-toggle="offcanvas" data-bs-target="#add-certificate-register" aria-controls="add-certificate-register"> <img class="me-2" src="/images/icons/add.svg" alt="shopping-icon"> Add Marriage Certificate</a>

         </div>
      </div>
      
        <div class="row pt-4">
     
            <div class="col-12">
                <div class="table-responsive celebrantRegister searchResult" id="celebrantRegister">
                  @include('elements.celebrant.certificate-register.listing')
                 
                </div>
            </div>
        </div>
   </div>
</div>
@include('celebrant.certificate-register.add')
@include('celebrant.certificate-register.edit')
@include('celebrant.certificate-register.js')
@endsection

