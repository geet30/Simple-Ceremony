@extends('layouts.panels')
@section('page-name') {{ $partner_details['product_name'] }} @stop
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
            @include('elements.admin-sidebar')
        </div>
        <div class="col-10 col-md-9 col-lg-10 px-4">
            @include('elements.panel-header')
            <a href="/partner/package/details/{{$product_id}}" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
            @if($errors->any())
               <div class="alert alert-danger mb-3 alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>  
                  {{$errors->first()}}
               </div>
            @endif
            @if (\Session::has('message'))
                     <div class="alert {{\Session::get('class')}}">
                           <ul> <li>{!! \Session::get('message') !!}</li></ul>
                     </div>
            @endif
            <div class="card panel-card">
               <div class="card-body">
                  <h1 class="h3 netural-100 mb-4">Edit Package</h1>
                  <form class="needs-validation" method="POST" novalidate action="{{ route('partner.update',$product_id) }}" enctype="multipart/form-data">
                     @csrf
                     <div class="row">
                        <div class="col-lg-12 col-xl-10 col-xxl-8">
                           <div class="row">
                              <input type="hidden" name="user_id" value="{{$partner_details['user_id']}}">
                              <div class="col-md-6 mb-4">
                                 <label for="InputName" class="form-label small-text2">Product name</label>
                                 <input type="text" placeholder="Type your product name here" class="form-control body-1 netural-100" name="partner_products[product_name]" id="InputName" value="{{ isset($partner_details['product_name']) ? $partner_details['product_name'] : '' }}" required>
                                 <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Product name is required</div>
                              </div>
                              <div class="col-md-12 col-lg-6 mb-4">
                                 <div class="row align-items-end">
                                    <div class="col-md-9 mb-3 mb-md-0">
                                       <label class="form-label small-text2">Locations</label>
                                       <?php
                                       $selected_location = [];
                                          foreach($partner_details['product_location'] as $key=>$location){
                                       
                                             $selected_location[] = $location['location'];
                                          }  
                                       ?>
                                       <select class="js-example-basic-multiple form-control" name="package_locations[location][]" multiple="multiple" required="">
                                          @foreach($locations as $location)
                                          <option value="{{$location->id}}" {{ (in_array($location->id, $selected_location)) ? 'selected' : '' }}>{{$location->name }}</option>
                                          @endforeach
                                       </select>
                                       <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Locations is required</div>
                                    </div>
                                    <div class="col-md-3">
                                       <button type="submit" id="submit_button" class="theme-btn primary-btn border-0">Save</button>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 mb-4">
                                 <label class="form-label small-text2">Category</label>
                                 
                                 <select required="" name="partner_products[business_category]" class="js-placeholder-single-input form-control">
                                    <option value="" disabled="" selected="" hidden="">Choose category here</option>
                                    @foreach($addons as $addon)
                                    <option value="{{$addon->id}}"  {{ (isset($partner_details['business_category']) && $partner_details['business_category'] == $addon->id) ? 'selected' : '' }}>{{$addon->name }}</option>
                                    @endforeach
                                    
                                 </select>
                                 <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Business category is required</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
                  <form class="needs-validation" method="POST" novalidate action="{{ route('partner.update',$product_id) }}" enctype="multipart/form-data">
                     @csrf
                     <input type="hidden" name="user_id" value="{{$partner_details['user_id']}}">
                     <?php $count = 0;?>
                     
                     @if(count($partner_details['package']) > 0)
                        @foreach($partner_details['package'] as $key=>$package)
                        <?php $count++; ?>
                           <div class="row">
                              <input type="hidden" name="partner_packages[{{$key}}][id]" value="{{ isset($package['id']) ? $package['id'] : '' }}" >
                              <input type="hidden" name="image_id" class="image_id">
                              <div class="col-md-12">
                                 <div class="row">
                                    <div class="col-md-12 mb-4 mt-4 add-ons-detail">
                                       <div class="d-flex">
                                          <div class="numberCircle align-self-center">{{$count }}</div>
                                          <p class="subheader-3 neutral-100 align-self-center mb-0 ms-2">Packages {{$count}}</p>
                                       </div>
                                    </div>
                                    <div class="col-lg-4 mb-4 partner-gallery-upload-box images_outer_div">
                                       <label for="gallery" class="form-label small-text2 mb-20">Upload gallery photos</label>
                                       <div class="upload__box">
                                          <div class="upload__btn-box">
                                             <label class="theme-btn primary-btn ">
                                                <p class="mb-0"> <img src="/images/icons/photo.svg"  class="img-fluid me-2">Upload images</p>
                                                @if($count>0)
                                                    <input type="file" multiple="" data-max_length="20" class="upload__inputfile" id="upload__inputfile-{{$count}}" name="partner_packages[{{$key}}][package_images][image_name][]">
                                                @else
                                                   <input type="file" multiple="" data-max_length="20" class="upload__inputfile" id="upload__inputfile" name="partner_packages[{{$key}}][package_images][image_name][]">
                                                @endif
                                                <div class="invalid-feedback images_required" style="position: absolute;bottom: -24px;left: 40px;text-align: left;z-index: 1;"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Images are required</div>
                                             </label>
                                          </div>
                                          <div class="upload__img-wrap">
                                         
                                         
                                             @if($package['gallery'] && !empty($package['gallery']))
                                             
                                             @foreach($package['gallery'] as $keys=>$images)
                                             <?php 
                                        
                                                $path = asset('uploads/images/package/'.$images['image_name']);
                                                $type = pathinfo($path, PATHINFO_EXTENSION);
                                                $imgData = file_get_contents($path);
                                                $base64 = 'data:image/' . $type . ';base64,' . base64_encode($imgData);

                                             ?>
                                             
                                             <div class='upload__img-box'>
                                                <div style='background-image: url({{$base64}})' data-number='{{$keys}}' data-file='{{$images["image_name"]}}' data-package_id="{{$package['id']}}" data-image_id="{{$images['id']}}" class='img-bg'>
                                                   <div class='upload__img-close'></div>
                                                
                                                
                                                </div>
                                             </div>
                                             @endforeach
                                             @else
                                             <div class="upload__img-wrap"></div>
                                             @endif
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-8 mb-4">
                                       <div class="row">
                                          <div class="col-xl-10 col-xxl-8 mb-4">
                                             <label for="InputName" class="form-label small-text2 mb-20">Package name {{$count}}</label>
                                             <input type="text" value="{{ isset($package['package_name']) ? $package['package_name'] : '' }}" placeholder="Add name package here" class="form-control body-1 netural-100" name="partner_packages[{{$key}}][package_name]" id="InputName" required>
                                             <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Package name is required</div>
                                          </div>
                                       </div>
                                       <div class="col-xl-10 col-xxl-7 mb-4">
                                          <div class="row">
                                             <div class="col-md-4 mb-4">
                                                <label for="InputName" class="form-label small-text2">Partner fee</label>
                                                <input type="text" value="{{ isset($package['partner_fee']) ? number_format($package['partner_fee']) : '' }}" class="form-control body-1 netural-100" name="partner_packages[{{$key}}][partner_fee]" id="InputName" required>
                                                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Partner fee is required</div>
                                             </div>
                                             <div class="col-md-4 mb-4">
                                                <label for="InputName" class="form-label small-text2">SC admin fee</label>
                                                <input type="text" value="{{ isset($package['partner_fee']) ? number_format($package['partner_fee']) : '' }}" class="form-control body-1 netural-100" name="partner_packages[{{$key}}][admin_fee]"  id="InputName" required>
                                                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>SC admin fee is required</div>
                                             </div>
                                             <div class="col-md-4">
                                                <label for="InputName" class="form-label small-text2">Total fee</label>
                                                <input type="text" value="{{ isset($package['partner_fee']) ? number_format($package['partner_fee']) : '' }}" class="form-control body-1 netural-100" name="partner_packages[{{$key}}][total_fee]" id="InputName" required>
                                                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Total fee is required</div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="row">
                                             <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-4">
                                                <label for="InputName" class="form-label small-text2">Deposit (optional)</label>
                                                <input type="text" value="{{ isset($package['deposit']) ? $package['deposit'] : '' }}" class="form-control body-1 netural-100"  name="partner_packages[{{$key}}][deposit]" id="InputName">
                                             </div>
                                             <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-4">
                                                <label for="InputName" class="form-label small-text2">Simulation partner fee</label>
                                                <input type="text" value="{{ isset($package['simulation_partner_fee']) ? number_format($package['simulation_partner_fee']) : '' }}" class="form-control body-1 netural-100" name="partner_packages[{{$key}}][simulation_partner_fee]" id="InputName" required>
                                                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Simulation partner fee is required</div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-4">
                                                <label for="InputName" class="form-label small-text2">Simulation admin fee</label>
                                                <input type="text" value="{{ isset($package['simulation_admin_fee']) ? number_format($package['simulation_admin_fee']) : '' }}" class="form-control body-1 netural-100" name="partner_packages[{{$key}}][simulation_admin_fee]" id="InputName" required>
                                                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Simulation admin fee is required</div>
                                             </div>
                                             <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-4">
                                                <label for="InputName" class="form-label small-text2">Total fee</label>
                                                <div class="d-flex align-items-center">
                                                   <input type="text" value="{{ isset($package['simulation_total_fee']) ? number_format($package['simulation_total_fee']) : '' }}" class="form-control body-1 netural-100" name="partner_packages[{{$key}}][simulation_total_fee]" id="InputName" required>
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
                                          <textarea placeholder="Type here" class="form-control body-3-medium netural-100" rows="12" name="partner_packages[{{$key}}][location_description]">{{ isset($package['location_description']) ? $package['location_description'] : '' }}</textarea>
                                       </div>
                                       <div class="col-md-12 mb-4">
                                          <label class="form-label small-text2">Title term (*optional)</label>
                                          <textarea placeholder="Type title term here" class="form-control body-1 netural-100" rows="2" name="partner_packages[{{$key}}][title_term]">{{ isset($package['title_term']) ? $package['title_term'] : '' }}</textarea>
                                       </div>
                                       <div class="col-md-12 mb-4">
                                          <label class="form-label small-text2">Terms (*optional)</label>
                                          <textarea placeholder="Type terms here" class="form-control body-1 netural-100" rows="8" name="partner_packages[{{$key}}][terms]">{{ isset($package['terms']) ? $package['terms'] : '' }}</textarea>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        @endforeach
                        <div class="col-md-12 mb-4">
                              <div class="d-flex ">
                                 <button type="submit" id="submit_button" class="theme-btn primary-btn border-0 me-4">Save</button>
                              </div>
                        </div>
                     @else
                        <div class="col-12 mb-4 emptyRecord">
                              No package found yet.
                        </div>
                     @endif
                  </form>
               </div>
            </div>
        </div>
    </div>
</div>

@endsection