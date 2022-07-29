@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
         @include('elements.admin-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-4">
         @include('elements.panel-header')
         <ul class="add-on-list-nav row nav nav-pills mb-3 mt-3" id="pills-tab" role="tablist">
            <li class="nav-item col-md-6 col-lg-6 col-xl-3 col-xxl-3 mb-3" role="presentation">
               <button class="nav-link w-100 active" id="all-ads-on-tab" data-bs-toggle="pill" data-bs-target="#all-ads-on" type="button" role="tab" aria-controls="all-ads-on" aria-selected="true">
                  <div class="add-ons-nav d-flex">
                     <div class="add-ons-nav-image me-4">
                        <img src="/images/admin/add-ons/message-icon.svg" alt="All enquiries">
                     </div>
                     <div class="add-ons-nav-data text-start ">
                        <h3 class="h3">30</h3>
                        <p class="subheader-2">All enquiries</p>
                     </div>
                  </div>
               </button>
            </li>
            <li class="nav-item col-md-6 col-lg-6 col-xl-3 col-xxl-3 mb-3" role="presentation">
               <button class="nav-link w-100" id="Waiting-for-approval-tab" data-bs-toggle="pill" data-bs-target="#Waiting-for-approval" type="button" role="tab" aria-controls="Waiting-for-approval" aria-selected="false">
                  <div class="add-ons-nav d-flex">
                     <div class="add-ons-nav-image me-4">
                        <img src="/images/admin/add-ons/timer-icon.svg" alt="Follow up">
                     </div>
                     <div class="add-ons-nav-data text-start ">
                        <h3 class="h3">20</h3>
                        <p class="subheader-2">Follow up</p>
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
                        <h3 class="h3">7</h3>
                        <p class="subheader-2">Booked</p>
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
                        <h3 class="h3">3</h3>
                        <p class="subheader-2">No Interest</p>
                     </div>
                  </div>
               </button>
            </li>
         </ul>
         <div class="row mb-3">
            <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-3 mb-4 mb-lg-0">
               <a class="theme-btn primary-btn d-flex justify-content-center" href="/create-enquiry">
               <img class="me-2" src="/images/icons/add.svg" alt="shopping-icon">
               Create new enquiry
               </a>
            </div>
            <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-6 mb-4 mb-lg-0">
               <div class="form-group has-search w-100 position-relative">
                <input type="text" class="form-control" placeholder="Search">
                  <span class="fa fa-search form-control-feedback"></span>
               </div>
            </div>
            <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-3">
               <a role="button" class="theme-btn primary-btn d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#enquiry_calendarmodal">
               <img class="me-2" src="/images/icons/date.svg" alt="shopping-icon">
               select a specific date
               </a>
            </div>
         </div>
         <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="all-ads-on" role="tabpanel" aria-labelledby="all-ads-on-tab" tabindex="0">
               <div class="table-responsive">
                  <table class="table align-middle theme-table">
                     <thead>
                        <tr>
                           <th>Enquiry date</th>
                           <th class="text-center">Name <br>person 1</th>
                           <th class="text-center">Name <br>person 2</th>
                           <th class="text-center">Phone number</th>
                           <th class="text-center">Reference by</th>
                           <th class="text-center">Date marriage</th>
                           <th class="text-center">Status</th>
                           <th class="text-center"></th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:130px;">Feb 21, 2022</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:150px;">David</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:150px;">Sarah</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:130px;">Sept 10, 2022</td>
                           <td style="min-width:150px;" class="text-center">
                              <span class="status pending">Follow up</span>
                           </td>
                           <td style="min-width:150px;" class="text-center p-3">
                              <a href="enquiries-details" class="table-link">Read enquiry</a>
                           </td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:130px;">Feb 20, 2022</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:150px;">Tom</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:150px;">Jess</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:130px;">-</td>
                           <td style="min-width:150px;" class="text-center">
                              <span class="status registered">Booked</span>
                           </td>
                           <td style="min-width:150px;" class="text-center p-3">
                              <a href="enquiries-details" class="table-link">Read enquiry</a>
                           </td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:130px;">Feb 15, 2022</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:150px;">Jack</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:150px;">Ella</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:130px;">-</td>
                           <td style="min-width:150px;" class="text-center">
                              <span class="status registered">Booked</span>
                           </td>
                           <td style="min-width:150px;" class="text-center p-3">
                              <a href="enquiries-details" class="table-link">Read enquiry</a>
                           </td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:130px;">Feb 10, 2022</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:150px;">Matt</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:150px;">Zoe</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:130px;">-</td>
                           <td style="min-width:150px;" class="text-center">
                              <span class="status pending">Follow up</span>
                           </td>
                           <td style="min-width:150px;" class="text-center p-3">
                              <a href="enquiries-details" class="table-link">Read enquiry</a>
                           </td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:130px;">Feb 09, 2022</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:150px;">Max</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:150px;">Jade</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:130px;">Sept 10, 2022</td>
                           <td style="min-width:150px;" class="text-center">
                              <span class="status registered">Booked</span>
                           </td>
                           <td style="min-width:150px;" class="text-center p-3">
                              <a href="enquiries-details" class="table-link">Read enquiry</a>
                           </td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:130px;">Feb 07, 2022</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:150px;">Jorsey</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:150px;">Erin</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:130px;">-</td>
                           <td style="min-width:150px;" class="text-center">
                              <span class="status pending">Follow up</span>
                           </td>
                           <td style="min-width:150px;" class="text-center p-3">
                              <a href="enquiries-details" class="table-link">Read enquiry</a>
                           </td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:130px;">Feb 05, 2022</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:150px;">Chloe</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:150px;">Amy</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:130px;">-</td>
                           <td style="min-width:150px;" class="text-center">
                              <span class="status cancelled">No interest</span>
                           </td>
                           <td style="min-width:150px;" class="text-center p-3">
                              <a href="enquiries-details" class="table-link">Read enquiry</a>
                           </td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:130px;">Feb 06, 2022</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:150px;">Joe</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:150px;">Emma</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:130px;">-</td>
                           <td style="min-width:150px;" class="text-center">
                              <span class="status pending">Follow up</span>
                           </td>
                           <td style="min-width:150px;" class="text-center p-3">
                              <a href="enquiries-details" class="table-link">Read enquiry</a>
                           </td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:130px;">Feb 04, 2022</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:150px;">John</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:150px;">Emily</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:130px;">-</td>
                           <td style="min-width:150px;" class="text-center">
                              <span class="status pending">Follow up</span>
                           </td>
                           <td style="min-width:150px;" class="text-center p-3">
                              <a href="enquiries-details" class="table-link">Read enquiry</a>
                           </td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:130px;">Feb 03, 2022</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:150px;">Sam</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:150px;">Sophie</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                           <td class="body-2 neutral-100 text-center" style="min-width:130px;">-</td>
                           <td style="min-width:150px;" class="text-center">
                              <span class="status pending">Follow up</span>
                           </td>
                           <td style="min-width:150px;" class="text-center p-3">
                              <a href="enquiries-details" class="table-link">Read enquiry</a>
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
                           <th>Enquiry date</th>
                           <th class="text-center">Name <br>person 1</th>
                           <th class="text-center">Name <br>person 2</th>
                           <th class="text-center">Phone number</th>
                           <th class="text-center">Reference by</th>
                           <th class="text-center">Date marriage</th>
                           <th class="text-center">Status</th>
                           <th class="text-center"></th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                            <td class="body-2 neutral-100" style="min-width:130px;">Feb 21, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">David</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Sarah</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">Sept 10, 2022</td>
                            <td style="min-width:150px;" class="text-center">
                               <span class="status pending">Follow up</span>
                            </td>
                            <td style="min-width:150px;" class="text-center p-3">
                               <a href="enquiries-details" class="table-link">Read enquiry</a>
                            </td>
                         </tr>
                         <tr>
                            <td class="body-2 neutral-100" style="min-width:130px;">Feb 20, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Tom</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Jess</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">-</td>
                            <td style="min-width:150px;" class="text-center">
                                <span class="status pending">Follow up</span>
                            </td>
                            <td style="min-width:150px;" class="text-center p-3">
                               <a href="enquiries-details" class="table-link">Read enquiry</a>
                            </td>
                         </tr>
                         <tr>
                            <td class="body-2 neutral-100" style="min-width:130px;">Feb 15, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Jack</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Ella</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">-</td>
                            <td style="min-width:150px;" class="text-center">
                                <span class="status pending">Follow up</span>
                            </td>
                            <td style="min-width:150px;" class="text-center p-3">
                               <a href="enquiries-details" class="table-link">Read enquiry</a>
                            </td>
                         </tr>
                         <tr>
                            <td class="body-2 neutral-100" style="min-width:130px;">Feb 10, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Matt</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Zoe</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">-</td>
                            <td style="min-width:150px;" class="text-center">
                               <span class="status pending">Follow up</span>
                            </td>
                            <td style="min-width:150px;" class="text-center p-3">
                               <a href="enquiries-details" class="table-link">Read enquiry</a>
                            </td>
                         </tr>
                         <tr>
                            <td class="body-2 neutral-100" style="min-width:130px;">Feb 09, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Max</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Jade</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">Sept 10, 2022</td>
                            <td style="min-width:150px;" class="text-center">
                                <span class="status pending">Follow up</span>
                            </td>
                            <td style="min-width:150px;" class="text-center p-3">
                               <a href="enquiries-details" class="table-link">Read enquiry</a>
                            </td>
                         </tr>
                         <tr>
                            <td class="body-2 neutral-100" style="min-width:130px;">Feb 07, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Jorsey</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Erin</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">-</td>
                            <td style="min-width:150px;" class="text-center">
                               <span class="status pending">Follow up</span>
                            </td>
                            <td style="min-width:150px;" class="text-center p-3">
                               <a href="enquiries-details" class="table-link">Read enquiry</a>
                            </td>
                         </tr>
                         <tr>
                            <td class="body-2 neutral-100" style="min-width:130px;">Feb 05, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Chloe</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Amy</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">-</td>
                            <td style="min-width:150px;" class="text-center">
                                <span class="status pending">Follow up</span>
                            </td>
                            <td style="min-width:150px;" class="text-center p-3">
                               <a href="enquiries-details" class="table-link">Read enquiry</a>
                            </td>
                         </tr>
                         <tr>
                            <td class="body-2 neutral-100" style="min-width:130px;">Feb 06, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Joe</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Emma</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">-</td>
                            <td style="min-width:150px;" class="text-center">
                               <span class="status pending">Follow up</span>
                            </td>
                            <td style="min-width:150px;" class="text-center p-3">
                               <a href="enquiries-details" class="table-link">Read enquiry</a>
                            </td>
                         </tr>
                         <tr>
                            <td class="body-2 neutral-100" style="min-width:130px;">Feb 04, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">John</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Emily</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">-</td>
                            <td style="min-width:150px;" class="text-center">
                               <span class="status pending">Follow up</span>
                            </td>
                            <td style="min-width:150px;" class="text-center p-3">
                               <a href="enquiries-details" class="table-link">Read enquiry</a>
                            </td>
                         </tr>
                         <tr>
                            <td class="body-2 neutral-100" style="min-width:130px;">Feb 03, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Sam</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Sophie</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">-</td>
                            <td style="min-width:150px;" class="text-center">
                               <span class="status pending">Follow up</span>
                            </td>
                            <td style="min-width:150px;" class="text-center p-3">
                               <a href="enquiries-details" class="table-link">Read enquiry</a>
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
                           <th>Enquiry date</th>
                           <th class="text-center">Name <br>person 1</th>
                           <th class="text-center">Name <br>person 2</th>
                           <th class="text-center">Phone number</th>
                           <th class="text-center">Reference by</th>
                           <th class="text-center">Date marriage</th>
                           <th class="text-center">Status</th>
                           <th class="text-center"></th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                            <td class="body-2 neutral-100" style="min-width:130px;">Feb 21, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">David</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Sarah</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">Sept 10, 2022</td>
                            <td style="min-width:150px;" class="text-center">
                                <span class="status registered">Booked</span>
                            </td>
                            <td style="min-width:150px;" class="text-center p-3">
                               <a href="enquiries-details" class="table-link">Read enquiry</a>
                            </td>
                         </tr>
                         <tr>
                            <td class="body-2 neutral-100" style="min-width:130px;">Feb 20, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Tom</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Jess</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">-</td>
                            <td style="min-width:150px;" class="text-center">
                               <span class="status registered">Booked</span>
                            </td>
                            <td style="min-width:150px;" class="text-center p-3">
                               <a href="enquiries-details" class="table-link">Read enquiry</a>
                            </td>
                         </tr>
                         <tr>
                            <td class="body-2 neutral-100" style="min-width:130px;">Feb 15, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Jack</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Ella</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">-</td>
                            <td style="min-width:150px;" class="text-center">
                               <span class="status registered">Booked</span>
                            </td>
                            <td style="min-width:150px;" class="text-center p-3">
                               <a href="enquiries-details" class="table-link">Read enquiry</a>
                            </td>
                         </tr>
                         <tr>
                            <td class="body-2 neutral-100" style="min-width:130px;">Feb 10, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Matt</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Zoe</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">-</td>
                            <td style="min-width:150px;" class="text-center">
                                <span class="status registered">Booked</span>
                            </td>
                            <td style="min-width:150px;" class="text-center p-3">
                               <a href="enquiries-details" class="table-link">Read enquiry</a>
                            </td>
                         </tr>
                         <tr>
                            <td class="body-2 neutral-100" style="min-width:130px;">Feb 09, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Max</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Jade</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">Sept 10, 2022</td>
                            <td style="min-width:150px;" class="text-center">
                                <span class="status registered">Booked</span>
                            </td>
                            <td style="min-width:150px;" class="text-center p-3">
                               <a href="enquiries-details" class="table-link">Read enquiry</a>
                            </td>
                         </tr>
                         <tr>
                            <td class="body-2 neutral-100" style="min-width:130px;">Feb 07, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Jorsey</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Erin</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">-</td>
                            <td style="min-width:150px;" class="text-center">
                                <span class="status registered">Booked</span>
                            </td>
                            <td style="min-width:150px;" class="text-center p-3">
                               <a href="enquiries-details" class="table-link">Read enquiry</a>
                            </td>
                         </tr>
                         <tr>
                            <td class="body-2 neutral-100" style="min-width:130px;">Feb 05, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Chloe</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Amy</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">-</td>
                            <td style="min-width:150px;" class="text-center">
                                <span class="status registered">Booked</span>
                            </td>
                            <td style="min-width:150px;" class="text-center p-3">
                               <a href="enquiries-details" class="table-link">Read enquiry</a>
                            </td>
                         </tr>
                         <tr>
                            <td class="body-2 neutral-100" style="min-width:130px;">Feb 06, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Joe</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Emma</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">-</td>
                            <td style="min-width:150px;" class="text-center">
                                <span class="status registered">Booked</span>
                            </td>
                            <td style="min-width:150px;" class="text-center p-3">
                               <a href="enquiries-details" class="table-link">Read enquiry</a>
                            </td>
                         </tr>
                         <tr>
                            <td class="body-2 neutral-100" style="min-width:130px;">Feb 04, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">John</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Emily</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">-</td>
                            <td style="min-width:150px;" class="text-center">
                                <span class="status registered">Booked</span>
                            </td>
                            <td style="min-width:150px;" class="text-center p-3">
                               <a href="enquiries-details" class="table-link">Read enquiry</a>
                            </td>
                         </tr>
                         <tr>
                            <td class="body-2 neutral-100" style="min-width:130px;">Feb 03, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Sam</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Sophie</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">-</td>
                            <td style="min-width:150px;" class="text-center">
                                <span class="status registered">Booked</span>
                            </td>
                            <td style="min-width:150px;" class="text-center p-3">
                               <a href="enquiries-details" class="table-link">Read enquiry</a>
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
                           <th>Enquiry date</th>
                           <th class="text-center">Name <br>person 1</th>
                           <th class="text-center">Name <br>person 2</th>
                           <th class="text-center">Phone number</th>
                           <th class="text-center">Reference by</th>
                           <th class="text-center">Date marriage</th>
                           <th class="text-center">Status</th>
                           <th class="text-center"></th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                            <td class="body-2 neutral-100" style="min-width:130px;">Feb 21, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">David</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Sarah</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">Sept 10, 2022</td>
                            <td style="min-width:150px;" class="text-center">
                                <span class="status cancelled">No interest</span>
                            </td>
                            <td style="min-width:150px;" class="text-center p-3">
                               <a href="enquiries-details" class="table-link">Read enquiry</a>
                            </td>
                         </tr>
                         <tr>
                            <td class="body-2 neutral-100" style="min-width:130px;">Feb 20, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Tom</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Jess</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">-</td>
                            <td style="min-width:150px;" class="text-center">
                                <span class="status cancelled">No interest</span>
                            </td>
                            <td style="min-width:150px;" class="text-center p-3">
                               <a href="enquiries-details" class="table-link">Read enquiry</a>
                            </td>
                         </tr>
                         <tr>
                            <td class="body-2 neutral-100" style="min-width:130px;">Feb 15, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Jack</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Ella</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">-</td>
                            <td style="min-width:150px;" class="text-center">
                                <span class="status cancelled">No interest</span>
                            </td>
                            <td style="min-width:150px;" class="text-center p-3">
                               <a href="enquiries-details" class="table-link">Read enquiry</a>
                            </td>
                         </tr>
                         <tr>
                            <td class="body-2 neutral-100" style="min-width:130px;">Feb 10, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Matt</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Zoe</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">-</td>
                            <td style="min-width:150px;" class="text-center">
                                <span class="status cancelled">No interest</span>
                            </td>
                            <td style="min-width:150px;" class="text-center p-3">
                               <a href="enquiries-details" class="table-link">Read enquiry</a>
                            </td>
                         </tr>
                         <tr>
                            <td class="body-2 neutral-100" style="min-width:130px;">Feb 09, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Max</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Jade</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">Sept 10, 2022</td>
                            <td style="min-width:150px;" class="text-center">
                                <span class="status cancelled">No interest</span>
                            </td>
                            <td style="min-width:150px;" class="text-center p-3">
                               <a href="enquiries-details" class="table-link">Read enquiry</a>
                            </td>
                         </tr>
                         <tr>
                            <td class="body-2 neutral-100" style="min-width:130px;">Feb 07, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Jorsey</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Erin</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">-</td>
                            <td style="min-width:150px;" class="text-center">
                                <span class="status cancelled">No interest</span>
                            </td>
                            <td style="min-width:150px;" class="text-center p-3">
                               <a href="enquiries-details" class="table-link">Read enquiry</a>
                            </td>
                         </tr>
                         <tr>
                            <td class="body-2 neutral-100" style="min-width:130px;">Feb 05, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Chloe</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Amy</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">-</td>
                            <td style="min-width:150px;" class="text-center">
                               <span class="status cancelled">No interest</span>
                            </td>
                            <td style="min-width:150px;" class="text-center p-3">
                               <a href="enquiries-details" class="table-link">Read enquiry</a>
                            </td>
                         </tr>
                         <tr>
                            <td class="body-2 neutral-100" style="min-width:130px;">Feb 06, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Joe</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Emma</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">-</td>
                            <td style="min-width:150px;" class="text-center">
                                <span class="status cancelled">No interest</span>
                            </td>
                            <td style="min-width:150px;" class="text-center p-3">
                               <a href="enquiries-details" class="table-link">Read enquiry</a>
                            </td>
                         </tr>
                         <tr>
                            <td class="body-2 neutral-100" style="min-width:130px;">Feb 04, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">John</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Emily</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">-</td>
                            <td style="min-width:150px;" class="text-center">
                                <span class="status cancelled">No interest</span>
                            </td>
                            <td style="min-width:150px;" class="text-center p-3">
                               <a href="enquiries-details" class="table-link">Read enquiry</a>
                            </td>
                         </tr>
                         <tr>
                            <td class="body-2 neutral-100" style="min-width:130px;">Feb 03, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Sam</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:150px;">Sophie</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:100px;">+61 09090909</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">Social media</td>
                            <td class="body-2 neutral-100 text-center" style="min-width:130px;">-</td>
                            <td style="min-width:150px;" class="text-center">
                                <span class="status cancelled">No interest</span>
                            </td>
                            <td style="min-width:150px;" class="text-center p-3">
                               <a href="enquiries-details" class="table-link">Read enquiry</a>
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
@include('elements.admin.enquiry.calander')
@endsection