<div class="offcanvas offcanvas-end theme-offcanvas" tabindex="-1" id="edit-certificate-register"
   aria-labelledby="offcanvasRightLabel">
   <div class="offcanvas-header">
      <p id="offcanvasRightLabel" class="h3 neutral-100">Edit Marriage Certificate</p>
      <button type="button" class="btn-close text-reset closeCanvas" data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button>
   </div>
   <div class="offcanvas-body">
   <div class="message"></div>
   <?php $id =0;?>
      <form method="PUT" id="update-certificate"  name="update-certificate">
         @csrf
         @method('PUT')
         <div class="row mb-4">
            <div class="col-md-6">
                <label for="partnerstatus" class="form-label small-text2 mb-2">Certificate Number</label>
                  <select class="select2CertificatePopup form-control" name="first_certificate_no" id="certificate_no">
                     <option value="" disabled="" selected="" hidden="">Type marriage certificate number here</option>
                     @foreach ($allCertificates as $certificates)
                        <option value="{{ $certificates->id }}">{{ $certificates->certificate_prefix.$certificates->first_certificate_no.$certificates->certificate_suffix }}</option>
                     @endforeach
                  </select>
                <!-- <input type="text" name="first_certificate_no" id="certificate_no" class="form-control body-3 netural-100"  required> -->
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-md-6">
                <label for="partnerstatus" class="form-label small-text2 mb-2">Name of couple</label>
            
                <input type="text" name="name_of_couple" id="name_of_couple" class="form-control body-3 netural-100" required readonly>
            </div>
            <div class="col-md-6">
                <label for="partnerstatus" class="form-label small-text2 mb-2">Date use</label>
            
                <input type="text" name="date" id="date_use" class="form-control body-3 netural-100" required >
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-md-12 mb-2">
               <input class="form-check-input me-2" type="checkbox" name="status" id="status" value="1"  autocomplete="off">
               <label class="form-check-label body-1" for="customlocation">
                        Check the checkbox if certificate is destroyed</label>
            </div>
            <div class="col-md-12">
                <label for="details" class="form-label small-text2 mb-2">Details</label>
                <textarea name="details" id="details" class="form-control body-3 netural-100"></textarea>
                
            </div>
            
         </div>
         <div class="d-lg-flex mt-5">
         <button type="submit" id="submit_button" class="theme-btn primary-btn border-0">Save</button>
         </div>
      </form>
   </div>
</div>
