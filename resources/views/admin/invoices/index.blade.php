@extends('layouts.panels')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
         @include('elements.common.admin-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-4">
         @include('elements.common.panel-header')
         <div class="row mb-3 align-items-center ">
            <div class="col-lg-12  col-xl-9 mb-3 mb-xl-0">
               <ul class="nav theme-tabs payment-tabs" role="tablist" onclick="addTabToUrl(event,'/all-payments/')">
                  <li class="nav-item" role="presentation">
                     <a class="nav-link active" id="couple-invoice" data-bs-toggle="tab" data-bs-target="#invoice-of-couple" href="#" aria-selected="true" role="tab">Invoice from couples</a>
                  </li>
                  <li class="nav-item" role="presentation">
                     <a class="nav-link" id="celebrants-invoice" data-bs-toggle="tab" data-bs-target="#invoice-of-celebrants" href="#" aria-selected="false" tabindex="-1" role="tab">invoice of marriage celebrant</a>
                  </li>
                  <li class="nav-item" role="presentation">
                     <a class="nav-link" id="partners-invoice" data-bs-toggle="tab" data-bs-target="#invoice-of-partners" href="#" aria-selected="false" tabindex="-1" role="tab">invoice of partners</a>
                  </li>
                  <li class="nav-item" role="presentation">
                     <a class="nav-link" id="referrers-invoice" data-bs-toggle="tab" data-bs-target="#invoice-of-referrers" href="#" aria-selected="false" tabindex="-1" role="tab">invoice of referrers</a>
                  </li>
               </ul>
            </div>
            <div class=" col-xl-3 text-end ">
               <div class="form-group has-search  position-relative">
                  <input type="text" class="form-control" placeholder="Search invoice" onkeyup="searchWithoutTabs('/search-by-invoice',this.value, 'simpletabs')">
                  <span class="fa fa-search form-control-feedback" ></span>
                </div>
            </div>
         </div>
         @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show">
               {{ session()->get('message') }}
               <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
         @endIf
         <div class="tab-content" id="tabContent">
            @include('elements.admin.payments.filter')
            <div class="tab-pane fade show active couple-invoice" id="invoice-of-couple" role="tabpanel" aria-labelledby="couple-invoice">
               @include('elements.admin.payments.couple-invoice')
             
            </div>
            <div class="tab-pane fade celebrants-invoice searchResult" id="invoice-of-celebrants" role="tabpanel" aria-labelledby="celebrants-invoice">
               
               @include('elements.admin.payments.celebrants-invoice')

            </div>
            <div class="tab-pane fade partners-invoice" id="invoice-of-partners" role="tabpanel" aria-labelledby="partners-invoice">
               
               @include('elements.admin.payments.partners-invoice')

            </div>
            <div class="tab-pane fade referrers-invoice" id="invoice-of-referrers" role="tabpanel" aria-labelledby="referrers-invoice">
               @include('elements.admin.payments.referrers-invoice')

            </div>
         </div>
      </div>
   </div>
</div>
@include('pages.js')
@include('admin.marriages.js')
@include('pages.alert.tax-invoice')
@include('pages.alert.change_status')
@endsection