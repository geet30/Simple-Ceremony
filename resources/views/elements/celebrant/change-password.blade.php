<div class="offcanvas offcanvas-end theme-offcanvas" tabindex="-1" id="password"
   aria-labelledby="offcanvasRightLabel">
   <div class="offcanvas-header">
     <p id="offcanvasRightLabel" class="h3 neutral-100">Change password</p>
     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button>
  </div>
  <div class="offcanvas-body">
     <form>
        <div class="col-md-10 col-12 mb-4">
           <label for="InputName" class="form-label small-text2">Current password</label>
           <input type="password" placeholder="Type your current password here" class="form-control body-1 netural-100" name="name" id="InputName">
        </div>
        <div class="col-md-10 col-12 mb-4">
           <label for="password" class="form-label small-text2">New password</label>
           <div class="password-with-eye">
              <input type="password" placeholder="Type your new password here" class="form-control passwordInput body-1 netural-100 " name="password" required="" autocomplete="off">
              <i class="fas right-icon turquoise-100 eyeIcon fa-eye-slash"></i>
           </div>
           <label class="form-label small-text2 mt-2">Your password needs to be at least 10 characters</label>
        </div>
        <div class="col-md-10 col-12 mb-4">
           <label for="password" class="form-label small-text2">Confirm new password</label>
           <div class="password-with-eye">
              <input type="password" placeholder="Type here" class="form-control passwordInput body-1 netural-100 " name="password" required="" autocomplete="off">
              <i class="fas right-icon turquoise-100 eyeIcon fa-eye-slash"></i>
           </div>
        </div>
        <div class="col-12">
           <button type="submit" id="submit_button" class="theme-btn primary-btn border-0">Save</button>
        </div>
     </form>
  </div>
</div>