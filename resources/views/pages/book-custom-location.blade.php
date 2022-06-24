@extends('layouts.master-wt-header') 
@section('content')

<section class="booking-custom-location">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-4 p-0 sidebar-bg-color">
            <div class="form-sidebar py-50 ps-150 pe-40">
               <a href="/location" class="theme-btn secondary-btn d-inline-flex back-btn"><img class="me-3" src="/images/single-location/left-icon.svg" alt="Back Icon">Back to home</a>
               <img class="d-block mt-4" style="max-width:227px;width: 100%;" src="/images/booking-form/sidebar-white-logo.svg">
               <h3 class="h3 text-white mt-4 mb-4">Follow these steps to complete your booking</h3>
               <div class="list-group" id="list-tab" role="tablist">
                  <a class="h4 text-white d-flex align-items-center text-decoration-none mb-3 active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">
                     <img class="me-4" src="/images/booking-form/calander-icon.svg" alt="Calander Icon">
                     <span>Fill form 1</span>
                     <img class="verticle-icon" src="/images/booking-form/verticle-tick.svg" alt="Verticle Icon">
                  </a>
                  <a class="h4 text-white d-flex align-items-center text-decoration-none mb-3 mt-3" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">
                     <img class="me-4" src="/images/booking-form/document-icon.svg" alt="Document Icon">
                     <span>Fill form 2</span>
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
               <form>
                  <div class="tab-content" id="nav-tabContent">
                     <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                        <div class="row">
                           <div class="col-4 col-md-3 col-lg-3 col-xl-2 mb-3">
                              <p class="paragraph Neutral/100">Step 1</p>
                           </div>
                           <div class="col-8 col-md-9 col-lg-9 col-xl-10">
                              <div class="progress body-1">
                                 <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <h3 class="h3 Neutral/100 mt-4 mb-4">Fill the marriage celebrant, location, date & time</h3>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="selectinput" class="form-label small-text2">Preferred names *</label>
                              <select required="" name="customer_type" id="selectinput" class="js-placeholder-single-input form-control">
                                 <option value="" disabled="" selected="" hidden="">Select location</option>
                                 <option value="1">Lorem Epsom dollar sit amet</option>
                                 <option value="2">Lorem Epsom dollar sit amet</option>
                                 <option value="3">Lorem Epsom dollar sit amet</option>
                                 <option value="4">Lorem Epsom dollar sit amet</option>
                                 <option value="5">Lorem Epsom dollar sit amet</option>
                              </select>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Select location required</div>
                           </div>
                           <div class="col-md-6 mb-4 d-none d-md-block">
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="InputName" class="form-label small-text2">Location name</label>
                              <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Select the location first,after that his data will appear">
                                 <img src="/images/booking-form/information.svg" alt="Information Icon" style="width:13px;">
                              </span>
                              <input type="text" placeholder="" class="form-control body-1 netural-100" name="name" id="InputName">
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="InputName" class="form-label small-text2">Street Address</label>
                              <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Select the location first,after that his data will appear">
                                 <img src="/images/booking-form/information.svg" alt="Information Icon" style="width:13px;">
                              </span>
                              <input type="text" placeholder="" class="form-control body-1 netural-100" name="name" id="InputName">
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="InputName" class="form-label small-text2">Suburb</label>
                              <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Select the location first,after that his data will appear">
                                 <img src="/images/booking-form/information.svg" alt="Information Icon" style="width:13px;">
                              </span>
                              <input type="text" placeholder="" class="form-control body-1 netural-100" name="name" id="InputName">
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="InputName" class="form-label small-text2">Post code</label>
                              <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Select the location first,after that his data will appear">
                                 <img src="/images/booking-form/information.svg" alt="Information Icon" style="width:13px;">
                              </span>
                              <input type="text" placeholder="" class="form-control body-1 netural-100" name="name" id="InputName">
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="InputName" class="form-label small-text2">State</label>
                              <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Select the location first,after that his data will appear">
                                 <img src="/images/booking-form/information.svg" alt="Information Icon" style="width:13px;">
                              </span>
                              <input type="text" placeholder="" class="form-control body-1 netural-100" name="name" id="InputName">
                           </div>
                           <div class="col-md-12">
                              <label for="InputName" class="form-label small-text2">Specific location *</label>
                              <input type="text" placeholder="Type your specific location here" class="form-control body-1 netural-100" name="name" id="InputName" required="">
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Specific location is required</div>
                           </div>
                           <div class="col-md-12">
                              <h3 class="h3 Neutral/100 mt-5 mb-4">Choose the time and date you have requested</h3>
                              <div class="d-flex mb-4">
                                 <div class="me-5">
                                    <img class="me-2" src="/images/booking-form/available-icon.svg" alt="Available Icon">
                                    <span>Available</span>
                                 </div>
                                 <div class="">
                                    <img class="me-2" src="/images/booking-form/not-available-icon.svg" alt="Not Available Icon">
                                    <span>Not available</span>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-10 col-xl-12 col-md-12 mb-4">
                              <div class="calendar-wrapper" id="calendar-wrapper"></div>
                           </div>
                           <div class="col-md-12 mb-3">
                              <h3 class="h3 Neutral/100 mb-4">Select time</h3>
                              <div class="row">
                                 <div class="col-md-12">
                                    <ul class="time-list list-unstyled d-flex flex-wrap">
                                       <li class="me-3 mb-3">
                                          <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" value="06.00" checked>
                                          <label class="radio-label body-2 text-center w-100" for="btnradio1">06.00</label>
                                       </li>
                                       <li class="me-3 mb-3">
                                          <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" value="07.00">
                                          <label class="radio-label body-2 text-center w-100" for="btnradio2">07.00</label>
                                       </li>
                                       <li class="me-3 mb-3">
                                          <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off" value="08.00">
                                          <label class="radio-label body-2 text-center w-100" for="btnradio3">08.00</label>
                                       </li>
                                       <li class="me-3 mb-3">
                                          <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off" value="09.00">
                                          <label class="radio-label body-2 text-center w-100" for="btnradio4">09.00</label>
                                       </li>
                                       <li class="me-3 mb-3">
                                          <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off" value="10.00">
                                          <label class="radio-label body-2 text-center w-100" for="btnradio5">10.00</label>
                                       </li>
                                       <li class="me-3 mb-3">
                                          <input type="radio" class="btn-check" name="btnradio" id="btnradio6" autocomplete="off" value="11.00">
                                          <label class="radio-label body-2 text-center w-100" for="btnradio6">11.00</label>
                                       </li>
                                       <li class="me-3 mb-3">
                                          <input type="radio" class="btn-check" name="btnradio" id="btnradio7" autocomplete="off" value="12.00">
                                          <label class="radio-label body-2 text-center w-100" for="btnradio7">12.00</label>
                                       </li>
                                       <li class="me-3 mb-3">
                                          <input type="radio" class="btn-check" name="btnradio" id="btnradio8" autocomplete="off" value="13.00">
                                          <label class="radio-label body-2 text-center w-100" for="btnradio8">13.00</label>
                                       </li>
                                       <li class="me-3 mb-3">
                                          <input type="radio" class="btn-check" name="btnradio" id="btnradio9" autocomplete="off" value="14.00">
                                          <label class="radio-label body-2 text-center w-100" for="btnradio9">14.00</label>
                                       </li>
                                       <li class="me-3 mb-3">
                                          <input type="radio" class="btn-check" name="btnradio" id="btnradio10" autocomplete="off" value="15.00">
                                          <label class="radio-label body-2 text-center w-100" for="btnradio10">15.00</label>
                                       </li>
                                       <li class="me-3 mb-3">
                                          <input type="radio" class="btn-check" name="btnradio" id="btnradio11" autocomplete="off" value="16.00">
                                          <label class="radio-label body-2 text-center w-100" for="btnradio11">16.00</label>
                                       </li>
                                       <li class="me-3 mb-3">
                                          <input type="radio" class="btn-check" name="btnradio" id="btnradio12" autocomplete="off" value="17.00">
                                          <label class="radio-label body-2 text-center w-100" for="btnradio12">17.00</label>
                                       </li>
                                       <li class="me-3 mb-3">
                                          <input type="radio" class="btn-check" name="btnradio" id="btnradio13" autocomplete="off" value="18.00">
                                          <label class="radio-label body-2 text-center w-100" for="btnradio13">18.00</label>
                                       </li>
                                       <li class="me-3 mb-3">
                                          <input type="radio" class="btn-check" name="btnradio" id="btnradio14" autocomplete="off" value="19.00">
                                          <label class="radio-label body-2 text-center w-100" for="btnradio14">19.00</label>
                                       </li>
                                       <li class="me-3 mb-3">
                                          <input type="radio" class="btn-check" name="btnradio" id="btnradio15" autocomplete="off" value="20.00">
                                          <label class="radio-label body-2 text-center w-100" for="btnradio15">20.00</label>
                                       </li>
                                       <li class="me-3 mb-3">
                                          <input type="radio" class="btn-check" name="btnradio" id="btnradio16" autocomplete="off" value="21.00">
                                          <label class="radio-label body-2 text-center w-100" for="btnradio16">21.00</label>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 text-end">
                              <a href="#" class="theme-btn primary-btn d-inline-flex">Next
                                 <img class="ms-2" src="/images/booking-form/next-icon.svg" alt="Next Icon">
                              </a>
                           </div>
                        </div>
                     </div>

                     <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                        <div class="row">
                           <div class="col-4 col-md-3 col-lg-3 col-xl-2 mb-3">
                              <p class="paragraph Neutral/100">Step 2</p>
                           </div>
                           <div class="col-8 col-md-9 col-lg-9 col-xl-10">
                              <div class="progress body-1">
                                 <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <h3 class="h3 Neutral/100 mt-4 mb-4">Fill in the order form</h3>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="InputName" class="form-label small-text2">Your preferred first name</label>
                              <input type="text" placeholder="Type your preferred name here" class="form-control body-1 netural-100" name="name" id="InputName">
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="InputName" class="form-label small-text2">Your partner's preferred first name</label>
                              <input type="text" placeholder="Type your preferred name here" class="form-control body-1 netural-100" name="name" id="InputName">
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="InputName" class="form-label small-text2">Your email</label>
                              <input type="text" placeholder="Type your email here" class="form-control body-1 netural-100" name="name" id="InputName">
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="phone" class="form-label small-text2">Your phone number</label>
                              <input class="form-control body-1 netural-100" type="tel" id="phone" placeholder="e.g. +1 702 123 4567" value="+61 ">
                           </div>
                           <div class="col-md-12 mb-5 mt-3">
                              <div class="form-term-condition p-5">
                                 <h3 class="h3 netural-100 mb-4">Conditions of booking:</h3>
                                 <p class="body-2 netural-100">
                                    a) I understand that is my responsibility to ensure the Notice of Intended Marriage form is lodged with Simple Ceremonies at least one calendar month prior to the ceremony date.<br><br>
                                    The Notice of Intended Marriage form must be prepared on this website and uploaded.<br><br>
                                    b) I understand that the Commonwealth Government of Australia recommends all couples receive pre-marriage counselling. It is not compulsory but it is recommended.
                                       <a class="d-block mb-1" href="/faq">Click here to see some services</a><br>
                                    c) I have read and accept the Terms as shown on this website. Click here to see 
                                       <a class="d-block mb-1" href="/term-and-condition">Terms and Conditions</a><br>
                                    d) I understand that this booking is non-refundable. The booking can ONLY be changed, if one calendar month and two days notice is given prior to the scheduled ceremony date. If this is the case the rescheduling fee will be $85, otherwise you will need to re-book and pay again.<br><br>
                                    e) I understand The maximum number of people at the ceremony is 20. That is 18 guests (including children above 5 yrs) and the 2 of you. At this location, this can not be increased.<br><br>
                                 </p>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required="">
                                    <label class="form-check-label body-1 netural-100" for="invalidCheck2">
                                       I Agree with the above Conditions (Required)
                                    </label>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 d-flex justify-content-end">
                              <a href="#" class="theme-btn primary-btn d-inline-flex me-3">
                                 <img class="me-2" src="/images/single-location/left-icon.svg" alt="Back Icon">Back
                              </a>
                              <a href="#" class="theme-btn primary-btn d-inline-flex">Next
                                 <img class="ms-2" src="/images/booking-form/next-icon.svg" alt="Next Icon">
                              </a>
                           </div>
                        </div>
                     </div>

                     <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                        <div class="row">
                           <div class="col-4 col-md-3 col-lg-3 col-xl-2 mb-3">
                              <p class="paragraph Neutral/100">Step 3</p>
                           </div>
                           <div class="col-8 col-md-9 col-lg-9 col-xl-10">
                              <div class="progress body-1">
                                 <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <h3 class="h3 Neutral/100 mt-4 mb-4">Payment</h3>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="InputName" class="form-label small-text2">Input your Voucher code here, if you have one</label>
                              <input type="text" placeholder="Type here" class="form-control body-1 netural-100" name="name" id="InputName">
                           </div>
                           <div class="col-md-12">
                              <div class="row">
                                 <div class="col-md-4 mb-4">
                                    <a href="#">
                                       <img class="img-fluid w-100" src="/images/booking-form/visa-card.svg" alt="Visa Card">
                                    </a>
                                 </div>
                                 <div class="col-md-4 mb-4">
                                    <a href="#">
                                       <img class="img-fluid w-100" src="/images/booking-form/b-pay.svg" alt="Visa Card">
                                    </a>
                                 </div>
                                 <div class="col-md-4 mb-4">
                                    <a href="#">
                                       <img class="img-fluid w-100" src="/images/booking-form/after-pay.svg" alt="Visa Card">
                                    </a>
                                 </div>
                                 <div class="col-md-4">
                                    <a href="#">
                                       <img class="img-fluid w-100" src="/images/booking-form/ethereum.svg" alt="Visa Card">
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 d-flex justify-content-end">
                              <a href="#" class="theme-btn primary-btn d-inline-flex">
                                 <img class="me-2" src="/images/single-location/left-icon.svg" alt="Back Icon">Back
                              </a>
                           </div>
                        </div>
                     </div>

                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection