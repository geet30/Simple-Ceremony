@extends('layouts.panels')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-2 col-md-3 col-lg-3 col-xl-2 p-0">
            @include('elements.partner.partner-sidebar')
        </div>
        <div class="col-10 col-md-9 col-lg-9 col-xl-10 px-4">
         @include('elements.partner.partner-panel-header')
        @include('elements.partner.change-status')
         <div class="inner-tab-listing">
            <ul class="add-on-list-nav partner-add-on-list-nav row nav nav-pills mb-3 mt-3" id="all-upcoming-pill-tab" role="tablist">
                <li class="nav-item col-md-6 col-lg-6 col-xl-3 col-xxl-3 mb-3" role="presentation">
                    <button class="nav-link w-100 active" id="all-upcoming-tab" data-bs-toggle="pill" data-bs-target="#all-upcoming" type="button" role="tab" aria-controls="all-upcoming" aria-selected="true">
                    <div class="add-ons-nav d-flex">
                        <div class="add-ons-nav-image me-4">
                            <img src="/images/partner/all-upcoming.svg" alt="All add-ons">
                        </div>
                        <div class="add-ons-nav-data text-start ">
                            <h3 class="h3">60</h3>
                            <p class="subheader-2">All upcoming</p>
                        </div>
                    </div>
                    </button>
                </li>
                <li class="nav-item col-md-6 col-lg-6 col-xl-3 col-xxl-3 mb-3" role="presentation">
                <button class="nav-link w-100" id="pending-tab" data-bs-toggle="pill" data-bs-target="#pending" type="button" role="tab" aria-controls="pending" aria-selected="false">
                    <div class="add-ons-nav d-flex">
                        <div class="add-ons-nav-image me-4">
                            <img src="/images/admin/add-ons/timer-icon.svg" alt="">
                        </div>
                        <div class="add-ons-nav-data text-start ">
                            <h3 class="h3">0</h3>
                            <p class="subheader-2">Pending</p>
                        </div>
                    </div>
                </button>
                </li>
                <li class="nav-item col-md-6 col-lg-6 col-xl-3 col-xxl-3 mb-3" role="presentation">
                <button class="nav-link w-100" id="booked-tab" data-bs-toggle="pill" data-bs-target="#booked" type="button" role="tab" aria-controls="booked" aria-selected="false">
                <div class="add-ons-nav d-flex">
                    <div class="add-ons-nav-image me-4">
                        <img src="/images/partner/booked.svg" alt="">
                    </div>
                    <div class="add-ons-nav-data text-start ">
                        <h3 class="h3">50</h3>
                        <p class="subheader-2">Booked</p>
                    </div>
                </div>
                </button>
                </li>
                <li class="nav-item col-md-6 col-lg-6 col-xl-3 col-xxl-3 mb-3" role="presentation">
                <button class="nav-link w-100" id="reject-tab" data-bs-toggle="pill" data-bs-target="#reject" type="button" role="tab" aria-controls="reject" aria-selected="false">
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
                <li class="nav-item col-md-6 col-lg-6 col-xl-3 col-xxl-3 mb-3" role="presentation">
                <button class="nav-link w-100" id="settled-tab" data-bs-toggle="pill" data-bs-target="#settled" type="button" role="tab" aria-controls="settled" aria-selected="false">
                <div class="add-ons-nav d-flex">
                    <div class="add-ons-nav-image me-4">
                        <img src="/images/partner/settled.svg" alt="">
                    </div>
                    <div class="add-ons-nav-data text-start ">
                        <h3 class="h3">70</h3>
                        <p class="subheader-2">Settled</p>
                    </div>
                </div>
                </button>
                </li>
                <li class="nav-item col-md-6 col-lg-6 col-xl-3 col-xxl-3 mb-3" role="presentation">
                <button class="nav-link w-100" id="cancelled-tab" data-bs-toggle="pill" data-bs-target="#cancelled" type="button" role="tab" aria-controls="cancelled" aria-selected="false">
                <div class="add-ons-nav d-flex">
                    <div class="add-ons-nav-image me-4">
                        <img src="/images/admin/add-ons/cross.svg" alt="">
                    </div>
                    <div class="add-ons-nav-data text-start ">
                        <h3 class="h3">70</h3>
                        <p class="subheader-2">Cancelled</p>
                    </div>
                </div>
                </button>
                </li>
            
                <li class="nav-item col-md-6 col-lg-6 col-xl-3 col-xxl-3 mb-3" role="presentation">
                <button class="nav-link w-100" id="finalised-tab" data-bs-toggle="pill" data-bs-target="#finalised" type="button" role="tab" aria-controls="finalised" aria-selected="false">
                <div class="add-ons-nav d-flex">
                    <div class="add-ons-nav-image me-4">
                        <img src="/images/partner/finalised.svg" alt="">
                    </div>
                    <div class="add-ons-nav-data text-start ">
                        <h3 class="h3">70</h3>
                        <p class="subheader-2">Finalised</p>
                    </div>
                </div>
                </button>
                </li>
            </ul>
            <div class="collapse-tab-list d-flex justify-content-center mb-3">
                <a class="collapse_partner_ul bg-turquoise-100" type="button">
                </a>
            </div>
         </div>
            
         <div class="row mb-3">
            <div class="col-md-5 col-lg-5 col-xl-4">
               <div class="form-group has-search w-100 position-relative">
                  <input type="text" class="form-control" placeholder="Search couple">
                  <span class="fa fa-search form-control-feedback"></span>
               </div>
            </div>
         </div>
         <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="all-upcoming" role="tabpanel" aria-labelledby="all-upcoming-tab" tabindex="0">
                <div class="table-responsive">
                    <table class="table align-middle theme-table">
                        <thead>
                            <tr>
                            <th class="sort-by">Wedding date </th>
                            <th>Time</th>
                            <th>Order</th>
                            <th>Status</th>
                            <th>Location</th>
                            <th>Couple Names</th>
                            <th>Phone number</th>
                            <th></th>
                            <th></th> 
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                                <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                                <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                    <ul class="m-0 ps-3">
                                        <li class="text-nowrap">Corona pack</li>
                                        <li class="text-nowrap">Zoom streaming</li>
                                    </ul>
                                </td>
                                <td style="min-width:115px;">
                                    <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" role="button" href="#change_status_offcanvas" aria-controls="change_status_offcanvas"><span class="status  pending">pending</span></a>
                                   
                                </td>
                                <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                                <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                                <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                                <td style="min-width:50px;">
                                    <a href="#" class="table-link">Note</a>
                                </td>
                                <td style="min-width:105px;">
                                    <a href="/order-details" class="table-link">View info</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                                <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                                <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                    <ul class="m-0 ps-3">
                                        <li class="text-nowrap">Corona pack</li>
                                        <li class="text-nowrap">Zoom streaming</li>
                                    </ul>
                                </td>
                                <td style="min-width:115px;">
                                    <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                                </td>
                                <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                                <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                                <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                                <td style="min-width:50px;">
                                    <a href="#" class="table-link">Note</a>
                                </td>
                                <td style="min-width:105px;">
                                    <a href="/order-details" class="table-link">View info</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                                <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                                <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                    <ul class="m-0 ps-3">
                                        <li class="text-nowrap">Corona pack</li>
                                        <li class="text-nowrap">Zoom streaming</li>
                                    </ul>
                                </td>
                                <td style="min-width:115px;">
                                    <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                                </td>
                                <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                                <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                                <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                                <td style="min-width:50px;">
                                    <a href="#" class="table-link">Note</a>
                                </td>
                                <td style="min-width:105px;">
                                    <a href="/order-details" class="table-link">View info</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                                <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                                <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                    <ul class="m-0 ps-3">
                                        <li class="text-nowrap">Corona pack</li>
                                        <li class="text-nowrap">Zoom streaming</li>
                                    </ul>
                                </td>
                                <td style="min-width:115px;">
                                    <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                                </td>
                                <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                                <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                                <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                                <td style="min-width:50px;">
                                    <a href="#" class="table-link">Note</a>
                                </td>
                                <td style="min-width:105px;">
                                    <a href="/order-details" class="table-link">View info</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                                <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                                <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                    <ul class="m-0 ps-3">
                                        <li class="text-nowrap">Corona pack</li>
                                        <li class="text-nowrap">Zoom streaming</li>
                                    </ul>
                                </td>
                                <td style="min-width:115px;">
                                    <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                                </td>
                                <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                                <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                                <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                                <td style="min-width:50px;">
                                    <a href="#" class="table-link">Note</a>
                                </td>
                                <td style="min-width:105px;">
                                    <a href="/order-details" class="table-link">View info</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                                <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                                <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                    <ul class="m-0 ps-3">
                                        <li class="text-nowrap">Corona pack</li>
                                        <li class="text-nowrap">Zoom streaming</li>
                                    </ul>
                                </td>
                                <td style="min-width:115px;">
                                    <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                                </td>
                                <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                                <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                                <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                                <td style="min-width:50px;">
                                    <a href="#" class="table-link">Note</a>
                                </td>
                                <td style="min-width:105px;">
                                    <a href="/order-details" class="table-link">View info</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                                <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                                <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                    <ul class="m-0 ps-3">
                                        <li class="text-nowrap">Corona pack</li>
                                        <li class="text-nowrap">Zoom streaming</li>
                                    </ul>
                                </td>
                                <td style="min-width:115px;">
                                    <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                                </td>
                                <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                                <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                                <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                                <td style="min-width:50px;">
                                    <a href="#" class="table-link">Note</a>
                                </td>
                                <td style="min-width:105px;">
                                    <a href="/order-details" class="table-link">View info</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                                <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                                <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                    <ul class="m-0 ps-3">
                                        <li class="text-nowrap">Corona pack</li>
                                        <li class="text-nowrap">Zoom streaming</li>
                                    </ul>
                                </td>
                                <td style="min-width:115px;">
                                    <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status pending">pending</span></a>
                                </td>
                                <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                                <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                                <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                                <td style="min-width:50px;">
                                    <a href="#" class="table-link">Note</a>
                                </td>
                                <td style="min-width:105px;">
                                    <a href="/order-details" class="table-link">View info</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                                <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                                <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                    <ul class="m-0 ps-3">
                                        <li class="text-nowrap">Corona pack</li>
                                        <li class="text-nowrap">Zoom streaming</li>
                                    </ul>
                                </td>
                                <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status booked">Booked</span></a>
                                </td>
                                <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                                <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                                <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                                <td style="min-width:50px;">
                                    <a href="#" class="table-link">Note</a>
                                </td>
                                <td style="min-width:105px;">
                                    <a href="/order-details" class="table-link">View info</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                                <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                                <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                    <ul class="m-0 ps-3">
                                        <li class="text-nowrap">Corona pack</li>
                                        <li class="text-nowrap">Zoom streaming</li>
                                    </ul>
                                </td>
                                <td style="min-width:115px;">
                                    <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                                </td>
                                <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                                <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                                <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                                <td style="min-width:50px;">
                                    <a href="#" class="table-link">Note</a>
                                </td>
                                <td style="min-width:105px;">
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
            <div class="tab-pane fade" id="pending" role="tabpanel" aria-labelledby="pending-tab" tabindex="1">
                <div class="table-responsive">
                    <table class="table align-middle theme-table">
                       <thead>
                          <tr>
                            <th class="sort-by">Wedding date </th>
                            <th>Time</th>
                            <th>Order</th>
                            <th>Status</th>
                            <th>Location</th>
                            <th>Couple Names</th>
                            <th>Phone number</th>
                            <th></th>
                            <th></th> 
                          </tr>
                       </thead>
                       <tbody>
                       <tr>
                            <td colspan="12">
                                <center>No Record Found</center>
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
            <div class="tab-pane fade" id="booked" role="tabpanel" aria-labelledby="booked-tab" tabindex="2">
                <div class="table-responsive">
                    <table class="table align-middle theme-table">
                       <thead>
                          <tr>
                            <th class="sort-by">Wedding date </th>
                            <th>Time</th>
                            <th>Order</th>
                            <th>Status</th>
                            <th>Location</th>
                            <th>Couple Names</th>
                            <th>Phone number</th>
                            <th></th>
                            <th></th> 
                          </tr>
                       </thead>
                       <tbody>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                            <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status booked">Booked</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
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
            <div class="tab-pane fade" id="reject" role="tabpanel" aria-labelledby="reject-tab" tabindex="3">
                <div class="table-responsive">
                    <table class="table align-middle theme-table">
                       <thead>
                          <tr>
                            <th class="sort-by">Wedding date </th>
                            <th>Time</th>
                            <th>Order</th>
                            <th>Status</th>
                            <th>Location</th>
                            <th>Couple Names</th>
                            <th>Phone number</th>
                            <th></th>
                            <th></th> 
                          </tr>
                       </thead>
                       <tbody>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                            <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status booked">Booked</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
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
            <div class="tab-pane fade" id="cancelled" role="tabpanel" aria-labelledby="cancelled-tab" tabindex="4">
                <div class="table-responsive">
                    <table class="table align-middle theme-table">
                       <thead>
                          <tr>
                            <th class="sort-by">Wedding date </th>
                            <th>Time</th>
                            <th>Order</th>
                            <th>Status</th>
                            <th>Location</th>
                            <th>Couple Names</th>
                            <th>Phone number</th>
                            <th></th>
                            <th></th> 
                          </tr>
                       </thead>
                       <tbody>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                            <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status booked">Booked</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
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
            <div class="tab-pane fade" id="settled" role="tabpanel" aria-labelledby="settled-tab" tabindex="5">
                <div class="table-responsive">
                    <table class="table align-middle theme-table">
                       <thead>
                          <tr>
                            <th class="sort-by">Wedding date </th>
                            <th>Time</th>
                            <th>Order</th>
                            <th>Status</th>
                            <th>Location</th>
                            <th>Couple Names</th>
                            <th>Phone number</th>
                            <th></th>
                            <th></th> 
                          </tr>
                       </thead>
                       <tbody>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                            <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status booked">Booked</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
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
            <div class="tab-pane fade" id="finalised" role="tabpanel" aria-labelledby="finalised-tab" tabindex="6">
                <div class="table-responsive">
                    <table class="table align-middle theme-table">
                       <thead>
                          <tr>
                            <th class="sort-by">Wedding date </th>
                            <th>Time</th>
                            <th>Order</th>
                            <th>Status</th>
                            <th>Location</th>
                            <th>Couple Names</th>
                            <th>Phone number</th>
                            <th></th>
                            <th></th> 
                          </tr>
                       </thead>
                       <tbody>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status booked">Booked</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
                                <a href="/order-details" class="table-link">View info</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>Apr 12, 2022</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:60px;"><a href="/order-details"></a>09:30</td>
                            <td class="table-anchor-link body-2 neutral-100" style="min-width:150px;"><a href="/order-details"></a>
                                <ul class="m-0 ps-3">
                                    <li class="text-nowrap">Corona pack</li>
                                    <li class="text-nowrap">Zoom streaming</li>
                                </ul>
                            </td>
                            <td style="min-width:115px;">
                                <a class="cursor-pointer text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#change_status_offcanvas"><span class="status  pending">pending</span></a>
                            </td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:130px;"><a href="/order-details"></a>Blues point</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:150px;"><a href="/order-details"></a>David & Sarrah</td>
                            <td class="body-2 neutral-100 table-anchor-link" style="min-width:135px;"><a href="/order-details"></a>09090909090</td>
                            <td style="min-width:50px;">
                                <a href="#" class="table-link">Note</a>
                            </td>
                            <td style="min-width:105px;">
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
        </div>
    </div>

@include('elements.partner.partner-upcoming-note-popup')
@include('elements.partner.partner-upcoming-edit-popup')
@include('elements.partner.partner-upcoming-note-edit-sidebar')

@endsection