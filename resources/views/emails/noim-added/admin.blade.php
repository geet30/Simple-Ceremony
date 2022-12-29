<?php 
$price_info = json_decode($data['price_info']); 
$price_your_fee = (isset($price_info->your_fee )) ? $price_info->your_fee :0;
$price_admin_fee = (isset($price_info->admin_fee )) ? $price_info->admin_fee :0;
$price_location_fee=(isset($price_info->location_fee )) ?$price_info->location_fee :0;
$total_fee = $price_your_fee + $price_admin_fee+$price_location_fee;
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
 

        <td width="5%">&nbsp;</td>
        <td width="90%" align="left" valign="top">
            <font style="color:#df5555; font-size:24px"><strong style="font-weight:500"><em><span style="color:#464647"></span> 
            
            NoIM received {{$data["first_couple_name"]}} & {{ $data["second_couple_name"]}}, {{ date("M d, Y",strtotime($data["booking_date"])) }} {{$data["location_name"] }}
            </em></strong></font><br /><hr style=" border-color:#BFBFBF" /><br />
            <font style="font-family: 'Open Sans',arial,  sans-serif; color:#3b3b3b; font-size:20px; line-height:24px">
            
            </font>
            <br />
            <font style="font-family: 'Open Sans', arial, sans-serif; color:#3b3b3b; font-size:13px; line-height:21px">
            
            </font><br>
            <font style="font-family: 'Open Sans', arial, sans-serif; color:#3b3b3b; font-size:12px; line-height:21px; font-weight: bold">
           
            </font>
    <center>
    <p>  
    A NoIM has been received for {{$data['first_couple_name']}} & {{$data['second_couple_name']}}, <br><br>

Ceremony on {{date('M d, Y',strtotime($data['booking_date']))}}, {{ucfirst($data['location_name'])}} with {{$data->celebrant->name}}<br><br>

 <a href="{{env('ADMIN').'/marriages/detail/'.$data['id']}}">Please click here</a> and confirm all docs received, Names exactly match IDs, NoIM signed and witnessed by Authorised Person.<br><br>


If correct move status to “Lodged”.<br><br>

If missing docs move status to “Lodged (pending)” with notes<br><br>

If errors please, leave status and ask Couple to redo.<br><br>

    </center>
    <font style="font-family: 'Open Sans', sans-serif; color:#fff; font-size:13px; line-height:21px">
    Thanks &amp; Regards,<br />
    {{ env('EMAILFOOTER') }} </font></td>
<td width="5%">&nbsp;</td>
</tr>

</table>