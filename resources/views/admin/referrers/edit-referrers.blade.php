@extends('layouts.panels')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
         @include('elements.common.admin-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-4">
         @include('elements.common.panel-header')
         <a href="/all-referrers" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
         <div class="card panel-card">
            <div class="card-body">
               <h1 class="h4 netural-100 mb-4">Detail informations</h1>
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
                              <label for="InputName" class="form-label small-text2">Email</label>
                              <input type="text" value="kristin@gmail.com" class="form-control body-1 netural-100" name="name" id="InputName" required="">
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Email is required</div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label class="form-label small-text2">Business category *</label>
                              <select required="" name="customer_type" class="js-placeholder-single-input form-control">
                                 <option value="" disabled="" selected="" hidden="">Choose category here</option>
                                 <option value="1">Photographer</option>
                                 <option value="2">Chair & decoration</option>
                                 <option value="3">Ring</option>
                                 <option value="4">Venue to celebrate</option>
                                 <option value="5">Flower</option>
                                 <option value="6">Car rent</option>
                                 <option value="7">Other</option>
                              </select>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Business category is required</div>
                             </div>
                           <div class="col-md-6 mb-4">
                              <label for="InputName" class="form-label small-text2">ABN number</label>
                              <input type="text" value="090190190290" class="form-control body-1 netural-100" name="name" id="InputName" required>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>ABN Number is required</div>
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
                              <div class="row">
                                 <div class="col-md-3">
                                    <label for="InputName" class="form-label small-text2">BSB</label>
                                    <input type="text" value="73" class="form-control body-1 netural-100" name="name" id="InputName" required>
                                    <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>BSB is required</div>
                                 </div>
                                 <div class="col-md-9">
                                    <label for="InputName" class="form-label small-text2">Account number</label>
                                    <input type="text" value="09090909" class="form-control body-1 netural-100" name="name" id="InputName" required>
                                    <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Account number is required</div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 mb-4">
                              <input type="submit" value="Save" class="d-inline-flex theme-btn primary-btn justify-content-start">
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