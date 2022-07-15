@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-md-3 col-lg-2 p-0">
         @include('elements.user-sidebar')
      </div>
      <div class="col-md-9 col-lg-10 px-md-4">
         @include('elements.user-header')
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
                                 <div class="col-md-6 mb-3 mb-md-0">
                                    <div class=" position-relative">
                                       <img src="/images/user/add-ons-1.png" class="img-fluid  left-img "
                                          alt="add-ons-image ">
                                       <div class="all-pictures-btn">
                                          <a href="/user/add-ons-gallery" class="theme-btn primary-btn d-inline-flex">
                                          <img class="me-2" src="/images/add-ons/add-ons-details/photo-icon.svg"
                                             alt="shopping-icon">
                                          See all pictures
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6 right-img  ">
                                    <div class="row">
                                       <div class="col-sm-6">
                                          <img src="/images/user/add-ons-2.png" class="img-fluid mb-3 photo"
                                             alt="add-ons-image ">
                                          <img src="/images/user/add-ons-3.png"
                                             class="img-fluid photo mb-3 mb-sm-0 " alt="add-ons-image ">
                                       </div>
                                       <div class="col-sm-6">
                                          <img src="/images/user/add-ons-4.png" class="img-fluid mb-3 photo"
                                             alt="add-ons-image ">
                                          <div class="position-relative">
                                             <img src="/images/user/add-ons-5.png" class="img-fluid photo "
                                                alt="add-ons-image ">
                                             <img src="/images/play-icon.svg" class="img-fluid  play-icon" alt="add-ons-image ">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 pt-3">
                                    <p class="body-3-medium text-black">At Simple C we have created a simple package so your
                                       ceremony still feels special. Create a beautiful backdrop for you and your virtual guests if
                                       you are planning on live streaming across the globe.
                                       Or, if you just want to make your photos even more special.
                                    </p>
                                    <ul class="addons-list">
                                       <li>Signing table and 2 white padded folding chairs </li>
                                       <li>Signing table decoration </li>
                                       <li> Aisle runner in natural sisal </li>
                                       <li>Frame your ceremony with a beautiful chiffon with silk flowers </li>
                                    </ul>
                                    <h4 class="h4">Add title terms here</h4>
                                    <p class="body-3-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis neque in erat maximus vulputate a sit amet ipsum. Quisque placerat, arcu at pellentesque fermentum, nunc nisl condimentum mi, eu tristique nibh leo non ante. Praesent nec rhoncus mi, eu faucibus risus. Cras tristique a arcu ut aliquet. Praesent eu bibendum magna, sed congue nisl. Praesent consequat tortor eget justo dignissim, eget vehicula sapien blandit.</p>
                                    <ul class="addons-list">
                                       <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                       <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                    </ul>
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