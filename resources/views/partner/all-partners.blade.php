@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-lg-2 p-0">
            @include('elements.admin-sidebar')
        </div>
        <div class="col-md-9 col-lg-10 px-md-4">
         @include('elements.panel-header')
         <div class="row mb-4 mt-3">
            <div class="col-md-8 col-xl-9 d-flex align-self-center">
            <div class="form-group has-search w-100 position-relative">
               <span class="fa fa-search form-control-feedback"></span>
               <input type="text" class="form-control" placeholder="Search partners">
            </div>
         </div>
            <div class="align-self-center col-md-4 col-xl-3 d-grid mt-3 mt-md-0">
               <a class="theme-btn primary-btn d-flex justify-content-center" href="/partner/add-new-partner">
               <img class="me-2" src="/images/icons/add.svg" alt="shopping-icon">
               Add new partner
               </a>
            </div>
         </div>
         <div class="table-responsive">
            <table class="table align-middle theme-table">
               <thead>
                  <tr>
                     <th>Name</th>
                     <th>Business category</th>
                     <th>Phone number</th>
                     <th>Email</th>
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td style="min-width:260px" class="body-2" class="body-2">Prisillia decoration</td>
                     <td  style="min-width:200px" class="body-2">Chair & decoration</td>
                     <td  style="min-width:180px" class="body-2">+61 0909 090 090</td>
                     <td  style="min-width:180px" class="body-2">Kate@gmail.com</td>
                     <td  style="min-width:180px"><a class="table-link body-2">View info</a></td>
                  </tr>
                  <tr>
                     <td style="min-width:260px" class="body-2">Picture framing</td>
                     <td  style="min-width:200px" class="body-2">Photographer</td>
                     <td  style="min-width:180px" class="body-2">+61 0909 090 090</td>
                     <td  style="min-width:180px" class="body-2">Antony@gmail.com</td>
                     <td  style="min-width:180px"><a class="table-link body-2">View info</a></td>
                  </tr>
                  <tr>
                     <td style="min-width:260px" class="body-2">Sarah jewelry</td>
                     <td  style="min-width:200px" class="body-2">Ring</td>
                     <td  style="min-width:180px" class="body-2">+61 0909 090 090</td>
                     <td  style="min-width:180px" class="body-2">Sarah@gmail.com</td>
                     <td  style="min-width:180px"><a class="table-link body-2">View info</a></td>
                  </tr>
                  <tr>
                     <td style="min-width:260px" class="body-2">Little vintage</td>
                     <td  style="min-width:200px" class="body-2">Car rent</td>
                     <td  style="min-width:180px" class="body-2">+61 0909 090 090</td>
                     <td  style="min-width:180px" class="body-2">Simon@gmail.com</td>
                     <td  style="min-width:180px"><a class="table-link body-2">View info</a></td>
                  </tr>
                  <tr>
                     <td style="min-width:260px" class="body-2">Flower by joelle</td>
                     <td  style="min-width:200px" class="body-2">Flower</td>
                     <td  style="min-width:180px" class="body-2">+61 0909 090 090</td>
                     <td  style="min-width:180px" class="body-2">William@gmail.com</td>
                     <td  style="min-width:180px"><a class="table-link body-2">View info</a></td>
                  </tr>
                  <tr>
                     <td style="min-width:260px" class="body-2">Wedding dream</td>
                     <td  style="min-width:200px" class="body-2">Venue to celebrate</td>
                     <td  style="min-width:180px" class="body-2">+61 0909 090 090</td>
                     <td  style="min-width:180px" class="body-2">Gary@gmail.com</td>
                     <td  style="min-width:180px"><a class="table-link body-2">View info</a></td>
                  </tr>
                  <tr>
                     <td style="min-width:260px" class="body-2">Decor-A-Shaan</td>
                     <td  style="min-width:200px" class="body-2">Chair & decoration</td>
                     <td  style="min-width:180px" class="body-2">+61 0909 090 090</td>
                     <td  style="min-width:180px" class="body-2">Adam@gmail.com</td>
                     <td  style="min-width:180px"><a class="table-link body-2">View info</a></td>
                  </tr>
                  <tr>
                     <td style="min-width:260px" class="body-2">Kim jewelry</td>
                     <td  style="min-width:200px" class="body-2">Ring</td>
                     <td  style="min-width:180px" class="body-2">+61 0909 090 090</td>
                     <td  style="min-width:180px" class="body-2">Kim@gmail.com</td>
                     <td  style="min-width:180px"><a class="table-link body-2">View info</a></td>
                  </tr>
                  <tr>
                     <td style="min-width:260px" class="body-2">Alan rent</td>
                     <td  style="min-width:200px" class="body-2">Car rent</td>
                     <td  style="min-width:180px" class="body-2">+61 0909 090 090</td>
                     <td  style="min-width:180px" class="body-2">Alan@gmail.com</td>
                     <td  style="min-width:180px"><a class="table-link body-2">View info</a></td>
                  </tr>
                  <tr>
                     <td style="min-width:260px" class="body-2">Wayne decoration</td>
                     <td  style="min-width:200px" class="body-2">Chair & decoration</td>
                     <td  style="min-width:180px" class="body-2">+61 0909 090 090</td>
                     <td  style="min-width:180px" class="body-2">Wayne@gmail.com</td>
                     <td  style="min-width:180px"><a class="table-link body-2">View info</a></td>
                  </tr>
               </tbody>
               <tfoot>
                  <tr>
                     <td colspan="5">
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