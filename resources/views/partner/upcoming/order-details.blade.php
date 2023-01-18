@extends('layouts.panels')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-3 col-xl-2 p-0">
         @include('elements.partner.partner-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-9 col-xl-10 px-4">
         @include('elements.partner.partner-panel-header')
         <div class="col-12">
            <a href="/all-upcoming" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
         </div>
         <div class="card panel-card mb-4">
            <div class="card-body">
               <div class="row">
                  <div class="col-xl-6">
                     <div class="order-details-card" id="availablity-overview-style">
                        <section class="pb-40">
                           <div class="row">
                              <div class="col-md-12 align-self-center">
                                 <div class="d-flex align-items-lg-center flex-column flex-lg-row">
                                    <h1 class="h3 neutral-100 mb-3 mb-lg-0 me-3">Order details</h1>
                                    <div class="dropdown theme-dropdown off-canvas-change-status mb-3 mb-lg-0">
                                       <button class="btn dropdown-toggle gray-gray-900 button-1 theme-btn white-btn-border" type="button"
                                          data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          Order status
                                       </button>
                                       <ul class="dropdown-menu p-0" aria-labelledby="dropdownMenuButton1">
                                          <li class="p-2"><a class="dropdown-item cursor-pointer mb-0 d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#partner_change_status_modal"><span class="status pending">Pending</span></a></li>
                                          <li class="p-2"><a class="dropdown-item cursor-pointer mb-0 d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#partner_change_status_modal"><span class="status booked">Booked</span></a></li>
                                          <li class="p-2"><a class="dropdown-item cursor-pointer mb-0 d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#partner_change_status_modal"><span class="status rejected">Rejected</span></a></li>
                                          <li class="p-2"><a class="dropdown-item cursor-pointer mb-0 d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#partner_change_status_modal"><span class="status finalised">Finalised</span></a></li>
                                          <li class="p-2"><a class="dropdown-item cursor-pointer mb-0 d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#partner_change_status_modal"><span class="status settled">Settled</span></a></li>
                                       </ul>
                                    </div>
                                    <div class="table-dropdown approval-btns d-flex mb-3 mb-lg-0">
                                       <a class="waiting-approval p-1 px-3 d-inline text-decoration-none ms-0 ms-lg-3 status-text">Pending</a>
                                       <a class="approved p-1 px-3 d-inline text-decoration-none ms-0 ms-lg-3 d-none status-text">Approve</a>
                                       <a class="rejected p-1 px-3 d-inline text-decoration-none ms-0 ms-lg-3 d-none status-text">Reject</a>
                                    </div>
                                 </div>
                                 <!-- <p class="body-3 mb-0 mt-3"><span class="body-1">Criteria : </span>Available on Blues Point Reserve, Bradfield Park</p> -->
                              </div>
                           </div>
                        </section>
                        <form class="needs-validation" method="POST" novalidate>
                           <div class="row align-items-center">
                              <div class="col-md-6 col-lg-6 mb-4">
                                 <label class="form-label small-text2">Name package</label>
                                 <input type="text" value="The corona pack bronze" class="form-control body-1 netural-100" name="name-package-1" readonly="">
                              </div>
                              <div class="col-md-2 col-lg-3 mb-4">
                                 <label class="form-label small-text2 d-block text-md-center">Quantity</label>
                                 <input type="text" value="1" class="form-control body-1 netural-100 text-md-center" name="quantity-1" readonly="">
                              </div>
                              <div class="col-md-4 col-lg-3 mb-4">
                                 <label class="form-label small-text2 d-none d-md-block"></label>
                                 <div class="d-flex mt-4">
                                    <a href="/order-add-ons" class="button-1 turquoise-100 text-decoration-none faq-link">See add-ons</a>
                                 </div>
                              </div>
                              <div class="col-md-6 col-lg-6 mb-4">
                                 <label class="form-label small-text2">Name package</label>
                                 <input type="text" value="Zoom streaming" class="form-control body-1 netural-100" name="name-package-2" readonly="">
                              </div>
                              <div class="col-md-2 col-lg-3 mb-4">
                                 <label class="form-label small-text2 d-block text-md-center">Quantity</label>
                                 <input type="text" value="1" class="form-control body-1 netural-100 text-md-center" name="quantity-2" readonly="">
                              </div>
                              <div class="col-md-4 col-lg-3 mb-4">
                                 <label class="form-label small-text2 d-none d-md-block"></label>
                                 <div class="d-flex mt-4">
                                    <a href="/order-add-ons" class="button-1 turquoise-100 text-decoration-none faq-link">See add-ons</a>
                                 </div>
                              </div>
                              <div class="col-md-6 mb-4">
                                 <label class="form-label small-text2">Person 1 preferred names</label>
                                 <input type="text" value="Dave" class="form-control body-1 netural-100" name="person-1-peferred-names" readonly>
                              </div>
                              <div class="col-md-6 mb-4">
                                 <label class="form-label small-text2">Date booking made</label>
                                 <input type="text" value="Jan 23, 2022" class="form-control body-1 netural-100" name="date-marriage" readonly>
                              </div>
                              <div class="col-md-6 mb-4">
                                 <label class="form-label small-text2">Person 1 first name</label>
                                 <input type="text" value="David" class="form-control body-1 netural-100" name="name" readonly>
                              </div>
                              <div class="col-md-6 mb-4">
                                 <label class="form-label small-text2">Person 1 last name</label>
                                 <input type="text" value="Jordan" class="form-control body-1 netural-100" name="name" readonly>
                              </div>
                              <div class="col-md-6 mb-4">
                                 <label class="form-label small-text2">Email</label>
                                 <input type="text" value="david@gmail.com" class="form-control body-1 netural-100" name="name" readonly>
                              </div>
                              <div class="col-md-6 mb-4">
                                 <label class="form-label small-text2">Phone number</label>
                                 <input type="text" value="+61 0909 0900 909" class="form-control body-1 netural-100" name="name" readonly>
                              </div>
                              <div class="col-md-6 mb-4">
                                 <label class="form-label small-text2">Person 2 preferred names</label>
                                 <input type="text" value="Saj" class="form-control body-1 netural-100" name="name" readonly>
                              </div>
                              <div class="col-md-6 mb-4"></div>
                              <div class="col-md-6 mb-4">
                                 <label class="form-label small-text2">Person 2 first name</label>
                                 <input type="text" value="Sarah" class="form-control body-1 netural-100" name="name" readonly>
                              </div>
                              <div class="col-md-6 mb-4">
                                 <label class="form-label small-text2">Person 2 last name</label>
                                 <input type="text" value="Jade" class="form-control body-1 netural-100" name="name" readonly>
                              </div>
                              <div class="col-md-6 mb-4">
                                 <label class="form-label small-text2">Phone number</label>
                                 <input type="text" value="+61 0909 0900 909" class="form-control body-1 netural-100" name="name" readonly>
                              </div>
                              <div class="col-md-6 mb-4"></div>
                              <div class="col-md-6 mb-4">
                                 <label class="form-label small-text2">Date marriage</label>
                                 <input type="text" value="Apr 12, 2022" class="form-control body-1 netural-100" name="name" readonly>
                              </div>
                              <div class="col-md-6 mb-4">
                                 <label class="form-label small-text2">Time</label>
                                 <input type="text" value="09:30" class="form-control body-1 netural-100" name="name" readonly>
                              </div>
                              <div class="col-md-6 mb-4">
                                 <label class="form-label small-text2">Location</label>
                                 <input type="text" value="Bradfield park" class="form-control body-1 netural-100" name="name" readonly>
                              </div>
                              <div class="col-md-6 mb-4"></div>
                              <div class="col-md-12 mb-4">
                                 <label class="form-label small-text2">Address details</label>
                                 <input type="text" value="Alfred St S, Milsons Point NSW 2061, Australia" class="form-control body-1 netural-100" name="name" readonly>
                              </div>
                              <div class="col-md-12 mb-4">
                                 <label class="form-label small-text2">Give note</label>
                                 <textarea class="form-control small-text1 netural-100" rows="15" readonly>Type here</textarea>
                              </div>
                              <div class="col-md-12">
                                 <button type="submit" class="theme-btn primary-btn me-3">Save</button>
                              </div>
                           </div>
                        </form> 
                     </div>
                  </div>
                  <div class="col-xl-6">
                     <div class="card activity-history-card pt-31 primary-border-left">
                        <div class="card-header">
                           <h2 class="h3 neutral-100 ">Activity history</h2>
                        </div>
                        <div class="card-body">
                           <form class="availablity-overview-scrollbar w-100 ps-05 h-55" method="POST" id="availablity-overview-style">
                              <div class="force-overflow  w-97 ">
                                 <div class="row">
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
                                             <!-- <span class="step-point"></span> -->
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
                                                   <p class="small-text2 neutral-70 mb-1">14-03-2022 12.00</p>
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
                                                   <p class="small-text2 neutral-70 mb-1">13-03-2022 17.00</p>
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
                                                   <p class="small-text2 neutral-70 mb-1">13-03-2022 17.00</p>
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
                           <a class="theme-btn black-btn show-footer cursor-pointer">Create new thread <img class="ms-2" src="/images/icons/chat.svg" alt="Chat Icon"></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('elements.common.reject-reason-sidebar')
@endsection