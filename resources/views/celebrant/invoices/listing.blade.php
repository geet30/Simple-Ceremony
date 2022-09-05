@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-2 col-md-3 col-lg-2 px-0">
        @include('elements.celebrant.celebrant-sidebar')
        </div>
        <div class="col-10 col-md-9 col-lg-10 px-md-4">
         @include('elements.panel-header')
        
         <div class="row mb-3">
            <div class="col-12">
               <div class="d-flex align-items-center">
                  <a class="theme-btn primary-btn d-inline-block mt-2 mb-2" href="/create">
                  <img class="me-2" src="/images/icons/add.svg" alt="shopping-icon">
                  Create invoice
                  </a>
                  <div class="dropdown ms-4">
                     <a class="btn" role="button">
                     <img src="/images/location-page/filter-icon.svg" class="fliter-icon" alt="Filter Icon">
                     </a>
                     <div class="select-with-checkbox">
                        <select required="" name="customer_type" class="js-placeholder-single-input form-control">
                           <optgroup label="Status">
                              <option value="O1" data-badge="">Paid</option>
                              <option value="O2" data-badge="">Unpaid</option>
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
                           <th>Invoice number</th>
                           <th>Date create</th>
                           <th>Amount</th>
                           <th>Status</th>
                           <th>Payment date</th>
                           <th></th>
                           <th></th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:180px;">#0901020912</td>
                           <td class="body-2 neutral-100" style="min-width:180px;">Feb 21, 2022</td>
                           <td class="body-2 neutral-100" style="min-width:120px;">$540</td>
                           <td style="min-width:200px;">
                              <span class="status pending">Unpaid</span>
                           </td>
                           <td class="body-2 neutral-100" style="min-width:180px;"></td>
                           <td style="min-width:100px;">
                              <a role="button" class="table-link" data-bs-toggle="modal" data-bs-target="#tax_invoice_modal">View</a>
                           </td>
                           <td style="min-width:100px;">
                              <a href="#" class="table-link">Download</a>
                           </td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:180px;">#0901020912</td>
                           <td class="body-2 neutral-100" style="min-width:180px;">Feb 21, 2022</td>
                           <td class="body-2 neutral-100" style="min-width:120px;">$540</td>
                           <td style="min-width:200px;">
                              <span class="status registered">Paid</span>
                           </td>
                           <td class="body-2 neutral-100" style="min-width:180px;">Mar 20, 2022</td>
                           <td style="min-width:100px;">
                              <a role="button" class="table-link" data-bs-toggle="modal" data-bs-target="#tax_invoice_modal">View</a>
                           </td>
                           <td style="min-width:100px;">
                              <a href="#" class="table-link">Download</a>
                           </td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:180px;">#0901020912</td>
                           <td class="body-2 neutral-100" style="min-width:180px;">Feb 21, 2022</td>
                           <td class="body-2 neutral-100" style="min-width:120px;">$90</td>
                           <td style="min-width:200px;">
                              <span class="status registered">Paid</span>
                           </td>
                           <td class="body-2 neutral-100" style="min-width:180px;">Mar 20, 2022</td>
                           <td style="min-width:100px;">
                              <a role="button" class="table-link" data-bs-toggle="modal" data-bs-target="#tax_invoice_modal">View</a>
                           </td>
                           <td style="min-width:100px;">
                              <a href="#" class="table-link">Download</a>
                           </td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:180px;">#0901020912</td>
                           <td class="body-2 neutral-100" style="min-width:180px;">Feb 21, 2022</td>
                           <td class="body-2 neutral-100" style="min-width:120px;">$60</td>
                           <td style="min-width:200px;">
                              <span class="status pending">Unpaid</span>
                           </td>
                           <td class="body-2 neutral-100" style="min-width:180px;"></td>
                           <td style="min-width:100px;">
                              <a role="button" class="table-link" data-bs-toggle="modal" data-bs-target="#tax_invoice_modal">View</a>
                           </td>
                           <td style="min-width:100px;">
                              <a href="#" class="table-link">Download</a>
                           </td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:180px;">#0901020912</td>
                           <td class="body-2 neutral-100" style="min-width:180px;">Feb 21, 2022</td>
                           <td class="body-2 neutral-100" style="min-width:120px;">$540</td>
                           <td style="min-width:200px;">
                              <span class="status registered">Paid</span>
                           </td>
                           <td class="body-2 neutral-100" style="min-width:180px;">Mar 20, 2022</td>
                           <td style="min-width:100px;">
                              <a role="button" class="table-link" data-bs-toggle="modal" data-bs-target="#tax_invoice_modal">View</a>
                           </td>
                           <td style="min-width:100px;">
                              <a href="#" class="table-link">Download</a>
                           </td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:180px;">#0901020912</td>
                           <td class="body-2 neutral-100" style="min-width:180px;">Feb 21, 2022</td>
                           <td class="body-2 neutral-100" style="min-width:120px;">$90</td>
                           <td style="min-width:200px;">
                              <span class="status registered">Paid</span>
                           </td>
                           <td class="body-2 neutral-100" style="min-width:180px;">Mar 20, 2022</td>
                           <td style="min-width:100px;">
                              <a role="button" class="table-link" data-bs-toggle="modal" data-bs-target="#tax_invoice_modal">View</a>
                           </td>
                           <td style="min-width:100px;">
                              <a href="#" class="table-link">Download</a>
                           </td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:180px;">#0901020912</td>
                           <td class="body-2 neutral-100" style="min-width:180px;">Feb 21, 2022</td>
                           <td class="body-2 neutral-100" style="min-width:120px;">$540</td>
                           <td style="min-width:200px;">
                              <span class="status registered">Paid</span>
                           </td>
                           <td class="body-2 neutral-100" style="min-width:180px;">Mar 20, 2022</td>
                           <td style="min-width:100px;">
                              <a role="button" class="table-link" data-bs-toggle="modal" data-bs-target="#tax_invoice_modal">View</a>
                           </td>
                           <td style="min-width:100px;">
                              <a href="#" class="table-link">Download</a>
                           </td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:180px;">#0901020912</td>
                           <td class="body-2 neutral-100" style="min-width:180px;">Feb 21, 2022</td>
                           <td class="body-2 neutral-100" style="min-width:120px;">$60</td>
                           <td style="min-width:200px;">
                              <span class="status registered">Paid</span>
                           </td>
                           <td class="body-2 neutral-100" style="min-width:180px;">Mar 20, 2022</td>
                           <td style="min-width:100px;">
                              <a role="button" class="table-link" data-bs-toggle="modal" data-bs-target="#tax_invoice_modal">View</a>
                           </td>
                           <td style="min-width:100px;">
                              <a href="#" class="table-link">Download</a>
                           </td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:180px;">#0901020912</td>
                           <td class="body-2 neutral-100" style="min-width:180px;">Feb 21, 2022</td>
                           <td class="body-2 neutral-100" style="min-width:120px;">$540</td>
                           <td style="min-width:200px;">
                              <span class="status pending">Unpaid</span>
                           </td>
                           <td class="body-2 neutral-100" style="min-width:180px;"></td>
                           <td style="min-width:100px;">
                              <a role="button" class="table-link" data-bs-toggle="modal" data-bs-target="#tax_invoice_modal">View</a>
                           </td>
                           <td style="min-width:100px;">
                              <a href="#" class="table-link">Download</a>
                           </td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:180px;">#0901020912</td>
                           <td class="body-2 neutral-100" style="min-width:180px;">Feb 21, 2022</td>
                           <td class="body-2 neutral-100" style="min-width:120px;">$50</td>
                           <td style="min-width:200px;">
                              <span class="status registered">Paid</span>
                           </td>
                           <td class="body-2 neutral-100" style="min-width:180px;">Mar 20, 2022</td>
                           <td style="min-width:100px;">
                              <a role="button" class="table-link" data-bs-toggle="modal" data-bs-target="#tax_invoice_modal">View</a>
                           </td>
                           <td style="min-width:100px;">
                              <a href="#" class="table-link">Download</a>
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
         </div>
    </div>
</div>
@include('elements.celebrant.invoice')
@endsection
