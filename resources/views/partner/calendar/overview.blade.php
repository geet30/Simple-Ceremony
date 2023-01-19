@extends('layouts.panels')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-3 col-xl-2 p-0">
         @include('elements.partner.partner-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-9 col-xl-10 px-4">
         @include('elements.partner.partner-panel-header')
         <div class="row pt-31 mb-4">
            <div class="col-12 d-flex justify-content-end">
               <a class="theme-btn primary-btn d-flex justify-content-center text-nowrap" href="block-out-times">
                     Block out times in calendar
               </a>
            </div>
         </div>
         <div class="card panel-card">
            <div class="card-body">
               <div class="row">
                  <div class="col-md-12 mb-5">
                     <!-- <a role="button" data-bs-toggle="modal" data-bs-target="#calendarmodal">
                        <img src="/images/marriage-calendar.png" alt="Calendar" class="img-fluid w-100">
                     </a> -->
                     <div id='calendar-js'></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php  $booking =[];?>
@section('scripts')

<script src="./fullcalendar/main.js"></script>
<script src="./fullcalendar/init.js"></script>
<script src="https://rawgit.com/moment/moment/2.2.1/min/moment.min.js"></script>
<script>
   initCalander('calendar-js', @json($booking))
</script>
@endsection
@endsection


