<tr class="ns-slots" data-key="{{$key}}" data-date="{{$date}}">
    <td>&nbsp;</td>
    <td class="h4 dark-blue-100">&nbsp;</td>
    <td style="min-width:200px">
        <div class="row">
            <div class="align-self-center col-lg-5 mb-3 mb-md-0">
            <select name="override[{{$date}}][slots][{{$key}}][start]" id="override[{{$date}}][slots][{{$key}}][start]" class="js-placeholder-single-input form-control ns-required start-time" required>
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
            <select name="override[{{$date}}][slots][{{$key}}][end]" id="override[{{$date}}][slots][{{$key}}][end]" class="js-placeholder-single-input form-control ns-required end-time" required>
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
            <select name="override[{{$date}}][slots][{{$key}}][booking_length]" id="override[{{$date}}][slots][{{$key}}][booking_length]" class="js-placeholder-single-input form-control">
            <option value="15" selected="">15 min</option>
            <option value="30">30 min</option>
            <option value="45">45 min</option>
            <option value="60">60 min</option>
            </select>
            <div class="invalid-feedback">
                <span>
                    <img class="me-2" src="/images/require-iocn.svg" alt="Require Icon">
                </span>
                Required
            </div>
        </div>
    </td>
    <td style="min-width:100px">
        <div class=" theme-input-group">
            <input type="text" placeholder="120" class="form-control body-1 netural-100 pl-30 your_fee" name="override[{{$date}}][slots][{{$key}}][your_fee]" id="yourfee" value="{{ $price->standard_fee ?? 0 }}" readonly>
            <img src="/images/icons/dollor.svg" class="img-fluid left-icon">
        </div>
    </td>
    <td style="min-width:100px">
        <div class=" theme-input-group">
            <input type="text" placeholder="120" class="form-control body-1 netural-100 pl-30 admin_fee" name="override[{{$date}}][slots][{{$key}}][admin_fee]" id="adminfee" value="{{ $price->admin_fee ?? 0 }}" readonly>
            <img src="/images/icons/dollor.svg" class="img-fluid left-icon">
        </div>
    </td>
    <td style="min-width:180px">
        <input type="hidden" name="override[{{$date}}][slots][{{$key}}][location_fee]" class="input-location_fee" value="">
        <select name="override[{{$date}}][slots][{{$key}}][location]" id="override[{{$date}}][slots][{{$key}}][location]" class="js-placeholder-single-input form-control over-ride-location-select-ns ns-required" required data-day="{{$day}}" data-dayText="{{$dayText}}" data-date="{{$date}}" data-dateText="{{$dateText}}" >
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
            <input type="text" placeholder="0" class="form-control body-1 netural-100 pl-30 total_fee" name="override[{{$date}}][slots][{{$key}}][total_fee]" id="totalfee">
            <img src="{{asset('/images/icons/dollor.svg')}}" class="img-fluid left-icon">
        </div>
    </td>
    <td>
    <img src="{{asset('/images/icons/cross.svg')}}" class="img-fluid " alt="cross-icon" onClick="$(this).parent().parent().remove()">
    </td>
</tr>