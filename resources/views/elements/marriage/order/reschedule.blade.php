<div class="offcanvas offcanvas-end theme-offcanvas partner-module-sidebar" tabindex="-1" id="reschedule" aria-labelledby="offcanvasRightLabel">
   <div class="offcanvas-header">
      <p id="offcanvasRightLabel" class="h3 neutral-100">Reschedule</p>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button>
   </div>
   <div class="offcanvas-body">
      <form>
         <div class="col-md-10 mb-4">
            <label class="form-label small-text2">Location</label>
            <select required="" name="customer_type" class="js-placeholder-single-input form-control">
               <option value="" disabled="" selected="" hidden="">Choose location</option>
               <option value="1">Add name location here</option>
               <option value="2">Add name location here</option>
               <option value="3">Add name location here</option>
               <option value="4">Add name location here</option>
            </select>
            <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Marriage couple is required</div>
         </div>
         <div class="d-md-flex col-12">
            <div class="col-md-6  mb-4 ">
               <label for="date" class="form-label small-text2 ps-2">Event date</label>
               <div class="input-group date theme-datepicker">
                  <input type="text" class="form-control body-1 netural-100" id="date" value="Choose date here"/>
                  <span class="input-group-append">
                     <!-- <span class="input-group-text bg-light d-block">
                        <i class="fa fa-calendar"></i>
                        </span> -->
                  </span>
               </div>
            </div>
            <div class="col-md-4 col-xl-3 mb-4 ms-md-3">
               <label for="date" class="form-label small-text2 ps-2">Time</label>
               <select required="" name="customer_type" class="js-placeholder-single-input form-control">
                  <option value="" disabled="" selected="" hidden="">--:--</option>
                  <option value="1">09:00</option>
                  <option value="2">09:30</option>
                  <option value="3">10:00</option>
                  <option value="4">10:30</option>
                  <option value="5">11:00</option>
                  <option value="6">11:30</option>
               </select>
            </div>
         </div>
         <div class="col-md-10 col-xl-6 mb-4">
            <label class="form-label small-text2">Choose marriage celebrants</label>
            <select required="" name="customer_type" class="js-placeholder-single-input form-control">
               <option value="" disabled="" selected="" hidden="">Choose here</option>
               <option value="1">Peter</option>
               <option value="2">Lux</option>
               <option value="3">Michael</option>
               <option value="4">Johnson</option>
            </select>
            <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Marriage couple is required</div>
         </div>
         <div class="col-12">
            <label for="date" class="form-label small-text2 ps-2">Reschedule fee</label>
         </div>
         <div class="d-md-flex col-12">
            <div class="col-md-4  mb-4 ">
               <div class="theme-input-group left-input change-reschedule-1">
                  <input type="text" value="85" class="form-control body-1 netural-100" name="name" id="date">
                  <img src="/images/icons/dollor.svg" class="left-icon img-fluid">
               </div>
               <div class="change-reschedule-2 d-none">
                  <input type="text" value="Add nominal here" class="form-control body-1 netural-100" name="name" id="date">
               </div>
            </div>
            <div class="col-md-6 mb-4 align-self-center ms-md-2">
               <a class="add-link reschedule-btn" type="button">Change reschedule fee</a>
               <a  class="add-link reschedulecancel-btn d-none"  type="button">Cancel</a>
            </div>
         </div>
         <div class="col-12">
            <button  data-bs-toggle="offcanvas" data-bs-target="#invoice" class="theme-btn primary-btn border-0 d-flex w-100"  >Would you like to send updated invoices and confirmations? </button>
         </div>
      </form>
   </div>
</div>