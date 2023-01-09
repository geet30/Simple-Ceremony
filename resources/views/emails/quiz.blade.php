
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
 

        <td width="5%">&nbsp;</td>
        <td width="90%" align="left" valign="top">
            <font style="color:#df5555; font-size:24px"><strong style="font-weight:500"><em><span style="color:#464647"></span> Hello Admin : Below are the Quiz Details </em></strong></font><br /><hr style=" border-color:#BFBFBF" /><br />
            <font style="font-family: 'Open Sans',arial,  sans-serif; color:#3b3b3b; font-size:20px; line-height:24px">
            
            </font>
            <br />
            <font style="font-family: 'Open Sans', arial, sans-serif; color:#3b3b3b; font-size:13px; line-height:21px">
            
            </font><br>
            <font style="font-family: 'Open Sans', arial, sans-serif; color:#3b3b3b; font-size:12px; line-height:21px; font-weight: bold">
           
            </font>
       <center>
            <p> Phone Number :  + <?php echo $data['phone_code'].$data['phone'] ?></p>
            <p> couple Name  : <?php echo $data['couple_one'] ?> & <?php echo $data['couple_two'] ?></p>
            <p>Are they both 18+ years old?  : <?php echo $data['age'] ?></p>
            <p> Are either of they legally married in Australia or any other country?  : <?php echo $data['country'] ?> </p>
            <p>Are they of the opposite sex?  :  <?php echo $data['gender'] ?> </p>
            <p> Are they related?  :  <?php echo $data['related'] ?> </p>
            <p> Do both of you choose freely to get married  : <?php echo $data['married'] ?> </p>
            <p> What is first couple Status?  : <?php echo $data['yourstatus'] ?> </p> 
            <p> What ID does first couple have?  : <?php echo $data['yourid'] ?> </p> 
            <p> Have couple been married before?   :  <?php echo $data['youmarried'] ?> </p> 
            <p> Does First Couple speak English   : <?php echo $data['yourlang'] ?> </p> 
            <p>What is the second couple Status  :  <?php echo $data['partnerstatus'] ?></p>
            <p>What ID does second couple have?  :  <?php echo $data['parnterid'] ?></p>
            <p>Is the partner’s been married before?  :  <?php echo $data['parntermarried'] ?></p>
            <p> Does First Couple speak English  :  <?php echo $data['parnterlang'] ?></p>
            <p> Marriage date is how long from today? :  <?php echo $data['marriagetime'] ?></p>
    </center>
    <font style="font-family: 'Open Sans', sans-serif; color:#fff; font-size:13px; line-height:21px">
    Thanks &amp; Regards,<br />
    {{ env('EMAILFOOTER') }} </font></td>
<td width="5%">&nbsp;</td>
</tr>

</table>