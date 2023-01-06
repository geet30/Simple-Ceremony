@extends('layouts.panels')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
         @include('elements.common.admin-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-4">
         @include('elements.common.panel-header')
         <div class="row">
            <div class="col-md-12 mb-4">
                <a class="theme-btn primary-btn d-inline-block" href="add-voucher">
                  <img class="me-2" src="/images/icons/add.svg" alt="shopping-icon">Add new voucher
                </a>
            </div>
         </div>
         <div class="row">
            <div class="col-12">
                <ul class="nav theme-tabs gift-vouchers-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" id="all-orders" data-bs-toggle="tab" data-bs-target="#orders"
                            href="#">All orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="all-active-gift-vouchers" data-bs-toggle="tab" data-bs-target="#active-gift-vouchers"
                            href="#">All active gift vouchers</a>
                    </li>
                </ul>
                <!-- tab content -->
                <div class="tab-content" id="tabContent">
                    <div class="tab-pane fade show active orders" id="orders" role="tabpanel"
                        aria-labelledby="orders-tab">
                        <div class="row mb-15 mt-20">
                            <div class="col-md-4 col-xl-3 d-grid mt-3 mt-md-0 mb-15">
                                <div class="dropdown filter-date-calendar-dropdown">
                                    <a role="button" class="theme-btn primary-btn-border d-inline-flex align-items-center filter-btn w-100" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"><img src="/images/icons/green-calendar.svg" class="me-3" alt="calendar"> Filter by date</a>
                                    <div class="dropdown-menu p-4 filter_date_div">
                                        <div class="filter-date-calendar">

                                            <div class="calendar-wrapper" id="calendar-wrapper"></div>
                                            <input type="hidden" name="booking_date" class="booking_date">
                                            <a class="theme-btn primary-btn d-inline-block mt-3">Filter</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-xl-9 d-flex">
                                <div class="form-group has-search w-100 position-relative">
                                    <input type="text" class="form-control" placeholder="Search purchaser’s name">
                                    <span class="fa fa-search form-control-feedback"></span>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-middle theme-table">
                                <thead>
                                    <tr>
                                    <th>Date purchased</th>
                                    <th>Purchaser’s name</th>
                                    <th>Purchaser’s email address</th>
                                    <th>Amount</th>
                                    <th>Gift voucher number</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="vertical-align: baseline;">
                                    <td class="body-2 neutral-100" style="min-width:250px;">Sept 21, 2022</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">David</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">david@gmail.com</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">1</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">1201920
                                    </td>
                                    </tr>
                                    <tr style="vertical-align: baseline;">
                                    <td class="body-2 neutral-100" style="min-width:250px;">Sept 21, 2022</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">David</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">david@gmail.com</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">1</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">1201920
                                    </td>
                                    </tr>
                                    <tr style="vertical-align: baseline;">
                                    <td class="body-2 neutral-100" style="min-width:250px;">Sept 21, 2022</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">David</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">david@gmail.com</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">1</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">1201920
                                    </td>
                                    </tr>
                                    <tr style="vertical-align: baseline;">
                                    <td class="body-2 neutral-100" style="min-width:250px;">Sept 21, 2022</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">David</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">david@gmail.com</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">1</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">1201920
                                    </td>
                                    </tr>
                                    <tr style="vertical-align: baseline;">
                                    <td class="body-2 neutral-100" style="min-width:250px;">Sept 21, 2022</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">David</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">david@gmail.com</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">1</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">1201920
                                    </td>
                                    </tr>
                                    <tr style="vertical-align: baseline;">
                                    <td class="body-2 neutral-100" style="min-width:250px;">Sept 21, 2022</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">David</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">david@gmail.com</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">1</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">1201920
                                    </td>
                                    </tr>
                                    <tr style="vertical-align: baseline;">
                                    <td class="body-2 neutral-100" style="min-width:250px;">Sept 21, 2022</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">David</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">david@gmail.com</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">1</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">1201920
                                    </td>
                                    </tr>
                                    <tr style="vertical-align: baseline;">
                                    <td class="body-2 neutral-100" style="min-width:250px;">Sept 21, 2022</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">David</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">david@gmail.com</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">1</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">1201920
                                    </td>
                                    </tr>
                                    <tr style="vertical-align: baseline;">
                                    <td class="body-2 neutral-100" style="min-width:250px;">Sept 21, 2022</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">David</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">david@gmail.com</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">1</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">1201920
                                    </td>
                                    </tr>
                                    <tr style="vertical-align: baseline;">
                                    <td class="body-2 neutral-100" style="min-width:250px;">Sept 21, 2022</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">David</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">david@gmail.com</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">1</td>
                                    <td class="body-2 neutral-100" style="min-width:150px;">1201920
                                    </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                    <td colspan="9">
                                        <div class="theme-pagination d-flex justify-content-end">
                                            <div class="align-self-center me-4 button-1">Rows per page: 10</div>
                                            <div class="align-self-center me-4 button-1 ">1-10 of 56</div>
                                            <div class="align-self-center">
                                                <a class="d-inline-flex me-4" href=""><img src="/images/pagination/left.svg" class="img-fluid"></a>
                                                <a class="d-inline-flex me-4" href=""><img src="/images/pagination/right.svg" class="img-fluid"> </a>
                                            </div>
                                        </div>
                                    </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade active-gift-vouchers" id="active-gift-vouchers" role="tabpanel" aria-labelledby="active-gift-vouchers-tab">
                       <div class="row mb-22 mt-20">
                            <div class="col-md-12 d-flex">
                                <div class="form-group has-search w-100 position-relative">
                                    <input type="text" class="form-control" placeholder="Search gift certificate name or gift voucher number">
                                    <span class="fa fa-search form-control-feedback"></span>
                                </div>
                            </div>
                       </div>
                       <div class="searchResult row">
                            <div class="col-md-6 col-lg-4 col-xl-3 mb-2">
                                <a class="card image-card admin-gift-voucher-card" href="details">
                                    <img src="/images/gift-voucher-details-1.png" class="card-img-top img-fluid" alt="gift-voucher-1">
                                    <div class="card-body pt-15 pb-20">
                                        <div class="gift-certificate mb-3">
                                            <span>Gift Certificate</span>
                                        </div>
                                        <div class="body-3 neutral-100 mb-1">$300 <span class="font-weight-700">(15601920)</span></div>
                                        <h4 class="h4 netural-100 mb-1">Add title voucher here</h4>
                                        <p class="small-text2 netural-100 align-self-center mb-0">Add short description here</p> 
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3 mb-2">
                                <a class="card image-card admin-gift-voucher-card" href="details">
                                    <img src="/images/gift-voucher-details-1.png" class="card-img-top img-fluid" alt="gift-voucher-1">
                                    <div class="card-body pt-15 pb-20">
                                        <div class="gift-certificate mb-3">
                                            <span>Gift Certificate</span>
                                        </div>
                                        <div class="body-3 neutral-100 mb-1">$300 <span class="font-weight-700">(15601920)</span></div>
                                        <h4 class="h4 netural-100 mb-1">Add title voucher here</h4>
                                        <p class="small-text2 netural-100 align-self-center mb-0">Add short description here</p> 
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3 mb-2">
                                <a class="card image-card admin-gift-voucher-card" href="details">
                                    <img src="/images/gift-voucher-details-1.png" class="card-img-top img-fluid" alt="gift-voucher-1">
                                    <div class="card-body pt-15 pb-20">
                                        <div class="gift-certificate mb-3">
                                            <span>Gift Certificate</span>
                                        </div>
                                        <div class="body-3 neutral-100 mb-1">$300 <span class="font-weight-700">(15601920)</span></div>
                                        <h4 class="h4 netural-100 mb-1">Add title voucher here</h4>
                                        <p class="small-text2 netural-100 align-self-center mb-0">Add short description here</p> 
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3 mb-2">
                                <a class="card image-card admin-gift-voucher-card" href="details">
                                    <img src="/images/gift-voucher-details-1.png" class="card-img-top img-fluid" alt="gift-voucher-1">
                                    <div class="card-body pt-15 pb-20">
                                        <div class="gift-certificate mb-3">
                                            <span>Gift Certificate</span>
                                        </div>
                                        <div class="body-3 neutral-100 mb-1">$300 <span class="font-weight-700">(15601920)</span></div>
                                        <h4 class="h4 netural-100 mb-1">Add title voucher here</h4>
                                        <p class="small-text2 netural-100 align-self-center mb-0">Add short description here</p> 
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3 mb-2">
                                <a class="card image-card admin-gift-voucher-card" href="details">
                                    <img src="/images/gift-voucher-details-1.png" class="card-img-top img-fluid" alt="gift-voucher-1">
                                    <div class="card-body pt-15 pb-20">
                                        <div class="gift-certificate mb-3">
                                            <span>Gift Certificate</span>
                                        </div>
                                        <div class="body-3 neutral-100 mb-1">$300 <span class="font-weight-700">(15601920)</span></div>
                                        <h4 class="h4 netural-100 mb-1">Add title voucher here</h4>
                                        <p class="small-text2 netural-100 align-self-center mb-0">Add short description here</p> 
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3 mb-2">
                                <a class="card image-card admin-gift-voucher-card" href="details">
                                    <img src="/images/gift-voucher-details-1.png" class="card-img-top img-fluid" alt="gift-voucher-1">
                                    <div class="card-body pt-15 pb-20">
                                        <div class="gift-certificate mb-3">
                                            <span>Gift Certificate</span>
                                        </div>
                                        <div class="body-3 neutral-100 mb-1">$300 <span class="font-weight-700">(15601920)</span></div>
                                        <h4 class="h4 netural-100 mb-1">Add title voucher here</h4>
                                        <p class="small-text2 netural-100 align-self-center mb-0">Add short description here</p> 
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3 mb-2">
                                <a class="card image-card admin-gift-voucher-card" href="details">
                                    <img src="/images/gift-voucher-details-1.png" class="card-img-top img-fluid" alt="gift-voucher-1">
                                    <div class="card-body pt-15 pb-20">
                                        <div class="gift-certificate mb-3">
                                            <span>Gift Certificate</span>
                                        </div>
                                        <div class="body-3 neutral-100 mb-1">$300 <span class="font-weight-700">(15601920)</span></div>
                                        <h4 class="h4 netural-100 mb-1">Add title voucher here</h4>
                                        <p class="small-text2 netural-100 align-self-center mb-0">Add short description here</p> 
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3 mb-2">
                                <a class="card image-card admin-gift-voucher-card" href="details">
                                    <img src="/images/gift-voucher-details-1.png" class="card-img-top img-fluid" alt="gift-voucher-1">
                                    <div class="card-body pt-15 pb-20">
                                        <div class="gift-certificate mb-3">
                                            <span>Gift Certificate</span>
                                        </div>
                                        <div class="body-3 neutral-100 mb-1">$300 <span class="font-weight-700">(15601920)</span></div>
                                        <h4 class="h4 netural-100 mb-1">Add title voucher here</h4>
                                        <p class="small-text2 netural-100 align-self-center mb-0">Add short description here</p> 
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3 mb-2">
                                <a class="card image-card admin-gift-voucher-card" href="details">
                                    <img src="/images/gift-voucher-details-1.png" class="card-img-top img-fluid" alt="gift-voucher-1">
                                    <div class="card-body pt-15 pb-20">
                                        <div class="gift-certificate mb-3">
                                            <span>Gift Certificate</span>
                                        </div>
                                        <div class="body-3 neutral-100 mb-1">$300 <span class="font-weight-700">(15601920)</span></div>
                                        <h4 class="h4 netural-100 mb-1">Add title voucher here</h4>
                                        <p class="small-text2 netural-100 align-self-center mb-0">Add short description here</p> 
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3 mb-2">
                                <a class="card image-card admin-gift-voucher-card" href="details">
                                    <img src="/images/gift-voucher-details-1.png" class="card-img-top img-fluid" alt="gift-voucher-1">
                                    <div class="card-body pt-15 pb-20">
                                        <div class="gift-certificate mb-3">
                                            <span>Gift Certificate</span>
                                        </div>
                                        <div class="body-3 neutral-100 mb-1">$300 <span class="font-weight-700">(15601920)</span></div>
                                        <h4 class="h4 netural-100 mb-1">Add title voucher here</h4>
                                        <p class="small-text2 netural-100 align-self-center mb-0">Add short description here</p> 
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3 mb-2">
                                <a class="card image-card admin-gift-voucher-card" href="details">
                                    <img src="/images/gift-voucher-details-1.png" class="card-img-top img-fluid" alt="gift-voucher-1">
                                    <div class="card-body pt-15 pb-20">
                                        <div class="gift-certificate mb-3">
                                            <span>Gift Certificate</span>
                                        </div>
                                        <div class="body-3 neutral-100 mb-1">$300 <span class="font-weight-700">(15601920)</span></div>
                                        <h4 class="h4 netural-100 mb-1">Add title voucher here</h4>
                                        <p class="small-text2 netural-100 align-self-center mb-0">Add short description here</p> 
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3 mb-2">
                                <a class="card image-card admin-gift-voucher-card" href="details">
                                    <img src="/images/gift-voucher-details-1.png" class="card-img-top img-fluid" alt="gift-voucher-1">
                                    <div class="card-body pt-15 pb-20">
                                        <div class="gift-certificate mb-3">
                                            <span>Gift Certificate</span>
                                        </div>
                                        <div class="body-3 neutral-100 mb-1">$300 <span class="font-weight-700">(15601920)</span></div>
                                        <h4 class="h4 netural-100 mb-1">Add title voucher here</h4>
                                        <p class="small-text2 netural-100 align-self-center mb-0">Add short description here</p> 
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3 mb-2">
                                <a class="card image-card admin-gift-voucher-card" href="details">
                                    <img src="/images/gift-voucher-details-1.png" class="card-img-top img-fluid" alt="gift-voucher-1">
                                    <div class="card-body pt-15 pb-20">
                                        <div class="gift-certificate mb-3">
                                            <span>Gift Certificate</span>
                                        </div>
                                        <div class="body-3 neutral-100 mb-1">$300 <span class="font-weight-700">(15601920)</span></div>
                                        <h4 class="h4 netural-100 mb-1">Add title voucher here</h4>
                                        <p class="small-text2 netural-100 align-self-center mb-0">Add short description here</p> 
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3 mb-2">
                                <a class="card image-card admin-gift-voucher-card" href="details">
                                    <img src="/images/gift-voucher-details-1.png" class="card-img-top img-fluid" alt="gift-voucher-1">
                                    <div class="card-body pt-15 pb-20">
                                        <div class="gift-certificate mb-3">
                                            <span>Gift Certificate</span>
                                        </div>
                                        <div class="body-3 neutral-100 mb-1">$300 <span class="font-weight-700">(15601920)</span></div>
                                        <h4 class="h4 netural-100 mb-1">Add title voucher here</h4>
                                        <p class="small-text2 netural-100 align-self-center mb-0">Add short description here</p> 
                                    </div>
                                </a>
                            </div>
                       </div>
                    </div>
                </div>
                <!-- tab content -->
            </div>
        </div>
      </div>
   </div>
@endsection