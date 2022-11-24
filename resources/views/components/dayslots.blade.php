<tr class="custom-class-{{$day}}" data-keyid="0" data-target="custom-class-{{$day}}-unavailable">
    <td>
        <input type="checkbox" class="custom-class-{{$day}} custom-class-{{$day}}-unavailable" name="day[{{$day}}][available]" style="display:none">
        <div class="form-check">
            <input class="form-check-input ns-event-checkbox-uncheck" type="checkbox" name="day[{{$day}}]" id="1" checked autocomplete="off">
        </div>
    </td>
    <td class="h4 dark-blue-100">{{$dayText}}</td>
    <td style="min-width:200px">
        <div class="row">
            <div class="align-self-center col-lg-5 mb-3 mb-md-0">
            <select name="day[{{$day}}][0][start]" id="1" class="js-placeholder-single-input form-control">
                <option value="" disabled="" selected="" hidden="">--:--</option>
                <option value="1">9:00</option>
                <option value="2">9:30</option>
                <option value="2">10:00</option>
                <option value="2">10:30</option>
                <option value="2">11:00</option>
            </select>
            </div>
            <div class="align-self-center col-lg-2 text-center mb-3 mb-md-0">-</div>
            <div class="align-self-center col-lg-5">
            <select name="day[{{$day}}][0][end]" id="2" class="js-placeholder-single-input form-control">
                <option value="" disabled="" selected="" hidden="">--:--</option>
                <option value="1">9:00</option>
                <option value="2">9:30</option>
                <option value="2">10:00</option>
                <option value="2">10:30</option>
                <option value="2">11:00</option>
            </select>
            </div>
        </div>
    </td>
    <td>
        <div class="align-self-center " style="min-width:200px">
            <select name="day[{{$day}}][0][booking_length]" id="5" class="js-placeholder-single-input form-control">
            <option value="1" selected="">15 min</option>
            <option value="2">30 min</option>
            <option value="2">45 min</option>
            <option value="2">60 min</option>
            </select>
        </div>
    </td>
    <td style="min-width:100px">
        <div class=" theme-input-group">
            <input type="text" placeholder="120" class="form-control body-1 netural-100 pl-30" name="day[{{$day}}][0][your_fee]" id="yourfee">
            <img src="/images/icons/dollor.svg" class="img-fluid left-icon">
        </div>
    </td>
    <td style="min-width:100px">
        <div class=" theme-input-group">
            <input type="text" placeholder="120" class="form-control body-1 netural-100 pl-30" name="day[{{$day}}][0][admin_fee]" id="adminfee">
            <img src="/images/icons/dollor.svg" class="img-fluid left-icon">
        </div>
    </td>
    <td style="min-width:180px">
        <select name="day[{{$day}}][0][location]" id="3" class="js-placeholder-single-input form-control">
            <option value="1" selected="">Name location</option>
            <option value="2">Add name location $0</option>
            <option value="3">Add name location $0</option>
            <option value="4">Add name location $320</option>
            <option value="5">Add name location $210</option>
        </select>
    </td>
    <td style="min-width:100px">
        <div class=" theme-input-group">
            <input type="text" placeholder="0" class="form-control body-1 netural-100 pl-30" name="day[{{$day}}][0][total_fee]" id="totalfee">
            <img src="{{ asset('/images/icons/dollor.svg') }}" class="img-fluid left-icon">
        </div>
    </td>
    <td>
        <img src="/images/icons/cross.svg" class="img-fluid " alt="cross-icon">
    </td>
</tr>
<tr class="custom-class-{{$day}}-addon">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="8" class="pb-5"><a data-day="{{$day}}" data-class="custom-class-{{$day}}" data-url="{{ route('sub-slots-html-component') }}" class="get-sub-slots text-decoration-none turquoise-100 button-1 link-text">  <img class="me-2" src="/images/icons/add-primary.svg" alt="add-primary">
    Add more available times</a></td>
</tr>
<tr class="custom-class-{{$day}}-unavailable" data-target="custom-class-{{$day}}" style="display:none">
    <td>
        <div class="form-check">
            <input class="form-check-input ns-event-checkbox-check" type="checkbox" name="day[{{$day}}]" id="1"  autocomplete="off">
        </div>
    </td>
    <td class="h4 dark-blue-100 ">{{$dayText}}</td>
    <td colspan="7" ><span class="neutral-50  body-2">Unavailable</span></td>
</tr>