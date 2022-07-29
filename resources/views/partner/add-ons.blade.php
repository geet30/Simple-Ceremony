@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-lg-2 p-0">
         @include('elements.partner.partner-sidebar')
        </div>
        <div class="col-md-9 col-lg-10 px-md-4">
            @include('elements.partner.partner-panel-header')
            <a class="theme-btn primary-btn d-inline-block mb-4" href="/add-new-package">
               <img class="me-2" src="/images/icons/add.svg" alt="shopping-icon">
               Add new packages
            </a>
            <div class="card panel-card">
               <div class="card-body">
                  <div class="row">
                     <div class="col-md-12 col-lg-12 col-xl-10 col-xxl-9">
                        <div class="row partners-details">
                           <div class="col-sm-6 col-md-6 col-lg-4 mb-5">
                              <a href="/package-details" class="text-decoration-none">
                              <div class="card image-card">
                                 <img src="/images/add-ons/v5.png" class="card-img-top mb-4" alt="location-1">
                                 <div class="card-body table-dropdown">
                                    <p class="waiting-approval p-1 px-3 d-inline-block text-decoration-none mb-0">Waiting Approval</p>
                                    <h2 class="h4 netural-100 mb-3 mb-lg-0 mt-3">The corona pack</h2>
                                 </div>
                              </div>
                              </a>
                           </div>
                           <div class="col-sm-6 col-md-6 col-lg-4 mb-5">
                              <a href="/package-details" class="text-decoration-none">
                              <div class="card image-card">
                                 <img src="/images/add-ons/add-ons-details/package2/right-2.jpg" class="card-img-top mb-4" alt="location-1">
                                 <div class="card-body table-dropdown">
                                    <p class="updated-approve p-1 px-3 d-inline-block text-decoration-none mb-0">Approved</p>
                                    <p class="approved p-1 px-3 d-inline-block text-decoration-none mb-0">Active</p>
                                    <h2 class="h4 netural-100 mb-3 mb-lg-0 mt-3">Zoom streaming pack</h2>
                                 </div>
                              </div>
                              </a>
                           </div>
                           <div class="col-sm-6 col-md-6 col-lg-4 mb-5">
                              <a href="/package-details" class="text-decoration-none">
                              <div class="card image-card">
                                 <img src="/images/add-ons/add-ons-details/left.jpg" class="card-img-top mb-4" alt="location-1">
                                 <div class="card-body table-dropdown">
                                    <p class="updated-approve p-1 px-3 d-inline-block text-decoration-none mb-0">Approved</p>
                                    <p class="rejected p-1 px-3 d-inline-block text-decoration-none mb-0">Inactive</p>
                                    <h2 class="h4 netural-100 mb-3 mb-lg-0 mt-3">Zoom streaming pack</h2>
                                 </div>
                              </div>
                              </a>
                           </div>
                           <div class="col-sm-6 col-md-6 col-lg-4 mb-5">
                              <a href="/package-details" class="text-decoration-none">
                              <div class="card image-card">
                                 <img src="/images/add-ons/add-ons-details/left.jpg" class="card-img-top mb-4" alt="location-1">
                                 <div class="card-body table-dropdown">
                                    <p class="rejected p-1 px-3 d-inline-block text-decoration-none mb-0">Rejecte</p>
                                    <h2 class="h4 netural-100 mb-3 mb-lg-0 mt-3">Intimate pack</h2>
                                 </div>
                              </div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection