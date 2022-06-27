@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-md-3 col-lg-2">
         @include('elements.admin-sidebar')
      </div>
      <div class="col-md-9 col-lg-10">
         <div class="row">
            <div class="col-12 mb-30">
               <a href="/admin/location" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
            </div>
            <div class="col-12 mb-30">
               <div class="row">
                  <div class="col-md-8 col-xl-9">
                     <ul class="nav  theme-tabs">
                        <li class="nav-item">
                           <a class="nav-link active" id="information-tab" data-bs-toggle="tab" data-bs-target="#information" href="#">Information</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " id="celebrants-tab" data-bs-toggle="tab" data-bs-target="#celebrants" href="#">List of marriage celebrants <span>(12)</span></a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-md-4 col-xl-3">
                     <a class="theme-btn primary-btn d-flex justify-content-center">
                     <img class="me-2" src="/images/icons/edit.svg" alt="shopping-icon">
                     Edit information
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-12">
            <div class="tab-content" id="tabContent">
            <div class="tab-pane fade show active" id="information" role="tabpanel" aria-labelledby="information-tab">
               <div class="row">
               <div class="row align-items-center">
         <div class="col-md-6 ">
            <div class="slider slider-for mb-11 location-detail-slider">
               <div>
                  <img src="/images/single-location/single-page-slider1.png" class="w-100 img-fluid" alt="slider Image">
               </div>
               <div>
                  <img src="/images/single-location/single-page-slider2.png" class="w-100 img-fluid" alt="slider Image">
               </div>
               <div>
                  <img src="/images/single-location/single-page-slider3.png" class="w-100 img-fluid" alt="slider Image">
               </div>
               <div>
                  <img src="/images/single-location/single-page-slider4.png" class="w-100 img-fluid" alt="slider Image">
               </div>
            </div>
            <div class="slider slider-nav">
               <div>
                  <img src="/images/single-location/single-page-slider1.png" class="w-100 img-fluid" alt="slider Image">
               </div>
               <div>
                  <img src="/images/single-location/single-page-slider2.png" class="w-100 img-fluid" alt="slider Image">
               </div>
               <div>
                  <img src="/images/single-location/single-page-slider3.png" class="w-100 img-fluid" alt="slider Image">
               </div>
               <div>
                  <img src="/images/single-location/single-page-slider4.png" class="w-100 img-fluid" alt="slider Image">
               </div>
            </div>
         </div>
         <div class="col-md-6 col-xl-5">
         <p class="paragraph netural-100">$350</p>
            <h1 class="mb-5">
             
               <span class="h1 netural-100">Kissing Point Park, under the fish Yaralla Road, Putney</span>
            </h1>
            
         </div>
      </div>
               </div>
            </div>
            <div class="tab-pane fade" id="celebrants" role="tabpanel" aria-labelledby="celebrants-tab">3</div>
               <div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection