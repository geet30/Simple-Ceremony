@extends('layouts.panels')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
         @include('elements.common.admin-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-4">
         @include('elements.common.panel-header')
         @include('admin.financial-report.filter')
       
         <ul class="row add-on-list-nav p-0 mb-0 list-unstyled mb-2 mt-2">
            <li class="col-md-6 col-lg-4 col-xl-4 col-xxl-4 mb-3">
               <div class="nav-link">
                  <div class="add-ons-nav d-flex">
                     <div class="add-ons-nav-image me-4">
                        <img src="/images/admin/partner/report-user.svg" alt="All add-ons">
                     </div>
                     <div class="add-ons-nav-data text-start ">
                        <h3 class="h3">$2,269,097</h3>
                        <p class="subheader-2">Total Revenue</p>
                     </div>
                  </div>
               </div>
            </li>
            <li class="col-md-6 col-lg-4 col-xl-4 col-xxl-4 mb-3">
               <div class="nav-link">
                  <div class="add-ons-nav d-flex">
                     <div class="add-ons-nav-image me-4">
                        <img src="/images/admin/partner/report-location.svg" alt="All add-ons">
                     </div>
                     <div class="add-ons-nav-data text-start ">
                        <h3 class="h3">$2,199,920</h3>
                        <p class="subheader-2">Total Costs</p>
                     </div>
                  </div>
               </div>
            </li>
            <li class="col-md-6 col-lg-4 col-xl-4 col-xxl-4 mb-3">
               <div class="nav-link">
                  <div class="add-ons-nav d-flex">
                     <div class="add-ons-nav-image me-4">
                        <img src="/images/admin/partner/booking-performed.svg" alt="All add-ons">
                     </div>
                     <div class="add-ons-nav-data text-start ">
                        <h3 class="h3">$69,177</h3>
                        <p class="subheader-2">Total Margin</p>
                     </div>
                  </div>
               </div>
            </li>
         </ul>
         <div class="row">
            <div class="col-md-12">
               <div class="table-responsive financialReportListing" id="financialReportListing">
                  @include('elements.admin.financial-report.listing')
                 
               </div>
            </div>
         </div>
      </div>
   </div>
   @include('elements.common.calander')
   @endsection