@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
   <div class="col-2 col-md-3 col-lg-2 p-0">
         @include('elements.user-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-md-4">
         @include('elements.user-header')
         <div class="col-12">
            <a href="/user/documents" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
         </div>
         <div class=" card panel-card mb-4">
            <div class="card-body">
              <img src="/images/pdf.png" class="img-fluid" alt="demo-pdf">
            </div>
            <div class="card-footer sticky-footer">
                <div class=" mt-3 mt-lg-0">   <a href="/user/signature" class="theme-btn primary-btn d-inline-flex" role="button" >Edit</a></div>
             
            </div>
         </div>
     
      </div>
   </div>
</div>
@include('elements.availablity-overview.signature-popup')
@endsection