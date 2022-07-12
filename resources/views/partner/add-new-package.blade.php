@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-lg-2 p-0">
         @include('elements.partner-sidebar')
        </div>
        <div class="col-md-9 col-lg-10 px-md-4">
            @include('elements.partner-panel-header')
            <a href="./add-ons" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
            <div class="card panel-card">
               <div class="card-body">
                  <form class="needs-validation" method="POST" novalidate>
                     <div class="row">
                        <div class="col-lg-12 col-xl-10 col-xxl-8">
                           <div class="row">
                              <div class="col-md-6 mb-4">
                                 <label for="InputName" class="form-label small-text2">Product name</label>
                                 <input type="text" value="" placeholder="The corona pack" class="form-control body-1 netural-100" name="name" id="InputName" required>
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
                              <div class="col-md-6 mb-4">
                                 <label class="form-label small-text2">Category</label>
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
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="row">
                              <div class="col-md-12 mb-4 mt-4 add-ons-detail">
                                 <div class="d-flex">
                                    <div class="numberCircle align-self-center">1</div>
                                    <p class="subheader-3 neutral-100 align-self-center mb-0 ms-2">Packages 1</p>
                                 </div>
                              </div>
                              <div class="col-lg-4 mb-4 partner-gallery-upload-box">
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
                              <div class="col-lg-8 mb-4">
                                 <div class="row">
                                    <div class="col-xl-10 col-xxl-8 mb-4">
                                       <label for="InputName" class="form-label small-text2 mb-20">Package name</label>
                                       <div class="d-flex align-items-center">
                                          <input type="text" value="" placeholder="Add name package here" class="form-control body-1 netural-100" name="name" id="InputName" required>
                                          <a role="button" class="cross-icon ms-2 top-0"><img src="/images/icons/cross.svg" class="img-fluid"></a>
                                       </div>
                                       <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Package name is required</div>
                                    </div>
                                 </div>
                                 <div class="col-xl-10 col-xxl-7 mb-4">
                                    <div class="row">
                                       <div class="col-md-4 mb-4">
                                          <label for="InputName" class="form-label small-text2">Partner fee</label>
                                          <input type="text" value="$ " class="form-control body-1 netural-100" name="name" id="InputName" required>
                                          <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Partner fee is required</div>
                                       </div>
                                       <div class="col-md-4 mb-4">
                                          <label for="InputName" class="form-label small-text2">SC admin fee</label>
                                          <input type="text" value="10%" class="form-control body-1 netural-100" name="name" id="InputName" required>
                                          <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>SC admin fee is required</div>
                                       </div>
                                       <div class="col-md-4">
                                          <label for="InputName" class="form-label small-text2">Total fee</label>
                                          <input type="text" value="$ " class="form-control body-1 netural-100" name="name" id="InputName" required>
                                          <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Total fee is required</div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="row">
                                       <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-4">
                                          <label for="InputName" class="form-label small-text2">Deposit (optional)</label>
                                          <input type="text" value="%" class="form-control body-1 netural-100" name="name" id="InputName">
                                       </div>
                                       <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-4">
                                          <label for="InputName" class="form-label small-text2">Simulation partner fee</label>
                                          <input type="text" value="$ " class="form-control body-1 netural-100" name="name" id="InputName" required>
                                          <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Simulation partner fee is required</div>
                                       </div>
                                       <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-4">
                                          <label for="InputName" class="form-label small-text2">Simulation admin fee</label>
                                          <input type="text" value="$ " class="form-control body-1 netural-100" name="name" id="InputName" required>
                                          <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Simulation admin fee is required</div>
                                       </div>
                                       <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-4">
                                          <label for="InputName" class="form-label small-text2">Total fee</label>
                                          <div class="d-flex align-items-center">
                                             <input type="text" value="$ " class="form-control body-1 netural-100" name="name" id="InputName" required>
                                             <span class="d-inline-block ms-2" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="bottom" data-bs-content="Fill the deposit field first, after that simulation total deposit can appear">
                                                <img src="/images/booking-form/information.svg" alt="Information Icon" style="width:13px;">
                                             </span>
                                          </div>
                                          <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Total fee is required</div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-12 mb-4">
                                    <label class="form-label small-text2">Location description</label>
                                    <textarea placeholder="Type here" class="form-control body-3-medium netural-100" rows="12"></textarea>
                                 </div>
                                 <div class="col-md-12 mb-4">
                                    <label class="form-label small-text2">Title term (*optional)</label>
                                    <textarea placeholder="Type title term here" class="form-control body-1 netural-100" rows="2"></textarea>
                                 </div>
                                 <div class="col-md-12 mb-4">
                                    <label class="form-label small-text2">Terms (*optional)</label>
                                    <textarea placeholder="Type terms here" class="form-control body-1 netural-100" rows="8"></textarea>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-12">
                           <div class="d-flex justify-content-md-end flex-column flex-lg-row">
                              <a role="button" id="add_more-package" class="theme-btn primary-btn-border d-flex pe-auto me-0 me-lg-4 mb-3 mb-lg-0 justify-content-center"><img style="filter:none;" class="me-2" src="/images/admin/partner/plus-icon.svg" alt="Add">Add more packages</a>
                              <button type="submit" id="submit_button" class="theme-btn primary-btn border-0">Save</button>
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