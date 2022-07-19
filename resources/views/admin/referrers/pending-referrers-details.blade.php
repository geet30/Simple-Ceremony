@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
         @include('elements.admin-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-4">
         @include('elements.panel-header')
         <a href="/all-referrers" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
         <div class="row">
            <div class="col-md-6">
               <div class="card panel-card">
                  <div class="card-body">
                     <div class="row mb-3">
                        <div class="col-12">
                           <div class="d-flex align-items-center">
                              <h1 class="h4 netural-100 mb-0">History</h1>
                              <div class="dropdown ms-4">
                                 <a class="btn" role="button">
                                 <img src="/images/location-page/filter-icon.svg" class="fliter-icon" alt="Filter Icon">
                                 </a>
                                 <div class="select-with-checkbox">
                                    <select name="filter_by_categories" id="selectinput" class="js-placeholder-single-input js-select2 form-control" multiple="multiple">
                                       <optgroup label="Status">
                                          <option value="O1" data-badge="">Pending</option>
                                          <option value="O2" data-badge="">Paid</option>
                                       </optgroup>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="table-responsive">
                              <table class="table align-middle theme-table">
                                 <thead>
                                    <tr>
                                       <th>Couple name</th>
                                       <th class="text-center">Register date</th>
                                       <th class="text-center">Status</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td class="body-2 neutral-100" style="min-width:150px;">David & Sarah</td>
                                       <td class="body-2 neutral-100 text-center" style="min-width:150px;">June 11, 2022</td>
                                       <td style="min-width:200px;" class="p-3 text-center">
                                          <div class="dropdown table-dropdown">
                                             <button class="btn dropdown-toggle waiting-approval" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                             Pending
                                             </button>
                                             <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="">
                                                <li><a class="dropdown-item waiting-approval" href="#">Pending</a></li>
                                                <li><a class="dropdown-item approved" href="#">paid</a></li>
                                             </ul>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="body-2 neutral-100" style="min-width:150px;">David & Sarah</td>
                                       <td class="body-2 neutral-100 text-center" style="min-width:150px;">June 11, 2022</td>
                                       <td style="min-width:200px;" class="p-3 text-center">
                                          <div class="dropdown table-dropdown">
                                             <button class="btn dropdown-toggle waiting-approval" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                             Pending
                                             </button>
                                             <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="">
                                                <li><a class="dropdown-item waiting-approval" href="#">Pending</a></li>
                                                <li><a class="dropdown-item approved" href="#">paid</a></li>
                                             </ul>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="body-2 neutral-100" style="min-width:150px;">David & Sarah</td>
                                       <td class="body-2 neutral-100 text-center" style="min-width:150px;">June 11, 2022</td>
                                       <td style="min-width:200px;" class="p-3 text-center">
                                          <div class="dropdown table-dropdown">
                                             <button class="btn dropdown-toggle waiting-approval" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                             Pending
                                             </button>
                                             <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="">
                                                <li><a class="dropdown-item waiting-approval" href="#">Pending</a></li>
                                                <li><a class="dropdown-item approved" href="#">paid</a></li>
                                             </ul>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="body-2 neutral-100" style="min-width:150px;">David & Sarah</td>
                                       <td class="body-2 neutral-100 text-center" style="min-width:150px;">June 11, 2022</td>
                                       <td style="min-width:200px;" class="p-3 text-center">
                                          <div class="dropdown table-dropdown">
                                             <button class="btn dropdown-toggle waiting-approval" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                             Pending
                                             </button>
                                             <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="">
                                                <li><a class="dropdown-item waiting-approval" href="#">Pending</a></li>
                                                <li><a class="dropdown-item approved" href="#">paid</a></li>
                                             </ul>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="body-2 neutral-100" style="min-width:150px;">David & Sarah</td>
                                       <td class="body-2 neutral-100 text-center" style="min-width:150px;">June 11, 2022</td>
                                       <td style="min-width:200px;" class="p-3 text-center">
                                          <div class="dropdown table-dropdown">
                                             <button class="btn dropdown-toggle waiting-approval" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                             Pending
                                             </button>
                                             <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="">
                                                <li><a class="dropdown-item waiting-approval" href="#">Pending</a></li>
                                                <li><a class="dropdown-item approved" href="#">paid</a></li>
                                             </ul>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="body-2 neutral-100" style="min-width:150px;">David & Sarah</td>
                                       <td class="body-2 neutral-100 text-center" style="min-width:150px;">June 11, 2022</td>
                                       <td style="min-width:200px;" class="p-3 text-center">
                                          <div class="dropdown table-dropdown">
                                             <button class="btn dropdown-toggle waiting-approval" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                             Pending
                                             </button>
                                             <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="">
                                                <li><a class="dropdown-item waiting-approval" href="#">Pending</a></li>
                                                <li><a class="dropdown-item approved" href="#">paid</a></li>
                                             </ul>
                                          </div>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="card panel-card">
                  <div class="card-body">
                     <div class="row mb-4">
                        <div class="col-md-8 align-self-center">
                           <div class="table-dropdown d-flex align-items-lg-center flex-column flex-lg-row">
                              <h1 class="h4 netural-100 mb-0">Detail informations</h1>
                           </div>
                        </div>
                        <div class="col-md-4 align-self-start d-flex justify-content-md-end mt-3 mt-md-0">
                           <a href="edit-referrers" class="theme-btn primary-btn"> <img class="me-2" src="/images/admin/add-ons/admin-addon-edit.svg" alt="Edit"> Edit</a>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <form class="needs-validation" method="POST" novalidate>
                              <div class="row">
                                 <div class="col-md-12 mb-4">
                                    <label for="InputName" class="form-label small-text2">Business name</label>
                                    <input type="text" value="Nathan" class="form-control body-1 netural-100" name="name" id="InputName" required>
                                    <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Business name is required</div>
                                 </div>
                                 <div class="col-md-12 mb-4">
                                    <label for="InputName" class="form-label small-text2">Contact name</label>
                                    <input type="text" value="Kristin Nathan" class="form-control body-1 netural-100" name="name" id="InputName" required>
                                    <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Contact name is required</div>
                                 </div>
                                 <div class="col-md-12 mb-4">
                                    <label for="phone" class="form-label small-text2">Phone number</label>
                                    <input class="form-control body-1 netural-100" type="tel" id="phone" placeholder="e.g. +1 702 123 4567" value="+61 0980980808" required>
                                    <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Phone number is required</div>
                                 </div>
                                 <div class="col-md-12 mb-4">
                                    <label for="InputName" class="form-label small-text2">Email address</label>
                                    <input type="text" value="kristin@gmail.com" class="form-control body-1 netural-100" name="name" id="InputName" required="">
                                    <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Email is required</div>
                                 </div>
                                 <div class="col-md-12 mb-4">
                                    <label for="InputName" class="form-label small-text2">Business category</label>
                                    <input type="text" value="Chair &amp; decoration" class="form-control body-1 netural-100" name="name" id="InputName" required="">
                                    <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Business category is required</div>
                                 </div>
                                 <div class="col-md-12 mb-4">
                                    <label for="InputName" class="form-label small-text2">ABN Number</label>
                                    <input type="text" value="090190190290" class="form-control body-1 netural-100" name="name" id="InputName" required>
                                    <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>ABN Number is required</div>
                                 </div>
                                 <div class="col-md-12 mb-4">
                                    <label for="InputName" class="form-label small-text2">Bank</label>
                                    <input type="text" value="Westpac" class="form-control body-1 netural-100" name="name" id="InputName" required="">
                                    <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Bank is required</div>
                                 </div>
                                 <div class="col-md-12 mb-4">
                                    <label for="InputName" class="form-label small-text2">Account number</label>
                                    <input type="text" value="09090909" class="form-control body-1 netural-100" name="name" id="InputName" required>
                                    <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Account number is required</div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('elements.admin.referral.referral-reason-sidebar')
@endsection