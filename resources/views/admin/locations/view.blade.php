@extends('layouts.panels')
@section('page-name') {{ $data->name }} @stop
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
         @include('elements.common.admin-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-4">
         @include('elements.common.panel-header')
         <div class="row">
            <div class="col-12 mb-30">
               <a href="/locations/all-requests" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
            </div>

            <div class="col-12">
               <div class="row ">
                  <?php //dd($data);?>

                  <div class="col-lg-6 col-xl-5 location-detail-slider">
                  
                     <div class="slider slider-for mb-11 ">
                     @if(isset($data['cover_image']) && !empty($data['cover_image']))
                       
                              <div>
                                 <img src="{{ asset('/uploads/images/locations/'.$data['cover_image']) }}" class="w-100 img-fluid" alt="slider Image">
                              </div>
                           
                     </div>
                     @else
                  
                           <div>
                              <img src="{{ asset('images/locations/default.png')}}" class="w-100 img-fluid" alt="slider Image">
                           </div>
                           
                     </div>
                     @endif
                     <div class="slider slider-nav">
                     @if(isset($data['request_location_images']) && !empty($data['request_location_images']))
                        @foreach($data['request_location_images'] as $images)
                        <div>
                           <img src="{{ asset('/uploads/images/locations/'.$images['image']) }}" class="w-100 img-fluid" alt="slider Image">
                        </div>
                        @endforeach
                     @endif
                     
                     </div>
                  </div>
                  <div class="col-lg-6  mt-3 mt-lg-0">
                     <div class="d-flex justify-content-end mb-47">
                        @if(isset($data->status) && $data->status== 0)
                        <a class="theme-btn  primary-btn me-2" href="{{route('locations.create',$data->id)}}">Confirm</a>

                        <a onClick="changeStatus('/change-location-status',{{$data->id}},2,'detail','tab_id','location')" class="cursor-pointer theme-btn  primary-btn-border me-2">Decline</a>
                        @endif
                        <!-- <a href="edit" class="theme-btn  primary-btn-border">  <img class="me-2" src="/images/icons/edit-primary.svg" alt="shopping-icon">
                        Edit</a> -->
                     </div>
                     <h1 class="mb-0 col-xl-10">
                        <span class="h1 netural-100">{{$data->name}}
                           @if(isset($data->address) && !empty($data->address))
                           {{$data->address}}
                           @endif
                           @if(isset($data->town) && !empty($data->town))
                                 ,{{$data->town}}
                           @endif
                        </span>
                     </h1>
                  </div>
                  <div class="col-12 admin-pt-92">
                     <p class="body-3-medium  text-black">The name says it all "{{ (isset($data->name)) ? $data->name:'' }}"will be on your marriage certificate ;-).</p>
                     <p class="body-3-medium  text-black">
                        With a number of spots right down on the Parramatta River, Kissing Point Park offers a water side wedding location in a unique Sydney riverside setting, with the tranquility of the river with kayaks, motorboats and the sailing boats from the Concord Sailing Club right next door.
                     </p>
                     <p class="body-3-medium  text-black">
                        The park offers a number of vantage points for your wedding location, all with views across the water. The Riverside walking & bicycle track runs through it, connecting the park through to Meadowbank and beyond. There’s a playground for the kids, plus BBQ areas and numerous shady spots.
                     </p>
                     <p class="body-3-medium  text-black">
                        Nearby cafes in Putney Village offer options for a celebration afterwards, or Top Ryde Shopping Village is a short 5 minute drive away. Consider a photo opportunity and lunch, take the ferry direct from Kissing Point Wharf to Sydney Rowing Club at Abbotsford, just 13 minutes away or to Eat Street Parramatta, just 35 minutes up the river.
                     </p>
                     <p class="body-3-medium  text-black">
                        You can have up to 20 people (the 2 of you and 18 guests) at your ceremony. This can not be increased.
                     </p>
                     <p class="body-3-medium  text-black">
                        Rain. Now it doesn't happen often, but when it does you will need to shelter under trees or bring umbrellas - how romantic. There are also several small undercover areas along the river. These spaces do not require a booking - it’s simply first in, best dressed!
                     </p>
                  </div>
               </div>
               <div class="col-12 pt-92">
                  <div class="row">
                     <div class=" col-lg-3 mb-3 mb-lg-0">
                        <h2>
                           <p class="h2 netural-100 mb-3">Facilities</p>
                           <p class="body-3 text-black">We provide various facilities for you</p>
                        </h2>
                     </div>
                     <div class="col-lg-9">
                        <div class="row gy-3">
                           <div class="col-md-6 col-lg-4 d-flex align-items-start">
                              <img class="me-4" src="/images/single-location/check-icon.svg" alt="Check Icon">
                              <p class="body-3 text-black mb-0">Add name facilities here</p>
                           </div>
                           <div class="col-md-6 col-lg-4 d-flex align-items-start">
                              <img class="me-4" src="/images/single-location/check-icon.svg" alt="Check Icon">
                              <p class="body-3 text-black mb-0">Add name facilities here</p>
                           </div>
                           <div class="col-md-6  col-lg-4 d-flex align-items-start">
                              <img class="me-4" src="/images/single-location/check-icon.svg" alt="Check Icon">
                              <p class="body-3 text-black mb-0">Add name facilities here</p>
                           </div>
                           <div class="col-md-6 col-lg-4 d-flex align-items-start">
                              <img class="me-4" src="/images/single-location/check-icon.svg" alt="Check Icon">
                              <p class="body-3 text-black mb-0">Add name facilities here</p>
                           </div>
                           <div class="col-md-6 col-lg-4 d-flex align-items-start">
                              <img class="me-4" src="/images/single-location/check-icon.svg" alt="Check Icon">
                              <p class="body-3 text-black mb-0">Add name facilities here</p>
                           </div>
                           <div class="col-md-6 col-lg-4 d-flex align-items-start">
                              <img class="me-4" src="/images/single-location/check-icon.svg" alt="Check Icon">
                              <p class="body-3 text-black mb-0">Add name facilities here</p>
                           </div>
                           <div class="col-md-6 col-lg-4 d-flex align-items-start">
                              <img class="me-4" src="/images/single-location/check-icon.svg" alt="Check Icon">
                              <p class="body-3 text-black mb-0">Add name facilities here</p>
                           </div>
                           <div class="col-md-6 col-lg-4 d-flex align-items-start">
                              <img class="me-4" src="/images/single-location/check-icon.svg" alt="Check Icon">
                              <p class="body-3 text-black mb-0">Add name facilities here</p>
                           </div>
                           <div class="col-md-6 col-lg-4 d-flex align-items-start">
                              <img class="me-4" src="/images/single-location/check-icon.svg" alt="Check Icon">
                              <p class="body-3 text-black mb-0">Add name facilities here</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 pt-92 pb-60">
                  <div class="row align-items-center">
                     <div class="col-md-5">
                        <h2>
                           <p class="h2 netural-100 mb-3">Location</p>
                           <p class="body-3 text-black"><img class="me-2" src="/images/single-location/single-location-icon.svg" alt="Single Location Icon">87 Waterview St, Putney NSW 2112, Australia</p>
                        </h2>
                     </div>
                     <div class="col-md-7">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3314.388273684139!2d151.1002113155478!3d-33.82809618066748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12a5044d5afde5%3A0xb820b3d4e25fe47!2s87%20Waterview%20St%2C%20Putney%20NSW%202112%2C%20Australia!5e0!3m2!1sen!2sin!4v1654588852420!5m2!1sen!2sin" width="100%" height="249" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      @include('elements.celebrant.addmarriage-celebrant')
      @endsection