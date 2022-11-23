<form class="row">
   <div class="col-lg-4">
      <div class="card  panel-card h-100">
         <div class="card-body">
            <h2 class="h4 neutral-100 mb-4">Step 1 - Choose time(s) range</h2>
            <div class="col-md-12 mb-4">
               <label for="choose-date" class="form-label small-text2">Start date</label>
               <select name="choose_date" id="choose-date" class="js-placeholder-single-input form-control">
                  <option value="" disabled="" selected="" hidden="">Choose date</option>
                  <option value="30">1 month from today</option>
                  <option value="60">60 days from today</option>
               </select>
            </div>
            <h3 class="h4 neutral-100 mb-4">Until</h3>
            <div class="col-md-12 mb-4">
               <label for="end-date" class="form-label small-text2">End date</label>
               <select name="end_date" id="end-date" class="js-placeholder-single-input form-control">
                  <option value="" disabled="" selected="" hidden="">Choose date</option>
                  <option value="180">180 days</option>
                  <option value="360">360 days</option>
               </select>
            </div>
            <div class="col-12 d-md-flex">
               <button type="button" class="theme-btn primary-btn d-flex justify-content-center me-md-2 mb-3 mb-md-0" id="submit-first-rolling-form">Apply</button>
               <button type="button" class="theme-btn primary-btn-border d-flex justify-content-center">Cancel</button>
            </div>
         </div>
      </div>
   </div>
   <div class="col-lg-5 mt-3 mt-lg-0">
      <div class="card  panel-card ">
         <div class="card-body">
            <div class="calendar-wrappers date-picker-js-ns no-border-calander" ></div>
         </div>
      </div>
   </div>
   <div class="col-lg-3 mt-3 mt-lg-0">
      <h3 class="body-3-medium text-black">Informations</h3>
      <div class="d-flex mb-3">
         <div class="dot-status bg-turquoise-100 me-3"></div>
         <div  class="body-3-regular neutral-100">Today</div>
      </div>
      <div class="d-flex mb-3">
         <div class="dot-status bg-turquoise-50 me-3"></div>
         <div  class="body-3-regular neutral-100">Today</div>
      </div>
      <div class="d-flex mb-3">
         <div class="dot-status bg-neutral-100 me-3"></div>
         <div  class="body-3-regular neutral-100">Available</div>
      </div>
      <div class="d-flex mb-3">
         <div class="dot-status bg-neutral-50 me-3"></div>
         <div  class="body-3-regular neutral-100">Not available</div>
      </div>
      <h3 class="body-3-medium text-black">Events</h3>
      <div class="d-flex add-ons-detail">
         <div class="numberCircle align-self-center">25</div>
         <h4 class="body-2 neutral-100 align-self-center mb-0 ms-2">Name holiday in Australia</h4>
      </div>
   </div>
   <div class="col-12 pt-31">
      <div class="col-12">
         <div class="card  panel-card d-none" id="form-2-after-1st">
            <div class="card-body">
               <h2 class="h4 text-black">Step 2 - Fill data</h2>
               <div class="table-responsive">
                  <table class="table align-middle calander-table">
                     <thead>
                        <tr>
                           <th></th>
                           <th class="body-3-medium text-black">Days</th>
                           <th class="body-3-medium text-black">Available times</th>
                           <th class="body-3-medium text-black">Booking length</th>
                           <th class="body-3-medium text-black">Your fee</th>
                           <th class="body-3-medium text-black">Admin fee</th>
                           <th class="body-3-medium text-black"> Location</th>
                           <th class="body-3-medium text-black"> Total fee</th>
                           <th></th>
                        </tr>
                     </thead>
                     <tbody>
                        <x-daySlots day="sunday" dayText="SUN" />
                        <x-daySlots day="monday" dayText="MON" />
                        <x-daySlots day="tuesday" dayText="TUE" />
                        <x-daySlots day="wednesday" dayText="WED" />
                        <x-daySlots day="thursday" dayText="THU" />
                        <x-daySlots day="friday" dayText="FRI" />
                        <x-daySlots day="saturday" dayText="SAT" />
                        <!-- <tr>
                           <td>&nbsp;</td>
                           <td class="h4 dark-blue-100">&nbsp;</td>
                           <td style="min-width:200px">
                              <div class="row">
                                 <div class="align-self-center col-lg-5 mb-3 mb-md-0">
                                    <select name="1" id="1" class="js-placeholder-single-input form-control">
                                       <option value="" disabled="" selected="" hidden="">--:--</option>
                                       <option value="1">9:00</option>
                                       <option value="2">9:30</option>
                                       <option value="2">10:00</option>
                                       <option value="2">10:30</option>
                                       <option value="2">11:00</option>
                                    </select>
                                 </div>
                                 <div class="align-self-center col-lg-2 text-center mb-3 mb-md-0">-</div>
                                 <div class="align-self-center col-lg-5">
                                    <select name="2" id="2" class="js-placeholder-single-input form-control">
                                       <option value="" disabled="" selected="" hidden="">--:--</option>
                                       <option value="1">9:00</option>
                                       <option value="2">9:30</option>
                                       <option value="2">10:00</option>
                                       <option value="2">10:30</option>
                                       <option value="2">11:00</option>
                                    </select>
                                 </div>
                              </div>
                           </td>
                           <td>
                              <div class="align-self-center " style="min-width:200px">
                                 <select name="5" id="5" class="js-placeholder-single-input form-control">
                                    <option value="1" selected="">15 min</option>
                                    <option value="2">30 min</option>
                                    <option value="2">45 min</option>
                                    <option value="2">60 min</option>
                                 </select>
                              </div>
                           </td>
                           <td style="min-width:100px">
                              <div class=" theme-input-group">
                                 <input type="text" placeholder="120" class="form-control body-1 netural-100 pl-30" name="name" id="yourfee">
                                 <img src="/images/icons/dollor.svg" class="img-fluid left-icon">
                              </div>
                           </td>
                           <td style="min-width:100px">
                              <div class=" theme-input-group">
                                 <input type="text" placeholder="120" class="form-control body-1 netural-100 pl-30" name="name" id="adminfee">
                                 <img src="/images/icons/dollor.svg" class="img-fluid left-icon">
                              </div>
                           </td>
                           <td style="min-width:180px">
                              <select name="3" id="3" class="js-placeholder-single-input form-control">
                                 <option value="1" selected="">Name location</option>
                                 <option value="2">Add name location $0</option>
                                 <option value="3">Add name location $0</option>
                                 <option value="4">Add name location $320</option>
                                 <option value="5">Add name location $210</option>
                              </select>
                           </td>
                           <td style="min-width:100px">
                              <div class=" theme-input-group">
                                 <input type="text" placeholder="0" class="form-control body-1 netural-100 pl-30" name="name" id="totalfee">
                                 <img src="/images/icons/dollor.svg" class="img-fluid left-icon">
                              </div>
                           </td>
                           <td>
                           <img src="/images/icons/cross.svg" class="img-fluid " alt="cross-icon">
                           </td>
                        </tr>
                        <tr>
                           <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td colspan="8" class="pb-5"><a href="" class="text-decoration-none turquoise-100 button-1 link-text">  <img class="me-2" src="/images/icons/add-primary.svg" alt="add-primary">
                           Add more available times</a></td>
                        </tr>
                        <tr >
                           <td>
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="remember" id="1"  autocomplete="off">
                              </div>
                           </td>
                           <td class="h4 dark-blue-100 ">MON</td>
                           <td colspan="7" ><span class="neutral-50  body-2">Unavailable</span></td>
                        </tr>
                        <tr >
                        <td>
                              
                           <td colspan="9" >&nbsp;</td>
                        </tr>
                        <tr>
                           <td>
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="remember" id="1" checked autocomplete="off">
                              </div>
                           </td>
                           <td class="h4 dark-blue-100">TUE</td>
                           <td style="min-width:200px">
                              <div class="row">
                                 <div class="align-self-center col-lg-5 mb-3 mb-md-0">
                                    <select name="1a" id="1a" class="js-placeholder-single-input form-control">
                                       <option value="" disabled="" selected="" hidden="">--:--</option>
                                       <option value="1">9:00</option>
                                       <option value="2">9:30</option>
                                       <option value="2">10:00</option>
                                       <option value="2">10:30</option>
                                       <option value="2">11:00</option>
                                    </select>
                                 </div>
                                 <div class="align-self-center col-lg-2 text-center mb-3 mb-md-0">-</div>
                                 <div class="align-self-center col-lg-5">
                                    <select name="2a" id="2a" class="js-placeholder-single-input form-control">
                                       <option value="" disabled="" selected="" hidden="">--:--</option>
                                       <option value="1">9:00</option>
                                       <option value="2">9:30</option>
                                       <option value="2">10:00</option>
                                       <option value="2">10:30</option>
                                       <option value="2">11:00</option>
                                    </select>
                                 </div>
                              </div>
                           </td>
                           <td>
                              <div class="align-self-center " style="min-width:200px">
                                 <select name="3a" id="3a" class="js-placeholder-single-input form-control">
                                    <option value="1" selected="">15 min</option>
                                    <option value="2">30 min</option>
                                    <option value="2">45 min</option>
                                    <option value="2">60 min</option>
                                 </select>
                              </div>
                           </td>
                           <td style="min-width:100px">
                              <div class=" theme-input-group">
                                 <input type="text" placeholder="120" class="form-control body-1 netural-100 pl-30" name="name" id="yourfee">
                                 <img src="/images/icons/dollor.svg" class="img-fluid left-icon">
                              </div>
                           </td>
                           <td style="min-width:100px">
                              <div class=" theme-input-group">
                                 <input type="text" placeholder="120" class="form-control body-1 netural-100 pl-30" name="name" id="adminfee">
                                 <img src="/images/icons/dollor.svg" class="img-fluid left-icon">
                              </div>
                           </td>
                           <td style="min-width:180px">
                              <select name="4a" id="4a" class="js-placeholder-single-input form-control">
                                 <option value="1" selected="">Name location</option>
                                 <option value="2">Add name location $0</option>
                                 <option value="3">Add name location $0</option>
                                 <option value="4">Add name location $320</option>
                                 <option value="5">Add name location $210</option>
                              </select>
                           </td>
                           <td style="min-width:100px">
                              <div class=" theme-input-group">
                                 <input type="text" placeholder="0" class="form-control body-1 netural-100 pl-30" name="name" id="totalfee">
                                 <img src="/images/icons/dollor.svg" class="img-fluid left-icon">
                              </div>
                           </td>
                           <td>
                           &nbsp;
                           </td>
                        </tr>
                        <tr>
                           <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td colspan="8" class="pb-5"><a href="" class="text-decoration-none turquoise-100 button-1 link-text">  <img class="me-2" src="/images/icons/add-primary.svg" alt="add-primary">
                           Add more available times</a></td>
                        </tr>
                        <tr>
                           <td>
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="remember" id="1" checked autocomplete="off">
                              </div>
                           </td>
                           <td class="h4 dark-blue-100">WED</td>
                           <td style="min-width:200px">
                              <div class="row">
                                 <div class="align-self-center col-lg-5 mb-3 mb-md-0">
                                    <select name="5a" id="5a" class="js-placeholder-single-input form-control">
                                       <option value="" disabled="" selected="" hidden="">--:--</option>
                                       <option value="1">9:00</option>
                                       <option value="2">9:30</option>
                                       <option value="2">10:00</option>
                                       <option value="2">10:30</option>
                                       <option value="2">11:00</option>
                                    </select>
                                 </div>
                                 <div class="align-self-center col-lg-2 text-center mb-3 mb-md-0">-</div>
                                 <div class="align-self-center col-lg-5">
                                    <select name="6a" id="6a" class="js-placeholder-single-input form-control">
                                       <option value="" disabled="" selected="" hidden="">--:--</option>
                                       <option value="1">9:00</option>
                                       <option value="2">9:30</option>
                                       <option value="2">10:00</option>
                                       <option value="2">10:30</option>
                                       <option value="2">11:00</option>
                                    </select>
                                 </div>
                              </div>
                           </td>
                           <td>
                              <div class="align-self-center " style="min-width:200px">
                                 <select name="7a" id="7a" class="js-placeholder-single-input form-control">
                                    <option value="1" selected="">15 min</option>
                                    <option value="2">30 min</option>
                                    <option value="2">45 min</option>
                                    <option value="2">60 min</option>
                                 </select>
                              </div>
                           </td>
                           <td style="min-width:100px">
                              <div class=" theme-input-group">
                                 <input type="text" placeholder="120" class="form-control body-1 netural-100 pl-30" name="name" id="yourfee">
                                 <img src="/images/icons/dollor.svg" class="img-fluid left-icon">
                              </div>
                           </td>
                           <td style="min-width:100px">
                              <div class=" theme-input-group">
                                 <input type="text" placeholder="120" class="form-control body-1 netural-100 pl-30" name="name" id="adminfee">
                                 <img src="/images/icons/dollor.svg" class="img-fluid left-icon">
                              </div>
                           </td>
                           <td style="min-width:180px">
                              <select name="8a" id="8a" class="js-placeholder-single-input form-control">
                                 <option value="1" selected="">Name location</option>
                                 <option value="2">Add name location $0</option>
                                 <option value="3">Add name location $0</option>
                                 <option value="4">Add name location $320</option>
                                 <option value="5">Add name location $210</option>
                              </select>
                           </td>
                           <td style="min-width:100px">
                              <div class=" theme-input-group">
                                 <input type="text" placeholder="0" class="form-control body-1 netural-100 pl-30" name="name" id="totalfee">
                                 <img src="/images/icons/dollor.svg" class="img-fluid left-icon">
                              </div>
                           </td>
                           <td>
                           &nbsp;
                           </td>
                        </tr>
                        <tr>
                           <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td colspan="8" class="pb-5"><a href="" class="text-decoration-none turquoise-100 button-1 link-text">  <img class="me-2" src="/images/icons/add-primary.svg" alt="add-primary">
                           Add more available times</a></td>
                        </tr>
                        <tr>
                           <td>
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="remember" id="1" checked autocomplete="off">
                              </div>
                           </td>
                           <td class="h4 dark-blue-100">THU</td>
                           <td style="min-width:200px">
                              <div class="row">
                                 <div class="align-self-center col-lg-5 mb-3 mb-md-0">
                                    <select name="9a" id="9a" class="js-placeholder-single-input form-control">
                                       <option value="" disabled="" selected="" hidden="">--:--</option>
                                       <option value="1">9:00</option>
                                       <option value="2">9:30</option>
                                       <option value="2">10:00</option>
                                       <option value="2">10:30</option>
                                       <option value="2">11:00</option>
                                    </select>
                                 </div>
                                 <div class="align-self-center col-lg-2 text-center mb-3 mb-md-0">-</div>
                                 <div class="align-self-center col-lg-5">
                                    <select name="10a" id="10a" class="js-placeholder-single-input form-control">
                                       <option value="" disabled="" selected="" hidden="">--:--</option>
                                       <option value="1">9:00</option>
                                       <option value="2">9:30</option>
                                       <option value="2">10:00</option>
                                       <option value="2">10:30</option>
                                       <option value="2">11:00</option>
                                    </select>
                                 </div>
                              </div>
                           </td>
                           <td>
                              <div class="align-self-center " style="min-width:200px">
                                 <select name="11a" id="11a" class="js-placeholder-single-input form-control">
                                    <option value="1" selected="">15 min</option>
                                    <option value="2">30 min</option>
                                    <option value="2">45 min</option>
                                    <option value="2">60 min</option>
                                 </select>
                              </div>
                           </td>
                           <td style="min-width:100px">
                              <div class=" theme-input-group">
                                 <input type="text" placeholder="120" class="form-control body-1 netural-100 pl-30" name="name" id="yourfee">
                                 <img src="/images/icons/dollor.svg" class="img-fluid left-icon">
                              </div>
                           </td>
                           <td style="min-width:100px">
                              <div class=" theme-input-group">
                                 <input type="text" placeholder="120" class="form-control body-1 netural-100 pl-30" name="name" id="adminfee">
                                 <img src="/images/icons/dollor.svg" class="img-fluid left-icon">
                              </div>
                           </td>
                           <td style="min-width:180px">
                              <select name="12a" id="12a" class="js-placeholder-single-input form-control">
                                 <option value="1" selected="">Name location</option>
                                 <option value="2">Add name location $0</option>
                                 <option value="3">Add name location $0</option>
                                 <option value="4">Add name location $320</option>
                                 <option value="5">Add name location $210</option>
                              </select>
                           </td>
                           <td style="min-width:100px">
                              <div class=" theme-input-group">
                                 <input type="text" placeholder="0" class="form-control body-1 netural-100 pl-30" name="name" id="totalfee">
                                 <img src="/images/icons/dollor.svg" class="img-fluid left-icon">
                              </div>
                           </td>
                           <td>
                           &nbsp;
                           </td>
                        </tr>
                        <tr>
                           <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td colspan="8" class="pb-5"><a href="" class="text-decoration-none turquoise-100 button-1 link-text">  <img class="me-2" src="/images/icons/add-primary.svg" alt="add-primary">
                           Add more available times</a></td>
                        </tr>
                        <tr>
                           <td>
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="remember" id="1" checked autocomplete="off">
                              </div>
                           </td>
                           <td class="h4 dark-blue-100">FRI</td>
                           <td style="min-width:200px">
                              <div class="row">
                                 <div class="align-self-center col-lg-5 mb-3 mb-md-0">
                                    <select name="13a" id="13a" class="js-placeholder-single-input form-control">
                                       <option value="" disabled="" selected="" hidden="">--:--</option>
                                       <option value="1">9:00</option>
                                       <option value="2">9:30</option>
                                       <option value="2">10:00</option>
                                       <option value="2">10:30</option>
                                       <option value="2">11:00</option>
                                    </select>
                                 </div>
                                 <div class="align-self-center col-lg-2 text-center mb-3 mb-md-0">-</div>
                                 <div class="align-self-center col-lg-5">
                                    <select name="14a" id="14a" class="js-placeholder-single-input form-control">
                                       <option value="" disabled="" selected="" hidden="">--:--</option>
                                       <option value="1">9:00</option>
                                       <option value="2">9:30</option>
                                       <option value="2">10:00</option>
                                       <option value="2">10:30</option>
                                       <option value="2">11:00</option>
                                    </select>
                                 </div>
                              </div>
                           </td>
                           <td>
                              <div class="align-self-center " style="min-width:200px">
                                 <select name="15a" id="15a" class="js-placeholder-single-input form-control">
                                    <option value="1" selected="">15 min</option>
                                    <option value="2">30 min</option>
                                    <option value="2">45 min</option>
                                    <option value="2">60 min</option>
                                 </select>
                              </div>
                           </td>
                           <td style="min-width:100px">
                              <div class=" theme-input-group">
                                 <input type="text" placeholder="120" class="form-control body-1 netural-100 pl-30" name="name" id="yourfee">
                                 <img src="/images/icons/dollor.svg" class="img-fluid left-icon">
                              </div>
                           </td>
                           <td style="min-width:100px">
                              <div class=" theme-input-group">
                                 <input type="text" placeholder="120" class="form-control body-1 netural-100 pl-30" name="name" id="adminfee">
                                 <img src="/images/icons/dollor.svg" class="img-fluid left-icon">
                              </div>
                           </td>
                           <td style="min-width:180px">
                              <select name="16a" id="16a" class="js-placeholder-single-input form-control">
                                 <option value="1" selected="">Name location</option>
                                 <option value="2">Add name location $0</option>
                                 <option value="3">Add name location $0</option>
                                 <option value="4">Add name location $320</option>
                                 <option value="5">Add name location $210</option>
                              </select>
                           </td>
                           <td style="min-width:100px">
                              <div class=" theme-input-group">
                                 <input type="text" placeholder="0" class="form-control body-1 netural-100 pl-30" name="name" id="totalfee">
                                 <img src="/images/icons/dollor.svg" class="img-fluid left-icon">
                              </div>
                           </td>
                           <td>
                           &nbsp;
                           </td>
                        </tr>
                        <tr>
                           <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td colspan="8" class="pb-5"><a href="" class="text-decoration-none turquoise-100 button-1 link-text">  <img class="me-2" src="/images/icons/add-primary.svg" alt="add-primary">
                           Add more available times</a></td>
                        </tr>
                        <tr>
                           <td>
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="remember" id="1" checked autocomplete="off">
                              </div>
                           </td>
                           <td class="h4 dark-blue-100">SAT</td>
                           <td style="min-width:200px">
                              <div class="row">
                                 <div class="align-self-center col-lg-5 mb-3 mb-md-0">
                                    <select name="17a" id="17a" class="js-placeholder-single-input form-control">
                                       <option value="" disabled="" selected="" hidden="">--:--</option>
                                       <option value="1">9:00</option>
                                       <option value="2">9:30</option>
                                       <option value="2">10:00</option>
                                       <option value="2">10:30</option>
                                       <option value="2">11:00</option>
                                    </select>
                                 </div>
                                 <div class="align-self-center col-lg-2 text-center mb-3 mb-md-0">-</div>
                                 <div class="align-self-center col-lg-5">
                                    <select name="18a" id="18a" class="js-placeholder-single-input form-control">
                                       <option value="" disabled="" selected="" hidden="">--:--</option>
                                       <option value="1">9:00</option>
                                       <option value="2">9:30</option>
                                       <option value="2">10:00</option>
                                       <option value="2">10:30</option>
                                       <option value="2">11:00</option>
                                    </select>
                                 </div>
                              </div>
                           </td>
                           <td>
                              <div class="align-self-center " style="min-width:200px">
                                 <select name="19a" id="19a" class="js-placeholder-single-input form-control">
                                    <option value="1" selected="">15 min</option>
                                    <option value="2">30 min</option>
                                    <option value="2">45 min</option>
                                    <option value="2">60 min</option>
                                 </select>
                              </div>
                           </td>
                           <td style="min-width:100px">
                              <div class=" theme-input-group">
                                 <input type="text" placeholder="120" class="form-control body-1 netural-100 pl-30" name="name" id="yourfee">
                                 <img src="/images/icons/dollor.svg" class="img-fluid left-icon">
                              </div>
                           </td>
                           <td style="min-width:100px">
                              <div class=" theme-input-group">
                                 <input type="text" placeholder="120" class="form-control body-1 netural-100 pl-30" name="name" id="adminfee">
                                 <img src="/images/icons/dollor.svg" class="img-fluid left-icon">
                              </div>
                           </td>
                           <td style="min-width:180px">
                              <select name="20a" id="20a" class="js-placeholder-single-input form-control">
                                 <option value="1" selected="">Name location</option>
                                 <option value="2">Add name location $0</option>
                                 <option value="3">Add name location $0</option>
                                 <option value="4">Add name location $320</option>
                                 <option value="5">Add name location $210</option>
                              </select>
                           </td>
                           <td style="min-width:100px">
                              <div class=" theme-input-group">
                                 <input type="text" placeholder="0" class="form-control body-1 netural-100 pl-30" name="name" id="totalfee">
                                 <img src="/images/icons/dollor.svg" class="img-fluid left-icon">
                              </div>
                           </td>
                           <td>
                           &nbsp;
                           </td>
                        </tr>
                        <tr>
                           <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td colspan="8" class="pb-5"><a href="" class="text-decoration-none turquoise-100 button-1 link-text">  <img class="me-2" src="/images/icons/add-primary.svg" alt="add-primary">
                           Add more available times</a></td>
                        </tr> -->
                     </tbody>
                  </table>
               </div>
               <div class="col-12">
               <a class="theme-btn primary-btn d-inline-flex justify-content-center">Set the time</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</form>