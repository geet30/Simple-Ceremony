@extends('layouts.app')
@section('content')
<div class="container-fluid">
<div class="row">
   <div class="col-2 col-md-3 col-lg-2 px-0">
      @include('elements.celebrant.celebrant-sidebar')
   </div>
   <div class="col-10 col-md-9 col-lg-10 px-md-4">
      @include('elements.celebrant.panel-header')
      <a href="/calendar" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-30"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
      <div class="row">
         <div class="col-12">
            <div class="card d panel-card ">
               <div class="card-body">
                  <h1 class="h3 neutral-100 mb-4 align-self-center">Set your standard hours</h1>
                  <div class="d-flex align-self-center w-100">
                     <ul class=" calendar-btn nav nav-pills d-flex align-self-center mb-3 mt-3" id="pills-tab" role="tablist">
                        <li class="nav-item  me-3" role="presentation">
                           <button class="nav-link active theme-btn primary-btn d-flex justify-content-center" id="rolling-tab" data-bs-toggle="pill" data-bs-target="#rolling" type="button" role="tab" aria-controls="rolling" aria-selected="true">
                           Rolling  Repeat form
                           </button>
                        </li>
                        <li class="nav-item  " role="presentation">
                           <button class="nav-link theme-btn primary-btn-border" id="override-tab" data-bs-toggle="pill" data-bs-target="#override" type="button" role="tab" aria-controls="override" aria-selected="false">
                           Override form
                           </button>
                        </li>
                     </ul>
                     <div class="align-self-center ms-3 info-icon">
                        <a href="" class="theme-tip"><img src="/images/icons/Info-light.svg" class="img-fluid"><span>Override is to make certain time and
                        dates not available, for example to go on holiday</span></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row pt-31">
         <div class="col-12">
            <div class="tab-content" id="pills-tabContent">
               <div class="tab-pane fade show active" id="rolling" role="tabpanel" aria-labelledby="rolling-tab" tabindex="0">
               @include('elements.celebrant.calander.rolling')
               </div>
               <!-- override -->
               <div class="tab-pane fade" id="override" role="tabpanel" aria-labelledby="override-tab" tabindex="1">
               @include('elements.celebrant.calander.override')
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

@endsection