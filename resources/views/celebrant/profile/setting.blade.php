@extends('layouts.panels')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
      @include('elements.celebrant.celebrant-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-4">
         @include('elements.common.panel-header')
         <div class="card panel-card mt-4">
            <div class="card-body">
               @if ($errors->any())
                     <div class="alert alert-danger alert-dismissible fade show">
                           {{ $errors->first() }}
                           <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                     </div>
                  @endif
                  @if (session()->has('message'))
                     <div class="alert alert-success alert-dismissible fade show">
                           {{ session()->get('message') }}
                           <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                     </div>
                  @endIf
               <h1 class="h4 netural-100 mb-4">My account</h1>
               @php
                     $status_class = 'approved';
                     if ($data->status == 1) {
                        $status = 'Active';
                        $status_class = 'approved';
                     } elseif ($data->status == 0) {
                        $status = 'In-active';
                        $status_class = 'rejected';
                     }
               @endphp
               <div class="table-dropdown d-flex align-items-center mb-2">
                  <a class="{{ $status_class }} text-nowrap p-1 px-3 d-inline text-decoration-none ms-3"> <span>{{ $status }}</status></a>
               </div>
               <div class="row">
                  <div class="col-md-3 col-lg-3 col-xl-2 col-xxl-2 col-6">
                        <div class="position-relative mb-4">
                           @if ($data->image == '')
                              <img src="/images/admin-celebrants-profile.png" alt="Partner Image"
                                    class="img-fluid w-100 profile-image previewImage">
                           @else
                              <img src="/uploads/images/user/{{ $data->image }}" alt="Partner Image"
                                    class="img-fluid w-100 profile-image previewImage">
                           @endif

                           <img role="button" class="camera-icon position-absolute"
                              style="bottom: 10px;right: 10px;"
                              src="/images/admin/partner/camera-icon.svg" alt="Camera"
                              onclick="browseImage(this,'imageInput')">
                        </div>
                  </div>
                 
                  <div class="col-md-12 col-lg-9 col-xl-9 col-xxl-8">
                     <form class="needs-validation" method="POST" novalidate action="{{ route('updateCelebrantAccount') }}" enctype="multipart/form-data">
                     @csrf
                     @method('PUT')
                        <div class="row">
                           <input class="form-control body-1 netural-100 d-none imageInput" type="file" name="user[image]" onchange="readURL(this)">
                          
                           <div class="col-md-6 mb-4">
                              <label for="username" class="form-label small-text2 ms-2 ">Username</label>
                              <input type="text" value="{{ auth()->user()->username }}" class="form-control body-1 netural-100 readonlyInput" name="user[username]" id="username" required readonly>
                              <div class="invalid-feedback"> <span><img class="me-2"
                                 src="/images/require-iocn.svg" alt="Require Icon"></span>Username is required
                              </div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="first_name" class="form-label small-text2 ms-2">First name</label>
                              <input type="text" value="{{ auth()->user()->first_name }}" class="form-control body-1 netural-100 readonlyInput" name="user[first_name]" id="first_name" required readonly>
                              <div class="invalid-feedback"> <span><img class="me-2"
                                 src="/images/require-iocn.svg" alt="Require Icon"></span>First name is required
                              </div>
                           </div>
                           <div class="col-md-4 mb-4">
                              <label for="name" class="form-label small-text2 ms-2">Celebrant Preferred name</label>
                              <input type="text" value="{{ auth()->user()->name }}" class="form-control body-1 netural-100 readonlyInput" name="user[name]" id="name" readonly>
                              <div class="invalid-feedback"> <span><img class="me-2"
                                 src="/images/require-iocn.svg" alt="Require Icon"></span>Preferred name is required
                              </div>
                           </div>
                           <div class="col-md-4 mb-4 ">
                              <label for="standard_fee" class="form-label small-text2 ms-2">Standard
                                 fee</label>
                              <div class=" position-relative">

                                 <span class="currency-sign body-1 netural-100">$</span>
                                 <input type="number" step="0.01"
                                    class="form-control body-1 netural-100 readonlyInput ps-4"
                                    id="standard_fee"
                                    value="{{ $data->celebrant->standard_fee ?? '' }}"
                                    name="celebrant[standard_fee]" readonly>
                              </div>

                           </div>
                           <div class="col-md-4 mb-4 ">
                                 <label for="admin_fee" class="form-label small-text2 ms-2">Admin
                                    fee</label>
                                 <div class="position-relative">

                                    <span class="currency-sign body-1 netural-100">$</span>
                                    <input type="number" step="0.01"
                                       class="form-control body-1 netural-100 readonlyInput ps-4"
                                       id="admin_fee"
                                       value="{{ $data->celebrant->admin_fee ?? '' }}"
                                       name="celebrant[admin_fee]" readonly>
                                 </div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="other_name" class="form-label small-text2 ms-2 ms-2">Other name</label>
                              <input type="text" value="{{ auth()->user()->other_name }}" class="form-control body-1 netural-100 readonlyInput" name="user[other_name]" id="other_name" readonly required>
                              <div class="invalid-feedback"> <span><img class="me-2"
                                 src="/images/require-iocn.svg" alt="Require Icon"></span>Other name is required
                              </div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="surname" class="form-label small-text2 ms-2">Surname</label>
                              <input type="text" value="{{ auth()->user()->surname }}" class="form-control body-1 netural-100 readonlyInput" name="user[surname]" id="surname" readonly required>
                              <div class="invalid-feedback"> <span><img class="me-2"
                                 src="/images/require-iocn.svg" alt="Require Icon"></span>Surname is required
                              </div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="phone" class="form-label small-text2 ms-2">Phone number</label>
                              <input type="hidden"  id="code" name ="user[country_code]" value="{{ auth()->user()->country_code}}" >
                              <input class="form-control body-1 netural-100 readonlyInput" name="user[phone]" type="tel" id="phone" placeholder="e.g. +1 702 123 4567" value="+{{ auth()->user()->country_code }}{{ auth()->user()->phone }}" required readonly>
                              <div class="invalid-feedback"> <span><img class="me-2"
                                 src="/images/require-iocn.svg" alt="Require Icon"></span>Username is required
                              </div>
                              
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="email" class="form-label small-text2 ms-2">Email address</label>
                              <input type="text" value="{{ auth()->user()->email }}" class="form-control body-1 netural-100 readonlyInput" name="user[email]" id="email" required="" readonly>
                              <div class="invalid-feedback"> <span><img class="me-2"
                                 src="/images/require-iocn.svg" alt="Require Icon"></span>Email is required
                              </div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="address" class="form-label small-text2 ms-2">Address</label>
                              <input type="text" value="{{isset($data->celebrant->address)?$data->celebrant->address:''}}" class="form-control body-1 netural-100 readonlyInput" name="celebrant[address]" id="address" required readonly>
                              <div class="invalid-feedback"> <span><img class="me-2"
                                 src="/images/require-iocn.svg" alt="Require Icon"></span>Address is required
                              </div>
                           </div>
                           <div class="col-md-6"></div>
                           <div class="col-md-6 mb-4">
                              <label for="a_number" class="form-label small-text2 ms-2">A number</label>
                              <input type="number" value="{{ auth()->user()->a_number }}" class="form-control body-1 netural-100 readonlyInput" name="user[a_number]" id="a_number" required readonly>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>A-number is required</div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="abn_number" class="form-label small-text2 ms-2">ABN Number</label>
                              <input type="text" value="{{ auth()->user()->abn_number }}" class="form-control body-1 netural-100 readonlyInput" name="user[abn_number]" id="abn_number" required readonly>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>ABN Number is required</div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <div class="row">
                                 <div class="col-md-9">
                                    <label for="bank" class="form-label small-text2 ms-2">Bank</label>
                                    <select name="gender" id="bank" name="user[bank]" class="js-placeholder-single-input form-control readonlyInput" disabled required>
                                    @foreach(config('env.bankNames') as $key=>$bank)
                                       <option value="{{$key}}" {{ $data->bank == $key ? ' selected' : '' }}>{{$bank}}</option>
                                    @endforeach

                                    </select>
                                    <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Bank is required</div>
                                 </div>
                                 <div class="col-md-3">
                                    <label for="bsb" class="form-label small-text2 ms-2 readonlyInput">BSB</label>
                                    <input type="text" value="{{ auth()->user()->bsb }}" class="form-control body-1 netural-100" name="user[bsb]" id="bsb" required>
                                    <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>BSB is required</div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="account_no" class="form-label small-text2 ms-2">Account number</label>
                              <input type="text" value="{{ auth()->user()->account_no }}" class="form-control body-1 netural-100 readonlyInput" name="user[account_no]" id="account_no" required readonly>
                              <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Account number is required</div>
                           </div>
                           <div class="col-md-12 mb-4">
                              <label for="description" class="form-label small-text2 ms-2">About me</label>
                              <textarea class="form-control body-1 netural-100 readonlyInput" id="ceremonyplace"  rows="10" name="celebrant[description]" readonly>{{ $data->celebrant->description ?? '' }}</textarea>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="password" class="form-label small-text2 ms-2">Password</label>
                              <input type="password" value="************" class="form-control body-1 netural-100 readonlyInput" name="" id="password" required="" readonly>
                           </div>
                           <div class="col-md-6 mb-4 align-self-center d-none change_password">
                              <label for="password" class="form-label small-text2 ms-2"></label>
                              <div>
                                 <a  class="user-dash-links turquoise-100 cursor-pointer" data-bs-toggle="offcanvas" data-bs-target="#admin_change_password_sidebar">Change password</a>
                              </div>
                           </div>
                           <div class="col-md-12 mb-4 celebrantLocation">
                              <div class="row">
                                 <div class="col-md-12 mb-3 mt-4">
                                    <div class="d-flex flex-column flex-md-row">
                                          <span class="body-2 netural-100 me-4">Locations list</span>
                                          <a role="button"
                                             class="mt-2 mt-md-0 button-1 turquoise-100 text-decoration-none faq-link"
                                             data-bs-toggle="offcanvas"
                                             data-bs-target="#celebrant_addlocation"
                                             aria-controls="celebrant_addlocation">Add new
                                             location</a>
                                    </div>
                                 </div>
                              </div>
                                 @if (count($data->CelebrantLocations) > 0)
                                    @foreach ($data->CelebrantLocations as $locations)
                                       <div class="row locDiv mb-2">
                                             <div class="col-10 col-sm-8 col-md-6"><input
                                                   type="text"
                                                   value="{{ $locations->location->name }}" readonly
                                                   class="form-control body-1 netural-100 locationText">
                                                <input type="hidden"
                                                   value='{{ $locations->location_id }}'
                                                   name="locations[]">
                                             </div>
                                             <div class="col-2 col-sm-4 col-md-6"><a class="cross-icon"
                                                   onclick="remove(`locDiv`,this)"><img
                                                         src="/images/icons/cross.svg"
                                                         class="img-fluid"></a></div>
                                       </div>
                                    @endforeach
                                 @else
                                    <div class="col-12 mb-4 emptyRecord">
                                       Location not added yet.
                                    </div>
                                 @endif
                           </div>
                           <div class="col-md-12 mb-4">
                                 <a role="button" class="d-inline-flex theme-btn primary-btn justify-content-center showClass" onclick="displayItem('showClass','saveClass')">
                                 
                                    <img class="me-2" src="/images/admin/partner/edit.svg"
                                       alt="Edit">
                                    Edit information
                                 </a>
                                 <button type="submit"
                                    class="d-inline-flex theme-btn primary-btn justify-content-center sticky-bottom d-none saveClass">Save
                                 </button>
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
@include('elements.admin.celebrant.celebrant-add-new-location')
@endsection