@foreach ($allAddOns as $addon)
<div class="col-md-3 mb-3 ">
   <a class="card image-card" href="add-ons-detail">
      <img src="{{ $addon['image'] }}" class="card-img-top" alt="add-on" title="add-on">
      <div class="card-body">
         <div class="badge badge-primary d-inline-flex mb-17">
            <div class="dot align-self-center me-1"></div>
            <div class="align-self-center"> {{ $addon['tag'] }}</div>
         </div>
         <div class="d-flex justify-content-between mb5 body-3 netural-100 ">Starting {{ $addon['price'] }} </div>
         <h3 class="h4 netural-100">{{ $addon['packname'] }}</h3>
         <div class="d-flex  small-text2 mb-1 netural-100">
            <div class="align-self-center"><img src="/images/location.svg" class="img-fluid me-2" alt="Location"></div>
            <div class="align-self-center">{{ $addon['location'] }}</div>
         </div>
         <div class="d-flex">
            <div class="align-self-center me-1"> <img src="{{ $addon['personimage'] }}" class="img-fluid ellipse-1"
                  alt="ellipse"> </div>
            <div class="small-text3 align-self-center netural-100">{{ $addon['personname'] }}</div>
         </div>
      </div>
   </a>
</div>
@endforeach