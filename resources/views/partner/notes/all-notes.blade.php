@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-md-3 col-lg-2 p-0">
         @include('elements.partner-sidebar')
      </div>
      <div class="col-md-9 col-lg-10 px-md-4">
         @include('elements.partner-panel-header')
         <div class="card panel-card">
            <div class="card-body">
               <div class="row mb-5">
                  <div class="col-12">
                     <div class="d-flex justify-content-between align-items-center">
                        <h1 class="h3 neutral-100 mb-0">Notes</h1>
                        <a role="button" class="theme-btn primary-btn d-inline-block" data-bs-toggle="offcanvas" data-bs-target="#partner_create_note_sidebar">
                        <img class="me-2" src="/images/icons/add.svg" alt="shopping-icon">
                        Create notes
                        </a>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-6 col-md-12 col-lg-6 col-xl-3 mb-4">
                     <a role="button" class="text-decoration-none"  data-bs-toggle="modal" data-bs-target="#partner_edit_note">
                        <div class="notes-card">
                           <p class="body-1 neutral-100 mb-3">Important to know</p>
                           <p class="body-3-regular neutral-100 mb-3 h-100">The groom's parents just died, make sure you guys understand this situation & don't mention anything...</p>
                           <p class="small-text2 neutral-100 mb-3">Note for</p>
                           <div class="theme-tag-blue d-inline-flex mb-3">
                              <div class="align-self-center "><img src="/images/icons/couple-note-icon.svg" class="img-fluid calender-icon" alt="calendar"></div>
                              <div class="align-self-center">Joe & Jessica</div>
                           </div>
                           <p class="small-text2 neutral-100 mb-3">Created on</p>
                           <div class="align-items-baseline d-flex gap-2 flex-lg-row flex-xl-column flex-xxl-row">
                              <div class="theme-tag-blue d-flex me-0 mb-3 mb-md-0 me-md-2 justify-content-center justify-content-md-start">
                                 <div class="align-self-center "><img src="/images/icons/calendar-blue.svg" class="img-fluid calender-icon" alt="calendar"></div>
                                 <div class="align-self-center">June 20, 2022</div>
                              </div>
                              <div class="position-relative share-icon ">
                                 <div class="theme-tag-blue d-flex justify-content-center justify-content-md-start">
                                    <div class="align-self-center"><img src="/images/icons/share.svg" class="img-fluid " alt="share"></div>
                                    <div class="align-self-center">2 Share</div>
                                 </div>
                                 <div class="share-content-up">
                                    <div class="share-content">
                                       <ul>
                                          <li>
                                             <div class="d-flex mb-11">
                                                <div class="align-self-center"><img src="/images/avtar/michael.png" class="rounded-circle theme-avtar" alt="Created"></div>
                                                <div class="align-self-center  ps-1">
                                                   <p class="body-2-semi-bold  neutral-100 mb-0">Michael</p>
                                                   <p class="small-text3 neutral-100 mb-0">Marriage Celebrant</p>
                                                </div>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="d-flex mb-11">
                                                <div class="align-self-center"><img src="/images/icons/header-logo.svg" class="rounded-circle theme-avtar" alt="Created"></div>
                                                <div class="align-self-center  ps-1">
                                                   <p class="body-2-semi-bold  neutral-100 mb-0">Admin</p>
                                                   <p class="small-text3 neutral-100 mb-0">Simple ceremonies</p>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="col-sm-6 col-md-12 col-lg-6 col-xl-3 mb-4">
                     <a role="button" class="text-decoration-none"  data-bs-toggle="modal" data-bs-target="#partner_edit_note">
                        <div class="notes-card">
                           <p class="body-1 neutral-100 mb-3">Additional info</p>
                           <p class="body-3-regular neutral-100 mb-3 h-100">Information for all of you. On July 23, 2022 we will have our last meeting</p>
                           <p class="small-text2 neutral-100 mb-3">Note for</p>
                           <div class="theme-tag-blue d-inline-flex mb-3">
                              <div class="align-self-center "><img src="/images/icons/couple-note-icon.svg" class="img-fluid calender-icon" alt="calendar"></div>
                              <div class="align-self-center">David & Sarah</div>
                           </div>
                           <p class="small-text2 neutral-100 mb-3">Created on</p>
                           <div class="align-items-baseline d-flex gap-2 flex-lg-row flex-xl-column flex-xxl-row">
                              <div class="theme-tag-blue d-flex me-0 mb-3 mb-md-0 me-md-2 justify-content-center justify-content-md-start">
                                 <div class="align-self-center "><img src="/images/icons/calendar-blue.svg" class="img-fluid calender-icon" alt="calendar"></div>
                                 <div class="align-self-center">May 20, 2022</div>
                              </div>
                              <div class="position-relative share-icon ">
                                 <div class="theme-tag-blue d-flex justify-content-center justify-content-md-start">
                                    <div class="align-self-center"><img src="/images/icons/share.svg" class="img-fluid " alt="share"></div>
                                    <div class="align-self-center">3 Share</div>
                                 </div>
                                 <div class="share-content-up">
                                    <div class="share-content">
                                       <ul>
                                          <li>
                                             <div class="d-flex mb-11">
                                                <div class="align-self-center"><img src="/images/avtar/michael.png" class="rounded-circle theme-avtar" alt="Created"></div>
                                                <div class="align-self-center  ps-1">
                                                   <p class="body-2-semi-bold  neutral-100 mb-0">Michael</p>
                                                   <p class="small-text3 neutral-100 mb-0">Marriage Celebrant</p>
                                                </div>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="d-flex mb-11">
                                                <div class="align-self-center"><img src="/images/avtar/nathan.png" class="rounded-circle theme-avtar" alt="Created"></div>
                                                <div class="align-self-center  ps-1">
                                                   <p class="body-2-semi-bold  neutral-100 mb-0">Nathan decorat...</p>
                                                   <p class="small-text3 neutral-100 mb-0">Partner</p>
                                                </div>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="d-flex mb-11">
                                                <div class="align-self-center"><img src="/images/icons/header-logo.svg" class="rounded-circle theme-avtar" alt="Created"></div>
                                                <div class="align-self-center  ps-1">
                                                   <p class="body-2-semi-bold  neutral-100 mb-0">Admin</p>
                                                   <p class="small-text3 neutral-100 mb-0">Simple ceremonies</p>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="col-sm-6 col-md-12 col-lg-6 col-xl-3 mb-4">
                     <a role="button" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#partner_edit_note">
                        <div class="notes-card">
                           <p class="body-1 neutral-100 mb-3">Special request</p>
                           <p class="body-3-regular neutral-100 mb-3 h-100">The groom's parents just died, make sure you guys understand this situation & don't mention anything...</p>
                           <p class="small-text2 neutral-100 mb-3">Note for</p>
                           <div class="theme-tag-blue d-inline-flex mb-3">
                              <div class="align-self-center "><img src="/images/icons/couple-note-icon.svg" class="img-fluid calender-icon" alt="calendar"></div>
                              <div class="align-self-center">Chloe & Amy</div>
                           </div>
                           <p class="small-text2 neutral-100 mb-3">Created on</p>
                           <div class="align-items-baseline d-flex gap-2 flex-lg-row flex-xl-column flex-xxl-row">
                              <div class="theme-tag-blue d-flex me-0 mb-3 mb-md-0 me-md-2 justify-content-center justify-content-md-start">
                                 <div class="align-self-center "><img src="/images/icons/calendar-blue.svg" class="img-fluid calender-icon" alt="calendar"></div>
                                 <div class="align-self-center">May 20, 2022</div>
                              </div>
                              <div class="position-relative share-icon ">
                                 <div class="theme-tag-blue d-flex justify-content-center justify-content-md-start">
                                    <div class="align-self-center"><img src="/images/icons/share.svg" class="img-fluid " alt="share"></div>
                                    <div class="align-self-center">1 Share</div>
                                 </div>
                                 <div class="share-content-up">
                                    <div class="share-content">
                                       <ul>
                                          <li>
                                             <div class="d-flex mb-11">
                                                <div class="align-self-center"><img src="/images/icons/header-logo.svg" class="rounded-circle theme-avtar" alt="Created"></div>
                                                <div class="align-self-center  ps-1">
                                                   <p class="body-2-semi-bold  neutral-100 mb-0">Admin</p>
                                                   <p class="small-text3 neutral-100 mb-0">Simple ceremonies</p>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="col-sm-6 col-md-12 col-lg-6 col-xl-3 mb-4">
                     <a role="button" class="text-decoration-none"  data-bs-toggle="modal" data-bs-target="#partner_edit_note">
                        <div class="notes-card">
                           <p class="body-1 neutral-100 mb-3">Important to know</p>
                           <p class="body-3-regular neutral-100 mb-3 h-100">Couples want fireworks after the wedding kiss</p>
                           <p class="small-text2 neutral-100 mb-3">Note for</p>
                           <div class="theme-tag-blue d-inline-flex mb-3">
                              <div class="align-self-center "><img src="/images/icons/couple-note-icon.svg" class="img-fluid calender-icon" alt="calendar"></div>
                              <div class="align-self-center">Matt & Zoe</div>
                           </div>
                           <p class="small-text2 neutral-100 mb-3">Created on</p>
                           <div class="align-items-baseline d-flex gap-2 flex-lg-row flex-xl-column flex-xxl-row">
                              <div class="theme-tag-blue d-flex me-0 mb-3 mb-md-0 me-md-2 justify-content-center justify-content-md-start">
                                 <div class="align-self-center "><img src="/images/icons/calendar-blue.svg" class="img-fluid calender-icon" alt="calendar"></div>
                                 <div class="align-self-center">May 20, 2022</div>
                              </div>
                              <div class="position-relative share-icon ">
                                 <div class="theme-tag-blue d-flex justify-content-center justify-content-md-start">
                                    <div class="align-self-center"><img src="/images/icons/share.svg" class="img-fluid " alt="share"></div>
                                    <div class="align-self-center">1 Share</div>
                                 </div>
                                 <div class="share-content-up">
                                    <div class="share-content">
                                       <ul>
                                          <li>
                                             <div class="d-flex mb-11">
                                                <div class="align-self-center"><img src="/images/icons/header-logo.svg" class="rounded-circle theme-avtar" alt="Created"></div>
                                                <div class="align-self-center  ps-1">
                                                   <p class="body-2-semi-bold  neutral-100 mb-0">Admin</p>
                                                   <p class="small-text3 neutral-100 mb-0">Simple ceremonies</p>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('elements.partner-create-note-sidebar')
@include('elements.partner-edit-note-popup')
@include('elements.partner-notes-edit-sidebar')
@endsection