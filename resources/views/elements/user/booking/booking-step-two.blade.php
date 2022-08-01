@extends('layouts.panels') 
<form class="needs-validation2" method="POST" name="userDetail" id="userDetail">
    <div class="row">
        <div class="col-4 col-md-3 col-lg-3 col-xl-2 mb-3">
            <p class="paragraph Neutral/100">Step 2</p>
        </div>
        <div class="col-8 col-md-9 col-lg-9 col-xl-10">
            <div class="progress body-1">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
            </div>
        </div>
        <div class="col-md-12">
            <h3 class="h3 Neutral/100 mt-4 mb-4">Fill in the order form</h3>
        </div>
        <div class="col-md-6 mb-4">
            
            <label for="InputName" class="form-label small-text2">Your preferred first name</label>
            <input type="text" placeholder="Type your preferred name here" class="form-control body-1 netural-100" name="first_couple_name" id="first_couple_name" value="{{ (isset(cache('booking')['first_couple_name']) ? cache('booking')['first_couple_name'] :'')}}" required>
            
       
            <div class="invalid-feedback first_couple_name"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>First Name is required</div>
        </div>
        <div class="col-md-6 mb-4">
            <label for="InputName" class="form-label small-text2">Your partner's preferred first name</label>
            <input type="text" placeholder="Type your preferred name here" class="form-control body-1 netural-100" name="second_couple_name" id="second_couple_name" value="{{ (isset(cache('booking')['second_couple_name']) ? cache('booking')['second_couple_name'] :'')}}" required>
            <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Partner Name is required</div>
        </div>
        <div class="col-md-6 mb-4">
            <label for="InputName" class="form-label small-text2">Your email</label>
            <input type="text" placeholder="Type your email here" class="form-control body-1 netural-100" name="email" id="email" value="{{ (isset(cache('booking')['email']) ? cache('booking')['email'] :'')}}" required>
            <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Email is required</div>
        </div>
        <div class="col-md-6 mb-4">
       
            <label for="phone" class="form-label small-text2">Your phone number</label>
            <input class="form-control body-1 netural-100" name="phone" type="tel" id="phone" placeholder="e.g. +1 702 123 4567" value="{{ (isset(cache('booking')['phone']) ? cache('booking')['phone'] :'')}}" required>
            <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Phone Number is required</div>
        </div>
        <div class="col-md-6 mb-4">
            <label for="selectinput" class="form-label small-text2">This ceremony is a</label>
            <select name="ceremony_type" id="ceremony_type" class="js-placeholder-single-input form-control" required>
            

                <option value="" disabled="" selected="" hidden="">This ceremony is a</option>
                <option value="1" {{ (isset(cache('booking')['ceremony_type']) && cache('booking')['ceremony_type'] == 1) ? 'selected' : '' }}>Legal marriage ceremony</option>
                <option value="2" {{ (isset(cache('booking')['ceremony_type']) && cache('booking')['ceremony_type'] == 2) ? 'selected' : '' }}>A commitment ceremony</option>
                <option value="3" {{ (isset(cache('booking')['ceremony_type']) && cache('booking')['ceremony_type'] == 3) ? 'selected' : '' }}>A re-newal of vows</option>
                <option value="4" {{ (isset(cache('booking')['ceremony_type']) && cache('booking')['ceremony_type'] == 4) ? 'selected' : '' }}>A naming day</option>
                <option value="5" {{ (isset(cache('booking')['ceremony_type']) && cache('booking')['ceremony_type'] == 5) ? 'selected' : '' }}>A memorial ceremony</option>
            </select>
            <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Type is required</div>
        </div>

        
        <div class="col-md-12 mb-5 mt-3">
            <div class="form-term-condition p-5">
                <h3 class="h3 netural-100 mb-4">Conditions of booking:</h3>
                <p class="body-2 netural-100">
                a) I understand that is my responsibility to ensure the Notice of Intended Marriage form is lodged with Simple Ceremonies at least one calendar month prior to the ceremony date.<br><br>
                The Notice of Intended Marriage form must be prepared on this website and uploaded.<br><br>
                b) I understand that the Commonwealth Government of Australia recommends all couples receive pre-marriage counselling. It is not compulsory but it is recommended.
                    <a class="d-block mb-1" href="/faq">Click here to see some services</a><br>
                c) I have read and accept the Terms as shown on this website. Click here to see 
                    <a class="d-block mb-1" href="/term-and-condition">Terms and Conditions</a><br>
                d) I understand that this booking is non-refundable. The booking can ONLY be changed, if one calendar month and two days notice is given prior to the scheduled ceremony date. If this is the case the rescheduling fee will be $85, otherwise you will need to re-book and pay again.<br><br>
                e) I understand The maximum number of people at the ceremony is 20. That is 18 guests (including children above 5 yrs) and the 2 of you. At this location, this can not be increased.<br><br>
                </p>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required="">
                <label class="form-check-label body-1 netural-100" for="invalidCheck2">
                    I Agree with the above Conditions (Required)
                </label>
                </div>
            </div>
        </div>
        <div class="col-md-12 d-flex justify-content-end">
            <a href="#list-home" class="theme-btn primary-btn d-inline-flex me-3 back_button" data-id="list-home-list">
                <img class="me-2" src="/images/single-location/left-icon.svg" alt="Back Icon">Back
            </a>
            <button type="button" class="theme-btn primary-btn d-inline-flex submitBtn"  id="second-form">Next 
                <img class="ms-2" src="/images/booking-form/next-icon.svg" alt="Next Icon">
            </button>
            
            <!-- <button type="submit" class="theme-btn primary-btn d-inline-flex submitBtn" onSubmit="bookingSubmit('/post-booking-user-detail','step-two','userDetail')">Next 
                <img class="ms-2" src="/images/booking-form/next-icon.svg" alt="Next Icon">
            </button> -->
        </div>
    </div>
</form>
                 