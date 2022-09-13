<div class="row pt-31">
   <div class="pe-xl-0  col-xl-2  mb-4 mb-xl-0">
      <div class="d-flex add-ons-detail">
         <div class="numberCircle align-self-center">1</div>
         <h4 class="h4 neutral-100 align-self-center mb-0 ms-2">Personal Data</h4>
      </div>
   </div>
   <div class=" col-xl-7 mb-3 mb-xl-0">
      <h4 class="h4  neutral-100 align-self-center mb-0 ms-2 mb-2">Person 1 details</h4>
      <form  method="POST" >
         <div class="row ">
            <div class="col-md-6 mb-4 ">
               <label for="preferredname1" class="form-label small-text2 ps-2 ">Preferred name Person 1</label>
               <input type="text" value="{{ isset($data->user_noim->first_couple_name) ? $data->user_noim->first_couple_name : '' }}" class="form-control body-1 netural-100" name="name" id="preferredname1">
            </div>
               <div class="col-md-6  mb-4 ">
                  <label for="preferredname2" class="form-label small-text2 ps-2">Person 1 first name</label>
                  <input type="text" value="John" class="form-control body-1 netural-100" name="name" id="preferredname2">
               </div>
         </div>
         <div class="row">
            
            <div class="col-md-6  mb-4 ">
               <label for="preferredname2" class="form-label small-text2 ps-2">Person 1 other given names(s)</label>
               <input type="text" value="Citizen" class="form-control body-1 netural-100" name="name" id="preferredname2">
            </div>
            <div class="col-md-6   mb-4">
               <label for="preferredname2" class="form-label small-text2 ps-2">Person 1 Family Name</label>
               <input type="text" value="John Citizen GEOFF" class="form-control body-1 netural-100" name="name" id="preferredname2">
            </div>
         </div>
         <div class="row">
            <div class="col-md-12   mb-4">
               <label for="preferredname2" class="form-label small-text2 ps-2">Person 1 Full Name</label>
               <input type="text" value="John Citizen GEOFF" class="form-control body-1 netural-100" name="name" id="preferredname2">
            </div>
         </div>
         <h4 class="h4  neutral-100 align-self-center mb-0 ms-2 mb-3">Person 1 Birth details</h4>
         <div class="row">
            <div class="col-md-6  mb-4 ">
               <label for="preferredname2" class="form-label small-text2 ps-2">Date of Birth</label>
               <input type="text" value="09/03/1995" class="form-control body-1 netural-100" name="name" id="preferredname2">
            </div>
           
         </div>
         <div class="row">
            <div class="col-md-4  mb-4 ">
               <label for="preferredname2" class="form-label small-text2 ps-2">Birth place</label>
               <input type="text" value="Australia" class="form-control body-1 netural-100" name="name" id="preferredname2">
            </div>
            <div class="col-md-4  mb-4 ">
               <label for="preferredname2" class="form-label small-text2 ps-2">Suburb/town/city</label>
               <input type="text" value="PIMPAMA QLD" class="form-control body-1 netural-100" name="name" id="preferredname2">
            </div>
            <div class="col-md-4  mb-4 ">
               <label for="preferredname2" class="form-label small-text2 ps-2">State/territory</label>
               <input type="text" value="TAS" class="form-control body-1 netural-100" name="name" id="preferredname2">
            </div>
         </div>
         <h4 class="h4  neutral-100 align-self-center mb-0 ms-2 mb-3">Person 1 Conjugal Status</h4>
         <div class="row">
            <div class="col-md-12   mb-4">
               <label for="preferredname2" class="form-label small-text2 ps-2">Conjugal Status</label>
               <input type="text" value="Say" class="form-control body-1 netural-100" name="name" id="preferredname2">
            </div>
         </div>
         <h4 class="h4  neutral-100 align-self-center mb-0 ms-2 mb-3">Person 1 ID</h4>
         <div class="row mb-4" >
            <div class="col-12">
               <div class="border-turquoise-50 bg-turquoise-20 p-3 br-10">
                  <div class="id-card border-turquoise-50 br-10">
                     <div class="row">
                        <div class="col-md-7 col-xl-8 align-self-center"><img src="/images/id-1.jpg" class="img-fluid" alt="id-1"></div>
                        <div class="col-md-5 col-xl-4 align-self-center">
                           <p class="h4 neutral-100">ID Person 1</p>
                           <p class="h3 neutral-100">Johny</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <h4 class="h4  neutral-100 align-self-center mb-0 ms-2 mb-3">Person 2 details</h4>
         <div class="row">
            <div class="col-md-6   mb-4">
               <label for="preferredname2" class="form-label small-text2 ps-2">Preferred name Person 2</label>
               <input type="text" value="Say" class="form-control body-1 netural-100" name="name" id="preferredname2">
            </div>
            <div class="col-md-6  mb-4 ">
               <label for="preferredname2" class="form-label small-text2 ps-2">Person 2 first name</label>
               <input type="text" value="Sarah" class="form-control body-1 netural-100" name="name" id="preferredname2">
            </div>
         </div>
         <div class="row">
           
            <div class="col-md-6  mb-4 ">
               <label for="preferredname2" class="form-label small-text2 ps-2">Person 2 other given names(s)</label>
               <input type="text" value="Jade" class="form-control body-1 netural-100" name="name" id="preferredname2">
            </div>
            <div class="col-md-6  mb-4 ">
               <label for="preferredname2" class="form-label small-text2 ps-2">Person 2 Family name</label>
               <input type="text" value="Jade" class="form-control body-1 netural-100" name="name" id="preferredname2">
            </div>
         </div>
         <div class="row">
            <div class="col-md-12   mb-4">
               <label for="preferredname2" class="form-label small-text2 ps-2">Person 2 full name</label>
               <input type="text" value="Sarah Jade HAMMOND" class="form-control body-1 netural-100" name="name" id="preferredname2">
            </div>
         </div>
         
         <h4 class="h4  neutral-100 align-self-center mb-0 ms-2 mb-3">Person 2 Birth details</h4>
         <div class="row">
            <div class="col-md-6  mb-4 ">
               <label for="preferredname2" class="form-label small-text2 ps-2">Date of Birth</label>
               <input type="text" value="09/03/1995" class="form-control body-1 netural-100" name="name" id="preferredname2">
            </div>
           
         </div>
         <div class="row">
            <div class="col-md-4  mb-4 ">
               <label for="preferredname2" class="form-label small-text2 ps-2">Birth place</label>
               <input type="text" value="Australia" class="form-control body-1 netural-100" name="name" id="preferredname2">
            </div>
            <div class="col-md-4  mb-4 ">
               <label for="preferredname2" class="form-label small-text2 ps-2">Suburb/town/city</label>
               <input type="text" value="PIMPAMA QLD" class="form-control body-1 netural-100" name="name" id="preferredname2">
            </div>
            <div class="col-md-4  mb-4 ">
               <label for="preferredname2" class="form-label small-text2 ps-2">State/territory</label>
               <input type="text" value="TAS" class="form-control body-1 netural-100" name="name" id="preferredname2">
            </div>
         </div>

         <h4 class="h4  neutral-100 align-self-center mb-0 ms-2 mb-3">Person 2 Conjugal Status</h4>
         <div class="row">
            <div class="col-md-12   mb-4">
               <label for="preferredname2" class="form-label small-text2 ps-2">Conjugal Status</label>
               <input type="text" value="Say" class="form-control body-1 netural-100" name="name" id="preferredname2">
            </div>
         </div>
         <div class="row">
            <div class="col-md-6 mb-4">
               <label for="preferredname2" class="form-label small-text2 ps-2">Date last marriage ended</label>
               <input type="text" value="Say" class="form-control body-1 netural-100" name="name" id="preferredname2">
            </div>
            <div class="col-md-6 mb-4">
               <label for="preferredname2" class="form-label small-text2 ps-2">Court Location</label>
               <input type="text" value="Say" class="form-control body-1 netural-100" name="name" id="preferredname2">
            </div>
         </div>

         <div class="row  mb-4">
            <div class="col-12">
               <div class="border-turquoise-50 bg-turquoise-20 p-3 br-10">
                  <div class="id-card border-turquoise-50 br-10">
                     <div class="row">
                        <div class="col-md-7 col-xl-8 align-self-center"><img src="/images/id-2.jpg" class="img-fluid" alt="id-2"></div>
                        <div class="col-md-5 col-xl-4 align-self-center">
                           <p class="h4 neutral-100">Person 2 ID</p>
                           <p class="h3 neutral-100">Say</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </form>
   </div>
   <div class=" ps-xl-0 col-xl-3 ">
      <a class="theme-btn primary-btn">Access Couples NoIM</a>
   </div>
</div>
<div class="row pt-52 ">
   <div class="pe-xl-0 col-xl-12 mb-4 mb-xl-0">
      <div class="d-flex add-ons-detail">
         <div class="numberCircle align-self-center">2</div>
         <h2 class="h4 neutral-100 align-self-center mb-2 ms-2">Who witnessed the signed Notice of Intended Marriage form</h2>
      </div>
   </div>
   <div class=" col-xl-10 offset-xl-2 mt-3 mt-md-0">
      <div class="row">
            <div class="col-md-6 mb-4">
               <label for="preferredname2" class="form-label small-text2 ps-2">How do you have the NOIM witness</label>
               <input type="text" value="Say" class="form-control body-1 netural-100" name="name" id="preferredname2">
            </div>
            <div class="col-md-6 mb-4">
               <label for="preferredname2" class="form-label small-text2 ps-2">Insert Authorization Code</label>
               <input type="text" value="Say" class="form-control body-1 netural-100" name="name" id="preferredname2">
            </div>
      </div>
      <div class="row">
            <div class="col-md-6 mb-4">
               <label for="preferredname2" class="form-label small-text2 ps-2">Who has witnessed Person 1 sign the NOIM</label>
               <input type="text" value="Say" class="form-control body-1 netural-100" name="name" id="preferredname2">
            </div>
            <div class="col-md-6 mb-4">
               <label for="preferredname2" class="form-label small-text2 ps-2">Authorization Person's Name who witnessed Person 1 on the NOIM</label>
               <input type="text" value="Say" class="form-control body-1 netural-100" name="name" id="preferredname2">
            </div>
      </div>
      <div class="row">
            <div class="col-md-6 mb-4">
               <label for="preferredname2" class="form-label small-text2 ps-2">Who has witnessed Person 2 sign the NOIM</label>
               <input type="text" value="Say" class="form-control body-1 netural-100" name="name" id="preferredname2">
            </div>
            
      </div>
      <div class="row">
            <div class="col-md-6 mb-4">
               <label for="preferredname2" class="form-label small-text2 ps-2">Occupation name</label>
               <input type="text" value="Say" class="form-control body-1 netural-100" name="name" id="preferredname2">
            </div>
            <div class="col-md-6 mb-4">
               <label for="preferredname2" class="form-label small-text2 ps-2">Authorization Person's Name who witnessed Person 2 on the NOIM</label>
               <input type="text" value="Say" class="form-control body-1 netural-100" name="name" id="preferredname2">
            </div>
      </div>
   </div>
</div>
<div class="row pt-52 ">
   <div class="pe-xl-0 col-xl-2 mb-4 mb-xl-0">
      <div class="d-flex add-ons-detail">
         <div class="numberCircle align-self-center">3</div>
         <h2 class="subheader-3 neutral-100 align-self-center mb-0 ms-2">Documents</h2>
      </div>
   </div>
   <div class=" col-xl-10 mt-3 mt-md-0">
      <div class="row">
         <div class="col-md-6 col-lg-4 mb-4">
            <div class="card doument-box">
               <div class="card-body text-center">
                  <h3 class="button-1 neutral-100 title ">Notice of Intended Marriage form</h3>
                  <p class="mb-10"> <a href="availablity-upcoming-docs" class="theme-btn primary-btn-border  cursor-pointer d-inline-flex">View</a></p>
                  <p class="mb-0"> <a class="theme-btn primary-btn   cursor-pointer d-inline-flex">Download</a></p>
               </div>
               <div class="card-footer  text-center">
                  <p class="small-text-3 gray-500 mb-0">Created Feb 29, 2022</p>
                  
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-4 mb-4">
            <div class="card doument-box">
               <div class="card-body text-center">
                  <h3 class="button-1 neutral-100 title ">Official Certificate of Marriage</h3>
                  <p class="mb-10"> <a href="availablity-upcoming-docs" class="theme-btn primary-btn-border  cursor-pointer d-inline-flex">View</a></p>
                  <p class="mb-0"> <a class="theme-btn primary-btn   cursor-pointer d-inline-flex">Download</a></p>
               </div>
               <div class="card-footer  text-center">
                  <p class="small-text-3 gray-500 mb-0">Created Feb 29, 2022</p>
                  
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-4 mb-4">
            <div class="card doument-box">
               <div class="card-body text-center">
                  <h3 class="button-1 neutral-100 title ">Declaration of No legal Impediment</h3>
                  <p class="mb-10"> <a href="availablity-upcoming-docs" class="theme-btn primary-btn-border  cursor-pointer d-inline-flex">View</a></p>
                  <p class="mb-0"> <a class="theme-btn primary-btn   cursor-pointer d-inline-flex">Download</a></p>
               </div>
               <div class="card-footer  text-center">
                  <p class="small-text-3 gray-500 mb-0">Created Feb 29, 2022</p>
                 
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-4 mb-4">
            <div class="card doument-box">
               <div class="card-body text-center">
                  <h3 class="button-1 neutral-100 title ">Certificate of Marriage -Form 15</h3>
                  <p class="mb-10"> <a href="availablity-upcoming-docs" class="theme-btn primary-btn-border  cursor-pointer d-inline-flex">View</a></p>
                  <p class="mb-0"> <a class="theme-btn primary-btn   cursor-pointer d-inline-flex">Download</a></p>
               </div>
               <div class="card-footer  text-center">
                  <p class="small-text-3 gray-500 mb-0">Created Feb 29, 2022</p>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-4 mb-4">
            <div class="card doument-box">
               <div class="card-body text-center">
                  <h3 class="button-1 neutral-100 title ">Certificate of Faithful performance of Interpreter</h3>
                  <p class="mb-10"> <a href="availablity-upcoming-docs" class="theme-btn primary-btn-border  cursor-pointer d-inline-flex">View</a></p>
                  <p class="mb-0"> <a class="theme-btn primary-btn   cursor-pointer d-inline-flex">Download</a></p>
               </div>
               <div class="card-footer  text-center">
                  <p class="small-text-3 gray-500 mb-0">Created Feb 29, 2022</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="row pt-52 ">
   <div class="pe-xl-0 col-xl-12 mb-4 mb-xl-0">
      <div class="d-flex add-ons-detail">
         <div class="numberCircle align-self-center">4</div>
         <h2 class="h4 neutral-100 align-self-center mb-2 ms-2">Update Ceremony Status</h2>
      </div>
   </div>
   <div class=" col-xl-10 offset-xl-2 mt-3 mt-md-0">
     
      
   
      <div class="row mb-2">
         <div class=" col-lg-10 mt-3 mt-md-0">
            <p class="neutral-70 subheader-2">Only one party has signed</p>
         
         </div>
         <div class="d-lg-flex">

            <a class="theme-btn primary-btn  cursor-pointer d-inline-flex me-lg-3 mb-4 mb-lg-0">have you confirm all details are correct ?</a>
            <a class="theme-btn primary-btn-border  cursor-pointer d-inline-flex" data-bs-toggle="offcanvas" data-bs-target="#feedback" aria-controls="feedback">Give feedback</a>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12 col-lg-4 mb-4">
            <div class="card doument-box">
               <div class="card-body text-center">
                  <h3 class="button-1 neutral-100 title ">Change Ceremony Status</h3>
                  <div class="dropdown table-dropdown mt-3">
                     <button class="btn dropdown-toggle approved" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                     Booked/Pending
                     </button>
                     <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item waiting-approval" href="#">Pending</a></li>
                        <li><a class="dropdown-item status-turquoise-100" href="#">Lodged</a></li>
                        <li><a class="dropdown-item status-blueturquoise-100" href="#">Lodged (Pending)</a></li>
                        <li><a class="dropdown-item status-funblue" href="#">Lodged (Voucher only - Booking to be made)</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
            
      </div>
   </div>
</div>
<div class="row pt-52 pb-31">
<div class="pe-xl-0 col-xl-2 mb-4 mb-xl-0">
      <div class="d-flex add-ons-detail">
         <div class="numberCircle align-self-center">5</div>
         <h2 class="subheader-3 neutral-100 align-self-center mb-0 ms-2">History feedback</h2>
      </div>
   </div>
   <div class=" col-lg-10 mt-3 mt-md-0">
      <p class="neutral-70 subheader-2">No feedback yet</p>
     
   </div>
</div>
