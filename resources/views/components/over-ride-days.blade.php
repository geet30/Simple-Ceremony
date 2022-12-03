<div class="col-md-12 ns-custom-append-override">
    <div class="d-flex mb-3">
        <div class="align-self-center me-3 h4 text-black mb-0" >{{ $dateText}}</div>
        <div class="align-self-center" onclick="this.closest('.ns-custom-append-override').remove()"><img src="/images/icons/delete.svg" class="img-fluid" alt="delete"></div>
    </div>
    <div class="table-responsive">
        <table class="table align-middle calander-table">
        <thead>
            <tr>
                <th></th>
                <th class="body-3-medium text-black">Days</th>
                <th class="body-3-medium text-black">Available times</th>
                <th class="body-3-medium text-black">Booking length</th>
                <th class="body-3-medium text-black">Your fee</th>
                <th class="body-3-medium text-black">Admin fee</th>
                <th class="body-3-medium text-black"> Location</th>
                <th class="body-3-medium text-black"> Total fee</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <tr class="ns-slots {{$date}}-date-class" data-key="0" data-date="{{$date}}" data-show="{{$date}}-date-class-unavailable">
            <td>
                <input type="checkbox" class="" name="override[{{$date}}][available]" style="display:none">
                <div class="form-check">
                    <input class="form-check-input ns-event-checkbox-uncheck" type="checkbox" name="override[{{$date}}][active]" id="1" checked autocomplete="off">
                    <input type="hidden" name="override[{{$date}}][day]" value="{{ $dayText }}">
                    <input type="hidden" name="override[{{$date}}][full_day]" value="{{ $day }}">
                </div>
            </td>
            <td class="h4 dark-blue-100">{{ $dayText }}</td>
            <td style="min-width:200px">
                <div class="row">
                    <div class="align-self-center col-lg-5 mb-3 mb-md-0">
                    <select name="override[{{$date}}][slots][0][start]" id="override[{{$date}}][slots][0][start]" class="js-placeholder-single-input form-control ns-required start-time" required>
                        <option value="" disabled="" selected="" hidden="">--:--</option>
                        @foreach($slots as $va)
                        <option value="{{ $va }}">{{ $va }}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">
                        <span>
                            <img class="me-2" src="/images/require-iocn.svg" alt="Require Icon">
                        </span>
                        Required
                    </div>
                    </div>
                    <div class="align-self-center col-lg-2 text-center mb-3 mb-md-0">-</div>
                    <div class="align-self-center col-lg-5">
                    <select name="override[{{$date}}][slots][0][end]" id="override[{{$date}}][slots][0][end]" class="js-placeholder-single-input form-control ns-required end-time" required>
                        <option value="" disabled="" selected="" hidden="">--:--</option>
                        @foreach($slots as $va)
                        <option value="{{ $va }}">{{ $va }}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">
                        <span>
                            <img class="me-2" src="/images/require-iocn.svg" alt="Require Icon">
                        </span>
                        Required
                    </div>
                    </div>
                </div>
            </td>
            <td>
                <div class="align-self-center " style="min-width:200px">
                    <select name="override[{{$date}}][slots][0][booking_length]" id="override[{{$date}}][slots][0][booking_length]" class="js-placeholder-single-input form-control">
                    <option value="15" selected="">15 min</option>
                    <option value="30">30 min</option>
                    <option value="45">45 min</option>
                    <option value="60">60 min</option>
                    </select>
                </div>
                <div class="invalid-feedback">
                    <span>
                        <img class="me-2" src="/images/require-iocn.svg" alt="Require Icon">
                    </span>
                    Required
                </div>
            </td>
            <td style="min-width:100px">
                <div class=" theme-input-group">
                    <input type="text" placeholder="120" class="form-control body-1 netural-100 pl-30 your_fee" name="override[{{$date}}][slots][0][your_fee]" value="{{ $price->standard_fee ?? 0 }}" id="yourfee" readonly>
                    <img src="/images/icons/dollor.svg" class="img-fluid left-icon">
                </div>
            </td>
            <td style="min-width:100px">
                <div class=" theme-input-group">
                    <input type="text" placeholder="120" class="form-control body-1 netural-100 pl-30 admin_fee" name="override[{{$date}}][slots][0][admin_fee]" id="adminfee" value="{{ $price->admin_fee ?? 0 }}" readonly>
                    <img src="/images/icons/dollor.svg" class="img-fluid left-icon">
                </div>
            </td>
            <td style="min-width:180px">
                <input type="hidden" name="override[{{$date}}][slots][0][location_fee]" class="input-location_fee" value="">
                <select name="override[{{$date}}][slots][0][location]" id="override[{{$date}}][slots][0][location]" class="js-placeholder-single-input form-control over-ride-location-select-ns ns-required" required data-day="{{$day}}" data-dayText="{{$dayText}}" data-date="{{$date}}" data-dateText="{{$dateText}}" >
                    <option value="" selected="">Name location</option>
                    @foreach($location as $loc)
                        <option value="{{ $loc->id }}" data-price="{{ $loc->package_price }}">{{ $loc->name.' $'.$loc->price}}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">
                    <span>
                        <img class="me-2" src="/images/require-iocn.svg" alt="Require Icon">
                    </span>
                    Required
                </div>
                <div class="invalid-feedback location-error d-none">
                    <span>
                        <img class="me-2" src="/images/require-iocn.svg" alt="Require Icon">
                    </span>
                    Booking already exist For this time slot
                </div>
            </td>
            <td style="min-width:100px">
                <div class=" theme-input-group">
                    <input type="text" placeholder="0" class="form-control body-1 netural-100 pl-30 total_fee" name="override[{{$date}}][slots][0][total_fee]" id="totalfee">
                    <img src="{{ asset('/images/icons/dollor.svg') }}" class="img-fluid left-icon">
                </div>
            </td>
            <td>
                <img src="/images/icons/cross.svg" class="img-fluid " alt="cross-icon">
            </td>
        </tr>
        <tr class="{{$date}}-date-class">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td colspan="8" class="pb-5"><a data-day="{{$day}}" data-dayText="{{$dayText}}" data-date="{{$date}}" data-dateText="{{$dateText}}" data-class="custom-class-{{$day}}" data-url="{{ route('calendar.overRideDay-slots') }}" class="get-override-sub-slots text-decoration-none turquoise-100 button-1 link-text">  <img class="me-2" src="/images/icons/add-primary.svg" alt="add-primary">
            Add more available times</a></td>
        </tr>
        <tr style="display:none" class="{{$date}}-date-class-unavailable" data-show="{{$date}}-date-class">
            <td>
                <div class="form-check">
                    <input class="form-check-input ns-event-checkbox-check" type="checkbox" name="override[{{$date}}][available_no]" id="1"  autocomplete="off">
                </div>
            </td>
            <td class="h4 dark-blue-100 "></td>
            <td colspan="7" ><span class="neutral-50  body-2">Unavailable</span></td>
        </tr>
        </tbody>
        </table>
    </div>
</div>