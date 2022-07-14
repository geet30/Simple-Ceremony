@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-md-3 col-lg-2 p-0">
         @include('elements.user-sidebar')
      </div>
      <div class="col-md-9 col-lg-10 px-md-4">
         @include('elements.user-header')
         <div class="card panel-card mt-4">
            <div class="card-body">
               <div class="row">
                  <div class="col-md-6">
                     <h3 class="h3 neutral-100 mb-md-4">Transaction List</h3>
                     <div class="row">
                        <div class="col-md-6 mb-4">
                           <label class="form-label small-text2">Wedding location <a href="#" class="ms-2 button-3 turquoise-100">See information</a></label>
                           <input type="text" value="Booking" class="form-control body-1 netural-100" readonly="">
                        </div>
                        <div class="col-md-6 mb-4">
                           <label for="InputName" class="form-label small-text2 d-none d-md-inline-block"></label>
                           <div class="d-flex flex-column flex-md-row justify-content-md-between justify-content-lg-start">
                              <a role="button" class="theme-btn primary-btn me-0 me-lg-4 mb-3 mb-md-0 border-0 w-100">Reschedule</a>
                              <a role="button" class="theme-btn primary-btn-border d-flex pe-auto justify-content-center w-100">Cancel</a>
                           </div>
                        </div>
                        <div class="col-md-12 mb-4">
                           <label for="InputName" class="form-label small-text2">Date of marriage</label>
                           <input type="text" value="Alfred St S, Milsons Point NSW 2061, Australia" class="form-control body-1 netural-100" readonly="">
                        </div>
                        <div class="col-md-12 mb-4">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.637456914615!2d151.20927081554817!3d-33.84745908066219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12aef2e9f08045%3A0x32d189ddcd6f84ce!2sSimple%20Ceremonies!5e0!3m2!1sen!2sin!4v1654854264298!5m2!1sen!2sin" width="100%" height="158" style="border:0;border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="col-md-6 mb-4">
                           <label for="InputName" class="form-label small-text2">Date of marriage</label>
                           <input type="text" value="Mar 01, 2022" class="form-control body-1 netural-100" readonly="">
                        </div>
                        <div class="col-md-6 mb-4">
                           <label for="InputName" class="form-label small-text2">Time</label>
                           <input type="text" value="08.00 am" class="form-control body-1 netural-100" readonly="">
                        </div>
                        <div class="col-md-12 mb-5">
                           <label for="InputName" class="form-label small-text2">Name marriage celebrant</label>
                           <input type="text" value="You don't have a marriage celebrant yet" class="form-control body-1 netural-100" readonly="">
                        </div>
                        <div class="col-12 mb-2">
                           <div class="d-flex align-items-center">
                              <h4 class="h4 neutral-100 mb-0">Add-ons</h4>
                              <a href="#" class="ms-3 button-3 turquoise-100">View add-ons available at this site</a>
                           </div>
                        </div>
                        <div class="col-12">
                            <div class="overview-add-ons">
                               <div class="overview-add-ons-details mb-4">
                                  <div class="row">
                                     <div class="col-md-5 mb-4">
                                        <label for="InputName" class="form-label small-text2">Name package</label>
                                        <input type="text" value="Corona pack" class="form-control body-1 netural-100" readonly="">
                                     </div>
                                     <div class="col-md-5 mb-4">
                                        <label for="InputName" class="form-label small-text2">Provider name</label>
                                        <input type="text" value="Nathan decoration" class="form-control body-1 netural-100" readonly="">
                                     </div>
                                     <div class="col-md-2 mb-4 text-center">
                                        <label for="InputName" class="form-label small-text2 text-center">Quantity</label>
                                        <input type="text" value="1" class="form-control body-1 netural-100 text-center" readonly="">
                                     </div>
                                  </div>
                                  <div class="row">
                                     <div class="col-md-12 mb-4">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <h3 class="h3 neutral-100 mb-0 me-3">$ 120</h3>
                                              <a role="button" class="theme-btn primary-btn me-3">Pay</a>
                                           </div>
                                           <span class="status registered thread">You got 1 comment in your thread!</span>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="row">
                                     <div class="col-md-12 mb-4">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <span class="body-3 netural-100 me-4">Minimal deposit 10%</span>
                                              <span class="netural-100 small-text2 me-4">Status</span>
                                              <span class="status pending me-5">Pending</span>
                                           </div>
                                           <a href="#" class="button-1 turquoise-100 text-decoration-none faq-link">See add-on details</a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="overview-add-ons-details mb-4">
                                  <div class="row">
                                     <div class="col-md-5 mb-4">
                                        <label for="InputName" class="form-label small-text2">Name package</label>
                                        <input type="text" value="Silver package" class="form-control body-1 netural-100" readonly="">
                                     </div>
                                     <div class="col-md-5 mb-4">
                                        <label for="InputName" class="form-label small-text2">Provider name</label>
                                        <input type="text" value="Visual photography" class="form-control body-1 netural-100" readonly="">
                                     </div>
                                     <div class="col-md-2 mb-4 text-center">
                                        <label for="InputName" class="form-label small-text2 text-center">Quantity</label>
                                        <input type="text" value="1" class="form-control body-1 netural-100 text-center" readonly="">
                                     </div>
                                  </div>
                                  <div class="row">
                                     <div class="col-md-12 mb-4">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <h3 class="h3 neutral-100 mb-0 me-3">$ 220</h3>
                                              
                                           </div>
                                           
                                        </div>
                                     </div>
                                  </div>
                                  <div class="row">
                                     <div class="col-md-12 mb-4">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              
                                              <span class="netural-100 small-text2 me-4">Status</span>
                                              <span class="status registered me-5">Approved</span>
                                           </div>
                                           <a href="#" class="button-1 turquoise-100 text-decoration-none faq-link">See add-on details</a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="overview-add-ons-details">
                                  <div class="row">
                                     <div class="col-md-5 mb-4">
                                        <label for="InputName" class="form-label small-text2">Name package</label>
                                        <input type="text" value="couple rings" class="form-control body-1 netural-100" readonly="">
                                     </div>
                                     <div class="col-md-5 mb-4">
                                        <label for="InputName" class="form-label small-text2">Provider name</label>
                                        <input type="text" value="The palace jewelry" class="form-control body-1 netural-100" readonly="">
                                     </div>
                                     <div class="col-md-2 mb-4 text-center">
                                        <label for="InputName" class="form-label small-text2 text-center">Quantity</label>
                                        <input type="text" value="1" class="form-control body-1 netural-100 text-center" readonly="">
                                     </div>
                                  </div>
                                  <div class="row">
                                     <div class="col-md-12 mb-4">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <h3 class="h3 neutral-100 mb-0 me-3">$ 200</h3>
                                              
                                           </div>
                                           <span class="status registered thread">You got 2 comments in your thread!</span>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="row">
                                     <div class="col-md-12 mb-4">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              
                                              <span class="netural-100 small-text2 me-4">Status</span>
                                              <span class="status cancelled me-5">Rejected</span>
                                           </div>
                                           <a href="#" class="button-1 turquoise-100 text-decoration-none faq-link">See add-on details</a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                     </div>
                  </div>
                  <div class="col-md-5 offset-md-1"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection