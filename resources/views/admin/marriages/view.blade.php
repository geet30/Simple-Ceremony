@extends('layouts.app')
@section('content')
<div class="container-fluid">
<div class="row">
   <div class="col-2 col-md-3 col-lg-2 px-0">
      @include('elements.admin-sidebar')
   </div>
   <div class="col-10 col-md-9 col-lg-10 px-4">
      @include('elements.panel-header')
      <ul class="add-on-list-nav row nav nav-pills mb-3 mt-3">
         <li class="nav-item col-6  col-xl-4 col-xxl nav-item  mb-3" role="presentation">
            <button class="nav-link w-100 active" type="button" role="tab">
               <div class="add-ons-nav d-flex">
                  <div class="add-ons-nav-image me-4">
                     <img src="/images/admin/partner/booking-performed.svg" alt="All marriages">
                  </div>
                  <div class="add-ons-nav-data text-start ">
                     <h3 class="h3">465</h3>
                     <p class="subheader-2 d-none d-md-block">All marriages</p>
                  </div>
               </div>
               <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">All marriages</p>
            </button>
         </li>
         <li class="nav-item col-6  col-xl-4 col-xxl nav-item  mb-3" role="presentation">
            <button class="nav-link w-100" id="Waiting-for-approval-tab" data-bs-toggle="pill" data-bs-target="#Waiting-for-approval" type="button" role="tab" aria-controls="Waiting-for-approval" aria-selected="false">
               <div class="add-ons-nav d-flex">
                  <div class="add-ons-nav-image me-4">
                     <img src="/images/admin/add-ons/timer-icon.svg" alt="">
                  </div>
                  <div class="add-ons-nav-data text-start ">
                     <h3 class="h3">50</h3>
                     <p class="subheader-2 d-none d-md-block">Pending</p>
                  </div>
               </div>
               <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">Pending</p>
            </button>
         </li>
         <li class="nav-item col-6  col-xl-4 col-xxl nav-item  mb-3" role="presentation">
            <button class="nav-link w-100" id="add-on-approved-tab" data-bs-toggle="pill" data-bs-target="#add-on-approved" type="button" role="tab" aria-controls="add-on-approved" aria-selected="false">
               <div class="add-ons-nav d-flex">
                  <div class="add-ons-nav-image me-4">
                     <img src="/images/marriage-celebrant/icons/booking.svg" alt="">
                  </div>
                  <div class="add-ons-nav-data text-start ">
                     <h3 class="h3">50</h3>
                     <p class="subheader-2 d-none d-md-block">Booked</p>
                  </div>
               </div>
               <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">Booked</p>
            </button>
         </li>
         <li class="nav-item col-6  col-xl-4 col-xxl nav-item  mb-3" role="presentation">
            <button class="nav-link w-100" id="add-on-reject-tab" data-bs-toggle="pill" data-bs-target="#add-on-reject" type="button" role="tab" aria-controls="add-on-reject" aria-selected="false">
               <div class="add-ons-nav d-flex">
                  <div class="add-ons-nav-image me-4">
                     <img src="/images/marriage-celebrant/icons/lodged.svg" alt="Lodged">
                  </div>
                  <div class="add-ons-nav-data text-start ">
                     <h3 class="h3">20</h3>
                     <p class="subheader-2 d-none d-md-block">Lodged</p>
                  </div>
               </div>
               <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">Lodged</p>
            </button>
         </li>
         <li class="nav-item col-6  col-xl-4 col-xxl nav-item  mb-3" role="presentation">
            <button class="nav-link w-100" id="add-on-reject-tab" data-bs-toggle="pill" data-bs-target="#add-on-reject" type="button" role="tab" aria-controls="add-on-reject" aria-selected="false">
               <div class="add-ons-nav d-flex">
                  <div class="add-ons-nav-image me-4">
                     <img src="/images/marriage-celebrant/icons/document.svg" alt="Lodged pending">
                  </div>
                  <div class="add-ons-nav-data text-start ">
                     <h3 class="h3">10</h3>
                     <p class="subheader-2 d-none d-md-block">Lodged pending</p>
                  </div>
               </div>
               <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">Lodged pending</p>
            </button>
         </li>
      </ul>
      <div class="collapse" id="collapseExample">
         <ul class="add-on-list-nav row nav nav-pills  upcomming-marriage-pills">
            <li class="nav-item col-6  col-xl-4 col-xxl nav-item  mb-3" role="presentation">
               <button class="nav-link w-100 " type="button" role="tab">
                  <div class="add-ons-nav d-flex">
                     <div class="add-ons-nav-image me-4">
                        <img src="/images/marriage-celebrant/icons/married.svg" alt="Married">
                     </div>
                     <div class="add-ons-nav-data text-start ">
                        <h3 class="h3">190</h3>
                        <p class="subheader-2 d-none d-md-block">Married</p>
                     </div>
                  </div>
                  <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">Married</p>
               </button>
            </li>
            <li class="nav-item col-6  col-xl-4 col-xxl nav-item  mb-3" role="presentation">
               <button class="nav-link w-100" id="Waiting-for-approval-tab" data-bs-toggle="pill" data-bs-target="#Waiting-for-approval" type="button" role="tab" aria-controls="Waiting-for-approval" aria-selected="false">
                  <div class="add-ons-nav d-flex">
                     <div class="add-ons-nav-image me-4">
                        <img src="/images/marriage-celebrant/icons/registered.svg" alt="Registered">
                     </div>
                     <div class="add-ons-nav-data text-start ">
                        <h3 class="h3">80</h3>
                        <p class="subheader-2 d-none d-md-block">Registered</p>
                     </div>
                  </div>
                  <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">Registered</p>
               </button>
            </li>
            <li class="nav-item col-6  col-xl-4 col-xxl nav-item  mb-3" role="presentation">
               <button class="nav-link w-100" id="add-on-reject-tab" data-bs-toggle="pill" data-bs-target="#add-on-reject" type="button" role="tab" aria-controls="add-on-reject" aria-selected="false">
                  <div class="add-ons-nav d-flex">
                     <div class="add-ons-nav-image me-4">
                        <img src="/images/marriage-celebrant/icons/finalised.svg" alt="Finalised">
                     </div>
                     <div class="add-ons-nav-data text-start ">
                        <h3 class="h3">50</h3>
                        <p class="subheader-2 d-none d-md-block">Finalised</p>
                     </div>
                  </div>
                  <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">Finalised</p>
               </button>
            </li>
            <li class="nav-item col-6  col-xl-4 col-xxl nav-item  mb-3" role="presentation">
               <button class="nav-link w-100" id="add-on-reject-tab" data-bs-toggle="pill" data-bs-target="#add-on-reject" type="button" role="tab" aria-controls="add-on-reject" aria-selected="false">
                  <div class="add-ons-nav d-flex">
                     <div class="add-ons-nav-image me-4">
                        <img src="/images/marriage-celebrant/icons/cancelled.svg" alt="Cancelled">
                     </div>
                     <div class="add-ons-nav-data text-start ">
                        <h2 class="h3">10</h2>
                        <p class="subheader-2 d-none d-md-block" >Cancelled</p>
                     </div>
                  </div>
                  <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">Cancelled</p>
               </button>
            </li>
            <li class="nav-item col-6  col-xl-4 col-xxl nav-item  mb-3" role="presentation">
               <button class="nav-link w-100" id="add-on-approved-tab" data-bs-toggle="pill" data-bs-target="#add-on-approved" type="button" role="tab" aria-controls="add-on-approved" aria-selected="false">
                  <div class="add-ons-nav d-flex">
                     <div class="add-ons-nav-image me-4">
                        <img src="/images/marriage-celebrant/icons/refund.svg" alt="Refunded">
                     </div>
                     <div class="add-ons-nav-data text-start ">
                        <h3 class="h3">5</h3>
                        <p class="subheader-2 d-none d-md-block">Refunded</p>
                     </div>
                  </div>
                  <p class="body-3-regular  d-md-none mb-0 mt-3 text-start">Refunded</p>
               </button>
            </li>
         </ul>
      </div>
      <div class="col-12 pt-20 pb-32 d-flex justify-content-center upcomming-marriage-top">
         <a class="position-relative " type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> </a>
      </div>
      <div class="row mb-3">
         <div class="col-lg-4 col-xl-3">
            <div class="form-group has-search w-100 position-relative">
               <span class="fa fa-search form-control-feedback"></span>
               <input type="text" class="form-control" placeholder="Search couple">
            </div>
         </div>
      </div>
     <div class="table-responsive">
     <table class="table align-middle theme-table">
         <thead>
            <tr>
               <th>Preferred couple’s name</th>
               <th>Booking created</th>
               <th>Progress</th>
               <th>Marriage celebrant</th>
               <th>Location</th>
               <th>Wedding date</th>
               <th>Status</th>
               <th>Days till marriage</th>
               <th></th>
               <th></th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <td style="min-width:160px" class="body-2">David & Sarah</td>
               <td  style="min-width:130px" class="body-2">Feb 21, 2022</td>
               <td style="min-width:50px" class="body-2" >20% <span class="align-self-center ms-1 info-icon">
                  <a href="" class="theme-tip"><img src="/images/icons/Info-light.svg" class="img-fluid"><span class="">New booking</span></a>
                  </span>
               </td>
               <td class="body-2 neutral-100" style="min-width:140px;"><a href="" data-bs-toggle="offcanvas" data-bs-target="#marriage-celebrant"  class="text-decoration-underline  add-link ">Assign marriage celebrant</a></td>
               <td class="body-2 neutral-100" style="min-width:130px;">
                  Bradfield Park
               </td>
               <td class="body-2 neutral-100" style="min-width:130px;">Sept 01, 2022</td>
               <td style="min-width:120px;">
                  <span class="status booked">Booked</span>
               </td>
               <td  style="min-width:60px;" class="body-2 neutral-100">
                  220 days
               </td>
               <td ></td>
               <td style="min-width:100px;">
                  <a href="/order-details" class="table-link">View info</a>
               </td>
            </tr>
            <tr>
               <td class="body-2 neutral-100" >John & Emma</td>
               <td class="body-2 neutral-100" >Feb 20, 2022</td>
               <td style="min-width:50px" class="body-2" >20% 
                  <span class="align-self-center ms-1 info-icon">
                  <a href="" class="theme-tip"><img src="/images/icons/Info-light.svg" class="img-fluid"><span class="">New booking</span></a>
                  </span>
               </td>
               <td class="body-2 neutral-100">Michael 
                  <span class="align-self-center ms-1 info-icon">
                  <a href="" class="theme-tip"><img src="/images/status/success.svg" class="img-fluid" alt="success">
                  <span class="w-auto">Approved</span></a>
                  </span>
               </td>
               <td class="body-2 neutral-100">
                  Tench Park
               </td>
               <td class="body-2 neutral-100" >Aug 20, 2022</td>
               <td>
                  <span class="status booked">Booked</span>
               </td>
               <td class="body-2 neutral-100">
                  220 days
               </td>
               <td ></td>
               <td >
                  <a href="/order-details" class="table-link">View info</a>
               </td>
            </tr>
            <tr>
               <td class="body-2 neutral-100">Joe & Jessica</td>
               <td class="body-2 neutral-100" >Feb 15, 2022</td>
               <td style="min-width:50px" class="body-2" >30% <span class="align-self-center ms-1 info-icon">
                  <a href="" class="theme-tip"><img src="/images/icons/Info-light.svg" class="img-fluid"><span>Data Entered into NoIM</span></a>
                  </span>
               </td>
               <td class="body-2 neutral-100">Alex 
                  <span class="align-self-center ms-1 info-icon">
                  <a href="" class="theme-tip"><img src="/images/status/pending.svg" class="img-fluid" alt="pending">
                  <span class="">Waiting for approval </span></a>
                  </span>
               </td>
               <td class="body-2 neutral-100">
                  Hunter Valley
               </td>
               <td class="body-2 neutral-100">Aug 15, 2022</td>
               <td>
                  <span class="status lodged">Lodged</span>
               </td>
               <td  style="min-width:60px;" class="body-2 neutral-100">
                  198 days
               </td>
               <td ><a class="table-link button-2" data-bs-toggle="modal" data-bs-target="#note">Note</a></td>
               <td>
                  <a href="/order-details" class="table-link">View info</a>
               </td>
            </tr>
            <tr>
               <td class="body-2 neutral-100">Chloe & Amy</td>
               <td class="body-2 neutral-100" >Feb 15, 2022</td>
               <td style="min-width:50px" class="body-2" >40% <span class="align-self-center ms-1 info-icon">
                  <a href="" class="theme-tip"><img src="/images/icons/Info-light.svg" class="img-fluid"><span>The data has been uploaded and signed and the NoIM along with the ID has been witnessed</span></a>
                  </span>
               </td>
               <td class="body-2 neutral-100">Jane 
                  <span class="align-self-center ms-1 info-icon">
                  <a href="" class="theme-tip theme-tip-Rejected"><img src="/images/status/error.svg" class="img-fluid" alt="error">
                  <span class="">
                     <div class="d-flex">
                        <div class="align-self-center me-2">Rejected</div>
                        <div class="turquoise-100 align-self-center">Assign other marriage celebrants</div>
                     </div>
               <br/>
               <div class="white-box">
                  <p class="button-1 text-black">Reason :</p>
                  <p class="body-3-medium text-black">There is the same schedule with other person 2s</p>
               </div>
               </span></a>
                  </span>
               </td>
               <td class="body-2 neutral-100">
                  Mort Bay - Balmain
               </td>
               <td class="body-2 neutral-100">Aug 14, 2022</td>
               <td>
                  <span class="status pending">Lodged (Pending)</span>
               </td>
               <td  style="min-width:60px;" class="body-2 neutral-100">
                  190 days
               </td>
               <td ></td>
               <td>
                  <a href="/order-details" class="table-link">View info</a>
               </td>
            </tr>
            <tr>
               <td class="body-2 neutral-100">Sam & Sophie</td>
               <td class="body-2 neutral-100" >Feb 15, 2022</td>
               <td style="min-width:50px" class="body-2" >50% <span class="align-self-center ms-1 info-icon">
                  <a href="" class="theme-tip"><img src="/images/icons/Info-light.svg" class="img-fluid"><span class="">All details have been entered and correct docs uploaded </span></a>
                  </span>
               </td>
               <td class="body-2 neutral-100">Johnson 
                  <span class="align-self-center ms-1 info-icon">
                  <a href="" class="theme-tip"><img src="/images/status/pending.svg" class="img-fluid" alt="pending">
                  <span class="">Waiting for approval</span></a>
                  </span>
               </td>
               <td class="body-2 neutral-100">
                  Baulkham Hills
               </td>
               <td class="body-2 neutral-100">Aug 12, 2022</td>
               <td>
                  <span class="status pending">Lodged (Pending)</span>
               </td>
               <td  style="min-width:60px;" class="body-2 neutral-100">
                  187 days
               </td>
               <td ><a class="table-link button-2" data-bs-toggle="modal" data-bs-target="#note">Note</a></td>
               <td>
                  <a href="/order-details" class="table-link">View info</a>
               </td>
            </tr>
            <tr>
               <td class="body-2 neutral-100">Jorsey & Erin</td>
               <td class="body-2 neutral-100" >Feb 10, 2022</td>
               <td style="min-width:50px" class="body-2" >10% <span class="align-self-center ms-1 info-icon">
                  <a href="" class="theme-tip"><img src="/images/icons/Info-light.svg" class="img-fluid"><span class="">Request to custom location</span></a>
                  </span>
               </td>
               <td class="body-2 neutral-100">-</td>
               <td class="body-2 color-red">
                  Need custom location
               </td>
               <td class="body-2 neutral-100">Aug 12, 2022</td>
               <td>
                  <span class="status pending">Pending</span>
               </td>
               <td  style="min-width:60px;" class="body-2 neutral-100">
                  180 days
               </td>
               <td ></td>
               <td>
                  <a href="/order-details" class="table-link">View info</a>
               </td>
            </tr>
            <tr>
               <td class="body-2 neutral-100">Matt & Zoe</td>
               <td class="body-2 neutral-100" >Feb 08, 2022</td>
               <td style="min-width:50px" class="body-2" >80% <span class="align-self-center ms-1 info-icon">
                  <a href="" class="theme-tip"><img src="/images/icons/Info-light.svg" class="img-fluid"><span class="">Marriage celebrant has registered the couple's ceremony and entered the registration number</span></a>
                  </span>
               </td>
               <td class="body-2 neutral-100">Max 
                  <span class="align-self-center ms-1 info-icon">
                  <a href="" class="theme-tip"><img src="/images/status/success.svg" class="img-fluid" alt="success">
                  <span class="w-auto">Approved</span></a>
                  </span>
               </td>
               <td class="body-2 neutral-100">
                  Merewether - Newca..
               </td>
               <td class="body-2 neutral-100">Aug 10, 2022</td>
               <td>
                  <span class="status registered">Registered</span>
               </td>
               <td  style="min-width:60px;" class="body-2 neutral-100">
                  178 days
               </td>
               <td ><a class="table-link button-2" data-bs-toggle="modal" data-bs-target="#note">Note</a></td>
               <td>
                  <a href="/order-details" class="table-link">View info</a>
               </td>
            </tr>
            <tr>
               <td class="body-2 neutral-100">Jack & Ella</td>
               <td class="body-2 neutral-100" >Feb 08, 2022</td>
               <td style="min-width:50px" class="body-2" >90% <span class="align-self-center ms-1 info-icon">
                  <a href="" class="theme-tip"><img src="/images/icons/Info-light.svg" class="img-fluid"><span class="">Couple has paid marriage celebrant</span></a>
                  </span>
               </td>
               <td class="body-2 neutral-100">Joe
                  <span class="align-self-center ms-1 info-icon">
                  <a href="" class="theme-tip"><img src="/images/status/success.svg" class="img-fluid" alt="success">
                  <span class="w-auto">Approved</span></a>
                  </span>
               </td>
               <td class="body-2 neutral-100">
                  Bradfield park
               </td>
               <td class="body-2 neutral-100">Aug 10, 2022</td>
               <td>
                  <span class="status registered">Registered</span>
               </td>
               <td  style="min-width:60px;" class="body-2 neutral-100">
                  178 days
               </td>
               <td ></td>
               <td>
                  <a href="/order-details" class="table-link">View info</a>
               </td>
            </tr>
            <tr>
               <td class="body-2 neutral-100">Tom & Jess</td>
               <td class="body-2 neutral-100" >Feb 03, 2022</td>
               <td style="min-width:50px" class="body-2" >100% <span class="align-self-center ms-1 info-icon">
                  <a href="" class="theme-tip"><img src="/images/icons/Info-light.svg" class="img-fluid"><span class="">Follow Up sent to Couple</span></a>
                  </span>
               </td>
               <td class="body-2 neutral-100">Michael
                  <span class="align-self-center ms-1 info-icon">
                  <a href="" class="theme-tip"><img src="/images/status/success.svg" class="img-fluid" alt="success">
                  <span class="w-auto">Approved</span></a>
                  </span>
               </td>
               <td class="body-2 neutral-100">
                  Bradfield park
               </td>
               <td class="body-2 neutral-100">Aug 10, 2022</td>
               <td>
                  <span class="status registered">Registered</span>
               </td>
               <td  style="min-width:60px;" class="body-2 neutral-100">
                  178 days
               </td>
               <td ><a class="table-link button-2" data-bs-toggle="modal" data-bs-target="#note">Note</a></td>
               <td>
                  <a href="/order-details" class="table-link">View info</a>
               </td>
            </tr>
            <tr>
               <td class="body-2 neutral-100">Max & Jade</td>
               <td class="body-2 neutral-100" >Feb 08, 2022</td>
               <td style="min-width:50px" class="body-2" >70% <span class="align-self-center ms-1 info-icon">
                  <a href="" class="theme-tip"><img src="/images/icons/Info-light.svg" class="img-fluid"><span class="">Celebrant has confirmed all details</span></a>
                  </span>
               </td>
               <td class="body-2 neutral-100">Michael
                  <span class="align-self-center ms-1 info-icon">
                  <a href="" class="theme-tip "><img src="/images/status/success.svg" class="img-fluid" alt="success">
                  <span class="w-auto">Approved</span></a>
                  </span>
               </td>
               <td class="body-2 neutral-100">
                  Bondi Beach
               </td>
               <td class="body-2 neutral-100">July 1, 2022</td>
               <td>
                  <span class="status pending">Lodged (Pending)</span>
               </td>
               <td  style="min-width:60px;" class="body-2 color-red">
                  30 days <span class="align-self-center ms-1 info-icon">
                  <a href="" class="theme-tip red-theme-tip"><img src="/images/status/exclamation.svg" class="img-fluid" alt="exclamation">
                  <span class="">Waiting for approval</span></a>
                  </span>
               </td>
               <td ><a class="table-link button-2" data-bs-toggle="modal" data-bs-target="#note">Note</a></td>
               <td>
                  <a href="/order-details" class="table-link">View info</a>
               </td>
            </tr>
         </tbody>
         <tfoot>
            <tr>
               <td colspan="10">
                  <div class="theme-pagination d-flex justify-content-end">
                     <div class="align-self-center me-4 button-1">Rows per page: 10</div>
                     <div class="align-self-center me-4 button-1 ">1-10 of 150</div>
                     <div class="align-self-center">
                        <a class="d-inline-flex me-4" href=""><img src="/images/pagination/left.svg"
                           class="img-fluid"></a>
                        <a class="d-inline-flex me-4" href=""><img src="/images/pagination/right.svg"
                           class="img-fluid"> </a>
                     </div>
                  </div>
               </td>
            </tr>
         </tfoot>
      </table>
     </div>
   </div>
</div>

@include('elements.admin.marriage.assign-marriage-celebrant')
@include('elements.admin.marriage.note-popup')
@include('elements.admin.marriage.note-edit')
@endsection