@extends('layouts.master') @section('content')


<section class="niom pt-50 pb-100">
   <div class="container">
      <div class="row">
         <div class="col-md-7">
            <p class="paragraph mb-2">COVID-19 Restrictions</p>
            <h1 class="h1 netural-100 mb-3">Current Restrictions</h1>
            <p class="body-3-regular">CURRENT UPDATE  @ 80% PLUS tionVaccintion - per NSW Health reopening roadmap</p>
            <ul class="list-unstyled mb-0">
               <li class="d-flex align-items-start mt-4">
                  <img style="top:2px;" class="me-3 position-relative" src="/images/green-success.svg" alt="Check Icon">
                  <p class="body-3-regular mb-0 netural-100">Unlimited people (NB Simple Ceremonies number restrictions per location still apply)</p>
               </li>
               <li class="d-flex align-items-start mt-3 mb-3">
                  <img style="top:2px;" class="me-3 position-relative" src="/images/green-success.svg" alt="Check Icon">
                  <p class="body-3-regular mb-0 netural-100">5 person limit for people who are NOT fully vaccinated</p>
               </li>
               <li class="d-flex align-items-start mt-3 mb-4">
                  <img style="top:2px;" class="me-3 position-relative" src="/images/green-success.svg" alt="Check Icon">
                  <p class="body-3-regular mb-0 netural-100">Masks are to be worn at all indoor locations - excluding the couple getting married</p>
               </li>
            </ul>
            <div class="d-flex">
               <a href="/location" class="theme-btn primary-btn me-4">Register now</a>
               <a href="https://www.nsw.gov.au/covid-19/stay-safe/rules" class="theme-btn primary-btn-border" target="_blank">Learn more</a>
            </div>
         </div>
         <div class="col-md-5 mt-3 mt-md-0">
            <img src="/images/term-and-condition/covid-restrictions-hr.png" alt="Covid Restrictions" class="img-fluid">
         </div>
      </div>
   </div>
</section>
<section class="pb-100">
   <div class="container">
      <div class="row">
         <div class="col-md-5">
            <img class="img-fluid" src="/images/term-and-condition/covid-conditions.png" alt="Covid Restrictions">
         </div>
         <div class="col-md-6 offset-md-1 mt-3 mt-md-0">
            <p class="paragraph netural-100 spartan-font">Terms and Conditions</p>
            <h2 class="h2 netural-100 mb-4">What this means</h2>
            <h4 class="h4 mb-4">If you had a wedding booked during this period</h4>
            <p class="body-3-regular">Unfortunately your wedding will need to be put on-hold.<br>
               Once restrictions have been lifted we will then work with you to re-schedule your ceremony. Please note our normal re-scheduling  fee will NOT apply during this period
            </p>
            <h4 class="h4 mb-4">If you were planning on booking your ceremony</h4>
            <p class="body-3-regular">The current restrictions has no impact on those of you wishing to book your ceremony. As you are probably aware, every one getting married is required (by Australian law) to provide 1 calendar months notice.<br><br>
            The advantage of booking now, is that you can complete all the paperwork and Notice so you will be ready to get married as soon as possible after the restrictions are lifted.<br><br>
            NEW Bookings - Bookings can be made now with a FREE COVID re-schedule*
            </p>
         </div>
      </div>
   </div>
</section>
<section>
   <div class="container">
      <div class="row">
         <div class="col-12">
            <hr class="theme-hr">
         </div>
      </div>
   </div>
</section>
<section class="py-100">
   <div class="container">
      <div class="row">
         <div class="col-md-5 mb-4 mb-md-0">
            <img src="images/permium.png" alt="permium" class="img-fluid">
         </div>
         <div class="col-md-7">
            <p class="paragraph neutral-100">While offering amazing value</p>
            <h2 class="h2 neutral-100 mb-4">The Simple, Premium &amp; Cool ways to get married!</h2>
            <p class="body-3 neutral-100 mb-4">Your wedding ceremony should be a very special moment in your lives.
               So our focus is on giving you, the perfect simple ceremony - with the best celebrants &amp; locations.
               We then streamline the rest - keeping it simple, fast and great value. Standard ceremonies from just $270.
            </p>
            <p class="body-1 mb-4 turquoise-100">We also have add ons: chairs, decorations, photographer, flowers, wedding rings and a venue to celebrate!
            </p>
            <p class="body-1 text-black mb-5"> One Stop - for your perfect wedding!</p>
            <div class="d-lg-flex"> 
               <a href="/location" class="theme-btn primary-btn me-lg-4 d-flex justify-content-center mb-3 mb-lg-0">Make a booking</a> 
               <a href="/married-checklist" class="theme-btn primary-btn-border d-flex justify-content-center">See checklist to get married</a>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection