<div class="offcanvas offcanvas-end theme-offcanvas" tabindex="-1" id="add-certificate-register"
   aria-labelledby="offcanvasRightLabel">
   <div class="offcanvas-header">
      <p id="offcanvasRightLabel" class="h3 neutral-100">Add Marriage Certificate</p>
      <button type="button" class="btn-close text-reset closeCanvas" data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button>
   </div>
   <div class="offcanvas-body">
   <div class="message"></div>
      
      <form method="post" id="add-certificate" action="{{url('certificate-register')}}" name="add-certificate">
         @csrf
         <div class="row mb-4">
            <div class="col-md-6">
                <label for="partnerstatus" class="form-label small-text2 mb-2">Enter Certificate Prefix</label>   
                      
                <input type="text" name="certificate_prefix" id="certificate_prefix" class="form-control body-3 netural-100" required>
            </div>
            <div class="col-md-6">
                <label for="partnerstatus" class="form-label small-text2 mb-2">Enter Certificate suffix</label>
            
                <input type="text" name="certificate_suffix" id="certificate_suffix" class="form-control body-3 netural-100" required>
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-md-6">
                <label for="partnerstatus" class="form-label small-text2 mb-2">Enter First Certificate Number</label>
            
                <input type="number" name="first_certificate_no" id="first_certificate_no" class="form-control body-3 netural-100" required>
            </div>
            <div class="col-md-6">
                <label for="partnerstatus" class="form-label small-text2 mb-2">Enter number of Certificates</label>
            
                <input type="number" name="no_of_certificates" id="no_of_certificates" class="form-control body-3 netural-100" required >
            </div>
         </div>
         <div class="d-lg-flex mt-5">
         <button type="submit" id="submit_button" class="theme-btn primary-btn border-0">Submit</button>
         </div>
      </form>
   </div>
</div>
