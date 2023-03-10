@extends('layouts.panels')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 p-0">
        @include('elements.common.user-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-md-4">
      @include('elements.common.panel-header')
         <a href="/user/add-ons" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
         <div class="card panel-card">
            <div class="card-body">
               <section class="pb-40">
                  <div class="row">
                     <div class="col-md-8 align-self-center">
                        <div class="table-dropdown d-flex align-items-lg-center flex-column flex-lg-row">
                           <h1 class="h3 neutral-100 mb-3 mb-lg-0">{{$data['product_name']}}</h1>
                        </div>
                        <p class="body-3 mb-0 mt-3"><img src="/images/location.svg" class="me-1 img-fluid" alt="Location"> 
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
                     <div class="col-md-4 align-self-start d-flex justify-content-md-end mt-3 mt-md-0">
                        <a role="button" class="theme-btn primary-btn" data-bs-toggle="offcanvas" data-bs-target="#contact_partner" aria-controls="offcanvasRight">Contact partner</a>
                     </div>
                  </div>
               </section>
               <section class="pt-40 add-ons-detail">
               <?php $count = 0;?>
               @foreach($data['package'] as $package)
               <?php $count++; ?>
                  <div class="row pb-60">
                     <div class="col-lg-3 col-xl-2">
                        <div class="d-flex">
                           <div class="numberCircle align-self-center">{{$count}}</div>
                           <p class="subheader-3 neutral-100 align-self-center mb-0 ms-2">Packages {{$count}}</p>
                        </div>
                     </div>
                     <div class="col-lg-9 col-xl-10 mt-3 mt-md-0">
                        <div class="row">
                           <div class="col-lg-12 d-xl-flex justify-content-between">
                              <div class="align-self-center mb-3 mt-3 mt-lg-0 mb-xl-0">
                              <h2 class="h3 neutral-100">{{$package['package_name']}} ??? ${{number_format($package['total_fee'])}}</h2>
                              </div>
                              <a role="button" class="theme-btn primary-btn open-add-to-wedding" data-bs-toggle="modal" data-bs-target="#add_to_my_wedding" data-package_id="{{$package['id']}}" data-partner_id="{{$package['user_id']}}" data-package_name="{{$package['package_name']}}" data-terms="{{$package['title_term']}}" data-price="{{$package['total_fee']}}">
                                <img class="me-2" src="/images/shopping-icon.svg" alt="shopping-icon">
                                Add to my wedding
                             </a>
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
                                       <a href="{{ route('user.addons.gallery', ['id' => $package['id'], 'addonid' => $id]) }}" class="theme-btn primary-btn d-inline-flex">
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
                                    <p class="body-3-medium text-black">{{$package['location_description']}}
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
               @endforeach
                  <!-- <div class="row pb-60">
                     <div class="col-lg-3 col-xl-2">
                        <div class="d-flex">
                           <div class="numberCircle align-self-center">2</div>
                           <p class="subheader-3 neutral-100 align-self-center mb-0 ms-2">Packages 2</p>
                        </div>
                     </div>
                     <div class="col-lg-9 col-xl-10 mt-3 mt-md-0">
                        <div class="row">
                           <div class="col-lg-12 d-xl-flex justify-content-between">
                            <div class="align-self-center mb-3 mt-3 mt-lg-0 mb-xl-0">
                                 <h2 class="h3 neutral-100">The corona pack silver ??? $299</h2>
                              </div>
                              <a role="button" class="theme-btn primary-btn" data-bs-toggle="modal" data-bs-target="#add_to_my_wedding">
                                <img class="me-2" src="/images/shopping-icon.svg" alt="shopping-icon">
                                Add to my wedding
                             </a>
                           </div>
                           <div class="col-12 image-block pt-3">
                              <div class="row">
                                 <div class="col-md-6 mb-3 mb-md-0">
                                    <div class=" position-relative">
                                       <img src="/images/add-ons/add-ons-details/package2/left.jpg" class="img-fluid  left-img "
                                          alt="add-ons-image ">
                                       <div class="all-pictures-btn">
                                          <a href="/user/package-gallery" class="theme-btn primary-btn d-inline-flex">
                                             <img class="me-2" src="/images/add-ons/add-ons-details/photo-icon.svg"
                                                alt="shopping-icon">
                                             See all pictures
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6 right-img ">
                                    <div class="row">
                                       <div class="col-sm-6">
                                          <img src="/images/add-ons/add-ons-details/package2/right-1.jpg"
                                             class="img-fluid mb-3 photo" alt="add-ons-image ">
                                          <img src="/images/add-ons/add-ons-details/package2/right-2.jpg"
                                             class="img-fluid photo  mb-3 mb-sm-0" alt="add-ons-image ">
                                       </div>
                                       <div class="col-sm-6">
                                          <img src="/images/add-ons/add-ons-details/package2/right-3.jpg"
                                             class="img-fluid mb-3 photo" alt="add-ons-image ">
                                          <div class="position-relative">
                                             <img src="/images/add-ons/add-ons-details/package2/right-4.jpg" class="img-fluid photo "
                                                alt="add-ons-image ">
                                             <img src="/images/play-icon.svg" class="img-fluid  play-icon" alt="add-ons-image ">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 pt-3">
                                    <p class="body-3-medium  text-black">Combine with the "Corona Pack bronze" you can also add a
                                       Zoom streaming pack so all your guest (up to 100) can log onto the dedicated link you are
                                       provided. That way they can be part of your special day - no matter where they are. AND
                                       regardless of restrictions on guest numbers.
                                    </p>
                                    <ul class="addons-list">
                                       <li>Includes everything in the standard "Corona Pack" (see above), plus </li>
                                       <li>Set up of a dedicated Zoom meeting (from our PRO account) for your ceremony with a simple
                                          link for you to share with your guests. Max 100 guest.
                                       </li>
                                       <li> Dedicated camera on a tripod with radio microphone to ensure the best quality sound.
                                       </li>
                                       <li>Positioning of the camera to ensure capturing every moment. </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-3 col-xl-2">
                        <div class="d-flex">
                           <div class="numberCircle align-self-center">3</div>
                           <p class="subheader-3 neutral-100 align-self-center mb-0 ms-2">Packages 3</p>
                        </div>
                     </div>
                     <div class="col-lg-9 col-xl-10 mt-3 mt-md-0">
                        <div class="row">
                           <div class="col-lg-12 d-xl-flex justify-content-between">
                            <div class="align-self-center mb-3 mt-3 mt-lg-0 mb-xl-0">
                                 <h2 class="h3 neutral-100">The corona pack gold ??? $399</h2>
                              </div>
                              <a role="button" class="theme-btn primary-btn" data-bs-toggle="modal" data-bs-target="#add_to_my_wedding">
                                <img class="me-2" src="/images/shopping-icon.svg" alt="shopping-icon">
                                Add to my wedding
                             </a>
                           </div>
                           <div class="col-12 image-block pt-3">
                              <div class="row">
                                 <div class="col-md-6 mb-3 mb-md-0">
                                    <div class=" position-relative">
                                       <img src="/images/add-ons/add-ons-details/package3/left.jpg" class="img-fluid  left-img "
                                          alt="add-ons-image ">
                                       <div class="all-pictures-btn">
                                          <a href="/user/package-gallery" class="theme-btn primary-btn d-inline-flex">
                                             <img class="me-2" src="/images/add-ons/add-ons-details/photo-icon.svg"
                                                alt="shopping-icon">
                                             See all pictures
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6 right-img ">
                                    <div class="row">
                                       <div class="col-md-6">
                                          <img src="/images/add-ons/add-ons-details/package3/right-1.jpg"
                                             class="img-fluid mb-3 photo" alt="add-ons-image ">
                                          <img src="/images/add-ons/add-ons-details/package3/right-2.jpg"
                                             class="img-fluid photo mb-3 mb-sm-0" alt="add-ons-image ">
                                       </div>
                                       <div class="col-md-6">
                                          <img src="/images/add-ons/add-ons-details/package3/right-3.jpg"
                                             class="img-fluid mb-3 photo" alt="add-ons-image ">
                                          <div class="position-relative">
                                             <img src="/images/add-ons/add-ons-details/package3/right-4.jpg" class="img-fluid photo "
                                                alt="add-ons-image ">
                                             <img src="/images/play-icon.svg" class="img-fluid  play-icon" alt="add-ons-image ">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 pt-3">
                                    <p class="body-3-medium text-black">Combine with the "Corona Pack bronze & silver " you can
                                       also get a photo & video package
                                    </p>
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
                  </div> -->
               </section>
            </div>
         </div>
      </div>
   </div>
</div>
@include('elements.partner.contact-partner')
@include('elements.user.popup.add-my-wedding-popup')
@endsection