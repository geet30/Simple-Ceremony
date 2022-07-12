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
               <section class="pb-40">
                  <div class="row">
                     <div class="col-md-8 align-self-center">
                        <div class="table-dropdown d-flex align-items-lg-center flex-column flex-lg-row">
                           <h1 class="h3 neutral-100 mb-3 mb-lg-0">Order details</h1>
                           <div class="approval-btns d-flex">
                              <a class="waiting-approval p-1 px-3 d-inline text-decoration-none ms-0 ms-lg-3">Pending</a>
                              <a class="approved p-1 px-3 d-inline text-decoration-none ms-0 ms-lg-3 d-none">Approve</a>
                              <a class="rejected p-1 px-3 d-inline text-decoration-none ms-0 ms-lg-3 d-none">Reject</a>
                           </div>
                        </div>
                        <p class="body-3 mb-0 mt-3"><span class="body-1">Criteria : </span>Available on Blues Point Reserve, Bradfield Park</p>
                     </div>
                     <div class="col-md-4 align-self-start d-flex justify-content-md-end mt-3 mt-md-0">
                        <a href="#" class="theme-btn primary-btn me-3">Accept</a>
                        <a role="button" class="theme-btn primary-btn-border" data-bs-toggle="offcanvas" data-bs-target="#reject_reason_sidebar" aria-controls="offcanvasfeedbackaddons">Reject</a>
                     </div>
                  </div>
               </section>
               <form class="needs-validation" method="POST" novalidate>
                  <div class="row align-items-center">
                     <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3 mb-4">
                        <label class="form-label small-text2">Name package</label>
                        <input type="text" value="The corona pack bronze" class="form-control body-1 netural-100" name="name" readonly="">
                     </div>
                     <div class="col-md-3 col-lg-2 col-xl-2 col-xxl-1 mb-4">
                        <label class="form-label small-text2 d-block text-md-center">Quantity</label>
                        <input type="text" value="1" class="form-control body-1 netural-100 text-md-center" name="name" readonly="">
                     </div>
                     <div class="col-md-12 col-lg-6 col-xl-6 col-xxl-6 mb-4">
                        <label class="form-label small-text2 d-none d-md-block"></label>
                        <div class="d-flex">
                           <a href="./order-add-ons" class="button-1 turquoise-100 text-decoration-none faq-link">See add-ons</a>
                           <span class="thread-notificaton small-text1 p-1 px-3 d-inline-block text-decoration-none mb-0 ms-3">You got new thread!</span>
                        </div>
                     </div>
                  </div>
                  <div class="row align-items-center">
                     <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3 mb-4">
                        <label class="form-label small-text2">Name package</label>
                        <input type="text" value="Zoom streaming" class="form-control body-1 netural-100" name="name" readonly="">
                     </div>
                     <div class="col-md-3 col-lg-2 col-xl-2 col-xxl-1 mb-4">
                        <label class="form-label small-text2 d-block text-md-center">Quantity</label>
                        <input type="text" value="1" class="form-control body-1 netural-100 text-md-center" name="name" readonly="">
                     </div>
                     <div class="col-md-12 col-lg-6 col-xl-6 col-xxl-6 mb-4">
                        <label class="form-label small-text2 d-none d-md-block"></label>
                        <div class="d-flex">
                           <a href="./order-add-ons" class="button-1 turquoise-100 text-decoration-none faq-link">See add-ons</a>
                        </div>
                     </div>
                  </div>
                  <div class="row align-items-center">
                     <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3 mb-4">
                        <label class="form-label small-text2">Person 1 preferred names</label>
                        <input type="text" value="Dave" class="form-control body-1 netural-100" name="name" readonly>
                     </div>
                  </div>
                  <div class="row align-items-center">
                     <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3 mb-4">
                        <label class="form-label small-text2">Person 1 first name</label>
                        <input type="text" value="David" class="form-control body-1 netural-100" name="name" readonly>
                     </div>
                     <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3 mb-4">
                        <label class="form-label small-text2">Person 1 last name</label>
                        <input type="text" value="Jordan" class="form-control body-1 netural-100" name="name" readonly>
                     </div>
                  </div>
                  <div class="row align-items-center">
                     <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3 mb-4">
                        <label class="form-label small-text2">Email</label>
                        <input type="text" value="david@gmail.com" class="form-control body-1 netural-100" name="name" readonly>
                     </div>
                     <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3 mb-4">
                        <label class="form-label small-text2">Phone number</label>
                        <input type="text" value="+61 0909 0900 909" class="form-control body-1 netural-100" name="name" readonly>
                     </div>
                  </div>
                  <div class="row align-items-center">
                     <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3 mb-4">
                        <label class="form-label small-text2">Person 2 preferred names</label>
                        <input type="text" value="Saj" class="form-control body-1 netural-100" name="name" readonly>
                     </div>
                  </div>
                  <div class="row align-items-center">
                     <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3 mb-4">
                        <label class="form-label small-text2">Person 2 first name</label>
                        <input type="text" value="Sarah" class="form-control body-1 netural-100" name="name" readonly>
                     </div>
                     <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3 mb-4">
                        <label class="form-label small-text2">Person 2 last name</label>
                        <input type="text" value="Jade" class="form-control body-1 netural-100" name="name" readonly>
                     </div>
                  </div>
                  <div class="row align-items-center">
                     <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3 mb-4">
                        <label class="form-label small-text2">Phone number</label>
                        <input type="text" value="+61 0909 0900 909" class="form-control body-1 netural-100" name="name" readonly>
                     </div>
                  </div>
                  <div class="row align-items-center">
                     <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3 mb-4">
                        <label class="form-label small-text2">Date marriage</label>
                        <input type="text" value="Apr 12, 2022" class="form-control body-1 netural-100" name="name" readonly>
                     </div>
                     <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3 mb-4">
                        <label class="form-label small-text2">Time</label>
                        <input type="text" value="09:30" class="form-control body-1 netural-100" name="name" readonly>
                     </div>
                  </div>
                  <div class="row align-items-center">
                     <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3 mb-4">
                        <label class="form-label small-text2">Location</label>
                        <input type="text" value="Bradfield park" class="form-control body-1 netural-100" name="name" readonly>
                     </div>
                  </div>
                  <div class="row align-items-center">
                     <div class="col-md-12 col-lg-8 col-xl-6 mb-4">
                        <label class="form-label small-text2">Address details</label>
                        <input type="text" value="Alfred St S, Milsons Point NSW 2061, Australia" class="form-control body-1 netural-100" name="name" readonly>
                     </div>
                  </div>
                  <div class="row align-items-center">
                     <div class="col-md-12 col-lg-8 col-xl-6 mb-4">
                        <label class="form-label small-text2">Give note</label>
                        <textarea class="form-control small-text1 netural-100" rows="10" readonly>Type here</textarea>
                     </div>
                  </div>
                  <div class="row align-items-center">
                     <div class="col-md-12 col-lg-8 col-xl-6 mb-4">
                        <label class="form-label small-text2">Event Summary Comments</label>
                        <textarea class="form-control small-text1 netural-100" rows="10" readonly>Type here</textarea>
                     </div>
                  </div>
                  <div class="row align-items-center">
                     <div class="col-md-12 col-lg-8 col-xl-6 mb-4">
                        <button type="submit" class="theme-btn primary-btn me-3">Send summary comments</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@include('elements.reject-reason-sidebar')
@endsection