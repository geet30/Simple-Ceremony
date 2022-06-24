@extends('layouts.master') @section('content')
<section class="hero pb-100">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <h1 class="h1 netural-100 text-center mb-5">Reschedule & correction</h1>
            <img src="images/how-it-works-main.png" class="img-fluid" alt="How It Works Main Hero Image"> 
         </div>
      </div>
   </div>
</section>
<section class="reschedule-correction-tabs pb-100">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <ul class="nav nav-pills mb-5" id="pills-tab" role="tablist">
               <li class="nav-item mb-3 mb-xl-0" role="presentation">
                 <button class="theme-btn primary-btn-border nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Re-Schedule</button>
               </li>
               <li class="nav-item ms-lg-3 mb-3 mb-xl-0" role="presentation">
                 <button class="theme-btn primary-btn-border nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Make Correction(s) to the NoIM</button>
               </li>
               <li class="nav-item ms-lg-3 mb-3 mb-xl-0" role="presentation">
                 <button class="theme-btn primary-btn-border nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">We can order your Registered Certificate of Marriage</button>
               </li>
               <li class="nav-item ms-lg-3 mb-3 mb-xl-0" role="presentation">
                  <button class="theme-btn primary-btn-border nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-other" type="button" role="tab" aria-controls="pills-other" aria-selected="false">Other</button>
                </li>
             </ul>
             <div class="tab-content" id="pills-tabContent">
               <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <div class="row">
                     <div class="col-md-5">
                        <img src="images/ring-ceremony.png" class="img-fluid" alt="Ring ceremony">
                     </div>
                     <div class="col-md-7 mt-3 mt-md-0">
                        <h2 class="h4 netural-100">You have selected above to Reschedule your ceremony. To proceed you just need to confirm the following.</h2>
                        <ul class="list-unstyled mb-0">
                           <li class="d-flex align-items-start mt-4">
                              <img style="top:2px;" class="me-3 position-relative" src="/images/green-success.svg" alt="Check Icon">
                              <p class="body-3 mb-0 netural-100">You have already made a booking with Simple Ceremonies</p>
                           </li>
                           <li class="d-flex align-items-start mt-4 mb-4">
                              <img style="top:2px;" class="me-3 position-relative" src="/images/green-success.svg" alt="Check Icon">
                              <p class="body-3 mb-0 netural-100">You have confirmed with Simple Ceremonies that your rescheduled time is available (you can do this on the booking calendar or if less than one month from today contact us direct)</p>
                           </li>
                        </ul>
                        <a href="#" class="theme-btn primary-btn mt-3 d-inline-block">Re-Schedule now</a>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                  <div class="row">
                     <div class="col-md-5">
                        <img src="images/man-with-pen-signs-document.png" class="img-fluid w-100" alt="correction">
                     </div>
                     <div class="col-md-7 mt-3 mt-md-0">
                        <h3 class="h4 netural-100 mb-4">You have selected above to Make a Correction(s)<br><br>
                           There are two ways to go about this, depending on what stage of the process you are through. Please read the 2 options below to use the correct option for you.
                        </h3>
                        <h4 class="h4 netural-100">Step 1</h4>
                        <p class="body-3 netural-100">If you have already completed the NoIM on-line BUT have not yet uploaded it on the Simple Ceremonies site you will need to return to the online NoIM and upload</p>
                        <h4 class="h4 netural-100 mt-4">Step 2</h4>
                        <p class="body-3 netural-100">If you have already</p>
                        <ul class="list-unstyled mb-0">
                           <li class="d-flex align-items-start mt-4">
                              <img style="top:2px;" class="me-3 position-relative" src="/images/green-success.svg" alt="Check Icon">
                              <p class="body-3 mb-0 netural-100">Completed the NoIM on-line, signed it, and had it witnessed by an Authorised Person</p>
                           </li>
                           <li class="d-flex align-items-start mt-4 mb-4">
                              <img style="top:2px;" class="me-3 position-relative" src="/images/green-success.svg" alt="Check Icon">
                              <p class="body-3 mb-0 netural-100">Uploaded/ emailed it back to Simple Ceremonies.</p>
                           </li>
                        </ul>
                        <a href="#" class="theme-btn primary-btn mt-3 d-inline-block">Make Correction(s) to the NoIM now</a>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                  <div class="row">
                     <div class="col-md-5">
                        <img src="images/checklist-v1.png" class="img-fluid" alt="correction">
                     </div>
                     <div class="col-md-7 mt-3 mt-md-0">
                        <h4 class="h4 netural-100 mb-4">Following your Marriage Ceremony, you will have received your Certificate of Marriage. However, do you also require the Registered Marriage Certificate from Birth Deaths?  If so you need to apply to Births Deaths and Marriage NSW</h4>
                        <p class="body-3 netural-100">The current fee is $60<br><br>
                           Alternatively, we can go through the process, on your behalf, saving you from having to complete the online form and provide copies of ID.<br><br>
                           We charge a fee of $40 to do this. So the total cost becomes $100</p>
                        <a href="#" class="theme-btn primary-btn mt-3 d-inline-block">Order Registered Certificate of Marriage</a>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="pills-other" role="tabpanel" aria-labelledby="pills-other-tab">
                  <div class="row">
                     <div class="col-md-5">
                        <img src="images/checklist-v1.png" class="img-fluid" alt="correction">
                     </div>
                     <div class="col-md-7 mt-3 mt-md-0">
                        <h4 class="h4 netural-100 mb-4">You have selected Other for your payment. Only use this option if alternative are not available before</h4>
                        <form action="" class="correction-form">
                           <div class="form-check mb-3" role="button">
                              <input class="form-check-input" type="checkbox" value="" id="invalidCheck1">
                              <label class="form-check-label body-1" for="invalidCheck1">Prepare a letter $50</label>
                           </div>
                           <div class="form-check mb-3">
                              <input class="form-check-input" type="checkbox" value="" id="invalidCheck2">
                              <label class="form-check-label body-1" for="invalidCheck2">Transferring NoIM $110</label>
                           </div>
                           <div class="form-check mb-3">
                              <input class="form-check-input" type="checkbox" value="" id="invalidCheck3">
                              <label class="form-check-label body-1" for="invalidCheck3">Manual NoIM $110</label>
                           </div>
                           <div class="form-check mb-3">
                              <input class="form-check-input" type="checkbox" value="" id="invalidCheck4">
                              <label class="form-check-label body-1" for="invalidCheck4">Phone Booking $85</label>
                           </div>
                           <div class="form-check mb-3">
                              <input class="form-check-input" type="checkbox" value="" id="invalidCheck5">
                              <label class="form-check-label body-1" for="invalidCheck5">Rehearsal $150</label>
                           </div>
                           <div class="form-check mb-3">
                              <input class="form-check-input" type="checkbox" value="" id="invalidCheck6">
                              <label class="form-check-label body-1" for="invalidCheck6">Other</label>
                           </div>
                           <div>
                              <label for="exampleFormControlTextarea1" class="form-label small-text2">What is the additional fee for?</label>
                              <textarea placeholder="Type here" class="form-control body-1 netural-100" id="exampleFormControlTextarea1" rows="8"></textarea>
                           </div>
                           <h4 class="h4 netural-100 mt-4 mb-4"><span class="small-text2 me-3">Grand total</span>$ 0</h4>
                           <button type="submit" id="submit_button" class="theme-btn primary-btn border-0">Pay</button>
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