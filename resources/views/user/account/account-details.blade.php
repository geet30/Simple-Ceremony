@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 p-0">
         @include('elements.user-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-md-4">
         @include('elements.user-header')
         <div class="card panel-card mt-4">
            <div class="card-body">
               <h1 class="h4 netural-100 mb-4">My account</h1>
               <div class="row">
                  <div class="col-md-12 col-lg-9 col-xl-9 col-xxl-8">
                     <form class="needs-validation" method="POST" novalidate>
                        <div class="row">
                           <div class="col-md-6 mb-4">
                              <label for="InputName" class="form-label small-text2">First (preferred) name</label>
                              <input type="text" value="Geoff" class="form-control body-1 netural-100" name="name" id="InputName" required>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Business name is required</div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="InputName" class="form-label small-text2">Your last name</label>
                              <input type="text" value="George" class="form-control body-1 netural-100" name="name" id="InputName" required>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Contact name is required</div>
                           </div>
                           <div class="col-md-12 mb-4">
                            <label for="InputName" class="form-label small-text2">Full name</label>
                            <input type="text" value="Geoffido george" class="form-control body-1 netural-100" name="name" id="InputName" required>
                            <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Contact name is required</div>
                         </div>
                         <div class="col-md-6 mb-4">
                            <label for="InputName" class="form-label small-text2">Email address</label>
                            <input type="text" value="Geoffgeorge@gmail.com" class="form-control body-1 netural-100" name="name" id="InputName" required="">
                            <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Email is required</div>
                         </div>
                           <div class="col-md-6 mb-4">
                              <label for="phone" class="form-label small-text2">Phone number</label>
                              <input class="form-control body-1 netural-100" type="tel" id="phone" placeholder="e.g. +1 702 123 4567" value="+61 0909090909" required>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Phone number is required</div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="InputName" class="form-label small-text2">Address</label>
                              <input type="text" value="98 Shirley Street" class="form-control body-1 netural-100" name="name" id="InputName" required>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Business category is required</div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="InputName" class="form-label small-text2">Suburb/Town/City</label>
                              <input type="text" value="Pimpama Qld" class="form-control body-1 netural-100" name="name" id="InputName" required>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>ABN Number is required</div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="InputName" class="form-label small-text2">State/Territory/Province</label>
                              <input type="text" value="Tas" class="form-control body-1 netural-100" name="name" id="InputName" required>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Account number is required</div>
                           </div>
                           <div class="col-md-6 mb-4">
                            <label for="InputName" class="form-label small-text2">Post code / Zip Code</label>
                            <input type="text" value="0000" class="form-control body-1 netural-100" name="name" id="InputName" required>
                            <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Account number is required</div>
                         </div>
                           <div class="col-md-6 mb-4">
                              <label for="InputName" class="form-label small-text2">Password</label>
                              <input type="password" value="************" class="form-control body-1 netural-100" name="name" id="InputName" required>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Account number is required</div>
                           </div>
                           <div class="col-md-12 mb-4 sticky-footer text-start">
                              <div class="row">
                                 <div class="col-md-12">
                                    <a href="/user/account-edit" role="button" class="d-inline-flex theme-btn primary-btn justify-content-center">
                                    <img class="me-2" src="/images/admin/partner/edit.svg" alt="Edit">
                                    Edit information
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
      </div>
   </div>
</div>
@endsection