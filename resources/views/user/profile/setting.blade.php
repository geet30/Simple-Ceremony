@extends('layouts.panels')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 p-0">
         @include('elements.common.user-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-md-4">
         @include('elements.common.panel-header')
         <div class="card panel-card mt-4">
            <div class="card-body">
               <h1 class="h4 netural-100 mb-4">My account</h1>
               <div class="row">
                  <div class="col-md-12 col-lg-9 col-xl-9 col-xxl-8">
                     <form class="needs-validation" method="POST" novalidate action="{{ route('updateUserAccount') }}">
                     @csrf
                     @method('PUT')
                        <div class="row">
                           <div class="col-md-6 mb-4">
                              <label for="first_name" class="form-label small-text2">First (preferred) name</label>
                              <input type="text" value="{{ auth()->user()->first_name }}" class="form-control body-1 netural-100 readonlyInput" name="user[first_name]" id="first_name" required readonly>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>First Name is required</div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="last_name" class="form-label small-text2">Your last name</label>
                              <input type="text" value="{{ auth()->user()->last_name }}" class="form-control body-1 netural-100 readonlyInput" name="user[last_name]" id="last_name" required readonly>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Last name is required</div>
                           </div>
                           <div class="col-md-12 mb-4">
                            <label for="contact_name" class="form-label small-text2">Full name</label>
                            <input type="text" value="{{ auth()->user()->contact_name }}" class="form-control body-1 netural-100 readonlyInput" name="user[contact_name]" id="contact_name" required readonly>
                            <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Contact name is required</div>
                         </div>
                         <div class="col-md-6 mb-4">
                            <label for="email" class="form-label small-text2">Email address</label>
                            <input type="text" value="{{ auth()->user()->email }}" class="form-control body-1 netural-100 readonlyInput" name="user[email]" id="email" required="" readonly>
                           <div class="invalid-feedback"> <span>
                              <img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Email is required
                           </div>
                         </div>
                           <div class="col-md-6 mb-4">
                              <label for="phone" class="form-label small-text2">Phone number</label>
                              <input type="hidden"  id="code" name ="user[country_code]" value="{{ auth()->user()->country_code}}" >
                              <input class="form-control body-1 netural-100 readonlyInput" name="user[phone]" type="tel" id="phone" placeholder="e.g. +1 702 123 4567" value="+{{ auth()->user()->country_code }}{{ auth()->user()->phone }}" required readonly>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Phone number is required</div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="InputName" class="form-label small-text2">Address</label>
                              <input type="text" value="{{isset($data->booking_user->address)?$data->booking_user->address:''}}" class="form-control body-1 netural-100 readonlyInput" name="booking_user[address]" id="address" required readonly>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Address is required</div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="town" class="form-label small-text2">Suburb/Town/City</label>
                              <input type="text" value="{{isset($data->booking_user->town)?$data->booking_user->town:''}}" class="form-control body-1 netural-100 readonlyInput" name="booking_user[town]"id="town" required readonly>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Town is required</div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="state" class="form-label small-text2">State/Territory/Province</label>
                              <input type="text" value="{{isset($data->booking_user->state)?$data->booking_user->state:''}}"  class="form-control body-1 netural-100 readonlyInput" name="booking_user[state]" id="state" required readonly>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>state is required</div>
                           </div>
                           <div class="col-md-6 mb-4">
                            <label for="post_code" class="form-label small-text2">Post code / Zip Code</label>
                            <input type="text" value="{{isset($data->booking_user->post_code)?$data->booking_user->post_code:''}}" class="form-control body-1 netural-100 readonlyInput" name="booking_user[post_code]" id="post_code" required readonly>
                            <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Post code is required</div>
                         </div>
                           <div class="col-md-6 mb-4">
                              <label for="InputName" class="form-label small-text2">Password</label>
                              <input type="password" value="************" class="form-control body-1 netural-100" name="name" id="InputName" readonly>
                              
                           </div>
                           <div class="col-md-6 mb-4 align-self-center d-none change_password">
                              <label for="password" class="form-label small-text2 ms-2"></label>
                              <div>
                                 <a  class="user-dash-links turquoise-100 cursor-pointer" data-bs-toggle="offcanvas" data-bs-target="#admin_change_password_sidebar">Change password</a>
                              </div>
                           </div>
                           <div class="col-md-12 mb-4 sticky-footer text-start">
                              <div class="row">
                                 <div class="col-md-12">
                                    <a class="d-inline-flex theme-btn primary-btn justify-content-center showClass" onclick="displayItem('showClass','saveClass')">
                                    <img class="me-2" src="/images/admin/partner/edit.svg" alt="Edit">
                                    Edit information
                                    </a>
                                    <button type="submit"
                                    class="d-inline-flex theme-btn primary-btn justify-content-center sticky-bottom d-none saveClass">Save
                                 </button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('elements.common.reset-password-sidebar')
@endsection
