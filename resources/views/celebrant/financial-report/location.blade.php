@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-2 col-md-3 col-lg-2 px-0">
        @include('elements.celebrant-sidebar')
        </div>
        <div class="col-10 col-md-9 col-lg-10 px-md-4">
         @include('elements.panel-header')
         <a href="/celebrant/financial-report" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
         <div class="row mb-4">
            <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3 mb-3">
               <a role="button" class="theme-btn primary-btn d-flex justify-content-center " data-bs-toggle="modal" data-bs-target="#calendarmodal">
               <img class="me-2" src="/images/icons/date.svg" alt="shopping-icon">
               select start date
               </a>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3 mb-3">
               <a role="button" class="theme-btn primary-btn d-flex justify-content-center " data-bs-toggle="modal" data-bs-target="#calendarmodal">
               <img class="me-2" src="/images/icons/date.svg" alt="shopping-icon">
               select end date
               </a>
            </div>
            <div class="col-sm-12 col-md-2 mb-3">
               <a role="button" class="theme-btn primary-btn d-flex justify-content-center ">
               Filter
               </a>
            </div>
         </div>
         <ul class="row add-on-list-nav p-0 mb-0 list-unstyled mb-2">
            <li class="col-md-6 col-lg-4 col-xl-4 col-xxl-4 mb-3">
               <div class="nav-link">
                  <div class="add-ons-nav d-flex">
                     <div class="add-ons-nav-image me-4">
                        <img src="/images/admin/partner/report-user.svg" alt="All add-ons">
                     </div>
                     <div class="add-ons-nav-data text-start ">
                        <h3 class="h3">$2,269,097</h3>
                        <p class="subheader-2">Total Revenue</p>
                     </div>
                  </div>
               </div>
            </li>
            <li class="col-md-6 col-lg-4 col-xl-4 col-xxl-4 mb-3">
               <div class="nav-link">
                  <div class="add-ons-nav d-flex">
                     <div class="add-ons-nav-image me-4">
                        <img src="/images/admin/partner/report-location.svg" alt="All add-ons">
                     </div>
                     <div class="add-ons-nav-data text-start ">
                        <h3 class="h3">$2,199,920</h3>
                        <p class="subheader-2">Total Costs</p>
                     </div>
                  </div>
               </div>
            </li>
            <li class="col-md-6 col-lg-4 col-xl-4 col-xxl-4 mb-3">
               <div class="nav-link">
                  <div class="add-ons-nav d-flex">
                     <div class="add-ons-nav-image me-4">
                        <img src="/images/admin/partner/booking-performed.svg" alt="All add-ons">
                     </div>
                     <div class="add-ons-nav-data text-start ">
                        <h3 class="h3">$69,177</h3>
                        <p class="subheader-2">Total Margin</p>
                     </div>
                  </div>
               </div>
            </li>
         </ul>
         <div class="row">
            <div class="col-md-12">
               <div class="table-responsive">
                  <table class="table align-middle theme-table">
                     <thead>
                        <tr>
                           <th>Couple names</th>
                           <th>Revenues</th>
                           <th>Costs</th>
                           <th>Margin</th>
                           <th>Partners</th>
                           <th>Partner costs</th>
                           <th>Celebrants</th>
                           <th>Celebrants costs</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr style="vertical-align: baseline;">
                           <td class="body-2 neutral-100" style="min-width:250px;">David & Sarah</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$1,492</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$1292</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$200</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">Nathan decoration<br>Sarah Jewelry<br>Alan rent
                           </td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$290<br>$480<br>$392</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">Michael</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">$130</td>
                        </tr>
                        <tr style="vertical-align: baseline;">
                           <td class="body-2 neutral-100" style="min-width:250px;">John & Emma</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$1,483</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$1,000</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$483</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">Nathan decoration<br>Kim Jewelry<br>Picture framing
                           </td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$534<br>$130<br>$201</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">Alex</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">$135</td>
                        </tr>
                        <tr style="vertical-align: baseline;">
                           <td class="body-2 neutral-100" style="min-width:250px;">Joe & Jessica</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$1,890</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$1,200</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$690</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">Nathan decoration<br>Wedding Journey
                           </td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$534<br>$536</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">John</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">$130</td>
                        </tr>
                        <tr style="vertical-align: baseline;">
                           <td class="body-2 neutral-100" style="min-width:250px;">Chloe & Amy</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$1,650</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$1,000</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$650</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">Nathan decoration<br>Wedding Journey<br>Wayne Decoration
                           </td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$534<br>$130<br>$$201</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">Joe</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">$135</td>
                        </tr>
                        <tr style="vertical-align: baseline;">
                           <td class="body-2 neutral-100" style="min-width:250px;">Sam & Shopie</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$1,592</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$992</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$600</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">Nathan decoration<br>Picture framing
                           </td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$600<br>$262</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">Tommy</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">$130</td>
                        </tr>
                        <tr style="vertical-align: baseline;">
                           <td class="body-2 neutral-100" style="min-width:250px;">Jorsey & Erin</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$1,434</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$990</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$444</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">Nathan decoration<br>Sarah Jewelry<br>Alan rent
                           </td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$534<br>$130<br>$201</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">Alex</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">$135</td>
                        </tr>
                        <tr style="vertical-align: baseline;">
                           <td class="body-2 neutral-100" style="min-width:250px;">Matt & Zoe</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$1,534</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$1,090</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$444</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">Nathan decoration<br>Kim Jewelry<br>Picture framing
                           </td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$534<br>$130<br>$262</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">Michael</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">$130</td>
                        </tr>
                        <tr style="vertical-align: baseline;">
                           <td class="body-2 neutral-100" style="min-width:250px;">Jack & Ella</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$1,434</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$990</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$444</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">Nathan decoration<br>Wedding Journey<br>Alan rent
                           </td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$534<br>$130<br>$201</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">John</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">$135</td>
                        </tr>
                        <tr style="vertical-align: baseline;">
                           <td class="body-2 neutral-100" style="min-width:250px;">Tom & Jess</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$1,722</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$1,092</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$630</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">Nathan decoration<br>Picture framing<br>Sarah Jewelry
                           </td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$463<br>$380<br>$119</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">Michael</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">$130</td>
                        </tr>
                        <tr style="vertical-align: baseline;">
                           <td class="body-2 neutral-100" style="min-width:250px;">Max & Jade</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$1,265</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$992</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$273</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">Nathan decoration<br>Picture framing<br>Kim Jewelry
                           </td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$500<br>$130<br>$227</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">Joe</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">$135</td>
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
         </div>
    </div>
</div>
@include('elements.calander')
@endsection
