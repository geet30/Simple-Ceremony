<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td width="5%">&nbsp;</td>
        <td width="90%" align="left" valign="top">
            <font style="color:#df5555; font-size:24px"><strong style="font-weight:500"><em><span style="color:#464647"></span> Confirmation of your ceremony booking. <?php echo $data['first_name']; ?></em></strong></font><br /><hr style=" border-color:#BFBFBF" /><br />
            <font style="font-family: 'Open Sans',arial,  sans-serif; color:#3b3b3b; font-size:20px; line-height:24px">
            
            </font>
            <br />
            <font style="font-family: 'Open Sans', arial, sans-serif; color:#3b3b3b; font-size:13px; line-height:21px">
            
            </font><br>
            <font style="font-family: 'Open Sans', arial, sans-serif; color:#3b3b3b; font-size:12px; line-height:21px; font-weight: bold">
           
        
<p>Hi <?php echo $data['first_couple_name'].' & '.$data['second_couple_name']; ?> , thank you for booking your ceremony at <?php echo ucfirst($data['location_name'])?>, <?php echo ucfirst($data->location->address)?> on <?php Carbon\Carbon::createFromFormat('Y-m-d', $data['booking_date'])->format('l')?>  the <?php echo date('M d, Y',strtotime($data['booking_date']));?> at <?php echo $data['booking_start_time'];?>.<br><br>

Please read the critical information below now!<br><br>

Your action is required for you to get married. If this action is not carried out you will not be able to get married and lose any payments already made.<br><br>

We don’t want to scare you ;-) but this bit is critical.<br>

Critical Information<br>

<?php $one_month_prior =  date('y-m-d',strtotime('-30 days',strtotime($data['booking_date']))); ?>
<b>1. You must complete the Notice of Intended Marriage form (NoIM) no later than the  <?php echo date('M d, Y',strtotime($one_month_prior));?><b>.<br>

To complete the NoIM form you just need to:<br>
 
<a href="{{env('WEBSITE').'/user/NoIM';}}">Click here </a> and scan in your IDs, then type in your details into the NoIM. This is a legal document so all details must be completely accurate, without error or omission. Your details must exactly match the IDs you are using.
Sign the NoIM and have your signature witnessed by an Authorised Person
Upload other documents, if applicable<br>

2. The day of your Ceremony<br>
<a href="{{env('WEBSITE').'/single-location/'.$data['locationId']}}">Click here to see how you special day will flow and what you will need to bring on the day 
</a> <br>

3. Add-Ons for your special day <br>
We can help you arrange everything for your special day with just a few clicks. Click here to see our our amazing partners and check out the special pricing they can offer you.<a href="{{env('WEBSITE').'/login'}}">Click here</a> <br>

4. The Commonwealth Government of Australia<br>

The Australian Government has put together some information, to help you, on what it means to be married.<br>
The Australian Government recommends pre-marriage counselling. This is NOT a requirement to get married.<br>
However, you may find it useful. Here are some provides you may like to contact:<br>
Couples Counselling<br>
The Heart Centre<br>
Affinity Counselling<br>
Equilibrium Psychology<br>

Please let us know if you have any questions.<br>

Cheers<br><br>

{{env('ADMINNAME')}}<br>
{{ env('COMPANYNAME'); }}<br>


Additional Information for your assistance<br>
Tax Invoice<br>
MACB Family Pty Ltd T/A Simple Ceremonies<br>
ABN:24 137 901 574<br>
<?php echo date('M d,Y H:i');?><br>
To: <?php echo $data['first_couple_name'].' & '.$data['second_couple_name']; ?><br>
Ceremony Service<br>
<?php echo $data['booking_date'];?> at <?php echo $data['booking_start_time'];?>. @ <?php echo $data['location_name'];?>.<br>
<?php $price_info = json_decode($data['price_info']); 
$price_your_fee = (isset($price_info->your_fee )) ? $price_info->your_fee :0;
$price_admin_fee = (isset($price_info->admin_fee )) ? $price_info->admin_fee :0;
$price_location_fee=(isset($price_info->location_fee )) ?$price_info->location_fee :0;
$total_fee = $price_your_fee + $price_admin_fee+$price_location_fee;
?>
Total fee including gst: <?php echo '$'.$total_fee;?><br>
Paid in full - <?php echo date('M d,Y H:i:a');?><br>
Terms and Conditions<br><br>

For your reference, below are the Booking Conditions you agreed to when making your booking click here <a href="{{ env('WEBSITE').'/term-and-condition';}}">Terms and Conditions</a><br><br>
Complaints
If at any time you are not completely satisfied with the service provided by Simple Ceremonies, please don't hesitate to contact us. If you are then not happy with the resolution provided by Simple Ceremonies, you can make a formal complaint to the Attorney General (who administers Marriage Celebrants)</p>
            </font>
    <center>
        
    </center>
    <font style="font-family: 'Open Sans', sans-serif; color:#fff; font-size:13px; line-height:21px">
    Thanks &amp; Regards,<br />
    {{ env('EMAILFOOTER') }} </font></td>
<td width="5%">&nbsp;</td>
</tr>

</table>