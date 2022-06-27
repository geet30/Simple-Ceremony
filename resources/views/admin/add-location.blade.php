@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
   <div class="col-md-3 col-lg-2">
      @include('elements.admin-sidebar')
</div>
     <div class="col-md-9 col-lg-10">
      <div class="row">
         <div class="col-12 mb-30">
         <a href="/admin/location" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
         </div>
         <div class="col-12">
            <div class="card panel-card">
               <div class="card-title">
                <h1 class="h3 neutral-100 mb-0">Add new locations</h1>
               </div>
               <div class="card-body">
               <form class="needs-validation row" method="POST" novalidate>
               <div class="col-md-6 mb-4">
                        <label for="InputName" class="form-label small-text2">Location</label>
                        <input type="text" placeholder="Type the name location" class="form-control body-1 netural-100" name="name" id="InputName">
                     </div>
                     <div class="col-md-6 mb-4">
                        <label for="InputName" class="form-label small-text2">Address</label>
                        <input type="text" placeholder="Type the address here" class="form-control body-1 netural-100" name="name" id="InputName">
                     </div>
                     <div class="col-md-6 mb-4">
                        <label for="InputName" class="form-label small-text2">Suburb/ Town</label>
                        <input type="text" placeholder="Type the Suburb/ Town here" class="form-control body-1 netural-100" name="name" id="InputName">
                     </div>
                     <div class="col-md-6 mb-4">
                        <label for="InputName" class="form-label small-text2">Post Code</label>
                        <input type="text" placeholder="Type the Post Code code here" class="form-control body-1 netural-100" name="name" id="InputName">
                     </div>
                     <div class="col-md-6 mb-4">
                        <label for="InputName" class="form-label small-text2">Google coordinates</label>
                        <input type="text" placeholder="Type Google coordinates here" class="form-control body-1 netural-100" name="name" id="InputName">
                     </div>
                     <div class="col-md-6 mb-4">
                        <label for="InputName" class="form-label small-text2">Specific directions</label>
                        <input type="text" placeholder="Type specific directions here" class="form-control body-1 netural-100" name="name" id="InputName">
                     </div>
                     <div class="col-md-6 mb-4">
                        <label for="InputName" class="form-label small-text2">General location</label>
                        <input type="text" placeholder="Type general location here" class="form-control body-1 netural-100" name="name" id="InputName">
                     </div>
                     <div class="col-md-6 mb-4">
                        <label for="InputName" class="form-label small-text2">Location number</label>
                        <input type="text" placeholder="Type location number here" class="form-control body-1 netural-100" name="name" id="InputName">
                     </div>
                     <div class="col-md-6 mb-4">
                    
                     <label for="InputName" class="form-label small-text2">Price</label>
                     <div class=" theme-input-group">
                     <input type="text" placeholder="Type general location here" class="form-control body-1 netural-100 pl-30" name="name" id="InputName">
                              <img src="/images/icons/dollor.svg" class="img-fluid left-icon">
                           </div>
                        </div>
                      
                     <div class="col-md-6 mb-4">
                        <label for="InputName" class="form-label small-text2">Choose marriage celebrant</label>
                <select name="filter_by_categories" id="selectinput" class="js-placeholder-single-input js-select2 form-control" multiple="multiple">
                     <option value="O1" data-badge="">Peter</option>
                     <option value="O2" data-badge="">Lux</option>
                     <option value="O3" data-badge="">Michael</option>
                     <option value="O4" data-badge="">Johnson</option>
                  </select> 
               
                     </div>
</form>
                     </div>
            </div>
         </div>
      </div>
     </div>
   </div>
</div>
@endsection