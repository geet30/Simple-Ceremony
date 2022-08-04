@extends('layouts.panels') 
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
                <div class="col-md-4 mb-4 mb-md-0">
                <h2 class="h3 Neutral/100 mb-0">Choose date</h2>
                </div>
                <div class="col-md-8 col-xl-8 col-xxl-6">
                <div class="d-flex justify-content-md-end">
                    <div class="me-5">
                        <img class="me-2" src="/images/booking-form/available-icon.svg" alt="Available Icon">
                        <span>Available</span>
                    </div>
                    <div class="">
                        <img class="me-2" src="/images/booking-form/not-available-icon.svg" alt="Not Available Icon">
                        <span>Not available</span>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-10 col-xl-12 col-md-12 mb-4">
            <!-- <div class="calendar-wrapper" id="calendar-wrapper" onChange="calenderSetting('calendar-wrapper','calender_date')"></div> -->
            <div class="calendar-wrapper" id="calendar-wrapper"></div>
            <input type="hidden" name="booking_date" id="calendar_date">
        </div>
        <div class="col-md-12 mb-3">
            <h3 class="h3 Neutral/100 mb-4">Select time</h3>
            <div class="row">
                 <div class="col-md-6 mb-4">
                    <select name="time_hr" id="time_hr" class="form-control">
                        <option value="" disabled="" selected="" hidden="">--:--</option>
                        @foreach($timeslot as $time)

                            <option value="{{$time}}">{{$time}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-4">
                    <select name="time_hr" id="time_hr" class="form-control">
                        <option value="" disabled="" selected="" hidden="">--:--</option>
                        @foreach($timeslot as $time)

                            <option value="{{$time}}">{{$time}}</option>
                        @endforeach
                    </select>
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

