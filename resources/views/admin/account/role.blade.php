@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
         @include('elements.common.admin-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-4">
         @include('elements.common.panel-header')
         <div class="row mb-3">
            <div class="col-md-8 col-lg-9 col-xl-9 col-xxl-9 mb-3 mb-lg-0">
               <ul class="nav theme-tabs" role="tablist">
                  <li class="nav-item" role="presentation">
                     <a class="nav-link active" id="information-tab" data-bs-toggle="tab" data-bs-target="#information" href="#" aria-selected="true" role="tab">Roles</a>
                  </li>
                  <li class="nav-item" role="presentation">
                     <a class="nav-link" id="celebrants-tab" data-bs-toggle="tab" data-bs-target="#celebrants" href="#" aria-selected="false" tabindex="-1" role="tab">Right</a>
                  </li>
               </ul>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 col-xxl-3">
               <a role="button" class="theme-btn primary-btn d-block" data-bs-toggle="offcanvas" data-bs-target="#create_new_role_sidebar">
               <img class="me-2" src="/images/icons/add.svg" alt="shopping-icon">
               New role
               </a>
            </div>
         </div>
         <div class="tab-content" id="tabContent">
            <div class="tab-pane fade show active" id="information" role="tabpanel" aria-labelledby="information-tab">
               <div class="tab-content" id="pills-tabContent">
                  <div class="table-responsive">
                     <table class="table align-middle theme-table">
                        <tbody>
                           <tr>
                              <td class="button-1 gray-900">Couples</td>
                              <td class="text-end">
                                 <a href="#" data-bs-toggle="offcanvas" data-bs-target="#edit_name_role_sidebar" class="table-link me-3">Edit</a>
                                 <a href="" class="table-link">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td class="button-1 gray-900">Marriage celebrants</td>
                              <td class="text-end">
                                 <a href="#" data-bs-toggle="offcanvas" data-bs-target="#edit_name_role_sidebar" class="table-link me-3">Edit</a>
                                 <a href="" class="table-link">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td class="button-1 gray-900">Partners</td>
                              <td class="text-end">
                                 <a href="#" data-bs-toggle="offcanvas" data-bs-target="#edit_name_role_sidebar" class="table-link me-3">Edit</a>
                                 <a href="" class="table-link">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td class="button-1 gray-900">Admin Simple Ceremonies</td>
                              <td class="text-end">
                                 <a href="#" data-bs-toggle="offcanvas" data-bs-target="#edit_name_role_sidebar" class="table-link me-3">Edit</a>
                                 <a href="" class="table-link">Delete</a>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="celebrants" role="tabpanel" aria-labelledby="celebrants-tab">
               <div class="card panel-card">
                  <div class="card-body">
                     <div class="table-responsive">
                        <table class="table align-middle">
                           <thead>
                             <tr>
                               <th class="h4" scope="col" style="color:black">Permission</th>
                               <th class="button-1 gray-900 text-center" scope="col">Couples</th>
                               <th class="button-1 gray-900 text-center" scope="col">Marriage celebrants</th>
                               <th class="button-1 gray-900 text-center" scope="col">Partners</th>
                               <th class="button-1 gray-900 text-center" scope="col">Admin Simple Ceremonies</th>
                             </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td class="button-1 gray-900" style="min-width: 330px;padding: 20px;">Create bookings</td>
                                 <td class="text-center" style="min-width: 100px;"><input class="form-check-input" type="checkbox" checked></td>
                                 <td class="text-center" style="min-width: 200px;"><input class="form-check-input" type="checkbox"></td>
                                 <td class="text-center" style="min-width: 100px;"><input class="form-check-input" type="checkbox"></td>
                                 <td class="text-center" style="min-width: 250px;"><input class="form-check-input" type="checkbox"></td>
                              </tr>
                              <tr>
                                 <td class="button-1 gray-900" style="min-width: 330px;padding: 20px;">View specific bookings</td>
                                 <td class="text-center" style="min-width: 100px;"><input class="form-check-input" type="checkbox" checked></td>
                                 <td class="text-center" style="min-width: 200px;"><input class="form-check-input" type="checkbox" checked></td>
                                 <td class="text-center" style="min-width: 100px;"><input class="form-check-input" type="checkbox" checked></td>
                                 <td class="text-center" style="min-width: 250px;"><input class="form-check-input" type="checkbox" checked></td>
                              </tr>
                              <tr>
                                 <td class="button-1 gray-900" style="min-width: 330px;padding: 20px;">Delete specific bookings</td>
                                 <td class="text-center" style="min-width: 100px;"><input class="form-check-input" type="checkbox" checked></td>
                                 <td class="text-center" style="min-width: 200px;"><input class="form-check-input" type="checkbox"></td>
                                 <td class="text-center" style="min-width: 100px;"><input class="form-check-input" type="checkbox"></td>
                                 <td class="text-center" style="min-width: 250px;"><input class="form-check-input" type="checkbox"></td>
                              </tr>
                              <tr>
                                 <td class="button-1 gray-900" style="min-width: 330px;padding: 20px;">View booking from all couples</td>
                                 <td class="text-center" style="min-width: 100px;"><input class="form-check-input" type="checkbox"></td>
                                 <td class="text-center" style="min-width: 200px;"><input class="form-check-input" type="checkbox"></td>
                                 <td class="text-center" style="min-width: 100px;"><input class="form-check-input" type="checkbox"></td>
                                 <td class="text-center" style="min-width: 250px;"><input class="form-check-input" type="checkbox" checked></td>
                              </tr>
                              <tr>
                                 <td class="button-1 gray-900" style="min-width: 330px;padding: 20px;">Create add-ons</td>
                                 <td class="text-center" style="min-width: 100px;"><input class="form-check-input" type="checkbox"></td>
                                 <td class="text-center" style="min-width: 200px;"><input class="form-check-input" type="checkbox"></td>
                                 <td class="text-center" style="min-width: 100px;"><input class="form-check-input" type="checkbox" checked></td>
                                 <td class="text-center" style="min-width: 250px;"><input class="form-check-input" type="checkbox"></td>
                              </tr>
                              <tr>
                                 <td class="button-1 gray-900" style="min-width: 330px;padding: 20px;">View spesific add-ons</td>
                                 <td class="text-center" style="min-width: 100px;"><input class="form-check-input" type="checkbox" checked></td>
                                 <td class="text-center" style="min-width: 200px;"><input class="form-check-input" type="checkbox"></td>
                                 <td class="text-center" style="min-width: 100px;"><input class="form-check-input" type="checkbox" checked></td>
                                 <td class="text-center" style="min-width: 250px;"><input class="form-check-input" type="checkbox" checked></td>
                              </tr>
                              <tr>
                                 <td class="button-1 gray-900" style="min-width: 330px;padding: 20px;">Delete spesific add-ons</td>
                                 <td class="text-center" style="min-width: 100px;"><input class="form-check-input" type="checkbox"></td>
                                 <td class="text-center" style="min-width: 200px;"><input class="form-check-input" type="checkbox"></td>
                                 <td class="text-center" style="min-width: 100px;"><input class="form-check-input" type="checkbox" checked></td>
                                 <td class="text-center" style="min-width: 250px;"><input class="form-check-input" type="checkbox" checked></td>
                              </tr>
                              <tr>
                                 <td class="button-1 gray-900" style="min-width: 330px;padding: 20px;">Create locations</td>
                                 <td class="text-center" style="min-width: 100px;"><input class="form-check-input" type="checkbox"></td>
                                 <td class="text-center" style="min-width: 200px;"><input class="form-check-input" type="checkbox"></td>
                                 <td class="text-center" style="min-width: 100px;"><input class="form-check-input" type="checkbox"></td>
                                 <td class="text-center" style="min-width: 250px;"><input class="form-check-input" type="checkbox"></td>
                              </tr>
                              <tr>
                                 <td class="button-1 gray-900" style="min-width: 330px;padding: 20px;">View spesific locations</td>
                                 <td class="text-center" style="min-width: 100px;"><input class="form-check-input" type="checkbox" checked></td>
                                 <td class="text-center" style="min-width: 200px;"><input class="form-check-input" type="checkbox"></td>
                                 <td class="text-center" style="min-width: 100px;"><input class="form-check-input" type="checkbox"></td>
                                 <td class="text-center" style="min-width: 250px;"><input class="form-check-input" type="checkbox" checked></td>
                              </tr>
                              <tr>
                                 <td class="button-1 gray-900" style="min-width: 330px;padding: 20px;">Delete spesific locations</td>
                                 <td class="text-center" style="min-width: 100px;"><input class="form-check-input" type="checkbox"></td>
                                 <td class="text-center" style="min-width: 200px;"><input class="form-check-input" type="checkbox"></td>
                                 <td class="text-center" style="min-width: 100px;"><input class="form-check-input" type="checkbox"></td>
                                 <td class="text-center" style="min-width: 250px;"><input class="form-check-input" type="checkbox" checked></td>
                              </tr>
                           </tbody>
                         </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('elements.admin.account.edit-name-role-sidebar')
@include('elements.admin.account.create-new-role-sidebar')
@endsection