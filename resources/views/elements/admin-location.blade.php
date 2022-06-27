@foreach ($locations as $location)

         <div class="col-md-6 col-lg-4 col-xl-3 mb-2">
            <a class="card image-card admin-location-card" href="/admin/location-detail">
               <img src="{{ $location['image'] }}" class="card-img-top img-fluid" alt="location-1">
               <div class="card-body py-20">
                  <p class="paragraph netural-100 align-self-center mb-1">{{ $location['price'] }}</p> 
                  <h2 class="h4 netural-100 mb-0">{{ $location['name'] }}</h2>
                
               </div>
</a>
         </div>
         @endforeach