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
                           <p class="subheader-2 d-none d-md-block">All Ceremonies</p>
                        </div>
                     </div>
                     <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">All Ceremonies</p>
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
                           <h3 class="h3">{{ $dataArray['lodged_marriages']->total() }}</h3>
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
                           <h3 class="h3">{{ $dataArray['lodged_pending_marriages']->total() }}</h3>
                           <p class="subheader-2 d-none d-md-block">Lodged pending</p>
                        </div>
                     </div>
                     <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">Lodged pending</p>
               </button>
            </li>
            <li class="nav-item col-12 col-md-6 col-lg-6  col-xl-4 col-xxl nav-item  mb-3" role="presentation">
               <button class="nav-link w-100" id="non-legal-tab" data-bs-toggle="pill" data-bs-target="#non-legal"
                        type="button" role="tab" aria-controls="non-legal" aria-selected="false">
                        <div class="add-ons-nav d-flex">
                           <div class="add-ons-nav-image me-4">
                              <img src="/images/marriage-celebrant/icons/registered.svg" alt="">
                           </div>
                           <div class="add-ons-nav-data text-start ">
                              <h3 class="h3">{{ $dataArray['non_legal_marriages']->total() }}</h3>
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
                              <h3 class="h3">{{ $dataArray['registered_marriages']->total() }}</h3>
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
                              <h3 class="h3">{{ $dataArray['finalised_marriages']->total() }}</h3>
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
                              <h3 class="h3">{{ $dataArray['cancelled_marriages']->total() }}</h3>
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
                           <h3 class="h3">{{ $dataArray['settled_marriages']->total() }}</h3>
                           <p class="subheader-2 d-none d-md-block">Settled</p>
                        </div>
                     </div>
                     <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">Settled</p>
               </button>
            </li>
         </ul>
         <div class="col-12 pt-20 pb-32 d-flex justify-content-center upcomming-marriage-top">
            <a class="position-relative collapse_ul" type="button"> </a>
         </div>
         <div class="row mb-4 pt-32">
            <div class="align-self-center col-md-4 col-lg-3 col-xl-3 col-xxl-2 d-grid mt-3 mt-md-0 position-relative">
               <div class="dropdown filter-date-calendar-dropdown">
                  <a role="button" class="theme-btn primary-btn-border d-inline-flex align-items-center text-nowrap" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"><img src="/images/icons/green-calendar.svg" class="me-3" alt="calendar"> Filter by date</a>
                  <div class="dropdown-menu p-4 filter_date_div">
                     <div class="filter-date-calendar">
                        <p class="mb-3 netural-100 light-heading">Choose filter</p>
                        <div class="row">
                           <div class="col-6">
                              <div class="cs-checkbox-list form-check mb-3">
                             
                                 <input name="ceremony_date" class="form-check-input ceremony_date"  value="1" type="checkbox"><span class="netural-100 body-2 ms-2">Ceremony Date</span>
                                 <!-- <input name="ceremony_date" class="form-check-input ceremony_date"  value="0" type="hidden"> -->
                               </div>
                           </div>
                           <div class="col-6">
                              <div class="cs-checkbox-list form-check mb-3">
                            
                                 <input name="payment_date" class="form-check-input payment_date" type="checkbox" value="1"><span class="netural-100 body-2 ms-2">Payment Date</span>
                                 <!-- <input name="payment_date" class="form-check-input payment_date"  value="0" type="hidden"> -->
                               </div>
                           </div>
                        </div>
                        <div class="calendar-wrapper" id="calendar-wrapper"></div>
                        <input type="hidden" name="booking_date" class="booking_date">
                        <a onclick="SearchResultsWithTab('search-marriage-by-date')" class="theme-btn primary-btn d-inline-block mt-3">Filter</a>
                     </div>
                  </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-9 col-xl-9 col-xxl-10 d-flex align-self-center">
               <div class="dropdown">
                  <a class="btn">
                  <img src="/images/location-page/filter-icon.svg" class="fliter-icon" alt="Filter Icon">
                  </a>
                  <div class="select-with-checkbox">
                     <select name="filter_by_categories" id="selectinput" class="js-placeholder-single-input js-select2 form-control searchingMultiple location_categories_button" multiple="multiple">
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
               @include('elements.celebrant.marriage.lodged-tab')

            </div>
            <div class="tab-pane fade" id="lodged-pending" role="tabpanel" aria-labelledby="lodged-pending-tab"
               tabindex="3">
               @include('elements.celebrant.marriage.lodged-pending-tab')

            </div>
            <div class="tab-pane fade" id="non-legal" role="tabpanel" aria-labelledby="non-legal-tab"
               tabindex="3">
               @include('elements.celebrant.marriage.non-legal-tab')

            </div>
            <div class="tab-pane fade" id="registered" role="tabpanel" aria-labelledby="registered-tab"
                tabindex="3">
               @include('elements.celebrant.marriage.registered-tab')

            </div>
            <div class="tab-pane fade" id="finalised" role="tabpanel" aria-labelledby="finalised-tab"
            tabindex="3">
               @include('elements.celebrant.marriage.finalised-tab')

            </div>
            <div class="tab-pane fade" id="settled" role="tabpanel" aria-labelledby="settled-tab"
            tabindex="3">
               @include('elements.celebrant.marriage.settled-tab')

            </div>
            <div class="tab-pane fade" id="cancelled" role="tabpanel" aria-labelledby="cancelled-tab"
            tabindex="3">
               @include('elements.celebrant.marriage.cancelled-tab')

            </div>
         </div>
      </div>
   </div>
</div>
@include('elements.celebrant.celebrant-note-popup')
@include('pages.alert.change_status')
@endsection