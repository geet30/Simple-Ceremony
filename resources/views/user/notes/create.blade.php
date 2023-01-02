@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 p-0">
         @include('elements.common.user-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-md-4">
      @include('elements.common.panel-header')
         <div class="card panel-card ">
            <div class="card-body">
               <form class="needs-validation pb-5 " method="POST" novalidate>
                  <div class="row mb-5">
                     <div class="col-6"><a href="/user/lisiting-to-do" class="theme-btn primary-btn d-inline-flex"><img class="me-3" src="/images/icons/back-white.svg" alt="Back Icon">Back</a></div>
                     <div class="col-6 text-end "><a href="/user/lisiting-to-do" class="theme-btn primary-btn-border d-inline-flex ">Save</a></div>
                  </div>
                  <div class="row">
                     <div class="col-md-12 mb-4">
                        <label for="InputName" class="form-label small-text2">Add title here</label>
                        <input type="text" placeholder="Type your title here" class="form-control body-1 netural-100" name="name" id="InputName" required>
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Title is required</div>
                     </div>
                     <div class="col-md-12 mb-4">
                        <label class="form-label small-text2">Note</label>
                        <textarea placeholder="Type here" class="form-control body-1 netural-100" rows="12"></textarea>
                     </div>
                     <div class="col-md-12 col-xl-6 mb-4">
                        <label class="form-label small-text2">Who can see/receive notes</label>
                        <select class="js-placeholder-single-input form-control" required="">
                           <option value="L1" selected="">Choose here</option>
                           <option value="L2">location2</option>
                           <option value="L3">location3</option>
                           <option value="L4">location4</option>
                        </select>
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Locations is required</div>
                     </div>
                     <div class="col-12">
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
                           <div class="upload__img-wrap"></div>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection