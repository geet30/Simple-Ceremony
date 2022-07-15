<div class="offcanvas offcanvas-end theme-offcanvas" tabindex="-1" id="offcanvasaddons" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <p id="offcanvasRightLabel" class="h3 neutral-100">Create add-on</p>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button>
  </div>
  <div class="offcanvas-body">
  <div class="message"></div>
  <form method="post" id="add-addons" action="{{url('admin/submit-addon')}}" name="postform">
   @csrf
    <div class="col-md-9 mb-4">
      <label for="InputName" class="form-label small-text2">Add name add-on</label>
      <input type="text" placeholder="Type name add-on here" class="form-control body-1 netural-100" name="name" id="addon-name">
    </div>
    <button type="submit" class="theme-btn primary-btn d-inline-block">Save</button>
</form>
    <!-- <a class="theme-btn primary-btn d-inline-block" id="save-add-on">Save</a> -->
  </div>
</div>