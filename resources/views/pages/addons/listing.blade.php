@extends('layouts.master') 
@section('content')
<section class="add-ons pt-45 pb-100 ">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
               <div class="d-flex">
                  <div class="me-3"><img src="images/info.svg" class="img-fluid" alt="info-icon"></div>
                  <div>
                     <p class="body-1 mb-0">Before booking below you will need to have booked your ceremony.</p>
                     <a href="/location" class="button-3">Register now</a>
                   
                  </div>
                 
                  <div><button type="button" class="theme-btn-close" data-bs-dismiss="alert" aria-label="Close"><img src="images/cross-blue-white.svg" class="img-fluid" alt="cross-icon"></button></div>
               </div>
             
               
            </div>
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
               <div class="d-flex">
                  <div class="me-3"><img src="images/info.svg" class="img-fluid" alt="info-icon"></div>
                  <div>
                     <p class="body-1 mb-0">Not all Add-ons are available at all site. Please check below before booking</p>
                   
                  </div>
                 
                  <div><button type="button" class="theme-btn-close" data-bs-dismiss="alert" aria-label="Close"><img src="images/cross-blue-white.svg" class="img-fluid" alt="cross-icon"></button></div>
               </div>
            </div>
         </div>
         <div class="col-md-12  mt-5 d-flex">
        
            <div class="dropdown">
               <a class="btn">
               <img src="/images/location-page/filter-icon.svg" class="fliter-icon" alt="Filter Icon">
               </a>
               <div class="select-with-checkbox">
                  <select name="filter_by_categories" id="selectinput" class="js-placeholder-single-input js-select2 form-control searchingMultiple location_categories_button" multiple="multiple">
                     <optgroup label="Category">
                     @foreach($category as $key=>$addon)
                    
                        <option value="{{ $addon->id }}" data-badge="">{{ $addon->name }}</option>
                     @endforeach
                     </optgroup>
                     <optgroup label="Location">
                        @foreach ($locations as $location)
                           <option value="{{ $location->id }}" data-badge="">{{ $location->name }}
                              </option>
                           @endforeach
                     </optgroup>
                  </select>
               </div>
            </div>
            <div class="form-group has-search w-100 ms-4 position-relative">
               <span class="fa fa-search form-control-feedback"></span>
               
               
               <input type="text" class="form-control" placeholder="Search" onkeyup="searchWithoutTabs('search-booking-addon',this.value,'searchAddon', '')">
            </div>
         </div>
         <div class="row pt-45 searchAddon">
            <div class="col-md-12 pt-45">
               <h2 class="pb-20 h3 netural-100">  Top list add-ons  </h2>
            </div>
               @include('elements.addons.top-list-add-ons', ['title' => 'Top list add-ons', 'path' => 'add-ons-detail', 'addons' => $addons])
         </div>
      </div>
   </div>
</section>
<section class="add-ons pt-45 pb-100 ">
   <div class="container">
      <div class="row">
         <div class="col-md-12 ">
            <h2 class="pb-20 h3 netural-100">  All add-ons </h2>
         </div>
         
         @include('elements.addons.all-add-ons', ['title' => 'All add-ons', 'path' => 'add-ons-detail', 'addons' => $addons])
        
      </div>
   </div>
</section>
@endsection