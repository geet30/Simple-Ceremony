@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
         @include('elements.partner.partner-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-4">
         @include('elements.partner.partner-panel-header')
         <div class="card panel-card mt-4">
            <div class="card-body">
               <h1 class="h4 netural-100 mb-4">My account</h1>
               <div class="row">
                  <div class="col-md-3 col-lg-3 col-xl-2 col-xxl-2 col-6">
                     <div class="position-relative mb-4">
                        <img src="/images/admin/partner/updated-user.png" alt="Partner Image" class="img-fluid w-100">
                        <img role="button" class="camera-icon position-absolute" style="bottom: 10px;right: 10px;" src="/images/admin/partner/camera-icon.svg" alt="Camera">
                     </div>
                  </div>
                  <div class="col-md-12 col-lg-9 col-xl-9 col-xxl-8">
                     <form class="needs-validation" method="POST" novalidate>
                        <div class="row">
                           <div class="col-md-6 mb-4">
                              <label for="InputName" class="form-label small-text2">Business name</label>
                              <input type="text" value="Nathan" class="form-control body-1 netural-100" name="name" id="InputName" required>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Business name is required</div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="InputName" class="form-label small-text2">Contact name</label>
                              <input type="text" value="Doffy" class="form-control body-1 netural-100" name="name" id="InputName" required>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Contact name is required</div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="phone" class="form-label small-text2">Phone number</label>
                              <input class="form-control body-1 netural-100" type="tel" id="phone" placeholder="e.g. +1 702 123 4567" value="+61 0980980808" required>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Phone number is required</div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="InputName" class="form-label small-text2">Email address</label>
                              <input type="text" value="Nathandecoration@gmail.com" class="form-control body-1 netural-100" name="name" id="InputName" required="">
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Email is required</div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="InputName" class="form-label small-text2">Business category</label>
                              <input type="text" value="Chair & decoration" class="form-control body-1 netural-100" name="name" id="InputName" required>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Business category is required</div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="InputName" class="form-label small-text2">ABN Number</label>
                              <input type="text" value="090190190290" class="form-control body-1 netural-100" name="name" id="InputName" required>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>ABN Number is required</div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <div class="row">
                                 <div class="col-md-9">
                                    <label for="InputName" class="form-label small-text2">Bank</label>
                                    <input type="text" value="Westpac" class="form-control body-1 netural-100" name="name" id="InputName" required>
                                    <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Bank is required</div>
                                 </div>
                                 <div class="col-md-3">
                                    <label for="InputName" class="form-label small-text2">BSB</label>
                                    <input type="number" value="73" class="form-control body-1 netural-100" name="name" id="InputName" required>
                                    <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>BSB is required</div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="InputName" class="form-label small-text2">Account number</label>
                              <input type="number" placeholder="eg. 0000000000000" class="form-control body-1 netural-100" name="name" id="InputName" required>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Account number is required</div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="InputName" class="form-label small-text2">Password</label>
                              <input type="password" value="************" class="form-control body-1 netural-100" name="name" id="InputName" required>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Account number is required</div>
                           </div>
                           <div class="col-md-12 mb-4">
                              <label for="InputName" class="form-label small-text2">Terms & condition</label>
                              <div class="body-3 textaread-field-readonly">
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam volutpat metus in arcu faucibus malesuada. Mauris sit amet eleifend tellus, eget consequat ligula. Vivamus eu sem ut justo tempus gravida. In elementum erat et ullamcorper placerat. Nam ultricies fringilla mauris, quis viverra arcu interdum ut</p>
                                 <ul>
                                    <li>Lorem ipsum dolor sit amet, consectetur</li>
                                    <li>Eget consequat ligula</li>
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur</li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-md-12 mb-3 mt-4">
                              <div class="d-flex flex-column flex-md-row">
                                 <span class="body-2 netural-100 me-4">Locations list</span>
                                 <a href="#" class="mt-2 mt-md-0 button-1 turquoise-100 text-decoration-none faq-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_partner_addlocation" aria-controls="offcanvas_partner_addlocation">Add new location</a>
                              </div>
                           </div>
                           <div class="col-md-12 mb-4">
                              <div class="row">
                                 <div class="col-md-6">
                                    <input type="text" value="Bradfield park" class="form-control body-1 netural-100" name="name" id="InputName">
                                 </div>
                                 <div class="col-md-6">
                                    <div class="d-flex table-dropdown align-items-start flex-column flex-md-row align-items-md-center">
                                       <span class="small-text2 netural-100 me-3 mt-3 mt-md-0 mb-md-0 mb-3">status</span>
                                       <p class="waiting-approval p-1 px-3 d-inline-block text-decoration-none me-3 mb-3 mb-md-0">Pending</p>
                                       <a href="#" class="button-1 turquoise-100 text-decoration-none faq-link mb-3 mb-md-0">
                                       <img src="/images/admin/partner/trash.svg" alt="Delete">
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 mb-4">
                              <div class="row">
                                 <div class="col-md-6">
                                    <input type="text" value="Tench park, penrith" class="form-control body-1 netural-100" name="name" id="InputName">
                                 </div>
                                 <div class="col-md-6">
                                    <div class="d-flex table-dropdown align-items-start flex-column flex-md-row align-items-md-center">
                                       <span class="small-text2 netural-100 me-3 mt-3 mt-md-0 mb-md-0 mb-3">status</span>
                                       <p class="approved p-1 px-3 d-inline-block text-decoration-none me-3 mb-3 mb-md-0">Approve</p>
                                       <a href="#" class="button-1 turquoise-100 text-decoration-none faq-link mb-3 mb-md-0">
                                       <img src="/images/admin/partner/trash.svg" alt="Delete">
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 mb-5">
                              <div class="row">
                                 <div class="col-md-6">
                                    <input type="text" value="Blues point" class="form-control body-1 netural-100" name="name" id="InputName">
                                 </div>
                                 <div class="col-md-6">
                                    <div class="d-flex table-dropdown align-items-start flex-column flex-md-row align-items-md-center">
                                       <span class="small-text2 netural-100 me-3 mt-3 mt-md-0 mb-md-0 mb-3">status</span>
                                       <p class="approved p-1 px-3 d-inline-block text-decoration-none me-3 mb-3 mb-md-0">Approve</p>
                                       <a href="#" class="button-1 turquoise-100 text-decoration-none faq-link mb-3 mb-md-0">
                                       <img src="/images/admin/partner/trash.svg" alt="Delete">
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 mb-4 sticky-footer text-start">
                              <div class="row">
                                 <div class="col-md-6">
                                 </div>
                                 <div class="col-md-6">
                                    <a href="/account-edit" role="button" class="d-inline-flex theme-btn primary-btn justify-content-center">
                                    <img class="me-2" src="/images/admin/partner/edit.svg" alt="Edit">
                                    Edit information
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('elements.partner.add-new-location')
@endsection