@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
            @include('elements.admin-sidebar')
        </div>
        <div class="col-10 col-md-9 col-lg-10 px-4">
            @include('elements.panel-header')
            <a href="/all-partners" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
            <div class="card panel-card">
               <div class="card-body">
                  <h1 class="h3 netural-100 mb-4">Partner details </h1>
                  <div class="row mb-3">
                     <div class="col-md-12 mb-3 mb-lg-0">
                        <ul class="nav theme-tabs pb-1">
                           <li class="nav-item">
                              <a class="nav-link active" id="information-tab" data-bs-toggle="tab" data-bs-target="#information" href="#">Product information (3)</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" id="celebrants-tab" data-bs-toggle="tab" data-bs-target="#celebrants" href="#">Personal data</a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="tab-content partners-details" id="tabContent">
                     <div class="tab-pane fade show active" id="information" role="tabpanel" aria-labelledby="information-tab">
                        <div class="row">
                           <div class="col-lg-3">
                              <a href="package-details" class="text-decoration-none">
                              <div class="card image-card">
                                 <img src="/images/add-ons/v5.png" class="card-img-top mb-4" alt="location-1">
                                 <div class="card-body table-dropdown">
                                    <p class="waiting-approval p-1 px-3 d-inline-block text-decoration-none mb-0">Waiting Approval</p>
                                    <h2 class="h4 netural-100 mb-3 mb-lg-0 mt-3">Hunter valley</h2>
                                 </div>
                              </div>
                              </a>
                           </div>
                           <div class="col-lg-3">
                              <a href="package-details" class="text-decoration-none">
                              <div class="card image-card">
                                 <img src="/images/add-ons/add-ons-details/package2/right-2.jpg" class="card-img-top mb-4" alt="location-1">
                                 <div class="card-body table-dropdown">
                                    <p class="approved p-1 px-3 d-inline-block text-decoration-none mb-0">Approve</p>
                                    <h2 class="h4 netural-100 mb-3 mb-lg-0 mt-3">Zoom streaming pack</h2>
                                 </div>
                              </div>
                              </a>
                           </div>
                           <div class="col-lg-3">
                              <a href="package-details" class="text-decoration-none">
                              <div class="card image-card">
                                 <img src="/images/add-ons/add-ons-details/left.jpg" class="card-img-top mb-4" alt="location-1">
                                 <div class="card-body table-dropdown">
                                    <p class="rejected p-1 px-3 d-inline-block text-decoration-none mb-0">Rejected</p>
                                    <h2 class="h4 netural-100 mb-3 mb-lg-0 mt-3">Intimate pack</h2>
                                 </div>
                              </div>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="celebrants" role="tabpanel" aria-labelledby="celebrants-tab">
                        <div class="row">
                           <div class="col-md-3 col-lg-3 col-xl-2 col-xxl-2 col-6">
                              <img src="/images/admin/partner/user-image.png" alt="Partner Image" class="img-fluid">
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
                                             <input type="text" value="73" class="form-control body-1 netural-100" name="name" id="InputName" required>
                                             <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>BSB is required</div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                       <label for="InputName" class="form-label small-text2">Account number</label>
                                       <input type="text" value="09090909" class="form-control body-1 netural-100" name="name" id="InputName" required>
                                       <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Account number is required</div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                       <input type="submit" value="Save" class="d-inline-flex theme-btn primary-btn justify-content-start sticky-bottom">
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
    </div>
</div>
@endsection