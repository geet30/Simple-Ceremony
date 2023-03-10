<?php 
    $package_details =[];
          
    foreach($get_location_addons as $key=>$packages){
        foreach($packages['packages'] as $key=>$package){
            
            $package_details[$package['id']]['package_name'] = $package['package_name'];
            $package_details[$package['id']]['total_fee'] = $package['total_fee'];
        }
    } 
    
?>
<form method="post" action="/post-booking-user-payment">
{{ csrf_field() }}

<div class="row">
    <div class="col-4 col-md-3 col-lg-3 col-xl-2 mb-3">
        <p class="paragraph Neutral/100">Step 3</p>
    </div>
    <div class="col-8 col-md-9 col-lg-9 col-xl-10">
        <div class="progress body-1">
            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
        </div>
    </div>
    <div class="col-md-12">
        <h3 class="h3 Neutral/100 mt-4 mb-4">Payment</h3>
    </div>
    {{-- <ul>
    @foreach($package_details as $details)
    <li>
        {{ $details['package_name']}} - ${{ number_format($details['total_fee'])}}
    </li>

    @endforeach
    </ul> --}}
    <div class="col-md-6 mb-4 coupon_check">
        <label for="coupon_code" class="form-label small-text2">Input your Voucher code here, if you have one</label>
        <input type="text" placeholder="Type here" class="form-control body-1 netural-100" name="coupon_code" id="coupon_code" onkeyup="validateCoupon(this)">
        <div class="invalid-feedback coupon_invalid"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Invalid Coupon</div>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4 mb-4">
            
            
            <button type="submit" id="checkout-button"><img class="img-fluid w-100" src="/images/booking-form/visa-card.svg" alt="Visa Card"></button>
            
            </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 d-flex justify-content-end">
        <a href="#list-profile" class="theme-btn primary-btn d-inline-flex back_button" data-id="list-profile-list">
            <img class="me-2" src="/images/single-location/left-icon.svg" alt="Back Icon">Back
        </a>
    </div>
</div>
</form>

<div class="modal-success-form modal fade cancel-ceremony-popup" id="show_payment_success_alert" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-body text-center">
            <img class="mt-4" src="/images/success-check.svg" alt="Exclamation">
            <h4 class="h4 netural-100 mb-4 mt-4">You have successfully completed the payment process</h4>
            <p style="font-size: 13px;">we will send the portal credentials to your email</p>
            <div class="d-flex justify-content-center mt-3">
             <a href="{{route('user-login')}}" role="button" class="theme-btn primary-btn me-3">Go to Portal</a>
             <a href="{{url('location')}}" role="button" class="theme-btn primary-btn-border">Back to home</a>
            </div>
         </div>
       </div>
     </div>
  </div>

  <script src="https://js.stripe.com/v3/"></script>