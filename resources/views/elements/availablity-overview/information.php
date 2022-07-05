<div class="row">
   <div class="col-xl-6 py-31">
      <form class="availablity-overview-scrollbar" method="POST" id="availablity-overview-style">
         <div  class="force-overflow  w-97">
            <div class=" row">
               <div class="col-md-6 mb-4 ">
                  <label for="preferredname1" class="form-label small-text2 ps-2">Preferred name 1</label>
                  <input type="text" value="Johny" class="form-control body-1 netural-100" name="name" id="preferredname1">
               </div>
               <div class="col-md-6  mb-4 ">
                  <label for="preferredname2" class="form-label small-text2 ps-2">Preferred name 2</label>
                  <input type="text" value="Say" class="form-control body-1 netural-100" name="name" id="preferredname2">
               </div>
               <div class="col-md-6  mb-4 ">
                  <label for="phone" class="form-label small-text2 ps-2">Phone number</label>
                  <input type="text" value="+61 0909 0900 909" class="form-control body-1 netural-100" name="name" id="phone">
               </div>
               <div class="col-md-6  mb-4 ">
                  <label for="email" class="form-label small-text2 ps-2">Email</label>
                  <input type="email" value="joe@gmail.com" class="form-control body-1 netural-100" name="name" id="email">
               </div>
               <div class="col-md-6  mb-4 ">
                  <label for="celebrant" class="form-label small-text2 ps-2">Name of marriage celebrant</label>
                  <input type="text" value="Daniels" class="form-control body-1 netural-100" name="name" id="celebrant">
               </div>
               <div class="col-md-6 mb-4 d-md-block"></div>
               <div class="col-md-6  mb-4 ">
                  <label for="location" class="form-label small-text2 ps-2">Location</label>
                  <input type="text" value="Bradfield park" class="form-control body-1 netural-100" name="name" id="location">
               </div>
               <div class="col-md-6  mb-4 ">
                  <label for="address" class="form-label small-text2 ps-2">Address</label>
                  <input type="text" value="Alfred St S, Milsons Point NSW" class="form-control body-1 netural-100" name="name" id="address">
               </div>
               <div class="col-md-6  mb-4 ">
                  <label for="date" class="form-label small-text2 ps-2">Date of marriage</label>
                  <input type="text" value="Daniels" class="form-control body-1 netural-100" name="name" id="date">
               </div>
               <div class="col-md-6  mb-4 ">
                  <label for="time" class="form-label small-text2 ps-2">Time</label>
                  <input type="text" value="11:30 - 12.30 PM" class="form-control body-1 netural-100" name="name" id="time">
               </div>
               <div class="col-12 mb-4">
                  <a class="theme-btn primary-btn">Confirm the data is complete</a>
               </div>
               <div class="col-md-12 mb-4">
                  <label for="ceremonyplace" class="form-label small-text2  ps-2">General notes about couples</label>
                  <textarea class="form-control body-1 netural-100" id="ceremonyplace" placeholder="Type here" rows="10"></textarea>
               </div>
               <div class="col-12 mb-4">
                  <div class="card simple-card ">
                     <div class="card-body">
                        <div class="row">
                           <div class="col-xxl-6 mb-4">
                              <div class="row">
                                 <div class="col-lg-8 col-xxl-9 text-center position-relative">
                                    <div class="attach-document-box position-relative">
                                       <input id="fileupload" class="fileupload" type="file" name="files[]">
                                       <div class="inner-content">
                                          <p class="document-text mb-4">Attach document</p>
                                          <img src="/images/icons/uploading.svg" class="img-fluid mb-2">
                                          <p class="text">Compatible file .pdf .docx</p>
                                          <div class="d-flex justify-content-center">
                                             <div class="align-self-center">
                                                <p class="darg neutral-100 mb-0">Drag or</p>
                                             </div>
                                             <div class="align-self-center ms-1">
                                                <p class="darg turquoise-100 mb-0 text-decoration-underline">browse file</p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- progress-box -->
                                    <div class="attach-document-box progress-box text-center d-none">
                                       <div class="progress-content">
                                          <p class="h4 neutral-100">Uploading 0%</p>
                                          <div id="progress" class="progress">
                                             <div class="progress-bar bar"></div>
                                          </div>
                                       </div>
                                    </div>
                                    <!--  -->
                                    <!--uploaded-box  -->
                                    <div class="attach-document-box uploaded-box d-none">
                                       <div class="d-flex form-check justify-content-end">
                                          <input class="form-check-input" type="checkbox" name="remember" id="remember" autocomplete="off">
                                       </div>
                                       <div class="uploaded-content">
                                          <p id="filename" class="h4 neutral-100 mb-4"></p>
                                          <a class="me-2"><img src="/images/icons/uploading/eye.svg" class="img-fluid" alt="eye"></a>
                                          <a class="me-2"><img src="/images/icons/uploading/download.svg" class="img-fluid" alt="download"></a>
                                          <a><img src="/images/icons/uploading/delete.svg" class="img-fluid" alt="delete"></a>
                                       </div>
                                       <div class="created-date">Created Feb 29, 2022</div>
                                    </div>
                                    <!--  -->
                                 </div>
                                 <div class="col-lg-4 col-xxl-3 align-self-end ">
                                    <a class=" d-inline-flex delete-icon">
                                    <img src="/images/icons/delete-black.svg" class="img-fluid" alt="delete">
                                    </a>
                                    <br/>
                                    <a class="theme-btn  primary-btn plus-icon d-inline-flex"><img src="/images/icons/add.svg" class="img-fluid" alt="add"></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-6 mb-4">
                              <div class="row">
                                 <div class="col-lg-8 col-xxl-9 text-center position-relative">
                                    <div class="attach-document-box position-relative">
                                       <input id="fileupload" class="fileupload" type="file" name="files[]">
                                       <div class="inner-content">
                                          <p class="document-text mb-4">Attach document</p>
                                          <img src="/images/icons/uploading.svg" class="img-fluid mb-2">
                                          <p class="text">Compatible file .pdf .docx</p>
                                          <div class="d-flex justify-content-center">
                                             <div class="align-self-center">
                                                <p class="darg neutral-100 mb-0">Drag or</p>
                                             </div>
                                             <div class="align-self-center ms-1">
                                                <p class="darg turquoise-100 mb-0 text-decoration-underline">browse file</p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- progress-box -->
                                    <div class="attach-document-box progress-box text-center d-none">
                                       <div class="progress-content">
                                          <p class="h4 neutral-100">Uploading 0%</p>
                                          <div id="progress" class="progress">
                                             <div class="progress-bar bar"></div>
                                          </div>
                                       </div>
                                    </div>
                                    <!--  -->
                                    <!--uploaded-box  -->
                                    <div class="attach-document-box uploaded-box d-none">
                                       <div class="d-flex form-check justify-content-end">
                                          <input class="form-check-input" type="checkbox" name="remember" id="remember" autocomplete="off">
                                       </div>
                                       <div class="uploaded-content">
                                          <p id="filename" class="h4 neutral-100 mb-4"></p>
                                          <a class="me-2"><img src="/images/icons/uploading/eye.svg" class="img-fluid" alt="eye"></a>
                                          <a class="me-2"><img src="/images/icons/uploading/download.svg" class="img-fluid" alt="download"></a>
                                          <a><img src="/images/icons/uploading/delete.svg" class="img-fluid" alt="delete"></a>
                                       </div>
                                       <div class="created-date">Created Feb 29, 2022</div>
                                    </div>
                                    <!--  -->
                                 </div>
                                 <div class="col-lg-4 col-xxl-3 align-self-end ">
                                    <a class=" d-inline-flex delete-icon">
                                    <img src="/images/icons/delete-black.svg" class="img-fluid" alt="delete">
                                    </a>
                                    <br/>
                                    <a class="theme-btn  primary-btn plus-icon d-inline-flex"><img src="/images/icons/add.svg" class="img-fluid" alt="add"></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- row-->
                     </div>
                     <!-- card-body-->
                  </div>
                  <!-- simple-card-->
               </div>
               <div class="col-12 mb-4">
                  <a class="theme-btn primary-btn">Send</a>
               </div>
            </div>
         </div>
         <!-- force-overflow -->
      </form>
   </div>
   <!-- right -->
   <div class="col-xl-6  ">
      <div class="card activity-history-card py-31 primary-border-left">
         <div class="card-header">
            <h2 class="h3 neutral-100 ">Activity history</h2>
         </div>
         <div class="card-body">
            <form class="availablity-overview-scrollbar w-100 ps-05" method="POST" id="availablity-overview-style">
               <div  class="force-overflow  w-97">
                  <div  class="row">
                     <div class="col-12">
                        <ul class="events p-0 activity-history">
                           <li>
                              <span class="step-point"></span>
                              <div class="steps-information  ">
                                 <div class="steps-information-details custom-padding border-none">
                                    <p class="small-text2 neutral-70 mb-1">March, 03 2022 at 13.00</p>
                                    <p class="body-2 netural-100 mb-0 ">
                                       NOIM verified by Michael (Simpleceremonies admin)
                                    </p>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <span class="step-point"></span>
                              <div class="steps-information  ">
                                 <div class="steps-information-details custom-padding border-none">
                                    <p class="small-text2 neutral-70 mb-1">March, 15 2022 at 07.00</p>
                                    <p class="body-2 netural-100 mb-0 ">
                                       NOIM and instructions send and received
                                    </p>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <span class="step-point"></span>
                              <div class="steps-information  ">
                                 <div class="steps-information-details custom-padding border-none">
                                    <p class="small-text2 neutral-70 mb-1">March, 15 2022 at 06.00</p>
                                    <p class="body-2 netural-100 mb-0 ">
                                       Marriage celebrant sent feedback to the couple
                                    </p>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <!-- <span class="step-point"></span> -->
                              <div class="steps-information  ">
                                 <div class="steps-information-details custom-padding border-none">
                                    <div class="activity-answer">
                                       <div class="row">
                                          <div class="col-md-6 ">
                                             <div class="d-flex">
                                                <div class="align-self-center"><img src="/images/icons/header-logo.svg" class="rounded-circle theme-avtar" alt="Created"></div>
                                                <div class="align-self-center  ms-2">
                                                   <p class="body-3-medium  text-black mb-0">Dave</p>
                                                   <p class="small-text3 text-black mb-0">Admin Simple ceremonies</p>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6  neutral-75 small-text2 d-flex justify-content-end">March, 03 2022 at 13.00</div>
                                          <div class="col-12">
                                             <p class="body-3-regular neutral-100 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus arcu ac leo accumsan dignissim. Phasellus vulputate neque at urna interdum, sed dignissim est consectetur. Pellentesque consequat </p>
                                          </div>
                                       </div>
                                    </div>
                                    <ul>
                                      <li>1</li>
                                      <li>1</li>
                                    </ul>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <span class="step-point"></span>
                              <div class="steps-information  ">
                                 <div class="steps-information-details custom-padding border-none">
                                    <p class="small-text2 neutral-70 mb-1 ">March, 16 2022 at 13.00</p>
                                    <p class="body-2 netural-100 mb-0 ">
                                       Couple uploaded ID card
                                    </p>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <span class="step-point"></span>
                              <div class="steps-information  ">
                                 <div class="steps-information-details custom-padding border-none">
                                    <p class="small-text2 neutral-70 mb-1">March, 17 2022 at 13.00</p>
                                    <p class="body-2 netural-100 mb-0 ">
                                       Marriage Celebrant accepted the forms
                                    </p>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <span class="step-point"></span>
                              <div class="steps-information  ">
                                 <div class="steps-information-details custom-padding border-none">
                                    <p class="small-text2 neutral-70 mb-1">14-03-2022  12.00</p>
                                    <p class="body-2 netural-100 mb-0 ">
                                       Couple uploaded the signed forms
                                    </p>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <span class="step-point"></span>
                              <div class="steps-information  ">
                                 <div class="steps-information-details custom-padding border-none">
                                    <p class="small-text2 neutral-70 mb-1">13-03-2022  17.00</p>
                                    <p class="body-2 netural-100 mb-0 ">
                                       Email NOIM reminder sent
                                    </p>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <span class="step-point"></span>
                              <div class="steps-information  ">
                                 <div class="steps-information-details custom-padding border-none">
                                    <p class="small-text2 neutral-70 mb-1">13-03-2022  17.00</p>
                                    <p class="body-2 netural-100 mb-0 ">
                                       NOIM uploaded
                                    </p>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </form>
         </div>
         <div class="card-footer">1</div>
      </div>
   </div>
   <!-- comman row -->
</div>