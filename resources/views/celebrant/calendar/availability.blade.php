@extends('layouts.app')
@section('content')
<div class="container-fluid">
<div class="row">
   <div class="col-2 col-md-3 col-lg-2 px-0">
      @include('elements.celebrant-sidebar')
   </div>
   <div class="col-10 col-md-9 col-lg-10 px-md-4">
      @include('elements.celebrant.panel-header')
      <div class="row pt-31 mb-4">
         <div class="col-md-8 col-xl-9 d-flex align-self-center">
            <div class="dropdown ">
               <a class="btn" role="button">
               <img src="/images/location-page/filter-icon.svg" class="fliter-icon" alt="Filter Icon">
               </a>
               <div class="select-with-checkbox">
                  <select name="filter_by_categories" id="selectinput" class="js-placeholder-single-input js-select2 form-control" multiple="multiple">
                     <optgroup label="Location">
                        <option value="O1" data-badge="">Blue point</option>
                        <option value="O2" data-badge="">Tech Park</option>
                        <option value="O3" data-badge="">Bradfield Park</option>
                     </optgroup>
                  </select>
               </div>
            </div>
            <div class="form-group has-search w-100 ms-4 position-relative">
               <span class="fa fa-search form-control-feedback"></span>
               <input type="text" class="form-control" placeholder="Search couple name">
            </div>
         </div>
         <div class="align-self-center col-md-4 col-xl-3 d-grid mt-3 mt-md-0">
            <a class="theme-btn primary-btn d-flex justify-content-center" href="/celebrant/add">
            <img class="me-2" src="/images/icons/add.svg" alt="shopping-icon">
            Add new availability
            </a>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-4 col-xl-5 align-self-center">
            <ul class="nav theme-tabs border-0">
               <li class="nav-item">
                  <a class="nav-link active" id="month-tab" data-bs-toggle="tab" data-bs-target="#month" href="#">Month</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link " id="week-tab" data-bs-toggle="tab" data-bs-target="#week" href="#">Week</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link " id="day-tab" data-bs-toggle="tab" data-bs-target="#day" href="#">Day</a>
               </li>
            </ul>
         </div>
         <div class="col-lg-8 col-xl-7 mt-3 mt-xl-0 align-self-center">
            <div class="d-md-flex h-100 justify-content-lg-end">
               <div class="me-md-2 mb-3 mb-md-0">
                  <a role="button" class="theme-btn primary-btn d-flex justify-content-center " >Share with google calendar</a>
               </div>
               <div class="me-md-2 mb-3 mb-md-0">
                  <a role="button" class="theme-btn primary-btn d-flex justify-content-center " data-bs-toggle="modal" data-bs-target="#calendarmodal">
                  <img class="me-2" src="/images/icons/date.svg" alt="calander-icon">
                  March, 2022
                  </a>
               </div>
               <div class="me-md-2 mb-3 mb-md-0"> <a role="button" class="theme-btn primary-btn d-flex justify-content-center h-100" >
                  <img class="" src="/images/icons/arrow-left.svg" alt="allow-left">
                  </a>
               </div>
               <div> <a role="button" class="theme-btn primary-btn d-flex justify-content-center h-100" >
                  <img class="" src="/images/icons/arrow-right.svg" alt="allow-left">
                  </a>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-12">
            <!-- tab content -->
            <div class="tab-content" id="tabContent">
              
               <div class="tab-pane fade show active" id="month" role="tabpanel" aria-labelledby="month-tab">
               <img src="/images/calendar-celebrant-month.png" class="img-fluid">
               </div>
               <div class="tab-pane fade " id="week" role="tabpanel" aria-labelledby="week-tab">
                 <img src="/images/calendar-celebrant-week.png" class="img-fluid">
               </div>
               <div class="tab-pane fade " id="day" role="tabpanel" aria-labelledby="day-tab">
                 <img src="/images/calendar-celebrant-day.png" class="img-fluid">
               </div>
            </div>
            <!-- tab content -->
         </div>
      </div>
   </div>
</div>
@include('elements.calander')
@endsection