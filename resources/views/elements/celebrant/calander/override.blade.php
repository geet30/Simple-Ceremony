<h2 class="h4 text-black mb-3">Step 1 - Choose date(s)</h2>
<form class="row">
   <div class=" col-lg-5 mb-3 mb-lg-0">
      <div class="card  panel-card ">
         <div class="card-body">
            <div class="calendar-wrapper no-border-calander"></div>
         </div>
      </div>
   </div>
   <div class=" col-lg-3">
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
         <h2 class="h4 text-black">Step 2 - Fill data</h2>
            <div class="col-9 col-md-6 col-xl-4 col-xxl-3 mx-auto text-center py-4">
               <p class="h4 neutral-100">Please, choose the date(s) first,
                  after that form will be appear
               </p>
               <img src="/images/emplty-folder.png" class="img-fluid mt-5" alt="emplty-folder">
            </div>
         <div class="card  panel-card">
            <div class="card-body">
               <h2 class="h4 text-black mb-3">Step 2 - Fill data</h2>
               <div class="d-flex mb-3">
                  <div class="align-self-center me-3 h4 text-black mb-0" >16-17 April 2022</div>
                  <div class="align-self-center"><img src="/images/icons/delete.svg" class="img-fluid" alt="delete"></div>
               </div>
               <div class="table-responsive">
                  <table class="table align-middle calander-table">
                     <thead>
                        <tr>
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
                        <tr>
                           <td style="min-width:200px">
                              <div class="row">
                                 <div class="align-self-center col-lg-5 mb-3 mb-md-0">
                                    <select name="21a" id="21a" class="js-placeholder-single-input form-control">
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
                                    <select name="22a" id="22a" class="js-placeholder-single-input form-control">
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
                                 <select name="23a" id="23a" class="js-placeholder-single-input form-control">
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
                              <select name="24a" id="24a" class="js-placeholder-single-input form-control">
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
                           <td style="min-width:200px">
                              <div class="row">
                                 <div class="align-self-center col-lg-5 mb-3 mb-md-0">
                                    <select name="25a" id="25a" class="js-placeholder-single-input form-control">
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
                                    <select name="26a" id="26a" class="js-placeholder-single-input form-control">
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
                                 <select name="27a" id="27a" class="js-placeholder-single-input form-control">
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
                              <select name="28a" id="28a" class="js-placeholder-single-input form-control">
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
                           <td colspan="7" class="pb-5"><a href="" class="text-decoration-none turquoise-100 button-1 link-text">  <img class="me-2" src="/images/icons/add-primary.svg" alt="add-primary">
                              Add more available times</a>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="d-flex mb-3">
                  <div class="align-self-center me-3 h4 text-black mb-0" >19-22 April 2022</div>
                  <div class="align-self-center"><img src="/images/icons/delete.svg" class="img-fluid" alt="delete"></div>
               </div>
               <div class="table-responsive">
                  <table class="table align-middle calander-table">
                     <thead>
                        <tr>
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
                        <tr>
                           <td style="min-width:200px">
                              <div class="row">
                                 <div class="align-self-center col-lg-5 mb-3 mb-md-0">
                                    <select name="31a" id="31a" class="js-placeholder-single-input form-control">
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
                                    <select name="32a" id="32a" class="js-placeholder-single-input form-control">
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
                                 <select name="33a" id="33a" class="js-placeholder-single-input form-control">
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
                              <select name="34a" id="34a" class="js-placeholder-single-input form-control">
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
                           <td colspan="7" class="pb-5"><a href="" class="text-decoration-none turquoise-100 button-1 link-text">  <img class="me-2" src="/images/icons/add-primary.svg" alt="add-primary">
                              Add more available times</a>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</form>