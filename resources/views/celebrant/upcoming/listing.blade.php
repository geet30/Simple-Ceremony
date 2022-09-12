@extends('layouts.panels')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0 d-none d-md-block">
         @include('elements.celebrant.celebrant-sidebar')
      </div>
      <div class="col-12 col-md-9 col-lg-10 px-md-4">
         @include('elements.panel-header')
         <ul class="add-on-list-nav row nav nav-pills mb-3 mt-3" id="pills-tab">
            <li class="nav-item col-12 col-md-6 col-lg-6  col-xl-4 col-xxl nav-item  mb-3" role="presentation">
               <button class="nav-link w-100 active" id="all-records-tab" data-bs-toggle="pill"
                     data-bs-target="#all-records" type="button" role="tab" aria-controls="all-records"
                     aria-selected="true">
                     <div class="add-ons-nav d-flex">
                        <div class="add-ons-nav-image me-4">
                           <img src="/images/admin/partner/booking-performed.svg" alt="All marriages">
                        </div>
                        <div class="add-ons-nav-data text-start ">
                           <h3 class="h3">{{ $dataArray['all_marriages']->total() }}</h3>
                           <p class="subheader-2 d-none d-md-block">All marriages</p>
                        </div>
                     </div>
                     <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">All marriages</p>
               </button>
            </li>
            <li class="nav-item col-12 col-md-6 col-lg-6  col-xl-4 col-xxl nav-item  mb-3" role="presentation">
               <button class="nav-link w-100" id="booked-tab" data-bs-toggle="pill" data-bs-target="#booked"
                     type="button" role="tab" aria-controls="booked" aria-selected="false">
                     <div class="add-ons-nav d-flex">
                        <div class="add-ons-nav-image me-4">
                           <img src="/images/admin/add-ons/timer-icon.svg" alt="">
                        </div>
                        <div class="add-ons-nav-data text-start ">
                           <h3 class="h3">{{ $dataArray['booking_marriages']->total() }}</h3>
                           <p class="subheader-2 d-none d-md-block">Booked</p>
                        </div>
                     </div>
                     <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">Booked</p>
               </button>
            </li>
            <li class="nav-item col-12 col-md-6 col-lg-6  col-xl-4 col-xxl nav-item  mb-3" role="presentation">
               <button class="nav-link w-100" id="lodged-tab" data-bs-toggle="pill" data-bs-target="#lodged"
                     type="button" role="tab" aria-controls="lodged" aria-selected="false">
                     <div class="add-ons-nav d-flex">
                        <div class="add-ons-nav-image me-4">
                           <img src="/images/marriage-celebrant/icons/booking.svg" alt="">
                        </div>
                        <div class="add-ons-nav-data text-start ">
                           <h3 class="h3">0</h3>
                           <p class="subheader-2 d-none d-md-block">Lodged</p>
                        </div>
                     </div>
                     <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">Lodged</p>
               </button>
            </li>
            <li class="nav-item col-12 col-md-6 col-lg-6  col-xl-4 col-xxl nav-item  mb-3" role="presentation">
               <button class="nav-link w-100" id="lodged-pending-tab" data-bs-toggle="pill"
                     data-bs-target="#lodged-pending" type="button" role="tab" aria-controls="lodged-pending"
                     aria-selected="false">
                     <div class="add-ons-nav d-flex">
                        <div class="add-ons-nav-image me-4">
                           <img src="/images/marriage-celebrant/icons/document.svg" alt="Lodged pending">
                        </div>
                        <div class="add-ons-nav-data text-start ">
                           <h3 class="h3">0</h3>
                           <p class="subheader-2 d-none d-md-block">Lodged pending</p>
                        </div>
                     </div>
                     <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">Lodged pending</p>
               </button>
            </li>
         </ul>
         <div class="collapse" id="collapseExample">
            <ul class="row add-on-list-nav  upcomming-marriage-pills px-0" id="pills-tab" role="tablist">
               <li class="nav-item col-12 col-md-6 col-lg-6  col-xl-4 col-xxl nav-item  mb-3" role="presentation">
                  <button class="nav-link w-100" id="non-legal-tab" data-bs-toggle="pill" data-bs-target="#non-legal"
                        type="button" role="tab" aria-controls="non-legal" aria-selected="false">
                        <div class="add-ons-nav d-flex">
                           <div class="add-ons-nav-image me-4">
                              <img src="/images/marriage-celebrant/icons/registered.svg" alt="">
                           </div>
                           <div class="add-ons-nav-data text-start ">
                              <h3 class="h3">0</h3>
                              <p class="subheader-2 d-none d-md-block">Non Legal</p>
                           </div>
                        </div>
                        <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">Non Legal</p>
                  </button>
               </li>
               <li class="nav-item col-12 col-md-6 col-lg-6  col-xl-4 col-xxl nav-item  mb-3" role="presentation">
                  <button class="nav-link w-100" id="registered-tab" data-bs-toggle="pill" data-bs-target="#registered"
                        type="button" role="tab" aria-controls="registered" aria-selected="false">
                        <div class="add-ons-nav d-flex">
                           <div class="add-ons-nav-image me-4">
                              <img src="/images/marriage-celebrant/icons/registered.svg" alt="">
                           </div>
                           <div class="add-ons-nav-data text-start ">
                              <h3 class="h3">0</h3>
                              <p class="subheader-2 d-none d-md-block">Registered</p>
                           </div>
                        </div>
                        <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">Registered</p>
                  </button>
               </li>
               <li class="nav-item col-12 col-md-6 col-lg-6  col-xl-4 col-xxl nav-item  mb-3" role="presentation">
                  <button class="nav-link w-100" id="finalised-tab" data-bs-toggle="pill" data-bs-target="#finalised"
                        type="button" role="tab" aria-controls="finalised" aria-selected="false">
                        <div class="add-ons-nav d-flex">
                           <div class="add-ons-nav-image me-4">
                              <img src="/images/marriage-celebrant/icons/finalised.svg" alt="">
                           </div>
                           <div class="add-ons-nav-data text-start ">
                              <h3 class="h3">0</h3>
                              <p class="subheader-2 d-none d-md-block">Finalised</p>
                           </div>
                        </div>
                        <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">Finalised</p>
                  </button>
               </li>
               <li class="nav-item col-12 col-md-6 col-lg-6  col-xl-4 col-xxl nav-item  mb-3" role="presentation">
                  <button class="nav-link w-100" id="cancelled-tab" data-bs-toggle="pill" data-bs-target="#cancelled"
                        type="button" role="tab" aria-controls="cancelled" aria-selected="false">
                        <div class="add-ons-nav d-flex">
                           <div class="add-ons-nav-image me-4">
                              <img src="/images/marriage-celebrant/icons/cancelled.svg" alt="">
                           </div>
                           <div class="add-ons-nav-data text-start ">
                              <h3 class="h3">0</h3>
                              <p class="subheader-2 d-none d-md-block">Cancelled</p>
                           </div>
                        </div>
                        <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">Cancelled</p>
                  </button>
               </li>
               <li class="nav-item col-12 col-md-6 col-lg-6  col-xl-4 col-xxl nav-item  mb-3" role="presentation">
                  <button class="nav-link w-100" id="settled-tab" data-bs-toggle="pill" data-bs-target="#settled"
                        type="button" role="tab" aria-controls="settled" aria-selected="false">
                        <div class="add-ons-nav d-flex">
                           <div class="add-ons-nav-image me-4">
                              <img src="/images/marriage-celebrant/icons/refunded.svg" alt="">
                           </div>
                           <div class="add-ons-nav-data text-start ">
                              <h3 class="h3">0</h3>
                              <p class="subheader-2 d-none d-md-block">Settled</p>
                           </div>
                        </div>
                        <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">Settled</p>
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

                        
                        @foreach(config('ceremonyStatus.booking_status') as $key=>$status)
                           <option value="{{ $key }}" data-badge="">{{ $status }}
                                </option>
                        @endforeach
                        </optgroup>
                        <optgroup label="Location">
                           @foreach ($locations as $location)
                              <option value="{{ $location->id }}" data-badge="">{{ $location->name }}
                                </option>
                            @endforeach
                        </optgroup>
                     </select>
                  </div>
               </div>
               <div class="form-group has-search w-100 ms-4 position-relative">
                  <span class="fa fa-search form-control-feedback"></span>
                  <input type="text" class="form-control" placeholder="Search couple name" onkeyup="searchWithTabs('/search-by-user',this.value)">
               </div>
            </div>
            <div class="align-self-center col-md-5 col-xl-4 d-grid mt-3 mt-md-0 postion-relative">
               <a class="theme-btn primary-btn d-flex justify-content-center "  data-bs-toggle="modal" data-bs-target="#calendarmodal">
               <img class="me-2" src="/images/icons/date.svg" alt="shopping-icon">
               select a specific date
               </a>
               @include('elements.calander')
            </div>
         </div>
         <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show" id="all-records" role="tabpanel" aria-labelledby="all-records-tab"
               tabindex="0">
               @include('elements.celebrant.marriage.all-records-tab')


            </div>
            <div class="tab-pane fade" id="booked" role="tabpanel" aria-labelledby="booked-tab-tab"
               tabindex="1">
               @include('elements.celebrant.marriage.booked-tab')

            </div>
            <div class="tab-pane fade" id="lodged" role="tabpanel" aria-labelledby="lodged-tab"
               tabindex="2">
               @include('elements.celebrant.marriage.all-records-tab')

            </div>
            <div class="tab-pane fade" id="lodged-pending" role="tabpanel" aria-labelledby="lodged-pending-tab"
               tabindex="3">
               @include('elements.celebrant.marriage.all-records-tab')

            </div>
         </div>
      </div>
   </div>
</div>
@include('elements.celebrant.celebrant-note-popup')
@include('pages.alert.change_status')
@endsection