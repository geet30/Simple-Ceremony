@extends('layouts.master')
@section('content')

<div class="container pt-4">
   <div class="row">
      <div class="col-md-12">
      <a href="/location" class="theme-btn secondary-btn d-inline-flex back-btn"><img class="me-3" src="/images/single-location/left-icon.svg" alt="Back Icon">Back</a>
      </div>
   </div>
</div>
<section class="request-custom-location-form mt-5 mb-130">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="card py-50 px-50">
               <p class="paragraph text-black">Request custom location</p>
               <h1 class="h2 netural-100 mb-5">Please fill the form in below</h1>
               <form class="needs-validation" action="{{route('post-custom-location')}}" method="POST" novalidate>
                  @csrf
                  <div class="row">
                     <div class="col-md-6 mb-4">
                        <label for="username" class="form-label small-text2">Preferred names *</label>
                        <input type="text" placeholder="Type your preferred name here" class="form-control body-1 netural-100" name="username" id="username" required>
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Preferred names is required</div>
                     </div>
                     <div class="col-md-6 mb-4 phone_number">
                        <input type="hidden"  id="code" name ="country_code" value="61" >
                        <label for="phone" class="form-label small-text2">Phone number *</label>
                        <input class="form-control body-1 netural-100 tel-input" name="phone" type="tel" id="phone" placeholder="e.g. +1 702 123 4567" required>
                        <div class="invalid-feedback phone_number_required"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Phone number is required</div>
                        <div class="invalid-feedback invalid-phone-number"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Phone number is invalid</div>
                     </div>
                     <div class="col-md-6 mb-4">
                        <label for="email" class="form-label small-text2">Your email *</label>
                        <input type="text" placeholder="Type your email here" class="form-control body-1 netural-100" name="email" id="email" required>
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Email is required</div>
                     </div>
                     <div class="col-md-6">
                        <div class="row">
                           <div class="col-md-6 event_date">
                              <label for="event_date" class="form-label small-text2">Event date</label>
                              <div class="input-group date theme-datepicker">
                                 <input role="button" type="text" class="form-control body-1 netural-100 event_date_input" id="event_date" name="event_date"  placeholder="Choose date here" required/>
                                 <span class="input-group-append">
                                 </span>
                                 <div class="invalid-feedback event_date_required"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Event date is required</div>
                              </div>


                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="event_start_time" class="form-label small-text2 invisible">Event start time</label>
                              <select required="" name="event_start_time" id="event_start_time" class="js-placeholder-single-input form-control" required>
                                 <option value="" disabled="" selected="" hidden="">Event start time</option>
                                 @foreach($timeslot as $time)

                                    <option value="{{$time}}">{{$time}}</option>
                                 @endforeach
                              </select>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Event time is required</div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 mb-4">
                        <label for="name" class="form-label small-text2">Location name *</label>
                        <input type="text" placeholder="Type location here" class="form-control body-1 netural-100" name="name" id="name" required>
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Location name is required</div>
                     </div>
                     <div class="col-md-6 mb-4">
                        <label for="address" class="form-label small-text2">Street Address *</label>
                        <input type="text" placeholder="Type street address here" class="form-control body-1 netural-100" name="address" id="address" required>
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Street Address is required</div>
                     </div>
                     <div class="col-md-4">
                        <label for="town" class="form-label small-text2">Suburb *</label>
                        <input type="text" placeholder="Type suburb here" class="form-control body-1 netural-100" name="town" id="town" required>
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Suburb is required</div>
                     </div>
                     <div class="col-md-4">
                        <label for="post_code" class="form-label small-text2">Post code *</label>
                        <input type="text" placeholder="Type post code here" class="form-control body-1 netural-100" name="post_code" id="post_code" required>
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Post code is required</div>
                     </div>
                     <div class="col-md-4 mb-4">
                        <label for="state" class="form-label small-text2">State *</label>
                        <input type="text" placeholder="Type state here" class="form-control body-1 netural-100" name="state" id="state" required>
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>State is required</div>
                     </div>
                     <div class="col-md-12 mb-4">
                        <label for="specific_location" class="form-label small-text2">Specific location *</label>
                        <input type="text" placeholder="Pop in specific details on how to find your locations. Example. Park in the car park and walk towards the water and look for the big palm tree" class="form-control body-1 netural-100" name="direction" id="specific_location" required>
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Specific location is required</div>
                     </div>
                     <div class="col-md-4 mb-4">
                        <label for="latitude" class="form-label small-text2">latitude*</label>
                        <input type="number" onkeydown="return event.keyCode !== 69" step="any" placeholder="Type your latitude here" class="form-control body-1 netural-100" name="latitude" id="latitude" required>
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>latitude is required</div>
                     </div>
                     <div class="col-md-4 mb-4">
                        <label for="longitude" class="form-label small-text2">Longitude*</label>
                        <input type="number" onkeydown="return event.keyCode !== 69" step="any" placeholder="Type your Longitude here" class="form-control body-1 netural-100" name="longitude" id="longitude" required>
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>longitude is required</div>
                     </div>
                    

                     <div class="col-md-4 mb-4">
                        <label for="parking_details" class="form-label small-text2">Parking details *</label>
                        <input type="text" placeholder="Type parking details here" class="form-control body-1 netural-100" name="parking_details" id="parking_details" required>
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Parking details is required</div>
                     </div>
                     <div class="col-md-4 mb-4">
                        <label for="parking_cost" class="form-label small-text2">Parking costs *</label>
                        <input type="number" placeholder="Type parking costs here" class="form-control body-1 netural-100" name="parking_cost" id="parking_cost" required>
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Parking costs is required</div>
                     </div>
                     <div class="col-md-12 mb-5 mt-3">
                        <div class="form-term-condition p-5">
                           <h2 class="h3 netural-100 mb-5">Terms :</h2>
                           <p class="body-1 netural-100">If we can perform your ceremony at the above location it will be your responsibility to ensure the location is available for ceremonies and any booking, permits or payments are arrange by you.</p>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                              <label class="form-check-label body-1 netural-100" for="invalidCheck2">
                                 I Agree
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="col-12">
                        <button type="submit" id="submit_button" class="theme-btn primary-btn border-0">Send request</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
@if(!empty(Session::get('open_modal')) && Session::get('open_modal') == 'yes')
<script>
$(function() {
    $('#requestModal').modal('show');
});
</script>
@endif
<!-- Success Modal Alert -->
<div class="modal-success-form modal fade" id="requestModal" tabindex="-1" aria-labelledby="requestModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body text-center">
         <img class="mt-4" src="/images/success-check.svg" alt="Success Icon">
         <h3 class="h3 netural-100 mb-4 mt-4">Your request has been sent</h3>
         <p class="subheader-3 mb-5">We will check availability and we will confirm your email</p>
         <a href="/" class="theme-btn primary-btn-border d-inline-block mb-3">Back to home</a>
      </div>
    </div>
  </div>
</div>
@endsection
