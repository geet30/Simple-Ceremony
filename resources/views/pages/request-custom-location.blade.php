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
               <h2>
                  <p class="paragraph text-black">Request custom location</p>
                  <p class="h2 netural-100 mb-5">Please fill the form in below</p>
               </h2>
               <form class="needs-validation" method="POST" novalidate>
                  <div class="row">
                     <div class="col-md-6 mb-4">
                        <label for="InputName" class="form-label small-text2">Preferred names *</label>
                        <input type="text" placeholder="Type your preferred name here" class="form-control body-1 netural-100" name="name" id="InputName" required>
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Preferred names is required</div>
                     </div>
                     <div class="col-md-6 mb-4">
                        <label for="phone" class="form-label small-text2">Phone number *</label>
                        <input class="form-control body-1 netural-100" type="tel" id="phone" placeholder="e.g. +1 702 123 4567" value="+61 " required>
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Phone number is required</div>
                     </div>
                     <div class="col-md-6 mb-4">
                        <label for="InputName" class="form-label small-text2">Your email *</label>
                        <input type="text" placeholder="Type your email here" class="form-control body-1 netural-100" name="name" id="InputName" required>
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Email is required</div>
                     </div>
                     <div class="col-md-6">
                        <div class="row">
                           <div class="col-md-6">
                              <label for="InputName" class="form-label small-text2">Event date</label>
                              <input type="text" placeholder="Choose date here" class="form-control body-1 netural-100" name="name" id="InputName" required>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Choose date is required</div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="selectinput" class="form-label small-text2 invisible">Event start time</label>
                              <select required="" name="customer_type" id="selectinput" class="js-placeholder-single-input form-control">
                                 <option value="" disabled="" selected="" hidden="">Event start time</option>
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
                     <div class="col-md-6 mb-4">
                        <label for="InputName" class="form-label small-text2">Location name *</label>
                        <input type="text" placeholder="Type location here" class="form-control body-1 netural-100" name="name" id="InputName" required>
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Location name is required</div>
                     </div>
                     <div class="col-md-6 mb-4">
                        <label for="InputName" class="form-label small-text2">Street Address *</label>
                        <input type="text" placeholder="Type street address here" class="form-control body-1 netural-100" name="name" id="InputName" required>
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Street Address is required</div>
                     </div>
                     <div class="col-md-4">
                        <label for="InputName" class="form-label small-text2">Suburb *</label>
                        <input type="text" placeholder="Type suburb here" class="form-control body-1 netural-100" name="name" id="InputName" required>
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Suburb is required</div>
                     </div>
                     <div class="col-md-4">
                        <label for="InputName" class="form-label small-text2">Post code *</label>
                        <input type="text" placeholder="Type post code here" class="form-control body-1 netural-100" name="name" id="InputName" required>
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Post code is required</div>
                     </div>
                     <div class="col-md-4 mb-4">
                        <label for="InputName" class="form-label small-text2">State *</label>
                        <input type="text" placeholder="Type state here" class="form-control body-1 netural-100" name="name" id="InputName" required>
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>State is required</div>
                     </div>
                     <div class="col-md-12 mb-4">
                        <label for="InputName" class="form-label small-text2">Specific location *</label>
                        <input type="text" placeholder="Pop in specific details on how to find your locations. Example. Park in the car park and walk towards the water and look for the big palm tree" class="form-control body-1 netural-100" name="name" id="InputName" required>
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Specific location is required</div>
                     </div>
                     <div class="col-md-4 mb-4">
                        <label for="InputName" class="form-label small-text2">GPS coordinates *</label>
                        <input type="text" placeholder="Type your GPS coordinates here" class="form-control body-1 netural-100" name="name" id="InputName" required>
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>GPS coordinates is required</div>
                     </div>
                     <div class="col-md-4 mb-4">
                        <label for="InputName" class="form-label small-text2">Parking details *</label>
                        <input type="text" placeholder="Type parking details here" class="form-control body-1 netural-100" name="name" id="InputName" required>
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Parking details is required</div>
                     </div>
                     <div class="col-md-4 mb-4">
                        <label for="InputName" class="form-label small-text2">Parking costs *</label>
                        <input type="text" placeholder="Type parking costs here" class="form-control body-1 netural-100" name="name" id="InputName" required>
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Parking costs is required</div>
                     </div>
                     <div class="col-md-12 mb-5 mt-3">
                        <div class="form-term-condition p-5">
                           <h3 class="h3 netural-100 mb-5">Terms :</h3>
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

<!-- Success Modal Alert -->
<div class="modal-success-form modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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