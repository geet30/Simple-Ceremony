<tr class="custom-class-{{$day}}" data-keyid="{{$key}}">
    <td>&nbsp;</td>
    <td class="h4 dark-blue-100">&nbsp;</td>
    <td style="min-width:200px">
        <div class="row">
            <div class="align-self-center col-lg-5 mb-3 mb-md-0">
            <select name="day[{{$day}}][{{$key}}][start]" id="1" class="js-placeholder-single-input form-control">
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
            <select name="day[{{$day}}][{{$key}}][end]" id="2" class="js-placeholder-single-input form-control">
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
            <select name="day[{{$day}}][{{$key}}][booking_length]" id="5" class="js-placeholder-single-input form-control">
            <option value="1" selected="">15 min</option>
            <option value="2">30 min</option>
            <option value="2">45 min</option>
            <option value="2">60 min</option>
            </select>
        </div>
    </td>
    <td style="min-width:100px">
        <div class=" theme-input-group">
            <input type="text" placeholder="120" class="form-control body-1 netural-100 pl-30" name="day[{{$day}}][{{$key}}][your_fee]" id="yourfee">
            <img src="/images/icons/dollor.svg" class="img-fluid left-icon">
        </div>
    </td>
    <td style="min-width:100px">
        <div class=" theme-input-group">
            <input type="text" placeholder="120" class="form-control body-1 netural-100 pl-30" name="day[{{$day}}][{{$key}}][admin_fee]" id="adminfee">
            <img src="/images/icons/dollor.svg" class="img-fluid left-icon">
        </div>
    </td>
    <td style="min-width:180px">
        <select name="day[{{$day}}][{{$key}}][location]" id="3" class="js-placeholder-single-input form-control">
            <option value="1" selected="">Name location</option>
            <option value="2">Add name location $0</option>
            <option value="3">Add name location $0</option>
            <option value="4">Add name location $320</option>
            <option value="5">Add name location $210</option>
        </select>
    </td>
    <td style="min-width:100px">
        <div class=" theme-input-group">
            <input type="text" placeholder="0" class="form-control body-1 netural-100 pl-30" name="day[{{$day}}][{{$key}}][total_fee]" id="totalfee">
            <img src="{{asset('/images/icons/dollor.svg')}}" class="img-fluid left-icon">
        </div>
    </td>
    <td>
    <img src="{{asset('/images/icons/cross.svg')}}" class="img-fluid " alt="cross-icon" onClick="$(this).parent().parent().remove()">
    </td>
</tr>