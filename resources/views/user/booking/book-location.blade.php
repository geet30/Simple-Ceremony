@extends('layouts.panels') 
@section('content')

<section class="booking-custom-location">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-4 p-0 sidebar-bg-color">
            <div class="form-sidebar py-50 ps-150 pe-40">
               <a href="/location" class="theme-btn secondary-btn d-inline-flex back-btn"><img class="me-3" src="/images/single-location/left-icon.svg" alt="Back Icon">Back to home</a>
               <img class="d-block mt-4" style="max-width:227px;width: 100%;" src="/images/booking-form/sidebar-white-logo.svg"  alt="Logo">
               <h1 class="h3 text-white mt-4 mb-4">Follow these steps to complete your booking</h1>
               <div class="list-group list-tab-group" id="list-tab" role="tablist">
                  <a class="h4 text-white d-flex align-items-center text-decoration-none mb-3 active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">
                     <img class="me-4" src="/images/booking-form/calander-icon.svg" alt="Calander Icon">
                     <span>Select date and time</span>
                     <img class="verticle-icon" src="/images/booking-form/verticle-tick.svg" alt="Verticle Icon">
                  </a>
                  <a class="h4 text-white d-flex align-items-center text-decoration-none mb-3 mt-3" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">
                     <img class="me-4" src="/images/booking-form/document-icon.svg" alt="Document Icon">
                     <span>Pop in your preferred names & contacts</span>
                     <img class="verticle-icon" src="/images/booking-form/verticle-tick.svg" alt="Verticle Icon">
                  </a>
                  <a class="h4 text-white d-flex align-items-center text-decoration-none mt-3" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">
                     <img class="me-4" src="/images/booking-form/payment-icon.svg" alt="Payment Icon">
                     <span>Make payment</span>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-md-8 p-0">
            <div class="right-part-sidebar pt-50 pb-100 pe-150 ps-30">
             
                  <div class="tab-content" id="nav-tabContent">
                     <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                        @include('elements.user.booking.booking-step-one')
                     </div>

                     <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                        @include('elements.user.booking.booking-step-two')
                     </div>

                     <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                        @include('elements.user.booking.booking-step-three')
                     </div>

                  </div>
               
            </div>
         </div>
      </div>
   </div>
</section>
@include('user.booking.js')
@endsection