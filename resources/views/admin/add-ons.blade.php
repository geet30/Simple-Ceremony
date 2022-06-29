@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-lg-2 p-0">
            @include('elements.admin-sidebar')
        </div>
        <div class="col-md-9 col-lg-10 px-md-4">
         @include('elements.panel-header')
         <ul class="add-on-list-nav row nav nav-pills mb-3 mt-3" id="pills-tab" role="tablist">
            <li class="nav-item col-12 col-md-6 col-lg-3 mb-3" role="presentation">
              <button class="nav-link active w-100" id="all-ads-on-tab" data-bs-toggle="pill" data-bs-target="#all-ads-on" type="button" role="tab" aria-controls="all-ads-on" aria-selected="true">
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
            <li class="nav-item col-12 col-md-6 col-lg-3 mb-3" role="presentation">
              <button class="nav-link w-100" id="Waiting-for-approval-tab" data-bs-toggle="pill" data-bs-target="#Waiting-for-approval" type="button" role="tab" aria-controls="Waiting-for-approval" aria-selected="false">
                 <div class="add-ons-nav d-flex">
                     <div class="add-ons-nav-image me-4">
                        <img src="/images/admin/add-ons/timer-icon.svg" alt="">
                     </div>
                     <div class="add-ons-nav-data text-start ">
                        <h3 class="h3">20</h3>
                        <p class="subheader-2">Waiting for approval</p>
                     </div>
                  </div>
               </button>
            </li>
            <li class="nav-item col-12 col-md-6 col-lg-3 mb-3" role="presentation">
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
            <li class="nav-item col-12 col-md-6 col-lg-3 mb-3" role="presentation">
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
            <div class="col-lg-8 col-xl-9 mb-3 mb-lg-0">
               <ul class="nav theme-tabs">
                  <li class="nav-item">
                     <a class="nav-link active" id="information-tab" data-bs-toggle="tab" data-bs-target="#information" href="#">Add ons</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" id="celebrants-tab" data-bs-toggle="tab" data-bs-target="#celebrants" href="#">Add-ons setting</a>
                  </li>
               </ul>
            </div>
            <div class="col-lg-4 col-xl-3">
               <div class="form-group has-search w-100 position-relative">
                  <span class="fa fa-search form-control-feedback"></span>
                  <input type="text" class="form-control" placeholder="Search add-ons">
               </div>
            </div>
         </div>
         <div class="tab-content" id="tabContent">
            <div class="tab-pane fade show active" id="information" role="tabpanel" aria-labelledby="information-tab">
               <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="all-ads-on" role="tabpanel" aria-labelledby="all-ads-on-tab" tabindex="0">
                     <div class="table-responsive">
                        <table class="table align-middle theme-table">
                           <thead>
                              <tr>
                                 <th>Add-ons</th>
                                 <th>Category</th>
                                 <th>Description</th>
                                 <th>Name partners</th>
                                 <th>Status</th>
                                 <th></th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Corona pack</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Chair & decoration</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">At Simple C we have created a simple package so your ceremony still feels special. Create a beautiful backdrop for you and your virtual guests if you are planning on live streaming across the globe.</td>
                                 <td class="body-2 neutral-100">Picture framing</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle waiting-approval" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Waiting for approval
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="#" class="table-link me-3">Confirm</a> <a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Name add-ons</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Ring</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</td>
                                 <td class="body-2 neutral-100">Sarah jewellry</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle waiting-approval" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Waiting for approval
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="#" class="table-link me-3">Confirm</a> <a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Name add-ons</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Car rent</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</td>
                                 <td class="body-2 neutral-100">Little vintage</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle waiting-approval" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Waiting for approval
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="#" class="table-link me-3">Confirm</a> <a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Name add-ons</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Car rent</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</td>
                                 <td class="body-2 neutral-100">Alan rent</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle approved" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Approved
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Name add-ons</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Chair &amp; decoration</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</td>
                                 <td class="body-2 neutral-100">Wayne decoration</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle approved" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Approved
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Name add-ons</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Photo</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</td>
                                 <td class="body-2 neutral-100">Wedding dream</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle approved" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Approved
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Name add-ons</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Chair &amp; decoration</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</td>
                                 <td class="body-2 neutral-100">Prisillia decoration</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle rejected" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Rejected
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="#" class="table-link me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasfeedbackaddons" aria-controls="offcanvasfeedbackaddons">See feedback</a> <a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Name add-ons</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Flower</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</td>
                                 <td class="body-2 neutral-100">Flower by joelle</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle rejected" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Rejected
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="#" class="table-link me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasfeedbackaddons" aria-controls="offcanvasfeedbackaddons">See feedback</a> <a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Name add-ons</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Chair & decoration</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</td>
                                 <td class="body-2 neutral-100">Decor-A-Shaan</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle waiting-approval" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Waiting for approval
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="#" class="table-link me-3">Confirm</a> <a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Name add-ons</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Chair & decoration</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</td>
                                 <td class="body-2 neutral-100">Wayne decoration</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle waiting-approval" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Waiting for approval
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="#" class="table-link me-3">Confirm</a> <a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                           </tbody>
                           <tfoot>
                              <tr>
                                 <td colspan="6">
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
                                 <th>Add-ons</th>
                                 <th>Category</th>
                                 <th>Description</th>
                                 <th>Name partners</th>
                                 <th>Status</th>
                                 <th></th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Corona pack</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Chair & decoration</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">At Simple C we have created a simple package so your ceremony still feels special. Create a beautiful backdrop for you and your virtual guests if you are planning on live streaming across the globe.</td>
                                 <td class="body-2 neutral-100">Picture framing</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle waiting-approval" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Waiting for approval
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="#" class="table-link me-3">Confirm</a> <a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Name add-ons</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Ring</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</td>
                                 <td class="body-2 neutral-100">Sarah jewellry</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle waiting-approval" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Waiting for approval
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="#" class="table-link me-3">Confirm</a> <a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Name add-ons</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Car rent</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</td>
                                 <td class="body-2 neutral-100">Little vintage</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle waiting-approval" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Waiting for approval
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="#" class="table-link me-3">Confirm</a> <a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Name add-ons</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Car rent</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</td>
                                 <td class="body-2 neutral-100">Alan rent</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle waiting-approval" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Waiting for approval
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="#" class="table-link me-3">Confirm</a> <a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Name add-ons</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Chair & decoration</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</td>
                                 <td class="body-2 neutral-100">Wayne decoration</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle waiting-approval" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Waiting for approval
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="#" class="table-link me-3">Confirm</a> <a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Name add-ons</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Photo</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</td>
                                 <td class="body-2 neutral-100">Wedding dream</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle waiting-approval" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Waiting for approval
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="#" class="table-link me-3">Confirm</a> <a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Name add-ons</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Chair & decoration</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</td>
                                 <td class="body-2 neutral-100">Prisillia decoration</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle waiting-approval" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Waiting for approval
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="#" class="table-link me-3">Confirm</a> <a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Name add-ons</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Flower</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</td>
                                 <td class="body-2 neutral-100">Flower by joelle</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle waiting-approval" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Waiting for approval
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="#" class="table-link me-3">Confirm</a> <a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Name add-ons</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Chair & decoration</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</td>
                                 <td class="body-2 neutral-100">Decor-A-Shaan</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle waiting-approval" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Waiting for approval
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="#" class="table-link me-3">Confirm</a> <a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Name add-ons</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Chair & decoration</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</td>
                                 <td class="body-2 neutral-100">Wayne decoration</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle waiting-approval" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Waiting for approval
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="#" class="table-link me-3">Confirm</a> <a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                           </tbody>
                           <tfoot>
                              <tr>
                                 <td colspan="6">
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
                                 <th>Add-ons</th>
                                 <th>Category</th>
                                 <th>Description</th>
                                 <th>Name partners</th>
                                 <th>Status</th>
                                 <th></th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Corona pack</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Chair & decoration</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">At Simple C we have created a simple package so your ceremony still feels special. Create a beautiful backdrop for you and your virtual guests if you are planning on live streaming across the globe.</td>
                                 <td class="body-2 neutral-100">Picture framing</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle approved" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Approved
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Name add-ons</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Ring</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</td>
                                 <td class="body-2 neutral-100">Sarah jewellry</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle approved" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Approved
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Name add-ons</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Car rent</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</td>
                                 <td class="body-2 neutral-100">Little vintage</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle approved" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Approved
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Name add-ons</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Car rent</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</td>
                                 <td class="body-2 neutral-100">Alan rent</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle approved" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Approved
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Name add-ons</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Chair & decoration</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</td>
                                 <td class="body-2 neutral-100">Wayne decoration</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle approved" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Approved
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Name add-ons</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Photo</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</td>
                                 <td class="body-2 neutral-100">Wedding dream</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle approved" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Approved
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Name add-ons</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Chair & decoration</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</td>
                                 <td class="body-2 neutral-100">Prisillia decoration</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle approved" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Approved
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Name add-ons</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Flower</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</td>
                                 <td class="body-2 neutral-100">Flower by joelle</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle approved" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Approved
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Name add-ons</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Chair & decoration</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</td>
                                 <td class="body-2 neutral-100">Decor-A-Shaan</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle approved" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Approved
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Name add-ons</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Chair & decoration</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</td>
                                 <td class="body-2 neutral-100">Wayne decoration</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle approved" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Approved
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                           </tbody>
                           <tfoot>
                              <tr>
                                 <td colspan="6">
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
                                 <th>Add-ons</th>
                                 <th>Category</th>
                                 <th>Description</th>
                                 <th>Name partners</th>
                                 <th>Status</th>
                                 <th></th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Corona pack</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Chair & decoration</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">At Simple C we have created a simple package so your ceremony still feels special. Create a beautiful backdrop for you and your virtual guests if you are planning on live streaming across the globe.</td>
                                 <td class="body-2 neutral-100">Picture framing</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle rejected" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Rejected
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="#" class="table-link me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasfeedbackaddons" aria-controls="offcanvasfeedbackaddons">See feedback</a> <a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Name add-ons</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Ring</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</td>
                                 <td class="body-2 neutral-100">Sarah jewellry</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle rejected" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Rejected
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="#" class="table-link me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasfeedbackaddons" aria-controls="offcanvasfeedbackaddons">See feedback</a> <a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Name add-ons</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Car rent</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</td>
                                 <td class="body-2 neutral-100">Little vintage</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle rejected" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Rejected
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="#" class="table-link me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasfeedbackaddons" aria-controls="offcanvasfeedbackaddons">See feedback</a> <a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Name add-ons</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Car rent</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</td>
                                 <td class="body-2 neutral-100">Alan rent</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle rejected" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Rejected
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="#" class="table-link me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasfeedbackaddons" aria-controls="offcanvasfeedbackaddons">See feedback</a> <a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Name add-ons</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Chair & decoration</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</td>
                                 <td class="body-2 neutral-100">Wayne decoration</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle rejected" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Rejected
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="#" class="table-link me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasfeedbackaddons" aria-controls="offcanvasfeedbackaddons">See feedback</a> <a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Name add-ons</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Photo</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</td>
                                 <td class="body-2 neutral-100">Wedding dream</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle rejected" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Rejected
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="#" class="table-link me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasfeedbackaddons" aria-controls="offcanvasfeedbackaddons">See feedback</a> <a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Name add-ons</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Chair & decoration</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</td>
                                 <td class="body-2 neutral-100">Prisillia decoration</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle rejected" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Rejected
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="#" class="table-link me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasfeedbackaddons" aria-controls="offcanvasfeedbackaddons">See feedback</a> <a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Name add-ons</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Flower</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</td>
                                 <td class="body-2 neutral-100">Flower by joelle</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle rejected" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Rejected
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="#" class="table-link me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasfeedbackaddons" aria-controls="offcanvasfeedbackaddons">See feedback</a> <a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Name add-ons</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Chair & decoration</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</td>
                                 <td class="body-2 neutral-100">Decor-A-Shaan</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle rejected" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Rejected
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="#" class="table-link me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasfeedbackaddons" aria-controls="offcanvasfeedbackaddons">See feedback</a> <a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                              <tr>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Name add-ons</td>
                                 <td class="body-2 neutral-100" style="min-width:200px;">Chair & decoration</td>
                                 <td class="body-3 neutral-100" style="min-width:250px; max-width:250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</td>
                                 <td class="body-2 neutral-100">Wayne decoration</td>
                                 <td style="min-width:200px;">
                                    <div class="dropdown table-dropdown">
                                       <button class="btn dropdown-toggle rejected" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Rejected
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item waiting-approval" href="#">Waiting for approval</a></li>
                                         <li><a class="dropdown-item approved" href="#">Approved</a></li>
                                         <li><a class="dropdown-item rejected" href="#">Rejected</a></li>
                                       </ul>
                                     </div>
                                 </td>
                                 <td style="min-width:230px;"><a href="#" class="table-link me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasfeedbackaddons" aria-controls="offcanvasfeedbackaddons">See feedback</a> <a href="/admin/admin-add-ons-details" class="table-link">View info</a></td>
                              </tr>
                           </tbody>
                           <tfoot>
                              <tr>
                                 <td colspan="6">
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
            <div class="tab-pane fade" id="celebrants" role="tabpanel" aria-labelledby="celebrants-tab">
               <a href="#" class="theme-btn primary-btn d-inline-block mb-4" data-bs-toggle="offcanvas" data-bs-target="#offcanvasaddons" aria-controls="offcanvasaddons"><img class="me-2" src="/images/admin/add-ons/white-plus.svg" alt="Add">Create new add-ons</a>
               <div class="card panel-card">
                  <div class="card-body">
                     <ul class="add-on-setting-ul list-unstyled p-0 m-0">
                        <li class="d-flex flex-wrap mb-4">
                           <label class="small-text2">Add-on 1</label>
                           <span class="body-1 neutral-100 me-4 mb-3">Chair & decoration</span>
                           <div class="d-flex">
                              <a href="#" class=""><img src="/images/admin/add-ons/add-on-delete.svg" alt="Delete"></a>
                              <a href="#" class="ms-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvaseditaddons" aria-controls="offcanvaseditaddons"><img src="/images/admin/add-ons/add-on-edit.svg" alt="Edit"></a>
                           </div>
                        </li>
                        <li class="d-flex flex-wrap mb-4">
                           <label class="small-text2">Add-on 2</label>
                           <span class="body-1 neutral-100 me-4 mb-3">Photograper</span>
                           <div class="d-flex">
                              <a href="#" class=""><img src="/images/admin/add-ons/add-on-delete.svg" alt="Delete"></a>
                              <a href="#" class="ms-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvaseditaddons" aria-controls="offcanvaseditaddons"><img src="/images/admin/add-ons/add-on-edit.svg" alt="Edit"></a>
                           </div>
                        </li>
                        <li class="d-flex flex-wrap mb-4">
                           <label class="small-text2">Add-on 3</label>
                           <span class="body-1 neutral-100 me-4 mb-3">Ring</span>
                           <div class="d-flex">
                              <a href="#" class=""><img src="/images/admin/add-ons/add-on-delete.svg" alt="Delete"></a>
                              <a href="#" class="ms-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvaseditaddons" aria-controls="offcanvaseditaddons"><img src="/images/admin/add-ons/add-on-edit.svg" alt="Edit"></a>
                           </div>
                        </li>
                        <li class="d-flex flex-wrap mb-4">
                           <label class="small-text2">Add-on 4</label>
                           <span class="body-1 neutral-100 me-4 mb-3">Car rent</span>
                           <div class="d-flex">
                              <a href="#" class=""><img src="/images/admin/add-ons/add-on-delete.svg" alt="Delete"></a>
                              <a href="#" class="ms-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvaseditaddons" aria-controls="offcanvaseditaddons"><img src="/images/admin/add-ons/add-on-edit.svg" alt="Edit"></a>
                           </div>
                        </li>
                        <li class="d-flex flex-wrap mb-4">
                           <label class="small-text2">Add-on 5</label>
                           <span class="body-1 neutral-100 me-4 mb-3">Venue to celebraten</span>
                           <div class="d-flex">
                              <a href="#" class=""><img src="/images/admin/add-ons/add-on-delete.svg" alt="Delete"></a>
                              <a href="#" class="ms-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvaseditaddons" aria-controls="offcanvaseditaddons"><img src="/images/admin/add-ons/add-on-edit.svg" alt="Edit"></a>
                           </div>
                        </li>
                        <li class="d-flex flex-wrap mb-4">
                           <label class="small-text2">Add-on 6</label>
                           <span class="body-1 neutral-100 me-4 mb-3">Flower</span>
                           <div class="d-flex">
                              <a href="#" class=""><img src="/images/admin/add-ons/add-on-delete.svg" alt="Delete"></a>
                              <a href="#" class="ms-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvaseditaddons" aria-controls="offcanvaseditaddons"><img src="/images/admin/add-ons/add-on-edit.svg" alt="Edit"></a>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
        </div>
    </div>
</div>
@include('elements.admin-add-ons-add')
@include('elements.admin-add-ons-edit')
@include('elements.admin-add-ons-feedback')
@endsection