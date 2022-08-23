<div class="offcanvas offcanvas-end theme-offcanvas" tabindex="-1" id="offcanvaslocationcelebrants"
  aria-labelledby="offcanvaslocationcelebrantsLabel">
  <div class="offcanvas-header">
    <p id="offcanvasRightLabel" class="h3 neutral-100">Add marriage celebrants</p>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button>
  </div>
  <div class="offcanvas-body">
  <div class="message"></div>
    <form method="post" id="add-celebrants" action="{{url('location/submit-celebrant')}}" name="postform">
        @csrf 
        <div class="col-md-6">
          <input type="hidden" name="location_id" id="location_id" value="{{$id}}">
          <label for="partnerstatus" class="form-label small-text2">Choose marriage celebrants</label>
          <select name="celebrant_id" id="celebrant_id" class="js-placeholder-single-input form-control">
            
              <option value="" disabled="" selected="" hidden="">Choose here</option>
              @foreach($celebrants as $celebrant)
                <option value="{{$celebrant['id']}}">{{$celebrant['first_name']}}</option>
              @endforeach
              
          </select>
        </div>
        <div class="d-lg-flex mt-5">
           <button type="submit" class="theme-btn primary-btn d-inline-block">Save</button>
        </div>
    </form>
  </div>
</div>
<style type="text/css">
    .select2-container {
        z-index: 99999;
    }
</style>