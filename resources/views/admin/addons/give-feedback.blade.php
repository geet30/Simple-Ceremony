
<div class="offcanvas offcanvas-end theme-offcanvas" tabindex="-1" id="offcanvasgivefeedbackaddons" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <p id="offcanvasRightLabel" class="h3 neutral-100">Give Feedback</p>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button>
  </div>
  <div class="offcanvas-body">
  <div class="message"></div>
  <form method="post" id="add-feedback" action="{{url('submit-feedback')}}" name="postform">
   @csrf
        <div class="col-md-12 mb-4">
         <input type="hidden" name="product_id" id="product_id">
          <textarea placeholder="Some packages do not have a price. please give a price and submit it to us again" class="form-control body-3 netural-100" name="feedback" id="feedback" rows="8" required></textarea>
        </div>
        <div class="col-12">
          <button type="submit" id="submit_button" class="theme-btn primary-btn border-0">Submit</button>
        </div>
   </form>
  </div>
</div>
