
@extends('layouts.panels')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
         @include('elements.common.admin-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-4">
         @include('elements.common.panel-header')
         <a href="{{url('/gift-voucher/all-active-gift-vouchers')}}" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-80"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
         <div class="row">
            <div class="col-lg-6 col-xl-6">
               <h2 class="neutral-100 h2 mb-20">{{$gift_voucher->voucher_title}}</h2>
               <h2 class="neutral-100 h2 mb-20">${{$gift_voucher->voucher_price}}</h2>
               <p class="subheader-1 black mb-30">Voucher number : {{$gift_voucher->voucher_number}}</p>
               <p class="neutral-100 body-3-regular mb-30">{{$gift_voucher->voucher_description}}</p>
               <a class="theme-btn primary-btn d-inline-block" href="{{route('gift-vouchers.edit',$gift_voucher->id)}}">Edit</a>
            </div>
            <div class="col-lg-6 col-xl-6 mt-3 mt-lg-0 gift-voucher-detail-image">
               <img src="{{ asset('/uploads/images/vouchers/'.$gift_voucher['voucher_image']) }}" class="w-100 img-fluid mt-27 mb-27" alt="gift voucher Image">
            </div>
         </div>
      </div>
   </div>
@endsection