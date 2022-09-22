@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-md-3 col-lg-2 p-0">
         @include('elements.common.user-sidebar')
      </div>
      <div class="col-md-9 col-lg-10 px-md-4">
         @include('elements.user-header')
         <a href="/user/index" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
         <div class="card panel-card">
            <div class="card-body">
               <section class="pt-40  mb-5 add-ons-detail">
                     <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-5 mb-3">
                           <img src="/images/user/add-ons-1.png" alt="addons-photos" class="img-fluid gallery-img">
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-5 mb-3">
                           <img src="/images/user/add-ons-2.png" alt="addons-photos" class="img-fluid gallery-img">
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-5 mb-3">
                           <img src="/images/user/add-ons-3.png" alt="addons-photos" class="img-fluid gallery-img">
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-5 mb-3">
                           <img src="/images/user/add-ons-4.png" alt="addons-photos" class="img-fluid gallery-img">
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-5 mb-3">
                           <img src="/images/user/add-ons-5.png" alt="addons-photos" class="img-fluid gallery-img">
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-5 mb-3">
                           <img src="/images/user/add-ons-6.png" alt="addons-photos" class="img-fluid gallery-img">
                        </div>
                     </div>
               </section>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection