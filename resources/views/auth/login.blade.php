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
            <div class="col-12 text-center"><h1 class=" intel-font body-regular-20 neutral-100 mb-38">Sign in to your account</h1></div>
           </div>
         </div>
         <div class="d-md-none login-mobile-card">
         <div class="card card-login">
               <div class="card-body">
                  <form method="POST" action="{{ route('login') }}">
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
                     <div class="row mb-3">
                        <label for="password" class="col-md-12 form-label small-text2 mb-2">{{ __('Password') }}</label>
                        <div class="col-md-12">
                           <div class=" theme-input-group">
                              <input id="password" type="password" placeholder="Type your password here" class="form-control  body-1 netural-100 @error('password') is-invalid @enderror" name="password" required  autocomplete="off">
                              <i class="fas fa-eye-slash right-icon turquoise-100" id="eye" ></i>
                              @error('password')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                        </div>
                     </div>
                     <div class="row mb-3">
                        <div class="col-6 align-self-center">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} autocomplete="off">
                              <label class="form-check-label small-text2" for="remember">
                              {{ __('Remember Me') }}
                              </label>
                           </div>
                        </div>
                        <div class="col-6 d-flex justify-content-end  align-self-center">
                           @if (Route::has('password.request'))
                           <a class="small-text2 forgot-password-link" href="{{ route('password.request') }}">
                           {{ __('Forgot password?') }}
                           </a>
                           @endif
                        </div>
                     </div>
                     <div class="col-md-8 col-xl-6 d-grid">
                        <button type="submit" class="theme-btn primary-btn w-full">
                        {{ __('Login') }}
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
                  <h1 class="mb-32">Sign in to your account</h1>
                  <form method="POST" action="{{ route('login') }}">
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
                     <div class="row mb-3">
                        <label for="password" class="col-md-12 form-label small-text2 mb-2">{{ __('Password') }}</label>
                        <div class="col-md-12">
                           <div class=" theme-input-group">
                              <input id="password" type="password" placeholder="Type your password here" class="form-control  body-1 netural-100 @error('password') is-invalid @enderror" name="password" required  autocomplete="off">
                              <i class="fas fa-eye-slash right-icon turquoise-100" id="eye" ></i>
                              @error('password')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                        </div>
                     </div>
                     <div class="row mb-3">
                        <div class="col-md-6">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} autocomplete="off">
                              <label class="form-check-label small-text2" for="remember">
                              {{ __('Remember Me') }}
                              </label>
                           </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end">
                           @if (Route::has('password.request'))
                           <a class="small-text2 forgot-password-link" href="{{ route('password.request') }}">
                           {{ __('Forgot Your Password?') }}
                           </a>
                           @endif
                        </div>
                     </div>
                     <div class="col-md-8 col-xl-6 d-grid">
                        <button type="submit" class="theme-btn primary-btn w-full">
                        {{ __('Login') }}
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