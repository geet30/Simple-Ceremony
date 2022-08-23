
@foreach ($locations as $location)
   <div class="col-md-6 col-lg-4 col-xl-3 mb-2">
      <a class="card image-card admin-location-card" href="{{route('locations.detail',$location['id'])}}">
         @if(isset($location['cover_image']) && !empty($location['cover_image']))
            <img src="{{ asset('/uploads/images/locations/'.$location['cover_image']) }}" class="card-img-top img-fluid" alt="location-1">
         @endif

         <div class="card-body py-20">
            <p class="paragraph netural-100 align-self-center mb-1">{{ (isset($location['price'])) ?  '$'.number_format($location['price']):''}}</p> 
            <h2 class="h4 netural-100 mb-0">{{ (isset($location['name'])) ?  $location['name']:''}}</h2>
            
         </div>
         </a>
   </div>
@endforeach