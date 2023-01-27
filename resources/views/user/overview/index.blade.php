@extends('layouts.panels')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-md-3 col-lg-2 p-0">
         @include('elements.common.user-sidebar')
      </div>
      <div class="col-md-9 col-lg-10 px-md-4">
         @include('elements.common.panel-header')
         <div class="card panel-card mt-4">
            <div class="card-body">
               <div class="row">
                  <div class="col-md-12 col-lg-12 col-xl-8 col-xxl-6">
                  <div class="alert alert-primary alert-dismissible" role="alert">
                     <div class="d-flex">
                        <div class="me-3"><img src="/images/info.svg" class="img-fluid" alt="info-icon"></div>

                        <div class="feedbackDiv">
                           <p class="body-1 mb-0">Do you want to update the password ?</p>
                           <p class="body-1 mb-0"><a href="{{url('user/profile')}}">Click here</a></p>
                        </div>
                     </div>
                  </div>
                     <div class="row">
                        <div class="col-md-12 col-lg-6 mb-4 mb-md-0 mb-lg-4">
                           <label class="form-label small-text2">Ceremony location</label>
                           <input type="text" value="{{$booking->location->name}}" class="form-control body-1 netural-100" readonly="">
                        </div>
                        <div class="col-md-12 col-lg-6 mb-4">
                           <label for="InputName" class="form-label small-text2 d-none d-md-inline-block"></label>
                           <div class="d-flex flex-column flex-md-row justify-content-md-between justify-content-lg-start">
                              <a data-bs-toggle="modal" data-bs-target="#reschedule_ceremony_popup" role="button" class="theme-btn primary-btn me-0 me-md-4 mb-3 mb-md-0 border-0 w-100">Reschedule</a>
                              <a  data-bs-toggle="modal" data-bs-target="#cancel_ceremony_popup" role="button" class="theme-btn primary-btn-border d-flex pe-auto justify-content-center w-100">Cancel</a>
                           </div>
                        </div>
                        <div class="col-md-12 mb-4">
                        <label class="form-label small-text2">Detail location
                            <!-- <a href="{{route('user-location',$booking->location->id)}}" class="ms-2 button-3 turquoise-100">See information</a> -->
                     </label>
                           <input type="text" value="{{$booking->location->address}} ,{{$booking->location->town}} ,{{$booking->location->post_code}}, {{config('env.COUNTRY')}}" class="form-control body-1 netural-100" readonly="">
                        </div>

 


                        <div id="pin-location" style="height: 300px; width:713px;"></div>      
                     
                        <div class="col-md-12 mb-4">
                           <label for="InputName" class="form-label small-text2">Pin Location</label>
                           <?php 
                          
                           $random =  Str::random(12);
                           $random_url = 'https://maps.google.com/maps?'.$random;
                           $lat = $booking->location->latitude;$lng =$booking->location->longitude;
                           ?>
                          
                           <button class="form-control body-1 netural-100" readonly=""><a href="https://maps.google.com/maps?z=5&t=m&q={{$lat}},{{$lng}}" target="_blank">{{$random_url}}</a></button>
                              
                        </div>
                        <div class="col-md-6 mb-4">
                           <label for="InputName" class="form-label small-text2">Date of ceremony</label>
                           <input type="text" value="{{date('M d,Y',strtotime($booking->booking_date))}}" class="form-control body-1 netural-100" readonly="">
                        </div>
                        <div class="col-md-6 mb-4">
                           <label for="InputName" class="form-label small-text2">Time</label>
                           <input type="text" value="{{$booking->booking_start_time}}" class="form-control body-1 netural-100" readonly="">
                        </div>
                        <div class="col-md-12 mb-5">
                           <label for="InputName" class="form-label small-text2">Name marriage celebrant</label>
                           <input type="text" value="{{(isset($booking->celebrant->first_name))?$booking->celebrant->first_name:'' }}" class="form-control body-1 netural-100" readonly="">
                        </div>
                        <div class="col-12 mb-2">
                           <div class="d-flex align-items-start align-items-md-center flex-column flex-md-row">
                              <h4 class="h4 neutral-100 mb-0">Add-ons</h4>
                              <a href="add-ons" class="ms-0 ms-md-2 mt-2 mt-md-0 button-3 turquoise-100">View add-ons available at this site</a>
                           </div>
                        </div>
                        <div class="col-12">
                            <div class="overview-add-ons">
                           @if(count($addons) > 0)
                            @foreach($addons as $booking_addon)
                              @foreach($booking_addon->packages as $package)

                               <div class="overview-add-ons-details mb-4">
                                  <div class="row">
                                     <div class="col-md-5 mb-4">
                                        <label for="InputName" class="form-label small-text2">Name package</label>
                                        
                                      
                                         <input type="text" value="{{$package->package_name}}" class="form-control body-1 netural-100" readonly=""> 
                                     </div>
                                     <div class="col-md-5 mb-4">
                                        <label for="InputName" class="form-label small-text2">Provider name</label>
                                        <input type="text" value="{{$package->user->name}}" class="form-control body-1 netural-100" readonly="">
                                     </div>
                                     <div class="col-md-2 mb-4 text-start ">
                                        <label for="InputName" class="form-label small-text2 text-start">Quantity</label>
                                        <input type="text" value="1" class="form-control body-1 netural-100 text-start" readonly="">
                                     </div>
                                  </div>
                                  <div class="row">
                                     <div class="col-md-12 mb-4">
                                        <div class="d-flex align-items-start align-items-md-center justify-content-between flex-column flex-md-row">
                                           <div class="d-flex align-items-start flex-column flex-lg-row mb-3 mb-md-0">
                                              <h3 class="h3 neutral-100 mb-0 me-3 mb-2 mb-lg-0">$ {{round($package->total_fee,0)}}</h3>
                                              
                                             <!-- <a role="button" data-bs-toggle="modal" data-bs-target="#pay_ceremony_popup" class="theme-btn primary-btn me-3">Pay</a>  -->
                                           </div>
                                           <span class="status registered thread">You got 1 comment in your thread!</span>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="row">
                                     <div class="col-md-12 mb-4">
                                        <div class="d-flex align-items-start justify-content-between flex-column flex-lg-row">
                                           <div class="d-flex align-items-start align-items-md-center flex-column flex-md-row mb-0 mb-md-4 mb-lg-0">
                                              <span class="body-3 netural-100 me-md-4 mb-2 mb-md-0">Minimal deposit 10%</span>
                                              <span class="netural-100 small-text2 me-md-4 mb-2 mb-md-0">Status</span>
                                              <span class="text-nowrap status {{config('env.addonStatusClass.'.$package->product->status)}} me-md-5 mb-3 mb-md-0">{{config('env.addonStatus.'.$package->product->status) }}</span>
                                           </div>
                                          <a href="{{route('package-detail',$package->id)}}" class="button-1 turquoise-100 text-decoration-none faq-link">See add-on details</a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                              @endforeach
                           @endforeach
                           @else
                              No addons added yet
                           @endif
                            </div>
                         </div>
                     </div>
                  </div>
                  <div class="col-md-12 col-lg-12 col-xl-4 col-xxl-5 offset-xxl-1 mt-5 mt-lg-0">
                     <div class="booking-process">
                        <ul class="booking-process-ul list-unstyled m-0 p-0">
                           <li class="active">
                              <span class="step-point"></span>
                              <div class="steps-information">
                                 <div class="steps-information-details">
                                    <span>{{config('ceremonyStatus.booking_status.'.$booking->status) }}</span>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <?php             
                              $carbon_date = \Carbon\Carbon::parse($booking->booking_date);
                              $one_month_calendar_date = $carbon_date->subMonth();
                              ?>
                              <span class="step-point"></span>
                              <div class="steps-information">
                                 <div class="steps-information-details">
                                    <span>Arrange call with marriage celebrant</span>
                                    <br>
                                    <span>Due date {{date('M d,Y',strtotime($one_month_calendar_date))}} <a href="{{url('user/list-to-do')}}" class="ms-2 button-3 turquoise-100">Read list to do</a></span>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <span class="step-point"></span>
                              <div class="steps-information">
                                 <div class="steps-information-details">
                                    <span>Complete NoIM <a href="/user/NoIM" class="ms-2 button-3 turquoise-100">Click here</a></span><br><br>
                                   
                                    <span>NoIM must be loaded no later than <br>{{date('M d,Y',strtotime($one_month_calendar_date))}}</span>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <span class="step-point"></span>
                              <div class="steps-information">
                                 <div class="steps-information-details">
                                    <span>Upload document :
                                       <ul>
                                          <li>Notice of Intended Marriage form</li>
                                          <li>ID</li>
                                       </ul>
                                    </span>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <span class="step-point"></span>
                              <div class="steps-information">
                                 <div class="steps-information-details">
                                    <span>NoIM Lodged</span>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <span class="step-point"></span>
                              <div class="steps-information">
                                 <div class="steps-information-details">
                                    <span>Choose / change add-ons</span>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <span class="step-point"></span>
                              <div class="steps-information">
                                 <div class="steps-information-details">
                                    <span>Marriage Registerd</span>
                                 </div>
                              </div>
                           </li>
                          
                        </ul>
                     </div>
                     <div class="create-invitation d-flex flex-column">
                        <img src="/images/user/create-invitation.svg" alt="Create invitation">
                        <a role="button" href="{{url('user/overview/invitation')}}" class="theme-btn primary-btn me-0 me-lg-4 mb-3 mb-md-0 border-0 w-100">Create invitation</a>
                        <!-- <a role="button" data-bs-toggle="modal" data-bs-target="#invitation_card_popup" class="theme-btn primary-btn me-0 me-lg-4 mb-3 mb-md-0 border-0 w-100">Create invitation</a> -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAspKv1oWLKCVesOm4bBIbmJdGUV61GQ6o&callback=initialize"  async defer></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script> -->
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAspKv1oWLKCVesOm4bBIbmJdGUV61GQ6o&callback=initLocation"  async defer></script>

<script>

var locations  = <?php echo json_encode($getBookinglocation);?>;
// initLocation('pin-location',@json($getBookinglocation));
var directionsDisplay,directionsService,map;
function initLocation() {
   console.log('location--',locations)
    var targetId= 'pin-location';
   var directionsService = new google.maps.DirectionsService();
   directionsDisplay = new google.maps.DirectionsRenderer();
   var myLatlng = new google.maps.LatLng(locations.latitude,locations.longitude);
   var mapOptions = { zoom:7, mapTypeId: google.maps.MapTypeId.ROADMAP, center: myLatlng }
   map = new google.maps.Map(document.getElementById(targetId), mapOptions);
   directionsDisplay.setMap(map);
   // To add the marker to the map, use the 'map' property
      var marker = new google.maps.Marker({
         position: myLatlng,
         map: map,
         title:"Hello World!"
      });
}

</script>

@include('elements.user.popup.cart-payment-popup')
@include('elements.user.invitation-card-popup')
@include('elements.user.pay-ceremony-popup')
@include('elements.user.popup.reschedule-ceremony-popup')
@include('elements.user.popup.cancel-ceremony-popup')
@include('elements.user.popup.reschedule-ceremony-sidebar')
@include('elements.user.calander')
@include('elements.user.order-marriage-certificate')

@endsection