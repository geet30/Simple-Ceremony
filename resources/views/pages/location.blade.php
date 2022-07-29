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
                           <p class="text-black button-1" style="position: relative;top: 9px;">Location</p>
                           <div class="search-location-with-icon d-flex">
                              <img class="me-2" src="images/location-page/location-icon.svg" alt="location-icon">
                              <select class="js-example-placeholder-single js-states form-control">
                                 <option value="" disabled="" selected="" hidden="">Insert name of location</option>
                                 <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                  </optgroup>
                                  <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="OR">Oregon</option>
                                    <option value="WA">Washington</option>
                                  </optgroup>
                                  <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="UT">Utah</option>
                                    <option value="WY">Wyoming</option>
                                  </optgroup>
                                  <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TX">Texas</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="WI">Wisconsin</option>
                                  </optgroup>
                                  <optgroup label="Eastern Time Zone">
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="IN">Indiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="OH">Ohio</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WV">West Virginia</option>
                                  </optgroup>
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
                           <a href="#" class="theme-btn primary-btn d-inline-flex">
                              <img class="me-2" src="images/location-page/search-icon.svg" alt="search-icon">Search
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
        @include('elements.location', ['title' => 'locations', '' => '', 'locations' => [
    [
    'image' => 'images/location-page/hunter_valley.png',
    'price' => ' $350',
    'name' => ' Hunter valley',
    'btn' => 'Learn more',
    ],
    [
    'image' => 'images/location-page/cronulla.png',
    'price' => ' $350',
    'name' => ' Cronulla',
    'btn' => 'Learn more',
    ],
    [
    'image' => 'images/location-page/water_taxi.png',
    'price' => ' $350',
    'name' => ' Water taxi',
    'btn' => 'Learn more',
    ],
    [
    'image' => 'images/location-page/mort_bay_Balmain.png',
    'price' => ' $350',
    'name' => ' Mort bay, Balmain',
    'btn' => 'Learn more',
    ],
    [
    'image' => 'images/location-page/coogee_beach.png',
    'price' => ' $350',
    'name' => ' Coogee beach',
    'btn' => 'Learn more',
    ],
    [
    'image' => 'images/location-page/merewether_newcastle.png',
    'price' => ' $350',
    'name' => ' Merewether, newcastle',
    'btn' => 'Learn more',
    ],
    [
    'image' => 'images/location-page/blues_point_reserve.png',
    'price' => ' $350',
    'name' => ' Blues point reserve',
    'btn' => 'Learn more',
    ],
    [
    'image' => 'images/location-page/bradfield_park.png',
    'price' => ' $350',
    'name' => ' Bradfield park',
    'btn' => 'Learn more',
    ],
    [
    'image' => 'images/location-page/tench_park_Penrith.png',
    'price' => ' $350',
    'name' => 'Tench park, Penrith',
    'btn' => 'Learn more',
    ],
]])
    
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
                              <option value="4">10:30</option>
                              <option value="5">11:00</option>
                              <option value="6">11:30</option>
                              <option value="7">12:00</option>
                              <option value="8">12:30</option>
                           </select>
                        </div>
                        <div class="col-md-6 mb-4">
                           <select name="time_min" id="time_min" class="js-placeholder-single-input form-control">
                              <option value="" disabled="" selected="" hidden="">--:--</option>
                              <option value="1">09:00</option>
                              <option value="2">09:30</option>
                              <option value="3">10:00</option>
                              <option value="4">10:30</option>
                              <option value="5">11:00</option>
                              <option value="6">11:30</option>
                              <option value="7">12:00</option>
                              <option value="8">12:30</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="d-flex justify-content-center">
                     <button type="button" class="theme-btn primary-btn border-0 me-3">Save</button>
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