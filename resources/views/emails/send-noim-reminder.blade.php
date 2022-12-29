<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td width="5%">&nbsp;</td>
        <td width="90%" align="left" valign="top">
            <font style="color:#df5555; font-size:24px"><strong style="font-weight:500"><em><span style="color:#464647"></span> Confirmation of your ceremony booking. <?php echo $data['first_name']; ?></em></strong></font><br />
            <hr style=" border-color:#BFBFBF" /><br />
            <font style="font-family: 'Open Sans',arial,  sans-serif; color:#3b3b3b; font-size:20px; line-height:24px">

            </font>
            <br />
            <font style="font-family: 'Open Sans', arial, sans-serif; color:#3b3b3b; font-size:13px; line-height:21px">

            </font><br>
            <font style="font-family: 'Open Sans', arial, sans-serif; color:#3b3b3b; font-size:12px; line-height:21px; font-weight: bold">


                <p>Hi {{ $data['first_couple_name'] }} & {{$data['second_couple_name']; }}, <br></br>
                <?php $one_month_prior =  date('y-m-d', strtotime('-30 days', strtotime($data['booking_date']))); ?>
                <p>So your marriage can go ahead at {{ucfirst($data['location_name'])}}, {{ucfirst($data->location->address)}} on {{Carbon\Carbon::createFromFormat('Y-m-d', $data['booking_date'])->format('l')}} the {{date('M d, Y', strtotime($data['booking_date']))}} at {{$data['booking_start_time']}} you must complete your NoIM no later than mid night on the {{$one_month_prior}}.</p><br><br>

                <p>Our records show that you have not lodged your NoIM, if this is not the case please contact us immediately. To check, please click to go to your portal  <a href="{{env('WEBSITE').'/user/NoIM';}}">Click here </a> </p><br><br>
                    
                <p>If you have not completed your NoIM please log into your portal and do so now. This must be completed before midnight on the {{$one_month_prior}}. </p><br>

                <p>If your NoIM is not lodged by this time we will not be able to marry you on the {{date('M d, Y', strtotime($data['booking_date']))}} and you will have to book a new date and pay again.</p><br>

                <p>If this is not the case and you have already lodged your NoIM please contact us immediately.</p><br>

                <p> Please let us know if you have any questions.</p><br>
                <p>Cheers</p><br><br>

                {{env('ADMINNAME')}}<br>
                {{ env('COMPANYNAME'); }}<br>


                            
                </p>
                </font>
           
            <font style="font-family: 'Open Sans', sans-serif; color:#fff; font-size:13px; line-height:21px">
                Thanks &amp; Regards,<br />
                {{ env('EMAILFOOTER') }} </font>
        </td>
        <td width="5%">&nbsp;</td>
    </tr>

</table>