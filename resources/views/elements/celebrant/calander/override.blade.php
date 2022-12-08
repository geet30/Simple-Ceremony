<h2 class="h4 text-black mb-3">Step 1 - Choose date(s)</h2>
<form class="row needs-validation over-ride-form-ns" method="post" novalidate action="{{ route('calendar.overRide-form-save') }}">
   @csrf
   <div class=" col-lg-5 mb-3 mb-lg-0">
      <div class="card  panel-card ">
         <div class="card-body">
            <div class="calendar-wrapper-ns no-border-calander date-range-picker override-form-picker"></div>
         </div>
         <div class="col-12 d-md-flex mt-4 justify-content-center">
            <button type="button" class="theme-btn primary-btn d-flex justify-content-center me-md-2 mb-3 mb-md-0" id="submit-first-over-ride-form">Apply</button>
            <button type="button" class="theme-btn primary-btn-border d-flex justify-content-center">Cancel</button>
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
      <div class="col-12 ns-empty-form2">
         <h2 class="h4 text-black">Step 2 - Fill data</h2>
         <div class="col-9 col-md-6 col-xl-4 col-xxl-3 mx-auto text-center py-4">
            <p class="h4 neutral-100">Please, choose the date(s) first,
               after that form will be appear
            </p>
            <img src="/images/emplty-folder.png" class="img-fluid mt-5" alt="emplty-folder">
         </div>
      </div>
      <div class="col-12 ns-slots-form2">
         <div class="card  panel-card">
            <div class="card-body">
               <h2 class="h4 text-black mb-3">Step 2 - Fill data <span id="error-custom-ns"></span></h2>
               <div class="card-body ns-append-over-ride-slots">
                  
               </div>
               <div class="card-body">
                  <div class="col-12 d-md-flex">
                     <button class="theme-btn primary-btn d-flex justify-content-center me-md-2 mb-3 mb-md-0">Save</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</form>