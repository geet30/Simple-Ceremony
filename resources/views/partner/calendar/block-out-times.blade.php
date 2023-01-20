@extends('layouts.panels')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('pg-calendar/css/style.css') }}"/>
@endsection
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-3 col-xl-2 p-0">
         @include('elements.partner.partner-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-9 col-xl-10 px-4">
         @include('elements.partner.partner-panel-header')
         <a href="{{url('calendar')}}" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-30"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
         <div>
            <h1 class="h3 neutral-100 mb-4 align-self-center">Set your standard hours</h1>
            <h2 class="h4 text-black mb-3">Step 1 - Choose the dates</h2>
            <form class="row needs-validation" method="post" novalidate>
               <div class="col-lg-5 mb-3 mb-lg-0">
                  <div class="card  panel-card ">
                     <div class="card-body">
                        <div class="calendar-wrappers date-picker-js-ns no-border-calander " ></div>

                     </div>
                     <div class="col-12 d-md-flex mt-4 justify-content-center">
                        <button type="button" class="theme-btn primary-btn d-flex justify-content-center me-md-2 mb-3 mb-md-0" id="submit-first-over-ride-form">Apply</button>
                        <button type="button" class="theme-btn primary-btn-border d-flex justify-content-center">Cancel</button>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3">
                  <h3 class="body-3-medium text-black mb-3">Informations</h3>
                  <div class="d-flex mb-3">
                     <div class="dot-status bg-neutral-100 me-3"></div>
                     <div  class="body-3-regular neutral-100">Available</div>
                  </div>
                  <div class="d-flex mb-3">
                     <div class="dot-status bg-neutral-50 me-3"></div>
                     <div  class="body-3-regular neutral-100">Not available</div>
                  </div>
                  <h3 class="body-3-medium text-black mb-4 mt-3">Events</h3>
                  <div class="d-flex add-ons-detail mb-3"> 
                     <div class="numberCircle align-self-center">10</div>
                     <h4 class="body-2 neutral-100 align-self-center mb-0 ms-2">Name holiday in Australia</h4>
                  </div>
                  <div class="d-flex add-ons-detail mb-3">
                     <div class="numberCircle align-self-center">18</div>
                     <h4 class="body-2 neutral-100 align-self-center mb-0 ms-2">Name holiday in Australia</h4>
                  </div>
               </div>
               <div class="col-md-12 pt-31">
                  <div class="card panel-card">
                     <div class="card-body">
                        <h2 class="h4 text-black">Step 2 - Fill Block out times</h2>
                        <div class="row">
                           <div class="col-9 col-md-6 col-xl-4 col-xxl-4 mx-auto text-center py-5">
                              <p class="h4 neutral-100">Please, choose the date(s) first,<br>
                              after that time form will be appear
                              </p>
                              <img src="/images/emplty-folder.png" class="img-fluid mt-5" alt="emplty-folder">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

@section('scripts')
<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/pg-calendar@1.4.31/dist/js/pignose.calendar.full.js"></script> -->
<!-- <script src="/datepicker/main.js"></script> -->
<script src="{{ asset('pg-calendar/js/main.js') }}"></script>
<script>
   const dateFormatNs = 'YYYY-MM-DD';
   $(document).ready(function(){
      $('.date-picker-js-ns').pignoseCalendar({
         multiple: true,
      });
      $('.pignose-calendar-body').css('pointer-events','none');
   })
</script>


@endsection
