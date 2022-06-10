@extends('layouts.master') 
@section('content')
<section class="location-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
               <div class="location-banner-data">
                  <h2 class="mb-4 text-center">
                     <p class="paragraph text-white">The best offer</p>
                     <p class="h2 text-white">Check available location and time here</p>
                  </h2>
                  <div class="col-md-9 mx-auto location-search-data ">
                     <ul class="d-lg-flex align-items-center justify-content-evenly gap-10 list-unstyled">
                        <li class="">
                           <p class="text-black button-1">Location</p>
                           <p class="body-2 m-0 d-flex gap-2">
                              <img class="me-2" src="images/location-page/location-icon.svg" alt="location-icon">Insert name of location
                           </p>
                        </li>
                        <li class="">
                           <p class="text-black button-1">Date & times</p>
                           <p class="body-2 m-0 d-flex gap-2">
                              <img class="me-2" src="images/location-page/calander-icon.svg" alt="calander-icon">Choose date
                           </p>
                        </li>
                        <li class="">
                           <a href="#" class="theme-btn primary-btn d-inline-flex">
                              <img class="me-2" src="images/location-page/search-icon.svg" alt="search-icon">Search
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
        </div>
    </div>
</section>
<section class="py-100 ">
   <div class="container">
      <div class="row gy-3">
        <div class="col-md-12 mb-3">
            <div class="dropdown">
                <a class="btn" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="images/location-page/filter-icon.svg" class="fliter-icon" alt="Filter Icon">
                </a>
                <span class="button-1">Filter by categories</span>
                <ul class="dropdown-menu p-0 border-0" aria-labelledby="dropdownMenuLink">
                  <div class="list-group">
                     <label class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="">
                        First checkbox
                     </label>
                     <label class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="">
                        Second checkbox
                     </label>
                     <label class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="">
                        Third checkbox
                     </label>
                     <label class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="">
                        Fourth checkbox
                     </label>
                     <label class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="">
                        Fifth checkbox
                     </label>
                  </div>
                </ul>
            </div>
        </div>
         <div class="col-md-4">
            <div class="card image-card">
               <img src="images/location-page/Hunter_valley.png" class="card-img-top" alt="Hunter valley">
               <div class="card-body">
                  <div class="d-flex justify-content-between mb-15"> <span class="paragraph netural-100 align-self-center">$350</span> <span class=" align-self-center"><i class="fa-regular fa-heart heart"></i></span> </div>
                  <h3 class="h3 netural-100 mb-4">Hunter valley</h3>
                  <a href="/single-location" class="card-btn-link d-flex">
                     <div class="align-self-center">Learn more</div>
                     <div class="align-self-center"> <img src="images/button-arrow.svg" class="img-fluid" alt="arrow-icon" /></div>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card image-card">
               <img src="images/location-page/Cronulla.png" class="card-img-top" alt="Cronulla">
               <div class="card-body">
                  <div class="d-flex justify-content-between mb-15"> <span class="paragraph netural-100 align-self-center">$350</span> <span class=" align-self-center"><i class="fa-regular fa-heart heart"></i></span> </div>
                  <h3 class="h3 netural-100 mb-4">Cronulla</h3>
                  <a href="#" class="card-btn-link d-flex">
                     <div class="align-self-center">Learn more</div>
                     <div class="align-self-center"> <img src="images/button-arrow.svg" class="img-fluid" alt="arrow-icon" /></div>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card image-card">
               <img src="images/location-page/Water_taxi.png" class="card-img-top" alt="Water taxi">
               <div class="card-body">
                  <div class="d-flex justify-content-between mb-15"> <span class="paragraph netural-100 align-self-center">$350</span> <span class=" align-self-center"><i class="fa-regular fa-heart heart"></i></span> </div>
                  <h3 class="h3 netural-100 mb-4">Water taxi</h3>
                  <a href="#" class="card-btn-link d-flex">
                     <div class="align-self-center">Learn more</div>
                     <div class="align-self-center"> <img src="images/button-arrow.svg" class="img-fluid" alt="arrow-icon" /></div>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card image-card">
               <img src="images/location-page/Mort_bay_Balmain.png" class="card-img-top" alt="Mort bay, Balmain">
               <div class="card-body">
                  <div class="d-flex justify-content-between mb-15"> <span class="paragraph netural-100 align-self-center">$350</span> <span class=" align-self-center"><i class="fa-regular fa-heart heart"></i></span> </div>
                  <h3 class="h3 netural-100 mb-4">Mort bay, Balmain</h3>
                  <a href="#" class="card-btn-link d-flex">
                     <div class="align-self-center">Learn more</div>
                     <div class="align-self-center"> <img src="images/button-arrow.svg" class="img-fluid" alt="arrow-icon" /></div>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card image-card">
               <img src="images/location-page/Coogee_beach.png" class="card-img-top" alt="Coogee beach">
               <div class="card-body">
                  <div class="d-flex justify-content-between mb-15"> <span class="paragraph netural-100 align-self-center">$350</span> <span class=" align-self-center"><i class="fa-regular fa-heart heart"></i></span> </div>
                  <h3 class="h3 netural-100 mb-4">Coogee beach</h3>
                  <a href="#" class="card-btn-link d-flex">
                     <div class="align-self-center">Learn more</div>
                     <div class="align-self-center"> <img src="images/button-arrow.svg" class="img-fluid" alt="arrow-icon" /></div>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card image-card">
               <img src="images/location-page/Merewether_newcastle.png" class="card-img-top" alt="Merewether, newcastle">
               <div class="card-body">
                  <div class="d-flex justify-content-between mb-15"> <span class="paragraph netural-100 align-self-center">$350</span> <span class=" align-self-center"><i class="fa-regular fa-heart heart"></i></span> </div>
                  <h3 class="h3 netural-100 mb-4">Merewether, newcastle</h3>
                  <a href="#" class="card-btn-link d-flex">
                     <div class="align-self-center">Learn more</div>
                     <div class="align-self-center"> <img src="images/button-arrow.svg" class="img-fluid" alt="arrow-icon" /></div>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card image-card">
               <img src="images/location-page/Blues_point_reserve.png" class="card-img-top" alt="Blues point reserve">
               <div class="card-body">
                  <div class="d-flex justify-content-between mb-15"> <span class="paragraph netural-100 align-self-center">$350</span> <span class=" align-self-center"><i class="fa-regular fa-heart heart"></i></span> </div>
                  <h3 class="h3 netural-100 mb-4">Blues point reserve</h3>
                  <a href="#" class="card-btn-link d-flex">
                     <div class="align-self-center">Learn more</div>
                     <div class="align-self-center"> <img src="images/button-arrow.svg" class="img-fluid" alt="arrow-icon" /></div>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card image-card">
               <img src="images/location-page/Bradfield_park.png" class="card-img-top" alt="Bradfield park">
               <div class="card-body">
                  <div class="d-flex justify-content-between mb-15"> <span class="paragraph netural-100 align-self-center">$350</span> <span class=" align-self-center"><i class="fa-regular fa-heart heart"></i></span> </div>
                  <h3 class="h3 netural-100 mb-4">Bradfield park</h3>
                  <a href="#" class="card-btn-link d-flex">
                     <div class="align-self-center">Learn more</div>
                     <div class="align-self-center"> <img src="images/button-arrow.svg" class="img-fluid" alt="arrow-icon" /></div>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card image-card">
               <img src="images/location-page/Tench_park_Penrith.png" class="card-img-top" alt="Tench park, Penrith">
               <div class="card-body">
                  <div class="d-flex justify-content-between mb-15"> <span class="paragraph netural-100 align-self-center">$350</span> <span class=" align-self-center"><i class="fa-regular fa-heart heart"></i></span> </div>
                  <h3 class="h3 netural-100 mb-4">Tench park, Penrith</h3>
                  <a href="#" class="card-btn-link d-flex">
                     <div class="align-self-center">Learn more</div>
                     <div class="align-self-center"> <img src="images/button-arrow.svg" class="img-fluid" alt="arrow-icon" /></div>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="location-page-booking-cards pb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-md-0 mb-3">
                <div class="card border-0 rounded-12">
                    <img src="images/location-page/Book_your_custom_location.png" class="card-img" alt="Book your custom location">
                    <div class="card-img-overlay d-flex flex-column justify-content-center text-center p-10">
                        <h3 class="h3 Neutral/100 mb-4">Want to get married in your own dream place?</h3>
                        <div class="d-grid gap-3 col-12">
                            <a href="/request-custom-location" class="theme-btn secondary-btn d-inline-flex justify-content-center ">Request a custom location or date and time.</a> 
                            <a href="/book-custom-location" class="theme-btn secondary-btn-border d-inline-flex justify-content-center">Book your custom location</a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0 rounded-12">
                    <img src="images/location-page/see_all_voucher.png" class="card-img" alt="See all vouchers">
                    <div class="card-img-overlay d-flex flex-column justify-content-center text-center p-10">
                        <h3 class="h3 Neutral/100 mb-4">Like to give someone the Gift Certificate?</h3>
                        <p class="Neutral/100 body-2 mb-4">Purchase them a wedding</p>
                        <div class="d-grid gap-3 col-12">
                            <a href="/voucher" class="theme-btn secondary-btn d-inline-flex justify-content-center ">See all vouchers</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection