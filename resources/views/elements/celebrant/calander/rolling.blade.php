<form class="row needs-validation rolling-repeat-form-ns" method="post" action="{{ route('calendar.store') }}"  novalidate>
   @csrf
   <div class="col-lg-4">
      <div class="card  panel-card h-100">
         <div class="card-body">
            <h2 class="h4 neutral-100 mb-4">Step 1 - Choose time(s) range </h2>
            <input type="hidden" id="starting_date-ns" name="starting_date" value="" />
            <input type="hidden" id="ending_date-ns" name="ending_date" value="" />
            <div class="col-md-12 mb-4">
               <label for="choose-date" class="form-label small-text2">Start date</label>
               <select name="starting_from" id="choose-date" class="js-placeholder-single-input form-control">
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
            <div class="calendar-wrappers date-picker-js-ns no-border-calander " ></div>
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
            <div class="card-body ns-duplicate-check-validation">
               <h2 class="h4 text-black">Step 2 - Fill data <span id="common-error-ns"></span></h2>
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
                        
                     </tbody>
                  </table>
               </div>
               <div class="col-12">
               <button class="theme-btn primary-btn d-inline-flex justify-content-center">Set the time</button>
               </div>
            </div>
         </div>
      </div>
   </div>
</form>