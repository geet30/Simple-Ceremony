@extends('layouts.panels')
@section('content')
<section class="register">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-4 left ">
            <div class="row">
               <div class="col-md-1 col-lg-2"></div>
               <div class="col-md-10 col-lg-9 text-center text-md-start">
                  <div class="pb-4 d-none d-md-block">
                     <a href="/" class="theme-btn secondary-btn d-inline-flex back-btn">
                     <img class="me-3" src="/images/single-location/left-icon.svg" alt="Back Icon">
                     Back to login</a>
                  </div>
                  <img src="/images/logo-white.svg" class="img-fluid" alt="Logo" title="Logo">
                  <h1 class="h3 mt-34 mt-xs-10 text-white ">Follow these steps to complete your account</h1>
               </div>
               <div class="col-md-1"></div>
            </div>
         </div>
         <div class="col-md-8 col-lg-7 right">
            <h1 class="h3 netural-100 mb-4">Fill in the form</h1>
            @if($errors->any())
                     <div class="alert alert-danger mb-3 alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>  
                        {{$errors->first()}}
                     </div>
            @endif
            @if(session()->has('msg'))
               <div class="alert alert-danger">
                  <button type="button" class="close" data-dismiss="alert">×</button> 
                  {{ session()->get('msg') }}
               </div>
            @endif  
            <form class="needs-validation" method="POST" novalidate action="{{ route('register') }}" enctype="multipart/form-data">
               @csrf
               <div class="row">
                  <div class="col-lg-12 col-xl-12 col-xxl-12">
                     <div class="row">
                        <div class="col-md-6 mb-4">
                           <label for="InputName" class="form-label small-text2">Business name *</label>
                           <input type="text" placeholder="Type your business name here" class="form-control body-1 netural-100" name="user[name]" id="InputName" required>
                           <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Business name is required</div>
                        </div>
                        <div class="col-md-6 mb-4">
                           <label for="InputName" class="form-label small-text2">Contact name *</label>
                           <input type="text" placeholder="Type your contact name here" class="form-control body-1 netural-100" name="user[contact_name]" id="InputName" required>
                           <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Contact name is required</div>
                        </div>
                        <div class="col-md-6 mb-4">
                           <label for="phone" class="form-label small-text2">Phone number *</label>
                           <input id="phone" type="tel" class="form-control body-1 netural-100" placeholder="Your phone number">
                           <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Phone number is required</div> 
                           {{-- <span id="valid-msg" class="hide">Valid</span>
                           <span id="error-msg" class="hide">Invalid number</span> --}}
                           {{-- <input class="form-control body-1 netural-100" type="tel" id="phone" placeholder="e.g. +1 702 123 4567" name="user[phone]" required>--}}
                           
                        </div>
                        <div class="col-md-6 mb-4">
                           <label for="InputName" class="form-label small-text2">Email *</label>
                           <input type="text" placeholder="Type your email here" class="form-control body-1 netural-100" name="user[email]" id="InputName" required>
                           <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Email is required</div>
                        </div>
                        <div class="col-md-6 mb-4">
                           <label class="form-label small-text2">Business category *</label>
                           <select required="" name="partner_products[business_category]" class="js-placeholder-single-input form-control">
                              <option value="" disabled="" selected="" hidden="">Choose category here</option>
                              @foreach($addons as $addon)
                              <option value="{{$addon->id}}">{{$addon->name }}</option>
                              @endforeach
                              
                           </select>
                           <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Business category is required</div>
                        </div>
                        <div class="col-md-6 mb-4">
                           <label class="form-label small-text2">Partner type</label>
                           <select required="" name="user[partner_type]" class="js-placeholder-single-input form-control">
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
                                 <input class="form-control body-1 netural-100" name="user[image]" id="formFileLg" type="file">
                              </div>
                              <div class="col-md-4">
                                 <label role="button" for="formFileLg" class="form-label small-text2 mb-0 theme-btn primary-btn">Choose imagee</label>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 mb-4">
                           <label for="InputName" class="form-label small-text2">ABN number *</label>
                           <input type="text" placeholder="Type your ABN number here" class="form-control body-1 netural-100" name="user[abn_number]" id="InputName" required>
                           <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>ABN number is required</div>
                        </div>
                        <div class="col-md-6 mb-4">
                        </div>
                        <div class="col-md-6 mb-4">
                           <div class="row">
                              <div class="col-md-9">
                                 <label class="form-label small-text2">Bank</label>
                                 <select required="" name="user[bank]" class="js-placeholder-single-input form-control">
                                    <option value="" disabled="" selected="" hidden="">Select</option>
                                    <option value="1">ANZ</option>
                                    <option value="2">NAB</option>
                                    <option value="3">Westpac Bank</option>
                                    <option value="4">Bank of Queensland</option>
                                    <option value="5">Macquarie Bank</option>
                                    <option value="6">Bendigo Bank</option>
                                    <option value="7">AMP Bank Ltd</option>
                                    <option value="8">Westparc</option>
                                 </select>
                                 <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Bank is required</div>
                              </div>
                              <div class="col-md-3">
                                 <label for="InputName" class="form-label small-text2">BSB</label>
                                 <input type="text" placeholder="73" class="form-control body-1 netural-100" name="user[bsb]" id="InputName" required>
                                 <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>BSB is required</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 mb-4">
                           <label for="InputName" class="form-label small-text2">Account number</label>
                           <input type="text" placeholder="09090909" class="form-control body-1 netural-100" name="user[account_no]" id="InputName" required>
                           <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Account number is required</div>
                        </div>
                        <h2 class="h3 netural-100 mb-4 mt-3">Create package</h2>
                        <div class="col-md-6 mb-4">
                           <label for="InputName" class="form-label small-text2">Product name *</label>
                           <input type="text" placeholder="Type your product name here" class="form-control body-1 netural-100" name="partner_products[product_name]" id="InputName" required>
                           <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Product name is required</div>
                        </div>
                        <div class="col-md-6 mb-4">
                           <label class="form-label small-text2">Locations</label>
                           <select class="js-example-basic-multiple form-control" name="package_locations[location][]" multiple="multiple" required="">
                              @foreach($locations as $location)
                              <option value="{{$location->id}}">{{$location->name }}</option>
                              @endforeach
                           </select>
                           <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Locations is required</div>
                        </div>
                        <div class="packageContainer">
                           <div class="row mt-2 packageDiv">
                              <div class="col-md-12 mb-4 mt-4 add-ons-detail">
                                 <div class="d-flex">
                                    <div class="numberCircle align-self-center">1</div>
                                    <p class="subheader-3 neutral-100 align-self-center mb-0 ms-2">Packages 1 <a role="button" class="cross-icon ms-2 top-0" onclick="remove(`packageDiv`,this,'packageContainer')"><img src="/images/icons/cross.svg" class="img-fluid"></a></p>
                                 </div>
                              </div>
                              <div class="col-md-6 mb-4">
                                 <label for="InputName" class="form-label small-text2">Package name</label>
                                 <input type="text" placeholder="Add name package here" class="form-control body-1 netural-100" name="partner_packages[0][package_name]" id="InputName" required>
                                 <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Package name is required</div>
                              </div>
                              <div class="col-md-6 mb-4">
                                 <div class="row">
                                    <div class="col-md-4">
                                       <label for="InputName" class="form-label small-text2">Partner fee</label>
                                       <input type="text" placeholder="$" class="form-control body-1 netural-100" name="partner_packages[0][partner_fee]" id="InputName" required>
                                       <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Partner fee is required</div>
                                    </div>
                                    <div class="col-md-4">
                                       <label for="InputName" class="form-label small-text2">SC admin fee</label>
                                       <input type="text" placeholder="$ 120" class="form-control body-1 netural-100" name="partner_packages[0][admin_fee]" id="InputName" required>
                                       <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>SC admin fee is required</div>
                                    </div>
                                    <div class="col-md-4">
                                       <label for="InputName" class="form-label small-text2">Total fee</label>
                                       <input type="text" placeholder="$ 120" class="form-control body-1 netural-100" name="partner_packages[0][total_fee]" id="InputName" required>
                                       <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Total fee is required</div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-3 mb-4">
                                 <label for="InputName" class="form-label small-text2">Deposit (optional)</label>
                                 <input type="text" placeholder="%" class="form-control body-1 netural-100" name="partner_packages[0][deposit]" id="InputName">
                              </div>
                              <div class="col-md-3 mb-4">
                                 <label for="InputName" class="form-label small-text2">Simulation partner fee</label>
                                 <input type="text" placeholder="$" class="form-control body-1 netural-100" name="partner_packages[0][simulation_partner_fee]" id="InputName" required>
                                 <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Simulation partner fee is required</div>
                              </div>
                              <div class="col-md-3 mb-4">
                                 <label for="InputName" class="form-label small-text2">Simulation admin fee</label>
                                 <input type="text" placeholder="$" class="form-control body-1 netural-100" name="partner_packages[0][simulation_admin_fee]" id="InputName" required>
                                 <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Simulation admin fee is required</div>
                              </div>
                              <div class="col-md-3 mb-4">
                                 <label for="InputName" class="form-label small-text2">Total fee</label>
                                 <div class="d-flex">
                                    <div class="input-error">
                                       <input type="text" placeholder="$" class="form-control body-1 netural-100" name="partner_packages[0][simulation_total_fee]" id="InputName" required>
                                       <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Total fee is required</div>
                                    </div>
                                    <span class="d-inline-block ms-2 align-self-start" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="bottom" data-bs-content="Fill the deposit field first, after that simulation total deposit can appear">
                                    <img src="/images/booking-form/information.svg" alt="Information Icon" style="width:13px;">
                                    </span>
                                 </div>
                              </div>
                              <div class="col-md-12 mb-4">
                                 <label class="form-label small-text2">Location description</label>
                                 <textarea name="partner_packages[0][location_description]" placeholder="Type here" class="form-control body-1 netural-100" rows="12"></textarea>
                              </div>
                              <div class="col-md-12 mb-4">
                                 <label class="form-label small-text2">Title term (*optional)</label>
                                 <textarea placeholder="Type title term here" name="partner_packages[0][title_term]" class="form-control body-1 netural-100" rows="2"></textarea>
                              </div>
                              <div class="col-md-12 mb-4">
                                 <label class="form-label small-text2">Terms (*optional)</label>
                                 <textarea name="partner_packages[0][terms]" placeholder="Type terms here" class="form-control body-1 netural-100" rows="8"></textarea>
                              </div>
                              <div class="col-md-12 mb-5 partner-gallery-upload-box position-relative">
                                 <label for="gallery" class="form-label small-text2 mb-20">Upload gallery photos</label>
                                 <div class="upload__box">
                                    <div class="upload__btn-box">
                                       <label class="theme-btn primary-btn ">
                                          <p class="mb-0"> <img src="/images/icons/photo.svg"  class="img-fluid me-2">Upload images</p>
                                          <input type="file" multiple="" data-max_length="20" class="upload__inputfile" id="upload__inputfile" name="partner_packages[0][package_images][image_name][]" required>
                                          <div class="invalid-feedback" style="position: absolute;bottom: -30px;left: 40px;text-align: left;z-index: -1;"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Images are required</div>
                                       </label>
                                    </div>
                                    <div class="upload__img-wrap">
                                    </div> 
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 mb-5">
                           <div class="d-flex ">
                              <button type="submit" id="submit_button" class="theme-btn primary-btn border-0 me-4">Save</button>
                              <a role="button" id="add_more-package" onclick="appendHtml('packageContainer', 'package')" class="theme-btn primary-btn-border d-flex pe-auto"><img style="filter:none;" class="me-2" src="/images/admin/partner/plus-icon.svg" alt="Add">Add more packages</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</section>
@endsection