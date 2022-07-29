@extends('layouts.panels') 
@section('content')

<div class="container pt-4">
   <div class="row">
      <div class="col-md-12">
      <a href="/location" class="theme-btn secondary-btn d-inline-flex back-btn"><img class="me-3" src="/images/single-location/left-icon.svg" alt="Back Icon">Back</a>
      </div>
   </div>
</div>

<section class="single-location-page-header pb-100 pt-4">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-6">
            <div class="slider slider-for mb-11 location-detail-slider">
            @foreach($data['location_images'] as $images)
               <div>
                     <img src="{{ asset('/uploads/images/locations/'.$images['image']) }}" class="w-100 img-fluid" alt="slider Image">
               </div>
            @endforeach
             
            </div>
            <div class="slider slider-nav">
            @foreach($data['location_images'] as $images)
             <div>
               <img src="{{ asset('/uploads/images/locations/'.$images['image']) }}" class="w-100 img-fluid" alt="slider Image">
             </div>
           
            @endforeach
              
            </div>
         </div>
         <div class="col-md-6">
            <h1 class="mb-5">
               <span class="paragraph netural-100">${{ $data->price}}</span><br>
               <span class="h1 netural-100">{{$data->name}}
                    @if(isset($data->address) && !empty($data->address))
                        ,{{$data->address}}
                    @endif
                    @if(isset($data->town) && !empty($data->town))
                        ,{{$data->town}}
                    @endif
                    </span>
            </h1>
            <div class="d-lg-flex">
               <a href="{{route('booking.getlocationCalender',$data->id)}}" class="theme-btn primary-btn me-lg-4 mb-3 mb-lg-0 d-flex justify-content-center ">Continue booking</a>
               <a href="#details-information" class="theme-btn primary-btn-border d-flex justify-content-center">Read detail information</a>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="facilities py-50">
   <div class="container">
      <div class="row">
         <div class="col-md-3">
            <h2>
               <p class="h2 netural-100 mb-3">Facilities</p>
               <p class="body-3 text-black">We provide various facilities for you</p>
            </h2>
         </div>
         <div class="col-md-9">
            <div class="row gy-3">
               <div class="col-md-4 d-flex align-items-start">
                  <img class="me-4" src="/images/single-location/check-icon.svg" alt="Check Icon">
                  <p class="body-3 text-black mb-0">Add name facilities here</p>
               </div>
               <div class="col-md-4 d-flex align-items-start">
                  <img class="me-4" src="/images/single-location/check-icon.svg" alt="Check Icon">
                  <p class="body-3 text-black mb-0">Add name facilities here</p>
               </div>
               <div class="col-md-4 d-flex align-items-start">
                  <img class="me-4" src="/images/single-location/check-icon.svg" alt="Check Icon">
                  <p class="body-3 text-black mb-0">Add name facilities here</p>
               </div>
               <div class="col-md-4 d-flex align-items-start">
                  <img class="me-4" src="/images/single-location/check-icon.svg" alt="Check Icon">
                  <p class="body-3 text-black mb-0">Add name facilities here</p>
               </div>
               <div class="col-md-4 d-flex align-items-start">
                  <img class="me-4" src="/images/single-location/check-icon.svg" alt="Check Icon">
                  <p class="body-3 text-black mb-0">Add name facilities here</p>
               </div>
               <div class="col-md-4 d-flex align-items-start">
                  <img class="me-4" src="/images/single-location/check-icon.svg" alt="Check Icon">
                  <p class="body-3 text-black mb-0">Add name facilities here</p>
               </div>
               <div class="col-md-4 d-flex align-items-start">
                  <img class="me-4" src="/images/single-location/check-icon.svg" alt="Check Icon">
                  <p class="body-3 text-black mb-0">Add name facilities here</p>
               </div>
               <div class="col-md-4 d-flex align-items-start">
                  <img class="me-4" src="/images/single-location/check-icon.svg" alt="Check Icon">
                  <p class="body-3 text-black mb-0">Add name facilities here</p>
               </div>
               <div class="col-md-4 d-flex align-items-start">
                  <img class="me-4" src="/images/single-location/check-icon.svg" alt="Check Icon">
                  <p class="body-3 text-black mb-0">Add name facilities here</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section id="details-information" class="kissing-point-park py-100">
   <div class="container">
      <div class="row">
         <div class="col-12 col-md-7 mx-auto">
            <h2>
               <p class="h2 netural-100 mb-3 text-center">Why have your marriage ceremony at {{$data->name}}</p>
            </h2>
         </div>
         <div class="col-md-12">
               <p class="body-3 text-black mb-0 mt-5">{{$data->why_this_location}}</p>
         </div>
      </div>
   </div>
</section>

<section class="single-location py-80">
   <div class="container">
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
</section>

<section class="py-100 ">
   <div class="container">
      <div class="row gy-3">
         <div class="col-md-12">
            <h2 class="pb-3">
               <p class="h2 netural-100 mb-0">See others location</p>
            </h2>
         </div>
         @include('elements.user.location.location', ['title' => 'locations', '' => '', 'locations' => $locations])
    
      </div>
   </div>
</section>
@endsection