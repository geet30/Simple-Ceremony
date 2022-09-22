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
            <div class="form-group has-search w-100 position-relative">
               <span class="fa fa-search form-control-feedback"></span>
               <input type="text" class="form-control" placeholder="Search referrers">
            </div>
         </div>
            <div class="align-self-center col-md-4 col-xl-3 d-grid mt-3 mt-md-0">
               <a class="theme-btn primary-btn d-flex justify-content-center" href="/create-new-referrers">
               <img class="me-2" src="/images/icons/add.svg" alt="shopping-icon">
               Add new referrers
               </a>
            </div>
         </div>
         <div class="table-responsive">
            <table class="table align-middle theme-table">
               <thead>
                  <tr>
                     <th>Name business</th>
                     <th>Contact name</th>
                     <th>Phone number</th>
                     <th>Bank number</th>
                     <th>Bank name</th>
                     <th></th>
                     <th></th>
                     <th></th>
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td style="min-width:200px" class="body-2">Name business</td>
                     <td style="min-width:200px" class="body-2">Kristin Watson</td>
                     <td style="min-width:180px" class="body-2">+61 0909 090 090</td>
                     <td style="min-width:180px" class="body-2">0909090900</td>
                     <td style="min-width:180px" class="body-2">Westparc</td>
                     <td style="min-width: 80px;">
                        <a class="table-link body-2" href="#">Confirm</a>
                     </td>
                     <td style="min-width: 80px;">
                        <a class="table-link body-2" data-bs-toggle="offcanvas" data-bs-target="#referral_reason_sidebar">Decline</a>
                     </td>
                     <td style="min-width: 50px;">
                        <a class="table-link body-2" href="edit-referrers">Edit</a>
                     </td>
                     <td style="min-width: 120px;" class="p-3">
                        <a class="table-link body-2" href="referrers-details">View info</a>
                     </td>
                  </tr>
                  <tr>
                     <td style="min-width:200px" class="body-2">Name business</td>
                     <td style="min-width:200px" class="body-2">Theresa Webb</td>
                     <td style="min-width:180px" class="body-2">+61 0909 090 090</td>
                     <td style="min-width:180px" class="body-2">0909090900</td>
                     <td style="min-width:180px" class="body-2">Westparc</td>
                     <td style="min-width: 80px;">
                     </td>
                     <td style="min-width: 80px;">
                     </td>
                     <td style="min-width: 50px;">
                        <a class="table-link body-2" href="edit-referrers">Edit</a>
                     </td>
                     <td style="min-width: 120px;" class="p-3">
                        <a class="table-link body-2" href="pending-referrers-details">View info</a>
                     </td>
                  </tr>
                  <tr>
                     <td style="min-width:200px" class="body-2">Name business</td>
                     <td style="min-width:200px" class="body-2">Eleanor Pena</td>
                     <td style="min-width:180px" class="body-2">+61 0909 090 090</td>
                     <td style="min-width:180px" class="body-2">0909090900</td>
                     <td style="min-width:180px" class="body-2">Westparc</td>
                     <td style="min-width: 80px;">
                     </td>
                     <td style="min-width: 80px;">
                     </td>
                     <td style="min-width: 50px;">
                        <a class="table-link body-2" href="edit-referrers">Edit</a>
                     </td>
                     <td style="min-width: 120px;" class="p-3">
                        <a class="table-link body-2" href="pending-referrers-details">View info</a>
                     </td>
                  </tr>
                  <tr>
                     <td style="min-width:200px" class="body-2">Name business</td>
                     <td style="min-width:200px" class="body-2">Courtney Henry</td>
                     <td style="min-width:180px" class="body-2">+61 0909 090 090</td>
                     <td style="min-width:180px" class="body-2">0909090900</td>
                     <td style="min-width:180px" class="body-2">Westparc</td>
                     <td style="min-width: 80px;">
                        <a class="table-link body-2" href="#">Confirm</a>
                     </td>
                     <td style="min-width: 80px;">
                        <a class="table-link body-2" data-bs-toggle="offcanvas" data-bs-target="#referral_reason_sidebar">Decline</a>
                     </td>
                     <td style="min-width: 50px;">
                        <a class="table-link body-2" href="edit-referrers">Edit</a>
                     </td>
                     <td style="min-width: 120px;" class="p-3">
                        <a class="table-link body-2" href="referrers-details">View info</a>
                     </td>
                  </tr>
                  <tr>
                     <td style="min-width:200px" class="body-2">Name business</td>
                     <td style="min-width:200px" class="body-2">Dianne Russell</td>
                     <td style="min-width:180px" class="body-2">+61 0909 090 090</td>
                     <td style="min-width:180px" class="body-2">0909090900</td>
                     <td style="min-width:180px" class="body-2">Westparc</td>
                     <td style="min-width: 80px;">
                     </td>
                     <td style="min-width: 80px;">
                     </td>
                     <td style="min-width: 50px;">
                        <a class="table-link body-2" href="edit-referrers">Edit</a>
                     </td>
                     <td style="min-width: 120px;" class="p-3">
                        <a class="table-link body-2" href="pending-referrers-details">View info</a>
                     </td>
                  </tr>
                  <tr>
                     <td style="min-width:200px" class="body-2">Name business</td>
                     <td style="min-width:200px" class="body-2">Floyd Miles</td>
                     <td style="min-width:180px" class="body-2">+61 0909 090 090</td>
                     <td style="min-width:180px" class="body-2">0909090900</td>
                     <td style="min-width:180px" class="body-2">Westparc</td>
                     <td style="min-width: 80px;">
                     </td>
                     <td style="min-width: 80px;">
                     </td>
                     <td style="min-width: 50px;">
                        <a class="table-link body-2" href="edit-referrers">Edit</a>
                     </td>
                     <td style="min-width: 120px;" class="p-3">
                        <a class="table-link body-2" href="pending-referrers-details">View info</a>
                     </td>
                  </tr>
                  <tr>
                     <td style="min-width:200px" class="body-2">Name business</td>
                     <td style="min-width:200px" class="body-2">Brooklyn Simmons</td>
                     <td style="min-width:180px" class="body-2">+61 0909 090 090</td>
                     <td style="min-width:180px" class="body-2">0909090900</td>
                     <td style="min-width:180px" class="body-2">Westparc</td>
                     <td style="min-width: 80px;">
                        <a class="table-link body-2" href="#">Confirm</a>
                     </td>
                     <td style="min-width: 80px;">
                        <a class="table-link body-2" data-bs-toggle="offcanvas" data-bs-target="#referral_reason_sidebar">Decline</a>
                     </td>
                     <td style="min-width: 50px;">
                        <a class="table-link body-2" href="edit-referrers">Edit</a>
                     </td>
                     <td style="min-width: 120px;" class="p-3">
                        <a class="table-link body-2" href="referrers-details">View info</a>
                     </td>
                  </tr>
                  <tr>
                     <td style="min-width:200px" class="body-2">Name business</td>
                     <td style="min-width:200px" class="body-2">Jenny Wilson</td>
                     <td style="min-width:180px" class="body-2">+61 0909 090 090</td>
                     <td style="min-width:180px" class="body-2">0909090900</td>
                     <td style="min-width:180px" class="body-2">Westparc</td>
                     <td style="min-width: 80px;">
                     </td>
                     <td style="min-width: 80px;">
                     </td>
                     <td style="min-width: 50px;">
                        <a class="table-link body-2" href="edit-referrers">Edit</a>
                     </td>
                     <td style="min-width: 120px;" class="p-3">
                        <a class="table-link body-2" href="pending-referrers-details">View info</a>
                     </td>
                  </tr>
                  <tr>
                     <td style="min-width:200px" class="body-2">Name business</td>
                     <td style="min-width:200px" class="body-2">Ralph Edwards</td>
                     <td style="min-width:180px" class="body-2">+61 0909 090 090</td>
                     <td style="min-width:180px" class="body-2">0909090900</td>
                     <td style="min-width:180px" class="body-2">Westparc</td>
                     <td style="min-width: 80px;">
                     </td>
                     <td style="min-width: 80px;">
                     </td>
                     <td style="min-width: 50px;">
                        <a class="table-link body-2" href="edit-referrers">Edit</a>
                     </td>
                     <td style="min-width: 120px;" class="p-3">
                        <a class="table-link body-2" href="pending-referrers-details">View info</a>
                     </td>
                  </tr>
                  <tr>
                     <td style="min-width:200px" class="body-2">Name business</td>
                     <td style="min-width:200px" class="body-2">Ronald Richards</td>
                     <td style="min-width:180px" class="body-2">+61 0909 090 090</td>
                     <td style="min-width:180px" class="body-2">0909090900</td>
                     <td style="min-width:180px" class="body-2">Westparc</td>
                     <td style="min-width: 80px;">
                        <a class="table-link body-2" href="#">Confirm</a>
                     </td>
                     <td style="min-width: 80px;">
                        <a class="table-link body-2" data-bs-toggle="offcanvas" data-bs-target="#referral_reason_sidebar">Decline</a>
                     </td>
                     <td style="min-width: 50px;">
                        <a class="table-link body-2" href="edit-referrers">Edit</a>
                     </td>
                     <td style="min-width: 120px;" class="p-3">
                        <a class="table-link body-2" href="referrers-details">View info</a>
                     </td>
                  </tr>
               </tbody>
               <tfoot>
                  <tr>
                     <td colspan="10">
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
@include('elements.admin.referral.referral-reason-sidebar')
@endsection