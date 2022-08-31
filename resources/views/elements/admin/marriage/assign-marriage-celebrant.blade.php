<div class="offcanvas offcanvas-end theme-offcanvas partner-module-sidebar" tabindex="-1" id="marriage-celebrant" aria-labelledby="offcanvasRightLabel">
   <div class="offcanvas-header">
      <p id="offcanvasRightLabel" class="h3 neutral-100">Assign marriage celebrant</p>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button>
   </div>
   <div class="offcanvas-body">
      <form method="post" id="add-celebrants" action="{{url('marriages/save-celebrant')}}" name="postform">
         @csrf 
         <!-- <div class="col-md-10 mb-4">
            <label class="form-label small-text2 ps-2">Domicile location of marriage celebrants </label>
            <select required="" name="location" class="js-placeholder-single-input form-control">
               <option value="" disabled="" selected="" hidden="" id="location">Choose location</option>
               @foreach($locations as $location)
                  <option value="{{$location->id}}">{{$location->name}}</option>
               @endforeach
            </select>
            <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Marriage couple is required</div>
         </div> -->
         <input type="hidden" name="id"  class="booking_id">
         <div class="col-md-10 col-xl-6 mb-4">
            <label class="form-label small-text2 ps-2">Choose marriage celebrant </label>
            <select required="" id="celebrant_id" name="celebrant_id" class="js-placeholder-single-input form-control">
               <option value="" disabled="" selected="" hidden="">Choose here</option>
               
               @foreach($celebrants as $celebrant)
                  <option value="{{$celebrant->id}}">{{$celebrant->first_name}}</option>
               @endforeach
            </select>
            <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Marriage couple is required</div>
         </div>
         <div class="col-12">
            <button  class="theme-btn primary-btn border-0 d-inline-flex "  >Save </button>
         </div>
      </form>
   </div>
</div>
<style type="text/css">
    .select2-container {
        z-index: 99999;
    }
</style>