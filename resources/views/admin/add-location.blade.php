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
                     <h1 class="h3 neutral-100 mb-0">Add new location</h1>
                  </div>
                  <div class="card-body">
                     <form class="needs-validation row" method="POST" novalidate>
                        <div class="col-md-5 mb-4">
                           <label for="InputName" class="form-label small-text2">Location</label>
                           <input type="text" placeholder="Type the name location" class="form-control body-1 netural-100" name="name" id="InputName">
                        </div>
                        <div class="col-md-5 mb-4">
                           <label for="InputName" class="form-label small-text2">Address</label>
                           <input type="text" placeholder="Type the address here" class="form-control body-1 netural-100" name="name" id="InputName">
                        </div>
                        <div class="col-md-5 mb-4">
                           <label for="InputName" class="form-label small-text2">Suburb/ Town</label>
                           <input type="text" placeholder="Type the Suburb/ Town here" class="form-control body-1 netural-100" name="name" id="InputName">
                        </div>
                        <div class="col-md-5 mb-4">
                           <label for="InputName" class="form-label small-text2">Post Code</label>
                           <input type="text" placeholder="Type the Post Code code here" class="form-control body-1 netural-100" name="name" id="InputName">
                        </div>
                        <div class="col-md-5 mb-4">
                           <label for="InputName" class="form-label small-text2">Google coordinates</label>
                           <input type="text" placeholder="Type Google coordinates here" class="form-control body-1 netural-100" name="name" id="InputName">
                        </div>
                        <div class="col-md-5 mb-4">
                           <label for="InputName" class="form-label small-text2">Specific directions</label>
                           <input type="text" placeholder="Type specific directions here" class="form-control body-1 netural-100" name="name" id="InputName">
                        </div>
                        <div class="col-md-5 mb-4">
                           <label for="InputName" class="form-label small-text2">General location</label>
                           <input type="text" placeholder="Type general location here" class="form-control body-1 netural-100" name="name" id="InputName">
                        </div>
                        <div class="col-md-5 mb-4">
                           <label for="InputName" class="form-label small-text2">Location number</label>
                           <input type="text" placeholder="Type location number here" class="form-control body-1 netural-100" name="name" id="InputName">
                        </div>
                        <div class="col-md-5 mb-4">
                           <label for="InputName" class="form-label small-text2">Price</label>
                           <div class=" theme-input-group">
                              <input type="text" placeholder="Type general location here" class="form-control body-1 netural-100 pl-30" name="name" id="InputName">
                              <img src="/images/icons/dollor.svg" class="img-fluid left-icon">
                           </div>
                        </div>
                        <div class="col-md-5 mb-4">
                           <label for="InputName" class="form-label small-text2">Choose marriage celebrant</label>
                           <select class="js-example-basic-multiple form-control" name="states[]" multiple="multiple">
                              <option value="O1" data-badge="">Peter</option>
                              <option value="O2" data-badge="">Lux</option>
                              <option value="O3" data-badge="">Michael</option>
                              <option value="O4" data-badge="">Johnson</option>
                           </select>
                        </div>
                        <div class="col-md-12 mb-4 d-flex flex-column">
                           <label for="InputName" class="form-label small-text2 mb-20">Upload gallery photos</label>
                           <div class="upload__box">
                              <div class="upload__btn-box">
                                 <label class="theme-btn primary-btn ">
                                    <p class="mb-0"> <img src="/images/icons/photo.svg"  class="img-fluid me-2">Upload images</p>
                                    <input type="file" multiple="" data-max_length="20" class="upload__inputfile">
                                 </label>
                              </div>
                              <div class="upload__img-wrap"></div>
                           </div>
                        </div>
                        <div class="col-md-5 mb-4">
                           <div class="row">
                              <div class="col-10 col-sm-8 col-md-6  ">
                                 <label for="InputName" class="form-label small-text2">Key advantages of site</label>
                                 <input type="text" placeholder="Type here" class="form-control body-1 netural-100" name="name" id="InputName">
                              </div>
                              <div class="col-2 col-sm-4 col-md-6">
                                 <label for="InputName" class="form-label small-text2 d-block">&nbsp;</label>
                                 <a class="cross-icon"><img src="/images/icons/cross.svg" class="img-fluid"></a>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 mb-4">
                           <a class="d-flex add-link">
                              <div class="align-self-center mr-6"><img src="/images/icons/add-primary.svg" class="img-fluid"></div>
                              <div class="align-self-center">Add key advantages of site</div>
                           </a>
                        </div>
                        <div class="col-md-12 mb-4">
                           <label for="InputName" class="form-label small-text2">Why have your ceremony at this place</label>
                           <textarea class="form-control body-1 netural-100" id="exampleFormControlTextarea1" placeholder="Type here" rows="10"></textarea>
                        </div>
                        <div class="col-md-12 mb-4">
                           <label for="InputName" class="form-label small-text2">Custom Terms</label>
                           <textarea class="form-control body-1 netural-100" id="exampleFormControlTextarea1" placeholder="Type here" rows="10"></textarea>
                        </div>
                        <div class="col-md-5 mb-4">
                           <label for="InputName" class="form-label small-text2">Wet Weather Option</label>
                           <input type="text" placeholder="Type here" class="form-control body-1 netural-100" name="name" id="InputName">
                        </div>
                        <div class="col-md-5 mb-4">
                           <label for="InputName" class="form-label small-text2">Getting there</label>
                           <input type="text" placeholder="Type here" class="form-control body-1 netural-100" name="name" id="InputName">
                        </div>
                        <div class="col-md-12 mb-4">
                           <input class="form-check-input me-2" type="checkbox" name="location" id="location"  autocomplete="off">
                           <label class="form-check-label body-1" for="location">
                           Is this a Custom Location?
                           </label>
                        </div>
                        <h2 class="h3 neutral-100 mb-20">Combination Package</h2>
                        <div class="col-md-5 mb-4">
                           <label for="age" class="form-label small-text2">Filter criteria</label>
                           <select class="js-example-basic-multiple form-control" name="states[]" multiple="multiple">
                              <option value="O1" data-badge="">Park</option>
                              <option value="O2" data-badge="">Harbour</option>
                              <option value="O3" data-badge="">River</option>
                              <option value="O4" data-badge="">Indoor</option>
                              <option value="O4" data-badge="">Outdoor</option>
                              <option value="O4" data-badge="">Beach</option>
                              <option value="O4" data-badge="">Unique</option>
                           </select>
                        </div>
                        <div class="col-12">
                           <div class="row">
                              <div class="col-md-5 mb-4">
                                 <label for="age" class="form-label small-text2">Select partner</label>
                                 <select class="js-placeholder-single-input form-control" name="states[]" multiple="multiple">
                                    <option value="O1" data-badge="">Lorem Ipsum is simply dummy text</option>
                                    <option value="O2" data-badge="">Lorem Ipsum is simply dummy text</option>
                                    <option value="O3" data-badge="">Lorem Ipsum is simply dummy text</option>
                                    <option value="O4" data-badge="">Lorem Ipsum is simply dummy text</option>
                                    <option value="O4" data-badge="">Lorem Ipsum is simply dummy text</option>
                                    <option value="O4" data-badge="">Lorem Ipsum is simply dummy text</option>
                                    <option value="O4" data-badge="">Lorem Ipsum is simply dummy text</option>
                                 </select>
                              </div>
                              <div class="col-md-5 mb-4">
                                 <label for="age" class="form-label small-text2">Select Package</label>
                                 <select class=js-placeholder-single-input form-control" name="states[]" multiple="multiple">
                                    <option value="O1" data-badge="">Lorem Ipsum is simply dummy text</option>
                                    <option value="O2" data-badge="">Lorem Ipsum is simply dummy text</option>
                                    <option value="O3" data-badge="">Lorem Ipsum is simply dummy text</option>
                                    <option value="O4" data-badge="">Lorem Ipsum is simply dummy text</option>
                                    <option value="O4" data-badge="">Lorem Ipsum is simply dummy text</option>
                                    <option value="O4" data-badge="">Lorem Ipsum is simply dummy text</option>
                                    <option value="O4" data-badge="">Lorem Ipsum is simply dummy text</option>
                                 </select>
                              </div>
                              <div class="col-2 ">
                                 <label for="InputName" class="form-label small-text2 d-block">&nbsp;</label>
                                 <a class="cross-icon"><img src="/images/icons/cross.svg" class="img-fluid"></a>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 mb-4">
                           <a class="d-flex add-link">
                              <div class="align-self-center mr-6"><img src="/images/icons/add-primary.svg" class="img-fluid"></div>
                              <div class="align-self-center">Add key advantages of site</div>
                           </a>
                        </div>
                        <div class="col-12 mt-3">
                           <a class="theme-btn primary-btn ">Save</a>
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