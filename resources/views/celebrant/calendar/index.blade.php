@extends('layouts.panels')
@section('css')
<link rel="stylesheet" href="./fullcalendar/main.css">
<link rel="stylesheet" href="./fullcalendar/calendar.css">
@endsection

@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
         @include('elements.celebrant.celebrant-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-md-4">
         @include('elements.common.panel-header')
         <div class="row pt-31 mb-4">
            <div class="col-md-12 col-xl-6 col-xxl-6 d-flex align-self-center">
               <?php //dd($celebrant_locations);
               ?>
               <div class="dropdown filter_date_div">
                  <a role="button" class="theme-btn d-inline-flex align-items-center text-nowrap" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"><img src="/images/location-page/filter-icon.svg" class="fliter-icon" alt="Filter Icon"></a>
                  <div class="dropdown-menu p-3 filter_date_div">
                     <div class="filter-date-calendar" style="width:400px;">
                        <form method="post">
                           <div class="row">

                              <div class="col-6">

                                 <h4 class="h4 neutral-100 mb-3">Locations</h4>
                                 @foreach ($celebrant_locations as $location)
                                    
                                    <div class="form-check mb-3 d-flex align-items-center ">
                                       <input class="form-check-input me-2 locations" type="checkbox" name="locations[]" value="{{$location->id}}">
                                       <label class="form-check-labe body-2 neutral-100">{{ $location->name }}</label>
                                    </div>
                                 @endforeach

                              
                                 <a onclick="SearchCalendarFilter('/search-calendar-by-location')" class="theme-btn primary-btn d-inline-flex px-5">Filter</a>
                              </div>

                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               
              
               <div class="form-group has-search w-100 ms-4 position-relative">
                  <input type="text" class="form-control couple_name" placeholder="Search couple name" >
                  <span class="fa fa-search form-control-feedback"></span>
                 
               </div>
               <!--  -->

            </div>
            <div class="align-self-center col-md-12 col-xl-6 col-xxl-6 d-flex align-items-center justify-content-xl-end mt-3 mt-xl-0">
               <a class="theme-btn primary-btn me-3" onclick="SearchCalendarFilter('/search-calendar-with-couple','search')">Search</a>
               <a class="theme-btn primary-btn d-flex justify-content-center text-nowrap" href="{{ route('calendar.create') }}">
                  <img class="me-2" src="/images/icons/add.svg" alt="shopping-icon">
                  Add new availability
               </a>
            </div>
         </div>

         <div class="row">
            <div class="col-12 mb-5">
               <!-- tab content -->
               <div id='calendar-js'></div>

               <!-- tab content -->
            </div>
         </div>
      </div>
   </div>
   @include('elements.common.calander')
   @include('pages.alert.calendar_modal')
   @endsection

   @section('scripts')

   <script src="./fullcalendar/main.js"></script>
   <script src="./fullcalendar/init.js"></script>
   <script src="https://rawgit.com/moment/moment/2.2.1/min/moment.min.js"></script>
   <script>
      initCalander('calendar-js', @json($booking))
   </script>
   @endsection