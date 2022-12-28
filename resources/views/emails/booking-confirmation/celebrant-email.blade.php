<?php $price_info = json_decode($data['price_info']); 
$price_your_fee = (isset($price_info->your_fee )) ? $price_info->your_fee :0;
$price_admin_fee = (isset($price_info->admin_fee )) ? $price_info->admin_fee :0;
$price_location_fee=(isset($price_info->location_fee )) ?$price_info->location_fee :0;
$total_fee = $price_your_fee + $price_admin_fee+$price_location_fee;
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td width="5%">&nbsp;</td>
        <td width="90%" align="left" valign="top">
            <font style="color:#df5555; font-size:24px"><strong style="font-weight:500"><em><span style="color:#464647"></span>New Booking: {{date('M d, Y',strtotime($data['booking_date']))}} at {{ucfirst($data['location_name'])}}. Fee ${{$price_your_fee}}</em></strong></font><br /><hr style=" border-color:#BFBFBF" /><br />
            <font style="font-family: 'Open Sans',arial,  sans-serif; color:#3b3b3b; font-size:20px; line-height:24px">
            
            </font>
            <br />
            <font style="font-family: 'Open Sans', arial, sans-serif; color:#3b3b3b; font-size:13px; line-height:21px">
            
            </font><br>
            <font style="font-family: 'Open Sans', arial, sans-serif; color:#3b3b3b; font-size:12px; line-height:21px; font-weight: bold">
           
           
            </font>
    <center>
    <p>          
    {{$data->type_of_ceremony->ceremony_name}},  {{date('M d, Y',strtotime($data['booking_date']))}}, {{$data['booking_start_time']}}, {{ucfirst($data['location_name'])}}, {{$data->celebrant->name}}.</p><br>

 <p>Couple Name: {{$data['first_couple_name']}} & {{$data['second_couple_name']}}</p><br>
Couples Email: {{$data->user->email}}<br>
Couples Phone: +{{$data->user->country_code}}{{$data->user->phone}}<br>

<p>Gross Fee : ${{$total_fee}}</p><br>
<p>Your Fee : ${{$price_your_fee}}</p><br><br>

    </center>
    <font style="font-family: 'Open Sans', sans-serif; color:#fff; font-size:13px; line-height:21px">
    Thanks &amp; Regards,<br />
    {{ env('EMAILFOOTER') }} </font></td>
<td width="5%">&nbsp;</td>
</tr>

</table>