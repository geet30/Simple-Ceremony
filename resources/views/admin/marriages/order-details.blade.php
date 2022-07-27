@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
   <div class="col-2 col-md-3 col-lg-2 px-0">
      @include('elements.admin-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-4">
      @include('elements.panel-header')
         <div class="col-12">
            <a href="/marriages" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
         </div>
         <div class=" card panel-card mb-4">
            <div class="card-body">
               <div class="col-12">
                  <div class="row">
                     <div class="col-xxl-6 ">
                        <div class="d-flex">
                           <div class="col-5 col-md-6 col-xxl-5 align-self-center">
                              <h1 class="h3 neutral-100 mb-0">Order details  </h1>
                           </div>
                           <div class="col-7 align-self-center text-end d-md-none ">
                              <span class="status registered  ">30 days till marriage</span>
                           </div>
                           <div class="col-md-6 col-xxl-7  align-self-center mt-2 mt-md-0 w-100 d-none d-md-flex">
                              <div class="progress theme-progress body-1 w-40 align-self-center">
                                 <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
                              </div>
                              <div class="align-self-center ms-3 info-icon">
                                 <a href="" class="theme-tip"><img src="/images/icons/Info-light.svg" class="img-fluid"><span>Data Entered into NoIM</span></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-6 text-xxl-end mt-3 mt-xxl-0">
                        <div class="d-flex justify-content-xxl-end">
                           <div class="d-flex align-self-center me-5">
                              <div class="align-self-center me-2 body-2-semi-bold">Status</div>
                           <div class="dropdown table-dropdown align-self-center">
                                       <button class="btn dropdown-toggle approved" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                       Booking/Pending
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                       <li><a class="dropdown-item approved" href="#">Booking/Pending</a></li>
                                         <li><a class="dropdown-item waiting-approval" href="#">Pending</a></li>
                                         <li><a class="dropdown-item status-turquoise-100" href="#">Lodged</a></li>
                                         <li><a class="dropdown-item status-blueturquoise-100" href="#">Lodged(Pending)</a></li>
                                         <li><a class="dropdown-item status-funblue " href="#">Lodged (Voucher only - Booking to be made)</a></li>
                                       </ul>
                                     </div>
                           </div>
                           <div class=" align-self-center ">
                            <a href="" class="theme-btn primary-btn-border d-inline-flex" data-bs-toggle="offcanvas" data-bs-target="#reminder"> Create reminder</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--main content  -->
               <div class="row pt-32">
                  <div class="col-12">
                     <ul class="nav theme-tabs">
                        <li class="nav-item">
                           <a class="nav-link active" id="information-tab" data-bs-toggle="tab" data-bs-target="#information" href="#">Information</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="docs-tab" data-bs-toggle="tab" data-bs-target="#docs" href="#">Details and Docs</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="documents-tab" data-bs-toggle="tab" data-bs-target="#documents" href="#">Add-ons <span class="neutral-70">(3)</span></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="reminders-tab" data-bs-toggle="tab" data-bs-target="#reminders" href="#">Reminders</a>
                        </li>
                     </ul>
                     <!-- tab content -->
                     <div class="tab-content" id="tabContent">
                        <div class="tab-pane fade show active" id="information" role="tabpanel" aria-labelledby="information-tab">
                           @include('elements.marriage.order.information')
                           @include('elements.marriage.order.choose-marriage-celebrant')
                           @include('elements.marriage.order.reschedule')
                           @include('elements.marriage.order.invoice')
                        </div>
                        <div class="tab-pane fade" id="docs" role="tabpanel" aria-labelledby="docs-tab">
                           @include('elements.marriage.order.docs-noim')
                           @include('elements.marriage.order.feedback')
                        </div>
                        <div class="tab-pane fade" id="documents" role="tabpanel" aria-labelledby="documents-tab">
                           @include('elements.marriage.order.add-ons')
                        </div>
                        <div class="tab-pane fade" id="reminders" role="tabpanel" aria-labelledby="reminders-tab">
                           @include('elements.marriage.order.reminder')
                        </div>
                     </div>
                     <!-- tab content -->
                  </div>
               </div>
               <!-- main content -->
            </div>
         </div>
      </div>
   </div>
</div>
@include('elements.marriage.order.create-reminder')
@endsection