@extends('layouts.panels')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-3 col-xl-2 p-0">
         @include('elements.common.user-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-9 col-xl-10 px-4">
         @include('elements.common.panel-header')
         <div class="card panel-card h-87vh">
            <div class="card-body">
               <div class="communication">
                  <div class="row mb-4">
                     <div class="col-lg-6">
                        <h1 class="h3 neutral-100 mb-0">Communications</h1>
                     </div>
                     <div class="col-lg-6 d-flex justify-content-lg-end mt-3 mt-lg-0"> 
                        <a class="theme-btn  primary-btn d-inline-flex justify-content-center"  data-bs-toggle="offcanvas" data-bs-target="#add" aria-controls="add">
                        <img class="me-2" src="/images/icons/add.svg" alt="shopping-icon">
                        Create thread
                        </a>
                     </div>
                  </div>
                  <div class="row mb-4">
                     <div class="col-md-12">
                        <div class="communication-thread">
                           <div class="activity-answer">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="d-flex">
                                       <div class="align-self-center"><img src="/images/icons/header-logo.svg" class="rounded-circle theme-avtar" alt="Created"></div>
                                       <div class="align-self-center  ms-2">
                                          <p class="body-3-medium  text-black mb-0">Dave</p>
                                          <p class="small-text3 text-black mb-0">Admin Simple ceremonies</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6 neutral-70 small-text2 d-flex justify-content-md-end mt-2 mt-md-0">March, 03 2022 at 13.00</div>
                                 <div class="col-12">
                                    <p class="body-3-regular neutral-100 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus arcu ac leo accumsan dignissim. Phasellus vulputate neque at urna interdum, sed dignissim est consectetur. Pellentesque consequat </p>
                                 </div>
                              </div>
                           </div>
                           <div class="row mt-3">
                              <div class="col-12 d-flex justify-content-end reply-btn replay-btn-2 pe-5">
                                 <a class="text-decoration-none cursor-pointer">
                                    <div class="d-flex">
                                       <div class="align-self-center button-1 turquoise-100">Reply </div>
                                       <div class="align-self-center ms-2"><span class="circle-content">3</span></div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                           <div class="user-activity reply-content mt-3">
                              <ul class="tree position-relative mt-2 user-tree">
                                 <li>
                                    <span class="tree-label position-relative w-100">
                                       <div class="activity-answer ms-3">
                                          <div class="row">
                                             <div class="col-md-6 ">
                                                <p class="body-3-medium  text-black mb-0">You</p>
                                             </div>
                                             <div class="col-md-6  neutral-70 small-text2 d-flex justify-content-md-end mt-2 mt-md-0">
                                                <div class="d-flex">
                                                   <div class="align-self-center">March, 04 2022 at 14.00</div>
                                                   <div class="align-self-center ms-3"> 
                                                      <a href="" class="me-4 d-flex"><img src="/images/icons/delete-red.svg" alt="Delete" class="img-fluid"></a>
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
                                             <div class="col-md-6  neutral-70 small-text2 d-flex justify-content-md-end mt-2 mt-md-0">March, 05 2022 at 12.00</div>
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
                              <div class="d-flex justify-content-lg-end   justify-content-center mt-4">
                                 <a class="theme-btn primary-btn me-2  cursor-pointer cancel-btn">Send</a>
                                 <a class="theme-btn primary-btn-border  cursor-pointer cancel-btn">Cancel</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="activity-history-listing">
                  <div class="row mb-4">
                     <div class="col-md-12">
                        <h1 class="h3 neutral-100 mb-0">History</h1>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-12">
                        <ul class="events ps-1 activity-history">
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
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
@include('elements.user.activity-history.add')
@endsection