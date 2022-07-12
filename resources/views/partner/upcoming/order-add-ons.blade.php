@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-md-3 col-lg-2 p-0">
         @include('elements.partner-sidebar')
      </div>
      <div class="col-md-9 col-lg-10 px-md-4">
         @include('elements.partner-panel-header')
         <a href="./all-upcoming" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
         <div class="card panel-card">
            <div class="card-body">
               <div class="row">
                  <div class="col-xl-6 py-31">
                     <form class="availablity-overview-scrollbar" method="POST" id="availablity-overview-style">
                        <div  class="force-overflow  w-97">
                           <div class="row">
                              <div class="col-lg-12 d-md-flex justify-content-between">
                                 <div class="align-self-center">
                                    <h2 class="h3 neutral-100">The corona pack bronze • $ 199</h2>
                                 </div>
                              </div>
                              <div class="col-12 col-12 d-none">
                                 <div class="add-ons-discount d-flex mt-4 mb-3">
                                    <div class="add-ons-discount-offer text-center me-4">
                                       <p class="mb-1 small-text2 neutral-100">AC admin fee</p>
                                       <h3 class="h3 mb-0 neutral-100">10%</h3>
                                    </div>
                                    <div class="add-ons-after-discount-price text-center">
                                       <p class="mb-1 small-text2 neutral-100">Total fee <br>partners get</p>
                                       <h3 class="h3 mb-0 neutral-100">$ 108</h3>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-12 image-block pt-3">
                                 <div class="row">
                                    <div class="col-md-12 right-img">
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <img src="/images/add-ons/add-ons-details/right-1.jpg" class="img-fluid mb-3 photo" alt="add-ons-image ">
                                             <img src="/images/add-ons/add-ons-details/right-2.jpg" class="img-fluid photo mb-3 mb-sm-0 " alt="add-ons-image ">
                                          </div>
                                          <div class="col-sm-6">
                                             <img src="/images/add-ons/add-ons-details/right-3.jpg" class="img-fluid mb-3 photo" alt="add-ons-image ">
                                             <div class="position-relative">
                                                <img src="/images/add-ons/add-ons-details/right-4.jpg" class="img-fluid photo " alt="add-ons-image ">
                                                <img src="/images/play-icon.svg" class="img-fluid  play-icon" alt="add-ons-image ">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="all-pictures-btn mt-3">
                                       <a href="#" class="theme-btn primary-btn d-inline-flex">
                                          <img class="me-2" src="/images/add-ons/add-ons-details/photo-icon.svg" alt="shopping-icon">
                                          See all pictures
                                       </a>
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
                                          <li>Frame your ceremony with a beautiful chiffon with silk flowers</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="col-xl-6  ">
                     <div class="card activity-history-card pt-31 primary-border-left">
                        <div class="card-header">
                           <h2 class="h3 neutral-100 ">Activity history</h2>
                        </div>
                        <div class="card-body">
                           <form class="availablity-overview-scrollbar w-100 ps-05 h-36" method="POST" id="availablity-overview-style">
                              <div  class="force-overflow  w-97 ">
                                 <div  class="row">
                                    <div class="col-12">
                                       <ul class="events p-0 activity-history">
                                          <li>
                                             <span class="step-point"></span>
                                             <div class="steps-information  ">
                                                <div class="steps-information-details custom-padding border-none">
                                                   <p class="small-text2 neutral-70 mb-1">March, 03 2022 at 13.00</p>
                                                   <p class="body-2 netural-100 mb-0 ">
                                                      NOIM verified by Michael (Simpleceremonies admin)
                                                   </p>
                                                </div>
                                             </div>
                                          </li>
                                          <li>
                                             <span class="step-point"></span>
                                             <div class="steps-information  ">
                                                <div class="steps-information-details custom-padding border-none">
                                                   <p class="small-text2 neutral-70 mb-1">March, 15 2022 at 07.00</p>
                                                   <p class="body-2 netural-100 mb-0 ">
                                                      NOIM and instructions send and received
                                                   </p>
                                                </div>
                                             </div>
                                          </li>
                                          <li>
                                             <span class="step-point"></span>
                                             <div class="steps-information  ">
                                                <div class="steps-information-details custom-padding border-none">
                                                   <p class="small-text2 neutral-70 mb-1">March, 15 2022 at 06.00</p>
                                                   <p class="body-2 netural-100 mb-0 ">
                                                      Marriage celebrant sent feedback to the couple
                                                   </p>
                                                </div>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="steps-information  ">
                                                <div class="steps-information-details custom-padding border-none">
                                                   <div class="activity-answer">
                                                      <div class="row">
                                                         <div class="col-md-6 ">
                                                            <div class="d-flex">
                                                               <div class="align-self-center"><img src="/images/icons/header-logo.svg" class="rounded-circle theme-avtar" alt="Created"></div>
                                                               <div class="align-self-center  ms-2">
                                                                  <p class="body-3-medium  text-black mb-0">Dave</p>
                                                                  <p class="small-text3 text-black mb-0">Admin Simple ceremonies</p>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-6  neutral-75 small-text2 d-flex justify-content-end">March, 03 2022 at 13.00</div>
                                                         <div class="col-12">
                                                            <p class="body-3-regular neutral-100 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus arcu ac leo accumsan dignissim. Phasellus vulputate neque at urna interdum, sed dignissim est consectetur. Pellentesque consequat </p>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <ul class="tree position-relative mt-2">
                                                      <li>
                                                         <span class="tree-label position-relative">
                                                            <div class="activity-answer ms-3">
                                                               <div class="row">
                                                                  <div class="col-md-6 ">
                                                                     <p class="body-3-medium  text-black mb-0">Johny</p>
                                                                     <p class="small-text3 text-black mb-0">Couples</p>
                                                                  </div>
                                                                  <div class="col-md-6  neutral-75 small-text2 d-flex justify-content-end">March, 03 2022 at 13.00</div>
                                                                  <div class="col-12">
                                                                     <p class="body-3-regular neutral-100 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus arcu ac leo accumsan dignissim. Phasellus vulputate neque </p>
                                                                     <div class="d-flex justify-content-end">
                                                                        <a href="" class="me-2 d-flex"><img src="/images/icons/delete.svg" alt="Delete" class="img-fluid"></a>
                                                                        <a href="" class="d-flex"><img src="/images/icons/edit-primary.svg" alt="Edit" class="img-fluid"></a>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </span>
                                                      </li>
                                                      <li>
                                                         <span class="tree-label position-relative">
                                                            <div class="activity-answer ms-3">
                                                               <div class="row">
                                                                  <div class="col-md-6 ">
                                                                     <div class="d-flex">
                                                                        <div class="align-self-center"><img src="/images/icons/header-logo.svg" class="rounded-circle theme-avtar" alt="Created"></div>
                                                                        <div class="align-self-center  ms-2">
                                                                           <p class="body-3-medium  text-black mb-0">Dave</p>
                                                                           <p class="small-text3 text-black mb-0">Admin Simple ceremonies</p>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                                  <div class="col-md-6  neutral-75 small-text2 d-flex justify-content-end">March, 03 2022 at 13.00</div>
                                                                  <div class="col-12">
                                                                     <p class="body-3-regular neutral-100 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus arcu ac leo accumsan dignissim. Phasellus vulputate neque at urna interdum, sed dignissim est consectetur. Pellentesque consequat </p>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </span>
                                                      </li>
                                                      <li>
                                                         <span class="tree-label position-relative w-100">
                                                            <div class="ms-3 ">
                                                               <input type="text" value="Add" class="form-control body-1 netural-100" name="name" id="preferredname2" autofocus>
                                                            </div>
                                                         </span>
                                                      </li>
                                                   </ul>
                                                </div>
                                                <div class="d-flex justify-content-lg-end   justify-content-center mb-4">
                                                   <a class="theme-btn primary-btn me-2  cursor-pointer">Send</a>
                                                   <a class="theme-btn primary-btn-border  cursor-pointer">Cancel</a>
                                                </div>
                                             </div>
                                          </li>
                                          <li>
                                             <span class="step-point"></span>
                                             <div class="steps-information  ">
                                                <div class="steps-information-details custom-padding border-none">
                                                   <p class="small-text2 neutral-70 mb-1 ">March, 16 2022 at 13.00</p>
                                                   <p class="body-2 netural-100 mb-0 ">
                                                      Couple uploaded ID card
                                                   </p>
                                                </div>
                                             </div>
                                          </li>
                                          <li>
                                             <span class="step-point"></span>
                                             <div class="steps-information  ">
                                                <div class="steps-information-details custom-padding border-none">
                                                   <p class="small-text2 neutral-70 mb-1">March, 17 2022 at 13.00</p>
                                                   <p class="body-2 netural-100 mb-0 ">
                                                      Marriage Celebrant accepted the forms
                                                   </p>
                                                </div>
                                             </div>
                                          </li>
                                          <li>
                                             <span class="step-point"></span>
                                             <div class="steps-information  ">
                                                <div class="steps-information-details custom-padding border-none">
                                                   <p class="small-text2 neutral-70 mb-1">14-03-2022  12.00</p>
                                                   <p class="body-2 netural-100 mb-0 ">
                                                      Couple uploaded the signed forms
                                                   </p>
                                                </div>
                                             </div>
                                          </li>
                                          <li>
                                             <span class="step-point"></span>
                                             <div class="steps-information  ">
                                                <div class="steps-information-details custom-padding border-none">
                                                   <p class="small-text2 neutral-70 mb-1">13-03-2022  17.00</p>
                                                   <p class="body-2 netural-100 mb-0 ">
                                                      Email NOIM reminder sent
                                                   </p>
                                                </div>
                                             </div>
                                          </li>
                                          <li>
                                             <span class="step-point"></span>
                                             <div class="steps-information  ">
                                                <div class="steps-information-details custom-padding border-none">
                                                   <p class="small-text2 neutral-70 mb-1">13-03-2022  17.00</p>
                                                   <p class="body-2 netural-100 mb-0 ">
                                                      NOIM uploaded
                                                   </p>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <div class="bg-turquoise-50 hidden-footer">
                           <textarea class="form-control body-1 netural-100" autofocus id="ceremonyplace" placeholder="Type here" rows="5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus arcu ac leo accumsan dignissim. Phasellus vulputate neque at urna interdum, sed dignissim est consectetur. Pellentesque consequat velit a nisi iaculis facilisis in et tortor. Sed lobortis nisi sodales purus sollicitudin, nec finibus velit pellentesque. Integer at lacus vel nunc pulvinar mollis. Proin semper aliquam ultrices. Curabitur ut lorem eget tellus vehicula consequat vitae eget ante. Suspendisse egestas mauris augue, eu porttitor orci efficitur in. Nam erat orci, congue efficitur ex nec, fermentum vulputate nunc. Ut dignissim justo bibendum sagittis tincidunt. Curabitur efficitur porta tellus pulvinar venenatis.</textarea>
                           <div class="d-flex justify-content-lg-end   justify-content-center mt-4 ">
                              <a class="theme-btn primary-btn me-2 show-footer  cursor-pointer">Send</a>
                              <a class="theme-btn primary-btn-border show-footer  cursor-pointer">Cancel</a>
                           </div>
                        </div>
                        <div class="card-footer bg-turquoise-50 d-flex justify-content-center custom-footer">
                           <a class="theme-btn black-btn show-footer cursor-pointer" >Create new thread <img class="ms-2" src="/images/icons/chat.svg" alt="Chat Icon"></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('elements.reject-reason-sidebar')
@endsection