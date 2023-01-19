
<form class="needs-validation2" method="POST" name="userDetail" id="userDetail">
    <div class="row">
    <input type="hidden" name="locationId" id="locationId" value="{{$locationId}}">
        <div class="col-4 col-md-3 col-lg-3 col-xl-2 mb-3">
            <p class="paragraph Neutral/100">Step 2</p>
        </div>
        <div class="col-8 col-md-9 col-lg-9 col-xl-10">
            <div class="progress body-1">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
            </div>
        </div>
        <div class="col-md-12">
            <h3 class="h3 Neutral/100 mt-4 mb-4">Book your ceremony</h3>
        </div>
        <div class="col-md-6 mb-4">
            
            <label for="InputName" class="form-label small-text2">Your preferred first name *</label>
            <input type="text" placeholder="Type your preferred name here" class="form-control body-1 netural-100" name="first_couple_name" id="first_couple_name" value="{{ (isset(cache('booking')['first_couple_name']) ? cache('booking')['first_couple_name'] :'')}}" required>
            
       
            <div class="invalid-feedback first_couple_name"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>First Name is required</div>
        </div>
        <div class="col-md-6 mb-4">
            <label for="InputName" class="form-label small-text2">Your partner's preferred first name *</label>
            <input type="text" placeholder="Type your preferred name here" class="form-control body-1 netural-100" name="second_couple_name" id="second_couple_name" value="{{ (isset(cache('booking')['second_couple_name']) ? cache('booking')['second_couple_name'] :'')}}" required>
            <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Partner Name is required</div>
        </div>
        <div class="col-md-6 mb-4 email_exist">
            <label for="InputName" class="form-label small-text2">Your email *</label>
            <input type="email" placeholder="Type your email here" class="form-control body-1 netural-100 email_check" name="email" id="email" onblur="duplicateEmail(this)" value="{{ (isset(cache('booking')['email']) ? cache('booking')['email'] :'')}}" required>
            <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Email is required</div>
            <div class="invalid-feedback duplicate_email"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Email already Exist</div>
           
        </div>
       
        <div class="col-md-6 mb-4 phone_number">
            <label for="phone" class="form-label small-text2">Your phone number *</label>
            <input type="hidden" id="code" name="country_code" value="61">
            <input class="form-control body-1 netural-100 tel-input" type="tel" id="phone"
                placeholder="e.g. +1 702 123 4567" value="{{ (isset(cache('booking')['phone']) ? cache('booking')['phone'] :'')}}" name="phone" required>
            <div class="invalid-feedback phone_number_required"> <span><img class="me-2"
                        src="/images/require-iocn.svg" alt="Require Icon"></span>Phone number is
                required</div>
            <div class="invalid-feedback invalid-phone-number"> <span><img class="me-2"
                        src="/images/require-iocn.svg" alt="Require Icon"></span>Phone number is
                invalid</div>
        </div>
        <div class="col-md-6 mb-4">
            
            <label for="selectinput" class="form-label small-text2">This ceremony is a</label>
            <select name="ceremony_type" id="ceremony_type" class="js-placeholder-single-input form-control" required>
               
                @foreach($ceremonies_type as $key=>$ceremony)
               
                    <option value="{{$ceremony->id}}" {{ (isset(cache('booking')['ceremony_type']) && cache('booking')['ceremony_type'] == $ceremony->id) ? 'selected' : '' }}>{{$ceremony->ceremony_name}}</option>
                @endforeach
            
            </select>
            
        </div>
        <?php //dd(cache('booking'));?>
        <div class="col-md-6 mb-4">
                <label for="cost" class="form-label small-text2">Total Fee</label>
                <div class="d-flex position-relative">
                <span class="currency-sign body-1 netural-100">$</span>
                    <input type="number" step="0.01" class="form-control body-1 netural-100 readonlyInput ps-4 total_fee" name="cost" value="{{ (isset(cache('booking')['price']) ? cache('booking')['price'] :'')}}" required readonly>
                   
                
                </div>
                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Cost is required</div>
        </div>
        
        
        <div class="row CeremonyResult">
            @foreach($ceremonies_type as $key=>$ceremony)
                @foreach($ceremony->additional_info as $result)
                    @if(isset(cache('booking')['ceremony_type']) && cache('booking')['ceremony_type'] == $ceremony->id) 
                    
                        <div class="col-md-6 mb-4 ceremony_fields class-{{$ceremony->id}}">
                            <label for="cost" class="form-label small-text2">{{config('ceremonyStatus.CeremonyAdditional.'.$result->additional_info) }}</label>
                            
                            <input type="text" id="{{config('ceremonyStatus.CeremonyAdditionalFields.'.$result->additional_info) }}" placeholder="Type your {{config('ceremonyStatus.CeremonyAdditional.'.$result->additional_info) }}" name="{{config('ceremonyStatus.CeremonyAdditionalFields.'.$result->additional_info) }}"  value="{{ (isset(cache('booking')[config('ceremonyStatus.CeremonyAdditionalFields.'.$result->additional_info)]) ? cache('booking')[config('ceremonyStatus.CeremonyAdditionalFields.'.$result->additional_info)] :'')}}" class="form-control body-1 netural-100" required>
                                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>{{config('ceremonyStatus.CeremonyAdditional.'.$result->additional_info) }} is required</div>
                        
                        </div>
                    @else
                        @if($key == 0)
                        <div class="col-md-6 mb-4 ceremony_fields class-{{$ceremony->id}}">
                            <label for="cost" class="form-label small-text2">{{config('ceremonyStatus.CeremonyAdditional.'.$result->additional_info) }}</label>
                            
                            <input type="text" id="{{config('ceremonyStatus.CeremonyAdditionalFields.'.$result->additional_info) }}" placeholder="Type your {{config('ceremonyStatus.CeremonyAdditional.'.$result->additional_info) }}" name="{{config('ceremonyStatus.CeremonyAdditionalFields.'.$result->additional_info) }}"  value="{{ (isset(cache('booking')[config('ceremonyStatus.CeremonyAdditionalFields.'.$result->additional_info)]) ? cache('booking')[config('ceremonyStatus.CeremonyAdditionalFields.'.$result->additional_info)] :'')}}" class="form-control body-1 netural-100" required>
                                <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>{{config('ceremonyStatus.CeremonyAdditional.'.$result->additional_info) }} is required</div>
                        
                        </div>
                        @endif
                    @endif
                @endforeach
            @endforeach
        </div>
       

        <div class="col-md-6 mb-4">
            <label for="InputName" class="form-label small-text2">Location</label>
            <input type="text" class="form-control body-1 netural-100 location_name" name="location_name" id="location_name" value="{{ (isset(cache('booking')['location_name']) ? cache('booking')['location_name'] :'')}}" required readonly>
            <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Location is required</div>
        </div>
        <input type="hidden" name="calendar_dayslot_id" class="calendar_dayslot_id" value="{{ (isset(cache('booking')['calendar_dayslot_id']) ? cache('booking')['calendar_dayslot_id'] :'')}}">
        <input type="hidden" name="price_info" class="price_info" value="{{ (isset(cache('booking')['price_info']) ? cache('booking')['price_info'] :'')}}">

        <input type="hidden" name="celebrant_id" class="celebrant_id" value="{{ (isset(cache('booking')['celebrant_id']) ? cache('booking')['celebrant_id'] :'')}}">
        <div class="col-md-3 mb-4">
            <label for="InputName" class="form-label small-text2">Date</label>
            <input type="text" class="form-control body-1 netural-100 booking_date" name="booking_date" id="booking_date" value="{{ (isset(cache('booking')['booking_date']) ? date('M,d Y',strtotime(cache('booking')['booking_date'])) :'')}}" required>
            <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Date is required</div>
        </div>
      
        <div class="col-md-3 mb-4">
            <label for="InputName" class="form-label small-text2">Time</label>
            <input type="text" class="form-control body-1 netural-100 booking_start_time" name="booking_start_time" id="booking_start_time" value="{{ (isset(cache('booking')['booking_start_time']) ? cache('booking')['booking_start_time'] :'')}}" required>
            <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>start time is required</div>
        </div>
        
        <div class="col-md-12 mb-5 mt-3">
            <div class="form-term-condition p-5">
                <h3 class="h3 netural-100 mb-4">Conditions of booking:</h3>
                <p>Part 1</p>
                
                    @foreach($ceremonies_type as $key=>$ceremony)
                    <div class="ceremony_fields ceremony-conditions-{{$ceremony->id}}">
                    {!! nl2br($ceremony->conditions) !!}
                    </div>
                    @endforeach
                
               
                </p>
                <p>Part 2</p>
                {{locationCustomTerms($locationId)}}
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required="">
                    <label class="form-check-label body-1 netural-100" for="invalidCheck2">
                        I Agree with the above Conditions (Required)
                    </label>
                </div>
            </div>
        </div>
        <div class="col-md-12 d-flex justify-content-end">
            <a href="#list-home" class="theme-btn primary-btn d-inline-flex me-3 back_button align-items-center" data-id="list-home-list">
                <img class="me-2" src="/images/single-location/left-icon.svg" alt="Back Icon">Back
            </a>
            <button type="button" class="theme-btn primary-btn d-inline-flex submitBtn align-items-center"  id="second-form">Next 
                <img class="ms-2" src="/images/booking-form/next-icon.svg" alt="Next Icon">
            </button>
            
            <!-- <button type="submit" class="theme-btn primary-btn d-inline-flex submitBtn" onSubmit="bookingSubmit('/post-booking-user-detail','step-two','userDetail')">Next 
                <img class="ms-2" src="/images/booking-form/next-icon.svg" alt="Next Icon">
            </button> -->
        </div>
    </div>
</form>
                 