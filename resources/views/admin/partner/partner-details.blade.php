@extends('layouts.panels')
@section('page-name') {{ $partner_details['user']['name'] }} @stop
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
            @include('elements.admin-sidebar')
        </div>
        <div class="col-10 col-md-9 col-lg-10 px-4">
            @include('elements.panel-header')
            <a href="{{url('partner')}}" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
            @if (\Session::has('message'))
               <div class="alert {{\Session::get('class')}}">
                     <ul class="mb-0"> <li>{!! \Session::get('message') !!}</li></ul>
               </div>
            @endif
            <div class="card panel-card">
               <div class="card-body">
                  <h1 class="h3 netural-100 mb-4">Partner details </h1>
                  <div class="row mb-3">
                     <div class="col-md-12 mb-3 mb-lg-0">
                        <ul class="nav theme-tabs pb-1">
                           <li class="nav-item">
                              <a class="nav-link active" id="information-tab" data-bs-toggle="tab" data-bs-target="#information" href="#product-information">Product information (3)</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" id="celebrants-tab" data-bs-toggle="tab" data-bs-target="#celebrants" href="#personal-data">Personal data</a>
                           </li>
                        </ul>
                        
                     </div>
                  </div>
                 
                  <div class="tab-content partners-details" id="tabContent">
                     <div class="tab-pane fade show active" id="information" role="tabpanel" aria-labelledby="information-tab">
                        @include('admin.partner.product-information')
                     </div>
                     <div class="tab-pane fade" id="celebrants" role="tabpanel" aria-labelledby="celebrants-tab">
                        @include('admin.partner.personal-data')
                     </div>
                  </div>
               </div>
            </div>
        </div>
    </div>
</div>
{{--@include('elements.admin.celebrant.celebrant-add-new-location')--}}
{@include('elements.partner.add-new-location')
@include('admin.partner.js')
@include('elements.partner.partner-edit-location')
@endsection