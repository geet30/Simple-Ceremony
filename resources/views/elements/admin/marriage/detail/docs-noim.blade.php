@php
$couple1 = isset($couple) && isset($couple[0]) ? $couple[0] : null;
$couple2 = isset($couple) && isset($couple[1]) ? $couple[1] : null;
@endphp
<div class="row pt-31">
   <div class="pe-xl-0  col-xl-2  mb-4 mb-xl-0">
      <div class="d-flex add-ons-detail">
         <div class="numberCircle align-self-center">1</div>
         <h4 class="h4 neutral-100 align-self-center mb-0 ms-2">Personal Data</h4>
      </div>
   </div>
   <div class=" col-xl-7 mb-3 mb-xl-0">
      <h4 class="h4  neutral-100 align-self-center mb-0 ms-2 mb-2">Person 1 details</h4>
      <form method="POST">
         <div class="row ">
            <div class="col-md-6 mb-4 ">

               <label for="preferredname1" class="form-label small-text2 ps-2 ">Preferred name Person 1</label>
               <input type="text" value="{{ isset($couple1->preferred_name) ? $couple1->preferred_name: '' }}" class="form-control body-1 netural-100" name="name" id="preferredname1" readonly>
            </div>
            <div class="col-md-6  mb-4 ">
               <label for="preferredname2" class="form-label small-text2 ps-2">Person 1 first name</label>
               <input type="text" value="{{ isset($couple1->person_first_name) ? $couple1->person_first_name: '' }}" class="form-control body-1 netural-100" name="name" id="preferredname2" readonly>
            </div>
         </div>
         <div class="row">

            <div class="col-md-6  mb-4 ">
               <label for="preferredname2" class="form-label small-text2 ps-2">Person 1 other given names(s)</label>
               <input type="text" value="{{ isset($couple1->person_other_name) ? $couple1->person_other_name: '' }}" class="form-control body-1 netural-100" name="name" id="preferredname2" readonly>
            </div>
            <div class="col-md-6   mb-4">
               <label for="preferredname2" class="form-label small-text2 ps-2">Person 1 Family Name</label>
               <input type="text" value="{{ isset($couple1->family_name) ? $couple1->family_name: '' }}" class="form-control body-1 netural-100" name="name" id="preferredname2" readonly>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12   mb-4">
               <label for="preferredname2" class="form-label small-text2 ps-2">Person 1 Full Name</label>
               <input type="text" value="{{ isset($couple1->person_name_combination) ? $couple1->person_name_combination: '' }}" class="form-control body-1 netural-100" name="name" id="preferredname2" readonly>
            </div>
         </div>
         <h4 class="h4  neutral-100 align-self-center mb-0 ms-2 mb-3">Person 1 Birth details</h4>
         <div class="row">
            <div class="col-md-6  mb-4 ">
               <label for="preferredname2" class="form-label small-text2 ps-2">Date of Birth</label>
               <input type="text" value="{{ isset($couple1->date_of_birth) ? $couple1->date_of_birth: '' }}" class="form-control body-1 netural-100" name="name" id="preferredname2" readonly>
            </div>

         </div>
         <div class="row">
            <div class="col-md-4  mb-4 ">
               <label for="preferredname2" class="form-label small-text2 ps-2">Birth place</label>

               <input type="text" value="{{ isset($couple1->birth_place) ? $couple1->birth_place: '' }}" class="form-control body-1 netural-100" name="name" id="preferredname2" readonly>
            </div>
            <div class="col-md-4  mb-4 ">
               <label for="preferredname2" class="form-label small-text2 ps-2">Suburb/town/city</label>
               <input type="text" value="{{ isset($couple1->residence_town_or_city_or_suburb) ? $couple1->residence_town_or_city_or_suburb: '' }}" class="form-control body-1 netural-100" name="name" id="preferredname2" readonly>
            </div>
            <div class="col-md-4  mb-4 ">
               <label for="preferredname2" class="form-label small-text2 ps-2">State/territory</label>
               <input type="text" value="{{ isset($couple1->residence_state_or_province_or_territory) ? $couple1->residence_state_or_province_or_territory: '' }}" class="form-control body-1 netural-100" name="name" id="preferredname2" readonly>
            </div>
         </div>
         <h4 class="h4  neutral-100 align-self-center mb-0 ms-2 mb-3">Person 1 Conjugal Status</h4>
         <div class="row">
            <div class="col-md-12   mb-4">
               <label for="preferredname2" class="form-label small-text2 ps-2">Conjugal Status</label>
               <?php
               $conjugal_status = '';
               if (isset($couple1->conjugal_status) && !empty($couple1->conjugal_status)) {
                  $conjugal_status = config('userConstants.conjugal_status.' . $couple1->conjugal_status);
               }
               ?>
               <input type="text" value="{{$conjugal_status}}" class="form-control body-1 netural-100" name="name" id="preferredname2" readonly>
            </div>
         </div>
         <h4 class="h4  neutral-100 align-self-center mb-0 ms-2 mb-3">Person 1 ID</h4>
         <div class="row mb-4">
            <div class="col-12">
               <div class="border-turquoise-50 bg-turquoise-20 p-3 br-10">
                  <div class="id-card border-turquoise-50 br-10">
                     <div class="row">
                        <div class="col-md-7 col-xl-8 align-self-center">
                           @if(isset($couple1->document) && !empty($couple1->document))
                           @foreach($couple1->document as $couple_documents)
                           <embed src="{{ asset($couple_documents['document_path']) }}" class="img-fluid" alt="id-1">
                           @endforeach
                           @endif
                        </div>
                        <div class="col-md-5 col-xl-4 align-self-center">
                           <p class="h4 neutral-100">ID Person 1</p>
                           <p class="h3 neutral-100">{{ isset($couple1->preferred_name) ? $couple1->preferred_name: '' }}</p>
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
               <input type="text" value="{{ isset($couple2->preferred_name) ? $couple2->preferred_name: '' }}" class="form-control body-1 netural-100" name="name" id="preferredname2" readonly>
            </div>
            <div class="col-md-6  mb-4 ">
               <label for="preferredname2" class="form-label small-text2 ps-2">Person 2 first name</label>
               <input type="text" value="{{ isset($couple2->person_first_name) ? $couple2->person_first_name: '' }}" class="form-control body-1 netural-100" name="name" id="preferredname2" readonly>
            </div>
         </div>
         <div class="row">

            <div class="col-md-6  mb-4 ">
               <label for="preferredname2" class="form-label small-text2 ps-2">Person 2 other given names(s)</label>
               <input type="text" value="{{ isset($couple2->person_other_name) ? $couple2->person_other_name: '' }}" class="form-control body-1 netural-100" name="name" id="preferredname2" readonly>
            </div>
            <div class="col-md-6  mb-4 ">
               <label for="preferredname2" class="form-label small-text2 ps-2">Person 2 Family name</label>
               <input type="text" value="{{ isset($couple2->family_name) ? $couple2->family_name: '' }}" class="form-control body-1 netural-100" name="name" id="preferredname2" readonly>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12   mb-4">
               <label for="preferredname2" class="form-label small-text2 ps-2">Person 2 full name</label>

               <input type="text" value="{{ isset($couple2->person_name_combination) ? $couple2->person_name_combination: '' }}" class="form-control body-1 netural-100" name="name" id="preferredname2" readonly>
            </div>
         </div>

         <h4 class="h4  neutral-100 align-self-center mb-0 ms-2 mb-3">Person 2 Birth details</h4>
         <div class="row">
            <div class="col-md-6  mb-4 ">
               <label for="preferredname2" class="form-label small-text2 ps-2">Date of Birth</label>
               <input type="text" value="{{ isset($couple2->date_of_birth) ? $couple2->date_of_birth: '' }}" class="form-control body-1 netural-100" name="name" id="preferredname2" readonly>
            </div>

         </div>
         <div class="row">
            <div class="col-md-4  mb-4 ">
               <label for="preferredname2" class="form-label small-text2 ps-2">Birth place</label>
               <input type="text" value="{{ isset($couple2->date_of_birth) ? $couple2->date_of_birth: '' }}" class="form-control body-1 netural-100" name="name" id="preferredname2" readonly>
            </div>
            <div class="col-md-4  mb-4 ">
               <label for="preferredname2" class="form-label small-text2 ps-2">Suburb/town/city</label>
               <input type="text" value="{{ isset($couple2->residence_town_or_city_or_suburb) ? $couple2->residence_town_or_city_or_suburb: '' }}" class="form-control body-1 netural-100" name="name" id="preferredname2" readonly>
            </div>
            <div class="col-md-4  mb-4 ">
               <label for="preferredname2" class="form-label small-text2 ps-2">State/territory</label>
               <input type="text" value="{{ isset($couple2->residence_state_or_province_or_territory) ? $couple2->residence_state_or_province_or_territory: '' }}" class="form-control body-1 netural-100" name="name" id="preferredname2" readonly>
            </div>
         </div>

         <h4 class="h4  neutral-100 align-self-center mb-0 ms-2 mb-3">Person 2 Conjugal Status</h4>
         <div class="row">
            <div class="col-md-12   mb-4">
               <label for="preferredname2" class="form-label small-text2 ps-2">Conjugal Status</label>
               <?php
               $conjugal_status2 = '';
               if (isset($couple2->conjugal_status) && !empty($couple2->conjugal_status)) {
                  $conjugal_status2 = config('userConstants.conjugal_status.' . $couple2->conjugal_status);
               }
               ?>
               <input type="text" value="{{$conjugal_status2}}" class="form-control body-1 netural-100" name="name" id="preferredname2" readonly>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6 mb-4">
               <label for="preferredname2" class="form-label small-text2 ps-2">Date last marriage ended</label>
               <input type="text" value="Say" class="form-control body-1 netural-100" name="name" id="preferredname2" readonly>
            </div>
            <div class="col-md-6 mb-4">
               <label for="preferredname2" class="form-label small-text2 ps-2">Court Location</label>
               <input type="text" value="Say" class="form-control body-1 netural-100" name="name" id="preferredname2" readonly>
            </div>
         </div>

         <div class="row  mb-4">
            <div class="col-12">
               <div class="border-turquoise-50 bg-turquoise-20 p-3 br-10">
                  <div class="id-card border-turquoise-50 br-10">
                     <div class="row">
                        <div class="col-md-7 col-xl-8 align-self-center">
                           @if(isset($couple2->document) && !empty($couple2->document))
                           @foreach($couple2->document as $couple_documents)
                           <embed src="{{ asset($couple_documents['document_path']) }}" class="img-fluid" alt="id-1">
                           @endforeach
                           @endif
                        </div>
                        <div class="col-md-5 col-xl-4 align-self-center">
                           <p class="h4 neutral-100">Person 2 ID</p>
                           <p class="h3 neutral-100">{{ isset($couple2->preferred_name) ? $couple2->preferred_name: '' }}</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </form>
   </div>
   <div class=" ps-xl-0 col-xl-3 ">
      <a class="theme-btn primary-btn" href="">Access Couples NoIM</a>
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
      <div class="row align-items-baseline">
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
      <div class="row align-items-baseline">
         <div class="col-md-6 mb-4">
            <label for="preferredname2" class="form-label small-text2 ps-2">Occupation name</label>
            <input type="text" value="Say" class="form-control body-1 netural-100" name="name" id="preferredname2">
         </div>
         <div class="col-md-6 mb-4">
            <label for="preferredname2" class="form-label small-text2 ps-2 ">Authorization Person's Name who witnessed Person 2 on the NOIM</label>
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
   <div class=" col-xl-8 offset-xl-2 mt-3 mt-md-0">
      <div class="row mb-2">
         <div class=" col-lg-12 mt-3 mt-md-0">
            <div class="align-self-center me-2 mb-4 body-2-semi-bold"><span class="text-nowrap status {{strtolower(config('ceremonyStatus.booking_status.'.$data->status) )}}">{{config('ceremonyStatus.booking_status.'.$data->status) }} </span></div>



            <div class="d-lg-flex">
               <form method="POST" name="booking_details" id="booking_details" action="{{route('celebrant.saveRecord')}}">
                  <?php 
                  
                   if(isset($data->booking_details->checked) && $data->booking_details->checked ==1){
                     $buttonClass = '';
                     $checked ='checked';
                  }else{
                     $buttonClass = 'bg-danger';
                     $checked ='';
                  }
                     ?>
                  @csrf
                  <input name="booking_id" type="hidden" value="{{ $id}}">
                  <input type='hidden' value='0' name='checked'>
                  
                  <input class="form-check-input me-2" type="checkbox" name="checked" value="1" {{ $checked }} onchange="submitAjaxWithoutReload(event, 'booking_details', 'post', '/saveRecord')">
                  <a class="theme-btn primary-btn {{ $buttonClass}} cursor-pointer d-inline-flex me-lg-3 mb-4 mb-lg-0">have you confirm all details are correct ?</a>
               </form>
               <a class="theme-btn primary-btn-border  cursor-pointer d-inline-flex" data-bs-toggle="offcanvas" data-bs-target="#feedback" aria-controls="feedback">Give feedback</a>
            </div>
         </div>

      </div>
      <div class="row">
         <div class="col-md-12 col-lg-12 mb-4">
            <div class="card doument-box">
               <div class="card-body text-center d-flex align-items-center">
                  <h3 class="button-1 neutral-100 title mb-0">Change Ceremony Status</h3>

                  <div class="dropdown table-dropdown ms-5">
                     <button class="theme-btn white-btn-border dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Ceremony status
                     </button>
                     <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        @foreach(config('ceremonyStatus.celebrant_booking_status') as $key=>$status)

                        <li>
                           <a role="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#change_marriage_status_modal" onclick="appendId('{{$key}}','status')" class="theme-btn primary-btn-border d-flex justify-content-center"><span class="status text-nowrap {{strtolower($status)}}">{{$status}}</span></a>
                        </li>
                        @endforeach
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
   <div class="col-xl-10 feedback">
      @if(isset($data->booking_feedback) && !empty($data->booking_feedback))
      @foreach($data->booking_feedback as $feedback)
      <div class="alert alert-primary alert-dismissible" role="alert">
         <div class="d-flex">
            <div class="me-3"><img src="/images/info.svg" class="img-fluid" alt="info-icon"></div>

            <div class="feedbackDiv">
               <p class="body-1 mb-0">{{$feedback['feedback']}}</p>
            </div>
         </div>
      </div>
      @endforeach
      @else
      <div class="alert alert-primary alert-dismissible" role="alert">
         <div class="d-flex">
            <div class="me-3"><img src="/images/info.svg" class="img-fluid" alt="info-icon"></div>

            <div class="feedbackDiv">
               <p class="body-1 mb-0">No feedback yet</p>
            </div>


         </div>
      </div>
      @endif
   </div>

</div>
@include('celebrant.js')