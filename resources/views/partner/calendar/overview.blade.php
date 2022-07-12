@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-md-3 col-lg-2 p-0">
         @include('elements.partner-sidebar')
      </div>
      <div class="col-md-9 col-lg-10 px-md-4">
         @include('elements.partner-panel-header')
         <div class="card panel-card">
            <div class="card-body">
               <div class="row">
                  <div class="col-md-12">
                     <a role="button" data-bs-toggle="modal" data-bs-target="#calendarmodal">
                     <img src="/images/marriage-calendar.png" alt="Calendar" class="img-fluid">
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('elements.marriage-calendar-info')
@endsection
