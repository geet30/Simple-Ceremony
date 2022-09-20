<div class="row pt-31">

@if(count($data->booking_addons) > 0)
   @foreach($data->booking_addons as $addons)

      @foreach($addons->packages as $addon)


         <div class="col-xl-3 col-xxl-3  mb-4 ">
            <label for="preferredname2" class="form-label small-text2 ps-2">Name add-on</label>
            <div class="input-div">{{$addon->package_name}}</div>
         </div>
         <div class="col-xl-3 col-xxl-3  mb-4 ">
            <label for="preferredname2" class="form-label small-text2 ps-2">Name partner</label>
            <div class="input-div">{{$addon->user->name}}</div>
         </div>
         <div class=" col-xl-3  col-xxl-1  mb-4 ">
            <label for="preferredname2" class="form-label small-text2 ps-2">Quantity</label>
            <div class="input-div">1</div>
         </div>
         <div class="col-xl-3 col-xxl-1 mb-4 ">
            <label for="preferredname2" class="form-label small-text2 ps-2">Price</label>
            <div class="input-div"> ${{$addon->total_fee}}</div>
         </div>
         <div class="col-xl-12  col-xxl-4  align-self-center">
            <a href="{{ url('partner/details', $addon['id']) }}" class="add-link ">See Information about add-ons</a>
         </div>

      @endforeach
   @endforeach
@else
<div class="col-xl-3 col-xxl-3  mb-4 ">
<p>No record found</p>
</div>
@endif
</div>