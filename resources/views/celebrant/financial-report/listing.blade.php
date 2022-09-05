@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-2 col-md-3 col-lg-2 px-0">
        @include('elements.celebrant.celebrant-sidebar')
        
        </div>
        <div class="col-10 col-md-9 col-lg-10 px-md-4">
         @include('elements.panel-header')
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
                           <th>Locations</th>
                           <th>Revenues</th>
                           <th>Costs</th>
                           <th>Margin</th>
                           <th>Partners used</th>
                           <th>Partner costs</th>
                           <th>Celebrants used</th>
                           <th>Celebrants costs</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:250px;">
                              <a href="/location" role="button" class="table-link">Bradfield Park</a>
                           </td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$248,492</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$242,492</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$6,158</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">120</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$142,000</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">154</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">$100,492</td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:250px;">
                              <a href="/location" role="button" class="table-link">Tench Park</a>
                           </td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$212,669</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$209,492</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$3,158</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">89</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$100,492</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">159</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">$109,000</td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:250px;">
                              <a href="/location" role="button" class="table-link">Blues Point Reserve</a>
                           </td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$258,492</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$242,492</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$16,158</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">122</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$142,492</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">143</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">$100,000</td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:250px;">
                              <a href="/location" role="button" class="table-link">Hunter Valley</a>
                           </td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$148,492</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$144,492</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$4,158</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">126</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$144,000</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">135</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">$100,492</td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:250px;">
                              <a href="/location" role="button" class="table-link">Baulkham Hills</a>
                           </td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$168,498</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$168,492</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$6,36</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">90</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$100,492</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">94</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">$68,000</td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:250px;">
                              <a href="/location" role="button" class="table-link">Mort Bay - Balmain</a>
                           </td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$328,492</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$320,492</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$8,000</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">134</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$150,000</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">219</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">$170,492</td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:250px;">
                              <a href="/location" role="button" class="table-link">Merewether - Newca...</a>
                           </td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$248,492</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$242,492</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$6,158</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">123</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$142,000</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">136</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">$100,492</td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:250px;">
                              <a href="/location" role="button" class="table-link">Bondi Beach</a>
                           </td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$258,492</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$242,492</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$16,158</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">97</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$100,492</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">167</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">$142,000</td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:250px;">
                              <a href="/location" role="button" class="table-link">Little vintage</a>
                           </td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$148,492</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$144,492</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$4,158</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">95</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$100,000</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">58</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">$44,492</td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:250px;">
                              <a href="/location" role="button" class="table-link">Hunter valley</a>
                           </td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$248,492</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$242,492</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$6,158</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">128</td>
                           <td class="body-2 neutral-100" style="min-width:150px;">$142,000</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">138</td>
                           <td class="body-2 neutral-100" style="min-width:100px;">$100,492</td>
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
