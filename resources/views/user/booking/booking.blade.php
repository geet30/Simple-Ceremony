@extends('layouts.master') 
@section('content')
<section class="location-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
               <div class="location-banner-data">
                  <h2 class="mb-4 text-center">
                     <p class="paragraph text-white">The best offer</p>
                     <h1 class="h2 text-white text-center mb-3">Check available location and time here</h1>
                  </h2>
                  <div class="col-md-9 mx-auto location-search-data ">
                     <div class="row align-items-center">
                        <div class="col-lg-5 mb-4">
                           <p class="text-black button-1">Location</p>
                           <div class="search-location-with-icon d-flex">
                              <img class="me-2" src="images/location-page/location-icon.svg" alt="location-icon">
                              <select class="js-example-placeholder-single js-states form-control">
                                 <option value="" disabled="" selected="" hidden="">Insert name of location</option>
                                 @foreach($locations as $location)
                                 <optgroup>
                                 <option value="{{$location->id}}">{{$location->name }}</option>
                                 </optgroup>
                                 @endforeach
                                
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                           <p class="text-black button-1">Date & times</p>
                           <p class="body-2 m-0 d-flex gap-2">
                              <a class="d-flex neutral-100 text-decoration-none choose-date outline-0" data-bs-toggle="modal" data-bs-target="#calendarmodal">
                                 <img class="me-3" src="images/location-page/calander-icon.svg" alt="calander-icon">Choose date
                              </a>
                           </p>
                        </div>
                        <div class="col-lg-3">
                           <a onclick="SearchRecords('search-booking-location',this.value)" class="theme-btn primary-btn d-inline-flex">
                              <img class="me-2" src="images/location-page/search-icon.svg" alt="search-icon" >Search
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
        </div>
    </div>
</section>
<section class="py-100 ">
   <div class="container">
      <div class="row gy-3">
        <div class="col-md-12 mb-3">
            <div class="dropdown">
                <a class="btn">
                  <img src="images/location-page/filter-icon.svg" class="fliter-icon" alt="Filter Icon">
                </a>
               <span class="button-1 position-relative">Filter by categories</span>
               <div class="select-with-checkbox">
                  <select name="filter_by_categories" id="selectinput" class="js-placeholder-single-input js-select2 form-control" multiple="multiple">
                     <optgroup label="Categories">
                     <option value="O1" data-badge="">All</option>
                     <option value="O2" data-badge="">Harbour</option>
                     <option value="O3" data-badge="">Beach</option>
                     <option value="O4" data-badge="">Park</option>
                     <option value="O5" data-badge="">River</option>
                     <option value="O6" data-badge="">Outdoors</option>
                     <option value="O7" data-badge="">Indoors</option>
                     <option value="O7" data-badge="">Unique</option>
                  </optgroup>
                  </select> 
               </div>
            </div>
        </div>
        @include('elements.user.location.location', ['title' => 'locations', '' => '', 'locations' => $locations])
        
    
      </div>
   </div>
</section>
<section class="location-page-booking-cards pb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-md-0 mb-3">
                <div class="card border-0 rounded-12">
                    <img src="images/location-page/book_your_custom_location.png" class="card-img" alt="Book your custom location">
                    <div class="card-img-overlay d-flex flex-column justify-content-center text-center p-10">
                        <h3 class="h3 Neutral/100 mb-4">Want to get married in your own dream place?</h3>
                        <div class="d-grid gap-3 col-12">
                            <a href="/request-custom-location" class="theme-btn secondary-btn d-inline-flex justify-content-center ">Request a custom location or date and time.</a> 
                            <a href="/book-custom-location" class="theme-btn secondary-btn-border d-inline-flex justify-content-center">Book your custom location</a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0 rounded-12">
                    <img src="images/location-page/see_all_voucher.png" class="card-img" alt="See all vouchers">
                    <div class="card-img-overlay d-flex flex-column justify-content-center text-center p-10">
                        <h3 class="h3 Neutral/100 mb-4">Like to give someone the Gift Certificate?</h3>
                        <p class="Neutral/100 body-2 mb-4">Purchase them a wedding</p>
                        <div class="d-grid gap-3 col-12">
                            <a href="/voucher" class="theme-btn secondary-btn d-inline-flex justify-content-center ">See all vouchers</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- calander modal --}}
<div class="modal fade" id="calendarmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-xl">
     <div class="modal-content">
       <div class="modal-body">
         <div class="container-fluid">
           <div class="row">
               <div class="col-md-12 col-lg-7 mb-lg-0 mb-4">
                  <div class="calendar-wrapper" id="calendar-wrapper"></div>
               </div>
               <div class="col-md-12 col-lg-5">
                  <div class="calander-time mb-4">
                     <div class="row">
                        <div class="col-md-12">
                           <p class="body-1">Choose times</p>
                        </div>
                        <div class="col-md-6 mb-4">
                           <select name="time_hr" id="time_hr" class="js-placeholder-single-input form-control">
                              <option value="" disabled="" selected="" hidden="">--:--</option>
                              <option value="1">09:00</option>
                              <option value="2">09:30</option>
                              <option value="3">10:00</option>
                           </select>
                        </div>
                        <div class="col-md-6 mb-4">
                           <select name="time_min" id="time_min" class="js-placeholder-single-input form-control">
                              <option value="" disabled="" selected="" hidden="">--:--</option>
                              <option value="1">09:00</option>
                              <option value="2">09:30</option>
                              <option value="3">10:00</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="d-flex justify-content-center">
                     <button type="button" class="theme-btn primary-btn border-0 me-3" data-bs-dismiss="modal">Save</button>
                     <button type="button" class="theme-btn primary-btn-border" data-bs-dismiss="modal">Cancel</button>
                  </div>
               </div>
           </div>
         </div>
       </div>
     </div>
   </div>
</div>
@endsection