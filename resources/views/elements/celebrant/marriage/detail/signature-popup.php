<!-- Modal -->
<div class="modal fade theme-modal signature-padding" id="signature" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body ">
            <div class="row">
               <div class="col-6">
                  <h2 class="h3 neutral-100 mb-0">Your signature</h2>
               </div>
               <div class="col-6 text-end"><a class="theme-btn primary-btn-border d-inline-flex"  data-bs-dismiss="modal">Cancel</a></div>
               <div class="col-12 pt-4">
                  <ul class="nav theme-tabs border-0">
                     <li class="nav-item">
                        <a class="nav-link active" id="draw-tab" data-bs-toggle="tab" data-bs-target="#draw" href="#">Draw</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="upload-tab" data-bs-toggle="tab" data-bs-target="#upload" href="#">Upload</a>
                     </li>
                  </ul>
                  <div class="tab-content pt-4" id="tabContent">
                     <div class="tab-pane fade show active" id="draw" role="tabpanel" aria-labelledby="draw-tab">
                        <div class="position-relative">
                           <div class="signature-box">
                              <canvas id="signature-pad" width="600" height="200"></canvas>
                           </div>
                           <div class="btn-reset">
                              <button id="save" class="d-none button-2">Save</button>
                              <button id="clear">Reset</button>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="upload" role="tabpanel" aria-labelledby="upload-tab">
                        <div class="signature-box">
                           <div class="drop-zone text-center">
                              <span class="drop-zone__prompt text-center d-flex flex-column py-5 text-center">
                              <img src="/images/icons/png-logo.svg" class="img-fluid png-logo mb-4">
                              <span class="dark-blue-100 h4 text-center">Drop your files here, or  <span class="turquoise-100 text-decoration cursor-pointer">browse file</span></span>
                              </span>
                              <input type="file" name="myFile" class="drop-zone__input">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer border-0">
            <!-- <a id="clear">Reset</a>   -->
            <button type="button" class="theme-btn primary-btn">Use</button>
         </div>
      </div>
   </div>
</div>