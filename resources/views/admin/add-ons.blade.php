@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-lg-2 p-0">
            @include('elements.user-sidebar')
        </div>
        <div class="col-md-9 col-lg-10 px-md-4">
         <ul class="add-on-list-nav row nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item col-12 col-md-6 col-lg-3 mb-3" role="presentation">
              <button class="nav-link active w-100" id="all-ads-on-tab" data-bs-toggle="pill" data-bs-target="#all-ads-on" type="button" role="tab" aria-controls="all-ads-on" aria-selected="true">
               <div class="add-ons-nav d-flex">
                  <div class="add-ons-nav-image me-4">
                     <img src="/images/admin/add-ons/message-icon.svg" alt="All add-ons">
                  </div>
                  <div class="add-ons-nav-data">
                     <h3 class="h3">60</h3>
                     <p class="subheader-2">All add-ons</p>
                  </div>
               </div>
              </button>
            </li>
            <li class="nav-item col-12 col-md-6 col-lg-3 mb-3" role="presentation">
              <button class="nav-link w-100" id="Waiting-for-approval-tab" data-bs-toggle="pill" data-bs-target="#Waiting-for-approval" type="button" role="tab" aria-controls="Waiting-for-approval" aria-selected="false">
                 <div class="add-ons-nav d-flex">
                     <div class="add-ons-nav-image me-4">
                        <img src="/images/admin/add-ons/timer-icon.svg" alt="">
                     </div>
                     <div class="add-ons-nav-data">
                        <h3 class="h3">20</h3>
                        <p class="subheader-2">Waiting for approval</p>
                     </div>
                  </div>
               </button>
            </li>
            <li class="nav-item col-12 col-md-6 col-lg-3 mb-3" role="presentation">
              <button class="nav-link w-100" id="add-on-approved-tab" data-bs-toggle="pill" data-bs-target="#add-on-approved" type="button" role="tab" aria-controls="add-on-approved" aria-selected="false">
               <div class="add-ons-nav d-flex">
                  <div class="add-ons-nav-image me-4">
                     <img src="/images/admin/add-ons/hands.svg" alt="">
                  </div>
                  <div class="add-ons-nav-data">
                     <h3 class="h3">50</h3>
                     <p class="subheader-2">Approved</p>
                  </div>
               </div>
              </button>
            </li>
            <li class="nav-item col-12 col-md-6 col-lg-3 mb-3" role="presentation">
              <button class="nav-link w-100" id="add-on-reject-tab" data-bs-toggle="pill" data-bs-target="#add-on-reject" type="button" role="tab" aria-controls="add-on-reject" aria-selected="false">
               <div class="add-ons-nav d-flex">
                  <div class="add-ons-nav-image me-4">
                     <img src="/images/admin/add-ons/cross.svg" alt="">
                  </div>
                  <div class="add-ons-nav-data">
                     <h3 class="h3">70</h3>
                     <p class="subheader-2">Reject</p>
                  </div>
               </div>
              </button>
            </li>
          </ul>
         <div class="row">
            <div class="col-lg-8 col-xl-9 mb-3 mb-lg-0">
               <ul class="nav theme-tabs">
                  <li class="nav-item">
                     <a class="nav-link active" id="information-tab" data-bs-toggle="tab" data-bs-target="#information" href="#">Add ons</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" id="celebrants-tab" data-bs-toggle="tab" data-bs-target="#celebrants" href="#">Add-ons setting</a>
                  </li>
               </ul>
            </div>
            <div class="col-lg-4 col-xl-3">
               <a class="theme-btn primary-btn d-flex justify-content-center">
               <img class="me-2" src="/images/icons/edit.svg" alt="shopping-icon">
               Edit information
               </a>
            </div>
         </div>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="all-ads-on" role="tabpanel" aria-labelledby="all-ads-on-tab" tabindex="0">1</div>
            <div class="tab-pane fade" id="Waiting-for-approval" role="tabpanel" aria-labelledby="Waiting-for-approval-tab" tabindex="0">2</div>
            <div class="tab-pane fade" id="add-on-approved" role="tabpanel" aria-labelledby="add-on-approved-tab" tabindex="0">3</div>
            <div class="tab-pane fade" id="add-on-reject" role="tabpanel" aria-labelledby="add-on-reject-tab" tabindex="0">4</div>
          </div>
        </div>
    </div>
</div>
@endsection