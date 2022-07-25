@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
         @include('elements.admin-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-4">
         @include('elements.panel-header')
         <a href="/all-enquiries" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
         <div class="card panel-card">
            <div class="card-body">
               <section class="pb-40">
                  <div class="row">
                     <div class="col-md-12 col-lg-6 align-self-center">
                        <div class="table-dropdown d-md-flex align-items-center">
                           <div>
                              <h1 class="h4 neutral-100 mb-0">From David &amp; Sarah</h1>
                           </div>
                           <div class="ms-0 ms-md-3 mt-2 mt-md-0">
                              <a class="waiting-approval p-1 px-3 d-inline text-decoration-none">Follow up</a>
                              <a class="approved p-1 px-3 d-inline text-decoration-none d-none">Booked</a>
                              <a class="rejected p-1 px-3 d-inline text-decoration-none d-none">No interest</a>
                           </div>
                        </div>
                        <p class="body-3 mb-0 mt-3"><img class="me-2" src="/images/admin/black-calander.svg" alt="Delete"> Feb 21, 2022</p>
                     </div>
                     <div class="col-md-12 col-lg-6 align-self-center d-md-flex justify-content-lg-end ">
                        <div class="me-md-3 mt-3 mt-lg-0 align-self-center">
                           <a href="/edit-enquiry" class="theme-btn primary-btn d-block"> <img class="me-2" src="/images/admin/add-ons/admin-addon-edit.svg" alt="Edit"> Edit</a>
                        </div>
                        <div class="me-md-3 mt-3 mt-lg-0 align-self-center">
                           <a href="#" class="theme-btn primary-btn d-flex justify-content-center"><img class="me-2" src="/images/admin/white-delete.svg" alt="Delete"> Delete</a>
                        </div>
                     </div>
                  </div>
               </section>
               <div class="row pb-5">
                  <div class="col-md-12">
                     <div class="feedback-data h-auto p-md-4 p-3">
                        <p class="body-3-medium mb-0">
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ligula enim, vehicula sit amet sagittis quis, finibus a eros. Curabitur tristique eu arcu nec vehicula. Sed finibus, ex id porta laoreet, orci odio posuere ante, vitae iaculis libero nibh quis enim. Cras et justo sit amet nisi pretium aliquam. Sed malesuada dui sed fringilla mattis. Proin placerat neque purus, eget porttitor lorem semper nec. Curabitur facilisis tempus placerat. Donec ac mattis diam, ac ornare velit. Nullam venenatis urna nec mauris consectetur ultrices. Phasellus tristique tellus leo, eu dapibus ex iaculis eget.<br><br>
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ligula enim, vehicula sit amet sagittis quis, finibus a eros. Curabitur tristique eu arcu nec vehicula. Sed finibus, ex id porta laoreet, orci odio posuere ante, vitae iaculis libero nibh quis enim. Cras et justo sit amet nisi pretium aliquam. Sed malesuada dui sed fringilla mattis. Proin placerat neque purus, eget porttitor lorem semper nec. Curabitur facilisis tempus placerat. Donec ac mattis diam, ac ornare velit. Nullam venenatis urna nec mauris consectetur ultrices. Phasellus tristique tellus leo, eu dapibus ex iaculis eget.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('elements.calander')
@endsection