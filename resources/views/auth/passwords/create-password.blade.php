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
                  <h1 class="body-regular-20 neutral-100 d-block d-lg-none">Create a password</h1>
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
                           <form class="needs-validation row" method="POST" action="{{ route('user.create.password') }}" novalidate>
                              @csrf
                              <div class="row">
                                 <div class="col-lg-12 mb-4 d-none d-lg-block">
                                    <h1 class="body-regular-20 neutral-100 d-none d-lg-block">Create a password</h1>
                                 </div>
                                 <div class="col-lg-12 mb-4">
                                    <label for="email" class="form-label small-text2">Email *</label>
                                    <input type="email" placeholder="Type your email here" class="form-control emailInput body-1 netural-100 " name="email" value="" required="" autocomplete="off">
                                 </div>
                                 <div class="col-lg-12 mb-4">
                                    <label for="password" class="form-label small-text2">Password *</label>
                                    <div class="password-with-eye">
                                       <input type="password" placeholder="Type your password here" class="form-control passwordInput body-1 netural-100 " name="password" required="" autocomplete="off">
                                       <i class="fas fa-eye-slash right-icon turquoise-100 eyeIcon"></i>
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="row">
                                       <div class="col-6">
                                           <button type="submit" class="theme-btn primary-btn w-100">
                                             Create
                                          </button> 
                                          <!-- <a href="/user/index" class="theme-btn primary-btn w-100 d-block">
                                             Create
                                          </a> -->
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
   </div>
</section>
@endsection