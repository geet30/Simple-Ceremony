@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-lg-2 p-0">
         @include('elements.partner.partner-sidebar')
        </div>
        <div class="col-md-9 col-lg-10 px-md-4">
            @include('elements.partner.partner-panel-header')
            <a href="/all-partners" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
            <div class="card panel-card">
               <div class="card-body">
                  <h1 class="h3 netural-100 mb-4">Add new partner</h1>
                  <form class="needs-validation" method="POST" novalidate>
                     <div class="row">
                        <div class="col-lg-12 col-xl-10 col-xxl-8">
                           <div class="row">
                              <div class="col-md-6 mb-4">
                                 <label for="InputName" class="form-label small-text2">Business name *</label>
                                 <input type="text" placeholder="Type your business name here" class="form-control body-1 netural-100" name="name" id="InputName" required>
                                 <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Business name is required</div>
                              </div>
                              <div class="col-md-6 mb-4">
                                 <label for="InputName" class="form-label small-text2">Contact name *</label>
                                 <input type="text" placeholder="Type your contact name here" class="form-control body-1 netural-100" name="name" id="InputName" required>
                                 <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Contact name is required</div>
                              </div>
                              <div class="col-md-6 mb-4">
                                 <label for="phone" class="form-label small-text2">Phone number *</label>
                                 <input class="form-control body-1 netural-100" type="tel" id="phone" placeholder="e.g. +1 702 123 4567" value="+61 " required>
                                 <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Phone number is required</div>
                              </div>
                              <div class="col-md-6 mb-4">
                                 <label for="InputName" class="form-label small-text2">Email *</label>
                                 <input type="text" placeholder="Type your email here" class="form-control body-1 netural-100" name="name" id="InputName" required>
                                 <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Email is required</div>
                              </div>
                              <div class="col-md-6 mb-4">
                                 <label class="form-label small-text2">Business category *</label>
                                 <select required="" name="customer_type" class="js-placeholder-single-input form-control">
                                    <option value="" disabled="" selected="" hidden="">Choose category here</option>
                                    <option value="1">Photographer</option>
                                    <option value="2">Chair & decoration</option>
                                    <option value="3">Ring</option>
                                    <option value="4">Venue to celebrate</option>
                                    <option value="5">Flower</option>
                                    <option value="6">Car rent</option>
                                    <option value="7">Other</option>
                                 </select>
                                 <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Business category is required</div>
                              </div>
                              <div class="col-md-6 mb-4">
                                 <label class="form-label small-text2">Partner type</label>
                                 <select required="" name="customer_type" class="js-placeholder-single-input form-control">
                                    <option value="" disabled="" selected="" hidden="">Choose partner type here</option>
                                    <option value="1">Fixed partner</option>
                                    <option value="2">Percentage partner</option>
                                    <option value="3">Flat partner</option>
                                 </select>
                                 <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Partner type is required</div>
                              </div>
                              <div class="col-md-12 mb-4">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <label for="InputName" class="form-label small-text2">Upload avatar image</label>
                                    </div>
                                    <div class="col-md-8">
                                       <input class="form-control body-1 netural-100" id="formFileLg" type="file">
                                    </div>
                                    <div class="col-md-4">
                                       <label role="button" for="formFileLg" class="form-label small-text2 mb-0 theme-btn primary-btn">Choose imagee</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 mb-4">
                                 <label for="InputName" class="form-label small-text2">ABN number *</label>
                                 <input type="text" placeholder="Type your ABN number here" class="form-control body-1 netural-100" name="name" id="InputName" required>
                                 <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>ABN number is required</div>
                              </div>
                              <div class="col-md-6 mb-4">
                              </div>
                              <div class="col-md-6 mb-4">
                                 <div class="row">
                                    <div class="col-md-9">
                                       <label class="form-label small-text2">Bank</label>
                                       <select required="" name="customer_type" class="js-placeholder-single-input form-control">
                                          <option value="" disabled="" selected="" hidden="">Westparc</option>
                                          <option value="1">ANZ</option>
                                          <option value="2">NAB</option>
                                          <option value="3">Westpac Bank</option>
                                          <option value="4">Bank of Queensland</option>
                                          <option value="5">Macquarie Bank</option>
                                          <option value="6">Bendigo Bank</option>
                                          <option value="7">AMP Bank Ltd</option>
                                       </select>
                                       <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Bank is required</div>
                                    </div>
                                    <div class="col-md-3">
                                       <label for="InputName" class="form-label small-text2">BSB</label>
                                       <input type="text" placeholder="73" class="form-control body-1 netural-100" name="name" id="InputName" required>
                                       <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>BSB is required</div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 mb-4">
                                 <label for="InputName" class="form-label small-text2">Account number</label>
                                 <input type="text" placeholder="09090909" class="form-control body-1 netural-100" name="name" id="InputName" required>
                                 <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Account number is required</div>
                              </div>
                              <h2 class="h3 netural-100 mb-4 mt-3">Create package</h2>
                              <div class="col-md-6 mb-4">
                                 <label for="InputName" class="form-label small-text2">Product name *</label>
                                 <input type="text" placeholder="Type your product name here" class="form-control body-1 netural-100" name="name" id="InputName" required>
                                 <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Product name is required</div>
                              </div>
                              <div class="col-md-6 mb-4">
                                 <label class="form-label small-text2">Locations</label>
                                 <select class="js-example-basic-multiple form-control" name="states[]" multiple="multiple" required="">
                                    <option value="L1">location1</option>
                                    <option value="L2">location2</option>
                                    <option value="L3">location3</option>
                                    <option value="L4">location4</option>
                                  </select>
                                 <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Locations is required</div>
                              </div>
                              <div class="col-md-12 mb-4 mt-4 add-ons-detail">
                                 <div class="d-flex">
                                    <div class="numberCircle align-self-center">1</div>
                                    <p class="subheader-3 neutral-100 align-self-center mb-0 ms-2">Packages 1 <a role="button" class="cross-icon ms-2 top-0"><img src="/images/icons/cross.svg" class="img-fluid"></a></p>
                                 </div>
                              </div>
                              <div class="col-md-6 mb-4">
                                 <label for="InputName" class="form-label small-text2">Package name</label>
                                 <input type="text" placeholder="Add name package here" class="form-control body-1 netural-100" name="name" id="InputName" required>
                                 <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Package name is required</div>
                              </div>
                              <div class="col-md-6 mb-4">
                                 <div class="row">
                                    <div class="col-md-4">
                                       <label for="InputName" class="form-label small-text2">Partner fee</label>
                                       <input type="text" placeholder="$" class="form-control body-1 netural-100" name="name" id="InputName" required>
                                       <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Partner fee is required</div>
                                    </div>
                                    <div class="col-md-4">
                                       <label for="InputName" class="form-label small-text2">SC admin fee</label>
                                       <input type="text" placeholder="$ 120" class="form-control body-1 netural-100" name="name" id="InputName" required>
                                       <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>SC admin fee is required</div>
                                    </div>
                                    <div class="col-md-4">
                                       <label for="InputName" class="form-label small-text2">Total fee</label>
                                       <input type="text" placeholder="$ 120" class="form-control body-1 netural-100" name="name" id="InputName" required>
                                       <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Total fee is required</div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-3 mb-4">
                                 <label for="InputName" class="form-label small-text2">Deposit (optional)</label>
                                 <input type="text" placeholder="%" class="form-control body-1 netural-100" name="name" id="InputName">
                              </div>
                              <div class="col-md-3 mb-4">
                                 <label for="InputName" class="form-label small-text2">Simulation partner fee</label>
                                 <input type="text" placeholder="$" class="form-control body-1 netural-100" name="name" id="InputName" required>
                                 <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Simulation partner fee is required</div>
                              </div>
                              <div class="col-md-3 mb-4">
                                 <label for="InputName" class="form-label small-text2">Simulation admin fee</label>
                                 <input type="text" placeholder="$" class="form-control body-1 netural-100" name="name" id="InputName" required>
                                 <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Simulation admin fee is required</div>
                              </div>
                              <div class="col-md-3 mb-4">
                                 <label for="InputName" class="form-label small-text2">Total fee</label>
                                 <div class="d-flex align-items-center">
                                    <input type="text" placeholder="$" class="form-control body-1 netural-100" name="name" id="InputName" required>
                                    <span class="d-inline-block ms-2" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="bottom" data-bs-content="Fill the deposit field first, after that simulation total deposit can appear">
                                       <img src="/images/booking-form/information.svg" alt="Information Icon" style="width:13px;">
                                    </span>
                                 </div>
                                 <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Total fee is required</div>
                              </div>
                              <div class="col-md-12 mb-4">
                                 <label class="form-label small-text2">Location description</label>
                                 <textarea placeholder="Type here" class="form-control body-1 netural-100" rows="12"></textarea>
                              </div>
                              <div class="col-md-12 mb-4">
                                 <label class="form-label small-text2">Title term (*optional)</label>
                                 <textarea placeholder="Type title term here" class="form-control body-1 netural-100" rows="2"></textarea>
                              </div>
                              <div class="col-md-12 mb-4">
                                 <label class="form-label small-text2">Terms (*optional)</label>
                                 <textarea placeholder="Type terms here" class="form-control body-1 netural-100" rows="8"></textarea>
                              </div>
                              <div class="col-md-12 mb-4 partner-gallery-upload-box">
                                 <label for="gallery" class="form-label small-text2 mb-20">Upload gallery photos</label>
                                 <div class="upload__box">
                                    <div class="upload__btn-box">
                                       <label class="theme-btn primary-btn ">
                                          <p class="mb-0"> <img src="/images/icons/photo.svg"  class="img-fluid me-2">Upload images</p>
                                          <input type="file" multiple="" data-max_length="20" class="upload__inputfile">
                                       </label>
                                    </div>
                                    <div class="upload__img-wrap">
                                       <div class="upload__img-box">
                                          <div class="video-wrapper">
                                             <div class="video-container" id="video-container">
                                                <video controls width="100%" id="video" preload="metadata" poster="/images/add-ons/add-ons-details/right-4.jpg">
                                                   <source src="//cdn.jsdelivr.net/npm/big-buck-bunny-1080p@0.0.6/video.mp4" type="video/mp4">
                                                </video>
                                                <div class="upload__img-close"></div>
                                                <div class="play-button-wrapper">
                                                   <div title="Play video" class="play-gif" id="circle-play-b">
                                                      <img src="/images/play-icon.svg" class="img-fluid  play-icon w-20" alt="add-ons-image " >
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-12">
                                 <div class="d-flex ">
                                    <button type="submit" id="submit_button" class="theme-btn primary-btn border-0 me-4">Save</button>
                                    <a role="button" id="add_more-package" class="theme-btn primary-btn-border d-flex pe-auto"><img style="filter:none;" class="me-2" src="/images/admin/partner/plus-icon.svg" alt="Add">Add more packages</a>
                                 </div>
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
@endsection