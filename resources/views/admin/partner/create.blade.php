@extends('layouts.panels')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
            @include('elements.common.admin-sidebar')
        </div>
        <div class="col-10 col-md-9 col-lg-10 px-4">
            @include('elements.common.panel-header')
            <a href="{{url('partner')}}" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
            <div class="card panel-card">
               <div class="card-body">
                  <h1 class="h3 netural-100 mb-4">Add new partner</h1>
                  @if($errors->any())
                     <div class="alert alert-danger mb-3 alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>  
                        {{$errors->first()}}
                     </div>
                  @endif
                  @if (\Session::has('message'))
                     <div class="alert {{\Session::get('class')}}">
                           <ul class="mb-0"> <li>{!! \Session::get('message') !!}</li></ul>
                     </div>
                  @endif
               <form class="needs-validation loader_class" method="POST" novalidate action="{{ route('partner.store') }}" enctype="multipart/form-data">
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
                           <div class="col-md-6 mb-4 phone_number">
                              <label for="phone" class="form-label small-text2">Phone number *</label>
                              <input type="hidden"  id="code" name ="user[country_code]" value="61" >
                              <input id="phone" type="tel" class="form-control body-1 netural-100 tel-input" placeholder="Your phone number" name="user[phone]" required> 
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Phone number is required</div> 
                              <!-- <span id="valid-msg" class="hide">Valid</span>
                              <span id="error-msg" class="hide">Invalid number</span> -->
                              <div class="invalid-feedback phone_number_required"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Phone number is required</div>
                              <div class="invalid-feedback invalid-phone-number"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Phone number is invalid</div>
                              
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
                                    <textarea name="partner_packages[0][location_description]" placeholder="Type here" class="form-control body-1 netural-100" rows="12" required></textarea>
                                    <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Location Description is required</div>
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
                                             <div class="invalid-feedback" style="position: absolute;bottom: -24px;left: 40px;text-align: left;z-index: 1;"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Images are required</div>
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
    </div>
</div>
@endsection