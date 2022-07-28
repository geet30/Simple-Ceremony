<div class="offcanvas offcanvas-end theme-offcanvas" tabindex="-1" id="offcanvas_partner_addlocation" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <p id="offcanvasRightLabel" class="h3 neutral-100">Add new location</p>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button>
  </div>
  <div class="message"></div>
  <div class="offcanvas-body">
      <form method="post" id="add-locations" action="{{url('submit-location')}}" name="postform">
      @csrf
        <div class="col-md-9 mb-4">
          <label for="InputName" class="form-label small-text2">Location name</label>
          <input type="text" placeholder="Type name add-on here" class="form-control body-1 netural-100" name="name" id="location-name">
        </div>
        <button type="submit" class="theme-btn primary-btn d-inline-block">Save</button>
    </form>

  </div>
</div>