
@extends('layouts.master')
@section('content')
<section class="pt-45 pb-40">
   <div class="container">
      <div class="row">
         <div class="col-md-12 ">
            <a href="/add-ons" class="theme-btn secondary-btn d-inline-flex back-btn"><img class="me-3"
                  src="/images/single-location/left-icon.svg" alt="Back Icon">Back</a>
         </div>
      </div>
   </div>
</section>
   
<section class="pb-40 ">
   <div class="container">
      <div class="row">
         <div class="col-md-6 align-self-center">
            <h1 class="h3 neutral-100">{{$data['product_name']}}</h1>
            <p class="small-text2 mb-1  neutral-100"><img src="/images/location.svg" class="me-1 img-fluid" alt="Location"> 
            <?php 
               $location_name=[];
               foreach($data['product_location'] as $product_location){
                  foreach($product_location['locations'] as $location){
                     $location_name[]= $location['name'];
                  
                  }
                  
               }
               echo implode(',',$location_name);
            ?>
            </p>
         </div>
         <div class="col-md-6 align-self-center d-flex justify-content-md-end mt-3 mt-md-0">
            <a class="theme-btn primary-btn-border" data-bs-toggle="offcanvas" data-bs-target="#contact_partner" aria-controls="offcanvasRight">Contact partner</a>
         </div>
      </div>
   </div>
</section>
<section class="pt-40  mb-5 ps-3 add-ons-detail">
   <div class="container">

      <?php $count = 0;?>
      @foreach($data['package'] as $package)
      <?php $count++; ?>
      <div class="row pb-80">
         <div class="col-md-3 col-lg-3  col-xl-2 ">
            <div class="d-flex">
               <div class="numberCircle align-self-center">{{$count}}</div>
               <p class="subheader-3 neutral-100 align-self-center mb-0 ms-2">Packages {{$count}}</p>
            </div>
         </div>
         <div class="col-md-9 col-xl-10 mt-3 mt-md-0">
            <div class="row">
               <div class="col-lg-12 d-md-flex justify-content-between">
                  <div class="align-self-center">
                     <h2 class="h3 neutral-100">{{$package['package_name']}} • ${{$package['total_fee']}}</h2>
                  </div>
                  <div class="align-self-center">
                     <a class="theme-btn primary-btn d-inline-flex open-add-to-wedding" data-id="{{$package['id']}}" data-package_name="{{$package['package_name']}}" data-terms="{{$package['title_term']}}" data-price="{{$package['total_fee']}}" data-bs-toggle="modal"
                        data-bs-target="#termsModal">
                        <img class="me-2" src="/images/shopping-icon.svg" alt="shopping-icon">
                        Add to my wedding
                     </a>
                  </div>
               </div>
               <div class="col-12 image-block pt-3">
                  <div class="row">
                     <div class="col-md-6 mb-3 mb-md-0">
                        <div class=" position-relative">
                           @foreach($package['gallery'] as $images)
                              @if ($loop->first)  
                                 @if(isset($images) && !empty($images['image_name']))
                                    <img src="{{ asset('/uploads/images/package/'.$images['image_name']) }}" alt="add-ons-image " class="img-fluid left-img">
                                 @endif
                              @endif
                           @endforeach
                           <div class="all-pictures-btn">
                              <a href="{{ route('addons.gallery', ['id' => $package['id'], 'addonid' => $id]) }}" class="theme-btn primary-btn d-inline-flex">
                                 <img class="me-2" src="/images/add-ons/add-ons-details/photo-icon.svg"
                                    alt="shopping-icon">
                                 See all pictures
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 right-img  ">
                        <div class="row">
                           @foreach($package['gallery'] as $images)
                              @if(isset($images) && !empty($images['image_name']))
                              
                                 <div class="col-sm-6">
                                 
                                    @if(preg_match('/^.*\.(mp4|mov|mpg|mpeg|wmv|mkv)$/i', $images['image_name'])) 
                                       
                                       <video controls width="100%" class="img-fluid mb-3 photo"  id="video" preload="metadata">
                                          <source src="{{ asset('/uploads/images/package/'.$images['image_name']) }}" type="video/mp4">
                                       </video>
                                    @else
                                       <img src="{{ asset('/uploads/images/package/'.$images['image_name']) }}" alt="add-ons-image " class="img-fluid mb-3 photo"> 
                                    @endif

                                    
                                 </div>
                              @endif
                           @endforeach
                        </div>
                     </div>
                     <div class="col-12 pt-3">
                        <p class="body-3-medium  text-black"> {{$package['location_description']}}
                        </p>
                        <ul class="addons-list">
                           <li>Signing table and 2 white padded folding chairs </li>
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
      @endforeach
      
   </div>

   <!-- Modal -->
   <div class="modal whitout-header-modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-body ">
               <div class="row mb-4">
                  <div class="col-12 mb-3">
                     <div class="d-flex">
                        <!-- <div class="numberCircle align-self-center">1</div> -->
                        <p class="h4  text-black align-self-center mb-0 ms-2">Add title terms here</p>
                     </div>
                  </div>
                  <div class="col-12 mb-0">
                     <p class="body-3-medium text-black mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Mauris quis neque in erat maximus vulputate a sit amet ipsum. Quisque placerat, arcu at
                        pellentesque fermentum, nunc nisl condimentum mi, eu tristique nibh leo non ante. Praesent nec
                        rhoncus mi, eu faucibus risus. Cras tristique a arcu ut aliquet. Praesent eu bibendum magna, sed
                        congue nisl. Praesent consequat tortor eget justo dignissim, eget vehicula sapien blandit.</p>
                  </div>
               </div>
              
               <div class="row mb-4">
                  <div class="col-12 mb-3">
                     <p class="button-1  text-black align-self-center mb-0 ">Agree to Terms</p>
                  </div>
                  <div class="col-12 mb-3">
                     <div class="form-check">
                        <input class="form-check-input agree_to_terms" type="checkbox" value="" id="agree_to_terms" required>
                        <label class="form-check-label body-1-medium text-black" for="invalidCheck2">
                           I’m agree with terms
                        </label>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="d-md-flex">
                     <div class="d-flex">
                        <a class="theme-btn primary-btn  me-md-4 mb-3 mb-lg-0 w-100-sm show-addon-basket"
                           data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                           aria-controls="offcanvasRight">Continue</a>
                     </div>
                     <div class="d-flex">
                        <a class="theme-btn primary-btn-border w-100-sm" data-bs-dismiss="modal">Cancel</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
{{-- @include('pages.js')--}}
@include('elements.basket')
@include('elements.partner.contact-partner')
@endsection