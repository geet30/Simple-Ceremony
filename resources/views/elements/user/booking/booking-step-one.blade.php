<form  method="POST" novalidate id="calendar_form" name="postform">
    @csrf
    <div class="message"></div>
    
    <input type="hidden" name="locationId" id="locationId" value="{{$locationId}}">
    <div class="row">
        <div class="col-4 col-md-3 col-lg-3 col-xl-2 mb-3">
            <p class="paragraph Neutral/100">Step 1</p>
        </div>
        <div class="col-8 col-md-9 col-lg-9 col-xl-10">
            <div class="progress body-1">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row mt-4 mb-4">
                
                <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
                <h2 class="h3 Neutral/100 mb-0">Choose date</h2>
                </div>
                <div class="col-md-12 col-lg-8">
                <div class="d-flex justify-content-lg-end align-items-start align-items-md-center flex-md-row flex-column">
                    <div class="me-3 mb-4 mb-md-0">
                        <img class="me-2" src="/images/booking-form/available-icon.svg" alt="Available Icon">
                        <span>Available</span>
                    </div>
                    <div class="me-3 mb-4 mb-md-0">
                        <img class="me-2" src="/images/booking-form/not-available-icon.svg" alt="Not Available Icon">
                        <span>Not available</span>
                    </div>
                    <div class="align-items-center d-flex">
                        <div class="me-3">
                            <span class="d-inline-block ms-2 align-self-start" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="bottom" data-bs-content="if the date or place you want to select is not available, you can send a request to open the place and time">
                                <img src="/images/booking-form/information.svg" alt="Information Icon" style="width:13px;">
                            </span>
                        </div>
                        <a href="{{route('request-custom-location');}}" class="theme-btn primary-btn d-inline-flex">Contact Us</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
        
        <div class="col-xxl-12 col-xl-12 col-md-12 mb-4">
           
            <div class="calendar-wrapper" id="calendar-wrapper"></div>
            <input type="hidden" name="booking_date" id="calendar_date" class="booking_date">
        </div>
        
        <div class="col-md-12 mb-3">
            <h3 class="h3 Neutral/100 mb-4">Select time</h3>
            <div class="row">
                 <div class="col-md-6 mb-4">
                    <select name="booking_start_time" id="booking_start_time" class="js-placeholder-single-input form-control" required>
                        <option value="" disabled="" selected="" hidden="">Select Start Time</option>
                        @foreach($timeslot as $time)

                            <option value="{{$time}}">{{$time}}</option>
                        @endforeach
                    </select>
                   <p style="font-size:12px;">The selected time is the start time of your Ceremony</p>
                  <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Booking start time is required</div>
                </div>
                <div class="col-md-6 mb-4">
                    <select name="booking_end_time" id="booking_end_time" class="js-placeholder-single-input form-control" required>
                        <option value="" disabled="" selected="" hidden="">Select End Time</option>
                        @foreach($timeslot as $time)

                            <option value="{{$time}}">{{$time}}</option>
                        @endforeach
                    </select>
                    <p style="font-size:12px;">Selecting multiple timeframes will result in higher costs</p>
                    <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Booking end time is required</div>
                </div>
            </div>
        </div>
        <div class="col-md-12 text-end">
        <button type="button" class="theme-btn primary-btn d-inline-flex" id="first-form">Next <img class="ms-2" src="/images/booking-form/next-icon.svg" alt="Next Icon"></button>
        <!-- <button type="button" class="theme-btn primary-btn d-inline-flex" id="first-form" onClick="sendFirstFormValues('/post-booking-location-form','step-one','calendar_form')">Next <img class="ms-2" src="/images/booking-form/next-icon.svg" alt="Next Icon"></button> -->
            <!-- <a href="#" class="theme-btn primary-btn d-inline-flex">Next
                <img class="ms-2" src="/images/booking-form/next-icon.svg" alt="Next Icon">
            </a> -->
        </div>
    </div>
</form> 

