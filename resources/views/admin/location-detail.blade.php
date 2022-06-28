@extends('layouts.app')
@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-md-3 col-lg-2">
   @include('elements.admin-sidebar')
</div>
<div class="col-md-9 col-lg-10">
   <div class="row">
      <div class="col-12 mb-30">
         <a href="/admin/location" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
      </div>
      <div class="col-12 mb-30">
         <div class="row">
            <div class="col-lg-8 col-xl-9 mb-3 mb-lg-0">
               <ul class="nav  theme-tabs">
                  <li class="nav-item">
                     <a class="nav-link active" id="information-tab" data-bs-toggle="tab" data-bs-target="#information" href="#">Information</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link " id="celebrants-tab" data-bs-toggle="tab" data-bs-target="#celebrants" href="#"  >List of marriage celebrants <span>(12)</span></a>
                  </li>
               </ul>
            </div>
            <div class="col-lg-4 col-xl-3 editinformation d-block">
               <a href="/admin/edit-location" class="theme-btn primary-btn d-flex justify-content-center ">
               <img class="me-2" src="/images/icons/edit.svg" alt="shopping-icon">
               Edit information
               </a>
            </div>
            <div class="col-lg-4 col-xl-3 addmarriage d-none">
               <a  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" class="theme-btn primary-btn d-flex justify-content-center ">
               <img class="me-2" src="/images/icons/add.svg" alt="shopping-icon">
               Add marriage celebrants
               </a>
            </div>
         </div>
      </div>
      <div class="col-12">
         <div class="tab-content" id="tabContent">
            <div class="tab-pane fade show active" id="information" role="tabpanel" aria-labelledby="information-tab">
               <div class="row align-items-center">
                  <div class="col-lg-6 col-xl-5 location-detail-slider">
                     <div class="slider slider-for mb-11 ">
                        <div>
                           <img src="/images/single-location/single-page-slider1.png" class="w-100 img-fluid" alt="slider Image">
                        </div>
                        <div>
                           <img src="/images/single-location/single-page-slider2.png" class="w-100 img-fluid" alt="slider Image">
                        </div>
                        <div>
                           <img src="/images/single-location/single-page-slider3.png" class="w-100 img-fluid" alt="slider Image">
                        </div>
                        <div>
                           <img src="/images/single-location/single-page-slider4.png" class="w-100 img-fluid" alt="slider Image">
                        </div>
                     </div>
                     <div class="slider slider-nav">
                        <div>
                           <img src="/images/single-location/single-page-slider1.png" class="w-100 img-fluid" alt="slider Image">
                        </div>
                        <div>
                           <img src="/images/single-location/single-page-slider2.png" class="w-100 img-fluid" alt="slider Image">
                        </div>
                        <div>
                           <img src="/images/single-location/single-page-slider3.png" class="w-100 img-fluid" alt="slider Image">
                        </div>
                        <div>
                           <img src="/images/single-location/single-page-slider4.png" class="w-100 img-fluid" alt="slider Image">
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-xl-5 mt-3 mt-lg-0">
                     <p class="paragraph netural-100">$350</p>
                     <h1 class="mb-0">
                        <span class="h1 netural-100">Kissing Point Park, under the fish Yaralla Road, Putney</span>
                     </h1>
                  </div>
                  <div class="col-12 admin-pt-92">
                     <p class="body-3-medium  text-black">The name says it all "Kissing Point" will be on your marriage certificate ;-).</p>
                     <p class="body-3-medium  text-black">
                        With a number of spots right down on the Parramatta River, Kissing Point Park offers a water side wedding location in a unique Sydney riverside setting, with the tranquility of the river with kayaks, motorboats and the sailing boats from the Concord Sailing Club right next door.    
                     </p>
                     <p class="body-3-medium  text-black">
                        The park offers a number of vantage points for your wedding location, all with views across the water.  The Riverside walking & bicycle track runs through it, connecting the park through to Meadowbank and beyond. There’s a playground for the kids, plus BBQ areas and numerous shady spots.
                     </p>
                     <p class="body-3-medium  text-black">
                        Nearby cafes in Putney Village offer options for a celebration afterwards, or Top Ryde Shopping Village is a short 5 minute drive away.   Consider a photo opportunity and lunch, take the ferry direct from Kissing Point Wharf to Sydney Rowing Club at Abbotsford, just 13 minutes away or to Eat Street Parramatta, just 35 minutes up the river.
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
            <!--  -->
            <div class="tab-pane fade" id="celebrants" role="tabpanel" aria-labelledby="celebrants-tab">
               <div class="table-responsive">
                  <table class="table align-middle theme-table">
                     <thead>
                        <tr>
                           <th >Name marriage celebrant</th>
                           <th>Contact</th>
                           <th></th>
                           <th></th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td style="min-width:260px">Michael</td>
                           <td  style="min-width:200px">+61 000 000 000</td>
                           <td  style="min-width:180px"><a class="table-link">See availability</a></td>
                           <td  style="min-width:200px"><a class="table-link">Remove <span class="d-none d-md-inline-block">from list</span></a></td>
                        </tr>
                        <tr>
                           <td style="min-width:260px">Joe</td>
                           <td  style="min-width:200px">+61 000 000 000</td>
                           <td  style="min-width:180px"><a class="table-link">See availability</a></td>
                           <td  style="min-width:200px"><a class="table-link">Remove <span class="d-none d-md-inline-block">from list</span></a></td>
                        </tr>
                        <tr>
                           <td style="min-width:260px">David</td>
                           <td  style="min-width:200px">+61 000 000 000</td>
                           <td  style="min-width:180px"><a class="table-link">See availability</a></td>
                           <td  style="min-width:200px"><a class="table-link">Remove <span class="d-none d-md-inline-block">from list</span></a></td>
                        </tr>
                        <tr>
                           <td style="min-width:260px">John</td>
                           <td  style="min-width:200px">+61 000 000 000</td>
                           <td  style="min-width:180px"><a class="table-link">See availability</a></td>
                           <td  style="min-width:200px"><a class="table-link">Remove <span class="d-none d-md-inline-block">from list</span></a></td>
                        </tr>
                        <tr>
                           <td style="min-width:260px">Chloe</td>
                           <td  style="min-width:200px">+61 000 000 000</td>
                           <td  style="min-width:180px"><a class="table-link">See availability</a></td>
                           <td  style="min-width:200px"><a class="table-link">Remove <span class="d-none d-md-inline-block">from list</span></a></td>
                        </tr>
                        <tr>
                           <td style="min-width:260px">Tony</td>
                           <td  style="min-width:200px">+61 000 000 000</td>
                           <td  style="min-width:180px"><a class="table-link">See availability</a></td>
                           <td  style="min-width:200px"><a class="table-link">Remove <span class="d-none d-md-inline-block">from list</span></a></td>
                        </tr>
                        <tr>
                           <td style="min-width:260px">Richard</td>
                           <td  style="min-width:200px">+61 000 000 000</td>
                           <td  style="min-width:180px"><a class="table-link">See availability</a></td>
                           <td  style="min-width:200px"><a class="table-link">Remove <span class="d-none d-md-inline-block">from list</span></a></td>
                        </tr>
                     </tbody>
                     <tfoot>
                        <tr>
                           <td colspan="4">
                              <div class="theme-pagination d-flex justify-content-end">
                                 <div class="align-self-center me-4 button-1">Rows per page: 10</div>
                                 <div class="align-self-center me-4 button-1 ">1-10 of 12</div>
                                 <div class="align-self-center">
                                    <a class="d-inline-flex me-4" href=""><img src="/images/pagination/left.svg" class="img-fluid"></a>
                                    <a class="d-inline-flex me-4" href=""><img src="/images/pagination/right.svg" class="img-fluid"> </a>
                                 </div>
                              </div>
                           </td>
                        </tr>
                     </tfoot>
                  </table>
               </div>
            </div>
            <div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('elements.addmarriage-celebrant')
@endsection