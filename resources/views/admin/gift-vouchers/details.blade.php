
@extends('layouts.panels')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
         @include('elements.common.admin-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-4">
         @include('elements.common.panel-header')
         <a href="index" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-80"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
         <div class="row">
            <div class="col-lg-6 col-xl-6">
               <h2 class="neutral-100 h2 mb-20">Add title voucher here</h2>
               <h2 class="neutral-100 h2 mb-20">$500</h2>
               <p class="subheader-1 black mb-30">Voucher number : 92101921</p>
               <p class="neutral-100 body-3-regular mb-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis neque in erat maximus vulputate a sit amet ipsum. Quisque placerat, arcu at pellentesque fermentum, nunc nisl condimentum mi, eu tristique nibh leo non ante. Praesent nec rhoncus mi, eu faucibus risus. Cras tristique a arcu ut aliquet. Praesent eu bibendum magna, sed congue nisl. Praesent consequat tortor eget justo dignissim, eget vehicula sapien blandit.</p>
               <a class="theme-btn primary-btn d-inline-block" href="edit-voucher">Edit</a>
            </div>
            <div class="col-lg-6 col-xl-6 mt-3 mt-lg-0 gift-voucher-detail-image">
               <img src="/images/gift-voucher-details-1.png" class="w-100 img-fluid mt-27 mb-27" alt="gift voucher Image">
            </div>
         </div>
      </div>
   </div>
@endsection