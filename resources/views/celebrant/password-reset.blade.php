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
               <div class="form-information text-center">
                  <h1 class="body-regular-20 neutral-100 d-block d-lg-none">Forgot password</h1>
                  <p class="small-text2 neutral-100 d-block d-lg-none">Please enter your email address below and we will email you the necessary instructions to request a new password.</p>
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
                           <form method="POST" action="http://127.0.0.1:8000/password/email">
                              <div class="row">
                                 <div class="col-lg-12 mb-4 d-none d-lg-block">
                                    <h1 class="body-regular-20 neutral-100 d-none d-lg-block">Forgot password</h1>
                                    <p class="small-text2 neutral-100 d-none d-lg-block">Please enter your email address below and we will email you the necessary instructions to request a new password.</p>
                                    <p></p>
                                 </div>
                                 <div class="col-lg-12 mb-4">
                                    <label for="email" class="form-label small-text2">Email *</label>
                                    <input id="email" type="email" class="form-control body-1 netural-100 " name="email" value="" required="" autocomplete="off">
                                                                     </div>
                                 <div class="col-lg-12 mb-4 reset-password-btn-col">
                                    <div class="row">
                                       <div class="col-12">
                                          <button type="submit" class="theme-btn primary-btn w-100">
                                             Send instructions
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
   </div>
</section>
@endsection