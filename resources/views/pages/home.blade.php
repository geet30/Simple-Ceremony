@extends('layouts.master') @section('content')
<section class="hero">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <h1 class="text-center mb-4">
               <span class="paragraph netural-100">The best offer</span><br/>
               <span class="h1 netural-100">Plan and book your wedding ceremonies</span>
            </h1>
            <p class="col-10 mx-auto text-center mb-4">Quicker, cheaper and a lot more fun than the government Marriage Registry Office. You can now book & complete all pre paperwork within 10minutes</p>
            <div class="d-flex justify-content-center mb-4 "> <a href="/location" class="theme-btn primary-btn  me-4">Make a booking</a> <a href="/how-it-works" class="theme-btn primary-btn-border ">More information</a> </div>
            <img src="images/hero.png" class="img-fluid" alt="hero"> 
         </div>
      </div>
   </div>
</section>
<section class="slogan mt-100">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <h2 class="h3 text-white text-center mb-0">Incredibly simple, simply incredible</h2>
         </div>
      </div>
   </div>
</section>
<section class="google-rating py-100">
   <div class="container">
   <div class="row">
      <div class="col-md-6">
         <div class="d-flex">
            <div class="align-self-center me-2"> <img src="images/google.png" class="img-fluid h-37" /> </div>
            <div class="align-self-center subheader-2 text-black">400+</div>
         </div>
         <div class="d-flex">
            <div class="align-self-center  me-1">
               <h2 class="mb-0 body-3 text-black">Rating 4.5</h2>
            </div>
            <div class="align-self-center"> <span><i class="fa-solid fa-star rating-color"></i></span> <span><i class="fa-solid fa-star rating-color"></i></span> <span><i class="fa-solid fa-star rating-color"></i></span> <span><i class="fa-solid fa-star rating-color"></i></span> <span><i class="fa-solid fa-star rating-color"></i></span> </div>
         </div>
      </div>
      <div class="col-md-6">
         <div class="d-flex justify-content-md-end"> <a href="#" class="theme-btn primary-btn me-md-4 mt-3 mt-md-0">See all reviews</a> </div>
      </div>
   </div>
   <div class="row pt-65">
      <div class="col-md-4  mb-3 mb-md-0">
         <div class="card rating-card">
            <div class="card-body">
               <h3 class="h4 natural-100 mb-1">Marjan van dongen</h3>
               <p class="body-3 text-black">November 02, 2021</p>
               <div class="align-self-center"> <span><i class="fa-solid fa-star rating-color"></i></span> <span><i class="fa-solid fa-star rating-color"></i></span> <span><i class="fa-solid fa-star rating-color"></i></span> <span><i class="fa-solid fa-star rating-color"></i></span> <span><i class="fa-solid fa-star rating-color"></i></span> </div>
               <p class="p2 pt-3 mb-0 text-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
            </div>
         </div>
      </div>
      <div class="col-md-4  mb-3 mb-md-0">
         <div class="card rating-card">
            <div class="card-body">
               <h3 class="h4 natural-100 mb-1">Oliver</h3>
               <p class="body-3 text-black">November 02, 2021</p>
               <div class="align-self-center"> <span><i class="fa-solid fa-star rating-color"></i></span> <span><i class="fa-solid fa-star rating-color"></i></span> <span><i class="fa-solid fa-star rating-color"></i></span> <span><i class="fa-solid fa-star rating-color"></i></span> <span><i class="fa-solid fa-star rating-color"></i></span> </div>
               <p class="p2 pt-3 mb-0 text-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
            </div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="card rating-card">
            <div class="card-body">
               <h3 class="h4 natural-100 mb-1">Noah</h3>
               <p class="body-3 text-black">November 02, 2021</p>
               <div class="align-self-center"> <span><i class="fa-solid fa-star rating-color"></i></span> <span><i class="fa-solid fa-star rating-color"></i></span> <span><i class="fa-solid fa-star rating-color"></i></span> <span><i class="fa-solid fa-star rating-color"></i></span> <span><i class="fa-solid fa-star rating-color"></i></span> </div>
               <p class="p2 pt-3 mb-0 text-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
            </div>
         </div>
      </div>
   </div>
   <div>
</section>
<section class="available-dates py-100 ">
   <div class="container">
      <div class="row">
         <div class="col-12  col-lg-9 col-xxl-6">
            <h2 class="pb-80 ">
               <p class="paragraph netural-100 mb-0">Book your marriage ceremony</p>
               <p class="h2 netural-100 mb-0">Slide down for locations & their available dates</p>
            </h2>
         </div>
         <div class=" col-lg-3 col-xxl-6"></div>
         <div class="col-md-4">
            <div class="card image-card">
               <img src="images/locations/v1.png" class="card-img-top" alt="location-1">
               <div class="card-body">
                  <div class="d-flex justify-content-between mb-15"> <span class="paragraph netural-100 align-self-center">$350</span> <span class=" align-self-center"><i class="fa-regular fa-heart heart"></i></span> </div>
                  <h3 class="h3 netural-100 mb-4">Blues point reserve</h3>
                  <a href="/single-location" class="card-btn-link d-flex">
                     <div class="align-self-center">Learn more</div>
                     <div class="align-self-center"> <img src="images/button-arrow.svg" class="img-fluid" alt="arrow-icon" /></div>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card image-card">
               <img src="images/locations/v1.png" class="card-img-top" alt="location-1">
               <div class="card-body">
                  <div class="d-flex justify-content-between mb-15"> <span class="paragraph netural-100 align-self-center">$350</span> <span class=" align-self-center"><i class="fa-regular fa-heart heart"></i></span> </div>
                  <h3 class="h3 netural-100 mb-4">Bradfield park</h3>
                  <a href="/single-location" class="card-btn-link d-flex">
                     <div class="align-self-center">Learn more</div>
                     <div class="align-self-center"> <img src="images/button-arrow.svg" class="img-fluid" alt="arrow-icon" /></div>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card image-card">
               <img src="images/locations/v1.png" class="card-img-top" alt="location-1">
               <div class="card-body">
                  <div class="d-flex justify-content-between mb-15"> <span class="paragraph netural-100 align-self-center">$350</span> <span class=" align-self-center"><i class="fa-regular fa-heart heart"></i></span> </div>
                  <h3 class="h3 netural-100 mb-4">Tench park, penrith</h3>
                  <a href="/single-location" class="card-btn-link d-flex">
                     <div class="align-self-center">Learn more</div>
                     <div class="align-self-center"> <img src="images/button-arrow.svg" class="img-fluid" alt="arrow-icon" /></div>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-12 mt-5 d-flex justify-content-center"> <a href="/location" class="theme-btn primary-btn  ">See all locations</a> </div>
      </div>
   </div>
</section>
<section class="add-ons py-100 ">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h2 class="pb-20 h3 netural-100">  Top list add-ons  </h2>
         </div>
         <div class="col-md-3 mb-3 mb-md-0">
            <div class="card image-card">
               <img src="images/add-ons/v1.png" class="card-img-top" alt="add-ons-1">
               <div class="card-body">
                  <div class="badge badge-primary d-inline-flex mb-17">
                     <div class="dot align-self-center me-1"></div>
                     <div class="align-self-center"> Photographer</div>
                  </div>
                  <div class="d-flex justify-content-between mb5 body-3 netural-100 ">Starting $125 </div>
                  <h3 class="h4 netural-100">Engagement pack</h3>
                  <p class="small-text2 mb-1"><img src="images/location.svg" class="img-fluid"> Tench park, penrith</p>
                  <div class="d-flex">
                     <div class="align-self-center me-1"> <img src="images/ellipse1.jpg" class="img-fluid ellipse-1" alt="ellipse"> </div>
                     <div class="small-text3 align-self-center netural-100">By Capture photography</div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3 mb-3 mb-md-0">
            <div class="card image-card">
               <img src="images/add-ons/v2.png" class="card-img-top" alt="add-ons-1">
               <div class="card-body">
                  <div class="badge badge-primary d-inline-flex mb-17">
                     <div class="dot align-self-center me-1"></div>
                     <div class="align-self-center"> Flower</div>
                  </div>
                  <div class="d-flex justify-content-between mb5 body-3 netural-100 ">Starting $89 </div>
                  <h3 class="h4 netural-100">Simple pack</h3>
                  <p class="small-text2 mb-1"><img src="images/location.svg" class="img-fluid"> Blues point reserve</p>
                  <div class="d-flex">
                     <div class="align-self-center me-1"> <img src="images/ellipse2.jpg" class="img-fluid ellipse-1" alt="ellipse"> </div>
                     <div class="small-text3 align-self-center netural-100">By Flower collection</div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3 mb-3 mb-md-0">
            <div class="card image-card">
               <img src="images/add-ons/v3.png" class="card-img-top" alt="add-ons-1">
               <div class="card-body">
                  <div class="badge badge-primary d-inline-flex mb-17">
                     <div class="dot align-self-center me-1"></div>
                     <div class="align-self-center"> Ring</div>
                  </div>
                  <div class="d-flex justify-content-between mb5 body-3 netural-100 ">Starting $299 </div>
                  <h3 class="h4 netural-100">Couples pack</h3>
                  <p class="small-text2 mb-1"><img src="images/location.svg" class="img-fluid"> Tench park, penrith</p>
                  <div class="d-flex">
                     <div class="align-self-center me-1"> <img src="images/ellipse3.jpg" class="img-fluid ellipse-1" alt="ellipse"> </div>
                     <div class="small-text3 align-self-center netural-100">By Tiffany jewelry</div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3">
            <div class="card image-card">
               <img src="images/add-ons/v4.png" class="card-img-top" alt="add-ons-1">
               <div class="card-body">
                  <div class="badge badge-primary d-inline-flex mb-17">
                     <div class="dot align-self-center me-1"></div>
                     <div class="align-self-center"> Ring</div>
                  </div>
                  <div class="d-flex justify-content-between mb5 body-3 netural-100 ">Starting $199 </div>
                  <h3 class="h4 netural-100">Simple rings pack</h3>
                  <p class="small-text2 mb-1"><img src="images/location.svg" class="img-fluid">Blues point reserve</p>
                  <div class="d-flex">
                     <div class="align-self-center me-1"> <img src="images/ellipse4.jpg" class="img-fluid ellipse-1" alt="ellipse"> </div>
                     <div class="small-text3 align-self-center netural-100">By Beauty collection</div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12 mt-5 d-flex justify-content-center"> <a href="/add-ons" class="theme-btn primary-btn  ">See all add-ons</a> </div>
      </div>
   </div>
</section>
<section class="simple-ceremonies bg-neutral-100 py-100 ">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <h2 class="text-white text-center mb-75">
               <p class="paragraph text-white mb-0">Our values</p>
               <p class="h2 text-white mb-0">Why simple<br/> ceremonies?</p>
            </h2>
         </div>
         <div class="col-md-6 col-lg-4 d-flex mb-5">
            <div class="me-3"><img src="images/ceremonies-icon/v1.svg" alt="ceremonies-icon"></div>
            <div>
               <h3 class="h3 turquoise-100 mb-0">Best value</h3>
               <img src="images/ceremonies-icon/rectangle.svg" alt="divider" class="my-3 img-fluid">
               <p class="mb-0 body-2 text-white pe-2">7 days a week - from $150 all inclusive</p>
            </div>
         </div>
         <div class="col-md-6 col-lg-4  d-flex mb-5">
            <div class="me-3"><img src="images/ceremonies-icon/v2.svg" alt="ceremonies-icon"></div>
            <div>
               <h3 class="h3 turquoise-100 mb-0">Amazing services</h3>
               <img src="images/ceremonies-icon/rectangle.svg" alt="divider" class="my-3 img-fluid">
               <p class="mb-0 body-2 text-white pe-2">Australia's highest rated celebrant per Google</p>
            </div>
         </div>
         <div class="col-md-6 col-lg-4  d-flex mb-5">
            <div class="me-3"><img src="images/ceremonies-icon/v3.svg" alt="ceremonies-icon"></div>
            <div>
               <h3 class="h3 turquoise-100 mb-0">Beautiful locations</h3>
               <img src="images/ceremonies-icon/rectangle.svg" alt="divider" class="my-3 img-fluid">
               <p class="mb-0 body-2 text-white pe-2">Harbour, Beach, Boat, Park, Bar, London Cab or The Studio.</p>
            </div>
         </div>
         <div class="col-md-6 col-lg-4  d-flex mb-5">
            <div class="me-3"><img src="images/ceremonies-icon/v4.svg" alt="ceremonies-icon"></div>
            <div>
               <h3 class="h3 turquoise-100 mb-0">No interview required</h3>
               <img src="images/ceremonies-icon/rectangle.svg" alt="divider" class="my-3 img-fluid">
               <p class="mb-0 body-2 text-white pe-2">No need for the two of you to arrange an interview before the ceremony</p>
            </div>
         </div>
         <div class="col-md-6 col-lg-4  d-flex  mb-5">
            <div class="me-3"><img src="images/ceremonies-icon/v5.svg" alt="ceremonies-icon"></div>
            <div>
               <h3 class="h3 turquoise-100 mb-0">Same day registration</h3>
               <img src="images/ceremonies-icon/rectangle.svg" alt="divider" class="my-3 img-fluid">
               <p class="mb-0 body-2 text-white pe-2">If required, you can pick up Registered Certificate of Marriage same day</p>
            </div>
         </div>
         <div class="col-md-6 col-lg-4  d-flex  mb-5">
            <div class="me-3"><img src="images/ceremonies-icon/v6.svg" alt="ceremonies-icon"></div>
            <div>
               <h3 class="h3 turquoise-100 mb-0">Paperwork online 24/7</h3>
               <img src="images/ceremonies-icon/rectangle.svg" alt="divider" class="my-3 img-fluid">
               <p class="mb-0 body-2 text-white pe-2">No waiting for an interview & only one of you has to sign before</p>
            </div>
         </div>
         <div class="col-md-6 col-lg-4  d-flex  mb-5 mb-md-0">
            <div class="me-3"><img src="images/ceremonies-icon/v7.svg" alt="ceremonies-icon"></div>
            <div>
               <h3 class="h3 turquoise-100 mb-0">Fabulous Celebrants</h3>
               <img src="images/ceremonies-icon/rectangle.svg" alt="divider" class="my-3 img-fluid">
               <p class="mb-0 body-2 text-white pe-2">Hand pick, experienced and fun</p>
            </div>
         </div>
         <div class="col-md-6 col-lg-4  d-flex  mb-5 mb-lg-0">
            <div class="me-3"><img src="images/ceremonies-icon/v8.svg" alt="ceremonies-icon"></div>
            <div>
               <h3 class="h3 turquoise-100 mb-0">Book online 24/7</h3>
               <img src="images/ceremonies-icon/rectangle.svg" alt="divider" class="my-3 img-fluid">
               <p class="mb-0 body-2 text-white pe-2">See all locations, dates and time online</p>
            </div>
         </div>
         <div class="col-md-6 col-lg-4  d-flex  mb-5 mb-lg-0">
            <div class="me-3"><img src="images/ceremonies-icon/v9.svg" alt="ceremonies-icon"></div>
            <div>
               <h3 class="h3 turquoise-100 mb-0">Add ons</h3>
               <img src="images/ceremonies-icon/rectangle.svg" alt="divider" class="my-3 img-fluid">
               <p class="mb-0 body-2 text-white pe-2">Decorations, chairs, up to 59 people, witnesses, photographer, flowers, reception</p>
            </div>
         </div>
      </div>
      <div class="row pt-128">
        <div class="col-12 col-lg-4">
           <h2 class="text-white mb-4">
              <span class="paragraph text-white">Simple step</span><br/>
              <span class="h2 text-white">Just 3 Steps<br/>
              to get married</span>
           </h2>
           <p class="mb-0 text-white body-1">Our one fee includes: lodgement of the NoIM, your ceremony with celebrant (& location) & registration of your marriage with BDM NSW</p>
        </div>
        <div class="col-lg-8 mt-4 mt-lg-0">
           <div class="row">
              <div class="col-md-4 mb-3 mb-md-0">
                 <a href="/location" class="simple-ceremonies-images text-center d-block">
                    <div class="step"><img src="images/one.svg" class="img-fluid" alt="one"></div>
                    <div class="icon"><img src="images/date.svg" class="img-fluid" alt="date"></div>
                    <h3 class="h3 text-white heading">Make a booking</h3>
                    <p class="mb-0 body-1 text-white">$150 to $350</p>
                 </a>
              </div>
              <div class="col-md-4 mb-3 mb-md-0">
                 <a class="simple-ceremonies-images text-center d-block">
                    <div class="step"><img src="images/two.svg" class="img-fluid" alt="one"></div>
                    <div class="icon"><img src="images/noim.svg" class="img-fluid" alt="NOIM"></div>
                    <h3 class="h3 text-white heading">Complete your NoIM</h3>
                    <p class="mb-0 body-1 text-white">You can now have your NoIM witnessed online, without leaving home, so easy</p>
                 </a>
              </div>
              <div class="col-md-4">
                 <a href="/your-ceremony" class="simple-ceremonies-images text-center d-block">
                    <div class="step"><img src="images/three.svg" class="img-fluid" alt="one"></div>
                    <div class="icon"><img src="images/home-wedding.svg" class="img-fluid" alt="NOIM"></div>
                    <h3 class="h3 text-white heading">Your ceremony</h3>
                 </a>
              </div>
           </div>
        </div>
     </div>
   </div>
</section>

<section class="pt-100">
   <div class="container">
      <div class="row">
         <div class="col-12 bg-turquoise-50 radius-10">
            <div class="row align-items-center">
               <div class="col-md-5 ps-0"> <img src="images/wedding-moments.png" class="img-fluid" alt="wedding-moments"> </div>
               <div class="col-md-7 pt-md-0 pt-4 pb-md-0 pb-4">
                  <h2 class="h3 text-black">Want to get married in your own <br/>dream place?</h2>
                  <div class="d-flex mt-4 d-none d-xl-flex"> <a href="/request-custom-location" class="theme-btn secondary-btn d-inline-flex me-3 ">Request a custom location or date and time.</a> <a href="/book-custom-location" class="theme-btn secondary-btn-border d-inline-flex">Book your custom location</a> </div>
                  <div class="d-grid gap-2 col-12 d-xl-none mt-4 "> <a href="/request-custom-location" class="theme-btn secondary-btn d-inline-flex  justify-content-center ">Request a custom location or date and time.</a> <a href="/book-custom-location" class="theme-btn secondary-btn-border d-inline-flex justify-content-center">Book your custom location</a> </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="py-100">
   <div class="container">
      <div class="row">
         <div class="col-12 mb-80">
            <h2 class="text-center mb-3">
               <p class="mb-0 paragraph netural-100">Why choose us</p>
               <p class="mb-0 h2 netural-100">What is the difference between Simple Ceremonies and the governement Marriage Registry Office?</p>
            </h2>
            <p class="col-10 text-center mx-auto mb-0">Just like the governement Marriage Registry Office, Simple Ceremonies performs legally recogonised marriages. The difference is that we are simplier, quicker, cheaper and more fun - but with exactly the same legal outcome.</p>
         </div>
         <div class="col-12 col-md-10 mx-auto">
            <div class="row">
               <div class="col-md-6 mb-3 mb-md-0">
                  <div class="overlay-card img-1  d-block">
                     <div class="overlay-content">
                        <h3 class="h3 text-white mb-3">Plan your wedding online & receive instant quote</h3>
                        <p class="body-1 text-white  mb-4">From cars, location, decorations, photographer, reception & more...</p>
                        <a href="/location" class="card-btn-link d-flex text-decoration-none">
                           <div class="align-self-center link">Book now</div>
                           <div class="align-self-center"> <img src="images/arrow-white.svg" class="img-fluid" alt="arrow-icon" /></div>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 mb-3 mb-md-0">
                  <a class="overlay-card img-2 d-block">
                     <div class="overlay-content">
                        <h3 class="h3 text-white mb-3">Are you a FABULOUS celebrant?</h3>
                        <p class="body-1 text-white  mb-4">We are always looking for FABULOUS celebrant. </p>
                        <div href="#" class="card-btn-link d-flex">
                           <div class="align-self-center link">Join now</div>
                           <div class="align-self-center"> <img src="images/arrow-white.svg" class="img-fluid" alt="arrow-icon" /></div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="pb-100">
   <div class="container">
      <div class="row">
         <div class="col-12 bg-turquoise-50 radius-10">
            <div class="row align-items-center">
               <div class="col-md-5 ps-0"> <img src="images/lodgement.png" class="img-fluid" alt="lodgement"> </div>
               <div class="col-md-7 pt-md-0 pt-4 pb-md-0 pb-4">
                  <h2 class="h3 text-black mb-0">Lodgement Voucher $110</h2>
                  <p class="body-3 netural-100 my-20">Want to start the paperwork now, but can't lock in a date? Applying for a Prospective Marriage Visa? Applying for a Shortening of Time. Avoid the cost of multiple reschedules. </p>
                  <a href="#" class="theme-btn secondary-btn d-inline-flex ">Check out a Lodgement Voucher</a> 
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section>
   <div class="container">
      <div class="row">
         <div class="col-12">
            <hr class="theme-hr">
         </div>
      </div>
   </div>
</section>
<section class="py-100">
   <div class="container">
      <div class="row">
         <div class="col-md-5 mb-4 mb-md-0">
            <img src="images/permium.png" alt="permium" class="img-fluid">
         </div>
         <div class="col-md-7">
            <h2 class="mb-4">
               <p class="paragraph neutral-100">While offering amazing value</p>
               <p class="h2 neutral-100">The Simple, Premium & Cool ways to get married!</p>
            </h2>
            <p class="body-3 neutral-100 mb-4">Your wedding ceremony should be a very special moment in your lives.
               So our focus is on giving you, the perfect simple ceremony - with the best celebrants & locations.
               We then streamline the rest - keeping it simple, fast and great value. Standard ceremonies from just $270.
            </p>
            <p class="body-1 mb-4 turquoise-100">We also have add ons: chairs, decorations, photographer, flowers, wedding rings and a venue to celebrate!
            </p>
            <p class="body-1 text-black mb-5"> One Stop - for your perfect wedding!</p>
            <div class="d-lg-flex"> 
               <a href="/location" class="theme-btn primary-btn me-lg-4 d-flex justify-content-center mb-3 mb-lg-0">Make a booking</a> 
               <a href="/married-checklist" class="theme-btn primary-btn-border d-flex justify-content-center">See checklist to get married</a>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="py-100 home-quiz">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <h2 class="mb-4 text-center">
               <p class="paragraph neutral-100">In just 30 seconds</p>
               <p class="h2 neutral-100">Based on your specific circumstances, we can let you know if you can get married and exactly what you need to get married</p>
            </h2>
            <div class="d-flex justify-content-center">
               <a href="#" class="theme-btn secondary-btn">Start quiz</a> 
            </div>
            <div class="mt-115">
               <img src="images/quiz-img.png" class="img-fluid" alt="quiz image">
            </div>
         </div>
      </div>
   </div>
</section>
@endsection