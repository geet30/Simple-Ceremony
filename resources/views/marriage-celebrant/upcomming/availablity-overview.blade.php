@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
         @include('elements.admin-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-md-4">
         @include('elements.panel-header')
      <div class="col-12">
      <a href="./upcomming" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
      </div>
         <div class="row mb-4 pt-32">
            <div class="col-md-7 col-xl-8 d-flex align-self-center">
               <div class="dropdown">
                  <a class="btn">
                  <img src="/images/location-page/filter-icon.svg" class="fliter-icon" alt="Filter Icon">
                  </a>
                  <div class="select-with-checkbox">
                     <select name="filter_by_categories" id="selectinput" class="js-placeholder-single-input js-select2 form-control" multiple="multiple">
                        <optgroup label="Status">
                           <option value="O1" data-badge="">Booked</option>
                           <option value="O2" data-badge="">Pending</option>
                           <option value="O3" data-badge="">Lodged</option>
                           <option value="O4" data-badge="">Lodged (pending)</option>
                           <option value="O5" data-badge="">Married</option>
                           <option value="O6" data-badge="">Registered</option>
                           <option value="O7" data-badge="">Finalised</option>
                           <option value="O7" data-badge="">Cancelled</option>
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
                  <input type="text" class="form-control" placeholder="Search couple name">
               </div>
            </div>
            <div class="align-self-center col-md-5 col-xl-4 d-grid mt-3 mt-md-0 postion-relative">
               <a class="theme-btn primary-btn d-flex justify-content-center "  data-bs-toggle="modal" data-bs-target="#calendarmodal">
               <img class="me-2" src="/images/icons/date.svg" alt="shopping-icon">
               select a specific date
               </a>
               @include('elements.calander')
            </div>
         </div>
         <div class="row">
            <div class="col-12">
               <div class="table-responsive">
                  <table class="table align-middle theme-table">
                     <thead>
                        <tr>
                           <th>Name couple</th>
                           <th>Location</th>
                           <th>Wedding date</th>
                           <th>Time</th>
                           <th>Phone</th>
                           <th>Status </th>
                           <th></th>
                           <th></th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td style="min-width:200px" class="body-2">Joe & Vho</td>
                           <td  style="min-width:200px" class="body-2">Blues point</td>
                           <td style="min-width:200px" class="body-2" >Dec 11, 2022</td>
                           <td  style="min-width:200px" class="body-2">10:30</td>
                           <td  style="min-width:180px" class="body-2">+61-123456789</td>
                           <td  style="min-width:180px" class="body-2"><span class="status booked">Booked</span></td>
                           <td  style="min-width:100px"><a class="table-link button-2"></a></td>
                           <td  style="min-width:100px">
                              <div class="dropdown">
                                 <button class="btn edit-btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                 View info
                                 </button>
                                 <ul class="dropdown-menu edit-btn-dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Download docs</a></li>
                                    <li><a class="dropdown-item" href="./availablity-overview">Check docs</a></li>
                                    <li><a class="dropdown-item" href="#">Approve</a></li>
                                    <li><a class="dropdown-item" href="#">Reject</a></li>
                                 </ul>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td style="min-width:200px" class="body-2"> John & Emma</td>
                           <td  style="min-width:200px" class="body-2">Tench park</td>
                           <td style="min-width:200px" class="body-2" >Dec 11, 2022</td>
                           <td  style="min-width:200px" class="body-2">10:30</td>
                           <td  style="min-width:180px" class="body-2">+61-123456789</td>
                           <td  style="min-width:180px" class="body-2"><span class="status pending">Pending</span></td>
                           <td  style="min-width:100px"><a class="table-link button-2"></a></td>
                           <td  style="min-width:100px">
                              <div class="dropdown">
                                 <button class="btn edit-btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                 View info
                                 </button>
                                 <ul class="dropdown-menu edit-btn-dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Download docs</a></li>
                                    <li><a class="dropdown-item" href="./availablity-overview">Check docs</a></li>
                                    <li><a class="dropdown-item" href="#">Approve</a></li>
                                    <li><a class="dropdown-item" href="#">Reject</a></li>
                                 </ul>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td style="min-width:200px" class="body-2"> Chloe & Amy</td>
                           <td  style="min-width:200px" class="body-2">Blues point</td>
                           <td style="min-width:200px" class="body-2" >Dec 11, 2022</td>
                           <td  style="min-width:200px" class="body-2">10:30</td>
                           <td  style="min-width:180px" class="body-2">+61-123456789</td>
                           <td  style="min-width:180px" class="body-2"><span class="status lodged">Lodged</span></td>
                           <td  style="min-width:100px"><a class="table-link button-2" data-bs-toggle="modal" data-bs-target="#note">Note</a></td>
                           <td  style="min-width:100px">
                              <div class="dropdown">
                                 <button class="btn edit-btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                 View info
                                 </button>
                                 <ul class="dropdown-menu edit-btn-dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Download docs</a></li>
                                    <li><a class="dropdown-item" href="./availablity-overview">Check docs</a></li>
                                    <li><a class="dropdown-item" href="#">Approve</a></li>
                                    <li><a class="dropdown-item" href="#">Reject</a></li>
                                 </ul>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td style="min-width:200px" class="body-2"> Sam & Sophie</td>
                           <td  style="min-width:200px" class="body-2">Blues point</td>
                           <td style="min-width:200px" class="body-2" >Dec 11, 2022</td>
                           <td  style="min-width:200px" class="body-2">10:30</td>
                           <td  style="min-width:180px" class="body-2">+61-123456789</td>
                           <td  style="min-width:180px" class="body-2"><span class="status lodged">Lodged (Pending)</span></td>
                           <td  style="min-width:100px"><a class="table-link button-2"></a></td>
                           <td  style="min-width:100px">
                              <div class="dropdown">
                                 <button class="btn edit-btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                 View info
                                 </button>
                                 <ul class="dropdown-menu edit-btn-dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Download docs</a></li>
                                    <li><a class="dropdown-item" href="./availablity-overview">Check docs</a></li>
                                    <li><a class="dropdown-item" href="#">Approve</a></li>
                                    <li><a class="dropdown-item" href="#">Reject</a></li>
                                 </ul>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td style="min-width:260px" class="body-2"> Jorsey & Erin</td>
                           <td  style="min-width:200px" class="body-2">Tench park</td>
                           <td style="min-width:200px" class="body-2" >Mar 09, 2022</td>
                           <td  style="min-width:200px" class="body-2">10:30</td>
                           <td  style="min-width:180px" class="body-2">+61-123456789</td>
                           <td  style="min-width:180px" class="body-2"><span class="status registered">Registered</span></td>
                           <td  style="min-width:100px"><a class="table-link button-2" data-bs-toggle="modal" data-bs-target="#note">Note</a></td>
                           <td  style="min-width:100px">
                              <div class="dropdown">
                                 <button class="btn edit-btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                 View info
                                 </button>
                                 <ul class="dropdown-menu edit-btn-dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Download docs</a></li>
                                    <li><a class="dropdown-item" href="./availablity-overview">Check docs</a></li>
                                    <li><a class="dropdown-item" href="#">Approve</a></li>
                                    <li><a class="dropdown-item" href="#">Reject</a></li>
                                 </ul>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td style="min-width:260px" class="body-2"> Max & Jade</td>
                           <td  style="min-width:200px" class="body-2">Bradfield park</td>
                           <td style="min-width:200px" class="body-2" >Mar 09, 2022</td>
                           <td  style="min-width:200px" class="body-2">10:30</td>
                           <td  style="min-width:180px" class="body-2">+61-123456789</td>
                           <td  style="min-width:180px" class="body-2"><span class="status registered">Registered</span></td>
                           <td  style="min-width:100px"><a class="table-link button-2"></a></td>
                           <td  style="min-width:100px"><a class="table-link button-2">View info</a></td>
                        </tr>
                        <tr>
                           <td style="min-width:200px" class="body-2">Matt & Zoe</td>
                           <td  style="min-width:200px" class="body-2">Tench park</td>
                           <td style="min-width:200px" class="body-2" >Mar 07, 2022</td>
                           <td  style="min-width:200px" class="body-2">10:30</td>
                           <td  style="min-width:180px" class="body-2">+61-123456789</td>
                           <td  style="min-width:180px" class="body-2"><span class="status pending">Pending</span></td>
                           <td  style="min-width:100px"><a class="table-link button-2" data-bs-toggle="modal" data-bs-target="#note">Note</a></td>
                           <td  style="min-width:100px">
                              <div class="dropdown">
                                 <button class="btn edit-btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                 View info
                                 </button>
                                 <ul class="dropdown-menu edit-btn-dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Download docs</a></li>
                                    <li><a class="dropdown-item" href="./availablity-overview">Check docs</a></li>
                                    <li><a class="dropdown-item" href="#">Approve</a></li>
                                    <li><a class="dropdown-item" href="#">Reject</a></li>
                                 </ul>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td style="min-width:200px" class="body-2">Jack & Ella</td>
                           <td  style="min-width:200px" class="body-2">Bradfield park</td>
                           <td style="min-width:200px" class="body-2" >Mar 05, 2022</td>
                           <td  style="min-width:200px" class="body-2">10:30</td>
                           <td  style="min-width:180px" class="body-2">+61-123456789</td>
                           <td  style="min-width:180px" class="body-2"><span class="status cancelled">Cancelled</span></td>
                           <td  style="min-width:100px"><a class="table-link button-2"></a></td>
                           <td  style="min-width:100px">
                              <div class="dropdown">
                                 <button class="btn edit-btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                 View info
                                 </button>
                                 <ul class="dropdown-menu edit-btn-dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Download docs</a></li>
                                    <li><a class="dropdown-item" href="./availablity-overview">Check docs</a></li>
                                    <li><a class="dropdown-item" href="#">Approve</a></li>
                                    <li><a class="dropdown-item" href="#">Reject</a></li>
                                 </ul>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td style="min-width:200px" class="body-2"> Tom & Jess</td>
                           <td  style="min-width:200px" class="body-2">Tench park</td>
                           <td style="min-width:200px" class="body-2" >Mar 06, 2022</td>
                           <td  style="min-width:200px" class="body-2">10:30</td>
                           <td  style="min-width:180px" class="body-2">+61-123456789</td>
                           <td  style="min-width:180px" class="body-2"><span class="status registered">Registered</span></td>
                           <td  style="min-width:100px"><a class="table-link button-2" data-bs-toggle="modal" data-bs-target="#note">Note</a></td>
                           <td  style="min-width:100px">
                              <div class="dropdown">
                                 <button class="btn edit-btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                 View info
                                 </button>
                                 <ul class="dropdown-menu edit-btn-dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Download docs</a></li>
                                    <li><a class="dropdown-item" href="./availablity-overview">Check docs</a></li>
                                    <li><a class="dropdown-item" href="#">Approve</a></li>
                                    <li><a class="dropdown-item" href="#">Reject</a></li>
                                 </ul>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td style="min-width:200px" class="body-2"> Joe & Jessica</td>
                           <td  style="min-width:200px" class="body-2">Blues point</td>
                           <td style="min-width:200px" class="body-2" >Mar 04, 2022</td>
                           <td  style="min-width:200px" class="body-2">10:30</td>
                           <td  style="min-width:180px" class="body-2">+61-123456789</td>
                           <td  style="min-width:180px" class="body-2"><span class="status registered">Registered</span></td>
                           <td  style="min-width:100px"><a class="table-link button-2"></a></td>
                           <td  style="min-width:100px">
                              <div class="dropdown">
                                 <button class="btn edit-btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                 View info
                                 </button>
                                 <ul class="dropdown-menu edit-btn-dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Download docs</a></li>
                                    <li><a class="dropdown-item" href="./availablity-overview">Check docs</a></li>
                                    <li><a class="dropdown-item" href="#">Approve</a></li>
                                    <li><a class="dropdown-item" href="#">Reject</a></li>
                                 </ul>
                              </div>
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
   </div>
</div>
<div class="modal fade theme-modal" id="note" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body">
            <div class="row">
               <div class="col-9 ">
                  <p class="body-3-regular neutral-100 mb-11">Created by </p>
                  <div class="d-flex mb-11">
                     <div  class="align-self-center"><img src="/images/avtar/nathan.png" class="rounded-circle theme-avtar"  alt="Created" /></div>
                     <div class="align-self-center body-2-semi-bold  neutral-100 ps-2">Nathan - Partner</div>
                  </div>
                  <div class="d-md-flex">
                     <div class="theme-tag-blue d-flex me-2 mb-3 mb-md-0 justify-content-center justify-content-md-start">
                        <div class="align-self-center "><img src="/images/icons/calendar-blue.svg" class="img-fluid calender-icon" alt="calendar"></div>
                        <div class="align-self-center">May 20, 2022</div>
                     </div>
                     <div class="postion-relative share-icon ">
                        <div class="theme-tag-blue d-flex justify-content-center justify-content-md-start">
                           <div class="align-self-center"><img src="/images/icons/share.svg" class="img-fluid " alt="share"></div>
                           <div class="align-self-center">2 Share</div>
                        </div>
                        <div class="share-content">
                           <ul>
                              <li>
                                 <div class="d-flex mb-11">
                                    <div  class="align-self-center"><img src="/images/avtar/michael.png" class="rounded-circle theme-avtar"  alt="Created" /></div>
                                    <div class="align-self-center  ps-1">
                                       <p class="body-2-semi-bold  neutral-100 mb-0">Michael</p>
                                       <p class="small-text3 neutral-100 mb-0">Marriage Celebrant</p>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="d-flex mb-11">
                                    <div  class="align-self-center"><img src="/images/avtar/nathan.png" class="rounded-circle theme-avtar"  alt="Created" /></div>
                                    <div class="align-self-center  ps-1">
                                       <p class="body-2-semi-bold  neutral-100 mb-0">Nathan decorat...</p>
                                       <p class="small-text3 neutral-100 mb-0">Partner</p>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="d-flex mb-11">
                                    <div  class="align-self-center"><img src="/images/avtar/luxury.png" class="rounded-circle theme-avtar"  alt="Created" /></div>
                                    <div class="align-self-center  ps-1">
                                       <p class="body-2-semi-bold  neutral-100 mb-0">Luxury Photogr...</p>
                                       <p class="small-text3 neutral-100 mb-0">Partner</p>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="d-flex mb-11">
                                    <div  class="align-self-center"><img src="/images/icons/header-logo.svg" class="rounded-circle theme-avtar"  alt="Created" /></div>
                                    <div class="align-self-center  ps-1">
                                       <p class="body-2-semi-bold  neutral-100 mb-0">Admin</p>
                                       <p class="small-text3 neutral-100 mb-0">Simple ceremonies</p>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-3 "> <a  type="button" class="theme-btn primary-btn-border float-end" data-bs-dismiss="modal" aria-label="Close"> Close</a></div>
               <div class="col-12 pt-30">
                  <div class="card card-turquoise-20">
                     <div class="card-body">
                        <div class="mb-60">
                           <h3 class="h4 neutral-100 mb-20">Important to know</h3>
                           <p class="body-3-medium text-black mb-0 ">The groom's parents just died, make sure you guys understand this situation & don't mention anything about
                              that, I'm afraid it will spoil his mood. THANKS!
                           </p>
                        </div>
                        <h3 class="h4 neutral-100 mb-20">Attachment file</h3>
                        <!-- <p class="body-3-medium text-black mb-0 ">Empty</p> -->
                        <div>
                           <img src="/images/attach-file.jpg" class="img-fluid" alt="attach-file">
                           <p class="mb-0 body-3-regular neutral-100 mt-2">Namefile.pdf</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('elements.admin-add-ons-add')
@include('elements.admin-add-ons-edit')
@include('elements.admin-add-ons-feedback')
@endsection