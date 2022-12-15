@extends('layouts.panels')
@section('content')
<script>
   var partners = '<?php echo json_encode($partners);?>';
</script>
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
      @include('elements.common.admin-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-4">
      @include('elements.common.panel-header')
         <div class="row">
            <div class="col-12 mb-30">
               <a href="/locations/all-packages" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
            </div>
            <div class="col-12">
            @if (\Session::has('message'))
               <div class="alert {{\Session::get('class')}}">
                     <ul class="mb-0"> <li>{!! \Session::get('message') !!}</li></ul>
               </div>
            @endif
               <div class="card panel-card">
                  <div class="card-title">
                     <h1 class="h3 neutral-100 mb-0">Add new location</h1>
                  </div>
                  <div class="card-body">
                     <form class="row g-3 needs-validation" novalidate  method="POST" action="{{url('store-location')}}" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="custom_location_id" value="{{ isset($data['id']) ? $data['id'] : '' }}">
                        @if($errors->any())
                        <div class="alert alert-danger mb-3 alert-block">
                           <button type="button" class="close" data-dismiss="alert">×</button>  
                           {{$errors->first()}}
                        </div>
                        @endif
                        <div class="col-md-5 mb-4">
                           <label for="Location" class="form-label small-text2">Location *</label>
                           <input type="text" pattern="\S(.*\S)?" placeholder="Type the name location" class="form-control body-1 netural-100" name="name" value="{{ isset($data['name']) ? $data['name'] : old('name') }}" id="Location" required>
                           <div class="invalid-feedback">
                              Location name is required.
                           </div>
                        </div>
                        <div class="col-md-5 mb-4">
                           <label for="Address" class="form-label small-text2">Address *</label>
                           <input type="text"  pattern="\S(.*\S)?" placeholder="Type the address here" class="form-control body-1 netural-100" name="address" value="{{ isset($data['address']) ? $data['address'] : old('address') }}" id="Address" required>
                           <div class="invalid-feedback">
                              Address is required.
                           </div>
                        </div>
                        <div class="col-md-5 mb-4">
                           <label for="Town" class="form-label small-text2">Suburb/ Town *</label>
                           <input type="text" pattern="\S(.*\S)?" placeholder="Type the Suburb/ Town here" class="form-control body-1 netural-100" value="{{ isset($data['town']) ? $data['town'] : old('town') }}"  name="town" id="Town" required>
                           <div class="invalid-feedback">
                              Suburb is required.
                           </div>
                        </div>
                        <div class="col-md-5 mb-4">
                           <label for="Code" class="form-label small-text2">Post Code *</label>
                           <input type="text"  pattern="\S(.*\S)?" placeholder="Type the Post Code code here" class="form-control body-1 netural-100" value="{{ isset($data['post_code']) ? $data['post_code'] : old('post_code') }}" name="post_code" id="Code" required>
                           <div class="invalid-feedback">
                              Post code is required.
                           </div>
                        </div>
                        <div class="col-md-5 mb-4">
                           <label for="Google" class="form-label small-text2">Latitude</label>
                           <input type="text" pattern="\S(.*\S)?" placeholder="Type Google coordinates here" class="form-control body-1 netural-100" name="latitude" id="latitude" value="{{ isset($data['latitude']) ? $data['latitude'] : old('latitude') }}">
                        </div>
                        <div class="col-md-5 mb-4">
                           <label for="Google" class="form-label small-text2">Longitude</label>
                           <input type="text" pattern="\S(.*\S)?" placeholder="Type Google coordinates here" class="form-control body-1 netural-100" name="longitude" id="longitude" value="{{ isset($data['longitude']) ? $data['longitude'] : old('longitude') }}">
                        </div>
                        <div class="col-md-5 mb-4">
                           <label for="directions" class="form-label small-text2">Specific directions</label>
                           <input type="text" pattern="\S(.*\S)?" placeholder="Type specific directions here" class="form-control body-1 netural-100" name="direction" id="directions" value="{{ isset($data['direction']) ? $data['direction'] : old('direction') }}">
                        </div>
                        <div class="col-md-5 mb-4">
                           <label for="Generallocation" class="form-label small-text2">General location</label>
                           <input type="text" pattern="\S(.*\S)?" placeholder="Type general location here" class="form-control body-1 netural-100" name="general_location" id="Generallocation" value="{{ isset($data['general_location']) ? $data['general_location'] : old('general_location') }}">
                        </div>
                        <div class="col-md-5 mb-4">
                           <label for="Locationnumber" class="form-label small-text2">Location number</label>
                           <input type="number" min="0" placeholder="Type location number here" class="form-control body-1 netural-100" name="loc_number" id="Locationnumber" value="{{ isset($data['loc_number']) ? $data['loc_number'] : old('loc_number') }}">
                           
                        </div>
                        <div class="col-md-5 mb-4">
                           <label for="Price" class="form-label small-text2">Price *</label>
                           <div class=" theme-input-group">
                              <input type="number" min="0" step="0.01" placeholder="Type price here" class="form-control body-1 netural-100 pl-30" value="{{ isset($data['price']) ? $data['price'] : old('price') }}" name="price" id="Price" required>
                              <img src="/images/icons/dollor.svg" class="img-fluid left-icon">
                              <div class="invalid-feedback">
                              Price is required.
                           </div>
                           </div>
                           
                        </div>
                        <div class="col-md-5 mb-4 ">
                           <label for="InputName" class="form-label small-text2">Choose marriage celebrant</label>
                           

                           <select class="js-placeholder-single-input js-select2 form-control" name="marriage_celebrant[]" multiple="multiple">
                          
                              @foreach($celebrants as $celebrant)
                                 <option value="{{$celebrant['id']}}" data-badge="" data-select2-id="{{$celebrant['id']}}">{{$celebrant['first_name']}}</option>
                              @endforeach

                           </select>
                        </div>
                        <div class="col-md-12 mb-4 d-flex flex-column position-relative">
                           <label for="photos" class="form-label small-text2 mb-20">Upload cover photos *</label>

                           <div class="drop-zone text-center">
                           <?php  $required = 'required';
                           $imageName = (isset($data->cover_image)) ? $data->cover_image:'';
                           ?>
                              @if(isset($data->cover_image) && !empty($data->cover_image))
                                 <?php 
                              
                                    $path = asset('uploads/images/locations/'.$data->cover_image);
                                    $type = pathinfo($path, PATHINFO_EXTENSION);
                                    $imgData = file_get_contents($path);
                                    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($imgData);
                                    $required = '';

                                 ?>
                                 <div class="drop-zone__thumb" data-label="{{$data->cover_image}}" style="background-image: url({{$base64}})"></div>
                                 <input type="hidden" name="cover_image_from_request" value="{{$imageName}}">
                              @else
                                 
                                 <span class="drop-zone__prompt text-center d-flex flex-column py-5 text-center">
                                    <img src="/images/icons/jpg-logo.svg" class="img-fluid jpg-icon">
                                    <span class="dark-blue-100 h4 text-center">Drop your photos here, or <span class="turquoise-100 text-decoration cursor-pointer">browse file</span></span>
                                 </span>
                              @endif
                             
                              <input type="file" name="cover_image" class="drop-zone__input" {{$required}}>
                              <div class="invalid-feedback" style="position: absolute;bottom: -30px;left: 20px;text-align: left;z-index: 1;"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Cover photo is required.</div>
                           </div>
                        </div>
                        <div class="col-md-12 mb-4 d-flex flex-column partner-gallery-upload-box position-relative">
                           <label for="gallery" class="form-label small-text2 mb-20">Upload gallery photos *</label>
                           <?php  $gallery_required = 'required'?>
                           <div class="upload__box position-relative">
                              <div class="upload__btn-box">
                                 <label class="theme-btn primary-btn ">
                                    <p class="mb-0"> <img src="/images/icons/photo.svg"  class="img-fluid me-2">Upload images</p>
                                    <input type="file" multiple="" name="location_images[]" data-max_length="20" id="upload__inputfile" class="upload__inputfile">
                                    
                                    <div class="invalid-feedback images_required" style="
                                       font-size: 0.875em;font-weight: 400;position: absolute;bottom: -30px;left: 20px;text-align: left;z-index: 1;"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Images are required
                                    </div>
                                 </label>
                              </div>
                              @if(isset($data->request_location_images) && !empty($data->request_location_images))
                              <div class="upload__img-wrap">
                              
                                 <?php $image_Arr =[];?>
                                 <input type="hidden" name="image_id" id="image_id">
                                 @foreach($data->request_location_images as $keys=>$images)
                                 <?php 
                             
                                    $path = asset('uploads/images/locations/'.$images['image']);
                                    $type = pathinfo($path, PATHINFO_EXTENSION);
                                    $imgData = file_get_contents($path);
                                    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($imgData);

                                    $image_Arr[] = $images['id'];

                                 ?>
                                 
                                 <div class='upload__img-box'>
                                    <div style='background-image: url({{$base64}})' data-number='{{$keys}}' data-file='{{$images["image"]}}' data-image_id="{{$images['id']}}" class='img-bg'><div class='upload__img-close'></div>
                                    </div>
                                 </div>
                                
                                 @endforeach
                                 <input type="hidden" name="image_id_request" class="image_id_request" value="{{implode(',',$image_Arr)}}">
                              </div>
                              @else
                                 <div class="upload__img-wrap"></div>
                                 @endif
                           </div>
                        </div>
                        <div class="col-md-5 mb-4 keyAdvantage">
                           
                           @if(isset($data['request_location_advantages']) && count($data['request_location_advantages'])>0)
                              @foreach($data['request_location_advantages'] as $key=>$advantages)
                                 <div class="row keyDiv">
                                    <div class="col-10 col-sm-8 col-md-6 ">
                                       <label for="Key" class="form-label small-text2">Key advantages of site</label>
                                       <input type="text" placeholder="Type here" value="{{ (isset($advantages->key_advantages)) ? $advantages->key_advantages : '' }}" class="form-control body-1 netural-100" name="key_advantages[]" id="Key">
                                    </div>
                                    <div class="col-2 col-sm-4 col-md-6 col-lg-5">
                                       <label for="Key" class="form-label small-text2 d-block">&nbsp;</label>
                                       <a class="cross-icon" onclick="remove(`keyDiv`,this)"><img src="/images/icons/cross.svg" class="img-fluid"></a>
                                    </div>
                                 </div>
                              @endforeach
                           @else
                              <div class="row ">
                                    <div class="col-10 col-sm-8 col-md-6  ">
                                       <label for="Key" class="form-label small-text2">Key advantages of site</label>
                                       <input type="text" placeholder="Type here" value="" class="form-control body-1 netural-100" name="key_advantages[]" id="Key">
                                    </div>
                              </div>
                        
                           @endif
                        </div>
                        <div class="col-12 mb-4">
                           <a class="d-flex add-link" onclick="appendHtml('keyAdvantage', 'advantage')">
                              <div class="align-self-center mr-6"><img src="/images/icons/add-primary.svg" class="img-fluid"></div>
                              <div class="align-self-center">Add key advantages of site</div>
                           </a>
                        </div>
                        <div class="col-md-12 mb-4">
                           <label for="ceremonyplace" class="form-label small-text2">Why have your ceremony at this place</label>
                           <textarea class="form-control body-1 netural-100" id="ceremonyplace" placeholder="Type here" rows="10" name="why_this_location">{{ isset($data['why_this_location']) ? $data['why_this_location'] : old('why_this_location') }}</textarea>
                        </div>
                        <div class="col-md-12 mb-4">
                           <label for="customterms" class="form-label small-text2">Custom Terms</label>
                           <textarea class="form-control body-1 netural-100" id="customterms" placeholder="Type here" name="custom_terms" rows="10">{{ isset($data['custom_terms']) ? $data['custom_terms'] : old('custom_terms') }}</textarea>
                        </div>
                        <div class="col-md-5 mb-4">
                           <label for="weather" class="form-label small-text2">Wet Weather Option</label>
                           <input type="text" pattern="\S(.*\S)?" placeholder="Type here" class="form-control body-1 netural-100" name="weather_option" id="weather" value="{{ isset($data['custom_terms']) ? $data['custom_terms'] : old('custom_terms') }}">
                        </div>
                        <div class="col-md-5 mb-4">
                           <label for="gettingthere" class="form-label small-text2">Getting there</label>
                           <input type="text" pattern="\S(.*\S)?" placeholder="Type here" class="form-control body-1 netural-100" name="getting_there" id="gettingthere" value="{{ isset($data['getting_there']) ? $data['getting_there'] : old('getting_there') }}">
                        </div>
                        <div class="col-md-12 mb-4">
                           <input class="form-check-input me-2" type="checkbox" name="custom_location" id="location" value="1"  autocomplete="off">
                           <label class="form-check-label body-1" for="customlocation">
                           Is this a Custom Location?
                           </label>
                        </div>
                        <div class="col-md-5 mb-4">
                           <label for="age" class="form-label small-text2">Filter criteria *</label>
                           <?php
                              $selected_filter = [];
                              if(isset($data['request_location_criteria']) && !empty($data['request_location_criteria'])){
                                 foreach($data['request_location_criteria'] as $key=>$criteria){
                              
                                    $selected_filter[] = $criteria->location_category;
                                 }  
                              }
                           ?>
                           <select name="location_category[]" id="selectinput1" class="js-example-basic-multiple form-control" multiple required>
                              
                             
                              @foreach($filters as $filter)
                                 <option value="{{$filter->id}}" {{ (in_array($filter->id, $selected_filter)) ? 'selected' : '' }}>{{$filter->name}}</option>

                              @endforeach
                           </select>
                           <div class="invalid-feedback">
                             Filter is required.
                           </div>
                        </div>
                        <h2 class="h3 neutral-100 mb-20">Combination Package</h2>
                        
                        <div class="col-12 partnerpackageContainer">
                           @if(isset($data['request_location_packages']) && count($data['request_location_packages'])>0)
                           <input type="hidden" id="deleted_count" value="{{count($data['request_location_packages'])}}">
                              @foreach($data['request_location_packages'] as $key=>$packages)
                                 <div class="row partnerpackageDiv">
                                    <div class="col-md-5 mb-4">
                                       <label for="partner" class="form-label small-text2">Select partner</label>
                                       <select class="js-placeholder-single-input form-control select_partner" onchange="findPackage('/../get-packages',this,{{$key}})" id="partner-{{$key}}" name="partners[{{$key}}][partner_id]">
                                          <option value="">Select Partner</option>
                                          @foreach($partners as $partner)
                                             <option value="{{$partner['user']['id']}}" {{ (isset($packages['partner_id']) && $packages['partner_id'] == $partner['user']['id']) ? 'selected' : '' }}>{{$partner['user']['name']}}</option>

                                          @endforeach
                                       
                                       </select>
                                       <div class="invalid-feedback">
                                             Partner is required.
                                       </div>
                                    </div>
                                    <div class="col-md-5 mb-4 select_packages">
                                       <label for="package" class="form-label small-text2">Select Package</label>
                                       <select class="js-placeholder-single-input form-control packages" name="partners[{{$key}}][package_id]" id="package-{{$key}}">
                                       @foreach($partnerspackages as $partnerspackage)
                                          @if($packages['package_id'] == $partnerspackage['id'])

                                          <option value="{{$partnerspackage['id']}}" {{ (isset($packages['package_id']) && $packages['package_id'] == $partnerspackage['id']) ? 'selected' : '' }}>{{$partnerspackage['package_name']}} -  {{number_format($partnerspackage['total_fee'])}}</option>
                                          @endif

                                       @endforeach
                                       </select>
                                       
                                       <div class="invalid-feedback">
                                             Package is required.
                                       </div>
                                    </div>
                                    <div class="col-2 ">
                                       <label for="InputName" class="form-label small-text2 d-block">&nbsp;</label>
                                       <a class="cross-icon"><img src="/images/icons/cross.svg" class="img-fluid" onclick="remove('partnerpackageDiv',this,'partnerpackageContainer','location')"></a>
                                    </div>
                                 </div>
                              @endforeach
                           @else
                              <div class="row partnerpackageDiv">
                                 <div class="col-md-5 mb-4">
                                    <label for="partner" class="form-label small-text2">Select partner </label>
                                    <select class="js-placeholder-single-input form-control select_partner" onchange="findPackage('/get-packages',this,'0')" id="partner-0" name="partners[0][partner_id]">
                                       <option value="">Select Partner</option>
                                       @foreach($partners as $partner)
                                          <option value="{{$partner['user']['id']}}">{{$partner['user']['name']}}</option>

                                       @endforeach
                                    
                                    </select>
                                    <div class="invalid-feedback">
                                          Partner is required.
                                    </div>
                                 </div>
                                 <div class="col-md-5 mb-4 select_packages">
                                    <label for="package" class="form-label small-text2">Select Package</label>
                                    <select class="js-placeholder-single-input form-control packages" name="partners[0][package_id]" id="package-0">
                                       <option value="">Select Packages</option>
                                    
                                    </select>
                                    
                                    <div class="invalid-feedback">
                                          Package is required.
                                    </div>
                                 </div>
                                 <div class="col-2 ">
                                    <label for="InputName" class="form-label small-text2 d-block">&nbsp;</label>
                                    <a class="cross-icon"><img src="/images/icons/cross.svg" class="img-fluid" onclick="remove('partnerpackageDiv',this,'partnerpackageContainer')"></a>
                                 </div>
                              </div>
                           @endif
                        </div>
                        <div class="col-12 mb-4">
                           <a class="d-flex add-link" onclick="appendHtml('partnerpackageContainer', 'locationpackage',partners,'partnerpackageDiv')">
                              <div class="align-self-center mr-6"><img src="/images/icons/add-primary.svg" class="img-fluid"></div>
                              <div class="align-self-center cursor-pointer">Add other partners</div>
                           </a>
                        </div>
                        <div class="col-12 mt-3">
                        <button class="theme-btn primary-btn" type="submit">Save</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('elements.admin.location.js')
@endsection