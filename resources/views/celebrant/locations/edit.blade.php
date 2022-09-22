@extends('layouts.panels')
@section('page-name') {{ $data->name }} @stop
@section('content')
<script>
   var partners = '<?php echo json_encode($partners);?>';
</script>
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
         @include('elements.celebrant.celebrant-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-md-4">
         @include('elements.common.panel-header')
         <div class="row">
            <div class="col-12 mb-30">
               <a href="/all-locations/{{ $data->id }}" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
            </div>
            <div class="col-12">
               <form class="needs-validation row loader_class" novalidate method="POST" action="{{route('all-locations.update',$data->id)}}" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  @if($errors->any())
                  <div class="alert alert-danger mb-3 alert-block">
                     <button type="button" class="close" data-dismiss="alert">×</button>  
                     {{$errors->first()}}
                  </div>
                  @endif
                  <div class="col-md-5 mb-4">
                     <label for="name" class="form-label small-text2">Location</label>
                     <input type="text" value="{{ (isset($data->name)) ? $data->name : '' }}" class="form-control body-1 netural-100" name="name" id="name">
                  </div>
                  <div class="col-md-5 mb-4">
                     <label for="address" class="form-label small-text2">Address</label>
                     <input type="text" value="{{ (isset($data->address)) ? $data->address : '' }}" class="form-control body-1 netural-100" name="address" id="address">
                  </div>
                  <div class="col-md-5 mb-4">
                     <label for="town" class="form-label small-text2">Suburb/ Town</label>
                     <input type="text" value="{{ (isset($data->town)) ? $data->town : '' }}" class="form-control body-1 netural-100" name="town" id="town">
                  </div>
                  <div class="col-md-5 mb-4">
                     
                     <label for="post_code" class="form-label small-text2">Post Code</label>
                     <input type="text" value="{{ (isset($data->post_code)) ? $data->post_code : '' }}" class="form-control body-1 netural-100" name="post_code" id="post_code">
                  </div>
                  <div class="col-md-5 mb-4">
                     <label for="coordinates" class="form-label small-text2">Google coordinates</label>
                     <input type="text" value="{{ (isset($data->coordinates)) ? $data->coordinates : '' }}" class="form-control body-1 netural-100" name="coordinates" id="coordinates">
                  </div>
                  <div class="col-md-5 mb-4">
                     <label for="direction" class="form-label small-text2">Specific directions</label>
                     <input type="text" value="{{ (isset($data->direction)) ? $data->direction : '' }}" class="form-control body-1 netural-100" name="direction" id="direction">
                  </div>
                  <div class="col-md-5 mb-4">
                     <label for="general_location" class="form-label small-text2">General location</label>
                     <input type="text" value="{{ (isset($data->general_location)) ? $data->general_location : '' }}" class="form-control body-1 netural-100" name="general_location" id="general_location">
                  </div>
                  <div class="col-md-5 mb-4">
                     <label for="loc_number" class="form-label small-text2">Location number</label>
                     <input type="text" value="{{ (isset($data->loc_number)) ? $data->loc_number : '' }}" class="form-control body-1 netural-100" name="loc_number" id="loc_number">
                  </div>
                  <div class="col-md-5 mb-4">
                     <label for="price" class="form-label small-text2">Price</label>
                     <div class=" theme-input-group">
                        <input type="text" value="{{ (isset($data->price)) ? round($data->price,0) : '' }}" class="form-control body-1 netural-100 pl-30" name="price" id="price">
                        <img src="/images/icons/dollor.svg" class="img-fluid left-icon">
                     </div>
                  </div>
                  
                  <div class="col-md-12 mb-5 d-flex flex-column">
                     <label for="InputName" class="form-label small-text2 mb-20">Upload cover photos</label>
                     <div class="drop-zone text-center position-relative">
                        <?php  $required = 'required'?>
                           @if($data->cover_image && !empty($data->cover_image))
                              <?php 
                           
                                 $path = asset('uploads/images/locations/'.$data->cover_image);
                                 $type = pathinfo($path, PATHINFO_EXTENSION);
                                 $imgData = file_get_contents($path);
                                 $base64 = 'data:image/' . $type . ';base64,' . base64_encode($imgData);
                                 $required = '';

                              ?>
                              <div class="drop-zone__thumb" data-label="{{$data->cover_image}}" style="background-image: url({{$base64}})"></div>
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
                  <div class="col-md-12 mb-5 d-flex flex-column images_outer_div">
                     <label for="InputName" class="form-label small-text2 mb-20">Upload gallery photos</label>
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
                       
                        <div class="upload__img-wrap">
                        
                           @if($data->request_location_images && !empty($data->request_location_images))
                           <input type="hidden" name="image_id" id="image_id">
                           @foreach($data->request_location_images as $keys=>$images)
                           <?php 
                        
                              $path = asset('uploads/images/locations/'.$images['image']);
                              $type = pathinfo($path, PATHINFO_EXTENSION);
                              $imgData = file_get_contents($path);
                              $base64 = 'data:image/' . $type . ';base64,' . base64_encode($imgData);

                           ?>
                           
                           <div class='upload__img-box'>
                              <div style='background-image: url({{$base64}})' data-number='{{$keys}}' data-file='{{$images["image"]}}' data-image_id="{{$images['id']}}" class='img-bg'><div class='upload__img-close'></div>
                              </div>
                           </div>
                           @endforeach
                           @else
                           <div class="upload__img-wrap"></div>
                           @endif
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12 mb-4 keyAdvantage">
                     
                        @if(isset($data['request_location_advantages']) && count($data['request_location_advantages'])>0)
                     
                           <!-- <input type="hidden" name="advantage_id" id="advantage_id"> -->
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
                     <label for="why_this_location" class="form-label small-text2">Why have your ceremony at this place</label>
                     <textarea class="form-control body-1 netural-100" id="why_this_location" name="why_this_location" rows="10">{{ (isset($data->why_this_location)) ? $data->why_this_location : '' }}</textarea>
                  </div>
                  <div class="col-md-12 mb-4">
                     <label for="custom_terms" class="form-label small-text2">Custom Terms</label>
                     <textarea class="form-control body-1 netural-100" id="custom_terms" rows="10" name="custom_terms">{{ (isset($data->custom_terms)) ? $data->custom_terms : '' }}
                     </textarea>
                  </div>
                  <div class="col-md-5 mb-4">
                     <label for="weather_option" class="form-label small-text2">Wet Weather Option</label>
                     <input type="text" value="{{ (isset($data->weather_option)) ? $data->weather_option : '' }}" class="form-control body-1 netural-100" name="weather_option" id="weather_option">
                  </div>
                  <div class="col-md-5 mb-4">
                     <label for="getting_there" class="form-label small-text2">Getting there</label>
                     <input type="text" value="{{ (isset($data->getting_there)) ? $data->getting_there : '' }}" class="form-control body-1 netural-100" name="getting_there" id="getting_there">
                  </div>
                  <div class="col-md-12 mb-4">
                  <input type="hidden" value="0" name="custom_location">
                     <input class="form-check-input me-2" type="checkbox" name="custom_location" id="custom_location"  autocomplete="off" value="1" 
                     @if(isset($data->custom_location) && $data->custom_location ==1)) checked @endif >
                     <label class="form-check-label body-1" for="location">
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
                  <div class="col-12 mt-3 mb-4">
                  <button class="theme-btn primary-btn" type="submit">Save</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@include('elements.admin.location.js')
@endsection