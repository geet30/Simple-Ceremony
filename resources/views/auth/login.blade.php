@extends('layouts.app')
@section('content')
<section class="login">
   <div class="container-fluid">
      <div class="row align-items-center">
         <div class="col-lg-6 position-relative">
            <div class="left-form-part d-flex align-items-center justify-content-center flex-wrap flex-column">
               <img src="/images/admin/login/white-top.svg" class="img-fluid top" alt="Login">
               <img src="/images/admin/login/white-bottom.svg" class="img-fluid bottom" alt="Login">
               <img src="/images/admin/login-logo.svg" class="img-fluid form-logo" alt="Logo" title="Logo">
               <div class="form-information">
                  <h1 class="body-regular-20 neutral-100 d-block d-lg-none">Sign in to your account</h1>
               </div>
            </div>
         </div>
         <div class="col-lg-6 bg-turquoise-100 position-relative">
            <div class="right-form-part">
               <img src="/images/admin/login/top.png" class="img-fluid top" alt="Login">
               <img src="/images/admin/login/bottom.png" class="img-fluid bottom" alt="Login">
               <div class="row">
                  <div class="col-lg-8 mx-auto col-11">
                     <div class="card card-login">
                        <div class="card-body">
                       
                                     
                           <form class="needs-validation row" method="POST" action="{{ route('login') }}" novalidate>
                              @csrf
                              
                              <div class="row">
                                 <div class="col-lg-12 mb-4 d-none d-lg-block">
                                    <h1 class="body-regular-20 neutral-100 d-none d-lg-block">Sign in to your account</h1>
                                 </div>
                                 @error('email')
                                    <div class="alert alert-danger" v-if="showError">Email or Password is invalid.</div>
                                 @enderror
                                 <div class="col-lg-12 mb-4">
                                    <label for="email" class="form-label small-text2">{{ __('Email') }} *</label>
                                    <input type="email" placeholder="Type your email here" class="form-control emailInput body-1 netural-100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off">
                                   
                                    <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Email is required</div>
                                     {{--@error('email')
                                       <div class="invalid-feedback">
                                          <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>
                                          {{ $message }}
                                       </div>
                                    @enderror--}}
                                 </div>
                                 <div class="col-lg-12 mb-4">
                                    <label for="password" class="form-label small-text2">{{ __('Password') }} *</label>
                                    <div class="password-with-eye">
                                       <input type="password" placeholder="Type your password here" class="form-control passwordInput body-1 netural-100 @error('password') is-invalid @enderror" name="password" required  autocomplete="off">
                                       <i class="fas fa-eye-slash right-icon turquoise-100 eyeIcon"></i>
                                       <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Password is required</div>
                                    </div>
                                 </div>
                                 <div class="col-lg-12 mb-4">
                                    <div class="row align-items-center">
                                       <div class="col-6">
                                          <div class="form-check">
                                             <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} autocomplete="off">
                                             <label class="form-check-label small-text2" for="remember">
                                             {{ __('Remember Me') }}
                                             </label>
                                          </div>
                                       </div>
                                       <input type="hidden" name="route_name" value="{{ Route::current()->getName() }}">
                                       <div class="col-6 d-flex justify-content-end text-end">
                                          @if (Route::has('password.request'))
                                             <a class="small-text2 forgot-password-link" href="{{ route('password.request') }}">
                                             {{ __('Forgot Your Password?') }}
                                             </a>
                                          @endif
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="row">
                                       <div class="col-12 d-none">
                                          <a href="#" class="theme-btn primary-btn-border d-block w-100">Sign up</a>
                                       </div>
                                       @if(Route::current()->getName() == 'partner-login')
                                       <div class="col-6">
                                          <a href="/sign-up" class="theme-btn primary-btn-border d-block w-100">Sign up</a>
                                       </div>
                                       <div class="col-6">
                                          <button type="submit" class="theme-btn primary-btn w-100">
                                             {{ __('Login') }}
                                          </button>
                                       </div>
                                       @elseif(Route::current()->getName() == 'user-login')
                                       <div class="col-6">
                                          <button type="submit" class="theme-btn primary-btn w-100">
                                             {{ __('Login') }}
                                          </button>
                                       </div>
                                       <div class="col-lg-12">
                                          <p class="body-3-regular mt-4">Have you made an order and payment but don't have a password?</p>
                                          <a class="small-text2 forgot-password-link" href="/user/create-password">
                                             Create a password
                                          </a>
                                       </div>


                                       @else
                                       <div class="col-12">
                                          <button type="submit" class="theme-btn primary-btn w-100">
                                             {{ __('Login') }}
                                          </button>
                                       </div>
                                       @endIf
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
   </div>
</section>
@endsection