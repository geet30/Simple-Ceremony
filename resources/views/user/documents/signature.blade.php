@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
   <div class="col-md-3 col-lg-2 p-0">
         @include('elements.user-sidebar')
      </div>
      <div class="col-md-9 col-lg-10 px-md-4">
         @include('elements.user-header')
         <div class="col-12">
            <a href="./documents" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
         </div>
         <div class=" card panel-card mb-4">
            <div class="card-body">
              <img src="/images/pdf.png" class="img-fluid" alt="demo-pdf">
            </div>
            <div class="card-footer sticky-footer">
               <div class="d-lg-flex justify-content-center">
                  <div class="me-lg-2">   <a class="theme-btn primary-btn  d-inline-flex" role="button" data-bs-toggle="modal" data-bs-target="#signature">Create signature</a></div>
                  <div class=" mt-3 mt-lg-0">   <a href="./edit-signature" class="theme-btn primary-btn-border d-inline-flex" role="button" >Save</a></div>
               </div>
            </div>
         </div>
     
      </div>
   </div>
</div>
@include('elements.availablity-overview.signature-popup')
@endsection