@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
   <div class="col-2 col-md-3 col-lg-2 px-0">
         @include('elements.admin-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-4">
      @include('elements.panel-header')
         <div class="row mb-4">
       
            <div class="col-md-8 col-xl-9 d-flex align-self-center">
            <div class="dropdown">
               <a class="btn">
                  <img src="/images/location-page/filter-icon.svg" class="fliter-icon" alt="Filter Icon">
                </a>
                <div class="select-with-checkbox">
                  <select name="filter_by_categories" id="selectinput" class="js-placeholder-single-input js-select2 form-control" multiple="multiple">
                     <option value="O1" data-badge="">All</option>
                     <option value="O2" data-badge="">Harbour</option>
                     <option value="O3" data-badge="">Beach</option>
                     <option value="O4" data-badge="">Park</option>
                     <option value="O5" data-badge="">River</option>
                     <option value="O6" data-badge="">Outdoors</option>
                     <option value="O7" data-badge="">Indoors</option>
                     <option value="O7" data-badge="">Unique</option>
                  </select>
               </div>
            </div>
            <div class="form-group has-search w-100 ms-4 position-relative">
              <input type="text" class="form-control" placeholder="Search">
               <span class="fa fa-search form-control-feedback"></span>
            </div>
         </div>
            <div class="align-self-center col-md-4 col-xl-3 d-grid mt-3 mt-md-0">
               <a class="theme-btn primary-btn d-flex justify-content-center" href="/admin/add-location">
               <img class="me-2" src="/images/icons/add.svg" alt="shopping-icon">
               Add new location
               </a>
            </div>
         </div>
         <div class="row">
            @include('elements.admin-location', ['title' => 'locations', '' => '', 'locations' => [
            [
            'image' => '/images/admin/location/v1.jpg',
            'price' => ' $350',
            'name' => ' Blues point reserve',
            ],
            [
            'image' => '/images/admin/location/v2.jpg',
            'price' => ' $350',
            'name' => ' Bradfield park',
            ],
            [
            'image' => '/images/admin/location/v3.jpg',
            'price' => ' $350',
            'name' => ' Tench park, penrith',
            ],
            [
            'image' => '/images/admin/location/v2.jpg',
            'price' => ' $350',
            'name' => ' Bradfield park',
            ],
            [
            'image' => '/images/admin/location/v1.jpg',
            'price' => ' $350',
            'name' => ' Blues point reserve',
            ],
            [
            'image' => '/images/admin/location/v2.jpg',
            'price' => ' $350',
            'name' => ' Bradfield park',
            ],
            [
            'image' => '/images/admin/location/v3.jpg',
            'price' => ' $350',
            'name' => ' Tench park, penrith',
            ],
            [
            'image' => '/images/admin/location/v2.jpg',
            'price' => ' $350',
            'name' => ' Bradfield park',
            ],
            [
            'image' => '/images/admin/location/v1.jpg',
            'price' => ' $350',
            'name' => ' Blues point reserve',
            ],
            [
            'image' => '/images/admin/location/v2.jpg',
            'price' => ' $350',
            'name' => ' Bradfield park',
            ],
            [
            'image' => '/images/admin/location/v3.jpg',
            'price' => ' $350',
            'name' => ' Tench park, penrith',
            ],
            [
            'image' => '/images/admin/location/v2.jpg',
            'price' => ' $350',
            'name' => ' Bradfield park',
            ],
            ]])
         </div>
      </div>
   </div>
</div>
@endsection