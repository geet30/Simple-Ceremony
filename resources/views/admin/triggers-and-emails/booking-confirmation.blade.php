@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-2 col-md-3 col-lg-2 px-0">
         @include('elements.common.admin-sidebar')
      </div>
      <div class="col-10 col-md-9 col-lg-10 px-4">
         @include('elements.common.panel-header')
         <div class="d-flex mt-4 mb-4 justify-content-between">
            <a href="/all-triggers-and-emails" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4 mb-md-0"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
            <a href="/edit-booking-confirmation" role="button" class="d-inline-flex theme-btn primary-btn justify-content-center h-100">
            <img class="me-2" src="/images/admin/partner/edit.svg" alt="Edit">
            Edit
            </a>
         </div>
         <div class="card panel-card">
            <div class="card-body">
               <form class="needs-validation" method="POST" novalidate>
                  <div class="row">
                     <div class="col-lg-12 col-xl-10 col-xxl-8">
                        <div class="row">
                           <div class="col-md-12 mb-4">
                              <label class="form-label small-text2">Subject</label>
                              <div class="card card-turquoise-20">
                                 <div class="card-body">
                                    <p class="body-1 mb-0 ">
                                       Confirmation of your ceremony booking.<br>
                                       Hi {Prefered Name 1} & {Preferred Name 2}, thank you for booking your ceremony at {Location}, {Address} on {Day} the<br>
                                       {Ceremony Date} at {Time}.
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label class="form-label small-text2">Receiver</label>
                              <input type="text" value="Couple" class="form-control body-1 netural-100" name="name" id="InputName" readonly>
                           </div>
                           <div class="col-md-12">
                              <div class="row">
                                 <div class="col-md-6 col-lg-1 mb-4">
                                    <label for="InputName" class="form-label small-text2">Time</label>
                                    <input type="number" value="1" class="form-control body-1 netural-100" name="name" id="InputName" readonly>
                                    <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Business name is required</div>
                                 </div>
                                 <div class="col-md-12 col-lg-11">
                                    <div class="row">
                                       <div class="col-md-6 col-lg-4 mb-4">
                                          <label for="InputName" class="form-label small-text2">Time</label>
                                          <input type="text" value="Minutes" class="form-control body-1 netural-100" name="name" id="InputName" readonly>
                                       </div>
                                       <div class="col-md-6 col-lg-4 mb-4">
                                          <label class="form-label small-text2">Category</label>
                                          <input type="text" value="After" class="form-control body-1 netural-100" name="name" id="InputName" readonly>
                                       </div>
                                       <div class="col-md-6 col-lg-4 mb-4">
                                          <label class="form-label small-text2">Trigger</label>
                                          <input type="text" value="Booking" class="form-control body-1 netural-100" name="name" id="InputName" readonly>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 mb-4">
                              <label class="form-label small-text2">Message</label>
                              <div class="card card-turquoise-20">
                                 <div class="card-body">
                                    <div class="body-1 mb-0 ">
                                       Please read the critical information below now!<br><br>
                                       Your action is required for you to get married. If this action is not carried out you will not be able to get married and lose any payments already made.<br><br>
                                       We don’t want to scare you ;-) but this bit is critical.<br><br>
                                       Critical Information<br><br>
                                       1. You must complete the Notice of Intended Marriage form (NoIM) no later than the {Ceremony Date less 1 calendar month}.<br><br>
                                       To complete the NoIM form you just need to:<br><br>
                                    <div class="ps-4 body-1">
                                       a) Click here {Link to NoIM portal} and scan in your IDs, then type in your details into the NoIM. This is a legal document so all details must be completely accurate, without error or omission. Your details must exactly match the IDs you are using.<br><br>
                                       b) Sign the NoIM and have your signature witnessed by an Authorised Person {link to list of Authorised Person}<br><br>
                                       c) Upload other documents, if applicable<br><br>
                                    </div>
                                    2. The day of your Ceremony<br><br>
                                    Click here to see how you special day will flow and what you will need to bring on the day {link to Ceremony page on site}<br><br>
                                    3. Add-Ons for your special day <br><br>
                                    We can help you arrange everything for your special day with just a few clicks. Click here to see our our amazing partners and check out the special pricing they can offer you. {link to couples portal}<br><br>
                                    4. The Commonwealth Government of Australia<br><br>
                                    <div class="ps-4 body-1">
                                       a) The Australian Government has put together some information, to help you, on what it means to be married.Please click here to read  “Happily ever … before and after”  {link to government info}<br><br>
                                       b) The Australian Government recommends pre-marriage counselling. This is NOT a requirement to get married.However, you may find it useful. Here are some provides you may like to contact :<br><br>
                                    </div>
                                    <div class="ps-5 body-1 turquoise-100">
                                       - Couples Counselling<br><br>
                                       - The Heart Centre<br><br>
                                       - Affinity Counselling<br><br>
                                       - Equilibrium Psychology<br><br>
                                    </div>
                                    Please let us know if you have any questions.<br><br>
                                    Cheers<br><br>
                                    Ange and Michael<br>
                                    {Admin Name and Signature eg “Simple Ceremonies” }<br><br>
                                    Additional Information for your assistance<br><br>
                                    Tax InvoiceMACB Family Pty Ltd T/A Simple Ceremonies<br><br>
                                    ABN: 24 137 901 574<br><br>
                                    Wednesday, 20 April 2022, 9:36 am<br><br>
                                    To: Lorem Ipsum Lorem Ipsum & Lorem Ipsum Lorem Ipsum,<br><br>
                                    Wedding Service<br><br>
                                    Blues Point Reserve, McMahons Point. (Google Pin - https://goo.gl/maps/RNY5VyMDPfEN7HAm7) <br><br>
                                    Total fee including gst: AUD 350.00<br><br>
                                    Paid in full - Wednesday, 20 April 2022, 9:36 am<br><br>
                                    Terms and Conditions<br><br>
                                    For your reference, below are the Booking Conditions you agreed to when making your booking click here <span class="turquoise-100">Terms and Conditions</span><br><br>
                                    Complaints<br><br>
                                    If at any time you are not completely satisfied with the service provided by Simple Ceremonies, please don't hesitate to contact us. If you are then not happy with the resolution provided by Simple Ceremonies, you can make a formal complaint to the Attorney General (who administers Marriage Celebrants) by clicking here
                                 </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 col-lg-9 col-xl-7 mb-4">
                              <label for="InputName" class="form-label small-text2">Overview</label>
                              <input type="text" value="#name #noim #tax_invoice #wedding_service #marriage_date" class="form-control body-1 netural-100" name="name" id="InputName" readonly>
                           </div>
                           <div class="col-md-12 mb-4">
                              <a href="/edit-booking-confirmation" role="button" class="d-inline-flex theme-btn primary-btn justify-content-center h-100">
                                 <img class="me-2" src="/images/admin/partner/edit.svg" alt="Edit">
                                 Edit
                              </a>
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
@endsection