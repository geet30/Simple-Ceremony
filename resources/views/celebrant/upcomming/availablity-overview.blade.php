@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
         @include('elements.celebrant-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-md-4">
         @include('elements.celebrant.panel-header')
         <div class="col-12">
            <a href="/upcomming" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
         </div>
         <div class=" card panel-card mb-4">
            <div class="card-body">
               <div class="col-12">
                  <div class="row">
                     <div class="col-xl-7 ">
                        <div class="d-md-flex">
                           <div class="col-md-6 col-xxl-5 align-self-center">
                              <h1 class="h3 neutral-100 mb-0">Wedding details </h1>
                           </div>
                           <div class="col-md-6 col-xxl-7  d-flex align-self-center mt-2 mt-md-0 w-100">
                              <div class="progress theme-progress body-1 w-40 align-self-center">
                                 <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
                              </div>
                              <div class="align-self-center ms-3 info-icon">
                                 <a href="" class="theme-tip"><img src="/images/icons/Info-light.svg" class="img-fluid"><span>Need to check data from admin</span></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-5 mt-3 mt-xl-0">
                        <div class="d-md-flex justify-content-xl-end">
                           <div class="align-self-center">
                              <div class="dropdown theme-dropdown">
                                 <button class="theme-btn white-btn-border dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                 Ceremony status
                                 </button>
                                 <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#"><span class="status booked">Booked</span></a></li>
                                    <li><a class="dropdown-item" href="#"><span class="status pending">Pending</span></a></li>
                                    <li><a class="dropdown-item" href="#"><span class="status accents-blue">Non - legal</span></a></li>
                                    <li><a class="dropdown-item" href="#"><span class="status lodged">Lodged</span></a></li>
                                    <li><a class="dropdown-item" href="#"><span class="status pending">Lodged (Pending)</span></a></li>
                                    <li><a class="dropdown-item" href="#"><span class="status registered">Lodged (Voucher only - booking to made)</span></a></li>
                                    <li><a class="dropdown-item" href="#"><span class="status pending">Non-Legal</span></a></li>
                                    <li><a class="dropdown-item" href="#"><span class="status accents-blue">Married</span></a></li>
                                    <li><a class="dropdown-item" href="#"><span class="status registered">Registered</span></a></li>
                                    <li><a class="dropdown-item" href="#"><span class="status finalised">Finalised</span></a></li>
                                    <li><a class="dropdown-item" href="#"><span class="status cancelled">Cancelled</span></a></li>
                                    <li><a class="dropdown-item" href="#"><span class="status refunded">Refunded</span></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="align-self-center ms-3 mt-3 mt-md-0 d-none d-md-block">
                              <span class="status registered ">30 days till marriage</span>
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
                           <a class="nav-link" id="docs-tab" data-bs-toggle="tab" data-bs-target="#docs" href="#">Docs & NoIM</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="documents-tab" data-bs-toggle="tab" data-bs-target="#documents" href="#">Documents you have signed</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="reminders-tab" data-bs-toggle="tab" data-bs-target="#reminders" href="#">Reminders</a>
                        </li>
                     </ul>
                     <!-- tab content -->
                     <div class="tab-content" id="tabContent">
                        <div class="tab-pane fade show active" id="information" role="tabpanel" aria-labelledby="information-tab">
                           @include('elements.availablity-overview.information')
                        </div>
                        <div class="tab-pane fade" id="docs" role="tabpanel" aria-labelledby="docs-tab">
                           @include('elements.availablity-overview.docs-noim')
                           @include('elements.availablity-overview.feedback')
                        </div>
                        <div class="tab-pane fade" id="documents" role="tabpanel" aria-labelledby="documents-tab">
                           @include('elements.availablity-overview.documents-signed')
                           @include('elements.availablity-overview.viewmessage')
                        </div>
                        <div class="tab-pane fade" id="reminders" role="tabpanel" aria-labelledby="reminders-tab">
                           @include('elements.availablity-overview.reminder')
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
@endsection