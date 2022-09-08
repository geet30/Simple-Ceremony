@extends('layouts.panels')
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
      @include('elements.panel-header')
         <div class="row">
            <div class="col-12 mb-30">
               <a href="/locations" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
            </div>
            <div class="col-12">
               <div class="card panel-card">
                  <div class="card-title pb-4 mb-0">
                     <h1 class="h3 neutral-100 ">Add new location</h1>
                     <p class="subheader-3 neutral-100 mb-0">These are your available locations</p>
                  </div>
                  <div class="card-body">
                  @if (\Session::has('message'))
                     <div class="alert {{\Session::get('class')}}">
                           <ul class="mb-0"> <li>{!! \Session::get('message') !!}</li></ul>
                     </div>
                  @endif
                  @if($errors->any())
                        <div class="alert alert-danger mb-3 alert-block">
                           <button type="button" class="close" data-dismiss="alert">×</button>  
                           {{$errors->first()}}
                        </div>
                  @endif
                  <form class="row g-3 needs-validation" novalidate  method="POST" action="{{route('all-locations.store')}}" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="custom_location_id" value="{{ isset($data['id']) ? $data['id'] : '' }}">
                       
                        <div class="col-md-5 mb-4">
                           <label for="Location" class="form-label small-text2">Location *</label>
                           <input type="text" placeholder="Type the name location" class="form-control body-1 netural-100" name="name" value="{{ isset($data['location_name']) ? $data['location_name'] : old('name') }}" id="Location" required>
                           <div class="invalid-feedback">
                              Location name is required.
                           </div>
                        </div>
                        <div class="col-md-5 mb-4">
                           <label for="Address" class="form-label small-text2">Address *</label>
                           <input type="text" placeholder="Type the address here" class="form-control body-1 netural-100" name="address" value="{{ isset($data['street_address']) ? $data['street_address'] : old('address') }}" id="Address" required>
                           <div class="invalid-feedback">
                              Address is required.
                           </div>
                        </div>
                        <div class="col-md-5 mb-4">
                           <label for="Town" class="form-label small-text2">Suburb/ Town *</label>
                           <input type="text" placeholder="Type the Suburb/ Town here" class="form-control body-1 netural-100" value="{{ isset($data['suburb']) ? $data['suburb'] : old('town') }}"  name="town" id="Town" required>
                           <div class="invalid-feedback">
                              Suburb is required.
                           </div>
                        </div>
                        <div class="col-md-5 mb-4">
                           <label for="Code" class="form-label small-text2">Post Code *</label>
                           <input type="text"  placeholder="Type the Post Code code here" class="form-control body-1 netural-100" value="{{ isset($data['post_code']) ? $data['post_code'] : old('post_code') }}" name="post_code" id="Code" required>
                           <div class="invalid-feedback">
                              Post code is required.
                           </div>
                        </div>
                        <div class="col-md-5 mb-4">
                           <label for="Google" class="form-label small-text2">Google coordinates</label>
                           <input type="text" placeholder="Type Google coordinates here" class="form-control body-1 netural-100" name="coordinates" id="Google" value="{{old('coordinates')}}">
                        </div>
                        <div class="col-md-5 mb-4">
                           <label for="directions" class="form-label small-text2">Specific directions</label>
                           <input type="text" placeholder="Type specific directions here" class="form-control body-1 netural-100" name="direction" id="directions" value="{{old('direction')}}">
                        </div>
                        <div class="col-md-5 mb-4">
                           <label for="Generallocation" class="form-label small-text2">General location</label>
                           <input type="text" placeholder="Type general location here" class="form-control body-1 netural-100" name="general_location" id="Generallocation" value="{{old('general_location')}}">
                        </div>
                        <div class="col-md-5 mb-4">
                           <label for="Locationnumber" class="form-label small-text2">Location number</label>
                           <input type="number" placeholder="Type location number here" class="form-control body-1 netural-100" name="loc_number" id="Locationnumber" value="{{old('loc_number')}}">
                           
                        </div>
                        <div class="col-md-5 mb-4">
                           <label for="Price" class="form-label small-text2">Price *</label>
                           <div class=" theme-input-group">
                              <input type="number" step="0.01" placeholder="Type price here" class="form-control body-1 netural-100 pl-30" value="{{old('price')}}" name="price" id="Price" required>
                              <img src="/images/icons/dollor.svg" class="img-fluid left-icon">
                              <div class="invalid-feedback">
                              Price is required.
                           </div>
                           </div>
                           
                        </div>
                       
                        <div class="col-md-12 mb-4 d-flex flex-column position-relative">
                           <label for="photos" class="form-label small-text2 mb-20">Upload cover photos *</label>
                           <div class="drop-zone text-center">
                              <span class="drop-zone__prompt text-center d-flex flex-column py-5 text-center">
                              <img src="/images/icons/jpg-logo.svg" class="img-fluid jpg-icon">
                              <span class="dark-blue-100 h4 text-center">Drop your photos here, or <span class="turquoise-100 text-decoration cursor-pointer">browse file</span></span>
                              </span>
                              <input type="file" name="cover_image" class="drop-zone__input" required>
                              <div class="invalid-feedback" style="position: absolute;bottom: -30px;left: 20px;text-align: left;z-index: 1;"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Cover photo is required.</div>
                           </div>
                        </div>
                        <div class="col-md-12 mb-4 d-flex flex-column partner-gallery-upload-box position-relative">
                           <label for="gallery" class="form-label small-text2 mb-20">Upload gallery photos *</label>
                           <div class="upload__box">
                              <div class="upload__btn-box">
                                 <label class="theme-btn primary-btn ">
                                    <p class="mb-0"> <img src="/images/icons/photo.svg"  class="img-fluid me-2">Upload photos</p>
                                    <input type="file" multiple="" name="location_images[]" data-max_length="20" id="upload__inputfile" class="upload__inputfile" required>
                                    <div class="invalid-feedback" style="
                                       font-size: 0.875em;font-weight: 400;position: absolute;bottom: -30px;left: 20px;text-align: left;z-index: 1;"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Images are required
                                    </div>
                                 </label>
                              </div>
                              <div class="upload__img-wrap"></div>
                           </div>
                        </div>
                        <div class="col-md-5 mb-4 keyAdvantage">
                           <label for="Key" class="form-label small-text2">Key advantages of site</label>
                           <div class="row">
                              <div class="col-10 col-sm-8 col-md-6 ">
                                 <input type="text" placeholder="Type here" class="form-control body-1 netural-100" 
                                 name="key_advantages[]" id="Key">
                              </div>
                              
                           </div>
                        </div>
                        <div class="col-12 mb-4">
                           <a class="d-flex add-link" onclick="appendHtml('keyAdvantage', 'advantage')">
                              <div class="align-self-center mr-6"><img src="/images/icons/add-primary.svg" class="img-fluid"></div>
                              <div class="align-self-center">Add key advantages of site</div>
                           </a>
                        </div>
                        <div class="col-md-12 mb-4">
                           <label for="ceremonyplace" class="form-label small-text2">Why have your ceremony at this place</label>
                           <textarea class="form-control body-1 netural-100" id="ceremonyplace" placeholder="Type here" rows="10" name="why_this_location">{{old('why_this_location')}}</textarea>
                        </div>
                        <div class="col-md-12 mb-4">
                           <label for="customterms" class="form-label small-text2">Custom Terms</label>
                           <textarea class="form-control body-1 netural-100" id="customterms" placeholder="Type here" name="custom_terms" rows="10">{{old('custom_terms')}}</textarea>
                        </div>
                        <div class="col-md-5 mb-4">
                           <label for="weather" class="form-label small-text2">Wet Weather Option</label>
                           <input type="text" placeholder="Type here" class="form-control body-1 netural-100" name="weather_option" id="weather" value="{{old('weather_option')}}">
                        </div>
                        <div class="col-md-5 mb-4">
                           <label for="gettingthere" class="form-label small-text2">Getting there</label>
                           <input type="text" placeholder="Type here" class="form-control body-1 netural-100" name="getting_there" id="gettingthere" value="{{old('getting_there')}}">
                        </div>
                        <div class="col-md-12 mb-4">
                           <input class="form-check-input me-2" type="checkbox" name="custom_location" id="location" value="1"  autocomplete="off">
                           <label class="form-check-label body-1" for="customlocation">
                           Is this a Custom Location?
                           </label>
                        </div>
                        <div class="col-md-5 mb-4">
                           <label for="age" class="form-label small-text2">Filter criteria *</label>
                           <select name="location_category[]" id="selectinput1" class="js-example-basic-multiple form-control" multiple required>
                             
                              @foreach($filters as $filter)
                                  <option value="{{$filter->id}}" data-badge>{{$filter->name}}</option>

                              @endforeach
                           </select>
                           <div class="invalid-feedback">
                             Filter is required.
                           </div>
                        </div>
                        <h2 class="h3 neutral-100 mb-20">Combination Package</h2>
                        
                        <div class="col-12 keyPartnerPackage">
                           <div class="row">
                              <div class="col-md-5 mb-4">
                                 <label for="partner" class="form-label small-text2">Select partner   </label>
                                 <select class="js-placeholder-single-input form-control select_partner" onchange="findPackage('/../get-packages',this,'0')" id="partner-0" name="partners[0][partner_id]">
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
                              <!-- <div class="col-2 ">
                                 <label for="InputName" class="form-label small-text2 d-block">&nbsp;</label>
                                 <a class="cross-icon"><img src="/images/icons/cross.svg" class="img-fluid"></a>
                              </div> -->
                           </div>
                        </div>
                        <div class="col-12 mb-4">
                           <a class="d-flex add-link" onclick="appendHtml('keyPartnerPackage', 'locationpackage',partners)">
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