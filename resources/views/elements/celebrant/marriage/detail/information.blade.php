<div class="row">

   <div class="col-xl-6 py-31">

      <div class="force-overflow  w-97">
         <div class=" row">
            <div class="col-md-6 mb-4 ">
               <label for="preferredname1" class="form-label small-text2 ps-2">Preferred name 1</label>
               <input type="text" value="{{ isset($data->first_couple_name) ? $data->first_couple_name : '' }}" class="form-control body-1 netural-100" id="preferredname1" readonly>
            </div>
            <div class="col-md-6  mb-4 ">
               <label for="preferredname2" class="form-label small-text2 ps-2">Preferred name 2</label>
               <input type="text" value="{{ isset($data->second_couple_name) ? $data->second_couple_name : '' }}" class="form-control body-1 netural-100" id="preferredname2" readonly>
            </div>
            <div class="col-md-6  mb-4 ">
               <label for="phone" class="form-label small-text2 ps-2">Phone number</label>
               <input type="text" value="+{{ $data->user->country_code }}{{ $data->user->phone }}" class="form-control body-1 netural-100" id="phone" readonly>
            </div>
            <div class="col-md-6  mb-4 ">
               <label for="email" class="form-label small-text2 ps-2">Email</label>
               <input type="email" value="{{ isset($data->user->email) ? $data->user->email : '' }}" class="form-control body-1 netural-100" id="email" readonly>
            </div>
            <div class="col-md-6  mb-4 ">
               <label for="email" class="form-label small-text2 ps-2">Type of ceremony</label>
               <input type="email" value="{{ isset($data->cermony_type) ? $data->cermony_type : '' }}" class="form-control body-1 netural-100" id="email" readonly>
            </div>
            <div class="col-md-6 mb-4 d-md-block"></div>
            <div class="col-md-6  mb-4 ">
               <label for="celebrant" class="form-label small-text2 ps-2">Name of marriage celebrant</label>
               <input type="text" value="{{isset($data->celebrant->first_name) ? $data->celebrant->first_name : ''}}" class="form-control body-1" id="celebrant" readonly>
            </div>
            <div class="col-md-6  mb-4 ">
               <label for="celebrant" class="form-label small-text2 ps-2">Celebrant Fee</label>
               <input type="text" value="${{isset($celebrant_details->celebrant->standard_fee ) ? $celebrant_details->celebrant->standard_fee : ''}}" class="form-control body-1" id="celebrant" readonly>
            </div>

            <div class="col-md-6  mb-4 ">
               <label for="location" class="form-label small-text2 ps-2">Location</label>
               <input type="text" value="{{ isset($data->location->name) ? $data->location->name : '' }}" class="form-control body-1 netural-100" id="location" readonly>
            </div>
            <div class="col-md-6  mb-4 ">
               <label for="address" class="form-label small-text2 ps-2">Address</label>
               <input type="text" value="{{ isset($data->location->address) ? $data->location->address : '' }}" class="form-control body-1 netural-100" id="address" readonly>
            </div>
            <div class="col-md-6  mb-4 ">
               <label for="date" class="form-label small-text2 ps-2">Date of marriage</label>
               <input type="text" value="{{date('M d,Y',strtotime($data->booking_start_time))}}" class="form-control body-1 netural-100" id="date" readonly>
            </div>
            <div class="col-md-6  mb-4 ">
               <label for="time" class="form-label small-text2 ps-2">Time</label>
               <input type="text" value="{{$data->booking_start_time}} - {{$data->booking_end_time}}" class="form-control body-1 netural-100" id="time" readonly>
            </div>

            <div class="col-md-12 mb-4">
               <label for="ceremonyplace" class="form-label small-text2  ps-2">General notes about couples</label>

               <form method="POST" name="information" id="information" action="{{route('celebrant.saveRecord')}}">
                  @csrf
                  <input name="booking_id" type="hidden" value="{{ $id}}">
                  <textarea name="notes" class="form-control body-1 netural-100" id="ceremonyplace" placeholder="Type here" rows="10" onfocusout="submitAjaxWithoutReload(event, 'information', 'post', '/saveRecord')">{{ isset($data->booking_details->notes) ? $data->booking_details->notes : '' }}
                  </textarea>
               </form>
            </div>
            <div class="col-12 mb-4">
               <div class="card simple-card ">
                  <div class="card-body">
                     <form  method="POST" id="information" enctype="multipart/form-data" action="{{route('celebrant.marriage.saveDocs',$id)}}">
                        @csrf
                        <div class="row documentContainer">
                        @if(isset($data->booking_details_docs) & count($data->booking_details_docs) >0)
                           @foreach($data->booking_details_docs as $docs)
                           <div class="col-xxl-6 mb-4 documentDiv">
                              <div class="row">
                                
                                 <div class="col-lg-8 col-xxl-9 text-center position-relative">
                                    <div class="attach-document-box position-relative">


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

                                    <div class="attach-document-box uploaded-box d-block z-index-9">

                                       <div class="uploaded-content">
                                          <p id="filename" class="h4 neutral-100 mb-4 filename">{{$docs->document}}</p>
                                          <a class="me-2" href="{{route('viewDocument',$docs->document)}}" target="_blank"><img src="/images/icons/uploading/eye.svg" class="img-fluid" alt="eye"></a>
                                          <a class="me-2" href="{{route('downloadDocument',$docs->document)}}"><img src="/images/icons/uploading/download.svg" class="img-fluid" alt="download"></a>
                                          <a><img src="/images/icons/uploading/delete.svg" class="img-fluid removeClass" alt="delete" onclick="remove('documentDiv',this,'documentContainer','document')" id="{{$docs->id}}"></a>
                                       </div>

                                       <div class="created-date">Created {{date('M d, Y',strtotime($docs->created_at))}}</div>
                                    </div>
                                 </div>
                                 <div class="col-lg-4 col-xxl-3 align-self-end mt-3 mt-lg-0 next-div-to-file">
                                    <a class=" d-inline-flex delete-icon">
                                       <img src="/images/icons/delete-black.svg" class="img-fluid removeClass" alt="delete" id="{{$docs->id}}" onclick="remove('documentDiv',this,'documentContainer','document')">
                                    </a>
                                    <br />
                                    <a class="theme-btn  primary-btn plus-icon d-inline-flex" onclick="appendHtml('documentContainer', 'document',{{$id}},'documentDiv')"><img src="/images/icons/add.svg" class="img-fluid" alt="add"></a>
                                 </div>
                              </div>
                           </div>
                           @endforeach
                           @else
                           <div class="col-xxl-6 mb-4 documentDiv">
                              <div class="row">
                                 <div class="col-lg-8 col-xxl-9 text-center position-relative newdiv">
                                    <div class="attach-document-box position-relative">
                                       <input class="fileupload" type="file" name="document" onchange="uploadProgress(event,'{{$id}}','information','fileupload1')">

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
                                    <div class="attach-document-box progress-box text-center d-none">
                                       <div class="progress-content">
                                          <p class="h4 neutral-100">Uploading <span class="progress-percentage"></span></p>
                                          <div id="progress" class="progress">
                                             <div class="progress-bar bar"></div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="attach-document-box uploaded-box d-none" style="z-index: 999999;">

                                       <div class="uploaded-content">
                                          <p id="filename" class="h4 neutral-100 mb-4 filename"></p>
                                          <a class="me-2 viewDocument" href="" target="_blank"><img src="/images/icons/uploading/eye.svg" class="img-fluid" alt="eye"></a>
                                          <a class="me-2 downloadDocument" href=""><img src="/images/icons/uploading/download.svg" class="img-fluid" alt="download"></a>
                                          <a><img src="/images/icons/uploading/delete.svg" class="img-fluid removeClass" onclick="remove('documentDiv',this,'documentContainer','document')" alt="delete"></a>
                                       </div>
                                       <div class="created-date"></div>
                                    </div>
                                 </div>
                                 <div class="col-lg-4 col-xxl-3 align-self-end mt-3 mt-lg-0 next-div-to-file">
                                    <a class=" d-inline-flex delete-icon">
                                       <img src="/images/icons/delete-black.svg" class="img-fluid removeClass" alt="delete" onclick="remove('documentDiv',this,'documentContainer','document')">
                                    </a>
                                    <br />
                                    <a class="theme-btn  primary-btn plus-icon d-inline-flex" onclick="appendHtml('documentContainer', 'document',{{$id}},'documentDiv')"><img src="/images/icons/add.svg" class="img-fluid" alt="add"></a>
                                 </div>
                              </div>
                           </div>
                                 @endif
                              
                        </div>

                     </form>
                     <!-- row-->
                  </div>
                  <!-- card-body-->
               </div>
               <!-- simple-card-->
            </div>
            <div class="col-12 mb-4 d-flex justify-content-center justify-content-md-start">
               <!-- <button type="submit" class="theme-btn primary-btn">Save</button> -->
            </div>
         </div>
      </div>
      <!-- </form> -->
   </div>
   <!-- right -->
   <div class="col-xl-6  ">
      <div class="card activity-history-card pt-31 primary-border-left">
         <div class="card-header">
            <h2 class="h3 neutral-100 ">Activity history</h2>
         </div>
         <div class="card-body">
            <form class="availablity-overview-scrollbar w-100 ps-05 h-36" method="POST" id="availablity-overview-style">
               <div class="force-overflow  w-97 ">
                  <div class="row">
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
                                    <ul class="tree position-relative mt-2">
                                       <li>
                                          <span class="tree-label position-relative">
                                             <div class="activity-answer ms-3">
                                                <div class="row">
                                                   <div class="col-md-6 ">
                                                      <p class="body-3-medium  text-black mb-0">Johny</p>
                                                      <p class="small-text3 text-black mb-0">Couples</p>
                                                   </div>
                                                   <div class="col-md-6  neutral-75 small-text2 d-flex justify-content-end">March, 03 2022 at 13.00</div>
                                                   <div class="col-12">
                                                      <p class="body-3-regular neutral-100 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus arcu ac leo accumsan dignissim. Phasellus vulputate neque </p>
                                                      <div class="d-flex justify-content-end">
                                                         <a href="" class="me-2 d-flex"><img src="/images/icons/delete.svg" alt="Delete" class="img-fluid"></a>
                                                         <a href="" class="d-flex"><img src="/images/icons/edit-primary.svg" alt="Edit" class="img-fluid"></a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </span>
                                       </li>
                                       <li>
                                          <span class="tree-label position-relative">
                                             <div class="activity-answer ms-3">
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
                                          </span>
                                       </li>
                                       <li>
                                          <span class="tree-label position-relative w-100">
                                             <div class="ms-3 ">
                                                <input type="text" value="Add" class="form-control body-1 netural-100" name="name" id="preferredname2" autofocus>
                                             </div>
                                          </span>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="d-flex justify-content-lg-end   justify-content-center mb-4">
                                    <a class="theme-btn primary-btn me-2  cursor-pointer">Send</a>
                                    <a class="theme-btn primary-btn-border  cursor-pointer">Cancel</a>
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
                                    <p class="small-text2 neutral-70 mb-1">14-03-2022 12.00</p>
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
                                    <p class="small-text2 neutral-70 mb-1">13-03-2022 17.00</p>
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
                                    <p class="small-text2 neutral-70 mb-1">13-03-2022 17.00</p>
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
         <div class="bg-turquoise-50 hidden-footer">
            <textarea class="form-control body-1 netural-100" autofocus id="ceremonyplace" placeholder="Type here" rows="5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus arcu ac leo accumsan dignissim. Phasellus vulputate neque at urna interdum, sed dignissim est consectetur. Pellentesque consequat velit a nisi iaculis facilisis in et tortor. Sed lobortis nisi sodales purus sollicitudin, nec finibus velit pellentesque. Integer at lacus vel nunc pulvinar mollis. Proin semper aliquam ultrices. Curabitur ut lorem eget tellus vehicula consequat vitae eget ante. Suspendisse egestas mauris augue, eu porttitor orci efficitur in. Nam erat orci, congue efficitur ex nec, fermentum vulputate nunc. Ut dignissim justo bibendum sagittis tincidunt. Curabitur efficitur porta tellus pulvinar venenatis.</textarea>
            <div class="d-flex justify-content-lg-end   justify-content-center mt-4 ">
               <a class="theme-btn primary-btn me-2 show-footer  cursor-pointer">Send</a>
               <a class="theme-btn primary-btn-border show-footer  cursor-pointer">Cancel</a>
            </div>
         </div>
         <div class="card-footer bg-turquoise-50 d-flex justify-content-center custom-footer">
            <a class="theme-btn black-btn show-footer cursor-pointer">Create new thread <img class="ms-2" src="/images/icons/chat.svg" alt="Chat Icon"></a>
         </div>
      </div>
   </div>
   <!-- comman row -->
</div>