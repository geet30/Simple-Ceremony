@extends('layouts.master') 
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('pg-calendar/css/style.css') }}"/>
@endsection
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
               <div class="col-md-9 col-lg-11 col-xl-9 mx-auto location-search-data ">
                  <div class="row align-items-center">
                     <div class="col-lg-4 col-xl-4 mb-4">
                        <p class="text-black button-1">Location</p>
                        <div class="search-location-with-icon d-flex">
                           <img class="me-2" src="images/location-page/location-icon.svg" alt="location-icon">
                           <select id="search_location" class="js-example-placeholder-single js-states form-control" name="location">
                              <option value="" disabled="" selected="" hidden="">Insert name of location</option>
                              @foreach($locations as $location)
                              <optgroup>
                                 <option value="{{$location->id}}">{{$location->name }}</option>
                              </optgroup>
                              @endforeach
                           </select>
                        </div>
                     </div>
                     <div class="col-lg-4 col-xl-4 mb-4">
                        <p class="text-black button-1">Date & times</p>
                        <p class="body-2 m-0 d-flex gap-2">
                           <a class="d-flex neutral-100 text-decoration-none choose-date outline-0" data-bs-toggle="modal" data-bs-target="#calendarmodal">
                           <img class="me-3" src="images/location-page/calander-icon.svg" alt="calander-icon"><span id="set_date_time">Choose date</span>
                           </a>
                        </p>
                     </div>
                     <div class="col-lg-4 col-xl-4 d-flex align-items-center justify-content-start">
                        <a onclick="SearchMultipleFilter('search-booking','','searchResult','')" class="theme-btn primary-btn d-inline-flex px-3 me-3">
                        <img class="me-2" src="images/location-page/search-icon.svg" alt="search-icon" >Search
                        </a>
                        <a href="{{route('user.booking')}}" class="theme-btn primary-btn-border">Reset</a>
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
                  <select name="filter_by_categories" id="selectinput" class="js-placeholder-single-input js-select2 form-control location_categories_button filter_by_categories" multiple="multiple">
                     <optgroup label="Categories">
                        <option value="0" data-badge="">All</option>
                        @foreach($filters as $filter)
                        <option value="{{$filter->id}}">{{$filter->name}}</option>
                        @endforeach
                     </optgroup>
                  </select>
               </div>
            </div>
         </div>
         <div class="row searchResult m-0">
            
            @include('elements.user.location.index', ['title' => 'locations', '' => '', 'locations' => $locations])
         </div>
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
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-body">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-12 col-lg-7 mb-lg-0 mb-4">
                     <!-- <div class="calendar-wrapper " id="calendar-wrapper"></div> -->
                     <div class="date-picker-js no-border-calander date-range-picker"></div>
                     <input type="hidden" name="search_start_date" id="search_start_date" class="search_start_date">
                     <input type="hidden" name="search_end_date" id="search_end_date" class="search_end_date">
                  </div>
                  <div class="col-md-12 col-lg-5">
                     <div class="calander-time mb-4">
                        <div class="row">
                           <div class="col-md-12">
                              <p class="body-1">Choose times</p>
                           </div>
                           <div class="col-md-6 mb-4">
                              <select name="booking_start_time" id="booking_start_time" class="js-placeholder-single-input form-control">
                                 <option value="" disabled="" selected="" hidden="">--:--</option>
                                 @foreach($timeslot as $time)
                                 <option value="{{$time}}">{{$time}}</option>
                                 @endforeach
                              </select>
                           </div>
                           <div class="col-md-6 mb-4">
                              <select name="booking_end_time" id="booking_end_time" class="js-placeholder-single-input form-control">
                                 <option value="" disabled="" selected="" hidden="">--:--</option>
                                 @foreach($timeslot as $time)
                                 <option value="{{$time}}">{{$time}}</option>
                                 @endforeach
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="d-flex justify-content-center">
                        <button type="button" class="theme-btn primary-btn border-0 me-3 set_date_time" data-bs-dismiss="modal">Save</button>
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
@section('scripts')

<script>
   $(document).ready(function(){          
     
      $('.date-picker-js').datepicker({
         format: "M yyyy",
         singleDatePicker: true,
         multidate: true,
         multidateSeparator: ",",
         daysOfWeekHighlighted: "0,6",
         weekStart: 1,
         autoClose:true,
         daysOfWeekHighlighted: "0,6",
         weekStart: 1,
      }).on("changeDate",function(event){
            var dates = event.dates, elem=$('.date-picker-js');
            if(elem.data("selecteddates")==dates.join(",")) return; //To prevernt recursive call, that lead to lead the maximum stack in the browser.
            if(dates.length>2) dates=dates.splice(dates.length-1);
            dates.sort(function(a,b){return new Date(a).getTime()-new Date(b).getTime()});
            elem.data("selecteddates",dates.join(",")).datepicker('setDates',dates);
           
            getDates();
      });
     
      function getDates()
      {
         var get_dates = $(".date-picker-js").data('datepicker').getFormattedDate('yyyy-mm-dd');

         get_dates = get_dates.split(',')
         var start_date = get_dates[0] ? get_dates[0]:'';
         var end_date = get_dates[1] ? get_dates[1]:'';
         $('#search_start_date').val(start_date);
         $('#search_end_date').val(end_date);

         var start_data_date = new Date(start_date).getTime();
         $('td[data-date = '+start_data_date+']').addClass('starting_date');
         var end_data_date = new Date(end_date).getTime();
         $('td[data-date = '+end_data_date+']').addClass('ending_date');

         let range = dateRange(start_date, end_date);
        
         for (const element of range) {
            var data_date = new Date(element).getTime();
            $('td[data-date = '+data_date+']').addClass('range_selected');
            
         }
      }
      function dateRange(startDate, endDate, steps = 1) {
         const dateArray = [];
         let currentDate = new Date(startDate);

         while (currentDate <= new Date(endDate)) {
           
            dateArray.push(new Date(currentDate));
            currentDate.setUTCDate(currentDate.getUTCDate() + steps);
            // Use UTC date to prevent problems with time zones and DST
           

         }

         return dateArray;
      }
      
     
   })
      
</script>
@endsection