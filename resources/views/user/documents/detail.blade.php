@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-md-3 col-lg-2 p-0">
         @include('elements.user-sidebar')
      </div>
      <div class="col-md-9 col-lg-10 px-md-4">
         @include('elements.user-header')
         <div class="card panel-card ">
            <div class="card-body">
               <div class="row mb-5">
                  <div class="col-6"><a href="./lisiting-to-do" class="theme-btn primary-btn d-inline-flex"><img class="me-3" src="/images/icons/back-white.svg" alt="Back Icon">Back</a></div>
                  <div class="col-6 text-end "><a href="./edit" class="theme-btn primary-btn-border d-inline-flex "><img class="me-2" src="/images/icons/edit-primary.svg" alt="Back Icon">Edit</a></div>
               </div>
               <div class="row">
                  <div class="col-12">
                     <h1 class="h3 neutral-100 mb-3">Title of the note</h1>
                     <div class="align-items-baseline d-flex mb-4">
                        <div class="theme-tag-blue d-flex  mb-3 mb-md-0 me-2 justify-content-center justify-content-md-start">
                           <div class="align-self-center "><img src="/images/icons/calendar-blue.svg" class="img-fluid calender-icon" alt="calendar"></div>
                           <div class="align-self-center"> June 20, 2022 </div>
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
                                          <div  class="align-self-center"><img src="/images/avtar/michael.png" class="rounded-circle theme-avtar"  alt="Created" /></div>
                                          <div class="align-self-center  ps-1">
                                             <p class="body-2-semi-bold  neutral-100 mb-0">Michael</p>
                                             <p class="small-text3 neutral-100 mb-0">Marriage Celebrant</p>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="d-flex mb-11">
                                          <div  class="align-self-center"><img src="/images/icons/header-logo.svg" class="rounded-circle theme-avtar"  alt="Created" /></div>
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
                     <p class="body-3-regular neutral-100 mb-41">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque iaculis, enim id egestas dapibus, justo enim molestie urna, quis euismod mauris nulla quis dui. Etiam dapibus nunc nec porta tempus. Proin aliquam posuere scelerisque. Morbi efficitur tellus nec lorem lacinia, nec egestas nibh luctus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Praesent augue diam, facilisis eget tempus vel, feugiat nec turpis. Maecenas faucibus est in enim dictum, quis elementum neque dignissim. Maecenas ut pretium turpis. Nullam id imperdiet ex. Proin sit amet magna mi. Sed et urna nisl. Cras elementum nibh posuere, pharetra sem vitae, fermentum lectus.</p>
                     <div class="upload__box upload__box-without-bg">
                        <div class="upload__btn-box">
                           <label class=" ">
                              <div class="mb-0 d-flex">
                                 <div class="me-2 align-self-center"><img src="/images/icons/attachment.svg" class="img-fluid " alt="attachment-icon"></div>
                                 <div class="me-2 align-self-center h4 neutral-100 mb-0">Attachments</div>
                                 <div class="align-self-center turquoise-100 h4 mb-0">Upload attachment</div>
                              </div>
                              <input type="file" multiple="" data-max_length="20" class="upload__inputfile">
                           </label>
                        </div>
                        <!-- <div class="upload__img-wrap"></div> -->
                     </div>
                     <!-- just for showing frontend person -->
                     <div class="row">
                        <div class="col-md-3 col-xl-2 mb-3 mb-md-0">
                           <div><img src="/images/sample/1.png" class="img-fluid w-100" alt="img"></div>
                           <div class="d-flex mt-3 justify-content-between">
                              <div class="align-self-center body-3-regular neutral-100">Namefile.jpg</div>
                              <div class="align-self-center"><img src="/images/icons/delete-gray.svg" class="img-fluid" alt="delete"></div>
                           </div>
                        </div>
                        <div class="col-md-3 col-xl-2 mb-3 mb-md-0">
                           <div><img src="/images/sample/2.png" class="img-fluid w-100"  alt="img"></div>
                           <div class="d-flex mt-3 justify-content-between">
                              <div class="align-self-center body-3-regular neutral-100">Namefile.jpg</div>
                              <div class="align-self-center"><img src="/images/icons/delete-gray.svg" class="img-fluid" alt="delete"></div>
                           </div>
                        </div>
                        <div class="col-md-3 col-xl-2 mb-3 mb-md-0">
                           <div><img src="/images/sample/3.png" class="img-fluid w-100" alt="img"></div>
                           <div class="d-flex mt-3 justify-content-between">
                              <div class="align-self-center body-3-regular neutral-100">Namefile.jpg</div>
                              <div class="align-self-center"><img src="/images/icons/delete-gray.svg" class="img-fluid" alt="delete"></div>
                           </div>
                        </div>
                        <div class="col-md-3 col-xl-2 mb-3 mb-md-0">
                           <div class="upload__img-wrap"></div>
                        </div>
                     </div>
                     <!-- just for showing frontend person -->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection