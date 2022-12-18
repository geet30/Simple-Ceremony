<div class="card-body" id="overview-booking-list">
    <div class="d-flex justify-content-between flex-column align-items-start flex-md-row align-items-md-center mb-4">
        <h4 class="h4 neutral-100 mb-2 mb-md-0">Marriages
            (<span id="overview-booking-count">{{ count($bookings) }}</span>)
        </h4>
    </div>

    <div class="marriagesListing">
        @if(count($bookings) >0)
            @foreach ($bookings as $booking)
                <div class="marriage-calendar-overview">
                    <div class="row">
                        <div class="col-12 col-md-2 col-lg-1 mb-2">
                            <div class="numberCircle">{{ $loop->iteration }}</div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-11">
                            <h4 class="h4 neutral-100">
                                {{ $booking['booking']['first_couple_name'] }}
                                &amp;
                                {{ $booking['booking']['second_couple_name'] }}</h4>
                            <div class="d-flex mt-3 flex-md-row flex-column">
                                <div class="d-flex align-items-center me-0 me-md-4 mb-3 mb-md-0">

                                    @if ($booking->booking->celebrant != null)
                                        <img src="/images/calendar/user-gray.svg" alt="user">
                                        <p class="gray-gray-900 body-2 ms-2 mb-0">
                                            {{ $booking->booking->celebrant->first_name }}
                                        </p>
                                    @else
                                        <a href="" data-bs-toggle="offcanvas" data-bs-target="#marriage-celebrant"
                                            class="text-decoration-underline  add-link assign_celebrant"
                                            data-id="{{ $booking->booking->id }}"> Assign
                                            celebrant</a>
                                    @endif
                                    <span class="d-inline-block ms-2" tabindex="0" data-bs-toggle="popover"
                                        data-bs-trigger="hover focus" data-bs-placement="right" data-bs-content="Approved">
                                        <img src="/images/calendar/timeline-success.svg" alt="Information Icon"
                                            style="width:13px;">
                                    </span>
                                </div>
                                <div class="d-flex align-items-center me-0 me-md-4 mb-3 mb-md-0">
                                    <img src="/images/calendar/time.svg" alt="mobile">
                                    <p class="gray-gray-900 body-2 ms-2 mb-0">
                                        {{ $booking->booking->booking_start_time }} to
                                        {{ $booking->booking->booking_end_time }}</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="/images/calendar/location.svg" alt="mobile">
                                    <p class="gray-gray-900 body-2 ms-2 mb-0">
                                        {{ $booking->booking->location->name }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
        
        <div class="marriage-calendar-overview">
            <div class="row">
                <div class="col-12 col-md-2 col-lg-1 mb-2">
                    <div class="numberCircle">0</div>
                </div>
                <div class="col-12 col-md-10 col-lg-11">
                    <h4 class="h4 neutral-100">No record found</h4>
                    
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
