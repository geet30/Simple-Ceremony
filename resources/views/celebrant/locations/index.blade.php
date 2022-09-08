@extends('layouts.panels')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
         @include('elements.celebrant.celebrant-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-md-4">
         @include('elements.panel-header')
         @if (\Session::has('message'))
            <div class="alert {{\Session::get('class')}}">
                  <ul class="mb-0"> <li>{!! \Session::get('message') !!}</li></ul>
            </div>
         @endif
         <div class="row pt-31">

            <div class="col-md-8 col-xl-9 d-flex align-self-center">
               <div class="dropdown ">
                  <a class="btn" role="button">
                  <img src="/images/location-page/filter-icon.svg" class="fliter-icon" alt="Filter Icon">
                  </a>
                  <div class="select-with-checkbox">
                     <select name="filter_by_categories" id="selectinput" class="js-placeholder-single-input js-select2 form-control location_categories_button searchingMultiple" multiple="multiple">
                        <optgroup label="Status">
                           <option value="1" data-badge="">Active</option>
                           <option value="2" data-badge="">Inactive</option>
                           <option value="0" data-badge="">Pending</option>
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
                  <input type="text" class="form-control" placeholder="Search" onkeyup="searchWithoutTabs('/all-locations',this.value, 'celebrantLocations', '1')">
               </div>
            </div>
            <div class="align-self-center col-md-4 col-xl-3 d-grid mt-3 mt-md-0">
               <a class="theme-btn primary-btn d-flex justify-content-center" href="{{url('all-locations/create')}}">
               <img class="me-2" src="/images/icons/add.svg" alt="shopping-icon">
               Request new location
               </a>
            </div>
         </div>
        
         <div class="row pt-4">
     
            <div class="col-12">
               <div class="table-responsive celebrantLocations searchResult" id="celebrantLocations">
                  @include('celebrant.locations.listing')
                 
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('elements.celebrant.location.delete-alert')
@endsection