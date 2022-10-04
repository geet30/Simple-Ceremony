<div class="offcanvas offcanvas-end theme-offcanvas reschedule-ceremony-sidebar" tabindex="-1" id="reschedule_ceremony_sidebar"
   aria-labelledby="offcanvasRightLabel">
   <div class="offcanvas-header">
      <p id="offcanvasRightLabel" class="h3 neutral-100">Reschedule</p>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button>
   </div>
   <div class="offcanvas-body">
      <form>
         <div class="col-md-12 mb-4">
            <label for="selectinput" class="form-label small-text2">Location</label>
            <select required="" name="customer_type" id="selectinput" class="js-placeholder-single-input form-control">
               <option value="" disabled="" selected="" hidden="">Select location</option>
               <option value="1">Add location name here</option>
               <option value="2">Add location name here</option>
               <option value="3">Add location name here</option>
               <option value="4">Add location name here</option>
               <option value="5">Custom location</option>
            </select>
            <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Select location required</div>
         </div>
         <div class="col-md-12 mb-4">
            <label class="form-label small-text2">Custom location</label>
            <input type="text" placeholder="Add name location here" class="form-control body-1 netural-100" name="name">
         </div>
         <div class="col-md-8">
            <div class="row">
               <div class="col-md-7 mb-4">
                  <label for="InputName" class="form-label small-text2">Location fee</label>
                  <div class="d-flex align-items-center">
                     <input type="text" value="$ Fill location fee" class="form-control body-1 netural-100" name="name" id="InputName" required="">
                     <span class="d-inline-block ms-2" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="bottom" data-bs-content="Select the location first,after that location fee will appear">
                     <img src="/images/booking-form/information.svg" alt="Information Icon" style="width:13px;">
                     </span>
                  </div>
                  <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Total fee is required</div>
               </div>
               <div class="col-md-5 mb-4">
                  <label class="form-label small-text2">Reschedule fee</label>
                  <input type="text" value="$ 85" class="form-control body-1 netural-100" name="name">
               </div>
            </div>
         </div>
         <div class="col-md-8">
            <div class="row">
               <div class="col-md-7 mb-4">
                  <label class="form-label small-text2">Event date</label>
                  <input role="button" type="text" placeholder="Choose date here" class="form-control body-1 netural-100" name="name" readonly data-bs-toggle="modal" data-bs-target="#user_calendarmodal">
               </div>
               <div class="col-md-5 mb-4">
                  <label class="form-label small-text2">Time</label>
                  <select name="time_hr" id="time_hr" class="js-placeholder-single-input form-control">
                     <option value="" disabled="" selected="" hidden="">--:--</option>
                     <option value="1">09:00</option>
                     <option value="2">09:30</option>
                     <option value="3">10:00</option>
                     <option value="4">10:30</option>
                     <option value="5">11:00</option>
                     <option value="6">11:30</option>
                     <option value="7">12:00</option>
                     <option value="8">12:30</option>
                  </select>
               </div>
            </div>
         </div>
         <div class="d-lg-flex">
            <a href="#" class="theme-btn primary-btn me-lg-3 d-flex justify-content-center mb-3 mb-lg-0">Pay</a>
         </div>
      </form>
      <div class="warning-text mt-4">
          <img class="mt-4" src="/images/user/exclamation.svg" alt="Exclamation">
          <h3 class="h3 netural-100 mb-4 mt-4">Warning</h4>
          <p class="body-3 mb-4">You are changing your location but you have add-ons to your marriage, contact the office to see if your add-ons are available for your new location</p>
      </div>
   </div>
</div>