
@if(count($locations) > 0)
    @foreach ($locations as $location)
    <?php $btn = 'Learn More'; ?>
        <div class="col-md-4">
            <a href="{{ route('user.booking.detail', $location->id) }}" class="text-decoration-none">
                <div class="card image-card">
                    @foreach($location['location_images'] as $images)
                        @if ($loop->first)  
                        <img src="{{ asset('/uploads/images/locations/'.$images['image']) }}" class="card-img-top" alt="location-1">
                        @endif
                    
                    @endforeach
                    <div class="card-body">
                    
                        <div class="d-flex justify-content-between mb-15"> <span class="paragraph netural-100 align-self-center">${{ number_format($location['price']) }}</span> <span class=" align-self-center"><i class="fa-regular fa-heart heart"></i></span> </div>
                        <h2 class="h3 netural-100 mb-3 mb-lg-4">{{ $location['name'] }}</h2>
                        <div class="card-btn-link d-flex">
                            <div class="align-self-center">{{ $btn }}</div>
                            
                            <div class="align-self-center"> <img src="{{ asset('images/button-arrow.svg') }}" class="img-fluid" alt="arrow-icon" /></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
@else
<div class="col-md-4">
<p>No result found</p>
</div>
   
@endif
