<div class="offcanvas offcanvas-end theme-offcanvas" tabindex="-1" id="view-message"
   aria-labelledby="offcanvasRightLabel">
   <div class="offcanvas-header">
      <p id="offcanvasRightLabel" class="h3 neutral-100">Message</p>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button>
   </div>
   <div class="offcanvas-body">
   <form class="needs-validation" method="POST" novalidate action="{{ route('sendFollowUpEmail') }}">
         @csrf
         <div class="col-md-12 mb-4 ">
            <label for="email" class="form-label small-text2 ps-2 ">Email couples</label>
            <input type="email" value="{{(isset($data->user->email)) ? $data->user->email:''}}" class="form-control body-1 netural-100 email" name="email" id="email" readonly>
            <div class="invalid-feedback">
               Please type the email.
            </div>
         </div>
         <div class="col-md-12 mb-4">
            
            <label for="follow_subject" class="form-label small-text2">Subject</label>
            <input type="text" placeholder="Follow up to couples" value="{{(isset($celebrant_details->celebrant->follow_subject)) ? $celebrant_details->celebrant->follow_subject:''}}" class="form-control body-1 netural-100 readonlyInput" name="follow_subject" id="follow_subject" required readonly>
            <div class="invalid-feedback">
               Follow up to couples
            </div>
         </div>
         <div class="col-md-12">
            <label for="partnerstatus" class="form-label small-text2 mb-2">Message</label>
            <textarea class="form-control body-1 netural-100 readonlyInput" name="follow_Description" id="ceremonyplace" placeholder="Type here" rows="10" readonly>{{(isset($celebrant_details->celebrant->follow_Description)) ? $celebrant_details->celebrant->follow_Description:''}}</textarea>
         </div>
         <div class="d-lg-flex mt-5">
            <!-- <a href="#" class="theme-btn primary-btn me-lg-3 d-flex justify-content-center mb-3 mb-lg-0">Send </a> -->
            <button type="submit" class="theme-btn primary-btn me-lg-3 d-flex justify-content-center mb-3 mb-lg-0 saveClass">Send</button>
            <a role="button" class="d-inline-flex theme-btn primary-btn justify-content-center showClass" onclick="displayItem('showClass','saveClass')">
               <img class="me-2" src="/images/admin/partner/edit.svg" alt="Edit">Edit information
            </a>
         </div>
      </form>
   </div>
</div>