@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
         @include('elements.admin-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-4">
         @include('elements.panel-header')
         <a href="/all-enquiries" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
         <div class="card panel-card">
            <div class="card-body">
               <h1 class="h3 netural-100 mb-4">Create new enquiry</h1>
               <div class="row">
                  <div class="col-md-12">
                     <form class="needs-validation" method="POST" novalidate>
                        <div class="row">
                           <div class="col-md-6 mb-4">
                              <label for="InputName" class="form-label small-text2">Name couple 1</label>
                              <input type="text" placeholder="Add name couple here" class="form-control body-1 netural-100" name="name" id="InputName" required>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Business name is required</div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="InputName" class="form-label small-text2">Name couple 2</label>
                              <input type="text" placeholder="Add name couple here" class="form-control body-1 netural-100" name="name" id="InputName" required>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Contact name is required</div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="InputName" class="form-label small-text2">Date marriage</label>
                              <input role="button" data-bs-toggle="modal" data-bs-target="#marriage-calander" type="text" placeholder="Choose date here" class="form-control body-1 netural-100" name="name" id="InputName" required readonly>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Business name is required</div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="InputName" class="form-label small-text2">Enquiry date</label>
                              <input role="button" data-bs-toggle="modal" data-bs-target="#enquiry-date-calander" type="text" placeholder="Choose date here" class="form-control body-1 netural-100" name="name" id="InputName" required readonly>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Contact name is required</div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="phone" class="form-label small-text2">Phone number</label>
                              <input class="form-control body-1 netural-100" type="tel" id="phone" placeholder="e.g. +1 702 123 4567" value="+61 " required>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Phone number is required</div>
                           </div>
                           <div class="col-md-6 mb-4">
                            <label class="form-label small-text2">Reference by</label>
                            <select required="" name="customer_type" class="js-placeholder-single-input form-control">
                               <option value="" disabled="" selected="" hidden="">Choose here</option>
                               <option value="1">Social media</option>
                               <option value="2">Website</option>
                               <option value="3">Other</option>
                            </select>
                            <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Business category is required</div>
                           </div>
                           <div class="col-md-12 mb-4">
                              <div class="d-flex align-items-center">
                                 <p class="button-1 mb-0">Choose status</p>
                                 <div class="dropdown table-dropdown ms-3">
                                    <button class="btn dropdown-toggle waiting-approval" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                       Follow up
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="">
                                    <li><a class="dropdown-item waiting-approval" href="#">Follow up</a></li>
                                    <li><a class="dropdown-item approved" href="#">Booked</a></li>
                                    <li><a class="dropdown-item rejected" href="#">No interest</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 mb-4">
                              <label for="InputName" class="form-label small-text2">Enquiry</label>
                              <textarea class="form-control body-1 netural-100" id="ceremonyplace" placeholder="Type here" rows="10"></textarea>
                           </div>
                           <div class="col-md-12 mb-4">
                              <input type="submit" value="Save" class="d-inline-flex theme-btn primary-btn justify-content-start sticky-bottom">
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('elements.admin.enquiry.enquiry-date-calander')
@include('elements.admin.enquiry.marriage-calander')
@endsection