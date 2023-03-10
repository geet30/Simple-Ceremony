<tr class="custom-class-{{$day}}" data-keyid="0" data-target="custom-class-{{$day}}-unavailable">
    <td>
        <input type="checkbox" class="custom-class-{{$day}} custom-class-{{$day}}-unavailable" name="day[{{$day}}][unavailable]" style="display:none">
        <div class="form-check">
            <input class="form-check-input ns-event-checkbox-uncheck" type="checkbox" name="day[{{$day}}][available]" id="1" checked autocomplete="off">
            <input type="hidden" name="day[{{$day}}][name]" value="{{$dayText}}">
        </div>
    </td>
    <td class="h4 dark-blue-100">{{$dayText}}</td>
    <td style="min-width:260px">
        <div class="row">
            <div class="align-self-center col-5 mb-3 mb-md-0">
            <select name="day[{{$day}}][slots][0][start]" data-width="100%" id="day[{{$day}}][slots][0][start]" class="js-placeholder-single-input form-control ns-required start-time" required>
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
            <div class="align-self-center col-2 text-center mb-3 mb-md-0">-</div>
            <div class="align-self-center col-5">
            <select name="day[{{$day}}][slots][0][end]" data-width="100%" id="day[{{$day}}][slots][0][end]" class="js-placeholder-single-input form-control ns-required end-time" required>
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
    <td style="min-width:140px">
        <div class="align-self-center">
            <select name="day[{{$day}}][slots][0][booking_length]" data-width="100%" id="day[{{$day}}][slots][0][booking_length]" class="js-placeholder-single-input form-control">
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
            <input type="text" placeholder="120" class="form-control body-1 netural-100 pl-30 your_fee" name="day[{{$day}}][slots][0][your_fee]" value="{{ $price->standard_fee ?? 0 }}" id="yourfee" readonly>
            <img src="/images/icons/dollor.svg" class="img-fluid left-icon">
        </div>
    </td>
    <td style="min-width:100px">
        <div class=" theme-input-group">
            <input type="text" placeholder="120" class="form-control body-1 netural-100 pl-30 admin_fee" name="day[{{$day}}][slots][0][admin_fee]" id="adminfee" value="{{ $price->admin_fee ?? 0 }}" readonly>
            <img src="/images/icons/dollor.svg" class="img-fluid left-icon">
        </div>
    </td>
    <td style="min-width:180px">
        <input type="hidden" name="day[{{$day}}][slots][0][location_fee]" class="input-location_fee" value="">
        <select name="day[{{$day}}][slots][0][location]" data-width="100%" id="day[{{$day}}][slots][0][location]" class="js-placeholder-single-input form-control location-select-ns ns-required" required data-day="{{$day}}">
            <option value="" selected="">Name location</option>
            @foreach($location as $loc)
                <option value="{{ $loc->id }}" data-price="{{ $loc->package_price }}">{{ $loc->name.' $'.$loc->price}}</option>
            @endforeach
            <!-- <option value="2">Add name location $0</option>
            <option value="3">Add name location $0</option>
            <option value="4">Add name location $320</option>
            <option value="5">Add name location $210</option> -->
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
            <input type="text" placeholder="0" class="form-control body-1 netural-100 pl-30 total_fee" name="day[{{$day}}][slots][0][total_fee]" id="totalfee">
            <img src="{{ asset('/images/icons/dollor.svg') }}" class="img-fluid left-icon">
        </div>
    </td>
    <td style="min-width:100px">
        <img src="/images/icons/cross.svg" class="img-fluid cursor-pointer " alt="cross-icon">
    </td>
</tr>
<tr class="custom-class-{{$day}}-addon">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="8" class="pb-5"><a data-day="{{$day}}" data-class="custom-class-{{$day}}" data-url="{{ route('sub-slots-html-component') }}" class="cursor-pointer get-sub-slots text-decoration-none turquoise-100 button-1 link-text">  <img class="me-2" src="/images/icons/add-primary.svg" alt="add-primary">
    Add more available times</a></td>
</tr>
<tr class="custom-class-{{$day}}-unavailable" data-target="custom-class-{{$day}}" style="display:none">
    <td>
        <div class="form-check">
            <input class="form-check-input ns-event-checkbox-check" type="checkbox" name="day[{{$day}}][available_no]" id="1"  autocomplete="off">
        </div>
    </td>
    <td class="h4 dark-blue-100 ">{{$dayText}}</td>
    <td colspan="7" ><span class="neutral-50  body-2">Unavailable</span></td>
</tr>