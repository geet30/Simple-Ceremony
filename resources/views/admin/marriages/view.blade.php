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
            </tr>
         </thead>
         <tbody>
            <tr>
            <td style="min-width:180px" class="body-2">David & Sarah</td>
                           <td  style="min-width:180px" class="body-2">Feb 21, 2022</td>
                           <td style="min-width:180px" class="body-2" >20% <div class="align-self-center ms-3 info-icon">
               <td class="body-2 neutral-100" style="min-width:100px;">09:30</td>
               <td class="body-2 neutral-100" style="min-width:200px;">
                  <ul class="m-0 p-0">
                     <li>Corona pack</li>
                     <li>Zoom streaming</li>
                  </ul>
               </td>
               <td class="body-2 neutral-100" style="min-width:200px;">30 days</td>
               <td style="min-width:200px;">
                  <span class="status pending">Pending</span>
               </td>
               <td style="min-width:100px;"></td>
               <td style="min-width:180px;">
                  <a href="/order-details" class="table-link">View info</a>
               </td>
            </tr>
            <tr>
               <td class="body-2 neutral-100" style="min-width:180px;">John & Emma</td>
               <td class="body-2 neutral-100" style="min-width:180px;">Tench park</td>
               <td class="body-2 neutral-100" style="min-width:180px;">Apr 11, 2022</td>
               <td class="body-2 neutral-100" style="min-width:100px;">11:30</td>
               <td class="body-2 neutral-100" style="min-width:200px;">
                  <ul class="m-0 p-0">
                     <li>Zoom streaming</li>
                  </ul>
               </td>
               <td class="body-2 neutral-100" style="min-width:200px;">31 days</td>
               <td style="min-width:200px;">
                  <span class="status registered">Approve</span>
               </td>
               <td style="min-width:100px;">
                  <a class="table-link" data-bs-toggle="modal" data-bs-target="#note">Note</a>
               </td>
               <td style="min-width:180px;">
                  <a href="/order-details" class="table-link">View info</a>
               </td>
            </tr>
            <tr>
               <td class="body-2 neutral-100" style="min-width:180px;">Sam & Sophie</td>
               <td class="body-2 neutral-100" style="min-width:180px;">Bradfield park</td>
               <td class="body-2 neutral-100" style="min-width:180px;">Apr 11, 2022</td>
               <td class="body-2 neutral-100" style="min-width:100px;">15:30</td>
               <td class="body-2 neutral-100" style="min-width:200px;">
                  <ul class="m-0 p-0">
                     <li>Corona pack</li>
                  </ul>
               </td>
               <td class="body-2 neutral-100" style="min-width:200px;">31 days</td>
               <td style="min-width:200px;">
                  <span class="status registered">Approve</span>
               </td>
               <td style="min-width:100px;"></td>
               <td style="min-width:180px;">
                  <a href="/order-details" class="table-link">View info</a>
               </td>
            </tr>
            <tr>
               <td class="body-2 neutral-100" style="min-width:180px;">Tom & Jess</td>
               <td class="body-2 neutral-100" style="min-width:180px;">Tench park</td>
               <td class="body-2 neutral-100" style="min-width:180px;">Apr 12, 2022</td>
               <td class="body-2 neutral-100" style="min-width:100px;">08:30</td>
               <td class="body-2 neutral-100" style="min-width:200px;">
                  <ul class="m-0 p-0">
                     <li>Corona pack</li>
                     <li>Zoom streaming</li>
                  </ul>
               </td>
               <td class="body-2 neutral-100" style="min-width:200px;">32 days</td>
               <td style="min-width:200px;">
                  <span class="status cancelled">Reject</span>
               </td>
               <td style="min-width:100px;"></td>
               <td style="min-width:180px;">
                  <a href="/order-details" class="table-link">View info</a>
               </td>
            </tr>
            <tr>
               <td class="body-2 neutral-100" style="min-width:180px;">Jack & Ella</td>
               <td class="body-2 neutral-100" style="min-width:180px;">Bradfield park</td>
               <td class="body-2 neutral-100" style="min-width:180px;">Apr 12, 2022</td>
               <td class="body-2 neutral-100" style="min-width:100px;">11:30</td>
               <td class="body-2 neutral-100" style="min-width:200px;">
                  <ul class="m-0 p-0">
                     <li>Zoom streaming</li>
                  </ul>
               </td>
               <td class="body-2 neutral-100" style="min-width:200px;">32 days</td>
               <td style="min-width:200px;">
                  <span class="status cancelled">Reject</span>
               </td>
               <td style="min-width:100px;"></td>
               <td style="min-width:180px;">
                  <a href="/order-details" class="table-link">View info</a>
               </td>
            </tr>
            <tr>
               <td class="body-2 neutral-100" style="min-width:180px;">Matt & Zoe</td>
               <td class="body-2 neutral-100" style="min-width:180px;">Tench park</td>
               <td class="body-2 neutral-100" style="min-width:180px;">Apr 13, 2022</td>
               <td class="body-2 neutral-100" style="min-width:100px;">10:30</td>
               <td class="body-2 neutral-100" style="min-width:200px;">
                  <ul class="m-0 p-0">
                     <li>Corona pack</li>
                     <li>Zoom streaming</li>
                  </ul>
               </td>
               <td class="body-2 neutral-100" style="min-width:200px;">33 days</td>
               <td style="min-width:200px;">
                  <span class="status registered">Approve</span>
               </td>
               <td style="min-width:100px;">
                  <a class="table-link" data-bs-toggle="modal" data-bs-target="#edit_note">Note</a>
               </td>
               <td style="min-width:180px;">
                  <a href="/order-details" class="table-link">View info</a>
               </td>
            </tr>
            <tr>
               <td class="body-2 neutral-100" style="min-width:180px;">Max & Jade</td>
               <td class="body-2 neutral-100" style="min-width:180px;">Bradfield park</td>
               <td class="body-2 neutral-100" style="min-width:180px;">Apr 13, 2022</td>
               <td class="body-2 neutral-100" style="min-width:100px;">11:30</td>
               <td class="body-2 neutral-100" style="min-width:200px;">
                  <ul class="m-0 p-0">
                     <li>Corona pack</li>
                  </ul>
               </td>
               <td class="body-2 neutral-100" style="min-width:200px;">33 days</td>
               <td style="min-width:200px;">
                  <span class="status pending">Pending</span>
               </td>
               <td style="min-width:100px;"></td>
               <td style="min-width:180px;">
                  <a href="/order-details" class="table-link">View info</a>
               </td>
            </tr>
            <tr>
               <td class="body-2 neutral-100" style="min-width:180px;">Jorsey & Erin</td>
               <td class="body-2 neutral-100" style="min-width:180px;">Tench park</td>
               <td class="body-2 neutral-100" style="min-width:180px;">Apr 14, 2022</td>
               <td class="body-2 neutral-100" style="min-width:100px;">09:00</td>
               <td class="body-2 neutral-100" style="min-width:200px;">
                  <ul class="m-0 p-0">
                     <li>Corona pack</li>
                     <li>Zoom streaming</li>
                  </ul>
               </td>
               <td class="body-2 neutral-100" style="min-width:200px;">34 days</td>
               <td style="min-width:200px;">
                  <span class="status registered">Approve</span>
               </td>
               <td style="min-width:100px;"></td>
               <td style="min-width:180px;">
                  <a href="/order-details" class="table-link">View info</a>
               </td>
            </tr>
            <tr>
               <td class="body-2 neutral-100" style="min-width:180px;">Chloe & Lady</td>
               <td class="body-2 neutral-100" style="min-width:180px;">Bradfield park</td>
               <td class="body-2 neutral-100" style="min-width:180px;">Apr 20, 2022</td>
               <td class="body-2 neutral-100" style="min-width:100px;">15:30</td>
               <td class="body-2 neutral-100" style="min-width:200px;">
                  <ul class="m-0 p-0">
                     <li>Zoom streaming</li>
                  </ul>
               </td>
               <td class="body-2 neutral-100" style="min-width:200px;">40 days</td>
               <td style="min-width:200px;">
                  <span class="status registered">Approve</span>
               </td>
               <td style="min-width:100px;"></td>
               <td style="min-width:180px;">
                  <a href="/order-details" class="table-link">View info</a>
               </td>
            </tr>
            <tr>
               <td class="body-2 neutral-100" style="min-width:180px;">Samuel & Whitney</td>
               <td class="body-2 neutral-100" style="min-width:180px;">Tench park</td>
               <td class="body-2 neutral-100" style="min-width:180px;">Apr 21, 2022</td>
               <td class="body-2 neutral-100" style="min-width:100px;">16:30</td>
               <td class="body-2 neutral-100" style="min-width:200px;">
                  <ul class="m-0 p-0">
                     <li>Corona pack</li>
                     <li>Zoom streaming</li>
                  </ul>
               </td>
               <td class="body-2 neutral-100" style="min-width:200px;">41 days</td>
               <td style="min-width:200px;">
                  <span class="status registered">Approve</span>
               </td>
               <td style="min-width:100px;"></td>
               <td style="min-width:180px;">
                  <a href="/order-details" class="table-link">View info</a>
               </td>
            </tr>
         </tbody>
         <tfoot>
            <tr>
               <td colspan="9">
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
@endsection