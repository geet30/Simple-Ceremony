
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
 

        <td width="5%">&nbsp;</td>
        <td width="90%" align="left" valign="top">
            <font style="color:#df5555; font-size:24px"><strong style="font-weight:500"><em><span style="color:#464647"></span>Your NoIM has now been lodged </em></strong></font><br /><hr style=" border-color:#BFBFBF" /><br />
            <font style="font-family: 'Open Sans',arial,  sans-serif; color:#3b3b3b; font-size:20px; line-height:24px">
            
            </font>
            <br />
            <font style="font-family: 'Open Sans', arial, sans-serif; color:#3b3b3b; font-size:13px; line-height:21px">
            
            </font><br>
            <font style="font-family: 'Open Sans', arial, sans-serif; color:#3b3b3b; font-size:12px; line-height:21px; font-weight: bold">
           
            </font>
    <center>
    <p>  
Body: Hi {{$data['first_couple_name']}} & {{$data['second_couple_name']}}, 

Your NoIM has now been lodged so we are all good to go ahead with your ceremony at {{ucfirst($data['location_name'])}}, {{ucfirst($data->location->address)}} on {{Carbon\Carbon::createFromFormat('Y-m-d', $data['booking_date'])->format('l')}} the {{date('M d, Y',strtotime($data['booking_date']))}} at {{$data['booking_start_time']}}.


Check out your personal portal <a href="{{env('WEBSITE').'/login'}}">Click here</a> to see how your ceremony will flow on the day and see if you would like to add any other services to your special day.

Cheers

{{env('ADMINNAME')}}<br>
{{ env('COMPANYNAME'); }}<br>

    </center>
    <font style="font-family: 'Open Sans', sans-serif; color:#fff; font-size:13px; line-height:21px">
    Thanks &amp; Regards,<br />
    {{ env('EMAILFOOTER') }} </font></td>
<td width="5%">&nbsp;</td>
</tr>

</table>