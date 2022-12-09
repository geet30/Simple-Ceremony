@if(count($locations) > 0)
    @foreach ($locations as $location)
        <div class="col-md-12">
            <div class="search-result-row mb-4">
                <div class="row">
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="location-grid">
                            <a href="{{ route('user.booking.detail', $location->id) }}" class="text-decoration-none">
                                <div class="card image-card">
                                @foreach($location['location']['location_images'] as $images)
                                    @if ($loop->first)  
                                        <img src="{{ asset('/uploads/images/locations/'.$images['image']) }}" class="card-img-top" alt="location-1">
                                    @endif
                    
                                @endforeach
                                    <div class="card-body pb-0">
                                        <div class="d-flex justify-content-between mb-15"> <span class="paragraph netural-100 align-self-center">${{ number_format($location['location']['price']) }}</span> <span class=" align-self-center"><i class="fa-regular fa-heart heart"></i></span> </div>
                                        <h2 class="h3 netural-100 mb-0">{{ $location['location']['name'] }}</h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="upload-files-slider">
                                <div class="outer-wrapper">
                                    <div class="inner-wrapper">
                                        <div class="pseudo-item">
                                            <div class="location-search-grid">
                                                <a class="location-date-link body-2" role="button">2 December</a>
                                                <div class="row">
                                                    
                                                    <div class="col-6 col-xl-4 mt-4">
                                                        <a href="" class="time-and-price body-2">
                                                            <span class="netural-100 mb-1">09:00</span>
                                                            <span class="turquoise-100 mb-2">$ 350</span>
                                                            <span class="netural-100" style="font-size: 10px;">30 min</span>
                                                        </a>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pseudo-item">
                                            <div class="location-search-grid">
                                                <a class="location-date-link body-2" role="button">2 December</a>
                                                <div class="row">
                                                    <div class="col-6 col-xl-4 mt-4">
                                                        <a href="" class="time-and-price body-2">
                                                            <span class="netural-100 mb-1">09:00</span>
                                                            <span class="turquoise-100 mb-2">$ 350</span>
                                                            <span class="netural-100" style="font-size: 10px;">30 min</span>
                                                        </a>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pseudo-item">
                                            <div class="location-search-grid">
                                                <a class="location-date-link body-2" role="button">2 December</a>
                                                <div class="row">
                                                    
                                                   
                                                    <div class="col-6 col-xl-4 mt-4">
                                                        <a href="" class="time-and-price body-2">
                                                            <span class="netural-100 mb-1">09:00</span>
                                                            <span class="turquoise-100 mb-2">$ 350</span>
                                                            <span class="netural-100" style="font-size: 10px;">30 min</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pseudo-item">
                                            <div class="location-search-grid">
                                                <a class="location-date-link body-2" role="button">2 December</a>
                                                <div class="row">
                                                    <div class="col-6 col-xl-4 mt-4">
                                                        <a href="" class="time-and-price body-2">
                                                            <span class="netural-100 mb-1">09:00</span>
                                                            <span class="turquoise-100 mb-2">$ 350</span>
                                                            <span class="netural-100" style="font-size: 10px;">30 min</span>
                                                        </a>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pseudo-item">
                                            <div class="location-search-grid">
                                                <a class="location-date-link body-2" role="button">2 December</a>
                                                <div class="row">
                                                    <div class="col-6 col-xl-4 mt-4">
                                                        <a href="" class="time-and-price body-2">
                                                            <span class="netural-100 mb-1">09:00</span>
                                                            <span class="turquoise-100 mb-2">$ 350</span>
                                                            <span class="netural-100" style="font-size: 10px;">30 min</span>
                                                        </a>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endforeach
@else
<div class="col-md-4">
<p>No result found</p>
</div>

@endif