<tr class="custom-class-{{$day}}" data-keyid="{{$key}}">
    <td>&nbsp;</td>
    <td class="h4 dark-blue-100">&nbsp;</td>
    <td style="min-width:200px">
        <div class="row">
            <div class="align-self-center col-lg-5 mb-3 mb-md-0">
            <select name="day[{{$day}}][slots][{{$key}}][start]" id="day[{{$day}}][slots][{{$key}}][start]" class="js-placeholder-single-input form-control ns-required" required>
                <option value="" disabled="" selected="" hidden="">--:--</option>
                @foreach($slots as $va)
                <option value="{{ $va }}">{{ $va }}</option>
                @endforeach
            </select>
            </div>
            <div class="align-self-center col-lg-2 text-center mb-3 mb-md-0">-</div>
            <div class="align-self-center col-lg-5">
            <select name="day[{{$day}}][slots][{{$key}}][end]" id="day[{{$day}}][slots][{{$key}}][end]" class="js-placeholder-single-input form-control ns-required" required>
                <option value="" disabled="" selected="" hidden="">--:--</option>
                @foreach($slots as $va)
                <option value="{{ $va }}">{{ $va }}</option>
                @endforeach
            </select>
            </div>
        </div>
    </td>
    <td>
        <div class="align-self-center " style="min-width:200px">
            <select name="day[{{$day}}][slots][{{$key}}][booking_length]" id="day[{{$day}}][slots][{{$key}}][booking_length]" class="js-placeholder-single-input form-control">
            <option value="15" selected="">15 min</option>
            <option value="30">30 min</option>
            <option value="45">45 min</option>
            <option value="60">60 min</option>
            </select>
        </div>
    </td>
    <td style="min-width:100px">
        <div class=" theme-input-group">
            <input type="text" placeholder="120" class="form-control body-1 netural-100 pl-30 your_fee" name="day[{{$day}}][slots][{{$key}}][your_fee]" id="yourfee" value="{{ $price->standard_fee ?? 0 }}" readonly>
            <img src="/images/icons/dollor.svg" class="img-fluid left-icon">
        </div>
    </td>
    <td style="min-width:100px">
        <div class=" theme-input-group">
            <input type="text" placeholder="120" class="form-control body-1 netural-100 pl-30 admin_fee" name="day[{{$day}}][slots][{{$key}}][admin_fee]" id="adminfee" value="{{ $price->admin_fee ?? 0 }}" readonly>
            <img src="/images/icons/dollor.svg" class="img-fluid left-icon">
        </div>
    </td>
    <td style="min-width:180px">
        <input type="hidden" name="day[{{$day}}][slots][{{$key}}][location_fee]" class="input-location_fee" value="">
        <select name="day[{{$day}}][slots][{{$key}}][location]" id="day[{{$day}}][slots][{{$key}}][location]" class="js-placeholder-single-input form-control location-select-ns ns-required" required>
            <option value="" selected="">Name location</option>
            @foreach($location as $loc)
                <option value="{{ $loc->id }}" data-price="{{ $loc->price }}">{{ $loc->name.' $'.$loc->price}}</option>
            @endforeach
            <!-- <option value="2">Add name location $0</option>
            <option value="3">Add name location $0</option>
            <option value="4">Add name location $320</option>
            <option value="5">Add name location $210</option> -->
        </select>
    </td>
    <td style="min-width:100px">
        <div class=" theme-input-group">
            <input type="text" placeholder="0" class="form-control body-1 netural-100 pl-30 total_fee" name="day[{{$day}}][slots][{{$key}}][total_fee]" id="totalfee">
            <img src="{{asset('/images/icons/dollor.svg')}}" class="img-fluid left-icon">
        </div>
    </td>
    <td>
    <img src="{{asset('/images/icons/cross.svg')}}" class="img-fluid " alt="cross-icon" onClick="$(this).parent().parent().remove()">
    </td>
</tr>