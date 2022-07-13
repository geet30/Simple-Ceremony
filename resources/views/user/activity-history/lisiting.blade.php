@extends('layouts.app')
@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-md-3 col-lg-2 p-0">
   @include('elements.user-sidebar')
</div>
<div class="col-md-9 col-lg-10 px-md-4">
   @include('elements.user-header')
   <div class="card panel-card h-87vh">
      <div class="card-body">
         <div class="row mb-4">
            <div class="col-sm-6">
               <h1 class="h3 neutral-100 mb-0">Activity history</h1>
            </div>
            <div class="col-sm-6 text-sm-end mt-3 mt-sm-0"> <a class="theme-btn primary-btn d-inline-flex justify-content-center"  data-bs-toggle="offcanvas" data-bs-target="#add" aria-controls="add">
               <img class="me-2" src="/images/icons/add.svg" alt="shopping-icon">
               Create list to do
               </a>
            </div>
         </div>
         <div  class="row">
            <div class="col-12">
               <ul class="events p-0 activity-history">
                  <li>
                     <span class="step-point"></span>
                     <div class="steps-information  ">
                        <div class="steps-information-details custom-padding border-none">
                           <p class="small-text2 neutral-70 mb-1">March, 03 2022 at 13.00</p>
                           <p class="body-2 netural-100 mb-0 ">
                              NoIM successfully sent
                           </p>
                        </div>
                     </div>
                  </li>
                  <li>
                     <span class="step-point"></span>
                     <div class="steps-information  ">
                        <div class="steps-information-details custom-padding border-none">
                           <p class="small-text2 neutral-70 mb-1">March, 18 2022 at 13.00</p>
                           <p class="body-2 netural-100 mb-0 ">
                              You get feedback on NoIM form
                           </p>
                        </div>
                     </div>
                  </li>
                  <li>
                     <span class="step-point"></span>
                     <div class="steps-information  ">
                        <div class="steps-information-details custom-padding border-none">
                           <p class="small-text2 neutral-70 mb-1">March, 20 2022 at 13.00</p>
                           <p class="body-2 netural-100 mb-0 ">NoIM successfully sent</p>
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
                                 <div class="col-md-6  neutral-70 small-text2 d-flex justify-content-end">March, 03 2022 at 13.00</div>
                                 <div class="col-12">
                                    <p class="body-3-regular neutral-100 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus arcu ac leo accumsan dignissim. Phasellus vulputate neque at urna interdum, sed dignissim est consectetur. Pellentesque consequat </p>
                                 </div>
                              </div>
                           </div>
                              <a  class="col-12 mt-3 text-decoration-none d-flex justify-content-end reply-btn replay-btn-2">
                                 <div class="d-flex">
                                    <div class="align-self-center button-1 turquoise-100">Reply </div>
                                    <div class="align-self-center ms-2"><span class="circle-content">3</span></div>
                                 </div>
                              </a>
                           <div class="user-activity reply-content">
                           <ul class="tree position-relative mt-2 user-tree">
                              <li>
                                 <span class="tree-label position-relative w-100">
                                    <div class="activity-answer ms-3">
                                       <div class="row">
                                          <div class="col-md-6 ">
                                             <p class="body-3-medium  text-black mb-0">You</p>
                                          </div>
                                          <div class="col-md-6  neutral-70 small-text2 d-flex justify-content-end">
                                             <div class="d-flex">
                                                <div class="align-self-center">March, 04 2022 at 14.00</div>
                                                <div class="align-self-center ms-2"> 
                                                   <a href="" class="me-2 d-flex"><img src="/images/icons/delete-red.svg" alt="Delete" class="img-fluid"></a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <p class="body-3-regular neutral-100 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus arcu ac leo accumsan dignissim. Phasellus vulputate neque at urna interdum, sed dignissim est consectetur. Pellentesque consequat Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus arcu ac leo accumsan dignissim. Phasellus vulputate neque at urna interdum, sed dignissim est consectetur. Pellentesque consequat  </p>
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
                                          <div class="col-md-6  neutral-70 small-text2 d-flex justify-content-end">March, 05 2022 at 12.00</div>
                                          <div class="col-12">
                                             <p class="body-3-regular neutral-100 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus arcu ac leo accumsan dignissim. Phasellus vulputate neque at urna interdum, sed dignissim est consectetur. Pellentesque consequat Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus arcu ac leo accumsan dignissim. Phasellus vulputate neque at urna interdum, sed dignissim est consectetur. Pellentesque consequat </p>
                                          </div>
                                       </div>
                                    </div>
                                 </span>
                              </li>
                              <li>
                                 <span class="tree-label position-relative w-100">
                                    <div class="ms-3 ">
                                       <input type="text" placeholder="Type your answer here" class="form-control body-3-regular netural-100" name="name" id="preferredname2" autofocus>
                                    </div>
                                 </span>
                              </li>
                              
                           </ul>
                           <div class="d-flex justify-content-lg-end   justify-content-center mb-4">
                           <a class="theme-btn primary-btn me-2  cursor-pointer">Send</a>
                           <a class="theme-btn primary-btn-border  cursor-pointer">Cancel</a>
                        </div>
</div>
                        </div>
                      
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
@include('elements.user.list.edit')
@endsection