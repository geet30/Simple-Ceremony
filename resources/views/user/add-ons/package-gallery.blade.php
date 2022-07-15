@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-md-3 col-lg-2 p-0">
        @include('elements.user-sidebar')
      </div>
      <div class="col-md-9 col-lg-10 px-md-4">
        @include('elements.user-header')
         <a href="/user/package-details" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
         <div class="card panel-card">
            <div class="card-body">
               <section class="pt-40  mb-5 add-ons-detail">
                     <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-5 mb-3">
                           <img src="/images/add-ons/add-ons-details/left.jpg" alt="addons-photos" class="img-fluid gallery-img">
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-5 mb-3">
                           <img src="/images/add-ons/add-ons-details/right-1.jpg" alt="addons-photos" class="img-fluid gallery-img">
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-5 mb-3">
                           <img src="/images/add-ons/add-ons-details/right-2.jpg" alt="addons-photos" class="img-fluid gallery-img">
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-5 mb-3">
                           <img src="/images/add-ons/add-ons-details/right-3.jpg" alt="addons-photos" class="img-fluid gallery-img">
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-5 mb-3">
                           <div class="video-wrapper">
                              <div class="video-container" id="video-container">
                                 <video controls width="100%" height="300px" id="video" preload="metadata" poster="/images/add-ons/add-ons-details/right-4.jpg">
                                    <source src="//cdn.jsdelivr.net/npm/big-buck-bunny-1080p@0.0.6/video.mp4" type="video/mp4">
                                 </video>
                                 <div class="play-button-wrapper">
                                    <div title="Play video" class="play-gif" id="circle-play-b">
                                       <img src="/images/play-icon.svg" class="img-fluid  play-icon w-20" alt="add-ons-image " >
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-5 mb-3">
                           <img src="/images/add-ons/add-ons-details/package2/right-3.jpg" alt="addons-photos" class="img-fluid gallery-img">
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-5 mb-3">
                           <img src="/images/add-ons/add-ons-details/package2/right-2.jpg" alt="addons-photos" class="img-fluid gallery-img">
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-5 mb-3">
                           <img src="/images/add-ons/add-ons-details/right-1.jpg" alt="addons-photos" class="img-fluid gallery-img">
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-5 mb-3">
                           <img src="/images/add-ons/add-ons-details/right-2.jpg" alt="addons-photos" class="img-fluid gallery-img">
                        </div>
                     </div>
               </section>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection