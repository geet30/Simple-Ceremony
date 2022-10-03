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
               <section class="pt-40 add-ons-detail">
                  <div class="row pb-60">
                     <div class="col-lg-12 col-xl-12 mt-3 mt-md-0">
                        <div class="row">
                           <div class="col-lg-12 d-md-flex justify-content-between">
                              <div class="align-self-center">
                                 <h2 class="h3 neutral-100">Bradfield park</h2>
                              </div>
                           </div>
                           <div class="col-12 image-block pt-3">
                              <div class="row">
                                 <div class="col-md-12 col-lg-6 mb-3 mb-lg-0">
                                    <div class=" position-relative">
                                       <img src="/images/user/add-ons-1.png" class="img-fluid  left-img " alt="add-ons-image ">
                                       <div class="all-pictures-btn">
                                          <a href="/user/add-ons-gallery" class="theme-btn primary-btn d-inline-flex">
                                          <img class="me-2" src="/images/add-ons/add-ons-details/photo-icon.svg" alt="shopping-icon">
                                          See all pictures
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-12 col-lg-6 right-img  ">
                                    <div class="row">
                                       <div class="col-sm-6">
                                          <img src="/images/user/add-ons-2.png" class="img-fluid mb-3 photo" alt="add-ons-image ">
                                          <img src="/images/user/add-ons-3.png" class="img-fluid photo mb-3 mb-sm-0 " alt="add-ons-image ">
                                       </div>
                                       <div class="col-sm-6">
                                          <img src="/images/user/add-ons-4.png" class="img-fluid mb-3 photo" alt="add-ons-image ">
                                          <div class="position-relative">
                                             <img src="/images/user/add-ons-5.png" class="img-fluid photo " alt="add-ons-image ">
                                             <img src="/images/play-icon.svg" class="img-fluid  play-icon" alt="add-ons-image ">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-12 col-lg-12 col-xl-9 mt-5 mb-5">
                                    <div class="row mb-3">
                                       <div class="col-12">
                                          <h3 class="h3 neutral-100">Facilities</h3>
                                          <p class="body-3">We provide various facilities for you</p>
                                       </div>
                                    </div>
                                    <div class="row gy-3">
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
                                 <div class="col-md-12 mb-5">
                                    <div class="row">
                                       <div class="col-12">
                                          <h3 class="h3 neutral-100 mb-5">Why have your marriage ceremony at Kissing Point Park?</h3>
                                          <p class="body-3">The name says it all "Kissing Point" will be on your marriage certificate ;-).<br><br>
                                             With a number of spots right down on the Parramatta River, Kissing Point Park offers a water side wedding location in a unique Sydney riverside setting, with the tranquility of the river with kayaks, motorboats and the sailing boats from the Concord Sailing Club right next door.<br><br>
                                             The park offers a number of vantage points for your wedding location, all with views across the water.  The Riverside walking &amp; bicycle track runs through it, connecting the park through to Meadowbank and beyond. There’s a playground for the kids, plus BBQ areas and numerous shady spots.<br><br>
                                             Nearby cafes in Putney Village offer options for a celebration afterwards, or Top Ryde Shopping Village is a short 5 minute drive away.   Consider a photo opportunity and lunch, take the ferry direct from Kissing Point Wharf to Sydney Rowing Club at Abbotsford, just 13 minutes away or to Eat Street Parramatta, just 35 minutes up the river.<br><br>
                                             You can have up to 20 people (the 2 of you and 18 guests) at your ceremony. This can not be increased.<br><br>
                                             Rain. Now it doesn't happen often, but when it does you will need to shelter under trees or bring umbrellas - how romantic. There are also several small undercover areas along the river. These spaces do not require a booking - it’s simply first in, best dressed!
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="row">
                                       <div class="col-12">
                                          <h3 class="h3 neutral-100 mb-3">Location</h3>
                                          <p class="body-3 text-black mb-4"><img class="me-2" src="/images/single-location/single-location-icon.svg" alt="Single Location Icon">Alfred St S, Milsons Point NSW 2061, Australia</p>
                                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.637456914615!2d151.20927081554817!3d-33.84745908066219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12aef2e9f08045%3A0x32d189ddcd6f84ce!2sSimple%20Ceremonies!5e0!3m2!1sen!2sin!4v1654854264298!5m2!1sen!2sin" width="100%" height="264" style="border:0;border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection