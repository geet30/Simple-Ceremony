<div class="row">
   <div class="col-xl-6 pt-31">
         <form class="card card-transparent"  method="POST">
            <div class="card-body">
            <div  class="availablity-overview-scrollbar" id="availablity-overview-style">
            <div class=" row force-overflow  w-97">
               <div class="col-md-6 mb-4 ">
                  <label for="preferredname1" class="form-label small-text2 ps-2">Preferred name 1</label>
                 
                  <input type="text" value="{{ isset($data->first_couple_name) ? $data->first_couple_name : '' }}" class="form-control body-1 netural-100" name="name" id="preferredname1">
               </div>
               <div class="col-md-6  mb-4 ">
                  <label for="preferredname2" class="form-label small-text2 ps-2">Preferred name 2</label>
                  <input type="text" value="{{ isset($data->second_couple_name) ? $data->second_couple_name : '' }}" class="form-control body-1 netural-100" name="name" id="preferredname2">
               </div>
               <div class="col-md-6  mb-4 ">
               
                  <label for="phone" class="form-label small-text2 ps-2">Phone number</label>
                  <input type="text" value="+{{ $data->user->country_code }}{{ $data->user->phone }}" class="form-control body-1 netural-100" name="name" id="phone">
               </div>
               <div class="col-md-6  mb-4 ">
                  <label for="email" class="form-label small-text2 ps-2">Email</label>
                  <input type="email" value="{{ isset($data->user->email) ? $data->user->email : '' }}" class="form-control body-1 netural-100" name="name" id="email">
               </div>
               <div class="col-md-6  mb-4 ">
                  <label for="celebrant" class="form-label small-text2 ps-2">Name of marriage celebrant</label>
                  <input type="text" value="{{isset($data->celebrant->first_name) ? $data->celebrant->first_name : 'You have not chosen'}}" class="form-control body-1" name="name" id="celebrant">
               </div>
               <div class="col-md-6 mb-4 align-self-center"><label for="celebrant" class="form-label small-text2 ps-2 d-block ">&nbsp;</label><a href="" data-bs-toggle="offcanvas" data-id="{{$data->id}}" data-bs-target="#marriage-celebrant" class="add-link assign_celebrant">Choose marriage celebrant</a></div>
               <div class="col-md-6  mb-4 align-self-center">
                  <label for="location" class="form-label small-text2 ps-2">Location</label>
                  <input type="text" value="{{ isset($data->location->name) ? $data->location->name : '' }}" class="form-control body-1 netural-100" name="name" id="location">
               </div>
               <div class="col-md-6 mb-4 align-self-center">
                  <label for="celebrant" class="form-label small-text2 ps-2 d-block">&nbsp;</label>
                  <a href="/view" class="add-link">See Information about location</a>
               </div>
               <div class="col-md-6  mb-4 ">
                  <label for="date" class="form-label small-text2 ps-2">Date of marriage</label>
                  <input type="text" value="{{date('M d,Y',strtotime($data->booking_start_time))}}" class="form-control body-1 netural-100" name="name" id="date">
               </div>
               <div class="col-md-6  mb-4 ">
                  <label for="time" class="form-label small-text2 ps-2">Time</label>
                  <input type="text" value="{{$data->booking_start_time}} - {{$data->booking_end_time}}" class="form-control body-1 netural-100" name="name" id="time">
               </div>
               <div class="col-md-6  mb-4 ">
                  <label for="date" class="form-label small-text2 ps-2">Invoice number</label>
                  <input type="text" value="090909090909" class="form-control body-1 netural-100" name="name" id="date">
               </div>
               <div class="col-md-6  mb-4 ">
                  <label for="date" class="form-label small-text2 ps-2">Nominal</label>
                  <div class="theme-input-group left-input">
                     <input type="text" value="350" class="form-control body-1 netural-100" name="name" id="date">
                     <img src="/images/icons/dollor.svg" class="left-icon img-fluid">
                  </div>
               </div>
               <div class="col-md-12 mb-4">
                  <label for="ceremonyplace" class="form-label small-text2  ps-2">General notes about couples</label>
                  <textarea class="form-control body-1 netural-100" id="ceremonyplace" placeholder="Type here" rows="10"></textarea>
               </div>
             
            </div>
         </div>
            </div>
            <div class="card-footer">
            <div class="col-12 d-md-flex justify-content-center pt-3 bg-white">
                     <div class=" align-self-center me-3 text-align-self-center mb-3 mb-md-0"><a class="theme-btn primary-btn d-inline-flex">Confirm the data is complete</a></div>
                     <div class=" align-self-center  text-align-self-center" type="button">  <a  data-bs-toggle="offcanvas" data-bs-target="#reschedule" class="theme-btn primary-btn d-inline-flex">Reschedule</a></div>
                  </div>
            </div>
</form>
   </div>
   <!-- right -->
   <div class="col-xl-6  mt-4 mt-xl-0">
      <div class="card activity-history-card pt-31 primary-border-left">
         <div class="card-header">
            <h2 class="h3 neutral-100 ">Activity history</h2>
         </div>
         <div class="card-body">
            <form class="availablity-overview-scrollbar w-100 ps-05 h-36" method="POST" id="availablity-overview-style">
               <div  class="force-overflow  w-97 ">
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
                                                   <p class="body-3-medium  text-black mb-0">Dave1</p>
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
                                    <a id="reply-text" class="cursor-pointer button-1 turquoise-100 text-decoration-none d-flex justify-content-end my-2 reply-text">Reply <span class="reply-number ms-2">2</span></a>
                                  <div class="hidden-tree d-none">
                                    <ul class="tree position-relative mt-2" >
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
                                    <div class="d-flex justify-content-lg-end mt-4  justify-content-center mb-4">
                                    <a class="theme-btn primary-btn me-2  cursor-pointer">Send</a>
                                    <a class="theme-btn primary-btn-border  cursor-pointer">Cancel</a>
                                 </div>
</div>
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
         <div class="bg-turquoise-50 hidden-footer">
            <textarea class="form-control body-1 netural-100" autofocus id="ceremonyplace" placeholder="Type here" rows="5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus arcu ac leo accumsan dignissim. Phasellus vulputate neque at urna interdum, sed dignissim est consectetur. Pellentesque consequat velit a nisi iaculis facilisis in et tortor. Sed lobortis nisi sodales purus sollicitudin, nec finibus velit pellentesque. Integer at lacus vel nunc pulvinar mollis. Proin semper aliquam ultrices. Curabitur ut lorem eget tellus vehicula consequat vitae eget ante. Suspendisse egestas mauris augue, eu porttitor orci efficitur in. Nam erat orci, congue efficitur ex nec, fermentum vulputate nunc. Ut dignissim justo bibendum sagittis tincidunt. Curabitur efficitur porta tellus pulvinar venenatis.</textarea>
            <div class="d-flex justify-content-lg-end   justify-content-center mt-4 ">
               <a class="theme-btn primary-btn me-2 show-footer  cursor-pointer">Send</a>
               <a class="theme-btn primary-btn-border show-footer  cursor-pointer">Cancel</a>
            </div>
         </div>
         <div class="card-footer bg-turquoise-50 d-flex justify-content-center custom-footer">
            <a class="theme-btn black-btn show-footer cursor-pointer" >Create new thread <img class="ms-2" src="/images/icons/chat.svg" alt="Chat Icon"></a>
         </div>
      </div>
   </div>
   <!-- comman row -->
</div>