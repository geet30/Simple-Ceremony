<div class="offcanvas offcanvas-end theme-offcanvas partner-module-sidebar" tabindex="-1" id="edit-note" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <p id="offcanvasRightLabel" class="h3 neutral-100">Edit note</p>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button>
  </div>
  <div class="offcanvas-body">
    <form>
      <div class="col-md-10 col-12 mb-4">
        <label class="form-label small-text2 ms-2">Notes for the marriage couple</label>
        <select required="" name="customer_type" class="js-placeholder-single-input form-control">
           <option value="" disabled=""  hidden="">Choose here</option>
           <option value="1">David & Emma</option>
           <option value="2" selected="">John & Jessica</option>
           <option value="3">Matt & Zoe</option>
           <option value="4">Chloe & Amy</option>
        </select>
        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Marriage couple is required</div>
     </div>
      <div class="col-md-10 col-12 mb-4">
        <label for="InputName" class="form-label small-text2 ms-2">Note title</label>
        <input type="text" value="Important to know" class="form-control body-1 netural-100" name="name" id="InputName">
      </div>
      <div class="col-md-10 col-12 mb-4">
        <label for="InputName" class="form-label small-text2 ms-2">Description</label>
        <textarea  class="form-control body-3 netural-100" id="exampleFormControlTextarea1" rows="8">The groom's parents just died, make sure you guys
understand this situation & don't mention anything
about that, I'm afraid it will spoil his mood. THANKS!</textarea>
      </div>
      <div class="col-md-10 col-12 mb-4">
        <label class="form-label small-text2 ms-2">Who can see/receive notes</label>
        <select class="js-example-basic-multiple form-control" name="states[]" multiple="multiple">
                              <option value="O1" data-badge="">Peter</option>
                              <option value="O2" data-badge="">Lux</option>
                              <option value="O3" data-badge="">Michael</option>
                              <option value="O4" data-badge="">Johnson</option>
                           </select>
        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Locations is required</div>
     </div>
      <div class="col-12">
        <button type="submit" id="submit_button" class="theme-btn primary-btn border-0">Save</button>
      </div>
   </form>
  </div>
</div>