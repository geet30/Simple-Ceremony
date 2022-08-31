@extends('layouts.panels')
@section('content')
<div class="container-fluid">
<div class="row">
   <div class="col-2 col-md-3 col-lg-2 px-0">
      @include('elements.admin-sidebar')
   </div>
   <div class="col-10 col-md-9 col-lg-10 px-4">
      @include('elements.panel-header')
      <ul class="add-on-list-nav row nav nav-pills mb-3 mt-3">
         <li class="nav-item col-12 col-md-6 col-lg-6  col-xl-4 col-xxl nav-item  mb-3" role="presentation">
            <button class="nav-link w-100 active" id="all-ads-on-tab" data-bs-toggle="pill" data-bs-target="#all-ads-on" type="button" role="tab" aria-controls="all-ads-on" aria-selected="true">
               <div class="add-ons-nav d-flex">
                  <div class="add-ons-nav-image me-4">
                     <img src="/images/admin/partner/booking-performed.svg" alt="All marriages">
                  </div>
                  <div class="add-ons-nav-data text-start ">
                     <h3 class="h3">465</h3>
                     <p class="subheader-2 d-none d-md-block">All marriages</p>
                  </div>
               </div>
               <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">All marriages</p>
            </button>
         </li>
         <li class="nav-item col-12 col-md-6 col-lg-6  col-xl-4 col-xxl nav-item  mb-3" role="presentation">
            <button class="nav-link w-100" id="Waiting-for-approval-tab" data-bs-toggle="pill" data-bs-target="#Waiting-for-approval" type="button" role="tab" aria-controls="Waiting-for-approval" aria-selected="false">
               <div class="add-ons-nav d-flex">
                  <div class="add-ons-nav-image me-4">
                     <img src="/images/admin/add-ons/timer-icon.svg" alt="">
                  </div>
                  <div class="add-ons-nav-data text-start ">
                     <h3 class="h3">50</h3>
                     <p class="subheader-2 d-none d-md-block">Pending</p>
                  </div>
               </div>
               <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">Pending</p>
            </button>
         </li>
         <li class="nav-item col-12 col-md-6 col-lg-6  col-xl-4 col-xxl nav-item  mb-3" role="presentation">
            <button class="nav-link w-100" id="add-on-approved-tab" data-bs-toggle="pill" data-bs-target="#add-on-approved" type="button" role="tab" aria-controls="add-on-approved" aria-selected="false">
               <div class="add-ons-nav d-flex">
                  <div class="add-ons-nav-image me-4">
                     <img src="/images/marriage-celebrant/icons/booking.svg" alt="">
                  </div>
                  <div class="add-ons-nav-data text-start ">
                     <h3 class="h3">50</h3>
                     <p class="subheader-2 d-none d-md-block">Booked</p>
                  </div>
               </div>
               <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">Booked</p>
            </button>
         </li>
         <li class="nav-item col-12 col-md-6 col-lg-6  col-xl-4 col-xxl nav-item  mb-3" role="presentation">
            <button class="nav-link w-100" id="add-on-reject-tab" data-bs-toggle="pill" data-bs-target="#add-on-reject" type="button" role="tab" aria-controls="add-on-reject" aria-selected="false">
               <div class="add-ons-nav d-flex">
                  <div class="add-ons-nav-image me-4">
                     <img src="/images/marriage-celebrant/icons/lodged.svg" alt="Lodged">
                  </div>
                  <div class="add-ons-nav-data text-start ">
                     <h3 class="h3">20</h3>
                     <p class="subheader-2 d-none d-md-block">Lodged</p>
                  </div>
               </div>
               <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">Lodged</p>
            </button>
         </li>
         <li class="nav-item col-12 col-md-6 col-lg-6  col-xl-4 col-xxl nav-item  mb-3" role="presentation">
            <button class="nav-link w-100" id="add-on-reject-tab" data-bs-toggle="pill" data-bs-target="#add-on-reject" type="button" role="tab" aria-controls="add-on-reject" aria-selected="false">
               <div class="add-ons-nav d-flex">
                  <div class="add-ons-nav-image me-4">
                     <img src="/images/marriage-celebrant/icons/document.svg" alt="Lodged pending">
                  </div>
                  <div class="add-ons-nav-data text-start ">
                     <h3 class="h3">10</h3>
                     <p class="subheader-2 d-none d-md-block">Lodged pending</p>
                  </div>
               </div>
               <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">Lodged pending</p>
            </button>
         </li>
      </ul>
      <div class="collapse" id="collapseExample">
         <ul class="add-on-list-nav row nav nav-pills  upcomming-marriage-pills">
            <li class="nav-item col-12 col-md-6 col-lg-6  col-xl-4 col-xxl nav-item  mb-3" role="presentation">
               <button class="nav-link w-100 active" id="all-ads-on-tab" data-bs-toggle="pill" data-bs-target="#all-ads-on" type="button" role="tab" aria-controls="all-ads-on" aria-selected="true">
                  <div class="add-ons-nav d-flex">
                     <div class="add-ons-nav-image me-4">
                        <img src="/images/marriage-celebrant/icons/married.svg" alt="Married">
                     </div>
                     <div class="add-ons-nav-data text-start ">
                        <h3 class="h3">190</h3>
                        <p class="subheader-2 d-none d-md-block">Married</p>
                     </div>
                  </div>
                  <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">Married</p>
               </button>
            </li>
            <li class="nav-item col-12 col-md-6 col-lg-6  col-xl-4 col-xxl nav-item  mb-3" role="presentation">
               <button class="nav-link w-100" id="Waiting-for-approval-tab" data-bs-toggle="pill" data-bs-target="#Waiting-for-approval" type="button" role="tab" aria-controls="Waiting-for-approval" aria-selected="false">
                  <div class="add-ons-nav d-flex">
                     <div class="add-ons-nav-image me-4">
                        <img src="/images/marriage-celebrant/icons/registered.svg" alt="Registered">
                     </div>
                     <div class="add-ons-nav-data text-start ">
                        <h3 class="h3">80</h3>
                        <p class="subheader-2 d-none d-md-block">Registered</p>
                     </div>
                  </div>
                  <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">Registered</p>
               </button>
            </li>
            <li class="nav-item col-12 col-md-6 col-lg-6  col-xl-4 col-xxl nav-item  mb-3" role="presentation">
               <button class="nav-link w-100" id="add-on-reject-tab" data-bs-toggle="pill" data-bs-target="#add-on-reject" type="button" role="tab" aria-controls="add-on-reject" aria-selected="false">
                  <div class="add-ons-nav d-flex">
                     <div class="add-ons-nav-image me-4">
                        <img src="/images/marriage-celebrant/icons/finalised.svg" alt="Finalised">
                     </div>
                     <div class="add-ons-nav-data text-start ">
                        <h3 class="h3">50</h3>
                        <p class="subheader-2 d-none d-md-block">Finalised</p>
                     </div>
                  </div>
                  <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">Finalised</p>
               </button>
            </li>
            <li class="nav-item col-12 col-md-6 col-lg-6  col-xl-4 col-xxl nav-item  mb-3" role="presentation">
               <button class="nav-link w-100" id="add-on-reject-tab" data-bs-toggle="pill" data-bs-target="#add-on-reject" type="button" role="tab" aria-controls="add-on-reject" aria-selected="false">
                  <div class="add-ons-nav d-flex">
                     <div class="add-ons-nav-image me-4">
                        <img src="/images/marriage-celebrant/icons/cancelled.svg" alt="Cancelled">
                     </div>
                     <div class="add-ons-nav-data text-start ">
                        <h2 class="h3">10</h2>
                        <p class="subheader-2 d-none d-md-block" >Cancelled</p>
                     </div>
                  </div>
                  <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">Cancelled</p>
               </button>
            </li>
            <li class="nav-item col-12 col-md-6 col-lg-6  col-xl-4 col-xxl nav-item  mb-3" role="presentation">
               <button class="nav-link w-100" id="add-on-approved-tab" data-bs-toggle="pill" data-bs-target="#add-on-approved" type="button" role="tab" aria-controls="add-on-approved" aria-selected="false">
                  <div class="add-ons-nav d-flex">
                     <div class="add-ons-nav-image me-4">
                        <img src="/images/marriage-celebrant/icons/refund.svg" alt="Refunded">
                     </div>
                     <div class="add-ons-nav-data text-start ">
                        <h3 class="h3">5</h3>
                        <p class="subheader-2 d-none d-md-block">Refunded</p>
                     </div>
                  </div>
                  <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">Refunded</p>
               </button>
            </li>
         </ul>
      </div>
      <div class="col-12 pt-20 pb-32 d-flex justify-content-center upcomming-marriage-top">
         <a class="position-relative " type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> </a>
      </div>
      <div class="row mb-4 pt-32">
         <div class="col-md-7 col-xl-8 d-flex align-self-center">
            <div class="dropdown">
               <a class="btn">
               <img src="/images/location-page/filter-icon.svg" class="fliter-icon" alt="Filter Icon">
               </a>
               <div class="select-with-checkbox">
                  <select name="filter_by_categories" id="selectinput" class="js-placeholder-single-input js-select2 form-control" multiple="multiple">
                     <optgroup label="Status">
                        @foreach($locations as $location)
                           <option value="{{$location->id}}" data-badge="">{{$location->name}}</option>
                        @endforeach
                     </optgroup>
                  </select>
               </div>
            </div>
            <div class="form-group has-search w-100 ms-4 position-relative">
            <input type="text" class="form-control" placeholder="Search couple or celebrant" onkeyup="searchWithoutTabs('/marriages',this.value, 'marriagesListing', '1')">
               <span class="fa fa-search form-control-feedback"></span>
            </div>
         </div>
         <div class="align-self-center col-md-5 col-xl-4 d-grid mt-3 mt-md-0 postion-relative">
            <a role="button" class="theme-btn primary-btn d-flex justify-content-center "  data-bs-toggle="modal" data-bs-target="#calendarmodal">
            <img class="me-2" src="/images/icons/date.svg" alt="shopping-icon">
            select a specific date
            </a>
            @include('elements.calander')
         </div>
      </div>
     <div class="table-responsive marriagesListing" id="marriagesListing">
          @include('elements.admin.marriage.listing')
      
     </div>
   </div>
</div>
@include('admin.marriages.js')
@include('elements.admin.marriage.assign-marriage-celebrant')
@include('elements.admin.marriage.note-popup')
@include('elements.admin.marriage.note-edit')

@endsection