@extends('layouts.app')
@section('content')
<section class="login">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-6 left d-none d-md-flex justify-content-center">
        <img src="/images/admin/login-logo.svg" class="img-fluid" alt="Logo" title="Logo">
         </div>
         <div class="col-md-6 left d-md-none justify-content-center position-relative">
         <img src="/images/admin/login/white-top.svg" class="img-fluid top d-md-none " alt="Login">
            <img src="/images/admin/login/white-bottom.svg" class="img-fluid bottom  d-md-none" alt="Login">
           <div class="row">
            <div class="col-12 login-logo text-center"> <img src="/images/admin/login-logo.svg" class="img-fluid" alt="Logo" title="Logo"></div>
            <div class="col-12 text-center"><h1 class=" intel-font body-regular-20 neutral-100 mb-38">Forgot password</h1></div>
           </div>
         </div>
         <div class="d-md-none login-mobile-card">
         <div class="card card-login">
               <div class="card-body">
               <form method="POST" action="{{ route('password.email') }}">
                     @csrf
                     <div class="row mb-3">
                        <label for="email" class="form-label small-text2 col-12 mb-2">{{ __('Email') }}</label>
                        <div class="col-md-12">
                           <input id="email" type="email" class="form-control  body-1 netural-100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required   autocomplete="off">
                           @error('email')
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                     </div>
                 
                  
                     <div class="col-md-12 d-grid mt-144">
                        <button type="submit" class="theme-btn primary-btn w-full">
                        {{ __('Send instructions') }}
                        </button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <div class="col-md-6 right  position-relative d-flex justify-content-center d-none d-md-block">
            <img src="/images/admin/login/top.png" class="img-fluid top" alt="Login">
            <img src="/images/admin/login/bottom.png" class="img-fluid bottom" alt="Login">
          <div class="row w-100 align-item-center h-100vh">
            <div class="col-md-10 col-xl-8 mx-auto">
            <div class="card card-login">
               <div class="card-body">
                  <h1 class=" gray-gray-900 intel-font">Forgot password</h1>
                  <p class="small-text2 gray-gray-900 intel-font mb-32" >Please enter your email address below and we will email you the necessary instructions to request a new password.</p>
                  <form method="POST" action="{{ route('password.email') }}">
                     @csrf
                     <div class="row mb-3">
                        <label for="email" class="form-label small-text2 col-12 mb-2">{{ __('Email') }}</label>
                        <div class="col-md-12">
                           <input id="email" type="email" class="form-control  body-1 netural-100 @error('email') is-invalid @enderror" name="email" placeholder="Type your email here" value="{{ old('email') }}" required   autocomplete="off">
                           @error('email')
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                     </div>
                     <div class="col-12 d-grid mt-144">
                        <button type="submit" class="theme-btn primary-btn w-full">
                        {{ __('Send instructions') }}
                        </button>
                     </div>
                  </form>
               </div>
            </div>
            </div>
          </div>
         </div>
      </div>
   </div>
</section>
@endsection