@foreach ($locations as $location)

         <div class="col-md-4">
            <div class="card image-card">
               <img src="{{ $location['image'] }}" class="card-img-top" alt="location-1">
               <div class="card-body">
                  <div class="d-flex justify-content-between mb-15"> <span class="paragraph netural-100 align-self-center">{{ $location['price'] }}</span> <span class=" align-self-center"><i class="fa-regular fa-heart heart"></i></span> </div>
                  <h2 class="h3 netural-100 mb-3 mb-lg-4">{{ $location['name'] }}</h2>
                  <a href="/single-location" class="card-btn-link d-flex">
                     <div class="align-self-center">{{ $location['btn'] }}</div>
                     <div class="align-self-center"> <img src="images/button-arrow.svg" class="img-fluid" alt="arrow-icon" /></div>
                  </a>
               </div>
            </div>
         </div>
         @endforeach