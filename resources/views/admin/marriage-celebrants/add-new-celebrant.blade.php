@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
            @include('elements.admin-sidebar')
        </div>
        <div class="col-10 col-md-9 col-lg-10 px-4">
            @include('elements.panel-header')
            <a href="/marriage-celebrants-list" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
            <div class="card panel-card">
               <div class="card-body">
                  <h1 class="h3 netural-100 mb-4">Add new partner</h1>
                  <form class="needs-validation" method="POST" novalidate>
                     <div class="row">
                        <div class="col-lg-12 col-xl-10 col-xxl-8">
                           <div class="row">
                              <div class="col-md-6 mb-4">
                                 <label for="InputName" class="form-label small-text2">Username *</label>
                                 <input type="text" placeholder="Type your username here" class="form-control body-1 netural-100" name="name" id="InputName" required>
                                 <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Business name is required</div>
                              </div>
                              <div class="col-md-6 mb-4">
                                 <label for="InputName" class="form-label small-text2">Password *</label>
                                 <input type="text" placeholder="Type your password here" class="form-control body-1 netural-100" name="name" id="InputName" required>
                                 <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Contact name is required</div>
                              </div>
                              <div class="col-md-6 mb-4">
                                <label for="InputName" class="form-label small-text2">First name *</label>
                                <input type="text" placeholder="Type your first name here" class="form-control body-1 netural-100" name="name" id="InputName" required>
                                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Business name is required</div>
                             </div>
                             <div class="col-md-6 mb-4">
                                <label for="InputName" class="form-label small-text2">Other names *</label>
                                <input type="text" placeholder="Type your other names here" class="form-control body-1 netural-100" name="name" id="InputName" required>
                                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Contact name is required</div>
                             </div>
                             <div class="col-md-6 mb-4">
                                <label for="InputName" class="form-label small-text2">Surname *</label>
                                <input type="text" placeholder="Type your surname here" class="form-control body-1 netural-100" name="name" id="InputName" required>
                                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Business name is required</div>
                             </div>
                             <div class="col-md-6 mb-4">
                                <label for="InputName" class="form-label small-text2">A number</label>
                                <input type="text" placeholder="Type your A number here" class="form-control body-1 netural-100" name="name" id="InputName" required>
                                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Contact name is required</div>
                             </div>
                             <div class="col-md-6 mb-4">
                               <label for="InputName" class="form-label small-text2">ABN Number</label>
                               <input type="text" placeholder="Type your ABN number here" class="form-control body-1 netural-100" name="name" id="InputName" required>
                               <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Business name is required</div>
                            </div>
                            <div class="col-md-6 mb-4">
                               <label for="InputName" class="form-label small-text2">Address</label>
                               <input type="text" placeholder="Type your address here" class="form-control body-1 netural-100" name="name" id="InputName" required>
                               <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Contact name is required</div>
                            </div>
                              <div class="col-md-6 mb-4">
                                 <label for="phone" class="form-label small-text2">Phone number *</label>
                                 <input class="form-control body-1 netural-100" type="tel" id="phone" placeholder="e.g. +1 702 123 4567" value="+61 " required>
                                 <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Phone number is required</div>
                              </div>
                              <div class="col-md-6 mb-4">
                                 <label for="InputName" class="form-label small-text2">Email *</label>
                                 <input type="text" placeholder="Type your email here" class="form-control body-1 netural-100" name="name" id="InputName" required>
                                 <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Email is required</div>
                              </div>
                              <div class="col-md-6 mb-4">
                                <label class="form-label small-text2">Bank</label>
                                      <select required="" name="customer_type" class="js-placeholder-single-input form-control">
                                         <option value="" disabled="" selected="" hidden="">Westparc</option>
                                         <option value="1">ANZ</option>
                                         <option value="2">NAB</option>
                                         <option value="3">Westpac Bank</option>
                                         <option value="4">Bank of Queensland</option>
                                         <option value="5">Macquarie Bank</option>
                                         <option value="6">Bendigo Bank</option>
                                         <option value="7">AMP Bank Ltd</option>
                                      </select>
                                      <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Bank is required</div>
                             </div>
                             <div class="col-md-6 mb-4">
                                <label for="InputName" class="form-label small-text2">BSB</label>
                                <input type="text" placeholder="_ _ _-_ _ _" class="form-control body-1 netural-100" name="name" id="InputName" required>
                                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>BSB is required</div>
                             </div>
                             <div class="col-md-12 mb-4">
                                <label for="InputName" class="form-label small-text2">Account number</label>
                                <input type="text" placeholder="09090909" class="form-control body-1 netural-100" name="name" id="InputName" required>
                                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Account number is required</div>
                             </div>
                             <div class="col-md-12 mb-4">
                                <div class="row">
                                   <div class="col-md-12 mb-2 mb-md-0">
                                      <label for="InputName" class="form-label small-text2">Upload avatar image</label>
                                   </div>
                                   <div class="col-md-7 col-lg-8 mb-3 mb-md-0">
                                      <input class="form-control body-1 netural-100" id="formFileLg" type="file">
                                   </div>
                                   <div class="col-md-5 col-lg-4">
                                      <label role="button" for="formFileLg" class="form-label small-text2 mb-0 theme-btn primary-btn">Choose imagee</label>
                                   </div>
                                </div>
                             </div>
                              <div class="col-md-6 mb-4">
                                <label for="InputName" class="form-label small-text2 ms-2">Standard fee</label>
                                <input type="text" value="$ " class="form-control body-1 netural-100" name="name" id="InputName" required="">
                                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Business category is required</div>
                             </div>
                             <div class="col-md-6 mb-4">
                                <label for="InputName" class="form-label small-text2 ms-2">SC admin fee</label>
                                <input type="text" value="$ 50" class="form-control body-1 netural-100" name="name" id="InputName" required="">
                                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Business category is required</div>
                             </div>
                              <div class="col-md-12 mb-4">
                                 <label class="form-label small-text2">About me</label>
                                 <textarea placeholder="Please describe yourself" class="form-control body-1 netural-100" rows="2"></textarea>
                              </div>
                              <div class="col-md-12 col-lg-6 mb-4">
                                <div class="row">
                                 <div class="col-md-12 mb-3 mt-4">
                                     <div class="d-flex flex-column flex-md-row">
                                        <span class="body-2 netural-100 me-4">Locations list</span>
                                        <a role="button" class="mt-2 mt-md-0 button-1 turquoise-100 text-decoration-none faq-link" data-bs-toggle="offcanvas" data-bs-target="#celebrant_addlocation" aria-controls="celebrant_addlocation">Add new location</a>
                                     </div>
                                  </div>
                                   <div class="col-12 mb-4">
                                      <input type="text" placeholder="Add location here" class="form-control body-1 netural-100" name="name" id="InputName">
                                   </div>
                                   <div class="col-12 mb-4">
                                     <input type="text" placeholder="Add location here" class="form-control body-1 netural-100" name="name" id="InputName">
                                  </div>
                                </div>
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
@include('elements.admin.celebrant.celebrant-add-new-location')
@endsection