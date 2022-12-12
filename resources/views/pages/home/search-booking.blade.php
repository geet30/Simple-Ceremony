@if(count($locations) > 0)
    <?php $arr = $locationsArr = []; ?>
    @foreach ($locations as $Id=>$data)
        @foreach ($data as $date=>$location)

            @foreach ($location as $key=>$response)

            <?php
            $arr[$Id][$date][$key] = $response;
            $locationsArr[$Id] = $location[$key];
            ?>
            @endforeach
        @endforeach
    @endforeach

    @foreach ($locationsArr as $locationId=>$data)

    <div class="col-md-12">
        <div class="search-result-row mb-4">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="location-grid">
                        <a class="text-decoration-none">
                            <div class="card image-card">

                                <a href="{{ route('user.booking.detail', $data->location->id) }}" class="text-decoration-none">
                                    <div class="card image-card">


                                        <img src="{{ asset('/uploads/images/locations/'.$data->location->cover_image) }}" class="card-img-top" alt="location-1">


                                        <div class="card-body pb-0">

                                            <div class="d-flex justify-content-between mb-15"> <span class="paragraph netural-100 align-self-center">${{ number_format($data->location->price) }}</span> <span class=" align-self-center"><i class="fa-regular fa-heart heart"></i></span> </div>
                                            <h2 class="h3 netural-100 mb-0">{{ $data->location->name }}</h2>

                                        </div>
                                    </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row h-100">
                        <div class="upload-files-slider">
                            <div class="outer-wrapper">
                                <div class="inner-wrapper">

                                    @foreach($arr[$locationId] as $dateinfo=>$result)
                                        <div class="pseudo-item">
                                            <div class="location-search-grid">
                                                <a class="location-date-link body-2" role="button">{{date('j F',strtotime($dateinfo))}}</a>

                                                <div class="row">
                                                    @foreach($result as $response)
                                                    <?php


                                                    $price = $response['your_fee'] + $response['admin_fee'] + $response['location_fee'];
                                                    ?>
                                                   
                                                    <div class="col-6 col-xl-4 mt-4">
                                                        <a href="{{route('booking.getlocationCalender',[$data->location->id,$dateinfo])}}" class="time-and-price body-2">
                                                            <span class="netural-100 mb-1">{{$response['start_time']}}</span>
                                                            <span class="turquoise-100 mb-2">$ {{$price}}</span>
                                                            <span class="netural-100" style="font-size: 10px;">{{$response['booking_length']}} min</span>
                                                        </a>
                                                    </div>
                                                    @endforeach
                                                </div>

                                            </div>
                                        </div>
                                    @endforeach
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