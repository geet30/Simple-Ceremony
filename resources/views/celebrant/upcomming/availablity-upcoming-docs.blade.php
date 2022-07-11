@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
         @include('elements.celebrant-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-md-4">
         @include('elements.panel-header')
         <div class="col-12">
            <a href="./availablity-overview" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
         </div>
         <div class=" card panel-card mb-4">
            <div class="card-body">
               Pdf space
            </div>
            <div class="card-footer sticky-footer">
               <div class="d-lg-flex justify-content-center">
                  <div class="me-lg-2">   <a class="theme-btn primary-btn  d-inline-flex" role="button" data-bs-toggle="modal" data-bs-target="#signature">Create signature</a></div>
                  <div class=" mt-3 mt-lg-0">   <a class="theme-btn primary-btn-border d-inline-flex" role="button" >Give feedback</a></div>
               </div>
            </div>
         </div>
     
      </div>
   </div>
</div>
@include('elements.availablity-overview.signature-popup')
@endsection