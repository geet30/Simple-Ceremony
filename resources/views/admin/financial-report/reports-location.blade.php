@extends('layouts.panels')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-2 col-md-3 col-lg-2 px-0">
              @include('elements.common.admin-sidebar')
          </div>
          <div class="col-10 col-md-9 col-lg-10 px-4">
           @include('elements.common.panel-header')
         <a href="{{url('financial-report')}}" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
         @include('admin.financial-report.filter')
         <div class="financialReportLocationListing"  id="financialReportLocationListing">
          
               @include('elements.admin.financial-report.location-listing')
                  
                 
         </div>
    </div>
</div>
@include('elements.common.calander')
@endsection
