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
        <div class="col-md-12 mb-4">
            <h3 class="h3 neutral-100 mb-0">Click time to book</h3>
            <p class="mb-0 subheader-3 neutral-100 error-message-required mt-4">
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-3">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0028 15.6044C9.40845 15.6044 8.92623 15.1399 8.92623 14.5537C8.92623 13.9675 9.40845 13.4919 10.0028 13.4919C10.5972 13.4919 11.0682 13.9675 11.0682 14.5537C11.0682 15.1399 10.5972 15.6044 10.0028 15.6044ZM19.6137 14.432L13.1092 3.93559C12.7504 3.41574 12.3467 2.9512 11.8532 2.59727C11.3261 2.22121 10.7206 2 10.0028 2C9.28509 2 8.67951 2.22121 8.14121 2.59727C7.65899 2.9512 7.25527 3.41574 6.8964 3.93559L0.358342 14.4873C-0.135097 15.4938 -0.135097 16.6441 0.459272 17.6064C0.986354 18.458 1.91716 19 2.92646 19H17.068C18.0885 19 19.0081 18.458 19.5352 17.6064C20.1295 16.6552 20.152 15.4164 19.6137 14.432V14.432ZM10.0028 12.4411C9.61031 12.4411 9.32995 12.1204 9.28509 11.7332L8.92623 8.55888C8.87016 8.01692 9.45331 7.50813 10.0028 7.50813C10.5523 7.50813 11.1355 8.01692 11.0682 8.55888L10.7093 11.7332C10.6757 12.1204 10.3953 12.4411 10.0028 12.4411V12.4411Z" fill="#62CBC9"/>
                </svg>
                Times will appear after you had chosen the date
            </p>
            <div class="row">
                <div class="col-4 col-xl-3 mt-4">
                   <a href="" class="time-and-price body-2">
                      <span class="netural-100 mb-1">09:00</span>
                      <span class="turquoise-100 mb-2">$ 350</span>
                      <span class="netural-100" style="font-size: 10px;">30 min</span>
                   </a>
                </div>
                <div class="col-4 col-xl-3 mt-4">
                   <a href="" class="time-and-price body-2">
                      <span class="netural-100 mb-1">09:00</span>
                      <span class="turquoise-100 mb-2">$ 350</span>
                      <span class="netural-100" style="font-size: 10px;">30 min</span>
                   </a>
                </div>
                <div class="col-4 col-xl-3 mt-4">
                   <a href="" class="time-and-price body-2">
                      <span class="netural-100 mb-1">09:00</span>
                      <span class="turquoise-100 mb-2">$ 350</span>
                      <span class="netural-100" style="font-size: 10px;">30 min</span>
                   </a>
                </div><div class="col-4 col-xl-3 mt-4">
                   <a href="" class="time-and-price body-2">
                      <span class="netural-100 mb-1">09:00</span>
                      <span class="turquoise-100 mb-2">$ 350</span>
                      <span class="netural-100" style="font-size: 10px;">30 min</span>
                   </a>
                </div>
                <div class="col-4 col-xl-3 mt-4">
                   <a href="" class="time-and-price body-2">
                      <span class="netural-100 mb-1">09:00</span>
                      <span class="turquoise-100 mb-2">$ 350</span>
                      <span class="netural-100" style="font-size: 10px;">30 min</span>
                   </a>
                </div>
                <div class="col-4 col-xl-3 mt-4">
                   <a href="" class="time-and-price body-2">
                      <span class="netural-100 mb-1">09:00</span>
                      <span class="turquoise-100 mb-2">$ 350</span>
                      <span class="netural-100" style="font-size: 10px;">30 min</span>
                   </a>
                </div>
                <div class="col-4 col-xl-3 mt-4">
                   <a href="" class="time-and-price body-2">
                      <span class="netural-100 mb-1">09:00</span>
                      <span class="turquoise-100 mb-2">$ 350</span>
                      <span class="netural-100" style="font-size: 10px;">30 min</span>
                   </a>
                </div>
                <div class="col-4 col-xl-3 mt-4">
                   <a href="" class="time-and-price body-2">
                      <span class="netural-100 mb-1">09:00</span>
                      <span class="turquoise-100 mb-2">$ 350</span>
                      <span class="netural-100" style="font-size: 10px;">30 min</span>
                   </a>
                </div>
                <div class="col-4 col-xl-3 mt-4">
                   <a href="" class="time-and-price body-2">
                      <span class="netural-100 mb-1">09:00</span>
                      <span class="turquoise-100 mb-2">$ 350</span>
                      <span class="netural-100" style="font-size: 10px;">30 min</span>
                   </a>
                </div>
                <div class="col-4 col-xl-3 mt-4">
                   <a href="" class="time-and-price body-2">
                      <span class="netural-100 mb-1">09:00</span>
                      <span class="turquoise-100 mb-2">$ 350</span>
                      <span class="netural-100" style="font-size: 10px;">30 min</span>
                   </a>
                </div>
                <div class="col-4 col-xl-3 mt-4">
                   <a href="" class="time-and-price body-2">
                      <span class="netural-100 mb-1">09:00</span>
                      <span class="turquoise-100 mb-2">$ 350</span>
                      <span class="netural-100" style="font-size: 10px;">30 min</span>
                   </a>
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

