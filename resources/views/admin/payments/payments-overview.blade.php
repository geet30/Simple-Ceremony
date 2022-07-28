@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
         @include('elements.admin-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-4">
         @include('elements.panel-header')
         <div class="row mb-3">
            <div class="col-lg-8 col-xl-9 mb-3 mb-lg-0">
               <ul class="nav theme-tabs">
                  <li class="nav-item">
                     <a class="nav-link active" id="invoice-of-couple-tab" data-bs-toggle="tab" data-bs-target="#invoice-of-couple" href="#">Invoice from couples</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" id="invoice-of-celebrants-tab" data-bs-toggle="tab" data-bs-target="#invoice-of-celebrants" href="#">invoice of marriage celebrant</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" id="invoice-of-partners-tab" data-bs-toggle="tab" data-bs-target="#invoice-of-partners" href="#">invoice of partners</a>
                  </li>
               </ul>
            </div>
            <div class="col-lg-4 col-xl-3">
               <div class="form-group has-search w-100 position-relative">
                  <input type="text" class="form-control" placeholder="Search invoice">
                  <span class="fa fa-search form-control-feedback"></span>
               </div>
            </div>
         </div>
         <div class="tab-content" id="tabContent">
            <div class="tab-pane fade show active" id="invoice-of-couple" role="tabpanel" aria-labelledby="invoice-of-couple-tab">
               <div class="table-responsive">
                  <table class="table align-middle theme-table">
                     <thead>
                        <tr>
                           <th>Invoice number</th>
                           <th>Date</th>
                           <th>Name couple</th>
                           <th>Amount</th>
                           <th></th>
                           <th></th>
                           <th></th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width: 150px;">#0901020912</td>
                           <td class="body-2 neutral-100" style="min-width: 150px;">Feb 21, 2022</td>
                           <td class="body-2 neutral-100" style="min-width: 150px;">David &amp; Sarah</td>
                           <td class="body-2 neutral-100" style="min-width: 100px;">$40</td>
                           <td style="min-width: 50px;" class="p-3 text-center">
                              <a role="button" class="table-link" data-bs-toggle="modal" data-bs-target="#tax_invoice_modal">View</a>
                           </td>
                           <td style="min-width: 90px;" class="p-3 text-center">
                              <a href="#" class="table-link">Download</a>
                           </td>
                           <td style="min-width: 80px;" class="p-3 text-center">
                              <a href="#" class="table-link">Delete</a>
                           </td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width: 150px;">#090893034</td>
                           <td class="body-2 neutral-100" style="min-width: 150px;">Feb 20, 2022</td>
                           <td class="body-2 neutral-100" style="min-width: 150px;">Joe & Jane</td>
                           <td class="body-2 neutral-100" style="min-width: 100px;">$120</td>
                           <td style="min-width: 50px;" class="p-3 text-center">
                              <a role="button" class="table-link" data-bs-toggle="modal" data-bs-target="#tax_invoice_modal">View</a>
                           </td>
                           <td style="min-width: 90px;" class="p-3 text-center">
                              <a href="#" class="table-link">Download</a>
                           </td>
                           <td style="min-width: 80px;" class="p-3 text-center">
                              <a href="#" class="table-link">Delete</a>
                           </td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width: 150px;">#096204704</td>
                           <td class="body-2 neutral-100" style="min-width: 150px;">Feb 11, 2022</td>
                           <td class="body-2 neutral-100" style="min-width: 150px;">Levi & Avs</td>
                           <td class="body-2 neutral-100" style="min-width: 100px;">$540</td>
                           <td style="min-width: 50px;" class="p-3 text-center">
                              <a role="button" class="table-link" data-bs-toggle="modal" data-bs-target="#tax_invoice_modal">View</a>
                           </td>
                           <td style="min-width: 90px;" class="p-3 text-center">
                              <a href="#" class="table-link">Download</a>
                           </td>
                           <td style="min-width: 80px;" class="p-3 text-center">
                              <a href="#" class="table-link">Delete</a>
                           </td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width: 150px;">#0997937212</td>
                           <td class="body-2 neutral-100" style="min-width: 150px;">Feb 09, 2022</td>
                           <td class="body-2 neutral-100" style="min-width: 150px;">Richard & Ella</td>
                           <td class="body-2 neutral-100" style="min-width: 100px;">$90</td>
                           <td style="min-width: 50px;" class="p-3 text-center">
                              <a role="button" class="table-link" data-bs-toggle="modal" data-bs-target="#tax_invoice_modal">View</a>
                           </td>
                           <td style="min-width: 90px;" class="p-3 text-center">
                              <a href="#" class="table-link">Download</a>
                           </td>
                           <td style="min-width: 80px;" class="p-3 text-center">
                              <a href="#" class="table-link">Delete</a>
                           </td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width: 150px;">#098740734</td>
                           <td class="body-2 neutral-100" style="min-width: 150px;">Feb 09, 2022</td>
                           <td class="body-2 neutral-100" style="min-width: 150px;">Lucas & Grace</td>
                           <td class="body-2 neutral-100" style="min-width: 100px;">$340</td>
                           <td style="min-width: 50px;" class="p-3 text-center">
                              <a role="button" class="table-link" data-bs-toggle="modal" data-bs-target="#tax_invoice_modal">View</a>
                           </td>
                           <td style="min-width: 90px;" class="p-3 text-center">
                              <a href="#" class="table-link">Download</a>
                           </td>
                           <td style="min-width: 80px;" class="p-3 text-center">
                              <a href="#" class="table-link">Delete</a>
                           </td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width: 150px;">#0098072312</td>
                           <td class="body-2 neutral-100" style="min-width: 150px;">Feb 08, 2022</td>
                           <td class="body-2 neutral-100" style="min-width: 150px;">Thomas & Matilda</td>
                           <td class="body-2 neutral-100" style="min-width: 100px;">$1.521</td>
                           <td style="min-width: 50px;" class="p-3 text-center">
                              <a role="button" class="table-link" data-bs-toggle="modal" data-bs-target="#tax_invoice_modal">View</a>
                           </td>
                           <td style="min-width: 90px;" class="p-3 text-center">
                              <a href="#" class="table-link">Download</a>
                           </td>
                           <td style="min-width: 80px;" class="p-3 text-center">
                              <a href="#" class="table-link">Delete</a>
                           </td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width: 150px;">#81273918293</td>
                           <td class="body-2 neutral-100" style="min-width: 150px;">Feb 07, 2022</td>
                           <td class="body-2 neutral-100" style="min-width: 150px;">William & Isla</td>
                           <td class="body-2 neutral-100" style="min-width: 100px;">$135</td>
                           <td style="min-width: 50px;" class="p-3 text-center">
                              <a role="button" class="table-link" data-bs-toggle="modal" data-bs-target="#tax_invoice_modal">View</a>
                           </td>
                           <td style="min-width: 90px;" class="p-3 text-center">
                              <a href="#" class="table-link">Download</a>
                           </td>
                           <td style="min-width: 80px;" class="p-3 text-center">
                              <a href="#" class="table-link">Delete</a>
                           </td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width: 150px;">#9723401249</td>
                           <td class="body-2 neutral-100" style="min-width: 150px;">Feb 06, 2022</td>
                           <td class="body-2 neutral-100" style="min-width: 150px;">Jack & Charlote</td>
                           <td class="body-2 neutral-100" style="min-width: 100px;">$120</td>
                           <td style="min-width: 50px;" class="p-3 text-center">
                              <a role="button" class="table-link" data-bs-toggle="modal" data-bs-target="#tax_invoice_modal">View</a>
                           </td>
                           <td style="min-width: 90px;" class="p-3 text-center">
                              <a href="#" class="table-link">Download</a>
                           </td>
                           <td style="min-width: 80px;" class="p-3 text-center">
                              <a href="#" class="table-link">Delete</a>
                           </td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width: 150px;">#98192833041</td>
                           <td class="body-2 neutral-100" style="min-width: 150px;">Feb 05, 2022</td>
                           <td class="body-2 neutral-100" style="min-width: 150px;">Theo & Ella</td>
                           <td class="body-2 neutral-100" style="min-width: 100px;">$327</td>
                           <td style="min-width: 50px;" class="p-3 text-center">
                              <a role="button" class="table-link" data-bs-toggle="modal" data-bs-target="#tax_invoice_modal">View</a>
                           </td>
                           <td style="min-width: 90px;" class="p-3 text-center">
                              <a href="#" class="table-link">Download</a>
                           </td>
                           <td style="min-width: 80px;" class="p-3 text-center">
                              <a href="#" class="table-link">Delete</a>
                           </td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width: 150px;">#0901020912</td>
                           <td class="body-2 neutral-100" style="min-width: 150px;">Feb 21, 2022</td>
                           <td class="body-2 neutral-100" style="min-width: 150px;">Noah & Grace</td>
                           <td class="body-2 neutral-100" style="min-width: 100px;">$140</td>
                           <td style="min-width: 50px;" class="p-3 text-center">
                              <a role="button" class="table-link" data-bs-toggle="modal" data-bs-target="#tax_invoice_modal">View</a>
                           </td>
                           <td style="min-width: 90px;" class="p-3 text-center">
                              <a href="#" class="table-link">Download</a>
                           </td>
                           <td style="min-width: 80px;" class="p-3 text-center">
                              <a href="#" class="table-link">Delete</a>
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
            <div class="tab-pane fade" id="invoice-of-celebrants" role="tabpanel" aria-labelledby="invoice-of-celebrants-tab">
               <div class="table-responsive">
                  <table class="table align-middle theme-table">
                     <thead>
                        <tr>
                           <th></th>
                           <th class="text-center">Invoice<br>number</th>
                           <th class="text-center">Date created</th>
                           <th class="text-center">Marriage<br>celebrant</th>
                           <th class="text-center">Date of<br>ceremony</th>
                           <th class="text-center">Name of<br>couple</th>
                           <th class="text-center">Amount</th>
                           <th class="text-center">Status</th>
                           <th class="text-center"></th>
                           <th class="text-center"></th>
                           <th class="text-center"></th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="remember" id="1" autocomplete="off">
                              </div>
                           </td>
                           <td class="body-2 neutral-100 text-center" style="min-width: 150px;">-</td>
                           <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Feb 21, 2022</td>
                           <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Joe</td>
                           <td class="body-2 neutral-100 text-center" style="min-width: 100px;">Sept 21, 2022</td>
                           <td class="body-2 neutral-100 text-center" style="min-width: 100px;">David & Sarah</td>
                           <td class="body-2 neutral-100 text-center" style="min-width: 100px;">$160</td>
                           <td class="body-2 neutral-100 text-center" style="min-width: 100px;">
                              <div class="dropdown table-dropdown">
                                 <button class="btn dropdown-toggle waiting-approval" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Pending
                                 </button>
                                 <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item waiting-approval" href="#">Pending</a></li>
                                    <li><a class="dropdown-item approved" href="#">Paid</a></li>
                                 </ul>
                              </div>
                           </td>
                           <td style="min-width: 50px;" class="p-3 text-center">
                           </td>
                           <td style="min-width: 90px;" class="p-3 text-center">
                           </td>
                           <td style="min-width: 80px;" class="p-3 text-center">
                           </td>
                        </tr>
                        <tr>
                            <td>
                               <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="remember" id="1" autocomplete="off" disabled>
                               </div>
                            </td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">#0252345544</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Feb 20, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">John</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">Sept 20, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">Matt & Zoe</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">$120</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">
                                <div class="dropdown table-dropdown">
                                    <button class="btn dropdown-toggle approved" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                       Paid
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item waiting-approval" href="#">Pending</a></li>
                                        <li><a class="dropdown-item approved" href="#">Paid</a></li>
                                     </ul>
                                  </div>
                            </td>
                            <td style="min-width: 50px;" class="p-3 text-center">
                               <a role="button" class="table-link" data-bs-toggle="modal" data-bs-target="#tax_invoice_modal">View</a>
                            </td>
                            <td style="min-width: 90px;" class="p-3 text-center">
                               <a href="#" class="table-link">Download</a>
                            </td>
                            <td style="min-width: 80px;" class="p-3 text-center">
                               <a href="#" class="table-link">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>
                               <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="remember" id="1" autocomplete="off" disabled>
                               </div>
                            </td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">#0124264674</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Feb 18, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Max</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">Sept 19, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">John & Emma</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">$130</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">
                                <div class="dropdown table-dropdown">
                                    <button class="btn dropdown-toggle approved" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                       Paid
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item waiting-approval" href="#">Pending</a></li>
                                        <li><a class="dropdown-item approved" href="#">Paid</a></li>
                                     </ul>
                                  </div>
                            </td>
                            <td style="min-width: 50px;" class="p-3 text-center">
                               <a role="button" class="table-link" data-bs-toggle="modal" data-bs-target="#tax_invoice_modal">View</a>
                            </td>
                            <td style="min-width: 90px;" class="p-3 text-center">
                               <a href="#" class="table-link">Download</a>
                            </td>
                            <td style="min-width: 80px;" class="p-3 text-center">
                               <a href="#" class="table-link">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>
                               <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="remember" id="1" autocomplete="off">
                               </div>
                            </td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">-</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Feb 18, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Joe</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">Sept 18, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">Chloe & Amy</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">$160</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">
                               <div class="dropdown table-dropdown">
                                  <button class="btn dropdown-toggle waiting-approval" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                     Pending
                                  </button>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                     <li><a class="dropdown-item waiting-approval" href="#">Pending</a></li>
                                     <li><a class="dropdown-item approved" href="#">Paid</a></li>
                                  </ul>
                               </div>
                            </td>
                            <td style="min-width: 50px;" class="p-3 text-center">
                            </td>
                            <td style="min-width: 90px;" class="p-3 text-center">
                            </td>
                            <td style="min-width: 80px;" class="p-3 text-center">
                            </td>
                         </tr>
                         <tr>
                            <td>
                               <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="remember" id="1" autocomplete="off" disabled>
                               </div>
                            </td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">#5757854223</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Feb 17, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Johny</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">Sept 14, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">Sam & Sophie</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">$160</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">
                                <div class="dropdown table-dropdown">
                                    <button class="btn dropdown-toggle approved" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                       Paid
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item waiting-approval" href="#">Pending</a></li>
                                        <li><a class="dropdown-item approved" href="#">Paid</a></li>
                                     </ul>
                                  </div>
                            </td>
                            <td style="min-width: 50px;" class="p-3 text-center">
                               <a role="button" class="table-link" data-bs-toggle="modal" data-bs-target="#tax_invoice_modal">View</a>
                            </td>
                            <td style="min-width: 90px;" class="p-3 text-center">
                               <a href="#" class="table-link">Download</a>
                            </td>
                            <td style="min-width: 80px;" class="p-3 text-center">
                               <a href="#" class="table-link">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>
                               <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="remember" id="1" autocomplete="off" disabled>
                               </div>
                            </td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">#2435758890</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Feb 15, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Ray</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">Sept 11, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">Jorsey & Erin</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">$120</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">
                                <div class="dropdown table-dropdown">
                                    <button class="btn dropdown-toggle approved" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                       Paid
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item waiting-approval" href="#">Pending</a></li>
                                        <li><a class="dropdown-item approved" href="#">Paid</a></li>
                                     </ul>
                                  </div>
                            </td>
                            <td style="min-width: 50px;" class="p-3 text-center">
                               <a role="button" class="table-link" data-bs-toggle="modal" data-bs-target="#tax_invoice_modal">View</a>
                            </td>
                            <td style="min-width: 90px;" class="p-3 text-center">
                               <a href="#" class="table-link">Download</a>
                            </td>
                            <td style="min-width: 80px;" class="p-3 text-center">
                               <a href="#" class="table-link">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>
                               <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="remember" id="1" autocomplete="off">
                               </div>
                            </td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">-</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Feb 16, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Joe</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">Sept 09, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">Max & Jade</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">$130</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">
                               <div class="dropdown table-dropdown">
                                  <button class="btn dropdown-toggle waiting-approval" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                     Pending
                                  </button>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                     <li><a class="dropdown-item waiting-approval" href="#">Pending</a></li>
                                     <li><a class="dropdown-item approved" href="#">Paid</a></li>
                                  </ul>
                               </div>
                            </td>
                            <td style="min-width: 50px;" class="p-3 text-center">
                            </td>
                            <td style="min-width: 90px;" class="p-3 text-center">
                            </td>
                            <td style="min-width: 80px;" class="p-3 text-center">
                            </td>
                         </tr>
                         <tr>
                            <td>
                               <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="remember" id="1" autocomplete="off" disabled>
                               </div>
                            </td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">#6756789089</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Feb 15, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">John</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">Sept 09, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">Matt & Zoe</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">$100</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">
                                <div class="dropdown table-dropdown">
                                    <button class="btn dropdown-toggle approved" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                       Paid
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item waiting-approval" href="#">Pending</a></li>
                                        <li><a class="dropdown-item approved" href="#">Paid</a></li>
                                     </ul>
                                  </div>
                            </td>
                            <td style="min-width: 50px;" class="p-3 text-center">
                               <a role="button" class="table-link" data-bs-toggle="modal" data-bs-target="#tax_invoice_modal">View</a>
                            </td>
                            <td style="min-width: 90px;" class="p-3 text-center">
                               <a href="#" class="table-link">Download</a>
                            </td>
                            <td style="min-width: 80px;" class="p-3 text-center">
                               <a href="#" class="table-link">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>
                               <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="remember" id="1" autocomplete="off">
                               </div>
                            </td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">-</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Feb 12, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Tomy</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">Sept 05, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">Jack & Ella</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">$120</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">
                               <div class="dropdown table-dropdown">
                                  <button class="btn dropdown-toggle waiting-approval" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                     Pending
                                  </button>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                     <li><a class="dropdown-item waiting-approval" href="#">Pending</a></li>
                                     <li><a class="dropdown-item approved" href="#">Paid</a></li>
                                  </ul>
                               </div>
                            </td>
                            <td style="min-width: 50px;" class="p-3 text-center">
                            </td>
                            <td style="min-width: 90px;" class="p-3 text-center">
                            </td>
                            <td style="min-width: 80px;" class="p-3 text-center">
                            </td>
                         </tr>
                         <tr>
                            <td>
                               <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="remember" id="1" autocomplete="off" disabled>
                               </div>
                            </td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">#2432545678</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Feb 10, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Peter</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">Sept 04, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">Tom & Jess</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">$125</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">
                                <div class="dropdown table-dropdown">
                                    <button class="btn dropdown-toggle approved" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                       Paid
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item waiting-approval" href="#">Pending</a></li>
                                        <li><a class="dropdown-item approved" href="#">Paid</a></li>
                                     </ul>
                                  </div>
                            </td>
                            <td style="min-width: 50px;" class="p-3 text-center">
                               <a role="button" class="table-link" data-bs-toggle="modal" data-bs-target="#tax_invoice_modal">View</a>
                            </td>
                            <td style="min-width: 90px;" class="p-3 text-center">
                               <a href="#" class="table-link">Download</a>
                            </td>
                            <td style="min-width: 80px;" class="p-3 text-center">
                               <a href="#" class="table-link">Delete</a>
                            </td>
                         </tr>
                     </tbody>
                     <tfoot>
                        <tr>
                           <td colspan="11">
                              <div class="theme-pagination d-flex justify-content-end">
                                 <div class="align-self-center me-4 button-1">Rows per page: 10</div>
                                 <div class="align-self-center me-4 button-1 ">1-10 of 150</div>
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
            <div class="tab-pane fade" id="invoice-of-partners" role="tabpanel" aria-labelledby="invoice-of-partners-tab">
               <div class="table-responsive">
                  <table class="table align-middle theme-table">
                     <thead>
                        <tr>
                           <th></th>
                           <th class="text-center">Invoice<br>number</th>
                           <th class="text-center">Date created</th>
                           <th class="text-center">Marriage<br>celebrant</th>
                           <th class="text-center">Date of<br>ceremony</th>
                           <th class="text-center">Name of<br>couple</th>
                           <th class="text-center">Amount</th>
                           <th class="text-center">Status</th>
                           <th class="text-center"></th>
                           <th class="text-center"></th>
                           <th class="text-center"></th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="remember" id="1" autocomplete="off">
                              </div>
                           </td>
                           <td class="body-2 neutral-100 text-center" style="min-width: 150px;">-</td>
                           <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Feb 21, 2022</td>
                           <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Prisillia Decoration</td>
                           <td class="body-2 neutral-100 text-center" style="min-width: 100px;">Sept 21, 2022</td>
                           <td class="body-2 neutral-100 text-center" style="min-width: 100px;">David & Sarah</td>
                           <td class="body-2 neutral-100 text-center" style="min-width: 100px;">$160</td>
                           <td class="body-2 neutral-100 text-center" style="min-width: 100px;">
                              <div class="dropdown table-dropdown">
                                 <button class="btn dropdown-toggle waiting-approval" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Pending
                                 </button>
                                 <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item waiting-approval" href="#">Pending</a></li>
                                    <li><a class="dropdown-item approved" href="#">Paid</a></li>
                                 </ul>
                              </div>
                           </td>
                           <td style="min-width: 50px;" class="p-3 text-center">
                           </td>
                           <td style="min-width: 90px;" class="p-3 text-center">
                           </td>
                           <td style="min-width: 80px;" class="p-3 text-center">
                           </td>
                        </tr>
                        <tr>
                            <td>
                               <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="remember" id="1" autocomplete="off" disabled>
                               </div>
                            </td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">#0252345544</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Feb 20, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Sarah Jewelry</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">Sept 20, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">Matt & Zoe</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">$50</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">
                                <div class="dropdown table-dropdown">
                                    <button class="btn dropdown-toggle approved" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                       Paid
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item waiting-approval" href="#">Pending</a></li>
                                        <li><a class="dropdown-item approved" href="#">Paid</a></li>
                                     </ul>
                                  </div>
                            </td>
                            <td style="min-width: 50px;" class="p-3 text-center">
                               <a role="button" class="table-link" data-bs-toggle="modal" data-bs-target="#tax_invoice_modal">View</a>
                            </td>
                            <td style="min-width: 90px;" class="p-3 text-center">
                               <a href="#" class="table-link">Download</a>
                            </td>
                            <td style="min-width: 80px;" class="p-3 text-center">
                               <a href="#" class="table-link">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>
                               <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="remember" id="1" autocomplete="off" disabled>
                               </div>
                            </td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">#0124264674</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Feb 18, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Little Vintage</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">Sept 19, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">John & Emma</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">$90</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">
                                <div class="dropdown table-dropdown">
                                    <button class="btn dropdown-toggle approved" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                       Paid
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item waiting-approval" href="#">Pending</a></li>
                                        <li><a class="dropdown-item approved" href="#">Paid</a></li>
                                     </ul>
                                  </div>
                            </td>
                            <td style="min-width: 50px;" class="p-3 text-center">
                               <a role="button" class="table-link" data-bs-toggle="modal" data-bs-target="#tax_invoice_modal">View</a>
                            </td>
                            <td style="min-width: 90px;" class="p-3 text-center">
                               <a href="#" class="table-link">Download</a>
                            </td>
                            <td style="min-width: 80px;" class="p-3 text-center">
                               <a href="#" class="table-link">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>
                               <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="remember" id="1" autocomplete="off">
                               </div>
                            </td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">-</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Feb 18, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Prisillia Decoration</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">Sept 18, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">Chloe & Amy</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">$160</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">
                               <div class="dropdown table-dropdown">
                                  <button class="btn dropdown-toggle waiting-approval" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                     Pending
                                  </button>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                     <li><a class="dropdown-item waiting-approval" href="#">Pending</a></li>
                                     <li><a class="dropdown-item approved" href="#">Paid</a></li>
                                  </ul>
                               </div>
                            </td>
                            <td style="min-width: 50px;" class="p-3 text-center">
                            </td>
                            <td style="min-width: 90px;" class="p-3 text-center">
                            </td>
                            <td style="min-width: 80px;" class="p-3 text-center">
                            </td>
                         </tr>
                         <tr>
                            <td>
                               <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="remember" id="1" autocomplete="off" disabled>
                               </div>
                            </td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">#5757854223</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Feb 17, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Decor-A-Shaan</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">Sept 14, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">Sam & Sophie</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">$160</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">
                                <div class="dropdown table-dropdown">
                                    <button class="btn dropdown-toggle approved" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                       Paid
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item waiting-approval" href="#">Pending</a></li>
                                        <li><a class="dropdown-item approved" href="#">Paid</a></li>
                                     </ul>
                                  </div>
                            </td>
                            <td style="min-width: 50px;" class="p-3 text-center">
                               <a role="button" class="table-link" data-bs-toggle="modal" data-bs-target="#tax_invoice_modal">View</a>
                            </td>
                            <td style="min-width: 90px;" class="p-3 text-center">
                               <a href="#" class="table-link">Download</a>
                            </td>
                            <td style="min-width: 80px;" class="p-3 text-center">
                               <a href="#" class="table-link">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>
                               <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="remember" id="1" autocomplete="off" disabled>
                               </div>
                            </td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">#2435758890</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Feb 15, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Flower by Chloe</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">Sept 11, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">Jorsey & Erin</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">$60</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">
                                <div class="dropdown table-dropdown">
                                    <button class="btn dropdown-toggle approved" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                       Paid
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item waiting-approval" href="#">Pending</a></li>
                                        <li><a class="dropdown-item approved" href="#">Paid</a></li>
                                     </ul>
                                  </div>
                            </td>
                            <td style="min-width: 50px;" class="p-3 text-center">
                               <a role="button" class="table-link" data-bs-toggle="modal" data-bs-target="#tax_invoice_modal">View</a>
                            </td>
                            <td style="min-width: 90px;" class="p-3 text-center">
                               <a href="#" class="table-link">Download</a>
                            </td>
                            <td style="min-width: 80px;" class="p-3 text-center">
                               <a href="#" class="table-link">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>
                               <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="remember" id="1" autocomplete="off">
                               </div>
                            </td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">-</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Feb 16, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Prisillia Decoration</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">Sept 09, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">Max & Jade</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">$50</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">
                               <div class="dropdown table-dropdown">
                                  <button class="btn dropdown-toggle waiting-approval" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                     Pending
                                  </button>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                     <li><a class="dropdown-item waiting-approval" href="#">Pending</a></li>
                                     <li><a class="dropdown-item approved" href="#">Paid</a></li>
                                  </ul>
                               </div>
                            </td>
                            <td style="min-width: 50px;" class="p-3 text-center">
                            </td>
                            <td style="min-width: 90px;" class="p-3 text-center">
                            </td>
                            <td style="min-width: 80px;" class="p-3 text-center">
                            </td>
                         </tr>
                         <tr>
                            <td>
                               <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="remember" id="1" autocomplete="off" disabled>
                               </div>
                            </td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">#6756789089</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Feb 15, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Wayne decoration</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">Sept 09, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">Matt & Zoe</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">$100</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">
                                <div class="dropdown table-dropdown">
                                    <button class="btn dropdown-toggle approved" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                       Paid
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item waiting-approval" href="#">Pending</a></li>
                                        <li><a class="dropdown-item approved" href="#">Paid</a></li>
                                     </ul>
                                  </div>
                            </td>
                            <td style="min-width: 50px;" class="p-3 text-center">
                               <a role="button" class="table-link" data-bs-toggle="modal" data-bs-target="#tax_invoice_modal">View</a>
                            </td>
                            <td style="min-width: 90px;" class="p-3 text-center">
                               <a href="#" class="table-link">Download</a>
                            </td>
                            <td style="min-width: 80px;" class="p-3 text-center">
                               <a href="#" class="table-link">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>
                               <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="remember" id="1" autocomplete="off">
                               </div>
                            </td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">-</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Feb 12, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Sarah Jewelry</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">Sept 05, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">Jack & Ella</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">$120</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">
                               <div class="dropdown table-dropdown">
                                  <button class="btn dropdown-toggle waiting-approval" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                     Pending
                                  </button>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                     <li><a class="dropdown-item waiting-approval" href="#">Pending</a></li>
                                     <li><a class="dropdown-item approved" href="#">Paid</a></li>
                                  </ul>
                               </div>
                            </td>
                            <td style="min-width: 50px;" class="p-3 text-center">
                            </td>
                            <td style="min-width: 90px;" class="p-3 text-center">
                            </td>
                            <td style="min-width: 80px;" class="p-3 text-center">
                            </td>
                         </tr>
                         <tr>
                            <td>
                               <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="remember" id="1" autocomplete="off" disabled>
                               </div>
                            </td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">#2432545678</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Feb 10, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 150px;">Alan Rent</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">Sept 04, 2022</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">Tom & Jess</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">$125</td>
                            <td class="body-2 neutral-100 text-center" style="min-width: 100px;">
                                <div class="dropdown table-dropdown">
                                    <button class="btn dropdown-toggle approved" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                       Paid
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item waiting-approval" href="#">Pending</a></li>
                                        <li><a class="dropdown-item approved" href="#">Paid</a></li>
                                     </ul>
                                  </div>
                            </td>
                            <td style="min-width: 50px;" class="p-3 text-center">
                               <a role="button" class="table-link" data-bs-toggle="modal" data-bs-target="#tax_invoice_modal">View</a>
                            </td>
                            <td style="min-width: 90px;" class="p-3 text-center">
                               <a href="#" class="table-link">Download</a>
                            </td>
                            <td style="min-width: 80px;" class="p-3 text-center">
                               <a href="#" class="table-link">Delete</a>
                            </td>
                         </tr>
                     </tbody>
                     <tfoot>
                        <tr>
                           <td colspan="11">
                              <div class="theme-pagination d-flex justify-content-end">
                                 <div class="align-self-center me-4 button-1">Rows per page: 10</div>
                                 <div class="align-self-center me-4 button-1 ">1-10 of 150</div>
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
         </div>
      </div>
   </div>
</div>
@endsection