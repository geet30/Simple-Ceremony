@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
            @include('elements.admin-sidebar')
        </div>
        <div class="col-10 col-md-9 col-lg-10 px-4">
         @include('elements.panel-header')
         <div class="row mb-4 mt-3">
            <div class="col-md-5 col-lg-7 col-xl-8 col-xxl-9 d-flex align-self-center">
            <div class="form-group has-search w-100 position-relative">
               <span class="fa fa-search form-control-feedback"></span>
               <input type="text" class="form-control" placeholder="Search marriage celebrants">
            </div>
         </div>
            <div class="align-self-center col-md-7 col-lg-5 col-xl-4 col-xxl-3 d-grid mt-3 mt-md-0">
               <a class="theme-btn primary-btn d-flex justify-content-center" href="/add-new-celebrant">
               <img class="me-2" src="/images/icons/add.svg" alt="shopping-icon">
               Add new marriage celebrant
               </a>
            </div>
         </div>
         <div class="table-responsive">
            <table class="table align-middle theme-table">
               <thead>
                  <tr>
                     <th>Name</th>
                     <th>Phone number</th>
                     <th>Email</th>
                     <th>Locations available</th>
                     <th>Status</th>
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                <tr>
                    <td class="body-2 neutral-100" style="min-width:180px;">Michael</td>
                    <td class="body-2 neutral-100" style="min-width:180px;">+61 0909 090 090</td>
                    <td class="body-2 neutral-100" style="min-width:180px;">Michael@gmail.com</td>
                    <td class="body-2 neutral-100" style="min-width:200px;">
                        <ul class="m-0 p-0">
                            <li class="mb-3">Add address here</li>
                            <li class="mb-3">Add address here</li>
                            <li class="mb-3">Add address here</li>
                        </ul>
                    </td>
                    <td style="min-width:200px;">
                        <div class="dropdown table-dropdown">
                            <button class="btn dropdown-toggle approved" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Active
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item approved" href="#">Active</a></li>
                                <li><a class="dropdown-item rejected" href="#">Inactive</a></li>
                            </ul>
                        </div>
                    </td>
                    <td style="min-width:180px;">
                        <a href="/marriage-celebrants-details" class="table-link">View info</a>
                    </td>
                </tr>
                <tr>
                    <td class="body-2 neutral-100" style="min-width:180px;">John</td>
                    <td class="body-2 neutral-100" style="min-width:180px;">+61 0909 090 090</td>
                    <td class="body-2 neutral-100" style="min-width:180px;">John@gmail.com</td>
                    <td class="body-2 neutral-100" style="min-width:200px;">
                        <ul class="m-0 p-0">
                            <li class="mb-3">Add address here</li>
                            <li class="mb-3">Add address here</li>
                        </ul>
                    </td>
                    <td style="min-width:200px;">
                        <div class="dropdown table-dropdown">
                            <button class="btn dropdown-toggle rejected" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Inactive
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item approved" href="#">Active</a></li>
                                <li><a class="dropdown-item rejected" href="#">Inactive</a></li>
                            </ul>
                        </div>
                    </td>
                    <td style="min-width:180px;">
                        <a href="/marriage-celebrants-details" class="table-link">View info</a>
                    </td>
                </tr>
                <tr>
                    <td class="body-2 neutral-100" style="min-width:180px;">Alex</td>
                    <td class="body-2 neutral-100" style="min-width:180px;">+61 0909 090 090</td>
                    <td class="body-2 neutral-100" style="min-width:180px;">Alex@gmail.com</td>
                    <td class="body-2 neutral-100" style="min-width:200px;">
                        <ul class="m-0 p-0">
                            <li class="mb-3">Add address here</li>
                            <li class="mb-3">Add address here</li>
                        </ul>
                    </td>
                    <td style="min-width:200px;">
                        <div class="dropdown table-dropdown">
                            <button class="btn dropdown-toggle approved" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Active
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item approved" href="#">Active</a></li>
                                <li><a class="dropdown-item rejected" href="#">Inactive</a></li>
                            </ul>
                        </div>
                    </td>
                    <td style="min-width:180px;">
                        <a href="/marriage-celebrants-details" class="table-link">View info</a>
                    </td>
                </tr>
                <tr>
                    <td class="body-2 neutral-100" style="min-width:180px;">David</td>
                    <td class="body-2 neutral-100" style="min-width:180px;">+61 0909 090 090</td>
                    <td class="body-2 neutral-100" style="min-width:180px;">David@gmail.com</td>
                    <td class="body-2 neutral-100" style="min-width:200px;">
                        <ul class="m-0 p-0">
                            <li class="mb-3">Add address here</li>
                        </ul>
                    </td>
                    <td style="min-width:200px;">
                        <div class="dropdown table-dropdown">
                            <button class="btn dropdown-toggle rejected" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Inactive
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item approved" href="#">Active</a></li>
                                <li><a class="dropdown-item rejected" href="#">Inactive</a></li>
                            </ul>
                        </div>
                    </td>
                    <td style="min-width:180px;">
                        <a href="/marriage-celebrants-details" class="table-link">View info</a>
                    </td>
                </tr>
                <tr>
                    <td class="body-2 neutral-100" style="min-width:180px;">Peter</td>
                    <td class="body-2 neutral-100" style="min-width:180px;">+61 0909 090 090</td>
                    <td class="body-2 neutral-100" style="min-width:180px;">Peter@gmail.com</td>
                    <td class="body-2 neutral-100" style="min-width:200px;">
                        <ul class="m-0 p-0">
                            <li class="mb-3">Add address here</li>
                            <li class="mb-3">Add address here</li>
                        </ul>
                    </td>
                    <td style="min-width:200px;">
                        <div class="dropdown table-dropdown">
                            <button class="btn dropdown-toggle approved" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Active
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item approved" href="#">Active</a></li>
                                <li><a class="dropdown-item rejected" href="#">Inactive</a></li>
                            </ul>
                        </div>
                    </td>
                    <td style="min-width:180px;">
                        <a href="/marriage-celebrants-details" class="table-link">View info</a>
                    </td>
                </tr>
                <tr>
                    <td class="body-2 neutral-100" style="min-width:180px;">Joe</td>
                    <td class="body-2 neutral-100" style="min-width:180px;">+61 0909 090 090</td>
                    <td class="body-2 neutral-100" style="min-width:180px;">Joe@gmail.com</td>
                    <td class="body-2 neutral-100" style="min-width:200px;">
                        <ul class="m-0 p-0">
                            <li class="mb-3">Add address here</li>
                            <li class="mb-3">Add address here</li>
                        </ul>
                    </td>
                    <td style="min-width:200px;">
                        <div class="dropdown table-dropdown">
                            <button class="btn dropdown-toggle approved" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Active
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item approved" href="#">Active</a></li>
                                <li><a class="dropdown-item rejected" href="#">Inactive</a></li>
                            </ul>
                        </div>
                    </td>
                    <td style="min-width:180px;">
                        <a href="/marriage-celebrants-details" class="table-link">View info</a>
                    </td>
                </tr>
                <tr>
                    <td class="body-2 neutral-100" style="min-width:180px;">Tomy</td>
                    <td class="body-2 neutral-100" style="min-width:180px;">+61 0909 090 090</td>
                    <td class="body-2 neutral-100" style="min-width:180px;">Tomy@gmail.com</td>
                    <td class="body-2 neutral-100" style="min-width:200px;">
                        <ul class="m-0 p-0">
                            <li class="mb-3">Add address here</li>
                            <li class="mb-3">Add address here</li>
                            <li class="mb-3">Add address here</li>
                        </ul>
                    </td>
                    <td style="min-width:200px;">
                        <div class="dropdown table-dropdown">
                            <button class="btn dropdown-toggle rejected" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Inactive
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item approved" href="#">Active</a></li>
                                <li><a class="dropdown-item rejected" href="#">Inactive</a></li>
                            </ul>
                        </div>
                    </td>
                    <td style="min-width:180px;">
                        <a href="/marriage-celebrants-details" class="table-link">View info</a>
                    </td>
                </tr>
                <tr>
                    <td class="body-2 neutral-100" style="min-width:180px;">Max</td>
                    <td class="body-2 neutral-100" style="min-width:180px;">+61 0909 090 090</td>
                    <td class="body-2 neutral-100" style="min-width:180px;">Max@gmail.com</td>
                    <td class="body-2 neutral-100" style="min-width:200px;">
                        <ul class="m-0 p-0">
                            <li class="mb-3">Add address here</li>
                            <li class="mb-3">Add address here</li>
                            <li class="mb-3">Add address here</li>
                        </ul>
                    </td>
                    <td style="min-width:200px;">
                        <div class="dropdown table-dropdown">
                            <button class="btn dropdown-toggle rejected" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Inactive
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item approved" href="#">Active</a></li>
                                <li><a class="dropdown-item rejected" href="#">Inactive</a></li>
                            </ul>
                        </div>
                    </td>
                    <td style="min-width:180px;">
                        <a href="/marriage-celebrants-details" class="table-link">View info</a>
                    </td>
                </tr>
                <tr>
                    <td class="body-2 neutral-100" style="min-width:180px;">Steven</td>
                    <td class="body-2 neutral-100" style="min-width:180px;">+61 0909 090 090</td>
                    <td class="body-2 neutral-100" style="min-width:180px;">Steven@gmail.com</td>
                    <td class="body-2 neutral-100" style="min-width:200px;">
                        <ul class="m-0 p-0">
                            <li class="mb-3">Add address here</li>
                            <li class="mb-3">Add address here</li>
                        </ul>
                    </td>
                    <td style="min-width:200px;">
                        <div class="dropdown table-dropdown">
                            <button class="btn dropdown-toggle approved" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Active
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item approved" href="#">Active</a></li>
                                <li><a class="dropdown-item rejected" href="#">Inactive</a></li>
                            </ul>
                        </div>
                    </td>
                    <td style="min-width:180px;">
                        <a href="/marriage-celebrants-details" class="table-link">View info</a>
                    </td>
                </tr>
                <tr>
                    <td class="body-2 neutral-100" style="min-width:180px;">Tony</td>
                    <td class="body-2 neutral-100" style="min-width:180px;">+61 0909 090 090</td>
                    <td class="body-2 neutral-100" style="min-width:180px;">Tony@gmail.com</td>
                    <td class="body-2 neutral-100" style="min-width:200px;">
                        <ul class="m-0 p-0">
                            <li class="mb-3">Add address here</li>
                            <li class="mb-3">Add address here</li>
                        </ul>
                    </td>
                    <td style="min-width:200px;">
                        <div class="dropdown table-dropdown">
                            <button class="btn dropdown-toggle approved" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Active
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item approved" href="#">Active</a></li>
                                <li><a class="dropdown-item rejected" href="#">Inactive</a></li>
                            </ul>
                        </div>
                    </td>
                    <td style="min-width:180px;">
                        <a href="/marriage-celebrants-details" class="table-link">View info</a>
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
@include('elements.admin.referral.referral-reason-sidebar')
@endsection