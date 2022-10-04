@extends('layouts.panels')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-md-3 col-lg-2 p-0">
         @include('elements.common.user-sidebar')
      </div>
      <div class="col-md-9 col-lg-10 px-md-4">
         @include('elements.common.panel-header')
         <a href="{{url('user/overview')}}" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
        <form method="post" action="{{route('user.payment')}}">
            {{ csrf_field() }}

            <div class="row">
                
                
                <div class="col-md-12">
                    <h3 class="h3 Neutral/100 mt-4 mb-4">Payment</h3>
                </div>
            
                <!-- <div class="col-md-6 mb-4">
                    <label for="InputName" class="form-label small-text2">Input your Voucher code here, if you have one</label>
                    <input type="text" placeholder="Type here" class="form-control body-1 netural-100" name="name" id="InputName">
                </div> -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <button type="submit" id="checkout-button"><img class="img-fluid w-100" src="/images/booking-form/visa-card.svg" alt="Visa Card"></button>
                        </div>
                    
                    </div>
                </div>
                </div>
                
            </div>
        </form>



  <script src="https://js.stripe.com/v3/"></script>
  @endsection