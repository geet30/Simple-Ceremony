@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
         @include('elements.common.admin-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-4">
         @include('elements.common.panel-header')
         <div class="d-flex mt-4 mb-4 justify-content-between">
            <a href="/all-triggers-and-emails" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4 mb-md-0"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
            <a href="/all-triggers-and-emails" class="theme-btn primary-btn h-100">Save</a>
         </div>
         <div class="card panel-card">
            <div class="card-body">
               <form class="needs-validation" method="POST" novalidate>
                  <div class="row">
                     <div class="col-lg-12 col-xl-10 col-xxl-8">
                        <div class="row">
                           <div class="col-md-12 mb-4">
                              <label class="form-label small-text2">Subject</label>
                              <textarea placeholder="Type your subject here" class="form-control body-1 netural-100" rows="2"></textarea>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label class="form-label small-text2">Receiver</label>
                              <select required="" name="customer_type" class="js-placeholder-single-input form-control">
                                 <option value="" disabled="" selected="" hidden="">Choose receiver here</option>
                                 <option value="1">Couple</option>
                                 <option value="2">Marriage celebrant</option>
                                 <option value="3">Partner</option>
                                 <option value="4">Simple ceremonies</option>
                              </select>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Bank is required</div>
                           </div>
                           <div class="col-md-12">
                              <div class="row">
                                 <div class="col-md-6 col-lg-1 mb-4">
                                    <label for="InputName" class="form-label small-text2">Time</label>
                                    <input type="number" value="1" class="form-control body-1 netural-100" name="name" id="InputName" required>
                                    <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Business name is required</div>
                                 </div>
                                 <div class="col-md-12 col-lg-11">
                                    <div class="row">
                                       <div class="col-md-6 col-lg-4 mb-4">
                                          <label class="form-label small-text2">Time category</label>
                                          <select required="" name="customer_type" class="js-placeholder-single-input form-control">
                                             <option value="" disabled="" selected="" hidden="">Choose time category</option>
                                             <option value="1">Minutes</option>
                                             <option value="2">Hours</option>
                                             <option value="3">Days</option>
                                             <option value="4">Weeks</option>
                                             <option value="5">Month</option>
                                          </select>
                                          <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Bank is required</div>
                                       </div>
                                       <div class="col-md-6 col-lg-4 mb-4">
                                          <label class="form-label small-text2">Category</label>
                                          <select required="" name="customer_type" class="js-placeholder-single-input form-control">
                                             <option value="" disabled="" selected="" hidden="">Choose category</option>
                                             <option value="1">Before</option>
                                             <option value="2">After</option>
                                          </select>
                                          <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Bank is required</div>
                                       </div>
                                       <div class="col-md-6 col-lg-4 mb-4">
                                          <label class="form-label small-text2">Trigger</label>
                                          <select required="" name="customer_type" class="js-placeholder-single-input form-control">
                                             <option value="" disabled="" selected="" hidden="">Choose trigger</option>
                                             <option value="1">Booked</option>
                                             <option value="2">Sign NoIM & docs</option>
                                             <option value="3">Lodged or Lodged pending</option>
                                             <option value="4">Married</option>
                                             <option value="5">Registered</option>
                                             <option value="6">Finalised</option>
                                             <option value="7">Cancelled</option>
                                             <option value="8">Refunded</option>
                                          </select>
                                          <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Bank is required</div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 mb-4">
                              <label class="form-label small-text2">Message</label>
                              <textarea placeholder="Type your message here" class="form-control body-1 netural-100" rows="10"></textarea>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="InputName" class="form-label small-text2">Overview</label>
                              <input type="text" placeholder="#add overview here" class="form-control body-1 netural-100" name="name" id="InputName" required>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Business name is required</div>
                           </div>
                           <div class="col-md-12 mb-4">
                              <input type="submit" value="Save" class="d-inline-flex theme-btn primary-btn justify-content-center sticky-bottom">
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection