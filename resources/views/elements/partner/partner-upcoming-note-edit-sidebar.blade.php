<div class="offcanvas offcanvas-end theme-offcanvas partner-module-sidebar" tabindex="-1" id="partner_note_edit_sidebar" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <p id="offcanvasRightLabel" class="h3 neutral-100">Edit note</p>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button>
  </div>
  <div class="offcanvas-body">
    <form>
      <div class="col-md-10 col-12 mb-4">
        <label class="form-label small-text2">Notes for the marriage couple</label>
        <select required="" name="customer_type" class="js-placeholder-single-input form-control">
           <option value="" disabled="" selected="" hidden="">Choose here</option>
           <option value="1">David & Emma</option>
           <option value="2">John & Jessica</option>
           <option value="3">Matt & Zoe</option>
           <option value="4">Chloe & Amy</option>
        </select>
        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Marriage couple is required</div>
     </div>
      <div class="col-md-10 col-12 mb-4">
        <label for="InputName" class="form-label small-text2">Note title</label>
        <input type="text" placeholder="Important to know" class="form-control body-1 netural-100" name="name" id="InputName">
      </div>
      <div class="col-md-10 col-12 mb-4">
        <label for="InputName" class="form-label small-text2">Description</label>
        <textarea placeholder="The groom's parents just died, make sure you guys understand this situation & don't mention anything about that, I'm afraid it will spoil his mood. THANKS!" class="form-control body-3 netural-100" id="exampleFormControlTextarea1" rows="8"></textarea>
      </div>
      <div class="col-md-10 col-12 mb-4">
        <label class="form-label small-text2">Who can see/receive notes</label>
        <select class="js-example-basic-multiple form-control" name="states[]" multiple="multiple" required="">
           <option value="L1">All</option>
           <option value="L2">Partner</option>
           <option value="L3">Celebrant</option>
           <option value="L4">Couple</option>
         </select>
        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Locations is required</div>
     </div>
      <div class="col-12">
        <button type="submit" id="submit_button" class="theme-btn primary-btn border-0">Save</button>
      </div>
   </form>
  </div>
</div>