@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-md-3 col-lg-2 p-0">
         @include('elements.partner-sidebar')
      </div>
      <div class="col-md-9 col-lg-10 px-md-4">
         @include('elements.partner-panel-header')
         <a href="./all-invoices" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
         <div class="card panel-card">
            <div class="card-body">
               <section class="pb-40">
                  <div class="row">
                     <div class="col-md-12 align-self-center">
                        <div class="table-dropdown d-flex align-items-lg-center flex-column flex-lg-row">
                           <h1 class="h3 neutral-100 mb-2">Create tax invoice</h1>
                        </div>
                        <p class="subheader-3 neutral-100 mb-0">Invoice number #09012901912</p>
                     </div>
                  </div>
               </section>
               <form class="needs-validation" method="POST" novalidate>
                  <div class="row align-items-center">
                     <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3 mb-4">
                        <label class="form-label small-text2">Recipient</label>
                        <input type="text" value="Simple ceremony" class="form-control body-1 netural-100" name="name" readonly>
                     </div>
                     <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3 mb-4">
                        <label class="form-label small-text2">ABN number</label>
                        <input type="text" value="098090909090" class="form-control body-1 netural-100" name="name" readonly>
                     </div>
                  </div>
                  <div class="row align-items-center">
                     <div class="col-md-12 col-lg-8 col-xl-8 col-xxl-6 mb-4">
                        <div class="add-more-items-invoice">
                           <div class="row">
                              <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6 mb-4">
                                 <label class="form-label small-text2">Name couple</label>
                                 <input type="text" placeholder="Add name couple here" class="form-control body-1 netural-100" name="name">
                              </div>
                              <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6 mb-4">
                                 <label class="form-label small-text2">Event date</label>
                                 <input role="button" type="text" placeholder="Choose date here" class="form-control body-1 netural-100" name="name" readonly data-bs-toggle="modal" data-bs-target="#calendarmodal">
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-6 mb-4 mb-xxl-0">
                                 <label class="form-label small-text2">Item</label>
                                 <input type="text" placeholder="Add item description here" class="form-control body-1 netural-100" name="name">
                              </div>
                              <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-6 mb-4 mb-md-0">
                                 <div class="row">
                                    <div class="col-md-4 mb-4">
                                       <label for="InputName" class="form-label small-text2">Qty</label>
                                       <input type="text" value="0" class="form-control body-1 netural-100" name="name" id="InputName" required="">
                                       <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Partner fee is required</div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                       <label for="InputName" class="form-label small-text2">Price</label>
                                       <input type="text" value="$ 0" class="form-control body-1 netural-100" name="name" id="InputName" required="">
                                       <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>SC admin fee is required</div>
                                    </div>
                                    <div class="col-md-4">
                                       <label for="InputName" class="form-label small-text2">Total</label>
                                       <input type="text" value="$ 0" class="form-control body-1 netural-100" name="name" id="InputName" required="">
                                       <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Total fee is required</div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-12">
                                 <a href="#" class="text-decoration-none turquoise-100 faq-link button-1">
                                 <img style="filter:none;width: 16px;" class="me-2" src="/images/admin/partner/plus-icon.svg" alt="Add">Add item
                                 </a>
                              </div>
                           </div>
                           <a role="button" class="add-more-invoice"><img src="/images/admin/partner/add-invoice.svg" alt="Add more invoice"></a>
                        </div>
                     </div>
                  </div>
                  <div class="row align-items-center">
                      <div class="col-md-12 col-lg-8 col-xl-8 col-xxl-6 mb-4">
                          <div class="d-flex align-items-center justify-content-end">
                              <span class="body-3 neutral-100 me-5">Total :</span>
                              <span class="body-1 neutral-100 me-5">$ 324</span>
                          </div>
                      </div>
                  </div>
                  <div class="row align-items-center">
                     <div class="col-md-12 col-lg-8 col-xl-8 col-xxl-6 mb-4">
                        <label class="form-label small-text2">Give note</label>
                        <textarea class="form-control small-text1 netural-100" rows="10" readonly>Type here</textarea>
                     </div>
                  </div>
                  <div class="row align-items-center sticky-footer">
                     <div class="col-12">
                        <div class="d-flex flex-column flex-lg-row">
                           <button type="submit" id="submit_button" class="theme-btn primary-btn me-0 me-lg-4 mb-3 mb-lg-0 border-0">Create invoice</button>
                           <a role="button" id="add_more-package" class="theme-btn primary-btn-border d-flex pe-auto justify-content-center">Save as draft</a>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@include('elements.calander')
@endsection