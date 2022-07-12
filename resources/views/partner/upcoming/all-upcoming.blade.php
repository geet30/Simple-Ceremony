@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-lg-2 p-0">
            @include('elements.partner-sidebar')
        </div>
        <div class="col-md-9 col-lg-10 px-md-4">
         @include('elements.partner-panel-header')
         <ul class="add-on-list-nav row nav nav-pills mb-3 mt-3" id="pills-tab" role="tablist">
            <li class="nav-item col-md-6 col-lg-6 col-xl-3 col-xxl-3 mb-3" role="presentation">
                <button class="nav-link w-100 active" id="all-ads-on-tab" data-bs-toggle="pill" data-bs-target="#all-ads-on" type="button" role="tab" aria-controls="all-ads-on" aria-selected="true">
                <div class="add-ons-nav d-flex">
                    <div class="add-ons-nav-image me-4">
                        <img src="/images/admin/add-ons/message-icon.svg" alt="All add-ons">
                    </div>
                    <div class="add-ons-nav-data text-start ">
                        <h3 class="h3">60</h3>
                        <p class="subheader-2">All add-ons</p>
                    </div>
                </div>
                </button>
            </li>
            <li class="nav-item col-md-6 col-lg-6 col-xl-3 col-xxl-3 mb-3" role="presentation">
              <button class="nav-link w-100" id="Waiting-for-approval-tab" data-bs-toggle="pill" data-bs-target="#Waiting-for-approval" type="button" role="tab" aria-controls="Waiting-for-approval" aria-selected="false">
                 <div class="add-ons-nav d-flex">
                     <div class="add-ons-nav-image me-4">
                        <img src="/images/admin/add-ons/timer-icon.svg" alt="">
                     </div>
                     <div class="add-ons-nav-data text-start ">
                        <h3 class="h3">20</h3>
                        <p class="subheader-2">Pending</p>
                     </div>
                  </div>
               </button>
            </li>
            <li class="nav-item col-md-6 col-lg-6 col-xl-3 col-xxl-3 mb-3" role="presentation">
              <button class="nav-link w-100" id="add-on-approved-tab" data-bs-toggle="pill" data-bs-target="#add-on-approved" type="button" role="tab" aria-controls="add-on-approved" aria-selected="false">
               <div class="add-ons-nav d-flex">
                  <div class="add-ons-nav-image me-4">
                     <img src="/images/admin/add-ons/hands.svg" alt="">
                  </div>
                  <div class="add-ons-nav-data text-start ">
                     <h3 class="h3">50</h3>
                     <p class="subheader-2">Approved</p>
                  </div>
               </div>
              </button>
            </li>
            <li class="nav-item col-md-6 col-lg-6 col-xl-3 col-xxl-3 mb-3" role="presentation">
              <button class="nav-link w-100" id="add-on-reject-tab" data-bs-toggle="pill" data-bs-target="#add-on-reject" type="button" role="tab" aria-controls="add-on-reject" aria-selected="false">
               <div class="add-ons-nav d-flex">
                  <div class="add-ons-nav-image me-4">
                     <img src="/images/admin/add-ons/cross.svg" alt="">
                  </div>
                  <div class="add-ons-nav-data text-start ">
                     <h3 class="h3">70</h3>
                     <p class="subheader-2">Reject</p>
                  </div>
               </div>
              </button>
            </li>
          </ul>
         <div class="row mb-3">
            <div class="col-lg-4 col-xl-3">
               <div class="form-group has-search w-100 position-relative">
                  <span class="fa fa-search form-control-feedback"></span>
                  <input type="text" class="form-control" placeholder="Search couple">
               </div>
            </div>
         </div>
         <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="all-ads-on" role="tabpanel" aria-labelledby="all-ads-on-tab" tabindex="0">
                <div class="table-responsive">
                    <table class="table align-middle theme-table">
                       <thead>
                          <tr>
                             <th>Name couple</th>
                             <th>Location</th>
                             <th>Wedding date</th>
                             <th>Time</th>
                             <th>Order</th>
                             <th>Days till marriage</th>
                             <th>Status</th>
                             <th></th>
                             <th></th>
                          </tr>
                       </thead>
                       <tbody>
                        <tr>
                            <td class="body-2 neutral-100" style="min-width:180px;">David & Sarrah</td>
                            <td class="body-2 neutral-100" style="min-width:180px;">Blues point</td>
                            <td class="body-2 neutral-100" style="min-width:180px;">Apr 12, 2022</td>
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
                                <a href="./order-details" class="table-link">View info</a>
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
                                <a href="./order-details" class="table-link">View info</a>
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
                                <a href="./order-details" class="table-link">View info</a>
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
                                <a href="./order-details" class="table-link">View info</a>
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
                                <a href="./order-details" class="table-link">View info</a>
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
                                <a href="./order-details" class="table-link">View info</a>
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
                                <a href="./order-details" class="table-link">View info</a>
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
                                <a href="./order-details" class="table-link">View info</a>
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
                                <a href="./order-details" class="table-link">View info</a>
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
                                <a href="./order-details" class="table-link">View info</a>
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
            <div class="tab-pane fade" id="Waiting-for-approval" role="tabpanel" aria-labelledby="Waiting-for-approval-tab" tabindex="1">
                <div class="table-responsive">
                    <table class="table align-middle theme-table">
                       <thead>
                          <tr>
                             <th>Name couple</th>
                             <th>Location</th>
                             <th>Wedding date</th>
                             <th>Time</th>
                             <th>Order</th>
                             <th>Days till marriage</th>
                             <th>Status</th>
                             <th></th>
                             <th></th>
                          </tr>
                       </thead>
                       <tbody>
                        <tr>
                            <td class="body-2 neutral-100" style="min-width:180px;">David & Sarrah</td>
                            <td class="body-2 neutral-100" style="min-width:180px;">Blues point</td>
                            <td class="body-2 neutral-100" style="min-width:180px;">Apr 12, 2022</td>
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
                                <a href="./order-details" class="table-link">View info</a>
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
                              <span class="status pending">Pending</span>
                            </td>
                            <td style="min-width:100px;"></td>
                            <td style="min-width:180px;">
                                <a href="./order-details" class="table-link">View info</a>
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
                              <span class="status pending">Pending</span>
                            </td>
                            <td style="min-width:100px;"></td>
                            <td style="min-width:180px;">
                                <a href="./order-details" class="table-link">View info</a>
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
                              <span class="status pending">Pending</span>
                            </td>
                            <td style="min-width:100px;"></td>
                            <td style="min-width:180px;">
                                <a href="./order-details" class="table-link">View info</a>
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
                              <span class="status pending">Pending</span>
                            </td>
                            <td style="min-width:100px;"></td>
                            <td style="min-width:180px;">
                                <a href="./order-details" class="table-link">View info</a>
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
                              <span class="status pending">Pending</span>
                            </td>
                            <td style="min-width:100px;"></td>
                            <td style="min-width:180px;">
                                <a href="./order-details" class="table-link">View info</a>
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
                                <a href="./order-details" class="table-link">View info</a>
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
                              <span class="status pending">Pending</span>
                            </td>
                            <td style="min-width:100px;"></td>
                            <td style="min-width:180px;">
                                <a href="./order-details" class="table-link">View info</a>
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
                              <span class="status pending">Pending</span>
                            </td>
                            <td style="min-width:100px;"></td>
                            <td style="min-width:180px;">
                                <a href="./order-details" class="table-link">View info</a>
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
                              <span class="status pending">Pending</span>
                            </td>
                            <td style="min-width:100px;"></td>
                            <td style="min-width:180px;">
                                <a href="./order-details" class="table-link">View info</a>
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
            <div class="tab-pane fade" id="add-on-approved" role="tabpanel" aria-labelledby="add-on-approved-tab" tabindex="2">
                <div class="table-responsive">
                    <table class="table align-middle theme-table">
                       <thead>
                          <tr>
                             <th>Name couple</th>
                             <th>Location</th>
                             <th>Wedding date</th>
                             <th>Time</th>
                             <th>Order</th>
                             <th>Days till marriage</th>
                             <th>Status</th>
                             <th></th>
                             <th></th>
                          </tr>
                       </thead>
                       <tbody>
                        <tr>
                            <td class="body-2 neutral-100" style="min-width:180px;">David & Sarrah</td>
                            <td class="body-2 neutral-100" style="min-width:180px;">Blues point</td>
                            <td class="body-2 neutral-100" style="min-width:180px;">Apr 12, 2022</td>
                            <td class="body-2 neutral-100" style="min-width:100px;">09:30</td>
                            <td class="body-2 neutral-100" style="min-width:200px;">
                                <ul class="m-0 p-0">
                                    <li>Corona pack</li>
                                    <li>Zoom streaming</li>
                                </ul>
                            </td>
                            <td class="body-2 neutral-100" style="min-width:200px;">30 days</td>
                            <td style="min-width:200px;">
                                <span class="status registered">Approve</span>
                            </td>
                            <td style="min-width:100px;"></td>
                            <td style="min-width:180px;">
                                <a href="./order-details" class="table-link">View info</a>
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
                            <td style="min-width:100px;"></td>
                            <td style="min-width:180px;">
                                <a href="./order-details" class="table-link">View info</a>
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
                            <td style="min-width:100px;">
                                <a class="table-link" data-bs-toggle="modal" data-bs-target="#note">Note</a>
                            </td>
                            <td style="min-width:180px;">
                                <a href="./order-details" class="table-link">View info</a>
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
                                <span class="status registered">Approve</span>
                            </td>
                            <td style="min-width:100px;">
                                <a class="table-link" data-bs-toggle="modal" data-bs-target="#edit_note">Note</a>
                            </td>
                            <td style="min-width:180px;">
                                <a href="./order-details" class="table-link">View info</a>
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
                                <span class="status registered">Approve</span>
                            </td>
                            <td style="min-width:100px;"></td>
                            <td style="min-width:180px;">
                                <a href="./order-details" class="table-link">View info</a>
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
                                <a class="table-link" data-bs-toggle="modal" data-bs-target="#note">Note</a>
                            </td>
                            <td style="min-width:180px;">
                                <a href="./order-details" class="table-link">View info</a>
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
                                <span class="status registered">Approve</span>
                            </td>
                            <td style="min-width:100px;"></td>
                            <td style="min-width:180px;">
                                <a href="./order-details" class="table-link">View info</a>
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
                            <td style="min-width:100px;">
                                <a class="table-link" data-bs-toggle="modal" data-bs-target="#edit_note">Note</a>
                            </td>
                            <td style="min-width:180px;">
                                <a href="./order-details" class="table-link">View info</a>
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
                            <td style="min-width:100px;">
                                <a class="table-link" data-bs-toggle="modal" data-bs-target="#note">Note</a>
                            </td>
                            <td style="min-width:180px;">
                                <a href="./order-details" class="table-link">View info</a>
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
                            <td style="min-width:100px;">
                                <a class="table-link" data-bs-toggle="modal" data-bs-target="#note">Note</a>
                            </td>
                            <td style="min-width:180px;">
                                <a href="./order-details" class="table-link">View info</a>
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
            <div class="tab-pane fade" id="add-on-reject" role="tabpanel" aria-labelledby="add-on-reject-tab" tabindex="3">
                <div class="table-responsive">
                    <table class="table align-middle theme-table">
                       <thead>
                          <tr>
                             <th>Name couple</th>
                             <th>Location</th>
                             <th>Wedding date</th>
                             <th>Time</th>
                             <th>Order</th>
                             <th>Days till marriage</th>
                             <th>Status</th>
                             <th></th>
                             <th></th>
                          </tr>
                       </thead>
                       <tbody>
                        <tr>
                            <td class="body-2 neutral-100" style="min-width:180px;">David & Sarrah</td>
                            <td class="body-2 neutral-100" style="min-width:180px;">Blues point</td>
                            <td class="body-2 neutral-100" style="min-width:180px;">Apr 12, 2022</td>
                            <td class="body-2 neutral-100" style="min-width:100px;">09:30</td>
                            <td class="body-2 neutral-100" style="min-width:200px;">
                                <ul class="m-0 p-0">
                                    <li>Corona pack</li>
                                    <li>Zoom streaming</li>
                                </ul>
                            </td>
                            <td class="body-2 neutral-100" style="min-width:200px;">30 days</td>
                            <td style="min-width:200px;">
                                <span class="status cancelled">Reject</span>
                            </td>
                            <td style="min-width:100px;"></td>
                            <td style="min-width:180px;">
                                <a href="./order-details" class="table-link">View info</a>
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
                                <span class="status cancelled">Reject</span>
                            </td>
                            <td style="min-width:100px;"></td>
                            <td style="min-width:180px;">
                                <a href="./order-details" class="table-link">View info</a>
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
                                <span class="status cancelled">Reject</span>
                            </td>
                            <td style="min-width:100px;"></td>
                            <td style="min-width:180px;">
                                <a href="./order-details" class="table-link">View info</a>
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
                                <a href="./order-details" class="table-link">View info</a>
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
                                <a href="./order-details" class="table-link">View info</a>
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
                                <span class="status cancelled">Reject</span>
                            </td>
                            <td style="min-width:100px;"></td>
                            <td style="min-width:180px;">
                                <a href="./order-details" class="table-link">View info</a>
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
                                <span class="status cancelled">Reject</span>
                            </td>
                            <td style="min-width:100px;"></td>
                            <td style="min-width:180px;">
                                <a href="./order-details" class="table-link">View info</a>
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
                                <span class="status cancelled">Reject</span>
                            </td>
                            <td style="min-width:100px;"></td>
                            <td style="min-width:180px;">
                                <a href="./order-details" class="table-link">View info</a>
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
                                <span class="status cancelled">Reject</span>
                            </td>
                            <td style="min-width:100px;"></td>
                            <td style="min-width:180px;">
                                <a href="./order-details" class="table-link">View info</a>
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
                                <span class="status cancelled">Reject</span>
                            </td>
                            <td style="min-width:100px;"></td>
                            <td style="min-width:180px;">
                                <a href="./order-details" class="table-link">View info</a>
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
          </div>
        </div>
    </div>
</div>
@include('elements.partner-upcoming-note-popup')
@include('elements.partner-upcoming-edit-popup')
@include('elements.partner-upcoming-note-edit-sidebar')
@endsection