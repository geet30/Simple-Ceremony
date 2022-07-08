@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
         @include('elements.celebrant-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-md-4">
         @include('elements.panel-header')
         <ul class="row add-on-list-nav p-0 mb-0 list-unstyled  mb-3 mt-3 ps-0">
            <li class="col-lg-6  col-xl-4  nav-item  mb-3">
               <div class="nav-link w-100" >
                  <div class="add-ons-nav d-flex">
                     <div class="add-ons-nav-image me-4">
                        <img src="/images/marriage-celebrant/icons/income.svg" alt="Total income">
                     </div>
                     <div class="add-ons-nav-data text-start ">
                        <h2 class="h3">$309</h2>
                        <p class="subheader-2">Total income</p>
                        <p class="mb-0"><span class="p5 color-green">20%</span><span class="small-text4 neutral-70"> increase compared to last month</span></p>
                     </div>
                  </div>
</div>
            </li>
            <li class="col-lg-6  col-xl-4  nav-item  mb-3" >
            <div class="nav-link w-100" >
                  <div class="add-ons-nav d-flex">
                     <div class="add-ons-nav-image me-4">
                        <img src="/images/marriage-celebrant/icons/revenue.svg" alt="Revenue">
                     </div>
                     <div class="add-ons-nav-data text-start ">
                        <h2 class="h3">$789</h2>
                        <p class="subheader-2">Revenue</p>
                        <p class="mb-0"><span class="p5 color-green">25%</span><span class="small-text4 neutral-70"> increase compared to last month</span></p>
                     </div>
                  </div>
</div>
            </li>
            <li class="col-lg-6  col-xl-4  nav-item  mb-3" >
            <div class="nav-link w-100" >
                  <div class="add-ons-nav d-flex">
                     <div class="add-ons-nav-image me-4">
                     <img src="/images/marriage-celebrant/icons/total-maariages.svg" alt="All add-ons">
                     </div>
                     <div class="add-ons-nav-data text-start ">
                        <h2 class="h3">1234</h2>
                        <p class="subheader-2">Total marriages</p>
                        <p class="mb-0"><span class="p5 color-red">20%</span ><span class="small-text4 neutral-70"> increase compared to last month</span></p>
                     </div>
                  </div>
</div>
            </li>
         </ul>
      
         <div class="row mb-4 pt-32">
            <div class="col-md-7 col-xl-8 d-flex align-self-center">
               <div class="dropdown">
                  <a class="btn">
                  <img src="/images/location-page/filter-icon.svg" class="fliter-icon" alt="Filter Icon">
                  </a>
                  <div class="select-with-checkbox">
                     <select name="filter_by_categories" id="selectinput" class="js-placeholder-single-input js-select2 form-control" multiple="multiple">
                        <optgroup label="Status">
                           <option value="O1" data-badge="">Blues point</option>
                           <option value="O2" data-badge="">Tench park</option>
                           <option value="O3" data-badge="">Bradfield park</option>
                        </optgroup>
                     </select>
                  </div>
               </div>
               <div class="form-group has-search w-100 ms-4 position-relative">
                  <span class="fa fa-search form-control-feedback"></span>
                  <input type="text" class="form-control" placeholder="Search location name">
               </div>
            </div>
            <div class="align-self-center col-md-5 col-xl-4 d-grid mt-3 mt-md-0 postion-relative">
               <a class="theme-btn primary-btn d-flex justify-content-center "  data-bs-toggle="modal" data-bs-target="#calendarmodal">
               <img class="me-2" src="/images/icons/date.svg" alt="shopping-icon">
               select a specific date
               </a>
               @include('elements.calander')
            </div>
         </div>
       <!--  -->
       <div class="row">
   <div class="col-12">
      <ul class="nav theme-tabs">
            <li class="nav-item">
               <a class="nav-link active" id="week-tab" data-bs-toggle="tab" data-bs-target="#week" href="#">Week</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" id="month-tab" data-bs-toggle="tab" data-bs-target="#month" href="#">Month</a>
            </li>
          </ul>
         <!-- tab content -->
         <div class="tab-content" id="tabContent">
            <div class="tab-pane fade show active" id="week" role="tabpanel" aria-labelledby="week-tab">
            @include('elements.celebrant.location.listing')
            </div>
            <div class="tab-pane fade" id="month" role="tabpanel" aria-labelledby="month-tab">
            @include('elements.celebrant.location.packages')
            </div>
         </div>
         <!-- tab content -->
   </div>
</div>
       <!--  -->
      </div>
   </div>
</div>
@include('elements.celebrant-note-popup')
@endsection