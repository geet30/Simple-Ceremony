@extends('layouts.panels')
@section('css')
<link rel="stylesheet" href="./fullcalendar/main.css">
<link rel="stylesheet" href="./fullcalendar/calendar.css">
@endsection

@section('content')
<div class="container-fluid">
<div class="row">
   <div class="col-2 col-md-3 col-lg-2 px-0">
      @include('elements.celebrant.celebrant-sidebar')
   </div>
   <div class="col-10 col-md-9 col-lg-10 px-md-4">
      @include('elements.common.panel-header')
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
                <input type="text" class="form-control" placeholder="Search couple name">
               <span class="fa fa-search form-control-feedback"></span>
            </div>
         </div>
         <div class="align-self-center col-md-4 col-xl-3 d-grid mt-3 mt-md-0">
            <a class="theme-btn primary-btn d-flex justify-content-center" href="{{ route('calendar.create') }}">
            <img class="me-2" src="/images/icons/add.svg" alt="shopping-icon">
            Add new availability
            </a>
         </div>
      </div>
      
      <div class="row">
         <div class="col-12 mb-5">
            <!-- tab content -->
            <div id='calendar-js'></div>
            
            <!-- tab content -->
         </div>
      </div>
   </div>
</div>
@include('elements.common.calander')

@endsection

@section('scripts')

<script src="./fullcalendar/main.js"></script>
<script src="./fullcalendar/init.js"></script>
<script src="https://rawgit.com/moment/moment/2.2.1/min/moment.min.js"></script>
<script>
   initCalander('calendar-js',@json($booking))
</script>
@endsection