@extends('layouts.panels')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
            @include('elements.common.admin-sidebar')
        </div>
        <div class="col-10 col-md-9 col-lg-10 px-4">
         @include('elements.common.panel-header')
         <div class="row mb-4 mt-3">
            <div class="col-md-8 col-xl-9 d-flex align-self-center">
               <div class="form-group has-search w-100 position-relative">
                  <span class="fa fa-search form-control-feedback"></span>
                  <input type="text" class="form-control" placeholder="Search partners" onkeyup="searchWithoutTabs('/partner',this.value, 'partnersListing', '1')">
               </div>
            </div>
            <div class="align-self-center col-md-4 col-xl-3 d-grid mt-3 mt-md-0">
               <a class="theme-btn primary-btn d-flex justify-content-center" href="/partner/create">
               <img class="me-2" src="/images/icons/add.svg" alt="shopping-icon">
               Add new partner
               </a>
            </div>
         </div>
         @if (\Session::has('message'))
            <div class="alert {{\Session::get('class')}}">
                  <ul class="mb-0"> <li>{!! \Session::get('message') !!}</li></ul>
            </div>
         @endif
         <div class="table-responsive partnersListing" id="partnersListing">
                @include('elements.admin.partner.listing')
            
         </div>
        </div>
    </div>
</div>
@endsection