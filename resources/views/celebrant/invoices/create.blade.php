@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
      @include('elements.celebrant-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-md-4">
         @include('elements.celebrant.panel-header')
         <a href="/invoices" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
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
               <form class="needs-validation row" method="POST" novalidate>
                  <div class="col-md-6 col-lg-3  mb-4">
                     <label class="form-label small-text2">Recipient</label>
                     <input type="text" value="Simple ceremony" class="form-control body-1 netural-100" name="name" readonly>
                  </div>
                  <div class="col-md-6 col-lg-3  mb-4">
                     <label class="form-label small-text2">ABN number</label>
                     <input type="text" value="098090909090" class="form-control body-1 netural-100" name="name" readonly>
                  </div>
                  <div class="col-12">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="row">
                              <div class="col-md-6 col-lg-6 mb-4">
                                 <label class="form-label small-text2">Name couple</label>
                                 <input type="text" placeholder="Add name couple here" class="form-control body-1 netural-100" name="name">
                              </div>
                              <div class="col-md-6 col-lg-6  mb-4">
                                 <label class="form-label small-text2">Event date</label>
                                 <input role="button" type="text" placeholder="Choose date here" class="form-control body-1 netural-100" name="name" readonly data-bs-toggle="modal" data-bs-target="#calendarmodal">
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="row">
                              <div class="col-md-3 col-lg-2 mb-4">
                                 <label for="InputName" class="form-label small-text2">Qty</label>
                                 <input type="text" value="0" class="form-control body-1 netural-100" name="name" id="InputName" required="">
                                 <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Partner fee is required</div>
                              </div>
                              <div class="col-md-3 col-lg-2 mb-4">
                                 <label for="InputName" class="form-label small-text2">Price</label>
                                 <input type="text" value="$ 0" class="form-control body-1 netural-100" name="name" id="InputName" required="">
                                 <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>SC admin fee is required</div>
                              </div>
                              <div class="col-md-3 col-lg-2 mb-4">
                                 <label for="InputName" class="form-label small-text2">Total</label>
                                 <input type="text" value="$ 0" class="form-control body-1 netural-100" name="name" id="InputName" required="">
                                 <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Total fee is required</div>
                              </div>
                              <div class="col-md-3 col-lg-2 mb-4">
                                 <label for="InputName" class="form-label small-text2 d-block">&nbsp;</label>
                                 <a class="cross-icon"><img src="/images/icons/cross.svg" class="img-fluid"></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="row">
                              <div class="col-md-6 col-lg-6 mb-4">
                                 <label class="form-label small-text2">Name couple</label>
                                 <input type="text" placeholder="Add name couple here" class="form-control body-1 netural-100" name="name">
                              </div>
                              <div class="col-md-6 col-lg-6  mb-4">
                                 <label class="form-label small-text2">Event date</label>
                                 <input role="button" type="text" placeholder="Choose date here" class="form-control body-1 netural-100" name="name" readonly data-bs-toggle="modal" data-bs-target="#calendarmodal">
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="row">
                              <div class="col-md-3 col-lg-2 mb-4">
                                 <label for="InputName" class="form-label small-text2">Qty</label>
                                 <input type="text" value="0" class="form-control body-1 netural-100" name="name" id="InputName" required="">
                                 <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Partner fee is required</div>
                              </div>
                              <div class="col-md-3 col-lg-2 mb-4">
                                 <label for="InputName" class="form-label small-text2">Price</label>
                                 <input type="text" value="$ 0" class="form-control body-1 netural-100" name="name" id="InputName" required="">
                                 <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>SC admin fee is required</div>
                              </div>
                              <div class="col-md-3 col-lg-2 mb-4">
                                 <label for="InputName" class="form-label small-text2">Total</label>
                                 <input type="text" value="$ 0" class="form-control body-1 netural-100" name="name" id="InputName" required="">
                                 <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Total fee is required</div>
                              </div>
                              <div class="col-md-3 col-lg-2 mb-4">
                                 <label for="InputName" class="form-label small-text2 d-block">&nbsp;</label>
                                 <a class="cross-icon"><img src="/images/icons/cross.svg" class="img-fluid"></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 mb-4">
                     <a class="d-flex add-link">
                        <div class="align-self-center mr-6"><img src="/images/icons/add-primary.svg" class="img-fluid"></div>
                        <div class="align-self-center">Add item</div>
                     </a>
                  </div>
                  <div class="col-12">
                     <div class="row">
                        <div class="col-lg-6">
                           &nbsp;
                        </div>
                        <div class="col-lg-6">
                           <div class="row">
                              <div class="col-md-3 col-lg-2 mb-4">
                                 &nbsp;
                              </div>
                              <div class="col-md-3 col-lg-2 mb-4 text-end">
                                 <span class="body-3 neutral-100">Total :</span>
                              </div>
                              <div class="col-md-3 col-lg-2 mb-4 text-end">
                                 <span class="body-1 neutral-100  ">$ 324</span>
                              </div>
                              <div class="col-md-3 col-lg-2 mb-4">
                                 &nbsp;
                              </div>
                           </div>
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
                           {{-- <button type="submit" id="submit_button" class="theme-btn primary-btn me-0 me-lg-4 mb-3 mb-lg-0 border-0">Create invoice</button> --}}
                           <a href="/invoices" class="theme-btn primary-btn me-0 me-lg-4 mb-3 mb-lg-0 border-0">Create invoice</a>
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