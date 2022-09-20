<div class="offcanvas offcanvas-end theme-offcanvas" tabindex="-1" id="feedback"
   aria-labelledby="offcanvasRightLabel">
   <div class="offcanvas-header">
      <p id="offcanvasRightLabel" class="h3 neutral-100">Give feedback</p>
      <button type="button" class="btn-close text-reset closeCanvas" data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button>
   </div>
   <div class="offcanvas-body">
   <div class="message"></div>
      <form method="post" onsubmit="return submitAjaxWithoutReload(event,'give-booking-feedback','post','/saveFeedback','feedback')" id="give-booking-feedback" action="{{route('celebrant.saveFeedback')}}" name="give-booking-feedback">
         @csrf
         <div class="col-md-12">
            <label for="partnerstatus" class="form-label small-text2 mb-2">Give feedback and tell how to solve its</label>
            <input name="booking_id" type="hidden" value="{{ $data->id}}">
             <textarea  class="form-control body-3 netural-100 feedback" name="feedback" id="feedback" rows="8" required></textarea>
         </div>
         <div class="d-lg-flex mt-5">
         <button type="submit" id="submit_button" class="theme-btn primary-btn border-0">Submit</button>
         </div>
      </form>
   </div>
</div>
