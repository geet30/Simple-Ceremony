@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
         @include('elements.celebrant-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-md-4">
         @include('elements.celebrant.panel-header')
         <div class="row pt-31">
            <div class="col-md-8 col-xl-9 d-flex align-self-center">
               <div class="dropdown ">
                  <a class="btn" role="button">
                  <img src="/images/location-page/filter-icon.svg" class="fliter-icon" alt="Filter Icon">
                  </a>
                  <div class="select-with-checkbox">
                     <select name="filter_by_categories" id="selectinput" class="js-placeholder-single-input js-select2 form-control" multiple="multiple">
                        <optgroup label="Status">
                           <option value="O1" data-badge="">Active</option>
                           <option value="O2" data-badge="">Inactive</option>
                           <option value="O3" data-badge="">Pending</option>
                        </optgroup>
                        <optgroup label="Location">
                           <option value="O1" data-badge="">Blues point</option>
                           <option value="O2" data-badge="">Tench park</option>
                           <option value="O3" data-badge="">Bradfield park</option>
                        </optgroup>
                     </select>
                  </div>
         
               </div>
               <div class="form-group has-search w-100 ms-4 position-relative">
                  <span class="fa fa-search form-control-feedback"></span>
                  <input type="text" class="form-control" placeholder="Search">
               </div>
            </div>
            <div class="align-self-center col-md-4 col-xl-3 d-grid mt-3 mt-md-0">
               <a class="theme-btn primary-btn d-flex justify-content-center" href="/add">
               <img class="me-2" src="/images/icons/add.svg" alt="shopping-icon">
               Request new location
               </a>
            </div>
         </div>
         <div class="row pt-4">
            <div class="col-12">
               <div class="table-responsive">
                  <table class="table align-middle theme-table">
                     <thead>
                        <tr>
                           <th>Location</th>
                           <th>Regency</th>
                           <th>ZIP code</th>
                           <th>Address</th>
                           <th>Status</th>
                           <th></th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:200px;">Blues point reserve</td>
                           <td class="body-2 neutral-100" style="min-width:180px;">Milsons Point</td>
                           <td class="body-2 neutral-100" style="min-width:130px;">2061</td>
                           <td class="body-2 neutral-100" style="min-width:200px;">Add address here</td>
                           <td style="min-width:180px;">
                              <span class="status pending">Pending</span>
                           </td>
                           <td  style="min-width:300px;">
                              <ul class="mb-0 pl-0">
                                 <a  href="/open" class="table-link me-2">Open</a>
                                 <a   href="/edit" class="table-link me-2">Edit</a>
                                 <a   href="" role="button" class="table-link">Delete</a>
                              </ul>
                           </td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:200px;">Blues point reserve</td>
                           <td class="body-2 neutral-100" style="min-width:180px;">Milsons Point</td>
                           <td class="body-2 neutral-100" style="min-width:130px;">2061</td>
                           <td class="body-2 neutral-100" style="min-width:200px;">Add address here</td>
                           <td style="min-width:180px;">
                              <span class="status registered">Active</span>
                           </td>
                           <td  style="min-width:300px;">
                              <ul class="mb-0 pl-0">
                                 <a  href="/open" class="table-link me-2">Open</a>
                                 <a   href="/edit" class="table-link me-2">Edit</a>
                                 <a   href="" role="button" class="table-link">Delete</a>
                              </ul>
                           </td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:200px;">Blues point reserve</td>
                           <td class="body-2 neutral-100" style="min-width:180px;">Milsons Point</td>
                           <td class="body-2 neutral-100" style="min-width:130px;">2061</td>
                           <td class="body-2 neutral-100" style="min-width:200px;">Add address here</td>
                           <td style="min-width:180px;">
                              <span class="status registered">Active</span>
                           </td>
                           <td  style="min-width:300px;">
                              <ul class="mb-0 pl-0">
                                 <a  href="/open" class="table-link me-2">Open</a>
                                 <a   href="/edit" class="table-link me-2">Edit</a>
                                 <a   href="" role="button" class="table-link">Delete</a>
                              </ul>
                           </td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:200px;">Blues point reserve</td>
                           <td class="body-2 neutral-100" style="min-width:180px;">Milsons Point</td>
                           <td class="body-2 neutral-100" style="min-width:130px;">2061</td>
                           <td class="body-2 neutral-100" style="min-width:200px;">Add address here</td>
                           <td style="min-width:180px;">
                              <span class="status inactive">Inactive</span>
                           </td>
                           <td  style="min-width:300px;">
                              <ul class="mb-0 pl-0">
                                 <a  href="/open" class="table-link me-2">Open</a>
                                 <a   href="/edit" class="table-link me-2">Edit</a>
                                 <a   href="" role="button" class="table-link">Delete</a>
                              </ul>
                           </td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:200px;">Blues point reserve</td>
                           <td class="body-2 neutral-100" style="min-width:180px;">Milsons Point</td>
                           <td class="body-2 neutral-100" style="min-width:130px;">2061</td>
                           <td class="body-2 neutral-100" style="min-width:200px;">Add address here</td>
                           <td style="min-width:180px;">
                              <span class="status inactive">Inactive</span>
                           </td>
                           <td  style="min-width:300px;">
                              <ul class="mb-0 pl-0">
                                 <a  href="/open" class="table-link me-2">Open</a>
                                 <a   href="/edit" class="table-link me-2">Edit</a>
                                 <a   href="" role="button" class="table-link">Delete</a>
                              </ul>
                           </td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:200px;">Blues point reserve</td>
                           <td class="body-2 neutral-100" style="min-width:180px;">Milsons Point</td>
                           <td class="body-2 neutral-100" style="min-width:130px;">2061</td>
                           <td class="body-2 neutral-100" style="min-width:200px;">Add address here</td>
                           <td style="min-width:180px;">
                              <span class="status inactive">Inactive</span>
                           </td>
                           <td  style="min-width:300px;">
                              <ul class="mb-0 pl-0">
                                 <a  href="/open" class="table-link me-2">Open</a>
                                 <a   href="/edit" class="table-link me-2">Edit</a>
                                 <a   href="" role="button" class="table-link">Delete</a>
                              </ul>
                           </td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:200px;">Blues point reserve</td>
                           <td class="body-2 neutral-100" style="min-width:180px;">Milsons Point</td>
                           <td class="body-2 neutral-100" style="min-width:130px;">2061</td>
                           <td class="body-2 neutral-100" style="min-width:200px;">Add address here</td>
                           <td style="min-width:180px;">
                              <span class="status inactive">Inactive</span>
                           </td>
                           <td  style="min-width:300px;">
                              <ul class="mb-0 pl-0">
                                 <a  href="/open" class="table-link me-2">Open</a>
                                 <a   href="/edit" class="table-link me-2">Edit</a>
                                 <a   href="" role="button" class="table-link">Delete</a>
                              </ul>
                           </td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:200px;">Blues point reserve</td>
                           <td class="body-2 neutral-100" style="min-width:180px;">Milsons Point</td>
                           <td class="body-2 neutral-100" style="min-width:130px;">2061</td>
                           <td class="body-2 neutral-100" style="min-width:200px;">Add address here</td>
                           <td style="min-width:180px;">
                              <span class="status inactive">Inactive</span>
                           </td>
                           <td  style="min-width:300px;">
                              <ul class="mb-0 pl-0">
                                 <a  href="/open" class="table-link me-2">Open</a>
                                 <a   href="/edit" class="table-link me-2">Edit</a>
                                 <a   href="" role="button" class="table-link">Delete</a>
                              </ul>
                           </td>
                        </tr>
                        <tr>
                           <td class="body-2 neutral-100" style="min-width:200px;">Blues point reserve</td>
                           <td class="body-2 neutral-100" style="min-width:180px;">Milsons Point</td>
                           <td class="body-2 neutral-100" style="min-width:130px;">2061</td>
                           <td class="body-2 neutral-100" style="min-width:200px;">Add address here</td>
                           <td style="min-width:180px;">
                              <span class="status inactive">Inactive</span>
                           </td>
                           <td  style="min-width:300px;">
                              <ul class="mb-0 pl-0">
                                 <a  href="/open" class="table-link me-2">Open</a>
                                 <a   href="/edit" class="table-link me-2">Edit</a>
                                 <a   href="" role="button" class="table-link">Delete</a>
                              </ul>
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
                                    <a class="d-inline-flex me-4" href=""><img src="/images/pagination/left.svg"
                                       class="img-fluid"></a>
                                    <a class="d-inline-flex me-4" href=""><img src="/images/pagination/right.svg"
                                       class="img-fluid"> </a>
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