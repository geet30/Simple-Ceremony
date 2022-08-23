<div class="row align-items-center">
    <div class="col-lg-6 col-xl-5 location-detail-slider">
        <div class="slider slider-for mb-11 ">
        @foreach($data['location_images'] as $images)
        <div class="slide-for-top">
                <img src="{{ asset('/uploads/images/locations/'.$images['image']) }}" class="w-100 img-fluid" alt="slider Image">
        </div>
        @endforeach
        </div>
        <div class="slider slider-nav">
        @foreach($data['location_images'] as $images)
        <div>
            <img src="{{ asset('/uploads/images/locations/'.$images['image']) }}" class="w-100 img-fluid" alt="slider Image">
        </div>
    
        @endforeach
        </div>
    </div>
    <div class="col-lg-6 col-xl-5 mt-3 mt-lg-0">
        <p class="paragraph netural-100">${{ number_format($data->price)}}</p>
        <h1 class="mb-0">
        <span class="h1 netural-100">{{$data->name}}
        @if(isset($data->address) && !empty($data->address))
            ,{{$data->address}}
        @endif
        @if(isset($data->town) && !empty($data->town))
            ,{{$data->town}}
        @endif
        </span>
        </h1>
    </div>
    <div class="col-12 admin-pt-92">
        <p class="body-3-medium  text-black">The name says it all "{{$data->name}}" will be on your marriage certificate ;-).</p>
        <p class="body-3-medium  text-black">
        {{$data['why_this_location']}}   
        </p>
        
    </div>
</div>
<div class="col-12 pt-92">
    <div class="row">
        <div class=" col-lg-3 mb-3 mb-lg-0">
        <h2>
            <p class="h2 netural-100 mb-3">Facilities</p>
            <p class="body-3 text-black">We provide various facilities for you</p>
        </h2>
        </div>
        <div class="col-lg-9">
        <div class="row gy-3">
            <div class="col-md-6 col-lg-4 d-flex align-items-start">
                <img class="me-4" src="/images/single-location/check-icon.svg" alt="Check Icon">
                <p class="body-3 text-black mb-0">Add name facilities here</p>
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-start">
                <img class="me-4" src="/images/single-location/check-icon.svg" alt="Check Icon">
                <p class="body-3 text-black mb-0">Add name facilities here</p>
            </div>
            <div class="col-md-6  col-lg-4 d-flex align-items-start">
                <img class="me-4" src="/images/single-location/check-icon.svg" alt="Check Icon">
                <p class="body-3 text-black mb-0">Add name facilities here</p>
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-start">
                <img class="me-4" src="/images/single-location/check-icon.svg" alt="Check Icon">
                <p class="body-3 text-black mb-0">Add name facilities here</p>
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-start">
                <img class="me-4" src="/images/single-location/check-icon.svg" alt="Check Icon">
                <p class="body-3 text-black mb-0">Add name facilities here</p>
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-start">
                <img class="me-4" src="/images/single-location/check-icon.svg" alt="Check Icon">
                <p class="body-3 text-black mb-0">Add name facilities here</p>
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-start">
                <img class="me-4" src="/images/single-location/check-icon.svg" alt="Check Icon">
                <p class="body-3 text-black mb-0">Add name facilities here</p>
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-start">
                <img class="me-4" src="/images/single-location/check-icon.svg" alt="Check Icon">
                <p class="body-3 text-black mb-0">Add name facilities here</p>
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-start">
                <img class="me-4" src="/images/single-location/check-icon.svg" alt="Check Icon">
                <p class="body-3 text-black mb-0">Add name facilities here</p>
            </div>
        </div>
        </div>
    </div>
</div>
<div class="col-12 pt-92 pb-60">
    <div class="row align-items-center">
        <div class="col-md-5">
        <h2>
            <p class="h2 netural-100 mb-3">Location</p>
            <p class="body-3 text-black"><img class="me-2" src="/images/single-location/single-location-icon.svg" alt="Single Location Icon">87 Waterview St, Putney NSW 2112, Australia</p>
        </h2>
        </div>
        <div class="col-md-7">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3314.388273684139!2d151.1002113155478!3d-33.82809618066748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12a5044d5afde5%3A0xb820b3d4e25fe47!2s87%20Waterview%20St%2C%20Putney%20NSW%202112%2C%20Australia!5e0!3m2!1sen!2sin!4v1654588852420!5m2!1sen!2sin" width="100%" height="249" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>