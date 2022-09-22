@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
         @include('elements.common.admin-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-4">
         @include('elements.common.panel-header')
         <div class="row mb-4 mt-3">
            <div class="col-md-8 col-xl-9 d-flex align-self-center">
               <div class="dropdown">
                  <a class="btn" role="button">
                  <img src="/images/location-page/filter-icon.svg" class="fliter-icon" alt="Filter Icon">
                  </a>
                  <div class="select-with-checkbox">
                     <select required="" name="customer_type" class="js-placeholder-single-input form-control">
                        <option value="O1" data-badge="">Couple</option>
                        <option value="O2" data-badge="">Marriage Celebrant</option>
                        <option value="O3" data-badge="">Partner</option>
                        <option value="O4" data-badge="">Admin</option>
                     </select>
                  </div>
               </div>
            </div>
            <div class="align-self-center col-md-4 col-xl-3 d-grid mt-3 mt-md-0">
               <a class="theme-btn primary-btn d-flex justify-content-center" href="/create-trigger">
               <img class="me-2" src="/images/icons/add.svg" alt="shopping-icon">
               Add new trigger
               </a>
            </div>
         </div>
         <div class="table-responsive">
            <table class="table align-middle theme-table">
               <thead>
                  <tr>
                     <th>Trigger</th>
                     <th>Time</th>
                     <th>Receiver</th>
                     <th>Subject</th>
                     <th></th>
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td style="min-width:200px" class="body-2" class="body-2">Email</td>
                     <td  style="min-width:180px" class="body-2">1 min after booked</td>
                     <td  style="min-width:100px" class="body-2">Couple</td>
                     <td  style="min-width:350px" class="body-2">Confirmation of your ceremony booking. Hi...</td>
                     <td  style="min-width:70px">
                        <a class="table-link body-2" href="/booking-confirmation">Open</a>
                     </td>
                     <td  style="min-width:100px" class="p-3">
                        <a class="table-link body-2" href="/edit-booking-confirmation">Edit</a>
                     </td>
                  </tr>
                  <tr>
                     <td style="min-width:200px" class="body-2" class="body-2">Email</td>
                     <td  style="min-width:180px" class="body-2">1 min after booked</td>
                     <td  style="min-width:100px" class="body-2">Admin</td>
                     <td  style="min-width:350px" class="body-2">New Booking: {Ceremony Date} at {Locatio...</td>
                     <td  style="min-width:70px">
                        <a class="table-link body-2" href="/booking-confirmation">Open</a>
                     </td>
                     <td  style="min-width:100px" class="p-3">
                        <a class="table-link body-2" href="/edit-booking-confirmation">Edit</a>
                     </td>
                  </tr>
                  <tr>
                     <td style="min-width:200px" class="body-2" class="body-2">Email</td>
                     <td  style="min-width:180px" class="body-2">1 min after booked</td>
                     <td  style="min-width:100px" class="body-2">Celebrant</td>
                     <td  style="min-width:350px" class="body-2">New Booking</td>
                     <td  style="min-width:70px">
                        <a class="table-link body-2" href="/booking-confirmation">Open</a>
                     </td>
                     <td  style="min-width:100px" class="p-3">
                        <a class="table-link body-2" href="/edit-booking-confirmation">Edit</a>
                     </td>
                  </tr>
                  <tr>
                     <td style="min-width:200px" class="body-2" class="body-2">Email</td>
                     <td  style="min-width:180px" class="body-2">1 calendar month</td>
                     <td  style="min-width:100px" class="body-2">Couple</td>
                     <td  style="min-width:350px" class="body-2">CRITICAL. Your Notice of Intended Marria...</td>
                     <td  style="min-width:70px">
                        <a class="table-link body-2" href="/booking-confirmation">Open</a>
                     </td>
                     <td  style="min-width:100px" class="p-3">
                        <a class="table-link body-2" href="/edit-booking-confirmation">Edit</a>
                     </td>
                  </tr>
                  <tr>
                     <td style="min-width:200px" class="body-2" class="body-2">Email</td>
                     <td  style="min-width:180px" class="body-2">1 min after sign noim & docs</td>
                     <td  style="min-width:100px" class="body-2">Admin</td>
                     <td  style="min-width:350px" class="body-2">NoIM received {Prefered Name Person1} &...</td>
                     <td  style="min-width:70px">
                        <a class="table-link body-2" href="/booking-confirmation">Open</a>
                     </td>
                     <td  style="min-width:100px" class="p-3">
                        <a class="table-link body-2" href="/edit-booking-confirmation">Edit</a>
                     </td>
                  </tr>
                  <tr>
                     <td style="min-width:200px" class="body-2" class="body-2">Email</td>
                     <td  style="min-width:180px" class="body-2">1 min after lodged or lodged p...</td>
                     <td  style="min-width:100px" class="body-2">Couple</td>
                     <td  style="min-width:350px" class="body-2">Your NoIM has now been lodged</td>
                     <td  style="min-width:70px">
                        <a class="table-link body-2" href="/booking-confirmation">Open</a>
                     </td>
                     <td  style="min-width:100px" class="p-3">
                        <a class="table-link body-2" href="/edit-booking-confirmation">Edit</a>
                     </td>
                  </tr>
                  <tr>
                     <td style="min-width:200px" class="body-2" class="body-2">Email</td>
                     <td  style="min-width:180px" class="body-2">2 days before married</td>
                     <td  style="min-width:100px" class="body-2">Couple</td>
                     <td  style="min-width:350px" class="body-2">CRITICAL. Your NoIM has not been receive...</td>
                     <td  style="min-width:70px">
                        <a class="table-link body-2" href="/booking-confirmation">Open</a>
                     </td>
                     <td  style="min-width:100px" class="p-3">
                        <a class="table-link body-2" href="/edit-booking-confirmation">Edit</a>
                     </td>
                  </tr>
                  <tr>
                     <td style="min-width:200px" class="body-2" class="body-2">Email</td>
                     <td  style="min-width:180px" class="body-2">4 days before married</td>
                     <td  style="min-width:100px" class="body-2">Couple</td>
                     <td  style="min-width:350px" class="body-2">Cancellation of your ceremony as your NoI...</td>
                     <td  style="min-width:70px">
                        <a class="table-link body-2" href="/booking-confirmation">Open</a>
                     </td>
                     <td  style="min-width:100px" class="p-3">
                        <a class="table-link body-2" href="/edit-booking-confirmation">Edit</a>
                     </td>
                  </tr>
                  <tr>
                     <td style="min-width:200px" class="body-2" class="body-2">Email</td>
                     <td  style="min-width:180px" class="body-2">5 days before married</td>
                     <td  style="min-width:100px" class="body-2">Admin</td>
                     <td  style="min-width:350px" class="body-2">NoIM not received for {Prefered Name 1} &...</td>
                     <td  style="min-width:70px">
                        <a class="table-link body-2" href="/booking-confirmation">Open</a>
                     </td>
                     <td  style="min-width:100px" class="p-3">
                        <a class="table-link body-2" href="/edit-booking-confirmation">Edit</a>
                     </td>
                  </tr>
                  <tr>
                     <td style="min-width:200px" class="body-2" class="body-2">Email</td>
                     <td  style="min-width:180px" class="body-2">1 min after cancelled</td>
                     <td  style="min-width:100px" class="body-2">Celebrant</td>
                     <td  style="min-width:350px" class="body-2">Ceremony cancelled for {Prefered Name 1}...</td>
                     <td  style="min-width:70px">
                        <a class="table-link body-2" href="/booking-confirmation">Open</a>
                     </td>
                     <td  style="min-width:100px" class="p-3">
                        <a class="table-link body-2" href="/edit-booking-confirmation">Edit</a>
                     </td>
                  </tr>
                  <tr>
                     <td style="min-width:200px" class="body-2" class="body-2">Email</td>
                     <td  style="min-width:180px" class="body-2">3 weeks after lodged</td>
                     <td  style="min-width:100px" class="body-2">Couple</td>
                     <td  style="min-width:350px" class="body-2">Your NoIM has now been lodged</td>
                     <td  style="min-width:70px">
                        <a class="table-link body-2" href="/booking-confirmation">Open</a>
                     </td>
                     <td  style="min-width:100px" class="p-3">
                        <a class="table-link body-2" href="/edit-booking-confirmation">Edit</a>
                     </td>
                  </tr>
               </tbody>
               <tfoot>
                  <tr>
                     <td colspan="8">
                        <div class="theme-pagination d-flex justify-content-end">
                           <div class="align-self-center me-4 button-1">Rows per page: 10</div>
                           <div class="align-self-center me-4 button-1 ">1-10 of 12</div>
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
@endsection