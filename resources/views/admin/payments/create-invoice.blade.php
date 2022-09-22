@extends('layouts.panels')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
         @include('elements.common.admin-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-4">
         @include('elements.common.panel-header')
         <a href="{{url('payments/celebrants-invoice')}}" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
         <div class="card panel-card">
            <div class="card-body">
               <section class="pb-40">
                  <div class="row">
                     <div class="col-md-12 align-self-center">
                        <div class="table-dropdown d-flex align-items-lg-center flex-column flex-lg-row">
                           <h1 class="h3 neutral-100 mb-2">Create new invoice</h1>
                        </div>
                        <p class="subheader-3 neutral-100 mb-0">Invoice number #09012901912</p>
                     </div>
                  </div>
               </section> 
               @if ($errors->any())
                  <div class="alert alert-danger mb-3 alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        {{ $errors->first() }}
                  </div>
               @endif
               <form class="needs-validation" method="POST" novalidate action="{{ route('payments.store') }}">
                  <div class="row align-items-center">
                     <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3 mb-4">
                        <label class="form-label small-text2">Recipient</label>
                        <select required="" name="customer_type" class="js-placeholder-single-input form-control">
                           <option value="" disabled="" selected="" hidden="">Choose marriage celebrant</option>
                           <option value="1">Peter</option>
                           <option value="2">Lux</option>
                           <option value="3">Michael</option>
                           <option value="4">Johnson </option>
                        </select>
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Recipient required</div>
                     </div>
                     <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3 mb-4">
                        <label class="form-label small-text2">ABN number</label>
                        <div class="d-flex align-items-center">
                           <input type="text" placeholder="ABN number" class="form-control body-1 netural-100" name="name">
                           <span class="d-inline-block ms-2" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="left" data-bs-content="Select the recipient first,after that his data will appear">
                           <img src="/images/booking-form/information.svg" alt="Information Icon" style="width:13px;">
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="row align-items-center">
                     <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3 mb-4">
                        <div class="d-flex align-items-center">
                           <label class="form-label small-text2">Name bank</label>
                           <span class="d-inline-block ms-2 mb-2" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="bottom" data-bs-content="Select the recipient first,after that his data will appear">
                           <img src="/images/booking-form/information.svg" alt="Information Icon" style="width:13px;">
                           </span>
                        </div>
                        <input type="text" placeholder="Name bank" class="form-control body-1 netural-100" name="name">
                     </div>
                     <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3 mb-4">
                        <div class="d-flex align-items-center">
                           <label class="form-label small-text2">Bank number</label>
                           <span class="d-inline-block ms-2 mb-2" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="bottom" data-bs-content="Select the recipient first,after that his data will appear">
                           <img src="/images/booking-form/information.svg" alt="Information Icon" style="width:13px;">
                           </span>
                        </div>
                        <input type="text" placeholder="09019209011092" class="form-control body-1 netural-100" name="name">
                     </div>
                  </div>
                  <div class="row align-items-center">
                     <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="row">
                           <div class="col-md-6 col-lg-6 col-xl-3 col-xxl-3 mb-4 mb-xl-0">
                              <label class="form-label small-text2">Name couple</label>
                              <input type="text" placeholder="Add name couple here" class="form-control body-1 netural-100" name="name">
                           </div>
                           <div class="col-md-6 col-lg-6 col-xl-3 col-xxl-3 mb-4 mb-xl-0">
                              <label for="date" class="form-label small-text2">Event date</label>
                              <div class="input-group date theme-datepicker">
                                 <input role="button" type="text" class="form-control body-1 netural-100" id="date" placeholder="Choose date here"/>
                                 <span class="input-group-append">
                                 </span>
                              </div>
                           </div>
                           <div class="col-md-12 col-lg-12 col-xl-6 col-xxl-6">
                              <div class="row">
                                 <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-8 mb-4 mb-md-0">
                                    <div class="row">
                                       <div class="col-md-3 mb-4">
                                          <label for="InputName" class="form-label small-text2">Qty</label>
                                          <input type="text" value="0" class="form-control body-1 netural-100" name="name" id="InputName" required="">
                                          <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Partner fee is required</div>
                                       </div>
                                       <div class="col-md-3 mb-4">
                                          <label for="InputName" class="form-label small-text2">Price</label>
                                          <input type="text" value="$ 0" class="form-control body-1 netural-100" name="name" id="InputName" required="">
                                          <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>SC admin fee is required</div>
                                       </div>
                                       <div class="col-md-3 mb-4">
                                          <label for="InputName" class="form-label small-text2">Total</label>
                                          <input type="text" value="$ 0" class="form-control body-1 netural-100" name="name" id="InputName" required="">
                                          <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Total fee is required</div>
                                       </div>
                                       <div class="col-md-3 text-start text-xl-end">
                                          <label for="InputName" class="form-label small-text2 d-none d-md-block">&nbsp;</label>
                                          <a role="button" class="cross-icon"><img src="/images/icons/cross.svg" class="img-fluid"></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row mb-4">
                     <div class="col-12">
                        <a href="#" class="text-decoration-none turquoise-100 faq-link button-1">
                        <img style="filter:none;width: 16px;" class="me-2" src="/images/admin/partner/plus-icon.svg" alt="Add">Add item
                        </a>
                     </div>
                  </div>
                  <div class="row align-items-center">
                     <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-10 mb-4">
                        <div class="d-flex align-items-center justify-content-md-end">
                           <span class="body-3 neutral-100 me-5">Total :</span>
                           <span class="body-1 neutral-100 ">$ 324</span>
                        </div>
                     </div>
                  </div>
                  <div class="row align-items-center">
                     <div class="col-md-12 col-lg-12 col-xl-10 col-xxl-10 mb-4">
                        <label class="form-label small-text2">Give note</label>
                        <textarea class="form-control small-text1 netural-100" rows="15" readonly>Type here</textarea>
                     </div>
                  </div>
                  <div class="row align-items-center sticky-footer">
                     <div class="col-12">
                        <div class="d-flex flex-column flex-lg-row">
                           {{-- <button type="submit" id="submit_button" class="theme-btn primary-btn me-0 me-lg-4 mb-3 mb-lg-0 border-0">Create invoice</button> --}}
                           <a href="/all-invoices" class="theme-btn primary-btn me-0 me-lg-4 mb-3 mb-lg-0 border-0">Create invoice</a>
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
@endsection