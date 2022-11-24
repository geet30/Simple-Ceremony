@extends('layouts.panels')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
         @include('elements.common.admin-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-4">
         @include('elements.common.panel-header')
         <div class="row">
            <div class="col-md-12 mb-4">
               <a class="theme-btn primary-btn d-inline-block" href="#">
                  <img class="me-2" src="/images/icons/add.svg" alt="shopping-icon">Add new type
              </a>
            </div>
            <div class="col-md-12">
               <div class="table-responsive typeCeremoniesListing" id="typeCeremoniesListing">
                  @include('elements.admin.type-ceremonies.listing')
               </div>
            </div>
         </div>
      </div>
   </div>
   @include('elements.common.calander')
   @endsection