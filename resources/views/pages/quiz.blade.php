@extends('layouts.master') @section('content')
<section class="hero pb-100">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <p class="paragraph netural-100 text-center mt-4">In just 30 seconds</p>
            <h1 class="h1 netural-100 text-center mb-80">Based on your specific circumstances, we can let you know if you can get married and exactly what you need to get married</h1>
            <img src="images/quiz-hero.png" class="img-fluid" alt="Quiz"> 
         </div>
      </div>
   </div>
</section>
<section class="pb-100">
   <div class="container">
      <div class="row realistic-coronavirus-bg">
         <div class="col-md-6 p-5">
            <h2 class="h3 text-black netural-100 mb-4">Please note!</h2>
            <p class="body-3 netural-100 mb-0"> weddings are not permitted to take place in Greater Sydney prior to the 28th of August 2021 due to COVID Restrictions.</p>
         </div>
         <div class="col-md-6 pe-0 realistic-coronavirus-image"><img src="images/realistic-coronavirus.png" class="img-fluid w-100 h-100" alt="Realistic Coronavirus"> </div>
      </div>
   </div>
</section>
<section class="request-custom-location-form pb-100">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="card py-50 px-50">
               <h2>
                  <p class="paragraph text-black text-center">Fill the form</p>
                  <p class="h2 netural-100 mb-5 text-center">Please enter your details below</p>
               </h2>
               <form class="needs-validation" method="POST" novalidate>
                  <div class="row">
                     <div class="col-md-6 mb-4">
                        <label for="InputName" class="form-label small-text2">Your preferred first name</label>
                        <input type="text" placeholder="Type your preferred name here" class="form-control body-1 netural-100" name="name" id="InputName">
                     </div>
                     <div class="col-md-6 mb-4">
                        <label for="InputName" class="form-label small-text2">Your partner's preferred first name</label>
                        <input type="text" placeholder="Type your partner's preferred name here" class="form-control body-1 netural-100" name="name" id="InputName">
                     </div>
                     <div class="col-md-6 mb-4">
                        <label for="age" class="form-label small-text2">Are you both 18+ years old?</label>
                        <select name="age" id="age" class="js-placeholder-single-input form-control">
                           <option value="" disabled="" selected="" hidden="">Select your answer here</option>
                           <option value="1">Yes</option>
                           <option value="2">No</option>
                        </select>
                     </div>
                     <div class="col-md-6 mb-4">
                        <label for="country" class="form-label small-text2">Are either of you legally married in Australia or any other country?</label>
                        <select name="country" id="country" class="js-placeholder-single-input form-control">
                           <option value="" disabled="" selected="" hidden="">Select your answer here</option>
                           <option value="1">Yes</option>
                           <option value="2">No</option>
                        </select>
                     </div>
                     <div class="col-md-6 mb-4">
                        <label for="gender" class="form-label small-text2">Are you of the opposite sex?</label>
                        <select name="gender" id="gender" class="js-placeholder-single-input form-control">
                           <option value="" disabled="" selected="" hidden="">Select your answer here</option>
                           <option value="1">Yes</option>
                           <option value="2">No</option>
                        </select>
                     </div>
                     <div class="col-md-6 mb-4">
                        <label for="related" class="form-label small-text2">Are you related?</label>
                        <select name="related" id="related" class="js-placeholder-single-input form-control">
                           <option value="" disabled="" selected="" hidden="">Select your answer here</option>
                           <option value="1">Yes</option>
                           <option value="2">No</option>
                        </select>
                     </div> 
                     <div class="col-md-6 mb-5">
                        <label for="married" class="form-label small-text2">Do both of you choose freely to get married</label>
                        <select name="married" id="married" class="js-placeholder-single-input form-control">
                           <option value="" disabled="" selected="" hidden="">Select your answer here</option>
                           <option value="1">Yes</option>
                           <option value="2">No</option>
                        </select>
                     </div>
                     <div class="col-md-12 mb-3 mt-4">
                        <h3 class="h3">Please fill your details</h3>
                     </div>
                     <div class="col-md-6 mb-4">
                        <label for="yourstatus" class="form-label small-text2">What is your Status?</label>
                        <select name="yourstatus" id="yourstatus" class="js-placeholder-single-input form-control">
                           <option value="" disabled="" selected="" hidden="">Select your answer here</option>
                           <option value="1">Australian citizen</option>
                           <option value="2">Permanent resident</option>
                           <option value="3">Temporary visa holder</option>
                           <option value="4">Holiday visa holder</option>
                           <option value="5">Other</option>
                        </select>
                     </div>
                     <div class="col-md-6 mb-4">
                        <label for="yourid" class="form-label small-text2">What ID do you have?</label>
                        <select name="yourid" id="yourid" class="js-placeholder-single-input form-control">
                           <option value="" disabled="" selected="" hidden="">Select your answer here</option>
                           <option value="1">Passport (Can be expired)</option>
                           <option value="2">Drive lic & original birth certificate</option>
                           <option value="3">Neither of the above</option>
                        </select>
                     </div>
                     <div class="col-md-6 mb-4">
                        <label for="youmarried" class="form-label small-text2">Have you been married before?</label>
                        <select name="youmarried" id="youmarried" class="js-placeholder-single-input form-control">
                           <option value="" disabled="" selected="" hidden="">Select your answer here</option>
                           <option value="1">Yes</option>
                           <option value="2">No</option>
                        </select>
                     </div>
                     <div class="col-md-6 mb-4">
                        <label for="yourlang" class="form-label small-text2">Do you speak English</label>
                        <select name="yourlang" id="yourlang" class="js-placeholder-single-input form-control">
                           <option value="" disabled="" selected="" hidden="">Select your answer here</option>
                           <option value="1">Yes</option>
                           <option value="2">No</option>
                        </select>
                     </div>
                     <div class="col-md-12 mb-3 mt-4">
                        <h3 class="h3">Please fill your partner’s details</h3>
                     </div>
                     <div class="col-md-6 mb-4">
                        <label for="partnerstatus" class="form-label small-text2">What is your partner’s Status?</label>
                        <select name="partnerstatus" id="partnerstatus" class="js-placeholder-single-input form-control">
                           <option value="" disabled="" selected="" hidden="">Select your answer here</option>
                           <option value="1">Australian citizen</option>
                           <option value="2">Permanent resident</option>
                           <option value="3">Temporary visa holder</option>
                           <option value="4">Holiday visa holder</option>
                           <option value="5">Other</option>
                        </select>
                     </div>
                     <div class="col-md-6 mb-4">
                        <label for="partnerid" class="form-label small-text2">What ID your partner’s have?</label>
                        <select name="parnterid" id="partnerid" class="js-placeholder-single-input form-control">
                           <option value="" disabled="" selected="" hidden="">Select your answer here</option>
                           <option value="1">Passport (Can be expired)</option>
                           <option value="2">Drive lic & original birth certificate</option>
                           <option value="3">Neither of the above</option>
                        </select>
                     </div>
                     <div class="col-md-6 mb-4">
                        <label for="parntermarried" class="form-label small-text2">Have your partner’s been married before?</label>
                        <select name="parntermarried" id="parntermarried" class="js-placeholder-single-input form-control">
                           <option value="" disabled="" selected="" hidden="">Select your answer here</option>
                           <option value="1">Yes</option>
                           <option value="2">No</option>
                        </select>
                     </div>
                     <div class="col-md-6 mb-4">
                        <label for="parnterlang" class="form-label small-text2">Do your partner’s speak English</label>
                        <select name="parnterlang" id="parnterlang" class="js-placeholder-single-input form-control">
                           <option value="" disabled="" selected="" hidden="">Select your answer here</option>
                           <option value="1">Yes</option>
                           <option value="2">No</option>
                        </select>
                     </div>
                     <div class="col-md-12 mb-3 mt-4">
                        <h3 class="h3">When are you planning on getting married?</h3>
                     </div>
                     <div class="col-md-6 mb-4">
                        <label for="marriagetime" class="form-label small-text2">How long from today?</label>
                        <select name="marriagetime" id="marriagetime" class="js-placeholder-single-input form-control">
                           <option value="" disabled="" selected="" hidden="">Select your answer here</option>
                           <option value="1">Less than 1 month</option>
                           <option value="2">Greater than 1 month</option>
                        </select>
                     </div>
                     <div class="col-12 mt-4">
                        <button type="submit" id="submit_button" class="theme-btn primary-btn border-0">Submit</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection