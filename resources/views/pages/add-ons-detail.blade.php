@extends('layouts.master') @section('content')
<section class="pt-45 pb-40">
   <div class="container">
      <div class="row">
         <div class="col-md-12 ">
            <a href="/add-ons" class="theme-btn secondary-btn d-inline-flex back-btn"><img class="me-3" src="/images/single-location/left-icon.svg" alt="Back Icon">Back</a>
         </div>
      </div>
   </div>
</section>
<section class="pb-40 ">
   <div class="container">
      <div class="row">
         <div class="col-md-6 align-self-center">
            <h1 class="h3 neutral-100">The Corona Pack</h1>
            <p class="small-text2 mb-1  neutral-100"><img src="images/location.svg" class="me-1 img-fluid"> Blues point reserve</p>
         </div>
         <div class="col-md-6 align-self-center d-flex justify-content-md-end">
            <a href="/contact-partner" class="theme-btn primary-btn-border ">Contact partner</a>
         </div>
      </div>
   </div>
</section>
<section class="pt-40  mb-5 ps-3 add-ons-detail">
   <div class="container">
      <div class="row pb-80">
         <div class="col-md-4 col-lg-3  col-xl-2 ">
            <div class="d-flex">
               <div class="numberCircle align-self-center">1</div>
               <p class="subheader-3 neutral-100 align-self-center mb-0 ms-2">Packages 1</p>
            </div>
         </div>
         <div class="col-md-8 col-lg-9 col-xl-10">
            <div class="row">
               <div class="col-lg-12 d-flex justify-content-between">
                  <div class="align-self-center">
                     <h2 class="h3 neutral-100">The corona pack bronze • $199</h2>
                  </div>
                  <div class="align-self-center">
                     <a  type="button"  class="theme-btn primary-btn d-inline-flex" data-bs-toggle="modal" data-bs-target="#exampleModal">
                     <img class="me-2" src="images/shopping-icon.svg" alt="shopping-icon">
                     Add to my wedding
                     </a>
                  </div>
               </div>
               <div class="col-12 image-block pt-3">
                  <div class="row">
                     <div class="col-md-6">
                        <div class=" position-relative">
                           <img src="images/add-ons/add-ons-details/left.jpg" class="img-fluid  left-img " alt="add-ons-image " >
                           <div class="all-pictures-btn">
                              <a href="add-ons-gallery" class="theme-btn primary-btn d-inline-flex">
                              <img class="me-2" src="images/add-ons/add-ons-details/photo-icon.svg" alt="shopping-icon">
                              See all pictures
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 right-img ">
                        <div class="row">
                           <div class="col-md-6">
                              <img src="images/add-ons/add-ons-details/right-1.jpg" class="img-fluid mb-3 photo" alt="add-ons-image " >
                              <img src="images/add-ons/add-ons-details/right-2.jpg" class="img-fluid photo " alt="add-ons-image " >
                           </div>
                           <div class="col-md-6">
                              <img src="images/add-ons/add-ons-details/right-3.jpg" class="img-fluid mb-3 photo" alt="add-ons-image " >
                              <div class="position-relative">
                                 <img src="images/add-ons/add-ons-details/right-4.jpg" class="img-fluid photo " alt="add-ons-image " >
                                 <img src="images/play-icon.svg" class="img-fluid  play-icon" alt="add-ons-image " >
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 pt-3">
                        <p class="body-3-medium  text-black">At Simple C we have created a simple package so your ceremony still feels special. Create a beautiful backdrop for you and your virtual guests if you are planning on live streaming across the globe.
                           Or, if you just want to make your photos even more special.
                        </p>
                        <ul class="addons-list">
                           <li>Signing table and 2 white padded folding chairs  </li>
                           <li>Signing table decoration </li>
                           <li> Aisle runner in natural sisal </li>
                           <li>Frame your ceremony with a beautiful chiffon with silk flowers </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row pb-80">
         <div class="col-md-4 col-lg-3  col-xl-2 ">
            <div class="d-flex">
               <div class="numberCircle align-self-center">2</div>
               <p class="subheader-3 neutral-100 align-self-center mb-0 ms-2">Packages 2</p>
            </div>
         </div>
         <div class="col-md-8 col-lg-9 col-xl-10">
            <div class="row">
               <div class="col-lg-12 d-flex justify-content-between">
                  <div class="align-self-center">
                     <h2 class="h3 neutral-100">The corona pack silver • $299</h2>
                  </div>
                  <div class="align-self-center">
                     <a class="theme-btn primary-btn d-inline-flex">
                     <img class="me-2" src="images/shopping-icon.svg" alt="shopping-icon">
                     Add to my wedding
                     </a>
                  </div>
               </div>
               <div class="col-12 image-block pt-3">
                  <div class="row">
                     <div class="col-md-6">
                        <div class=" position-relative">
                           <img src="images/add-ons/add-ons-details/package2/left.jpg" class="img-fluid  left-img " alt="add-ons-image " >
                           <div class="all-pictures-btn">
                              <a href="add-ons-gallery" class="theme-btn primary-btn d-inline-flex">
                              <img class="me-2" src="images/add-ons/add-ons-details/photo-icon.svg" alt="shopping-icon">
                              See all pictures
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 right-img ">
                        <div class="row">
                           <div class="col-md-6">
                              <img src="images/add-ons/add-ons-details/package2/right-1.jpg" class="img-fluid mb-3 photo" alt="add-ons-image " >
                              <img src="images/add-ons/add-ons-details/package2/right-2.jpg" class="img-fluid photo " alt="add-ons-image " >
                           </div>
                           <div class="col-md-6">
                              <img src="images/add-ons/add-ons-details/package2/right-3.jpg" class="img-fluid mb-3 photo" alt="add-ons-image " >
                              <div class="position-relative">
                                 <img src="images/add-ons/add-ons-details/package2/right-4.jpg" class="img-fluid photo " alt="add-ons-image " >
                                 <img src="images/play-icon.svg" class="img-fluid  play-icon" alt="add-ons-image " >
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 pt-3">
                        <p class="body-3-medium  text-black">Combine with the "Corona Pack bronze" you can also add a Zoom streaming pack so all your guest (up to 100) can log onto the dedicated link you are provided. That way they can be part of your special day - no matter where they are. AND regardless of restrictions on guest numbers.
                        </p>
                        <ul class="addons-list">
                           <li>Includes everything in the standard "Corona Pack" (see above), plus </li>
                           <li>Set up of a dedicated Zoom meeting (from our PRO account) for your ceremony with a simple 
                              link for you to share with your guests. Max 100 guest. 
                           </li>
                           <li> Dedicated camera on a tripod with radio microphone to ensure the best quality sound. </li>
                           <li>Positioning of the camera to ensure capturing every moment. </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row pb-80">
         <div class="col-md-4 col-lg-3  col-xl-2 ">
            <div class="d-flex">
               <div class="numberCircle align-self-center">3</div>
               <p class="subheader-3 neutral-100 align-self-center mb-0 ms-2">Packages 3</p>
            </div>
         </div>
         <div class="col-md-8 col-lg-9 col-xl-10">
            <div class="row">
               <div class="col-lg-12 d-flex justify-content-between">
                  <div class="align-self-center">
                     <h2 class="h3 neutral-100">The corona pack gold • $399</h2>
                  </div>
                  <div class="align-self-center">
                     <a class="theme-btn primary-btn d-inline-flex">
                     <img class="me-2" src="images/shopping-icon.svg" alt="shopping-icon">
                     Add to my wedding
                     </a>
                  </div>
               </div>
               <div class="col-12 image-block pt-3">
                  <div class="row">
                     <div class="col-md-6">
                        <div class=" position-relative">
                           <img src="images/add-ons/add-ons-details/package3/left.jpg" class="img-fluid  left-img " alt="add-ons-image " >
                           <div class="all-pictures-btn">
                              <a class="theme-btn primary-btn d-inline-flex">
                              <img class="me-2" src="images/add-ons/add-ons-details/photo-icon.svg" alt="shopping-icon">
                              See all pictures
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 right-img ">
                        <div class="row">
                           <div class="col-md-6">
                              <img src="images/add-ons/add-ons-details/package3/right-1.jpg" class="img-fluid mb-3 photo" alt="add-ons-image " >
                              <img src="images/add-ons/add-ons-details/package3/right-2.jpg" class="img-fluid photo " alt="add-ons-image " >
                           </div>
                           <div class="col-md-6">
                              <img src="images/add-ons/add-ons-details/package3/right-3.jpg" class="img-fluid mb-3 photo" alt="add-ons-image " >
                              <div class="position-relative">
                                 <img src="images/add-ons/add-ons-details/package3/right-4.jpg" class="img-fluid photo " alt="add-ons-image " >
                                 <img src="images/play-icon.svg" class="img-fluid  play-icon" alt="add-ons-image " >
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 pt-3">
                        <p class="body-3-medium  text-black">Combine with the "Corona Pack bronze & silver " you can also get a photo & video package
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</section>

@endsection