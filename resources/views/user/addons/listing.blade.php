
@extends('layouts.panels')
@section('content')

<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 p-0">
         @include('elements.common.user-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-md-4">
         @include('elements.common.panel-header')
         <div class="col-md-9 mt-3 mb-4 d-flex">
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
               <input type="text" class="form-control" placeholder="Search package" onkeyup="searchWithoutTabs('/search-booking-addon',this.value,'searchAddon', '')">
               <span class="fa fa-search form-control-feedback" ></span>
            </div>
         </div>
         <div class="card panel-card">
            <div class="card-body">
               <section class="add-ons pb-100 ">
                  <div class="row searchAddon">
                     <div class="col-md-12">
                        <h2 class="pb-20 h3 netural-100">  Top list add-ons  </h2>
                     </div>
                   @include('elements.addons.top-list-add-ons', ['title' => 'Top list add-ons', 'path' => 'user-addons-detail', 'addons' => $addons])
                     
                    
                  </div>
               </section>
               <section class="add-ons pt-45 pb-100 ">
                  <div class="row">
                     <div class="col-md-12 ">
                        <h2 class="pb-20 h3 netural-100">  All add-ons </h2>
                     </div>
                     @include('elements.addons.all-add-ons', ['title' => 'All add-ons','path' => 'user-addons-detail',  'addons' => $addons])
                  </div>
               </section>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection