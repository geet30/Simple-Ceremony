@extends('layouts.master') @section('content')

<section class="contact-us-form pt-50 pb-100">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <p class="paragraph">Get in touch with us</p>
            <h1 class="h2 netural-100">Simple Ceremonies - Marriage Celebrant</h1>
            <p class="body-3-regular mt-4 mb-5">Do not hesitate to contact Simple Ceremonies to chat with one of our experienced marriage celebrants.</p>
            <ul class="list-unstyled">
               <li class="mb-4 pb-2">
                  <a href="#" class="body-2 text-black text-decoration-none d-flex align-items-center">
                     <div class="social-icon">
                        <img class="me-3" src="images/phone-icon.svg" alt="Phone Icon">
                     </div>
                     <span>+61280033919</span>
                  </a>
               </li>
               <li class="mb-4 pb-2">
                  <a href="#" class="body-2 text-black text-decoration-none d-flex align-items-center">
                     <div class="social-icon">
                        <img class="me-3" src="images/mail-icon.svg" alt="Mail Icon">
                     </div>
                     <span>wedo@simpleceremonies.com.au</span>
                  </a>
               </li>
               <li class="mb-4 pb-2">
                  <a href="#" class="body-2 text-black text-decoration-none d-flex align-items-center">
                     <div class="social-icon">
                        <img class="me-3" src="images/facebook-icon.svg" alt="Facebook Icon">
                     </div>
                     <span>@simpleceremoniessydney</span>
                  </a>
               </li>
               <li class="mb-4 pb-2">
                  <a href="#" class="body-2 text-black text-decoration-none d-flex align-items-center">
                     <div class="social-icon">
                        <img class="me-3" src="images/instagram-icon.svg" alt="Instagram Icon">
                     </div>
                     <span>@simpleceremonies</span>
                  </a>
               </li>
               <li class="mb-4 pb-2">
                  <a href="#" class="body-2 text-black text-decoration-none d-flex align-items-center">
                     <div class="social-icon">
                        <img class="me-3" src="images/google-plus.svg" alt="Google Plus Icon">
                     </div>
                     <span>Simple Ceremonies</span>
                  </a>
               </li>
            </ul>
         </div>
         <div class="col-md-6">
            <div class="contact-form">
               <form>
                  <h2 class="h4">Fill in the form below and we will contact you</h2>
                  <div class="row">
                     <div class="col-md-12 mb-4">
                        <label for="InputName" class="form-label small-text2">First Name *</label>
                        <input type="text" placeholder="Type your first name here" class="form-control body-1 netural-100" name="name" id="InputName" required="">
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Name is required</div>
                     </div>
                     <div class="col-md-12 mb-4">
                        <label for="phone" class="form-label small-text2">Phone number *</label>
                        <input class="form-control body-1 netural-100" type="tel" id="phone" placeholder="e.g. +1 702 123 4567" value="+61 " required>
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Phone number is required</div>
                     </div>
                     <div class="col-md-12 mb-4">
                        <label for="exampleFormControlTextarea1" class="form-label small-text2">Anything you would like us to know before we call? *</label>
                        <textarea placeholder="Type here" class="form-control body-1 netural-100" id="exampleFormControlTextarea1" rows="8"></textarea>
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>This field is required</div>
                     </div>
                     <div class="col-12">
                        <button type="submit" id="submit_button" class="theme-btn primary-btn border-0">Submit</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="map-location pb-100">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.637456914615!2d151.20927081554817!3d-33.84745908066219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12aef2e9f08045%3A0x32d189ddcd6f84ce!2sSimple%20Ceremonies!5e0!3m2!1sen!2sin!4v1654854264298!5m2!1sen!2sin" width="100%" height="408" style="border:0;border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
      </div>
   </div>
</section>
@endsection