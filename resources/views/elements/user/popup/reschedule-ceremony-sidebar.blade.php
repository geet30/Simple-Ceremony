<div class="offcanvas offcanvas-end theme-offcanvas reschedule-ceremony-sidebar" tabindex="-1" id="reschedule_ceremony_sidebar"
   aria-labelledby="offcanvasRightLabel">
   <div class="offcanvas-header">
      <p id="offcanvasRightLabel" class="h3 neutral-100">Reschedule</p>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button>
   </div>
   <div class="offcanvas-body">
      <form class="needs-validation" novalidate="" action="{{route('reschedule.pay')}}" id="reschedule-pay" method="POST">
         @csrf
         <div class="col-md-12 mb-4">
            <label for="selectinput" class="form-label small-text2">Location</label>
            <select required="" name="locationId" id="selectinput" class="js-placeholder-single-input form-control" onchange="findRescheduleInfo('reschedule-info',this)">
               <option value="" disabled="" selected="" hidden="">Select location</option>
               @foreach ($locations as $location)
               <option value="{{ $location->id}}">{{$location->name}}</option>
               @endforeach
            </select>
            <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Select location required</div>
         </div>
         <!-- <div class="col-md-12 mb-4">
            <label class="form-label small-text2">Custom location</label>
            <input type="text" placeholder="Add name location here" class="form-control body-1 netural-100" name="name">
         </div> -->
         <div class="col-md-8">
            <div class="row">
               <div class="col-md-7 mb-4">
                  <label for="InputName" class="form-label small-text2">Location fee</label>
                  <div class="d-flex align-items-center">
                     <input type="text" value="$ Fill location fee" class="form-control body-1 netural-100 commonFirstEmpty location_fee" name="location_fee" id="location_fee" required="" readonly>
                     <span class="d-inline-block ms-2" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="bottom" data-bs-content="Select the location first,after that location fee will appear">
                     <img src="/images/booking-form/information.svg" alt="Information Icon" style="width:13px;">
                     </span>
                  </div>
                  <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>fee is required</div>
               </div>
               <div class="col-md-5 mb-4">
                  <label class="form-label small-text2">Reschedule fee</label>
                  <input type="text" value="$ 85" class="form-control body-1 netural-100 reschedule_fee commonFirstEmpty" name="reschedule_fee" required readonly>
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="row">
                 <div class="col-md-6 event_date">
                     <label for="event_date" class="form-label small-text2">Event date</label>
                     <div class="input-group date theme-datepicker">
                        <input role="button" type="text" class="form-control body-1 netural-100 commonFirstEmpty event_date_input" id="event_date" name="booking_date"  placeholder="Choose date here" required/>
                        <span class="input-group-append">
                        </span>
                        <div class="invalid-feedback event_date_required"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Event date is required</div>
                     </div>


                  </div>
               <div class="col-md-5 mb-4">
                  <label class="form-label small-text2">Time</label>
                  <select name="booking_start_time" id="booking_start_time" class="js-placeholder-single-input commonFirstEmpty form-control" required>
                     <option value="" disabled="" selected="" hidden="">--:--</option>
                     <option value="09:00">09:00</option>
                  </select>
               </div>
            </div>
         </div>
         <div class="d-lg-flex">
            <input type="submit" class="theme-btn primary-btn me-lg-3 d-flex justify-content-center mb-3 mb-lg-0" value="Pay">
         </div>
      </form>
      <div class="warning-text mt-4">
          <img class="mt-4" src="/images/user/exclamation.svg" alt="Exclamation">
          <h3 class="h3 netural-100 mb-4 mt-4">Warning</h4>
          <p class="body-3 mb-4">You are changing your location but you have add-ons to your marriage, contact the office to see if your add-ons are available for your new location</p>
      </div>
   </div>
</div>
@include('elements.common.js')
<style type="text/css">
span.select2-container.select2-container--default.select2-container--open {
    z-index: 9999999;
}
</style>