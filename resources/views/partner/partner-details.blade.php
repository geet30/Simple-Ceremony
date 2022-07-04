@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-lg-2 p-0">
            @include('elements.admin-sidebar')
        </div>
        <div class="col-md-9 col-lg-10 px-md-4">
            @include('elements.panel-header')
            <a href="./all-partners" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
            <div class="card panel-card">
               <div class="card-body">
                  <h1 class="h3 netural-100 mb-4">Partner details </h1>
                  <div class="row mb-3">
                     <div class="col-md-12 mb-3 mb-lg-0">
                        <ul class="nav theme-tabs pb-1">
                           <li class="nav-item">
                              <a class="nav-link active" id="information-tab" data-bs-toggle="tab" data-bs-target="#information" href="#">Product information (3)</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" id="celebrants-tab" data-bs-toggle="tab" data-bs-target="#celebrants" href="#">Personal data</a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="tab-content" id="tabContent">
                     <div class="tab-pane fade show active" id="information" role="tabpanel" aria-labelledby="information-tab">
                        <div class="row">
                           <div class="col-md-3">
                              <a href="/single-location" class="text-decoration-none">
                              <div class="card image-card">
                                 <img src="/images/location-page/hunter_valley.png" class="card-img-top" alt="location-1">
                                 <div class="card-body">
                                    <div class="d-flex justify-content-between mb-15"> <span class="paragraph netural-100 align-self-center"> $350</span> <span class=" align-self-center"><i class="fa-regular fa-heart heart"></i></span> </div>
                                    <h2 class="h3 netural-100 mb-3 mb-lg-4"> Hunter valley</h2>
                                    <div class="card-btn-link d-flex">
                                       <div class="align-self-center">Learn more</div>
                                       <div class="align-self-center"> <img src="/images/button-arrow.svg" class="img-fluid" alt="arrow-icon"></div>
                                    </div>
                                 </div>
                              </div>
                              </a>
                           </div>
                           <div class="col-md-3">
                              <a href="/single-location" class="text-decoration-none">
                              <div class="card image-card">
                                 <img src="/images/location-page/hunter_valley.png" class="card-img-top" alt="location-1">
                                 <div class="card-body">
                                    <div class="d-flex justify-content-between mb-15"> <span class="paragraph netural-100 align-self-center"> $350</span> <span class=" align-self-center"><i class="fa-regular fa-heart heart"></i></span> </div>
                                    <h2 class="h3 netural-100 mb-3 mb-lg-4"> Hunter valley</h2>
                                    <div class="card-btn-link d-flex">
                                       <div class="align-self-center">Learn more</div>
                                       <div class="align-self-center"> <img src="/images/button-arrow.svg" class="img-fluid" alt="arrow-icon"></div>
                                    </div>
                                 </div>
                              </div>
                              </a>
                           </div>
                           <div class="col-md-3">
                              <a href="/single-location" class="text-decoration-none">
                              <div class="card image-card">
                                 <img src="/images/location-page/hunter_valley.png" class="card-img-top" alt="location-1">
                                 <div class="card-body">
                                    <div class="d-flex justify-content-between mb-15"> <span class="paragraph netural-100 align-self-center"> $350</span> <span class=" align-self-center"><i class="fa-regular fa-heart heart"></i></span> </div>
                                    <h2 class="h3 netural-100 mb-3 mb-lg-4"> Hunter valley</h2>
                                    <div class="card-btn-link d-flex">
                                       <div class="align-self-center">Learn more</div>
                                       <div class="align-self-center"> <img src="/images/button-arrow.svg" class="img-fluid" alt="arrow-icon"></div>
                                    </div>
                                 </div>
                              </div>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="celebrants" role="tabpanel" aria-labelledby="celebrants-tab">
                        two
                     </div>
                  </div>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection