@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
         @include('elements.admin-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-4">
         @include('elements.panel-header')
         <a href="/all-referrers" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
         <div class="card panel-card">
            <div class="card-body">
               <div class="row mb-4">
                  <div class="col-md-8 align-self-center">
                     <div class="table-dropdown d-flex align-items-lg-center flex-column flex-lg-row">
                        <h1 class="h4 netural-100 mb-0">Detail informations</h1>
                     </div>
                  </div>
                  <div class="col-md-4 align-self-start d-flex justify-content-md-end mt-3 mt-md-0">
                     <a href="all-referrers" class="theme-btn primary-btn me-3">Confirm</a>
                     <a role="button" class="theme-btn primary-btn-border" data-bs-toggle="offcanvas" data-bs-target="#referral_reason_sidebar">Decline</a>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <form class="needs-validation" method="POST" novalidate>
                        <div class="row">
                           <div class="col-md-6 mb-4">
                              <label for="InputName" class="form-label small-text2">Business name</label>
                              <input type="text" value="Nathan" class="form-control body-1 netural-100" name="name" id="InputName" required>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Business name is required</div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="InputName" class="form-label small-text2">Contact name</label>
                              <input type="text" value="Kristin Nathan" class="form-control body-1 netural-100" name="name" id="InputName" required>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Contact name is required</div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="phone" class="form-label small-text2">Phone number</label>
                              <input class="form-control body-1 netural-100" type="tel" id="phone" placeholder="e.g. +1 702 123 4567" value="+61 0980980808" required>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Phone number is required</div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="InputName" class="form-label small-text2">Email address</label>
                              <input type="text" value="kristin@gmail.com" class="form-control body-1 netural-100" name="name" id="InputName" required="">
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Email is required</div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="InputName" class="form-label small-text2">Business category</label>
                              <input type="text" value="Chair &amp; decoration" class="form-control body-1 netural-100" name="name" id="InputName" required="">
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Business category is required</div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="InputName" class="form-label small-text2">ABN Number</label>
                              <input type="text" value="090190190290" class="form-control body-1 netural-100" name="name" id="InputName" required>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>ABN Number is required</div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <div class="row">
                                 <div class="col-md-9">
                                    <label for="InputName" class="form-label small-text2">Bank</label>
                                    <input type="text" value="Westpac" class="form-control body-1 netural-100" name="name" id="InputName" required="">
                                    <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Bank is required</div>
                                 </div>
                                 <div class="col-md-3">
                                    <label for="InputName" class="form-label small-text2">BSB</label>
                                    <input type="text" value="73" class="form-control body-1 netural-100" name="name" id="InputName" required>
                                    <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>BSB is required</div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="InputName" class="form-label small-text2">Account number</label>
                              <input type="text" value="09090909" class="form-control body-1 netural-100" name="name" id="InputName" required>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Account number is required</div>
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
@include('elements.admin.referral.referral-reason-sidebar')
@endsection